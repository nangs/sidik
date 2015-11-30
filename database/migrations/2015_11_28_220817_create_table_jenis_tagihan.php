<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableJenisTagihan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tagihan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomor', 30);
            $table->string('jenis', 30);
            $table->integer('ta_id')->unsigned();
            $table->integer('siswa_id')->unsigned();
            $table->tinyInteger('semester');
            $table->unsignedSmallInteger('bulan');
            $table->double('jumlah');
            $table->date('jatuh_tempo');
            $table->date('tanggal_bayar');
            $table->boolean('status');
            $table->dateTime('last_reminder');
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
        Schema::drop('tagihan');
    }
}
