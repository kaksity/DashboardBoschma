<?php

namespace App\Http\Requests\Web\News;

use Illuminate\Foundation\Http\FormRequest;

class CreateNewsRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string', 'between:3,200'],
            'is_published' => ['nullable'],
            'content' => ['required', 'string', 'between:10,1000']
        ];
    }
}
