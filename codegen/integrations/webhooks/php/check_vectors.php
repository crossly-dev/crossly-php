<?php

// Run the shared vectors against the PHP port:  php check_vectors.php
// Exit 1 on any mismatch, including a vector that must fail and did not.

declare(strict_types=1);

require __DIR__ . '/WebhookVerificationError.php';
require __DIR__ . '/CrosslyWebhooks.php';

use Crossly\CrosslyWebhooks;
use Crossly\WebhookVerificationError;

$data = json_decode((string) file_get_contents(__DIR__ . '/../test-vectors.json'), true, 512, JSON_THROW_ON_ERROR);
$tolerance = (int) $data['toleranceSeconds'];
$ok = 0;
$bad = 0;

foreach ($data['vectors'] as $v) {
    try {
        CrosslyWebhooks::verify($v['body'], $v['header'], $v['secret'], (int) ($v['toleranceSeconds'] ?? $tolerance), (int) $v['now']);
        $got = 'ok';
    } catch (WebhookVerificationError $e) {
        $got = $e->reason;
    } catch (\Throwable $e) {
        // Any other throw is itself a failure: a verifier must reject cleanly, never crash.
        $got = 'threw:' . get_class($e);
    }
    if ($got === $v['expect']) {
        $ok++;
    } else {
        $bad++;
        echo "  MISMATCH {$v['name']}: expected {$v['expect']}, got {$got}\n";
    }
}

$total = count($data['vectors']);
$failing = count(array_filter($data['vectors'], static fn ($v) => $v['expect'] !== 'ok'));
echo "  php: {$ok}/{$total} vectors agree ({$failing} must fail verification)\n";
exit($bad > 0 ? 1 : 0);
