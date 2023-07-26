<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => [
                'exists:users',
                'required',
                'email'
            ],
            'password' => [
                'required',
                Password::default()
                    ->min(8)
            ]
        ];
    }

    public function messages(): array
    {
        return [
            'email' => __('validation.invalid_credentials'),
            'password' => __('validation.invalid_credentials')
        ];
    }
}
