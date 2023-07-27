<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class TravelInsuranceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required'
            ],
            'policy_number' => [
                'numeric',
                'required',
            ],
            'coverage_start_date' => [
                'required',
                'date',
                'before:coverage_end_date'
            ],
            'coverage_end_date' => [
                'after:coverage_start_date',
                'required',
                'date'
            ],
            'insurance_company' => [
                'required'
            ]
        ];
    }
}
