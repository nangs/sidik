<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class KaryawanRequest extends Request
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
            'nik'           => 'required|max:255',
            'nama'          => 'required|max:255',
            'jns_kelamin'   => 'required',
            'tempat_lahir'  => 'required',
            'tgl_lahir'     => 'date|required',
            'kota_asal'     => 'required',
            'alamat'        => 'required',
            'phone'         => 'required',
            'email'         => 'email',
            'guru'          => 'boolean'
        ];
    }
}
