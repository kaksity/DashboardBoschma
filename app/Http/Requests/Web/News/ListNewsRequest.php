<?php

namespace App\Http\Requests\Web\News;

use Illuminate\Foundation\Http\FormRequest;

class ListNewsRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'per_page' => ['integer', 'max:1000']
        ];
    }
}
