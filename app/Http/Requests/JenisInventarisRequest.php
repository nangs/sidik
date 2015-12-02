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
        $id = 0;

        if ($jenisInventaris = $this->route('jenisInventaris')) {
            $id = $jenisInventaris->id;
        }

        return [
            'kode'       => 'required|max:10|unique:jenis_inventaris,kode,'.$id,
            'nama'       => 'required|max:30|unique:jenis_inventaris,nama,'.$id,
            'keterangan' => 'max:255',
        ];
    }
}
