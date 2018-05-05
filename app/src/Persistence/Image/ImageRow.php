<?php

namespace Luce\Persistence\Image;

use Atlas\Table\Row;

/**
 * Class ImageRow
 *
 * @package App\DataSource\Image
 */
class ImageRow extends Row
{
    protected $cols = [
        'id' => null,
        'gift_id' => '0',
        'media_type' => '',
        'data' => '',
        'height' => '0',
        'width' => '0',
        'alt' => '',
    ];
}
