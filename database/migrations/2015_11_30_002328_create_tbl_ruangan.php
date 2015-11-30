<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblRuangan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruangan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode', 10);
            $table->string('nama', 30);
            $table->integer('penanggungjawab_id')->unsigned();
            $table->integer('bangunan_id')->unsigned();
            $table->smallInteger('luas')->unsigned();
            $table->smallInteger('kapasitas')->unsigned();
            $table->string('pengggunaan', 50);
            $table->string('kondisi', 20);
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
        Schema::drop('ruangan');
    }
}
