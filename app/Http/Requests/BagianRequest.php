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
        $id = 0;
        
        if ($bagian = $this->route('bagian')) {
            $id = $bagian->id;
        }

        return [
            'kode'  => 'required|max:10|unique:bagian,kode,'.$id,
            'nama'  => 'required|max:255|unique:bagian,nama,'.$id
        ];
    }
}
