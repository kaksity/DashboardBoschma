<?php

namespace App\Http\Requests\Web\Website;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNumberOfImpactsRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'formal_sector_beneficiaries' => ['required', 'string', 'between:1,1000'],
            'bhcpf_Beneficiaries' => ['required', 'string', 'between:1,1000'],
            'health_care_providers' => ['required', 'string', 'between:1,1000'],
            'impacted_lives' => ['required', 'string', 'between:1,1000'],
        ];
    }

    public function messages()
    {
        return [
            'formal_sector_beneficiaries.required' => 'Formal sector beneficiaries is required',
            'formal_sector_beneficiaries.between' => 'Formal sector beneficiaries must be between 1 to 1000 characters',
            'bhcpf_Beneficiaries.required' => 'BHCPF Beneficiaries is required',
            'bhcpf_Beneficiaries.between' => 'BHCPF Beneficiaries must be between 1 to 1000 characters',
            'health_care_providers.required' => 'Health care providers is required',
            'health_care_providers.between' => 'Health care providers must be between 1 to 1000 characters',
            'impacted_lives.required' => 'Impacted lives is required',
            'impacted_lives.between' => 'Impacted lives must be between 1 to 1000 characters'
        ];
    }
}
