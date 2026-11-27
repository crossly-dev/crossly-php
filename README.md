# Crossly PHP SDK

[![ci](https://github.com/crossly-dev/crossly-php/actions/workflows/ci.yml/badge.svg)](https://github.com/crossly-dev/crossly-php/actions/workflows/ci.yml) [![release](https://github.com/crossly-dev/crossly-php/actions/workflows/release.yml/badge.svg)](https://github.com/crossly-dev/crossly-php/actions/workflows/release.yml) [![Packagist](https://img.shields.io/packagist/v/crossly/crossly)](https://packagist.org/packages/crossly/crossly) [![license](https://img.shields.io/badge/license-MIT-blue)](LICENSE)

Official PHP clients for the [Crossly](https://crossly.net) API: list once and sell across every marketplace, read
orders, manage inventory, and receive signed webhooks. Generated from the public OpenAPI specs and released
automatically when they change, with signed build provenance.

## Install

| client | for | install |
|---|---|---|
| seller | your store: listings, crossposting, orders, analytics | `composer require crossly/crossly` |
| buyer | shopping: cart, orders, wishlists, offers, cashback | `composer require crossly/crossly  (same package: Crossly\Buyer\…)` |

## Two clients, two credentials

| client | credential |
|---|---|
| seller | a Personal Access Token (`crossly_pat_…`, Settings → Developer) or a seller OAuth token |
| buyer | a buyer OAuth token (`crossly_oat_…`) with `buyer:*` scopes |

They are not interchangeable: a seller token is refused by the buyer API and the reverse, even for the same
Crossly account. A 401 from a call that looks right usually means the other client's token.

## First call

```php
<?php
require 'vendor/autoload.php';

$crossly = Crossly\Crossly::seller(getenv('CROSSLY_TOKEN'));   // crossly_pat_…

// $crossly->listings() is Crossly\Api\ListingsApi; every generated method, unchanged
$page = $crossly->listings()->listListings(1, 25);
foreach ($page->getData() as $listing) {
    echo $listing->getId(), ' ', $listing->getTitle(), ' ', $listing->getStatus(), PHP_EOL;
}
```

The generated classes also work on their own:

```php
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken(getenv('CROSSLY_TOKEN'));
$listings = new Crossly\Api\ListingsApi(new GuzzleHttp\Client(), $config);
$page = $listings->listListings(1, 25);
```

List calls return `{ data, pagination }` and page with `page` and `limit`. Money fields named `…_cents` are
integer cents. Through `Crossly\Crossly`, a failed call throws `Crossly\CrosslyError` with `getStatus()`, `getErrorCode()` (the API's `error.code`), `getMessage()`, `getDetails()` and `getCorrelationId()`, the id support can trace; the bare generated classes throw `Crossly\ApiException` with `getCode()` (the HTTP status) and `getResponseBody()`.

## Webhooks

Crossly signs every webhook with `Crossly-Signature: t=<unix>,v1=<hex HMAC-SHA256 of "t.body">`. The verifier
ships in the seller and buyer packages and checks the signature in constant time, rejects a timestamp more than
five minutes old, and returns the parsed event:

```php
use Crossly\CrosslyWebhooks;
use Crossly\WebhookVerificationError;

$raw = file_get_contents('php://input');   // the exact bytes received; read it once
try {
    $event = CrosslyWebhooks::verify($raw, $_SERVER['HTTP_CROSSLY_SIGNATURE'] ?? null, getenv('CROSSLY_WEBHOOK_SECRET'));
} catch (WebhookVerificationError $e) {
    http_response_code(400);   // $e->reason: bad_signature, timestamp_out_of_tolerance, malformed_header
    exit;
}
// $event['id'], $event['type'], $event['created'], $event['data']
```

Verify the raw bytes, not a re-serialised body. `webhooks/` holds the same verifier on its own, with the shared
test vectors every language's port is checked against on each build.

## One package, two namespaces

`crossly/crossly` holds both clients: `Crossly\` (seller, `seller/lib`) and `Crossly\Buyer\` (buyer, `buyer/lib`).
`Crossly\Crossly::buyer($oauthToken)` is the facade over the buyer client: `->api('Buyer')->listBuyerOrders(1, 25)`
(`seller()` and `buyer()` are the constructors, so the API group named Buyer is reached with `api()`).

## The `Crossly` client

`Crossly\Crossly::seller($token, $options)` configures the generated client once and adds what every integration
otherwise writes by hand:

- **Retries**: 429, 500, 502, 503, 504 and dropped connections are retried (3 times by default) with exponential
  backoff, waiting what `Retry-After` says when the API sends it.
- **Idempotent writes**: every POST and PATCH carries an `Idempotency-Key` (one per call, the same on each of its
  retries), so the API replays a retried write instead of applying it twice. Choose the key yourself when the
  retry may come from another process: `$crossly->idempotent("refund-$orderId", fn ($c) => …)`.
- **Pagination**: `paginate(fn ($page, $limit) => …)` yields every row of a `{ data, pagination }` list, page by
  page, stopping at `pagination.totalPages` (or a short page).
- **Timeouts**: 30 s per request, 10 s to connect.
- **User-Agent** `crossly-php/<version>`; **errors** as `Crossly\CrosslyError`.

```php
foreach ($crossly->paginate(fn ($page, $limit) => $crossly->orders()->listOrders($page, $limit)) as $order) {
    echo $order->getId(), PHP_EOL;
}

try {
    $crossly->listings()->getListing('lst_missing');
} catch (Crossly\CrosslyError $e) {
    error_log("{$e->getStatus()} {$e->getErrorCode()} {$e->getMessage()} (correlation id {$e->getCorrelationId()})");
}
```

`$crossly->listings()` is `$crossly->api('Listings')`; groups named with an acronym keep it (`api('AI')`,
`api('NFTMarket')`), and `->raw()` returns the generated object.

| option | default | |
|---|---|---|
| `baseUrl` | `https://crossly.net/api` | e.g. the sandbox, `https://sandbox.crossly.net/api` |
| `timeout`, `connectTimeout` | `30.0`, `10.0` | seconds |
| `maxRetries` | `3` | `0` turns retries off |
| `backoffBaseMs`, `maxBackoffMs`, `maxRetryAfterMs` | `500`, `20000`, `120000` | |
| `idempotency` | `true` | stamp POST/PATCH with an `Idempotency-Key` |
| `headers` | `[]` | sent on every request, e.g. `['X-Storefront-Id' => $storeId]` |
| `userAgent` | | appended after `crossly-php/<version>` |
| `handler`, `onRetry` | | a Guzzle handler (proxies, tests); a callback `(attempt, delayMs, response, error)` |

## Webhook middleware

Each verifies the signature over the raw body, answers 400 with `{ "error": { "code", "message" } }` when it does
not verify, and otherwise hands the event to your code as the request attribute `crossly_event`. None of them
makes the package depend on a framework.

**Laravel** (secret from `config('services.crossly.webhook_secret')`, else `CROSSLY_WEBHOOK_SECRET`):

```php
Route::post('/webhooks/crossly', CrosslyWebhookController::class)
    ->middleware(\Crossly\LaravelWebhookMiddleware::class)
    ->withoutMiddleware(\Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class);

// in the controller: $event = $request->attributes->get('crossly_event');
```

**Symfony** (a `kernel.request` listener, limited to the paths you list):

```yaml
# config/services.yaml
Crossly\SymfonyWebhookListener:
    arguments:
        $secret: '%env(CROSSLY_WEBHOOK_SECRET)%'
        $paths: ['/webhooks/crossly']
    tags:
        - { name: kernel.event_listener, event: kernel.request, priority: 8 }
```

**PSR-15** (Slim, Mezzio, Laminas, …), given any PSR-17 response factory:

```php
$app->post('/webhooks/crossly', $handler)
    ->add(new \Crossly\Psr15WebhookMiddleware(getenv('CROSSLY_WEBHOOK_SECRET'), $responseFactory));
```

Runnable versions are in [examples/](examples/).

## Where things are

| client | API classes | models | API reference pages |
|---|---|---|---|
| seller | `seller/lib/Api/` | `seller/lib/Model/<Area>/` | `seller/docs/Api/` |
| buyer | `buyer/lib/Api/` | `buyer/lib/Model/<Area>/` | `buyer/docs/Api/` |

One class per API group (`OrdersApi`, `ListingsApi`, …), one model per type, the
models grouped one folder per product area (`vault`, `world`, `order`, …). A type
several endpoints share is ONE model, named after where it first appears
(`GetOrderResponse`, `ListOrdersItem`) or, for small shared shapes such as `{ ok }`,
after its fields (`OkResponse`). Each client README lists every method.

## Versions and changelog

Semantic versioning. While the version is 0.x, a release that removes an operation or a model bumps the minor
version; anything else bumps the patch. Every [CHANGELOG](CHANGELOG.md) entry lists the operations and models
that were added, changed or removed in the specs it was generated from.

## Verifying a release

Every release artifact is built on GitHub-hosted runners by [release.yml](.github/workflows/release.yml) and
carries a signed SLSA provenance attestation:

```sh
gh attestation verify <downloaded-file> --repo crossly-dev/crossly-php
```

## Contributing

`seller/`, `buyer/` and `webhooks/` are generated, so a pull request that edits them would be overwritten by the
next release. Open an issue instead: the fix goes into the API spec or the generator, and every language picks it
up. [CONTRIBUTING.md](CONTRIBUTING.md) explains how to regenerate locally.

## More

- API reference and guides: https://crossly.net/docs
- Other languages: https://github.com/crossly-dev
- TypeScript (Node and browsers): [`@crossly/sdk`](https://github.com/crossly-dev/crossly-sdk); command line: [`@crossly/cli`](https://github.com/crossly-dev/crossly-cli); AI agents: [`@crossly/mcp`](https://github.com/crossly-dev/crossly-mcp)

## License

[MIT](LICENSE)
