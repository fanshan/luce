<?php

namespace Luce\Domain\Gift;

use Luce\Domain\Image\ImageInterface;

/**
 * Interface GiftInterface
 *
 * @package Luce\Domain\Gift
 */
interface GiftInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return string
     */
    public function getWhat(): string;

    /**
     * @return string
     */
    public function getDescription(): string;

    /**
     * @return string
     */
    public function getCategory(): string;

    /**
     * @return ImageInterface[]
     */
    public function getImages(): array;

    /**
     * @return float
     */
    public function getObservedPrice(): float;

    /**
     * @return string
     */
    public function getOnlineShopUrl(): string;

    /**
     * @return null|string
     */
    public function getBoughtBy(): ?string;
}
