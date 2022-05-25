<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSalesmanRequest extends FormRequest
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
            'name' => 'required|max:255',
            'email' => 'required',
            'password' => 'required',
            'username' => 'required',
            'phone' => 'required',
            'nid' => 'required',
            'location' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'name require',
            'email.required' => 'email require',
            'password.required' => 'password require',
            'username.required' => 'username require',
            'phone.required' => 'phone require',
            'nid.required' => 'nid require',
            'location.required' => 'location require',
        ];
    }
}
