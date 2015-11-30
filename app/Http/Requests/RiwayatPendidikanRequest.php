<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class RiwayatPendidikanRequest extends Request
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
            // 'karyawan_id'   => 'required',
            // 'siswa_id'      => 'required',
            'jenjang'       => 'required_if:formal,1',
            // 'lama'          => 'required',
            'institusi'     => 'required|max:255',
            'keterangan'    => 'max:255',
            'kota'          => 'required',
            'masuk'         => 'required|integer',
            'lulus'         => 'required|integer',
            'formal'        => 'boolean',
        ];
    }
}