<?php

declare(strict_types=1);

namespace Crossly;

use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

/**
 * PSR-15 middleware (Slim, Mezzio, Laminas, any PSR-15 pipeline): verify the Crossly-Signature over the raw body;
 * reject with a 400 JSON error, or pass the request on with the verified event as the attribute `crossly_event`
 * (['id', 'type', 'created', 'data']).
 *
 *     $app->post('/webhooks/crossly', $handler)
 *         ->add(new \Crossly\Psr15WebhookMiddleware(getenv('CROSSLY_WEBHOOK_SECRET'), $responseFactory));
 *
 * Needs psr/http-server-middleware, which every PSR-15 framework already installs; crossly/crossly does not
 * require it, so this class is only loadable where PSR-15 exists. Hand-written, shipped with the generated client.
 */
final class Psr15WebhookMiddleware implements MiddlewareInterface
{
    public const ATTRIBUTE = 'crossly_event';

    private string $secret;
    private ResponseFactoryInterface $responses;
    private int $toleranceSeconds;

    public function __construct(
        string $secret,
        ResponseFactoryInterface $responses,
        int $toleranceSeconds = CrosslyWebhooks::DEFAULT_TOLERANCE_SECONDS
    ) {
        $this->secret = $secret;
        $this->responses = $responses;
        $this->toleranceSeconds = $toleranceSeconds;
    }

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        // The raw bytes, from the start, leaving the stream rewound for whoever reads it next.
        $stream = $request->getBody();
        if ($stream->isSeekable()) {
            $stream->rewind();
        }
        $raw = $stream->getContents();
        if ($stream->isSeekable()) {
            $stream->rewind();
        }
        try {
            $event = CrosslyWebhooks::verify($raw, $request->getHeaderLine('Crossly-Signature'), $this->secret, $this->toleranceSeconds);
        } catch (WebhookVerificationError $e) {
            $response = $this->responses->createResponse($e->reason === 'missing_secret' ? 500 : 400)->withHeader('Content-Type', 'application/json');
            $response->getBody()->write((string) json_encode(['error' => ['code' => $e->reason, 'message' => $e->getMessage()]]));
            return $response;
        }
        return $handler->handle($request->withAttribute(self::ATTRIBUTE, $event));
    }
}
