<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class JenisInventarisRequest extends Request
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
            'kode'       => 'required|max:10|unique:jenis_inventaris',
            'nama'       => 'required|max:30',
            'keterangan' => 'max:255',
        ];
    }
}
