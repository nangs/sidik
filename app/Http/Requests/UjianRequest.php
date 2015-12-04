<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class UjianRequest extends Request
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
            'ta_id'         => 'required|integer', 
            'jenjang_id'    => 'required|integer', 
            'tingkat_id'    => 'required|integer', 
            'jenis_id'      => 'required|integer', 
            'mapel_id'      => 'required|integer', 
            'tanggal'       => 'required|date', 
            'dari'          => 'required|time', 
            'sampai'        => 'required|time'
        ];
    }
}
