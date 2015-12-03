<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJampelajaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jam_pelajaran', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tingkat_id')->unsigned();
            $table->string('jam', 20);
            $table->time('dari');
            $table->time('sampai');
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
        Schema::drop('jam_pelajaran');
    }
}
