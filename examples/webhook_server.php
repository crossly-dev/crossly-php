<?php

// A minimal Crossly webhook receiver, no framework.
//
//     composer require crossly/crossly
//     CROSSLY_WEBHOOK_SECRET=... php -S 0.0.0.0:8080 webhook_server.php
//     # then point a webhook endpoint (Settings → Webhooks) at http://<host>:8080/
//
// The signature is checked over the exact bytes received, before anything parses them. In Laravel, Symfony or a
// PSR-15 app, use Crossly\LaravelWebhookMiddleware, Crossly\SymfonyWebhookListener or Crossly\Psr15WebhookMiddleware
// instead (see the README).

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Crossly\CrosslyWebhooks;
use Crossly\WebhookVerificationError;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit;
}

$raw = (string) file_get_contents('php://input');
try {
    $event = CrosslyWebhooks::verify($raw, $_SERVER['HTTP_CROSSLY_SIGNATURE'] ?? null, (string) getenv('CROSSLY_WEBHOOK_SECRET'));
} catch (WebhookVerificationError $e) {
    http_response_code(400);
    header('Content-Type: application/json');
    echo json_encode(['error' => ['code' => $e->reason, 'message' => $e->getMessage()]]);
    exit;
}

error_log("{$event['type']}: " . json_encode($event['data']));
// Answer fast; do slow work after replying (a queue), or Crossly retries the delivery.
http_response_code(204);
