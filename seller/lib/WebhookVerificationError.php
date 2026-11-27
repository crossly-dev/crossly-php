<?php

declare(strict_types=1);

namespace Crossly;

/**
 * Thrown by CrosslyWebhooks::verify() when a webhook does not verify.
 *
 * `reason` is stable across every language port, so one alerting rule can
 * tell a forged request from a clock problem.
 */
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
