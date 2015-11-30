<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsRiwayatPendidikan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('riwayat_pendidikan', function (Blueprint $table) {
            $table->smallInteger('lulus', false, true)->change();
            $table->smallInteger('masuk', false, true);
            $table->boolean('formal');
            $table->integer('siswa_id')->unsigned();
            $table->string('keterangan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('riwayat_pendidikan', function (Blueprint $table) {
            $table->dropColumn(['lulus', 'masuk', 'formal', 'siswa_id', 'keterangan']);
        });
    }
}
