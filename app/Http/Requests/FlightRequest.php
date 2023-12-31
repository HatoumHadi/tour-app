<?php

namespace App\Http\Requests;

use App\Definitions\FlightStatus;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class FlightRequest extends FormRequest
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
        session()->flash('previous-flight');
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
            'from' => [
                'required'
            ],
            'to' => [
                'required'
            ],
            'departure_time' => [
                'required',
                'date',
                'before:arrival_time'
            ],
            'arrival_time' => [
                'required',
                'date',
                'after:departure_time'
            ],
            'status' => [
                'required',
                new Enum(FlightStatus::class)
            ]
        ];
    }

    public function attributes(): array
    {
        return [
            'from' => __('translations.from'),
            'to' => __('translations.to'),
            'departure_time' => __('translations.departure-time'),
            'arrival_time' => __('translations.arrival-time'),
            'status' => __('translations.status'),
        ];
    }
}
