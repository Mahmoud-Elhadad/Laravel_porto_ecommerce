<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            "name" => "required|string|min:3" ,
            "email" => "required|email|unique:admins,email" ,
            "password" => "required|string|min:6" ,
            "gender" => "required|in:male,female" ,
            "phone" => "required|string|starts_with:01| min:11|max:11|unique:admins,phone" ,
            "img" => "required|image|mimes:png,jpg"
        ];
    }
}
