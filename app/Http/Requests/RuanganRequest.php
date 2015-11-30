<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class RuanganRequest extends Request
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
            'bangunan_id'           => 'required|integer', 
            'penanggungjawab_id'    => 'required|integer', 
            'kode'                  => 'required|max:10|unique:ruangan', 
            'nama'                  => 'required|max:30',
            'luas'                  => 'integer|required', 
            'kapasitas'             => 'integer|required', 
            'penggunaan'            => 'required', 
            'kondisi'               => 'required|in:Baik,Rusak Ringan,Rusak Berat'
        ];
    }
}
