<?php

namespace Luce;

use Luce\Package\Atlas\AtlasPackage;
use Luce\Package\Password\PasswordPackage;
use Middlewares\Expires;
use ObjectivePHP\Application\AbstractHttpApplication;
use ObjectivePHP\Config\ParameterProcessor\EnvironmentParameterProcessor;
use ObjectivePHP\Middleware\Action\PhtmlAction\ExceptionHandler\DefaultExceptionRenderer;
use ObjectivePHP\Middleware\Action\PhtmlAction\PhtmlActionPackage;

/**
 * Class Application
 *
 * @package Luce
 */
class Application extends AbstractHttpApplication
{
    /**
     * {@inheritdoc}
     */
    public function init()
    {
        $this->getExceptionHandlers()->registerMiddleware(new DefaultExceptionRenderer());

        $this->getConfig()->registerParameterProcessor(new EnvironmentParameterProcessor());

        $this->registerPackage(new PasswordPackage());
        $this->registerPackage(new PhtmlActionPackage());
        $this->registerPackage(new AtlasPackage());

        //$this->getMiddlewares()->registerMiddleware(new Expires());
    }
}
