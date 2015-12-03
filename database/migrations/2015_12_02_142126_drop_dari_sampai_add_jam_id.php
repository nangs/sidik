<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropDariSampaiAddJamId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jadwal_pelajaran', function (Blueprint $table) {
            $table->dropColumn(['dari', 'sampai']);
            $table->integer('jam_id')->unsigned();
            $table->integer('ruang_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jadwal_pelajaran', function (Blueprint $table) {
            $table->time('dari');
            $table->time('sampai');
            $table->dropColumn(['jam_id', 'ruang_id']);
        });
    }
}
