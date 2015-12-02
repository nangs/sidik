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
        $id = 0;

        if ($karyawan = $this->route('karyawan')) {
            $id = $karyawan->id;
        }

        return [
            'nik'           => 'required|max:255|unique:karyawan,nik,'.$id,
            'nama'          => 'required|max:255',
            'jns_kelamin'   => 'boolean',
            'tempat_lahir'  => 'required',
            'tgl_lahir'     => 'date|required',
            'kota_asal'     => 'required',
            'alamat'        => 'required',
            'phone'         => 'required',
            'email'         => 'email|unique:karyawan,email,'.$id,
            'guru'          => 'boolean'
        ];
    }
}
