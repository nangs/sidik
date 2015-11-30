<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class InvTanahRequest extends Request
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
            'kode'                  => 'required|unique:inv_tanah', 
            'nama'                  => 'required', 
            'luas_total'            => 'integer', 
            'luas_bangunan'         => 'integer', 
            'luas_kosong'           => 'integer',
            'lokasi'                => 'required', 
            'batas_utara'           => 'required', 
            'batas_selatan'         => 'required', 
            'batas_barat'           => 'required', 
            'batas_timur'           => 'required',
            'asal_perolehan'        => 'required', 
            'asal_dana'             => 'required', 
            'sertifikat_hak'        => 'required', 
            'sertifikat_tgl'        => 'required|date', 
            'sertifikat_nomor'      => 'required',
            'njop'                  => 'required', 
            'tgl_dapat'             => 'date', 
            'nilai_asset'           => 'numeric'
        ];
    }
}
