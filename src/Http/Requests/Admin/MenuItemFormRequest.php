<?php

namespace Restaurant\Http\Requests\Admin;

use LegoCMS\Http\Requests\Admin\FormRequest;

/**
 * Class MenuItemFormRequest
 *
 * @package Restaurant\Http\Requests\Admin
 */
class MenuItemFormRequest extends FormRequest
{
    public function applyRules()
    {
        return [
            'name' => 'required'
        ];
    }
}
