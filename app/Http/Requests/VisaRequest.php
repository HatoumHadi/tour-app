<?php

namespace App\Http\Requests;

use App\Definitions\VisaStatus;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class VisaRequest extends FormRequest
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
            'phone' => [
                'required'
            ],
            'application_date' => [
                'required',
                'date'
            ],
            'status' => [
                'required',
                new Enum(VisaStatus::class)
            ]
        ];
    }
}
