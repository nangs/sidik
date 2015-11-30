<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsOnSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('siswa', function (Blueprint $table) {
            $table->string('nisn');
            $table->string('wn', 3);
            $table->string('suku', 20);
            $table->string('status_anak', 10);
            $table->string('gol_darah', 2);
            $table->string('riwayat_penyakit');
            $table->string('kelainan');
            $table->string('hobby');
            $table->mediumInteger('tinggi')->unsigned();
            $table->mediumInteger('berat')->unsigned();
            $table->string('panggilan', 15);
            $table->string('agama', 10);
            $table->smallInteger('anak_ke')->unsigned();
            $table->smallInteger('sdr_kandung')->unsigned();
            $table->smallInteger('sdr_tiri')->unsigned();
            $table->smallInteger('sdr_angkat')->unsigned();
            $table->string('bahasa', 50);
            $table->string('foto');
            $table->boolean('active');
            $table->string('alamat');
            $table->string('alamat_kos');
            $table->string('phone', 50);
            $table->string('tinggal_dengan');
            $table->mediumInteger('jarak_ke_sekolah')->unsigned();
            $table->string('transortasi', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('siswa', function (Blueprint $table) {
            $table->dropColumn([
                'nisn', 'wn', 'suku', 'status_anak', 'gol_darah', 'riwayat_penyakit',
                'kelainan', 'hobby', 'tinggi', 'berat', 'panggilan', 'agama', 
                'anak_ke', 'sdr_kandung', 'sdr_angkat', 'sdr_tiri', 'bahasa', 'foto',
                'active', 'alamat', 'alamat_kos', 'phone', 'tinggal_dengan', 
                'jarak_ke_sekolah', 'transortasi'
            ]);
        });
    }
}
