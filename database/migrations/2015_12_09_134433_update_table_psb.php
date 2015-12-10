<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTablePsb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('psb', function (Blueprint $table) {
            
            $table->dropColumn(['tanggal_pendaftaran', 'nomor_pendaftaran']);

            $table->date('tanggal_pembayaran');
            $table->string('bank_asal', 50);
            $table->string('rekening_asal', 50);
            $table->string('rekening_atas_nama_asal', 50);
            $table->string('bank_tujuan', 50);
            $table->string('rekening_tujuan', 50);
            $table->string('rekening_atas_nama_tujuan', 50);
            $table->string('metode_pembayaran', 50);
            $table->double('jumlah_pembayaran');
            $table->string('bukti_pembayaran', 100);
            $table->boolean('status_pembayaran');
            $table->dateTime('waktu_verifikasi_pembayaran');

            $table->renameColumn('jenjang_id', 'jenjang');
            $table->renameColumn('tingkat_id', 'tingkat');

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
            
            $table->date('tanggal_pendaftaran');
            $table->string('nomor_pendaftaran', 30);

            $table->renameColumn('jenjang', 'jenjang_id');
            $table->renameColumn('tingkat', 'tingkat_id');

            $table->dropColumn([
                'tanggal_pembayaran', 'bank_asal', 'bank_tujuan', 'rekening_asal', 'rekening_tujuan',
                'rekening_atas_nama_asal', 'rekening_atas_nama_tujuan', 'metode_pembayaran',
                'jumlah_pembayaran', 'bukti_pembayaran', 'status_pembayaran', 'waktu_verifikasi_pembayaran'
            ]);

        });
    }
}
