<?php

namespace Luce\Persistence\Image;

use Atlas\Mapper\MapperRelationships;
use Luce\Persistence\Gift\GiftMapper;

/**
 * Class ImageMapper
 *
 * @package Luce\Persistence\Image
 */
class ImageMapperRelationships extends MapperRelationships
{
    /**
     * {@inheritdoc}
     */
    protected function define()
    {
        $this->manyToOne('gift', GiftMapper::class);
    }
}
