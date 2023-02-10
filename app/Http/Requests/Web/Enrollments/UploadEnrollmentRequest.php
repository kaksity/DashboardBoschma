<?php

namespace App\Http\Requests\Web\Enrollments;

use Illuminate\Foundation\Http\FormRequest;

class UploadEnrollmentRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'file' => ['required', 'mimes:xls,xlsx']
        ];
    }
}
