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
        $id = 0;

        if ($kategoriBuku = $this->route('kategoriBuku')) {
            $id = $kategoriBuku->id;
        }

        return [
            'kode'       => 'required|max:10|unique:kategori_buku,kode,'.$id,
            'nama'       => 'required|max:30|unique:kategori_buku,nama'.$id,
            'keterangan' => 'max:255',
        ];
    }
}
