<?php

namespace Restaurant\Http\Requests\Admin;

use LegoCMS\Http\Requests\Admin\FormRequest;
use LegoCMS\Http\Requests\Contracts\ShouldValidateTranslatableAttributes;

/**
 * Class CategoryFormRequest
 *
 * @package Restaurant\Http\Requests\Admin
 */
class CategoryFormRequest extends FormRequest implements ShouldValidateTranslatableAttributes
{
    // protected function prepareForValidation()
    // {
    //     \dd(\request()->all());
    // }

    public function applyRules()
    {
        return [
            'author' => 'required',
        ];
    }

    public function applyTranslatableRules()
    {
        return [
            'name' => 'required'
        ];
    }

    public function messages()
    {
        return [
            '*.name.required' => 'The name field is required.',
        ];
    }
}
