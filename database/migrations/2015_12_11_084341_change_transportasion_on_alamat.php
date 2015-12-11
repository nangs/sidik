<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeTransportasionOnAlamat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alamat_calon_siswa', function (Blueprint $table) {
            $table->renameColumn('alat_trasnportasi_ke_sekolah', 'alat_transportasi_ke_sekolah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alamat_calon_siswa', function (Blueprint $table) {
            $table->renameColumn('alat_transportasi_ke_sekolah', 'alat_trasnportasi_ke_sekolah');
        });
    }
}
