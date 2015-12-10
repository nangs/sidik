<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEmailOnOrtuCalonSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orang_tua_calon_siswa', function (Blueprint $table) {
            $table->string('email', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orang_tua_calon_siswa', function (Blueprint $table) {
            $table->dropColumn(['email']);
        });
    }
}
