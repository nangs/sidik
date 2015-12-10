<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalonSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asal_sekolah', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 30);
            $table->string('nss', 20);
            $table->string('npsn', 20);
            $table->string('kecamatan', 30);
            $table->string('kota', 30);
            $table->string('propinsi', 30);
            $table->timestamps();
        });

        Schema::create('calon_siswa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('asal_sekolah_id')->unsigned();
            $table->string('nama', 50);
            $table->boolean('jenis_kelamin');
            $table->string('nisn', 20);
            $table->string('nis', 20);
            $table->string('nik', 20);
            $table->string('tempat_lahir', 30);
            $table->date('tanggal_lahir');
            $table->smallInteger('tinggi_badan')->unsigned();
            $table->smallInteger('berat_badan')->unsigned();
            $table->smallInteger('berkebutuhan_khusus')->unsigned();
            $table->smallInteger('jumlah_saudara')->unsigned();
            $table->integer('psb_id')->unsigned();
            $table->timestamps();
        });

        Schema::create('beasiswa_calon_siswa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('calon_siswa_id')->unsigned();
            $table->string('jenis', 2);
            $table->string('sumber', 50);
            $table->smallInteger('tahun_mulai')->unsigned();
            $table->smallInteger('tahun_selesai')->unsigned();
            $table->timestamps();
        });

        Schema::create('prestasi_calon_siswa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('calon_siswa_id')->unsigned();
            $table->smallInteger('tahun')->unsigned();
            $table->string('lomba', 50);
            $table->boolean('juara_ke');
            $table->boolean('tingkat');
            $table->boolean('jenis');
            $table->timestamps();
        });

        Schema::create('orang_tua_calon_siswa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('calon_siswa_id')->unsigned();
            $table->string('hubungan', 10);
            $table->string('nama', 30);
            $table->smallInteger('tahun_lahir')->unsigned();
            $table->smallInteger('pendidikan')->unsigned();
            $table->smallInteger('pekerjaan')->unsigned();
            $table->boolean('penghasilan_bulanan');
            $table->string('alamat', 50);
            $table->string('rt', 3);
            $table->string('rw', 3);
            $table->string('kode_pos', 5);
            $table->string('kelurahan', 30);
            $table->string('kecamatan', 30);
            $table->string('kota', 30);
            $table->string('provinsi', 30);
            $table->string('telepon_rumah', 30);
            $table->string('hp', 30);
            $table->string('agama', 15);
            $table->boolean('is_wali');
            $table->timestamps();
        });

        Schema::create('alamat_calon_siswa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('calon_siswa_id')->unsigned();
            $table->boolean('jenis_tinggal');
            $table->string('alamat', 50);
            $table->string('rt', 3);
            $table->string('rw', 3);
            $table->string('kode_pos', 5);
            $table->string('kelurahan', 30);
            $table->string('kecamatan', 30);
            $table->string('kota', 30);
            $table->string('provinsi', 30);
            $table->string('telepon_rumah', 30);
            $table->string('hp', 30);
            $table->smallInteger('jarak_tempat_tinggal_ke_sekolah')->unsigned();
            $table->smallInteger('alat_trasnportasi_ke_sekolah')->unsigned();
            $table->string('email', 50);
            $table->timestamps();
        });

        // TODO : Lengkapi ini, bukti bayar formulir, uang pangkal, surat pernyataan khidmah, santri baru, wali
        Schema::create('psb', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomor_pendaftaran', 30);
            $table->date('tanggal_pendaftaran');
            $table->integer('jenjang_id')->unsigned();
            $table->integer('tingkat_id')->unsigned();
            $table->boolean('step');
            $table->boolean('status');
            $table->string('keterangan');
            $table->timestamps();
        });

        Schema::create('dokumen_calon_siswa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('calon_siswa_id')->unsigned();
            $table->string('jenis', 50);
            $table->string('file');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('calon_siswa');
        Schema::drop('asal_sekolah');
        Schema::drop('beasiswa_calon_siswa');
        Schema::drop('prestasi_calon_siswa');
        Schema::drop('alamat_calon_siswa');
        Schema::drop('orang_tua_calon_siswa');
        Schema::drop('psb');
        Schema::drop('dokumen_calon_siswa');
    }
}
