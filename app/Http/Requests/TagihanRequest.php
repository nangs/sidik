<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class TagihanRequest extends Request
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
            'siswa_id'      => 'required',
            'ta_id'         => 'required',
            'jenis'         => 'required|max:30',
            'semester'      => 'required',
            // 'bulan'         => 'required',
            'jatuh_tempo'   => 'date',
            'tanggal_bayar' => 'date',
            'status'        => 'boolean',
            'keterangan'    => 'max:255',
            'nomor'         => 'required|max:30',
            'jumlah'        => 'required'
        ];
    }
}
