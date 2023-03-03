<?php

namespace App\Http\Requests\Web\Messages;

use Illuminate\Foundation\Http\FormRequest;

class ListMessagesRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'per_page' => ['required', 'integer', 'max:1000']
        ];
    }
}
