<?php

namespace Luce\Package\Atlas;

use Atlas\Orm\Atlas;
use Luce\Package\Atlas\Config\Connection;
use ObjectivePHP\Application\Package\PackageInterface;
use ObjectivePHP\Application\Workflow\PackagesInitListener;
use ObjectivePHP\Application\Workflow\WorkflowEventInterface;
use ObjectivePHP\Config\Config;
use ObjectivePHP\Config\ConfigAccessorsTrait;
use ObjectivePHP\Config\ConfigInterface;
use ObjectivePHP\Config\ConfigProviderInterface;
use ObjectivePHP\ServicesFactory\Specification\PrefabServiceSpecification;

/**
 * Class AtlasPackage
 *
 * @package Luce\Package\Atlas
 */
class AtlasPackage implements PackageInterface, ConfigProviderInterface, PackagesInitListener
{
    use ConfigAccessorsTrait;

    /**
     * {@inheritdoc}
     */
    public function getConfig(): ConfigInterface
    {
        $config = new Config();
        $config->registerDirective(new Connection());

        return $config;
    }

    /**
     * {@inheritdoc}
     */
    public function onPackagesInit(WorkflowEventInterface $event)
    {
        /** @var Connection[] $connections */
        $connections = $event->getApplication()->getConfig()->get(Connection::KEY);

        foreach ($connections as $key => $connection) {
            $atlas = Atlas::new($connection->getDsn());

            $event->getApplication()->getServicesFactory()->registerService(
                new PrefabServiceSpecification('atlas.' . $key, $atlas)
            );
        }
    }
}
