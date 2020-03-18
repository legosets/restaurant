<?php

namespace Restaurant\Models;

use LegoCMS\Models\BaseModel;
use LegoCMS\Models\Behaviours\HasRevisions;

/**
 * Class MenuItem
 *
 * @category Models
 * @package  Restaurant\Models
 * @author   Basant Besra <besrabasant@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/lego-bricks/restaurant/blob/master/src/Models/MenuItem.php
 */
class MenuItem extends BaseModel
{
    use HasRevisions;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
}
