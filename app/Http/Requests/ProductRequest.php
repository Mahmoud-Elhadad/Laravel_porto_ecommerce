<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            "price" => "required|numeric|min:1" ,
            "sale" => "required|numeric|min:0" ,
            "count" => "required|integer|min:0" ,
            "cat_id" => "required|exists:cats,id" ,
            "img" => "required|array" ,
            "img.*" => "image|mimes:png,jpg"
        ];
    }
}
