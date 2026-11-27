<?php

declare(strict_types=1);

namespace Crossly;

use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise\Create;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Guzzle middleware: retry a call that hit 429 or a transient 5xx (500, 502, 503, 504), or never got a response,
 * with exponential backoff and jitter, honouring Retry-After when the API sends one.
 *
 * Writes are safe to retry because Crossly::seller()/buyer() stamp every POST and PATCH with one Idempotency-Key
 * BEFORE this middleware runs, so each retry carries the same key and the API replays the first result instead
 * of writing twice.
 *
 * Hand-written, shipped with the generated client (crossly/crossly).
 */
final class CrosslyRetryMiddleware
{
    private const RETRY_STATUSES = [429, 500, 502, 503, 504];

    /** @var array{maxRetries: int, backoffBaseMs: int, maxBackoffMs: int, maxRetryAfterMs: int, sleep: callable, onRetry: ?callable} */
    private array $o;

    /**
     * @param array{maxRetries?: int, backoffBaseMs?: int, maxBackoffMs?: int, maxRetryAfterMs?: int, sleep?: callable, onRetry?: ?callable} $options
     */
    public function __construct(array $options = [])
    {
        $this->o = [
            'maxRetries' => (int) ($options['maxRetries'] ?? 3),
            'backoffBaseMs' => (int) ($options['backoffBaseMs'] ?? 500),
            'maxBackoffMs' => (int) ($options['maxBackoffMs'] ?? 20000),
            'maxRetryAfterMs' => (int) ($options['maxRetryAfterMs'] ?? 120000),
            'sleep' => $options['sleep'] ?? static function (int $ms): void {
                usleep($ms * 1000);
            },
            'onRetry' => $options['onRetry'] ?? null,
        ];
    }

    public function __invoke(callable $handler): callable
    {
        return function (RequestInterface $request, array $options) use ($handler): PromiseInterface {
            return $this->attempt($handler, $request, $options, 0);
        };
    }

    private function attempt(callable $handler, RequestInterface $request, array $options, int $retries): PromiseInterface
    {
        $body = $request->getBody();
        if ($retries > 0 && $body->isSeekable()) {
            $body->rewind();
        }
        return $handler($request, $options)->then(
            function (ResponseInterface $response) use ($handler, $request, $options, $retries) {
                if ($retries < $this->o['maxRetries'] && in_array($response->getStatusCode(), self::RETRY_STATUSES, true)) {
                    return $this->retry($handler, $request, $options, $retries, $response, null);
                }
                return $response;
            },
            function ($reason) use ($handler, $request, $options, $retries) {
                $response = $reason instanceof RequestException ? $reason->getResponse() : null;
                $retryable = $response !== null
                    ? in_array($response->getStatusCode(), self::RETRY_STATUSES, true)
                    : ($reason instanceof ConnectException || $reason instanceof RequestException);
                if ($retries < $this->o['maxRetries'] && $retryable) {
                    return $this->retry($handler, $request, $options, $retries, $response, $reason);
                }
                return Create::rejectionFor($reason);
            }
        );
    }

    private function retry(
        callable $handler,
        RequestInterface $request,
        array $options,
        int $retries,
        ?ResponseInterface $response,
        $reason
    ): PromiseInterface {
        $delay = $this->delayMs($retries + 1, $response);
        if ($this->o['onRetry'] !== null) {
            ($this->o['onRetry'])($retries + 1, $delay, $response, $reason instanceof \Throwable ? $reason : null);
        }
        ($this->o['sleep'])($delay);
        return $this->attempt($handler, $request, $options, $retries + 1);
    }

    /** Retry-After when present (capped), else base * 2^(n-1) capped, jittered into its upper half. */
    public function delayMs(int $retry, ?ResponseInterface $response): int
    {
        if ($response !== null && $response->hasHeader('Retry-After')) {
            $seconds = CrosslyError::retryAfter($response->getHeaderLine('Retry-After'));
            if ($seconds !== null) {
                return min($seconds * 1000, $this->o['maxRetryAfterMs']);
            }
        }
        $ceiling = min($this->o['maxBackoffMs'], $this->o['backoffBaseMs'] * (2 ** ($retry - 1)));
        return random_int((int) ($ceiling / 2), max((int) ($ceiling / 2), $ceiling));
    }
}
