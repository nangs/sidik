<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class KalenderAkademikRequest extends Request
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
            'dari'          => 'date|required',
            'sampai'        => 'date|required',
            'kegiatan'      => 'required|max:100',
            'warna'         => 'required|in:red,green,blue,yellow'
        ];
    }
}
