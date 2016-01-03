<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJawabanWawancaraCalonSantri extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_wawancara_calon_santri', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pertanyaan_id')->unsigned();
            $table->string('jawaban');
            $table->string('nilai', 10);
            $table->timestamps();
        });

        Schema::create('jawaban_wawancara_orangtua_calon_santri', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pertanyaan_id')->unsigned();
            $table->string('jawaban');
            $table->string('nilai', 10);
            $table->timestamps();
        });

        Schema::table('form_wawancara_calon_santri', function (Blueprint $table) {
            $table->dropColumn(['jawaban', 'nilai']);
        });

        Schema::table('form_wawancara_orangtua_calon_santri', function (Blueprint $table) {
            $table->dropColumn(['jawaban', 'nilai']);
        });

        Schema::table('nilai_wawancara_calon_santri', function (Blueprint $table) {
            $table->integer('jawaban_id')->unsigned();
        });

        Schema::table('nilai_wawancara_orangtua_calon_santri', function (Blueprint $table) {
            $table->integer('jawaban_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jawaban_wawancara_calon_santri');

        Schema::table('form_wawancara_calon_santri', function (Blueprint $table) {
            $table->string('jawaban');
            $table->string('nilai', 10);
        });

        Schema::table('form_wawancara_orangtua_calon_santri', function (Blueprint $table) {
            $table->string('jawaban');
            $table->string('nilai', 10);
        });

        Schema::table('nilai_wawancara_calon_santri', function (Blueprint $table) {
            $table->dropColumn(['jawaban_id']);
        });

        Schema::table('nilai_wawancara_orangtua_calon_santri', function (Blueprint $table) {
            $table->dropColumn(['jawaban_id']);
        });
    }
}
