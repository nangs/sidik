<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVerifikasiWawancaraOnPsb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('psb', function (Blueprint $table) {
            $table->boolean('status_verifikasi_data');
            $table->dateTime('waktu_verifikasi_data');
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
            $table->droColumn(['status_verifikasi_data', 'waktu_verifikasi_data']);
        });
    }
}
