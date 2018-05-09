<?php

namespace Luce\Service;

use Luce\Domain\Gift\GiftInterface;
use Luce\Domain\Gift\GiftRepository;
use Luce\Exception\GiftAlreadyOfferedException;
use Luce\Persistence\Gift\GiftMapper;
use Luce\Persistence\Gift\GiftRecord;

/**
 * Class BirthList
 *
 * @package Luce\Service
 */
class BirthListManager
{
    const SHOW_ALL = 1;
    const SHOW_NOT_OFFERED = 0;

    /**
     * @var GiftRepository
     */
    protected $giftRepository;

    /**
     * Retrieves the birth list grouped by category
     *
     * @param string|null $category
     * @param int         $offered
     *
     * @return GiftInterface[]
     * @throws \Atlas\Mapper\Exception
     */
    public function getListGroupByCategory(string $category = null, int $offered = self::SHOW_ALL): array
    {
        $criteria = [
            'category' => $category,
            'offered' => $offered
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
     * @param bool   $wantToBeAnonymous
     */
    public function markGiftAsGiven(int $gift, string $whom, bool $wantToBeAnonymous = false)
    {
        /** @var GiftRecord $gift */
        $gift = $this->getGiftRepository()->getAtlas()->fetchRecord(GiftMapper::class, $gift);

        if ($gift) {
            if ($gift->getRow()->bought_by) {
                throw new GiftAlreadyOfferedException(sprintf('%s a déjà été offert.', $gift->getRow()->what));
            }

            $gift->set(['bought_by' => $whom, 'is_buyer_anonymous' => $wantToBeAnonymous]);

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
