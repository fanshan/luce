<?php

namespace Luce\Domain;

use Atlas\Orm\Atlas;

/**
 * Class AbstractRepository
 *
 * @package Luce\Domain
 */
abstract class AbstractRepository
{
    /**
     * @var Atlas
     */
    protected $atlas;

    /**
     * AbstractRepository constructor.
     *
     * @param Atlas  $atlas
     */
    public function __construct(Atlas $atlas)
    {
        $this->setAtlas($atlas);
    }

    /**
     * Get Atlas
     *
     * @return Atlas
     */
    public function getAtlas(): Atlas
    {
        return $this->atlas;
    }

    /**
     * Set Atlas
     *
     * @param Atlas $atlas
     */
    public function setAtlas(Atlas $atlas): void
    {
        $this->atlas = $atlas;
    }
}
