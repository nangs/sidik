<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'The :attribute must be accepted.',
    'active_url'           => 'The :attribute is not a valid URL.',
    'after'                => 'The :attribute must be a date after :date.',
    'alpha'                => 'The :attribute may only contain letters.',
    'alpha_dash'           => 'The :attribute may only contain letters, numbers, and dashes.',
    'alpha_num'            => 'The :attribute may only contain letters and numbers.',
    'array'                => 'The :attribute must be an array.',
    'before'               => 'The :attribute must be a date before :date.',
    'between'              => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => 'The :attribute must have between :min and :max items.',
    ],
    'boolean'              => 'The :attribute field must be true or false.',
    'confirmed'            => 'The :attribute confirmation does not match.',
    'date'                 => 'The :attribute is not a valid date.',
    'date_format'          => 'The :attribute does not match the format :format.',
    'different'            => 'The :attribute and :other must be different.',
    'digits'               => 'The :attribute must be :digits digits.',
    'digits_between'       => 'The :attribute must be between :min and :max digits.',
    'email'                => ':attribute tidak valid.',
    'exists'               => 'The selected :attribute is invalid.',
    'filled'               => 'The :attribute field is required.',
    'image'                => 'The :attribute must be an image.',
    'in'                   => 'The selected :attribute is invalid.',
    'integer'              => 'The :attribute must be an integer.',
    'ip'                   => 'The :attribute must be a valid IP address.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => ':attribute harus minimal :min karakter.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => ':attribute harus angka.',
    'regex'                => 'The :attribute format is invalid.',
    'required'             => ':attribute harus diisi.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => ':attribute harus diisi.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => ':attribute dan :other harus sama.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'               => 'The :attribute must be a string.',
    'timezone'             => 'The :attribute must be a valid zone.',
    'unique'               => ':attribute sudah terdaftar.',
    'url'                  => 'The :attribute format is invalid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        
        'psb' => [
            'tahun_ajaran'             => 'Tahun Ajaran',
            'jenjang'                  => 'Jenjang',
            'tingkat'                  => 'Tingkat',
            'metode_pembayaran'        => 'Metode Pembayaran',
            'tanggal_pembayaran'       => 'Tanggal Pembayaran',
            'jumlah_pembayaran'        => 'Jumlah Pembayaran',
            'bank_asal'                => 'Bank Asal',
            'rekening_asal'            => 'Nomor Rekening Asal',
            'pemegang_rekening_asal'   => 'Pemegang Rekening Asal',
            'rekening_tujuan_id'       => 'Rekening Tujuan',
        ],

        'calonSiswa' => [
            'nama'           => 'Nama Calon Siswa',
            'jenis_kelamin'  => 'Jenis Kelamin Calon Siswa',
            'nisn'           => 'NISN Calon Siswa',
            'tempat_lahir'   => 'Tempat Lahir Calon Siswa',
            'tanggal_lahir'  => 'Tanggal Lahir Calon Siswa',
            'tinggi_badan'   => 'Tinggi Badan Calon Siswa',
            'berat_badan'    => 'Berat Badan Calon Siswa',
            'jumlah_saudara' => 'Jumlah Saudara Calon Siswa',
        ],

        'Wali'  => [
            'nama'                  => 'Nama Wali',
            'tahun_lahir'           => 'Tahun Lahir Wali',
            'agama'                 => 'Agama Wali',
            'pekerjaan'             => 'Pekerjaan Wali',
            'penghasilan_bulanan'   => 'Penghasilan Bulanan Wali',
            'pendidikan'            => 'Pendidikan Wali',
            'alamat'                => 'Alamat Wali',
            'rt'                    => 'RT',
            'rw'                    => 'RW',
            'kelurahan'             => 'Kelurahan',
            'kode_pos'              => 'Kode Pos',
            'kecamatan'             => 'Kecamatan',
            'kota'                  => 'Kota',
            'provinsi'              => 'Provinsi',
            'hp'                    => 'HP',
            'email'                 => 'Email Wali'
        ],

        'Ayah'  => [
            'nama'                  => 'Nama Ayah',
            'tahun_lahir'           => 'Tahun Lahir Ayah',
            'agama'                 => 'Agama Ayah',
            'pekerjaan'             => 'Pekerjaan Ayah',
            'penghasilan_bulanan'   => 'Penghasilan Bulanan Ayah',
            'pendidikan'            => 'Pendidikan Ayah',
            'alamat'                => 'Alamat Ayah',
            'rt'                    => 'RT',
            'rw'                    => 'RW',
            'kelurahan'             => 'Kelurahan',
            'kode_pos'              => 'Kode Pos',
            'kecamatan'             => 'Kecamatan',
            'kota'                  => 'Kota',
            'provinsi'              => 'Provinsi',
            'hp'                    => 'HP',
            'email'                 => 'Email Ayah'
        ],

        'Ibu'  => [
            'nama'                  => 'Nama Ibu',
            'tahun_lahir'           => 'Tahun Lahir Ibu',
            'agama'                 => 'Agama Ibu',
            'pekerjaan'             => 'Pekerjaan Ibu',
            'penghasilan_bulanan'   => 'Penghasilan Bulanan Ibu',
            'pendidikan'            => 'Pendidikan Ibu',
            'alamat'                => 'Alamat Ibu',
            'rt'                    => 'RT',
            'rw'                    => 'RW',
            'kelurahan'             => 'Kelurahan',
            'kode_pos'              => 'Kode Pos',
            'kecamatan'             => 'Kecamatan',
            'kota'                  => 'Kota',
            'provinsi'              => 'Provinsi',
            'hp'                    => 'HP',
            'email'                 => 'Email Ibu'
        ],

        'asalSekolah' => [
            'nama'      => 'Nama Sekolah',
            'nss'       => 'NSS Sekolah',
            'npsn'      => 'NPSN Sekolah',
            'alamat'    => 'Alamat Sekolah',
            'kecamatan' => 'Kecamatan Sekolah',
            'kota'      => 'Kota Sekolah',
            'propinsi'  => 'Propinsi Sekolah',
        ],

        'alamatCalonSiswa' => [
            'alamat'       => 'Alamat',
            'rt'           => 'RT',
            'rw'           => 'RW',
            'kelurahan'    => 'Kelurahan',
            'kode_pos'     => 'Kode Pos',
            'kecamatan'    => 'Kecamatan',
            'kota'         => 'Kota',
            'provinsi'     => 'Propinsi',
            'email'        => 'Email',
            'jarak_tempat_tinggal_ke_sekolah'  => 'Jarak Tempat Tinggal ke Sekolah',
            'alat_transportasi_ke_sekolah'     => 'Alat Transportasi ke Sekolah',
        ],

        // DOKUMEN
        'kk'        => 'Kartu Keluarga',
        'akta'      => 'Akta Kelahiran',
        'foto'      => 'Pas Foto',
        'rapor'     => 'Rapor',
        'sk_sehat'  => 'Surat Keterangan Sehat',

        // USER
        'name'                  => 'Nama Pendaftar',
        'email'                 => 'Email Pendaftar',
        'password'              => 'Password Pendaftar',
        'password_confirmation' => 'Konfirmasi Password'
    ],

];
