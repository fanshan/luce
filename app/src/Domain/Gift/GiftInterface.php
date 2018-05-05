<?php

namespace Luce\Domain\Gift;

/**
 * Interface GiftInterface
 *
 * @package Luce\Domain\Gift
 */
interface GiftInterface
{
    public function getId(): int;

    public function getWhat(): string;

    public function getDescription(): string;

    public function getCategory(): string;

    public function getImages(): array;

    public function getObservedPrice(): float;

    public function getOnlineShopUrl(): string;

    public function getBoughtBy(): ?string;
}
