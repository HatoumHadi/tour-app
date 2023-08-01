<?php

namespace App\Http\Requests;

use App\Actions\ValidationAction;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class ChangeLanguageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function failedValidation(Validator $validator)
    {
        return redirect()->route('home.index')->with([
            'message' => __('translations.please-choose-valid-language'),
            'status' => 'error'
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'lang' => [
                'exists:languages,code'
            ]
        ];
    }
}
