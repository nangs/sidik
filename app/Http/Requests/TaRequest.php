<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class TaRequest extends Request
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
            'periode'   => 'required|unique:ta',
            'start'     => 'required|date',
            'end'       => 'required|date',
            'active'    => 'boolean',
        ];
    }
}
