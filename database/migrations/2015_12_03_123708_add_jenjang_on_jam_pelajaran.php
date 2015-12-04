<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddJenjangOnJamPelajaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jam_pelajaran', function (Blueprint $table) {
            $table->integer('jenjang_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jam_pelajaran', function (Blueprint $table) {
            $table->dropColumn('jenjang_id');
        });
    }
}
