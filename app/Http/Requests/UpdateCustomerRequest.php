<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerRequest extends FormRequest
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
           'first_name'=> 'required',
            'last_name'=> 'required',
            'city'=> 'required',
            'city'=> 'required',
        ];
    }
    public function messages(): array
    {
        return [
            "first_name.required"=>"Es necesario poner su nombre",
            "last_name.required"=>"Es necesario poner los apellidos",
            "addresses.required"=>"Es necesario poner su dirrecion"
            
        ];
    }
}
