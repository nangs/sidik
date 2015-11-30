<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvBangunan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inv_bangunan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tanah_id')->unsigned();
            $table->string('kode', 10);
            $table->string('nama', 50);
            $table->integer('luas', false, true);
            $table->smallInteger('jumlah_lantai')->unsigned();
            $table->smallInteger('tahun_pembangunan');
            $table->smallInteger('tahun_selesai');
            $table->smallInteger('tahun_pakai');
            $table->string('nomor_imb', 50);
            $table->date('tgl_imb');
            $table->string('alamat');
            $table->string('asal_perolehan', 50);
            $table->string('asal_dana', 50);
            $table->string('nomor_bukti_perolehan', 50);
            $table->string('rekanan', 50);
            $table->string('kondisi', 20);
            $table->double('nilai_asset');
            $table->string('material_lantai', 20);
            $table->string('material_tembok', 20);
            $table->string('material_atap', 20);
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
        Schema::drop('inv_bangunan');
    }
}
