<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class WaliRequest extends Request
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

        if ($wali = $this->route('wali')) {
            $id = $wali->id;
        }

        return [
            'nama'          => 'required',
            'alamat'        => 'required',
            'email'         => 'email|unique:wali,email,'.$id,
            'phone'         => 'required',
            'jns_kelamin'   => 'required',
            'hub_keluarga'  => 'required',
            'tempat_lahir'  => 'required', 
            'tgl_lahir'     => 'date|required', 
            'agama'         => 'required', 
            'wn'            => 'required', 
            'pendidikan_terakhir'   => 'required',
            'pekerjaan'     => 'required', 
            'penghasilan'   => 'integer', 
            'status'        => 'boolean', 
            // 'is_wali'       => 'boolean'
        ];
    }
}
