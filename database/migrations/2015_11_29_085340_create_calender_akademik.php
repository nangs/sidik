<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalenderAkademik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kalender_akademik', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ta_id')->unsigned();
            $table->date('dari');
            $table->date('sampai');
            $table->string('kegiatan', 100);
            $table->string('warna', 10);
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
        Schema::drop('kalender_akademik');
    }
}
