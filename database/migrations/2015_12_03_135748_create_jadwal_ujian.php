<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalUjian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ujian', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ta_id')->unsigned();
            $table->integer('jenjang_id')->unsigned();
            $table->integer('tingkat_id')->unsigned();
            $table->integer('jenis_id')->unsigned();
            $table->date('dari');
            $table->date('sampai');
            $table->timestamps();
        });

        Schema::create('jadwal_ujian', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ujian_id')->unsigned();
            $table->integer('mapel_id')->unsigned();
            $table->date('tanggal');
            $table->time('dari');
            $table->time('sampai');
            $table->timestamps();
        });

        Schema::create('ruangan_ujian', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ujian_id')->unsigned();
            $table->integer('jadwal_id')->unsigned();
            $table->integer('ruangan_id')->unsigned();
            $table->integer('pengawas1_id')->unsigned();
            $table->integer('pengawas2_id')->unsigned();
            $table->timestamps();
        });

        Schema::create('peserta_ujian', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ujian_id')->unsigned();
            $table->integer('ruangan_id')->unsigned();
            $table->integer('siswa_id')->unsigned();
            $table->string('no_peserta', 30);
            $table->timestamps();
        });

        Schema::create('nilai_ujian', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ta_id')->unsigned();
            $table->integer('jenjang_id')->unsigned();
            $table->integer('tingkat_id')->unsigned();
            $table->integer('jenis_id')->unsigned();
            $table->integer('mapel_id')->unsigned();
            $table->integer('siswa_id')->unsigned();
            $table->decimal('nilai', 3, 2);
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
        Schema::drop('ujian');
        Schema::drop('jadwal_ujian');
        Schema::drop('ruangan_ujian');
        Schema::drop('peserta_ujian');
        Schema::drop('nilai_ujian');
    }
}
