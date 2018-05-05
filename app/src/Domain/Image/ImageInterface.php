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
    public function getMediaType(): string;

    public function getData(): string;

    public function getHeight(): int;

    public function getWidth(): int;

    public function getAlt(): string;

    public function getGift(): GiftInterface;
}
