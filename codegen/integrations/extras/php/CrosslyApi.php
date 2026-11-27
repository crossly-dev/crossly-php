<?php

declare(strict_types=1);

namespace Crossly;

use GuzzleHttp\Promise\PromiseInterface;

/**
 * One generated API group (ListingsApi, OrdersApi, …) as returned by Crossly::api(): every method is the generated
 * method, unchanged, except that a failed call throws CrosslyError (code, correlationId, status, Retry-After)
 * instead of the generated ApiException. raw() is the generated object itself.
 *
 * Hand-written, shipped with the generated client (crossly/crossly).
 */
final class CrosslyApi
{
    private object $api;
    /** @var class-string */
    private string $exceptionClass;

    /** @param class-string $exceptionClass */
    public function __construct(object $api, string $exceptionClass)
    {
        $this->api = $api;
        $this->exceptionClass = $exceptionClass;
    }

    /** The generated API object (for IDE completion, or anything this wrapper does not pass through). */
    public function raw(): object
    {
        return $this->api;
    }

    /**
     * @param array<int, mixed> $args
     * @return mixed
     */
    public function __call(string $method, array $args)
    {
        if (!method_exists($this->api, $method)) {
            throw new \BadMethodCallException(get_class($this->api) . "::{$method}() does not exist");
        }
        try {
            $result = $this->api->{$method}(...$args);
        } catch (\Exception $e) {
            throw $this->translate($e);
        }
        if ($result instanceof PromiseInterface) {
            return $result->then(null, function ($reason) {
                throw $reason instanceof \Exception ? $this->translate($reason) : $reason;
            });
        }
        return $result;
    }

    private function translate(\Exception $e): \Exception
    {
        return $e instanceof $this->exceptionClass ? CrosslyError::fromApiException($e) : $e;
    }
}
