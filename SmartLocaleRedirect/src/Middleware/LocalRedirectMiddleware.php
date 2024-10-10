<?php declare(strict_types=1);

namespace SmartLocaleRedirect\Middleware;

use Shopware\Core\Framework\MiddlewareInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\Exception\HttpException;

class LocaleRedirectMiddleware implements MiddlewareInterface
{
    public function handle(Request $request, $next)
    {
        // Hier implementierst du die Weiterleitungslogik basierend auf der Browsersprache.
        $locale = $request->getPreferredLanguage(['de', 'en']);

        if ($locale !== 'de') {
            // Redirect logic here
            return new Response('', 302, ['Location' => 'https://your-domain.com/en']);
        }

        return $next($request);
    }
}
