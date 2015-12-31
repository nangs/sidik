<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormWawancaraCalonSantri extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_wawancara_calon_santri', function (Blueprint $table) {
            $table->increments('id');
            $table->string('indikator_variable', 50);
            $table->string('sub_indikator_variable', 50);
            $table->string('pertanyaan');
            $table->string('jawaban');
            $table->string('nilai', 4);
            $table->timestamps();
        });

        Schema::create('form_wawancara_orangtua_calon_santri', function (Blueprint $table) {
            $table->increments('id');
            $table->string('indikator_variable', 50);
            $table->string('pertanyaan');
            $table->string('jawaban');
            $table->string('nilai', 4);
            $table->timestamps();
        });

        Schema::create('nilai_wawancara_calon_santri', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('siswa_id')->unsigned();
          $table->integer('pertanyaan_id')->unsigned();
          $table->smallInteger('nilai')->unsigned();
          $table->timestamps();
        });

        Schema::create('nilai_wawancara_orangtua_calon_santri', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('siswa_id')->unsigned();
          $table->integer('pertanyaan_id')->unsigned();
          $table->smallInteger('nilai')->unsigned();
          $table->timestamps();
        });

        Schema::create('catatan_wawancara_calon_santri', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('siswa_id')->unsigned();
          $table->text('catatan');
          $table->timestamps();
        });

        Schema::create('catatan_wawancara_orangtua_calon_santri', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('siswa_id')->unsigned();
          $table->text('catatan');
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
        Schema::drop('form_wawancara_calon_santri');
    }
}
