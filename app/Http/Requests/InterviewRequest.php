<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Mews\Purifier\Facades\Purifier;

class InterviewRequest extends FormRequest
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
      'call_details' => 'string|nullable',
      'date_time' => 'date|required'
    ];
  }

  protected function prepareForValidation()
  {
    $this->merge([
      'call_details' => Purifier::clean($this->call_details),
    ]);
  }
}
