<?php

declare(strict_types=1);

namespace Crossly;

/**
 * A failed Crossly call, decoded from the API's error envelope:
 *
 *     { "error": { "code", "message", "details" }, "correlationId" }
 *
 * Branch on getErrorCode() (stable across versions), never on the message. Quote getCorrelationId() to support:
 * it threads straight back to the server logs. (PHP's own Exception::getCode() is an int and final, so the API's
 * string code is getErrorCode(); getCode() is the HTTP status.)
 *
 * Hand-written, shipped with the generated client (crossly/crossly).
 */
class CrosslyError extends \RuntimeException
{
    /** HTTP status; 0 when the request never got a response (DNS, connect, timeout). */
    private int $status;
    private string $errorCode;
    private ?string $correlationId;
    /** @var mixed */
    private $details;
    private ?int $retryAfterSeconds;
    private ?string $responseBody;
    /** @var array<string, string[]> */
    private array $responseHeaders;

    /**
     * @param mixed $details
     * @param array<string, string[]> $responseHeaders
     */
    public function __construct(
        string $message,
        int $status,
        string $errorCode,
        ?string $correlationId = null,
        $details = null,
        ?int $retryAfterSeconds = null,
        ?string $responseBody = null,
        array $responseHeaders = [],
        ?\Throwable $previous = null
    ) {
        parent::__construct($message, $status, $previous);
        $this->status = $status;
        $this->errorCode = $errorCode;
        $this->correlationId = $correlationId;
        $this->details = $details;
        $this->retryAfterSeconds = $retryAfterSeconds;
        $this->responseBody = $responseBody;
        $this->responseHeaders = $responseHeaders;
    }

    /**
     * Build from the generated client's ApiException (Crossly\ApiException or Crossly\Buyer\ApiException): anything
     * with getCode(), getResponseBody() and getResponseHeaders().
     */
    public static function fromApiException(\Exception $e): self
    {
        $status = (int) $e->getCode();
        $body = method_exists($e, 'getResponseBody') ? $e->getResponseBody() : null;
        if (is_object($body) && !method_exists($body, '__toString')) {
            $body = json_encode($body);
        }
        $body = $body === null ? null : (string) $body;
        $headers = method_exists($e, 'getResponseHeaders') ? ($e->getResponseHeaders() ?? []) : [];
        return self::fromResponse($status, $body, is_array($headers) ? $headers : [], $e);
    }

    /** @param array<string, string[]|string> $headers */
    public static function fromResponse(int $status, ?string $body, array $headers = [], ?\Throwable $previous = null): self
    {
        $decoded = null;
        if ($body !== null && $body !== '') {
            $decoded = json_decode($body, true);
        }
        $err = is_array($decoded) && isset($decoded['error']) && is_array($decoded['error']) ? $decoded['error'] : [];
        $code = isset($err['code']) && is_string($err['code']) ? $err['code'] : ($status === 0 ? 'network_error' : 'http_' . $status);
        $message = isset($err['message']) && is_string($err['message'])
            ? $err['message']
            : ($status === 0 ? ($previous ? $previous->getMessage() : 'No response from the Crossly API') : "HTTP {$status} from the Crossly API");
        $correlationId = is_array($decoded) && isset($decoded['correlationId']) && is_string($decoded['correlationId'])
            ? $decoded['correlationId']
            : self::header($headers, 'x-correlation-id');
        $normalised = [];
        foreach ($headers as $k => $v) {
            $normalised[(string) $k] = is_array($v) ? array_map('strval', $v) : [(string) $v];
        }
        return new self(
            $message,
            $status,
            $code,
            $correlationId,
            $err['details'] ?? null,
            self::retryAfter(self::header($headers, 'retry-after')),
            $body,
            $normalised,
            $previous
        );
    }

    /** Retry-After as whole seconds: delta-seconds or an HTTP date (RFC 9110). */
    public static function retryAfter(?string $value): ?int
    {
        if ($value === null || trim($value) === '') {
            return null;
        }
        $value = trim($value);
        if (ctype_digit($value)) {
            return (int) $value;
        }
        $at = strtotime($value);
        return $at === false ? null : max(0, $at - time());
    }

    /** @param array<string, string[]|string> $headers */
    private static function header(array $headers, string $name): ?string
    {
        foreach ($headers as $k => $v) {
            if (strtolower((string) $k) === $name) {
                $first = is_array($v) ? reset($v) : $v;
                return $first === false ? null : (string) $first;
            }
        }
        return null;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    /** The API's machine code (`not_found`, `rate_limited`, `validation_error`, …). */
    public function getErrorCode(): string
    {
        return $this->errorCode;
    }

    public function getCorrelationId(): ?string
    {
        return $this->correlationId;
    }

    /** @return mixed the envelope's optional `details` */
    public function getDetails()
    {
        return $this->details;
    }

    public function getRetryAfterSeconds(): ?int
    {
        return $this->retryAfterSeconds;
    }

    public function getResponseBody(): ?string
    {
        return $this->responseBody;
    }

    /** @return array<string, string[]> */
    public function getResponseHeaders(): array
    {
        return $this->responseHeaders;
    }
}
