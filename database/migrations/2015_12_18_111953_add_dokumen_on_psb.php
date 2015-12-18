<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDokumenOnPsb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('psb', function (Blueprint $table) {
            $table->boolean('rapor')->unsigned();
            $table->boolean('kk')->unsigned();
            $table->boolean('akta')->unsigned();
            $table->boolean('foto')->unsigned();
            $table->boolean('sk_sehat')->unsigned();
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
            $table->dropColumn(['rapor', 'kk', 'akta', 'foto', 'sk_sehat']);
        });
    }
}
