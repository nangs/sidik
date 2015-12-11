<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeJenisIdOnDokumen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dokumen_calon_siswa', function (Blueprint $table) {
            $table->dropColumn(['jenis']);
            // $table->string('nama', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dokumen_calon_siswa', function (Blueprint $table) {
            $table->dropColumn(['nama']);
            $table->smallInteger('jenis_id')->unsigned();
        });
    }
}
