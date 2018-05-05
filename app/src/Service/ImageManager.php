<?php

namespace Luce\Service;

use Luce\Domain\Image\ImageRepository;

/**
 * Class ImageManager
 *
 * @package Luce\Service
 */
class ImageManager
{
    /**
     * @var ImageRepository
     */
    protected $imageRepository;

    /**
     * Get an image
     *
     * @param int $id
     *
     * @return array
     */
    public function getImage(int $id): array
    {
        return $this->getImageRepository()->fetchOne($id)->getArrayCopy();
    }

    /**
     * Get ImageRepository
     *
     * @return ImageRepository
     */
    public function getImageRepository(): ImageRepository
    {
        return $this->imageRepository;
    }

    /**
     * Set ImageRepository
     *
     * @param ImageRepository $imageRepository
     */
    public function setImageRepository(ImageRepository $imageRepository): void
    {
        $this->imageRepository = $imageRepository;
    }
}
