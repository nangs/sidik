<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class JadwalPelajaranRequest extends Request
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
            'tingkat_id'    => 'required|integer', 
            'kelas_id'      => 'required|integer', 
            'jam_id'        => 'required|integer', 
            'ruang_id'      => 'required|integer',
            'hari'          => 'required|integer', 
            'guru_id'       => 'required|integer', 
            'mapel_id'      => 'required|integer', 
            'keterangan'    => 'max:255'
        ];
    }
}
