<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class SiswaRequest extends Request
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

        if ($siswa = $this->route('siswa')) {
            $id = $siswa->id;
        }

        return [
            'nis'               => 'required|max:255|unique:siswa,nis,'.$id,
            'nisn'              => 'required|max:255|unique:siswa,nisn,'.$id,
            'nama'              => 'required|max:255',
            'jns_kelamin'       => 'boolean',
            'tempat_lahir'      => 'required',
            'tgl_lahir'         => 'date|required',
            'wali_id'           => 'required|integer',
            'ayah_id'           => 'required|integer',
            'ibu_id'            => 'required|integer',
            'wn'                => 'required|in:WNI,WNA', 
            'suku'              => 'required', 
            'status_anak'       => 'required|in:Kandung,Tiri,Angkat', 
            'gol_darah'         => 'required|in:A,B,AB,O', 
            // 'riwayat_penyakit'  => 'required',
            // 'kelainan'          => 'required', 
            // 'hobby'             => 'required', 
            'tinggi'            => 'integer', 
            'berat'             => 'integer', 
            'panggilan'         => 'required', 
            // 'agama'             => 'required', 
            'anak_ke'           => 'integer', 
            'sdr_kandung'       => 'integer', 
            'sdr_angkat'        => 'integer', 
            'sdr_tiri'          => 'integer', 
            'bahasa'            => 'required', 
            'active'            => 'boolean', 
            'alamat'            => 'required|max:255', 
            // 'alamat_kos'        => 'required|max:255', 
            // 'phone'             => 'required|max:30', 
            'tinggal_dengan'    => 'required', 
            'jarak_ke_sekolah'  => 'integer', 
            // 'transortasi'       => 'required'
        ];
    }
}
