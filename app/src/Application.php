<?php

namespace Luce;

use Luce\Package\Atlas\AtlasPackage;
use ObjectivePHP\Application\AbstractHttpApplication;
use ObjectivePHP\Middleware\Action\PhtmlAction\PhtmlActionPackage;

/**
 * Class Application
 *
 * @package Luce
 */
class Application extends AbstractHttpApplication
{
    public function init()
    {
        $this->registerPackage(new PhtmlActionPackage());
        $this->registerPackage(new AtlasPackage());
    }
}
