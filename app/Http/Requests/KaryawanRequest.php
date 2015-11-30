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
        $karyawan = $this->route('karyawan');

        return [
            'nik'           => 'required|max:255|unique:karyawan,nik,'.$karyawan->id,
            'nama'          => 'required|max:255',
            'jns_kelamin'   => 'boolean',
            'tempat_lahir'  => 'required',
            'tgl_lahir'     => 'date|required',
            'kota_asal'     => 'required',
            'alamat'        => 'required',
            'phone'         => 'required',
            'email'         => 'email|unique:karyawan,email,'.$karyawan->id,
            'guru'          => 'boolean'
        ];
    }
}
