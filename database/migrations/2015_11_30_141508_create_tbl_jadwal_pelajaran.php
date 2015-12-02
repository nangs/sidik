<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblJadwalPelajaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_pelajaran', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ta_id')->unsigned();
            $table->integer('tingkat_id')->unsigned();
            $table->integer('kelas_id')->unsigned();
            $table->boolean('hari');
            $table->integer('guru_id')->unsigned();
            $table->integer('mapel_id')->unsigned();
            $table->time('dari');
            $table->time('sampai');
            $table->string('keterangan');
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
        Schema::drop('jadwal_pelajaran');
    }
}
