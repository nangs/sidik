<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class TingkatRequest extends Request
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

        if ($tingkat = $this->route('tingkat')) {
            $id = $tingkat->id;
        }

        return [
            'nama'          => 'required|unique:tingkat,nama,'.$id,
            'keterangan'    => 'max:255',
            'jenjang_id'    => 'required|integer'
        ];
    }
}
