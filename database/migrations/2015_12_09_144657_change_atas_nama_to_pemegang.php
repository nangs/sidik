<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeAtasNamaToPemegang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('psb', function (Blueprint $table) {
            $table->renameColumn('rekening_atas_nama_asal', 'pemegang_rekening_asal');
            $table->renameColumn('rekening_atas_nama_tujuan', 'pemegang_rekening_tujuan');
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
            $table->renameColumn('pemegang_rekening_asal', 'rekening_atas_nama_asal');
            $table->renameColumn('pemegang_rekening_tujuan', 'rekening_atas_nama_tujuan');
        });
    }
}
