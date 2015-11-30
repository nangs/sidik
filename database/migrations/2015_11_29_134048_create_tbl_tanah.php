<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblTanah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inv_tanah', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode', 30);
            $table->string('nama', 50);
            $table->integer('luas_total', false, 6);
            $table->integer('luas_bangunan', false, 6);
            $table->integer('luas_kosong', false, 6);
            $table->string('lokasi');
            $table->string('batas_utara', 50);
            $table->string('batas_selatan', 50);
            $table->string('batas_barat', 50);
            $table->string('batas_timur', 50);
            $table->string('asal_perolehan', 50);
            $table->string('asal_dana', 50);
            $table->string('sertifikat_hak', 50);
            $table->string('sertifikat_nomor', 50);
            $table->date('sertifikat_tgl');
            $table->string('njop');
            $table->date('tgl_dapat');
            $table->double('nilai_asset');
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
        Schema::drop('inv_tanah');
    }
}
