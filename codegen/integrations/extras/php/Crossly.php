<?php

declare(strict_types=1);

namespace Crossly;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Psr\Http\Message\RequestInterface;

/**
 * The Crossly client: the generated API classes, configured once, with the things every integration rewrites.
 *
 *     $crossly = Crossly\Crossly::seller(getenv('CROSSLY_TOKEN'));        // crossly_pat_…
 *     $page = $crossly->listings()->listListings(1, 25);                  // Crossly\Api\ListingsApi
 *     foreach ($crossly->paginate(fn ($p, $l) => $crossly->listings()->listListings($p, $l)) as $row) { … }
 *
 *  - retries 429 and transient 5xx (500/502/503/504) and dropped connections, with exponential backoff, honouring
 *    Retry-After;
 *  - an Idempotency-Key on every POST and PATCH (the same key on each retry, so a retried write is replayed by the
 *    API, never applied twice); idempotent($key, fn) to choose the key yourself;
 *  - timeouts (30 s per request, 10 s to connect by default);
 *  - User-Agent crossly-php/<version>;
 *  - a failed call throws CrosslyError with getErrorCode() and getCorrelationId().
 *
 * Crossly::buyer($oauthToken) is the same over the buyer client (Crossly\Buyer\Api\…).
 *
 * Hand-written, shipped with the generated client (crossly/crossly).
 */
final class Crossly
{
    private string $namespace;
    private object $config;
    private ClientInterface $http;
    private string $version;
    /** @var array<string, CrosslyApi> */
    private array $apis = [];
    private ?string $pendingKey = null;

    /**
     * @param array{
     *   baseUrl?: string, timeout?: float, connectTimeout?: float, maxRetries?: int, backoffBaseMs?: int,
     *   maxBackoffMs?: int, maxRetryAfterMs?: int, idempotency?: bool, userAgent?: string,
     *   headers?: array<string, string>, handler?: callable, sleep?: callable, onRetry?: callable
     * } $options
     */
    public static function seller(string $token, array $options = []): self
    {
        return new self('Crossly', $token, $options);
    }

    /** @param array<string, mixed> $options the same options as seller() */
    public static function buyer(string $token, array $options = []): self
    {
        return new self('Crossly\\Buyer', $token, $options);
    }

    /** @param array<string, mixed> $options */
    private function __construct(string $namespace, string $token, array $options)
    {
        if ($token === '') {
            throw new \InvalidArgumentException('A Crossly token is required (crossly_pat_… for seller, crossly_oat_… for buyer).');
        }
        $this->namespace = $namespace;
        $configClass = $namespace . '\\Configuration';
        if (!class_exists($configClass)) {
            throw new \LogicException("{$configClass} not found: is the " . ($namespace === 'Crossly' ? 'seller' : 'buyer') . ' client installed and autoloaded?');
        }
        $config = new $configClass();
        // The generated default is "OpenAPI-Generator/<version>/PHP": the version this client was generated as.
        $this->version = preg_match('#/([0-9][^/]*)/PHP$#', (string) $config->getUserAgent(), $m) ? $m[1] : '0.0.0';
        $config->setAccessToken($token);
        $config->setUserAgent(trim('crossly-php/' . $this->version . ' ' . ($options['userAgent'] ?? '')));
        if (isset($options['baseUrl'])) {
            $config->setHost(rtrim((string) $options['baseUrl'], '/'));
        }
        $this->config = $config;

        $stack = HandlerStack::create($options['handler'] ?? null);
        $extra = $options['headers'] ?? [];
        $idempotency = $options['idempotency'] ?? true;
        // Pushed before the retry middleware, so it wraps it: the key is chosen once per call, and every retry of
        // that call sends the same one.
        $stack->push(Middleware::mapRequest(function (RequestInterface $r) use ($extra, $idempotency): RequestInterface {
            foreach ($extra as $name => $value) {
                if (!$r->hasHeader($name)) {
                    $r = $r->withHeader($name, $value);
                }
            }
            if ($idempotency && in_array($r->getMethod(), ['POST', 'PATCH'], true) && !$r->hasHeader('Idempotency-Key')) {
                $r = $r->withHeader('Idempotency-Key', $this->pendingKey ?? self::uuid4());
            }
            return $r;
        }), 'crossly_headers');
        $stack->push(new CrosslyRetryMiddleware($options), 'crossly_retry');
        $this->http = new Client([
            'handler' => $stack,
            'timeout' => (float) ($options['timeout'] ?? 30.0),
            'connect_timeout' => (float) ($options['connectTimeout'] ?? 10.0),
        ]);
    }

    /**
     * One API group: 'Listings', 'ListingsApi' or ListingsApi::class. Cached per group.
     */
    public function api(string $group): CrosslyApi
    {
        $short = preg_replace('/^.*\\\\/', '', $group);
        if (substr($short, -3) !== 'Api') {
            $short .= 'Api';
        }
        if (!isset($this->apis[$short])) {
            $class = $this->namespace . '\\Api\\' . $short;
            if (!class_exists($class)) {
                throw new \BadMethodCallException("No API group {$class} in this client");
            }
            $this->apis[$short] = new CrosslyApi(new $class($this->http, $this->config), $this->namespace . '\\ApiException');
        }
        return $this->apis[$short];
    }

    /**
     * $crossly->listings() is $crossly->api('Listings'), $crossly->tradeBlock() is api('TradeBlock'). Groups whose
     * name is an acronym keep it: api('AI'), api('NFTMarket'). seller() and buyer() are the static constructors,
     * so the group named Buyer is api('Buyer'), never ->buyer().
     *
     * @param array<int, mixed> $args
     */
    public function __call(string $name, array $args): CrosslyApi
    {
        if ($args !== []) {
            throw new \BadMethodCallException("Crossly::{$name}() takes no arguments; call the operation on the API it returns");
        }
        return $this->api(ucfirst($name));
    }

    /**
     * Every row of a paged list, fetching pages lazily. $fetch(int $page, int $limit) makes one call and returns its
     * `{ data, pagination }` response; paging stops at pagination.totalPages, or at a short or empty page.
     *
     *     foreach ($crossly->paginate(fn ($page, $limit) => $crossly->orders()->listOrders($page, $limit)) as $order) { … }
     *
     * @return \Generator<int, mixed>
     */
    public function paginate(callable $fetch, int $limit = 100, int $startPage = 1): \Generator
    {
        for ($page = $startPage; ; $page++) {
            $response = $fetch($page, $limit);
            $rows = self::field($response, 'data') ?? [];
            $count = 0;
            foreach ($rows as $row) {
                $count++;
                yield $row;
            }
            $pagination = self::field($response, 'pagination');
            if ($count === 0 || $pagination === null) {
                return;
            }
            $totalPages = self::field($pagination, 'totalPages') ?? self::field($pagination, 'pages');
            if ($totalPages !== null ? $page >= (int) $totalPages : $count < $limit) {
                return;
            }
        }
    }

    /**
     * Run $fn with $key as the Idempotency-Key of the writes it makes: use a key you can recompute (an order id, a
     * job id) when the retry may come from a later process, not only from this client's own retries.
     *
     * @return mixed what $fn returns
     */
    public function idempotent(string $key, callable $fn)
    {
        $previous = $this->pendingKey;
        $this->pendingKey = $key;
        try {
            return $fn($this);
        } finally {
            $this->pendingKey = $previous;
        }
    }

    /** The generated Configuration (Crossly\Configuration or Crossly\Buyer\Configuration). */
    public function getConfig(): object
    {
        return $this->config;
    }

    /** The Guzzle client every API group shares (retries, headers and timeouts included). */
    public function getHttpClient(): ClientInterface
    {
        return $this->http;
    }

    /** The version this client was generated as (the User-Agent's). */
    public function getVersion(): string
    {
        return $this->version;
    }

    /** @return mixed */
    private static function field($value, string $name)
    {
        if (is_array($value)) {
            return $value[$name] ?? null;
        }
        if (is_object($value)) {
            $getter = 'get' . ucfirst($name);
            if (method_exists($value, $getter)) {
                return $value->{$getter}();
            }
            if ($value instanceof \ArrayAccess) {
                return $value[$name] ?? null;
            }
            return $value->{$name} ?? null;
        }
        return null;
    }

    private static function uuid4(): string
    {
        $b = random_bytes(16);
        $b[6] = chr((ord($b[6]) & 0x0f) | 0x40);
        $b[8] = chr((ord($b[8]) & 0x3f) | 0x80);
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($b), 4));
    }
}
