<?php

namespace Luce\Persistence\Gift;

use Atlas\Table\Row;

/**
 * Class GiftRow
 *
 * @package Luce\Persistence\Gift
 */
class GiftRow extends Row
{
    protected $cols = [
        'id' => null,
        'description' => '',
        'category' => '',
        'observed_price' => '0',
        'online_shop_url' => '',
        'bought_by' => null,
        'what' => '',
        'is_buyer_anonymous' => false
    ];
}
