<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAddressRequest extends FormRequest
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
           'line_1'=> 'required',
            'line_2'=> 'required',
            'city'=> 'required',
            'state'=> 'required',
            'zip'=> 'required',
        ];
    }
    public function messages(): array
    {
        return [
            "line_1.required"=>"Es necesario poner su nombre",
            "line_2.required"=>"Es necesario poner los apellidos",
            "city.required"=>"Es necesario poner su dirrecion",
            "state.required"=>"Es necesario poner su dirrecion",
            "zip.required"=>"Es necesario poner su dirrecion"
            
        ];
    }
}
