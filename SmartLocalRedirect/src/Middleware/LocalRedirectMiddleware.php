<?php declare(strict_types=1);

namespace SmartLocaleRedirect\Middleware;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class LocaleRedirectMiddleware implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            'kernel.request' => 'onKernelRequest',
        ];
    }

    public function onKernelRequest(RequestEvent $event)
    {
        $request = $event->getRequest();
        $preferredLocale = $request->getPreferredLanguage(['de', 'en']);
        $currentLocale = $request->getLocale();

        if ($preferredLocale !== $currentLocale) {
            if ($preferredLocale === 'en') {
                $event->setResponse(new RedirectResponse('/en/'));
            }
        }
    }
}
