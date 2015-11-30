<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class RiwayatKepegawaianRequest extends Request
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
            'karyawan_id'       => 'required|integer',
            'jenis'             => 'required',
            'nomor_sk'          => 'required',
            'tanggal_sk'        => 'date|required',
            'tmt'               => 'date|required',
            'masa_kerja'        => 'required',
            'golongan'          => 'required',
            'tempat'            => 'required',
            'jabatan'           => 'required',
            // 'gapok'             => 'required',
        ];
    }
}
