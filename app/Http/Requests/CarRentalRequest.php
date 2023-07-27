<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CarRentalRequest extends FormRequest
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
            'type' => [
                'required'
            ],
            'start_date' => [
                'required',
                'date',
                'before:end_date'
            ],
            'end_date' => [
                'required',
                'date',
                'after:start_date'
            ],
            'price' => [
                'required',
                'numeric'
            ]
        ];
    }
}
