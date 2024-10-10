<?php declare(strict_types=1);

namespace SmartLocaleRedirect;

use Shopware\Core\Framework\Plugin;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use SmartLocaleRedirect\Middleware\LocaleRedirectMiddleware;

class SmartLocaleRedirect extends Plugin
{
    public function build(ContainerBuilder $container): void
    {
        parent::build($container);

        // Hier kannst du die Middleware registrieren
        $container->register(LocaleRedirectMiddleware::class);
    }
}