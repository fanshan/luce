<?php

namespace Luce\Package\Atlas\Config;

use ObjectivePHP\Config\Directive\AbstractMultiComplexDirective;

/**
 * Class Connection
 *
 * @package Luce\Package\Atlas\Config
 */
class Connection extends AbstractMultiComplexDirective
{
    const KEY = 'atlas.connection';

    /**
     * @var string
     */
    protected $key = self::KEY;

    /**
     * @var string
     */
    protected $dsn;

    /**
     * Get Dsn
     *
     * @return string
     */
    public function getDsn(): string
    {
        return $this->dsn;
    }

    /**
     * Set Dsn
     *
     * @param string $dsn
     *
     * @return $this
     */
    public function setDsn(string $dsn)
    {
        $this->dsn = $dsn;

        return $this;
    }
}
