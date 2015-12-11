<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTestWawancaraOnPsb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('psb', function (Blueprint $table) {
            $table->boolean('status_test');
            $table->dateTime('waktu_test');
            $table->dateTime('waktu_verifikasi_test');
            $table->boolean('status_wawancara');
            $table->dateTime('waktu_wawancara');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('psb', function (Blueprint $table) {
            $table->droColumn([
                'status_test', 'waktu_test', 'waktu_verifikasi_test',
                'status_wawancara', 'waktu_wawancara', ''
            ]);
        });
    }
}