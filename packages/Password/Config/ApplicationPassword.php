<?php

namespace Luce\Package\Password\Config;

use ObjectivePHP\Config\Directive\AbstractScalarDirective;

/**
 * Class ApplicationPassword
 *
 * @package Luce\Package\Password\Config
 */
class ApplicationPassword extends AbstractScalarDirective
{
    const KEY = 'application.password';

    protected $key = self::KEY;
}
