<?php

namespace Luce\Persistence\Gift;

use Atlas\Table\Table;

/**
 * Class GiftTable
 *
 * @package Luce\Persistence\Gift
 */
class GiftTable extends Table
{
    const NAME = 'gift';

    const COLUMNS = [
        'id' => [
            'name' => 'id',
            'type' => 'INTEGER',
            'size' => null,
            'scale' => null,
            'notnull' => false,
            'default' => null,
            'autoinc' => true,
            'primary' => true,
        ],
        'description' => [
            'name' => 'description',
            'type' => 'TEXT',
            'size' => null,
            'scale' => null,
            'notnull' => true,
            'default' => '',
            'autoinc' => false,
            'primary' => false,
        ],
        'category' => [
            'name' => 'category',
            'type' => 'TEXT',
            'size' => null,
            'scale' => null,
            'notnull' => true,
            'default' => '',
            'autoinc' => false,
            'primary' => false,
        ],
        'observed_price' => [
            'name' => 'observed_price',
            'type' => 'REAL',
            'size' => null,
            'scale' => null,
            'notnull' => true,
            'default' => '0',
            'autoinc' => false,
            'primary' => false,
        ],
        'online_shop_url' => [
            'name' => 'online_shop_url',
            'type' => 'TEXT',
            'size' => null,
            'scale' => null,
            'notnull' => true,
            'default' => '',
            'autoinc' => false,
            'primary' => false,
        ],
        'bought_by' => [
            'name' => 'bought_by',
            'type' => 'TEXT',
            'size' => null,
            'scale' => null,
            'notnull' => false,
            'default' => null,
            'autoinc' => false,
            'primary' => false,
        ],
        'what' => [
            'name' => 'what',
            'type' => 'TEXT',
            'size' => null,
            'scale' => null,
            'notnull' => true,
            'default' => '',
            'autoinc' => false,
            'primary' => false,
        ],
    ];

    const COLUMN_NAMES = [
        'id',
        'description',
        'category',
        'observed_price',
        'online_shop_url',
        'bought_by',
        'what',
    ];

    const COLUMN_DEFAULTS = [
        'id' => null,
        'description' => '',
        'category' => '',
        'observed_price' => '0',
        'online_shop_url' => '',
        'bought_by' => null,
        'what' => '',
    ];

    const PRIMARY_KEY = [
        'id',
    ];

    const AUTOINC_COLUMN = 'id';

    const AUTOINC_SEQUENCE = null;
}
