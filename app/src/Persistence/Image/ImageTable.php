<?php

namespace Luce\Persistence\Image;

use Atlas\Table\Table;

/**
 * Class ImageTable
 *
 * @package App\DataSource\Image
 */
class ImageTable extends Table
{
    const NAME = 'image';

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
        'gift_id' => [
            'name' => 'gift_id',
            'type' => 'INTEGER',
            'size' => null,
            'scale' => null,
            'notnull' => true,
            'default' => '0',
            'autoinc' => false,
            'primary' => false,
        ],
        'media_type' => [
            'name' => 'media_type',
            'type' => 'TEXT',
            'size' => null,
            'scale' => null,
            'notnull' => true,
            'default' => '',
            'autoinc' => false,
            'primary' => false,
        ],
        'data' => [
            'name' => 'data',
            'type' => 'TEXT',
            'size' => null,
            'scale' => null,
            'notnull' => true,
            'default' => '',
            'autoinc' => false,
            'primary' => false,
        ],
        'height' => [
            'name' => 'height',
            'type' => 'INTEGER',
            'size' => null,
            'scale' => null,
            'notnull' => true,
            'default' => '0',
            'autoinc' => false,
            'primary' => false,
        ],
        'width' => [
            'name' => 'width',
            'type' => 'INTEGER',
            'size' => null,
            'scale' => null,
            'notnull' => true,
            'default' => '0',
            'autoinc' => false,
            'primary' => false,
        ],
        'alt' => [
            'name' => 'alt',
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
        'gift_id',
        'media_type',
        'data',
        'height',
        'width',
        'alt',
    ];

    const COLUMN_DEFAULTS = [
        'id' => null,
        'gift_id' => '0',
        'media_type' => '',
        'data' => '',
        'height' => '0',
        'width' => '0',
        'alt' => '',
    ];

    const PRIMARY_KEY = [
        'id',
    ];

    const AUTOINC_COLUMN = 'id';

    const AUTOINC_SEQUENCE = null;
}
