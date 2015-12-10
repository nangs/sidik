<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeJenjangAndTingkat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('psb', function (Blueprint $table) {
            $table->boolean('jenjang')->change();
            $table->boolean('tingkat')->change();
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
            //
        });
    }
}
