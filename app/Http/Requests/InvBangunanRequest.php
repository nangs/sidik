<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class InvBangunanRequest extends Request
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
            'tanah_id' => 'required',
            'kode' => 'required', 
            'nama' => 'required', 
            'luas' => 'numeric|required', 
            'jumlah_lantai' => 'numeric|required', 
            'tahun_pembangunan' => 'numeric|required', 
            'tahun_selesai' => 'numeric|required', 
            'tahun_pakai' => 'numeric|required', 
            'alamat' => 'required', 
            'nomor_imb' => 'required', 
            'tgl_imb' => 'date|required', 
            'asal_perolehan' => 'required', 
            'asal_dana' => 'required', 
            'nomor_bukti_perolehan' => 'required', 
            'rekanan' => 'required', 
            'kondisi' => 'required', 
            'material_lantai' => 'required', 
            'material_tembok' => 'required', 
            'material_atap' => 'required', 
            'nilai_asset' => 'numeric', 
        ];
    }
}
