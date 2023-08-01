<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Contracts\Validation\Validator;
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

    protected function getValidatorInstance(): Validator
    {
        session()->flash('previous-travel-insurance');
        return parent::getValidatorInstance();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'plan_name' => [
                'required'
            ],
            'policy_number' => [
                'required'
            ],
            'coverage_start_date' => [
                'required',
                'date',
                'before:coverage_end_date'
            ],
            'coverage_end_date' => [
                'required',
                'date',
                'after:coverage_start_date'
            ],
            'insurance_company' => [
                'required'
            ]
        ];
    }

    public function attributes(): array
    {
        return [
            'plan_name' => __('translations.plan-name'),
            'policy_number' => __('translations.policy-number'),
            'coverage_start_date' => __('translations.coverage-start-date'),
            'coverage_end_date' => __('translations.coverage-end-date'),
            'insurance_company' => __('translations.insurance-company')
        ];
    }
}
