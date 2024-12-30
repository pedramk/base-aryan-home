<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePersonRequest extends FormRequest
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
            'first_name' => 'required',
            // 'last_name' => 'required',
            // 'mobile' => 'required',
            // 'birthdate' => 'required',
            // 'national_code' => 'required',
            // 'personal_code' => 'required',
            // 'nationality' => 'required',
            // 'job_start_date' => 'required',
            // 'address' => 'required',
        ];
    }
}
