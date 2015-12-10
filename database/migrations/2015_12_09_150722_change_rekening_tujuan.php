<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeRekeningTujuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('psb', function (Blueprint $table) {
            $table->dropColumn(['bank_tujuan', 'rekening_tujuan', 'pemegang_rekening_tujuan']);
            $table->integer('rekening_tujuan_id')->unsigned();
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
            $table->string('bank_tujuan');
            $table->string('rekening_tujuan');
            $table->string('pemegang_rekening_tujuan');
            $table->dropColumn(['rekening_tujuan_id']);
        });
    }
}
