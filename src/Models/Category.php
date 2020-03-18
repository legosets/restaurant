<?php

namespace Restaurant\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use LegoCMS\Models\BaseModel;
use LegoCMS\Models\Behaviours\HasTranslations;

/**
 * Class Category
 *
 * @category Models
 * @package  Restaurant\Models
 * @author   Basant Besra <besrabasant@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/lego-bricks/restaurant/blob/master/src/Models/Category.php
 */
class Category extends BaseModel implements TranslatableContract
{
    use HasTranslations;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'author'
    ];

    /**
     * The attributes that are translated.
     *
     * @var array
     */
    public $translatedAttributes = [
        'name',
        'description'
    ];
}
