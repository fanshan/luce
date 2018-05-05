<?php

namespace Luce\Domain\Image;

use Atlas\Mapper\Record;
use Luce\Domain\AbstractRepository;
use Luce\Persistence\Image\ImageMapper;
use Luce\Persistence\Image\ImageRecord;

/**
 * Class ImageRepository
 *
 * @package Luce\Domain\Image
 */
class ImageRepository extends AbstractRepository
{
    /**
     * Fetch one image
     *
     * @param int $id
     *
     * @return Record|ImageRecord
     */
    public function fetchOne(int $id): ImageRecord
    {
        return $this->getAtlas()->fetchRecord(ImageMapper::class, $id);
    }
}
