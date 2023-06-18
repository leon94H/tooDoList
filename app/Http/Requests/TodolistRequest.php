<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodolistRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return  [
            
                'name'=>'required',
                'email'=>'required',
                'password'=>'requred',
                'password'=> 'password_confirmation',
                
                
            
        ];
    }


    public function messages(): array
    {
        return [
            
            'name.required' => 'the name is required',
            'email.required'=>'the email is required',
            'password.required'=>'the password is required',
           
            
        ];
    }
}
