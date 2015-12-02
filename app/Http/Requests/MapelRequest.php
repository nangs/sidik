<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class MapelRequest extends Request
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

        if ($mapel = $this->route('mapel')) {
            $id = $mapel->id;
        }

        return [
            'kode'  => 'required|unique:mapel,kode'.$id,
            'nama'  => 'required|unique:mapel,nama'.$id,
        ];
    }
}
