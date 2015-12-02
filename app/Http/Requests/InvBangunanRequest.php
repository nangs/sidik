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
        $id = 0;

        if ($invBangunan = $this->route('invBangunan')) {
            $id = $invBangunan->id;
        }

        return [
            'tanah_id' => 'required',
            'kode' => 'required|unique:inv_bangunan,kode,'.$id, 
            'nama' => 'required|unique:inv_bangunan,nama,'.$id, 
            'luas' => 'integer|required', 
            'jumlah_lantai' => 'integer|required', 
            'tahun_pembangunan' => 'integer|required', 
            'tahun_selesai' => 'integer|required', 
            'tahun_pakai' => 'integer|required', 
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
            'nilai_asset' => 'integer', 
        ];
    }
}
