<?php

namespace Luce\Service;

use Luce\Domain\Gift\GiftInterface;
use Luce\Domain\Gift\GiftRepository;
use Luce\Persistence\Gift\GiftMapper;
use Luce\Persistence\Gift\GiftRecord;

/**
 * Class BirthList
 *
 * @package Luce\Service
 */
class BirthListManager
{
    /**
     * @var GiftRepository
     */
    protected $giftRepository;

    /**
     * Retrieves the birth list grouped by category
     *
     * @param string|null $category
     *
     * @return GiftInterface[]
     * @throws \Atlas\Mapper\Exception
     */
    public function getListGroupByCategory(string $category = null): array
    {
        $criteria = [
            'category' => $category
        ];

        $records = $this->getGiftRepository()->fetch($criteria)->getArrayCopy();

        $list = [];
        foreach ($records as $record) {
            $list[$record['category']][] = $record;
        }

        return $list;
    }

    /**
     * Retrieves all gift's categories
     *
     * @return array
     */
    public function getAllGiftCategories(): array
    {
        return $this->getGiftRepository()->fetchCategories();
    }

    /**
     * Someone give a gift
     *
     * @param int    $gift
     * @param string $whom
     */
    public function markGiftAsGiven(int $gift, string $whom)
    {
        /** @var GiftRecord $gift */
        $gift = $this->getGiftRepository()->getAtlas()->fetchRecord(GiftMapper::class, $gift);

        if ($gift) {
            $gift->set(['bought_by' => $whom]);

            $this->giftRepository->getAtlas()->update($gift);
        }
    }

    /**
     * Get GiftRepository
     *
     * @return GiftRepository
     */
    public function getGiftRepository(): GiftRepository
    {
        return $this->giftRepository;
    }

    /**
     * Set GiftRepository
     *
     * @param GiftRepository $giftRepository
     *
     * @return BirthListManager
     */
    public function setGiftRepository(GiftRepository $giftRepository): BirthListManager
    {
        $this->giftRepository = $giftRepository;

        return $this;
    }
}
