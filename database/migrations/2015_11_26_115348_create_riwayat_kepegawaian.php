<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiwayatKepegawaian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_kepegawaian', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('karyawan_id')->unsigned();
            $table->string('jenis');
            $table->string('nomor_sk');
            $table->date('tanggal_sk');
            $table->date('tmt');
            $table->string('masa_kerja');
            $table->string('golongan');
            $table->double('gapok');
            $table->string('tempat');
            $table->string('jabatan');
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
        Schema::drop('riwayat_kepegawaian');
    }
}
