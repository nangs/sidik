<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CalonSiswaRequest extends Request
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
            'nis'               => 'required', 
            'nisn'              => 'required', 
            'nik'               => 'required', 
            'nama'              => 'required', 
            'jenis_kelamin'     => 'boolean',
            'tempat_lahir'      => 'required', 
            'tanggal_lahir'     => 'date|required',
            'tinggi_badan'      => 'numeric', 
            'berat_badan'       => 'numeric', 
            // 'psb_id'            => 'required'
        ];
    }
}
