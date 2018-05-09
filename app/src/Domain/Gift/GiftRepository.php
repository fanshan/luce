<?php

namespace Luce\Domain\Gift;

use Atlas\Mapper\RecordSet;
use Luce\Domain\AbstractRepository;
use Luce\Persistence\Gift\GiftMapper;
use Luce\Persistence\Gift\GiftRecordSet;
use Luce\Service\BirthListManager;

/**
 * Class GiftRepository
 *
 * @package Luce\Domain\Gift
 */
class GiftRepository extends AbstractRepository
{
    /**
     * Fetch gift recordset
     *
     * @param array $criteria
     *
     * @return RecordSet|GiftRecordSet
     * @throws \Atlas\Mapper\Exception
     */
    public function fetch(array $criteria = []): GiftRecordSet
    {
        $select = $this->getAtlas()
            ->select(GiftMapper::class)
            ->with(['images'])
            ->orderBy('category ASC', 'what ASC');

        if (isset($criteria['category'])) {
            $select->andWhere('category = ', $criteria['category']);
        }

        if (isset($criteria['offered']) && $criteria['offered'] === BirthListManager::SHOW_NOT_OFFERED) {
            $select->andWhere('bought_by IS NULL');
        }

        return $select->fetchRecordSet();
    }

    /**
     * Fetch all categories
     *
     * @return array
     */
    public function fetchCategories(): array
    {
        return $this->getAtlas()
            ->select(GiftMapper::class)
            ->distinct(true)
            ->columns('category')
            ->orderBy('category ASC')
            ->fetchColumn();
    }
}
