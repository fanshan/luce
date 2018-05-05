<?php

namespace Luce\Package\Password;

use Luce\Package\Password\Config\ApplicationPassword;
use Luce\Package\Password\Middleware\Password;
use ObjectivePHP\Application\Package\PackageInterface;
use ObjectivePHP\Application\Workflow\PackagesReadyListener;
use ObjectivePHP\Application\Workflow\WorkflowEventInterface;
use ObjectivePHP\Config\Config;
use ObjectivePHP\Config\ConfigInterface;
use ObjectivePHP\Config\ConfigAccessorsTrait;
use ObjectivePHP\Config\ConfigProviderInterface;

/**
 * Class PasswordPackage
 *
 * @package Luce\Package\Password
 */
class PasswordPackage implements PackageInterface, ConfigProviderInterface, PackagesReadyListener
{
    use ConfigAccessorsTrait;

    /**
     * {@inheritdoc}
     */
    public function getConfig(): ConfigInterface
    {
        $config = new Config();
        $config->registerDirective(new ApplicationPassword());

        return $config;
    }

    /**
     * {@inheritdoc}
     */
    public function onPackagesReady(WorkflowEventInterface $event)
    {
        $event->getApplication()->getMiddlewares()->registerMiddleware(new Password());
    }
}
