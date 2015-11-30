<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class SiswaRequest extends Request
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
            'nis'           => 'required|max:255|unique:siswa',
            'nama'          => 'required|max:255',
            'jns_kelamin'   => 'boolean',
            'tempat_lahir'  => 'required',
            'tgl_lahir'     => 'date|required',
            // 'wali_id'       => 'required'
        ];
    }
}
