<?php

namespace Luce\Service;

use Atlas\Orm\Atlas;

/**
 * Class BirthList
 *
 * @package Luce\Service
 */
class BirthListManager
{
    /**
     * @var Atlas
     */
    protected $atlas;

    /**
     * Retrieves the birth list grouped by category
     *
     * @param string|null $category
     * @param array       $filters
     *
     * @return array
     */
    public function getListGroupByCategory(string $category = null, array $filters = []): array
    {
        return [];
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
     *
     * @return $this
     */
    public function setAtlas(Atlas $atlas)
    {
        $this->atlas = $atlas;

        return $this;
    }
}
