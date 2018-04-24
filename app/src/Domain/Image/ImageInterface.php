<?php

namespace Luce\Domain\Image;

use Luce\Domain\Gift\GiftInterface;

/**
 * Interface PictureInterface
 *
 * @package Luce\Domain\Picture
 */
interface ImageInterface
{
    /**
     * @return string
     */
    public function getMediaType(): string;

    /**
     * @return string
     */
    public function getData(): string;

    /**
     * @return int
     */
    public function getHeight(): int;

    /**
     * @return int
     */
    public function getWidth(): int;

    /**
     * @return string
     */
    public function getAlt(): string;

    /**
     * @return GiftInterface
     */
    public function getGift(): GiftInterface;
}
