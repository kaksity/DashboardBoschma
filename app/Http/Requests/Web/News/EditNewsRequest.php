<?php

namespace App\Http\Requests\Web\News;

use Illuminate\Foundation\Http\FormRequest;

class EditNewsRequest extends FormRequest
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
    public function messages()
    {
        return [
            'title.required' => 'News title is required',
            'title.between' => 'News title must be between 3 to 200 characters',
            'content.required' => 'News content is required',
            'content.between' => 'News content must be between 10 to 1000 characters'
        ];
    }
}
