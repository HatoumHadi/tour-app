<?php

namespace App\Http\Requests;

use App\Definitions\PackageType;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class PackageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->id();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => [
                'required'
            ],
            'description' => [
                'required'
            ],
            'date' => [
                'required',
                'date'
            ],
            'duration' => [
                'required',
                'numeric'
            ],
            'price' => [
                'required',
                'numeric'
            ],
            'type' => [
                'required',
                new Enum(PackageType::class)
            ],
        ];
    }
}
