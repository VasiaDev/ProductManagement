<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:100',
            'description' => 'required|string',
            'price' => 'required|numeric|regex:/^\d{1,6}(\.\d{1,2})?$/'
        ];

    }

    public function messages(): array
    {
        return [
            'name.max' => 'Name cannot be more than 100 characters',
            'price.regex' => 'Maximum allowed value is 999999.99',
        ];
    }
}
