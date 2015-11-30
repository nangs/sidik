<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTtlOnKeluargaKaryawan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('keluarga_karyawan', function (Blueprint $table) {
            $table->string('tempat_lahir', 20);
            $table->date('tgl_lahir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('keluarga_karyawan', function (Blueprint $table) {
            $table->dropColumn(['tempat_lahir', 'tgl_lahir']);
        });
    }
}
