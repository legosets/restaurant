<?php

namespace Restaurant\Models\Translations;

use LegoCMS\Models\BaseModel;

/**
 * Class CategoryTranslation
 *
 * @category Models
 * @package  Restaurant\Models
 * @author   Basant Besra <besrabasant@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/lego-bricks/restaurant/blob/master/src/Models/CategoryTranslation.php
 */
class CategoryTranslation extends BaseModel
{
    protected $casts = [
        'active' => 'boolean'
    ];
}
