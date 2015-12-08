<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PsbRequest extends Request
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
            // 'nomor_pendaftaran'     => 'required',
            // 'tanggal_pendaftaran'   => 'required|date',
            'jenjang_id'            => 'required|integer',
            'tingkat_id'            => 'required|integer',
            'step'                  => 'required|integer',
            'status'                => 'required|boolean',
            'keterangan'            => 'max:255'
        ];
    }
}
