<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
            // 'user_id' => 'required|ulid',
            'id' => 'required|ulid',
            'username' => 'required|string',
            'name_prefix' => 'required|string',
            'first_name' => 'required|string',
            'middle_name_initial' => 'required|string',
            'last_name' => 'required|string',
            'gender' => 'required|string',
            'email' => 'required|string',
            'date_of_birth' => 'required|string',
            'time_of_birth' => 'required|string',
            'age_in_years' => 'required|string',
            'date_of_joining' => 'required|string',
            'age_in_company' => 'required|string',
            'phone_number' => 'required|string',
            'place_name' => 'required|string',
            'county' => 'required|string',
            'city' => 'required|string',
            'zip' => 'required|string',
            'region' => 'required|string',
        ];
    }
}
