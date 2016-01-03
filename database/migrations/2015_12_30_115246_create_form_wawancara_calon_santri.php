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
            $table->string('nilai', 10);
            $table->timestamps();
        });

        Schema::create('form_wawancara_orangtua_calon_santri', function (Blueprint $table) {
            $table->increments('id');
            $table->string('indikator_variable', 50);
            $table->string('pertanyaan');
            $table->string('jawaban');
            $table->string('nilai', 10);
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

        Schema::create('wawancara_calon_santri', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('siswa_id')->unsigned();
          $table->boolean('hasil_wawancara');
          $table->text('catatan');
          $table->timestamps();
        });

        Schema::create('wawancara_orangtua_calon_santri', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('siswa_id')->unsigned();
          $table->boolean('hasil_wawancara');
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
        $tables = [
            'form_wawancara_calon_santri',
            'form_wawancara_orangtua_calon_santri',
            'nilai_wawancara_calon_santri',
            'nilai_wawancara_orangtua_calon_santri',
            'wawancara_calon_santri',
            'wawancara_orangtua_calon_santri'
        ];

        foreach ($tables as $tbl) {
            Schema::drop($tbl);
        }
    }
}
