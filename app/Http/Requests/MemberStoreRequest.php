<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            'introducer_key' => ['required', 'unique:users'],
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'date_of_birth' => ['required'],
            'mobile' => ['sometimes'],
            'gender' => ['sometimes'],
            'position' => ['required'],
            'pan_number' => ['required'],
            'password' => ['required'],
        ];
    }
}
