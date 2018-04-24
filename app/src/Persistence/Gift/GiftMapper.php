<?php

namespace Luce\Persistence\Gift;

use Atlas\Mapper\MapperRelationships;
use Luce\Persistence\Image\ImageMapper;

/**
 * Class GitfMapper
 *
 * @package Luce\Persistence\Gift
 */
class GiftMapper extends MapperRelationships
{
    /**
     * {@inheritdoc}
     */
    protected function define()
    {
        $this->oneToMany('images', ImageMapper::class);
    }
}
