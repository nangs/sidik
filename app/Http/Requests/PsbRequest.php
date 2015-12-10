<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PsbRequest extends Request
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
            'tahun_ajaran'          => 'required',
            'jenjang'               => 'required|integer',
            'tingkat'               => 'required|integer',
            'keterangan'            => 'max:255',
            'tanggal_pembayaran'    => 'date|required', 
            'metode_pembayaran'     => 'required|in:Tunai,Setor Tunai Bank,Transfer ATM,Intenet Banking,SMS Banking',
            'jumlah_pembayaran'     => 'required|numerical', 
        ];
    }
}
