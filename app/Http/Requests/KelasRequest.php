<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class KelasRequest extends Request
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

        if ($kelas = $this->route('kelas')) {
            $id = $kelas->id;
        }

        return [
            'ta_id'         => 'required|integer',
            'tingkat_id'    => 'required|integer',
            'nama'          => 'required|unique:kelas,nama,'.$id,
            'ruang_id'      => 'required|integer',
            'jenjang_id'    => 'required|integer',
        ];
    }
}
