<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class TagsBukuRequest extends Request
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

        if ($tagsBuku = $this->route('tagsBuku')) {
            $id = $tagsBuku->id;
        }

        return [
            'nama'  => 'required|max:30|unique:tags_buku,nama,'.$id
        ];
    }
}
