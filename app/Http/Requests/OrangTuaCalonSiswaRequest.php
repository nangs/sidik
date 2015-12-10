<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class OrangTuaCalonSiswaRequest extends Request
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
            // 'calon_siswa_id' => 'required',, 
            'hubungan'              => 'required', 
            'nama'                  => 'required',
            'tahun_lahir'           => 'numeric',
            'pendidikan'            => 'required',
            'pekerjaan'             => 'required',
            'penghasilan_bulanan'   => 'required',
            'alamat'                => 'required',
            'rt'                    => 'required',
            'rw'                    => 'required',
            'kode_pos'              => 'required',
            'kelurahan'             => 'required',
            'kecamatan'             => 'required',
            'kota'                  => 'required',
            'provinsi'              => 'required',
            'telepon_rumah'         => 'required',
            'hp'                    => 'required',
            'agama'                 => 'required', 
            'is_wali'               => 'boolean',
            'email'                 => 'email'
        ];
    }
}
