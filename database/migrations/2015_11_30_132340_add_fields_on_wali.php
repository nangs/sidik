<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsOnWali extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wali', function (Blueprint $table) {
            $table->string('tempat_lahir', 20);
            $table->date('tgl_lahir');
            $table->string('agama', 10);
            $table->string('wn', 3);
            $table->string('pendidikan_terakhir', 30);
            $table->string('pekerjaan', 30);
            $table->double('penghasilan');
            $table->boolean('status');
            $table->boolean('is_wali');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wali', function (Blueprint $table) {
            $table->dropColumn([
                'tempat_lahir', 'tgl_lahir', 'agama', 'wn', 'pendidikan_terakhir',
                'pekerjaan', 'penghasilan', 'status', 'alamat', 'phone', 'is_wali'
            ]);
        });
    }
}
