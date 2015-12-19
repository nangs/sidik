<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BikinStatuses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('psb', function (Blueprint $table) {
            $table->boolean('status_formulir')->unsigned();
            $table->boolean('status_berkas')->unsigned();
            $table->boolean('status_wawancara_ortu')->unsigned();
            $table->boolean('status_tkd')->unsigned();
            $table->boolean('status_penerimaan')->unsigned();
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
            $table->dropColumn([
                'status_formulir', 'status_berkas', 'status_test'. 'status_wawancara',
                'status_wawancara_ortu', 'status_penerimaan', 'status_tkd'
            ]);
        });
    }
}
