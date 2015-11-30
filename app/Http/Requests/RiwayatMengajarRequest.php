<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class RiwayatMengajarRequest extends Request
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
            'karyawan_id'   => 'required|integer',
            'mapel'         => 'required',
            // 'tingkat'       => 'required',
            'institusi'     => 'required',
            'dari'          => 'required|integer',
            'sampai'        => 'required|integer',
            'durasi'        => 'required',
            'keterangan'    => 'max:255',
        ];
    }
}
