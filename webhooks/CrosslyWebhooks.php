<?php

declare(strict_types=1);

namespace Crossly;

/**
 * Verify a Crossly webhook.
 *
 *     Crossly-Signature: t=<unix seconds>,v1=<hex HMAC-SHA256>
 *
 * signed over "{$t}.{$rawBody}" with the endpoint's signing secret.
 *
 * Three ways to get this wrong, all silent:
 *
 *  1. Verifying a re-serialised body. json_decode then json_encode does not
 *     round-trip byte for byte — PHP reformats floats and escapes slashes — so
 *     genuine payloads fail and the usual fix is to stop verifying. Use
 *     file_get_contents('php://input'), and read it ONCE: the stream is not
 *     rewindable in every SAPI, so a framework that already consumed it has
 *     taken your only copy.
 *  2. Comparing with ==. PHP's == on two strings is not constant time, and on
 *     hex digests it has the additional charm of type juggling: "0e123" ==
 *     "0e456" is TRUE, because both look like scientific notation and PHP
 *     compares them as floats. hash_equals avoids both.
 *  3. Ignoring the timestamp. Without it a captured request replays forever.
 *     The timestamp is INSIDE the signed message, so it cannot be edited.
 *
 * No dependencies.
 */
final class CrosslyWebhooks
{
    public const DEFAULT_TOLERANCE_SECONDS = 300;

    /**
     * @param string      $rawBody          The EXACT bytes received.
     * @param string|null $signatureHeader  The Crossly-Signature header, verbatim.
     * @param string      $secret           From Settings → Webhooks.
     * @param int         $toleranceSeconds How far the timestamp may be from now.
     * @param int|null    $now              Override the clock, for tests.
     *
     * @return array{id: string, type: string, created: string, data: mixed}
     *
     * @throws WebhookVerificationError on anything that does not verify. It
     *         throws rather than returning false so a caller who forgets to
     *         check a return value does not silently accept forged events.
     */
    public static function verify(
        string $rawBody,
        ?string $signatureHeader,
        string $secret,
        int $toleranceSeconds = self::DEFAULT_TOLERANCE_SECONDS,
        ?int $now = null
    ): array {
        if ($secret === '') {
            throw new WebhookVerificationError('missing_secret', 'A webhook signing secret is required.');
        }
        if ($signatureHeader === null || $signatureHeader === '') {
            throw new WebhookVerificationError('malformed_header', 'No Crossly-Signature header on the request.');
        }

        $parsed = self::parseSignatureHeader($signatureHeader);
        if ($parsed === null) {
            throw new WebhookVerificationError(
                'malformed_header',
                'Could not parse Crossly-Signature: expected "t=<unix>,v1=<hex>", got "'
                    . substr($signatureHeader, 0, 60) . '".'
            );
        }
        [$timestamp, $provided] = $parsed;

        $expected = hash_hmac('sha256', $timestamp . '.' . $rawBody, $secret);

        // hash_equals, never ==. See the class comment for why == is actively
        // dangerous here and not merely slow.
        if (!hash_equals($expected, $provided)) {
            throw new WebhookVerificationError(
                'bad_signature',
                'Signature did not match. If genuine payloads are failing, you are almost '
                    . 'certainly verifying a re-serialised body — pass php://input, not json_encode($decoded).'
            );
        }

        // Freshness AFTER the signature, so an attacker learns nothing about
        // timestamps without already holding a valid signature.
        $current = $now ?? time();
        $drift = abs($current - $timestamp);
        if ($drift > $toleranceSeconds) {
            throw new WebhookVerificationError(
                'timestamp_out_of_tolerance',
                "Timestamp is {$drift}s away from now (tolerance {$toleranceSeconds}s). "
                    . 'This is a replay guard — if it fires on live traffic, check your server clock.'
            );
        }

        /** @var array{id: string, type: string, created: string, data: mixed} $payload */
        $payload = json_decode($rawBody, true, 512, JSON_THROW_ON_ERROR);
        return $payload;
    }

    /**
     * Pull t and v1 out of the header.
     *
     * Field-wise rather than one regex, so a future v2= alongside v1= does not
     * break existing verifiers — the entire reason the scheme is versioned.
     *
     * @return array{0: int, 1: string}|null
     */
    private static function parseSignatureHeader(string $header): ?array
    {
        $t = null;
        $v1 = null;

        foreach (explode(',', $header) as $part) {
            $pos = strpos($part, '=');
            if ($pos === false) {
                continue;
            }
            $key = trim(substr($part, 0, $pos));
            $value = trim(substr($part, $pos + 1));

            if ($key === 't') {
                // ctype_digit rather than is_numeric: "1e9" and " 12" are
                // numeric to PHP and are not timestamps.
                if (!ctype_digit($value)) {
                    return null;
                }
                $t = (int) $value;
            } elseif ($key === 'v1') {
                $v1 = $value;
            }
        }

        if ($t === null || $v1 === null || $v1 === '') {
            return null;
        }
        return [$t, $v1];
    }
}

final class WebhookVerificationError extends \Exception
{
    /** malformed_header | bad_signature | timestamp_out_of_tolerance | missing_secret */
    public string $reason;

    public function __construct(string $reason, string $message)
    {
        parent::__construct($message);
        $this->reason = $reason;
    }
}
