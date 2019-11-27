<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            'name'  => 'required|min:5|max:20',
            'email'     => 'required',
            'password'  => 'required|min:5|max:10',
        ];
    }

    
    public function messages()
    {
        return [
            'username.required' => 'სახელი სავალდებულო ველია',
            'username.min' => 'უნდა იყოს მინ. 10 სიმბოლო',
            'email.required' => 'ელ.ფოსტა სავალდებულო ველია',
            'password.required' => 'password required',
            'password.min' => 'min pwd error',
            'password.max' => 'max pwd error',
        ];
    }
}
