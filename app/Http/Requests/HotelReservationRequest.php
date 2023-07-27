<?php

namespace App\Http\Requests;

use App\Definitions\HotelReservationStatus;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class HotelReservationRequest extends FormRequest
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
            'check_in' => [
                'required' .
                'date',
                'before:check_out'
            ],
            'check_out' => [
                'required',
                'date',
                'after:check_in'
            ],
            'number_of_guests' => [
                'required',
                'numeric'
            ],
            'status' => [
                'required',
                new Enum(HotelReservationStatus::class)
            ]
        ];
    }
}
