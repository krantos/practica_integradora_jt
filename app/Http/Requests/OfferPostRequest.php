<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferPostRequest extends FormRequest
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
            'position' => 'required|max:255',
						'publication_date' => 'date|nullable',
						'skills' => 'string|nullable',
						'experience' => 'string|nullable',
						'salary' => 'numeric|nullable',
						'url' => 'url:http,https|nullable'
        ];
    }
}
