<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class KategoriBukuRequest extends Request
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
            'kode'       => 'required|max:10|unique:kategori_buku',
            'nama'       => 'required|max:30|unique:kategori_buku',
            'keterangan' => 'max:255',
        ];
    }
}
