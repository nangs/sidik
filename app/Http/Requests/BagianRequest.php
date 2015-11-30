<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class BagianRequest extends Request
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
        $bagian = $this->route('bagian');

        return [
            'kode'  => 'required|max:10|unique:bagian,kode,'.$bagian->id,
            'nama'  => 'required|max:255|unique:bagian,nama,'.$bagian->id
        ];
    }
}
