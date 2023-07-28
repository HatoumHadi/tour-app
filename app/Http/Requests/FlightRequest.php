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
                'date'
            ],
            'arrival_time' => [
                'required',
                'date'
            ],
            'status' => [
                'required',
                new Enum(FlightStatus::class)
            ]
        ];
    }
}
