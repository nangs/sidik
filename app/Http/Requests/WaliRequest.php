<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class WaliRequest extends Request
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
        return [
            'nama'          => 'required',
            'alamat'        => 'required',
            'email'         => 'email|unique:wali',
            'phone'         => 'required',
            'jns_kelamin'   => 'required',
            'hub_keluarga'  => 'required'
        ];
    }
}
