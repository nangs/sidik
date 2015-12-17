<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class UserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = 0;
        
        if ($user = $this->route('user')) {
            $id = $user->id;
        }

        $rules = [
            'name'      => 'required|max:255',
            'email'     => 'required|max:255|unique:users,email,'.$id,
            'role'      => 'required'
        ];

        if ($this->method == 'POST') {
            $rules['password']  = 'required|confirmed|min:6';
        }

        return $rules;
    }
}
