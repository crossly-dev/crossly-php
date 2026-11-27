<?php

declare(strict_types=1);

namespace Crossly;

/**
 * Symfony kernel.request listener: on the webhook path(s), verify the Crossly-Signature over the raw body; a request
 * that does not verify gets a 400 before any controller runs, a verified one carries the event as the request
 * attribute `crossly_event` (['id', 'type', 'created', 'data']).
 *
 *     # config/services.yaml
 *     Crossly\SymfonyWebhookListener:
 *         arguments:
 *             $secret: '%env(CROSSLY_WEBHOOK_SECRET)%'
 *             $paths: ['/webhooks/crossly']
 *         tags:
 *             - { name: kernel.event_listener, event: kernel.request, priority: 8 }
 *
 *     // in the controller:  $event = $request->attributes->get('crossly_event');
 *
 * No dependency on Symfony: it calls the methods RequestEvent and Request have, and builds the 400 with
 * HttpFoundation's JsonResponse only when that class exists. Hand-written, shipped with the generated client.
 */
final class SymfonyWebhookListener
{
    public const ATTRIBUTE = 'crossly_event';

    private string $secret;
    /** @var string[] */
    private array $paths;
    private int $toleranceSeconds;

    /** @param string[] $paths exact request paths to verify; empty = every request this listener sees */
    public function __construct(string $secret, array $paths = [], int $toleranceSeconds = CrosslyWebhooks::DEFAULT_TOLERANCE_SECONDS)
    {
        $this->secret = $secret;
        $this->paths = $paths;
        $this->toleranceSeconds = $toleranceSeconds;
    }

    /** @param \Symfony\Component\HttpKernel\Event\RequestEvent $event */
    public function __invoke($event): void
    {
        if (method_exists($event, 'isMainRequest') && !$event->isMainRequest()) {
            return;
        }
        $request = $event->getRequest();
        if ($this->paths !== [] && !in_array($request->getPathInfo(), $this->paths, true)) {
            return;
        }
        try {
            $verified = CrosslyWebhooks::verify(
                (string) $request->getContent(),
                $request->headers->get('Crossly-Signature'),
                $this->secret,
                $this->toleranceSeconds
            );
        } catch (WebhookVerificationError $e) {
            $body = ['error' => ['code' => $e->reason, 'message' => $e->getMessage()]];
            if (!class_exists('Symfony\\Component\\HttpFoundation\\JsonResponse')) {
                throw $e;
            }
            $event->setResponse(new \Symfony\Component\HttpFoundation\JsonResponse($body, $e->reason === 'missing_secret' ? 500 : 400));
            return;
        }
        $request->attributes->set(self::ATTRIBUTE, $verified);
    }
}
