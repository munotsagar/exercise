<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|min:6',
            'password' => 'required',
            'email' => 'required|email'
        ];
    }

    public function messages()
    {
        return [
            'username.required'  => 'Please enter valid UserName...',
            'password.required' => 'Please enter valid Password...',
            'email.required' => 'Please enter valid Email...',
            'username.min' => 'Username must be min 6 char length',
            'email.email' => 'Email should be vaild'
        ];
    }
}
