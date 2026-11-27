<?php

declare(strict_types=1);

namespace Crossly;

/**
 * Laravel route middleware: verify the Crossly-Signature of an incoming webhook over the raw body, reject anything
 * that does not verify with a 400 (500 when no secret is configured), and hand the verified event to the controller.
 *
 *     // config/services.php:  'crossly' => ['webhook_secret' => env('CROSSLY_WEBHOOK_SECRET')],
 *     Route::post('/webhooks/crossly', CrosslyWebhookController::class)
 *         ->middleware(\Crossly\LaravelWebhookMiddleware::class)
 *         ->withoutMiddleware(\Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class);
 *
 *     // in the controller:  $event = $request->attributes->get('crossly_event');   // ['id', 'type', 'created', 'data']
 *
 * The secret is config('services.crossly.webhook_secret'), else the CROSSLY_WEBHOOK_SECRET environment variable; a
 * middleware parameter names another config key: ->middleware(LaravelWebhookMiddleware::class . ':services.crossly.other').
 *
 * No dependency on Laravel: it only calls the request methods Laravel's Request has (getContent, header,
 * attributes), so this file loads anywhere. Hand-written, shipped with the generated client (crossly/crossly).
 */
final class LaravelWebhookMiddleware
{
    public const ATTRIBUTE = 'crossly_event';

    /**
     * @param \Illuminate\Http\Request $request
     * @return mixed the next middleware's response, or a 400 response
     */
    public function handle($request, \Closure $next, ?string $secretConfigKey = null)
    {
        $secret = self::secret($secretConfigKey ?? 'services.crossly.webhook_secret');
        try {
            // getContent() is the raw body as received, never a re-encoded one.
            $event = CrosslyWebhooks::verify((string) $request->getContent(), $request->header('Crossly-Signature'), $secret);
        } catch (WebhookVerificationError $e) {
            return self::reject($e);
        }
        $request->attributes->set(self::ATTRIBUTE, $event);
        return $next($request);
    }

    private static function secret(string $key): string
    {
        $secret = function_exists('config') ? \config($key) : null;
        if (!is_string($secret) || $secret === '') {
            $secret = getenv('CROSSLY_WEBHOOK_SECRET');
        }
        return is_string($secret) ? $secret : '';
    }

    /** @return mixed */
    private static function reject(WebhookVerificationError $e)
    {
        $body = ['error' => ['code' => $e->reason, 'message' => $e->getMessage()]];
        if (class_exists('Illuminate\\Http\\JsonResponse')) {
            return new \Illuminate\Http\JsonResponse($body, $e->reason === 'missing_secret' ? 500 : 400);
        }
        if (class_exists('Symfony\\Component\\HttpFoundation\\JsonResponse')) {
            return new \Symfony\Component\HttpFoundation\JsonResponse($body, $e->reason === 'missing_secret' ? 500 : 400);
        }
        throw $e;
    }
}
