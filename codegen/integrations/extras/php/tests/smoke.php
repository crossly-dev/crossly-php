<?php

// Exercise the hand-written layer against the generated client, with a mocked transport (no network).
//
//   php smoke.php <seller|buyer> <path/to/vendor/autoload.php>
//
// Run by codegen/ci/check-php.sh on every build. Not shipped in the package.

declare(strict_types=1);

use Crossly\Crossly;
use Crossly\CrosslyError;
use Crossly\CrosslyWebhooks;
use Crossly\LaravelWebhookMiddleware;
use Crossly\Psr15WebhookMiddleware;
use Crossly\SymfonyWebhookListener;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\HttpFactory;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\ServerRequest;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

[$_, $api, $autoload] = $argv + [null, 'seller', 'vendor/autoload.php'];
require $autoload;

$failures = 0;
$checks = 0;
function check(bool $ok, string $what): void
{
    global $failures, $checks;
    $checks++;
    if (!$ok) {
        $failures++;
        echo "  FAIL {$what}\n";
    }
}

/** A client over a mocked transport; $seen collects every request sent, $sleeps every backoff. */
function client(string $api, array $responses, array &$seen, array &$sleeps, array $options = []): Crossly
{
    $mock = new MockHandler($responses);
    $handler = static function ($request, array $opts) use ($mock, &$seen) {
        $seen[] = $request;
        return $mock($request, $opts);
    };
    $options += ['handler' => $handler, 'sleep' => static function (int $ms) use (&$sleeps): void {
        $sleeps[] = $ms;
    }, 'backoffBaseMs' => 100];
    return $api === 'buyer' ? Crossly::buyer('crossly_oat_test', $options) : Crossly::seller('crossly_pat_test', $options);
}

$json = ['Content-Type' => 'application/json'];
$page = static fn (array $rows, int $p, int $totalPages) => new Response(200, ['Content-Type' => 'application/json'], (string) json_encode([
    'data' => $rows,
    'pagination' => ['page' => $p, 'limit' => 2, 'total' => 3, 'totalPages' => $totalPages],
]));

// 1. retries: 429 with Retry-After, then 503, then success; headers on every attempt.
$seen = $sleeps = [];
$c = client($api, [
    new Response(429, $json + ['Retry-After' => '2'], '{"error":{"code":"rate_limited","message":"slow down"}}'),
    new Response(503, $json, '{"error":{"code":"unavailable","message":"busy"}}'),
    $page([['id' => 'a'], ['id' => 'b']], 1, 2),
], $seen, $sleeps);
$http = $c->getHttpClient();
$base = rtrim((string) $c->getConfig()->getHost(), '/');
check($base === 'https://crossly.net/api', "default host is https://crossly.net/api (got {$base})");
$res = $http->request('GET', $base . '/v1/listings?page=1&limit=2');
check($res->getStatusCode() === 200, 'retried through 429 and 503 to a 200');
check(count($seen) === 3, '3 attempts (got ' . count($seen) . ')');
check(($sleeps[0] ?? null) === 2000, 'first backoff honours Retry-After: 2 (got ' . json_encode($sleeps) . ')');
check(isset($sleeps[1]) && $sleeps[1] >= 100 && $sleeps[1] <= 200, 'second backoff is exponential, 100..200 ms (got ' . json_encode($sleeps) . ')');
check(!$seen[0]->hasHeader('Idempotency-Key'), 'no Idempotency-Key on a GET');

// 2. through a generated API group: auth, User-Agent, typed error with code + correlationId.
$seen = $sleeps = [];
$c = client($api, [
    $page([['id' => 'a'], ['id' => 'b']], 1, 2),
    new Response(404, $json + ['X-Correlation-Id' => 'corr_header'], '{"error":{"code":"not_found","message":"No such thing","details":{"id":"x"}},"correlationId":"corr_body"}'),
], $seen, $sleeps);
$group = $api === 'buyer' ? $c->api('Buyer') : $c->listings();
$call = $api === 'buyer'
    ? static fn (int $p, int $l) => $group->listBuyerOrders($p, $l)
    : static fn (int $p, int $l) => $group->listListings($p, $l);
$first = $call(1, 2);
check(count($first->getData()) === 2, 'generated call deserialises { data }');
check($seen[0]->getHeaderLine('Authorization') === ($api === 'buyer' ? 'Bearer crossly_oat_test' : 'Bearer crossly_pat_test'), 'Bearer token sent');
check((bool) preg_match('#^crossly-php/[0-9]+\.[0-9]+\.[0-9]+#', $seen[0]->getHeaderLine('User-Agent')), 'User-Agent crossly-php/<version> (got ' . $seen[0]->getHeaderLine('User-Agent') . ')');
check($c->getVersion() !== '0.0.0', 'version read from the generated Configuration');
try {
    $call(2, 2);
    check(false, '404 throws');
} catch (CrosslyError $e) {
    check($e->getStatus() === 404 && $e->getCode() === 404, 'CrosslyError status 404');
    check($e->getErrorCode() === 'not_found', 'CrosslyError code from the envelope (got ' . $e->getErrorCode() . ')');
    check($e->getCorrelationId() === 'corr_body', 'CrosslyError correlationId from the envelope');
    check($e->getDetails() === ['id' => 'x'], 'CrosslyError details');
    check($e->getMessage() === 'No such thing', 'CrosslyError message');
}
check(count($seen) === 2, 'a 404 is not retried');

// 3. retries give up after maxRetries, then throw the last error.
$seen = $sleeps = [];
$c = client($api, array_fill(0, 4, new Response(500, $json, '{"error":{"code":"internal","message":"boom"},"correlationId":"c5"}')), $seen, $sleeps, ['maxRetries' => 3]);
$group = $api === 'buyer' ? $c->api('Buyer') : $c->listings();
try {
    $api === 'buyer' ? $group->listBuyerOrders(1, 2) : $group->listListings(1, 2);
    check(false, 'persistent 500 throws');
} catch (CrosslyError $e) {
    check($e->getStatus() === 500 && $e->getErrorCode() === 'internal' && $e->getCorrelationId() === 'c5', 'last 500 surfaces as CrosslyError');
}
check(count($seen) === 4, '1 attempt + 3 retries (got ' . count($seen) . ')');

// 4. writes: one Idempotency-Key per call, the same on its retries; idempotent() chooses it.
$seen = $sleeps = [];
$c = client($api, [new Response(502), new Response(200, $json, '{"data":{}}'), new Response(200, $json, '{"data":{}}'), new Response(200, $json, '{"data":{}}')], $seen, $sleeps);
$c->getHttpClient()->request('POST', $base . '/v1/anything', ['json' => ['a' => 1]]);
$k0 = $seen[0]->getHeaderLine('Idempotency-Key');
check((bool) preg_match('/^[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/', $k0), "POST carries a v4 UUID Idempotency-Key (got {$k0})");
check($seen[1]->getHeaderLine('Idempotency-Key') === $k0, 'the retry reuses the same key');
check((string) $seen[1]->getBody() === '{"a":1}', 'the retry resends the body');
$c->getHttpClient()->request('PATCH', $base . '/v1/anything');
check($seen[2]->getHeaderLine('Idempotency-Key') !== '' && $seen[2]->getHeaderLine('Idempotency-Key') !== $k0, 'a new call gets a new key');
$c->idempotent('order-42-refund', static fn (Crossly $x) => $x->getHttpClient()->request('POST', $base . '/v1/anything'));
check($seen[3]->getHeaderLine('Idempotency-Key') === 'order-42-refund', 'idempotent() sets the key');

// 5. pagination: follows totalPages, and stops on a short page without one.
$seen = $sleeps = [];
$c = client($api, [$page([['id' => 'a'], ['id' => 'b']], 1, 2), $page([['id' => 'c']], 2, 2)], $seen, $sleeps);
$group = $api === 'buyer' ? $c->api('Buyer') : $c->listings();
$ids = [];
foreach ($c->paginate(static fn (int $p, int $l) => $api === 'buyer' ? $group->listBuyerOrders($p, $l) : $group->listListings($p, $l), 2) as $row) {
    $ids[] = $row->getId();
}
check($ids === ['a', 'b', 'c'], 'paginate yields every row across pages (got ' . json_encode($ids) . ')');
check(count($seen) === 2, 'paginate stops at totalPages');
$calls = 0;
$rows = iterator_to_array($c->paginate(static function (int $p, int $l) use (&$calls) {
    $calls++;
    return ['data' => $p === 1 ? [1, 2] : [3], 'pagination' => ['page' => $p, 'limit' => $l]];
}, 2), false);
check($rows === [1, 2, 3] && $calls === 2, 'paginate without totalPages stops on a short page');

// 6. webhook middleware.
$secret = 'whsec_smoke';
$body = '{"id":"evt_1","type":"listing.sold","created":"2026-01-01T00:00:00.000Z","data":{"listingId":"lst_1"}}';
$t = time();
$good = "t={$t},v1=" . hash_hmac('sha256', "{$t}.{$body}", $secret);
$bad = "t={$t},v1=" . str_repeat('0', 64);

// Laravel, with a stand-in for Illuminate\Http\Request (getContent, header, attributes->set).
$bag = new class {
    public array $items = [];
    public function set(string $k, $v): void { $this->items[$k] = $v; }
    public function get(string $k) { return $this->items[$k] ?? null; }
};
$laravelRequest = static fn (string $sig) => new class ($body, $sig, clone $bag) {
    public $attributes;
    private string $b;
    private string $s;
    public function __construct(string $b, string $s, $attributes) { $this->b = $b; $this->s = $s; $this->attributes = $attributes; }
    public function getContent() { return $this->b; }
    public function header(string $n) { return strtolower($n) === 'crossly-signature' ? $this->s : null; }
};
putenv("CROSSLY_WEBHOOK_SECRET={$secret}");
$mw = new LaravelWebhookMiddleware();
$req = $laravelRequest($good);
$out = $mw->handle($req, static fn ($r) => 'next');
check($out === 'next' && ($req->attributes->get('crossly_event')['type'] ?? null) === 'listing.sold', 'Laravel: verified request reaches the controller with the event');
try {
    $out = $mw->handle($laravelRequest($bad), static fn ($r) => 'next');
    check(false, 'Laravel: bad signature is rejected');
} catch (\Crossly\WebhookVerificationError $e) {
    // Outside Laravel there is no JsonResponse class to build the 400 with, so it rethrows.
    check($e->reason === 'bad_signature', 'Laravel: bad signature is rejected (bad_signature)');
}

// Symfony, with stand-ins for RequestEvent and Request.
$symfonyEvent = static fn (string $sig, string $path) => new class ($body, $sig, $path, clone $bag) {
    public $response = null;
    private $request;
    public function __construct(string $b, string $s, string $p, $attributes)
    {
        $this->request = new class ($b, $s, $p, $attributes) {
            public $attributes;
            public $headers;
            private string $b;
            private string $p;
            public function __construct(string $b, string $s, string $p, $attributes)
            {
                $this->b = $b;
                $this->p = $p;
                $this->attributes = $attributes;
                $this->headers = new class ($s) {
                    private string $s;
                    public function __construct(string $s) { $this->s = $s; }
                    public function get(string $n) { return strtolower($n) === 'crossly-signature' ? $this->s : null; }
                };
            }
            public function getContent() { return $this->b; }
            public function getPathInfo() { return $this->p; }
        };
    }
    public function isMainRequest(): bool { return true; }
    public function getRequest() { return $this->request; }
    public function setResponse($r): void { $this->response = $r; }
};
$listener = new SymfonyWebhookListener($secret, ['/webhooks/crossly']);
$ev = $symfonyEvent($good, '/webhooks/crossly');
$listener($ev);
check($ev->response === null && ($ev->getRequest()->attributes->get('crossly_event')['id'] ?? null) === 'evt_1', 'Symfony: verified request carries the event');
$ev = $symfonyEvent($bad, '/somewhere/else');
$listener($ev);
check($ev->response === null && $ev->getRequest()->attributes->get('crossly_event') === null, 'Symfony: other paths are left alone');
try {
    $listener($symfonyEvent($bad, '/webhooks/crossly'));
    check(false, 'Symfony: bad signature is rejected');
} catch (\Crossly\WebhookVerificationError $e) {
    check($e->reason === 'bad_signature', 'Symfony: bad signature is rejected (bad_signature)');
}

// PSR-15, with Guzzle's PSR-7 / PSR-17 implementations.
$psr = new Psr15WebhookMiddleware($secret, new HttpFactory());
$terminal = new class implements RequestHandlerInterface {
    public ?ServerRequestInterface $got = null;
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $this->got = $request;
        return new Response(204);
    }
};
$r = $psr->process(new ServerRequest('POST', '/webhooks/crossly', ['Crossly-Signature' => $good], $body), $terminal);
check($r->getStatusCode() === 204 && ($terminal->got->getAttribute('crossly_event')['type'] ?? null) === 'listing.sold', 'PSR-15: verified request reaches the handler with the event');
check((string) $terminal->got->getBody() === $body, 'PSR-15: body left readable');
$terminal->got = null;
$r = $psr->process(new ServerRequest('POST', '/webhooks/crossly', ['Crossly-Signature' => $bad], $body), $terminal);
$err = json_decode((string) $r->getBody(), true);
check($r->getStatusCode() === 400 && ($err['error']['code'] ?? null) === 'bad_signature' && $terminal->got === null, 'PSR-15: bad signature gets a 400 bad_signature');
$r = (new Psr15WebhookMiddleware('', new HttpFactory()))->process(new ServerRequest('POST', '/webhooks/crossly', ['Crossly-Signature' => $good], $body), $terminal);
check($r->getStatusCode() === 500, 'PSR-15: no secret configured is a 500');
check(CrosslyWebhooks::DEFAULT_TOLERANCE_SECONDS === 300, 'verifier default tolerance 300 s');

echo "  php extras ({$api}): " . ($checks - $failures) . "/{$checks} checks pass\n";
exit($failures > 0 ? 1 : 0);
