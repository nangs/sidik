<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

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
        $rules['POST'] = [
            // PSB
            'psb.jenjang'               => 'required|numeric',
            'psb.tingkat'               => 'required|numeric',
            'psb.tahun_ajaran'          => 'required',
            'psb.tanggal_daftar'        => 'date|required',
            // 'psb.metode_pembayaran'     => 'required',
            // 'psb.tanggal_pembayaran'    => 'date|required',
            // 'psb.jumlah_pembayaran'     => 'required|numeric',

            // Bank
            // 'psb.bank_asal'              => 'required_unless:psb.metode_pembayaran,Tunai',
            // 'psb.rekening_asal'          => 'required_unless:psb.metode_pembayaran,Tunai',
            // 'psb.pemegang_rekening_asal' => 'required_unless:psb.metode_pembayaran,Tunai',
            // 'psb.rekening_tujuan_id'     => 'required_unless:psb.metode_pembayaran,Tunai',

            // Data Siswa
            'calonSiswa.nama'           => 'required',
            'calonSiswa.jenis_kelamin'  => 'boolean',
        ];

        $rules['PUT'] = [
            // Data Siswa
            'calonSiswa.nama'           => 'required',
            'calonSiswa.jenis_kelamin'  => 'boolean',
            // 'calonSiswa.nisn'           => 'required_unless:psb.jenjang,1',
            // 'calonSiswa.tempat_lahir'   => 'required',
            'calonSiswa.tanggal_lahir'  => 'date|required',
            // 'calonSiswa.tinggi_badan'   => 'numeric',
            // 'calonSiswa.berat_badan'    => 'numeric',
            // 'calonSiswa.jumlah_saudara' => 'numeric',

            // Data Wali Calon Siswa
            'Wali.nama'                 => 'required',
            'Wali.tahun_lahir'          => 'numeric',
            'Wali.agama'                => 'required',
            // 'Wali.pekerjaan'            => 'required',
            // // 'Wali.penghasilan_bulanan'  => 'required',
            // 'Wali.pendidikan'           => 'required',
            // 'Wali.alamat'               => 'required',
            // 'Wali.rt'                   => 'required',
            // 'Wali.rw'                   => 'required',
            // 'Wali.kelurahan'            => 'required',
            // // 'Wali.kode_pos'             => 'required',
            // 'Wali.kecamatan'            => 'required',
            // 'Wali.kota'                 => 'required',
            // 'Wali.provinsi'             => 'required',
            // 'Wali.hp'                   => 'required',
            // 'Wali.email'                => 'email',

            // DATA AYAH
            'Ayah.nama'                 => 'required',
            'Ayah.tahun_lahir'          => 'numeric',
            'Ayah.agama'                => 'required',
            // 'Ayah.pekerjaan'            => 'required',
            // // 'Ayah.penghasilan_bulanan'  => 'required',
            // 'Ayah.pendidikan'           => 'required',
            // 'Ayah.alamat'               => 'required',
            // 'Ayah.rt'                   => 'required',
            // 'Ayah.rw'                   => 'required',
            // 'Ayah.kelurahan'            => 'required',
            // // 'Ayah.kode_pos'             => 'required',
            // 'Ayah.kecamatan'            => 'required',
            // 'Ayah.kota'                 => 'required',
            // 'Ayah.provinsi'             => 'required',
            // // 'Ayah.hp'                   => 'required',
            // 'Ayah.email'                => 'email',

            // DATA IBU
            'Ibu.nama'                 => 'required',
            'Ibu.tahun_lahir'          => 'numeric',
            'Ibu.agama'                => 'required',
            // 'Ibu.pekerjaan'            => 'required',
            // // 'Ibu.penghasilan_bulanan'  => 'required',
            // 'Ibu.pendidikan'           => 'required',
            // 'Ibu.alamat'               => 'required',
            // 'Ibu.rt'                   => 'required',
            // 'Ibu.rw'                   => 'required',
            // 'Ibu.kelurahan'            => 'required',
            // // 'Ibu.kode_pos'             => 'required',
            // 'Ibu.kecamatan'            => 'required',
            // 'Ibu.kota'                 => 'required',
            // 'Ibu.provinsi'             => 'required',
            // // 'Ibu.hp'                => 'required',
            // 'Ibu.email'                => 'email',

            // ALAMAT CALON SISWA
            'alamatCalonSiswa.alamat'       => 'required',
            'alamatCalonSiswa.rt'           => 'required',
            'alamatCalonSiswa.rw'           => 'required',
            'alamatCalonSiswa.kelurahan'    => 'required',
            // 'alamatCalonSiswa.kode_pos'     => 'required',
            'alamatCalonSiswa.kecamatan'    => 'required',
            'alamatCalonSiswa.kota'         => 'required',
            'alamatCalonSiswa.provinsi'     => 'required',
            'alamatCalonSiswa.jarak_tempat_tinggal_ke_sekolah'  => 'numeric|required',
            'alamatCalonSiswa.alat_transportasi_ke_sekolah'     => 'required',
            // 'alamatCalonSiswa.hp'        => 'required',
            'alamatCalonSiswa.email'        => 'email',

            // ASAL SEKOLAH
            // 'asalSekolah.nama'      => 'required_unless:psb.jenjang,1',
            // 'asalSekolah.nss'       => 'required_unless:psb.jenjang,1',
            // 'asalSekolah.npsn'      => 'required_unless:psb.jenjang,1',
            // 'asalSekolah.alamat'    => 'required_unless:psb.jenjang,1',
            // 'asalSekolah.kecamatan' => 'required_unless:psb.jenjang,1',
            // 'asalSekolah.kota'      => 'required_unless:psb.jenjang,1',
            // 'asalSekolah.propinsi'  => 'required_unless:psb.jenjang,1',

            // DOKUMEN
            // 'kk'        => 'required',
            // 'akta'      => 'required',
            // 'foto'      => 'required',
            // 'rapor'     => 'required_unless:psb.jenjang,1',
            // 'sk_sehat'  => 'required',
        ];

        return $rules[$this->method];
    }
}
