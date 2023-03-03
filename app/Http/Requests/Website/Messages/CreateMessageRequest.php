<?php

namespace App\Http\Requests\Website\Messages;

use Illuminate\Foundation\Http\FormRequest;

class CreateMessageRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'full_name' => ['required', 'string', 'between:3,200'],
            'email_address' => ['required', 'string', 'email'],
            'subject' => ['required', 'string', 'min:3', 'max:200'],
            'content' => ['required', 'string', 'between:10,1000'],
        ];
    }

    public function messages()
    {
        return [
            'full_name.required' => 'Full Name is required',
            'full_name.between' => 'Full Name must be between 3 to 200 characters',
            'email_address.required' => 'Email Address is required',
            'email_address.email' => 'Email Address is not valid',
            'subject.required' => 'Subject is required',
            'subject.between' => 'Subject must be between 3 to 200 characters',
            'content.required' => 'Message is required',
            'content.between' => 'Message must be between 10 to 1000 characters'
        ];
    }
}
