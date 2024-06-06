<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tb_pengajuanijin', function (Blueprint $table) {
            $table->id('id_pengajuanijin');
            $table->unsignedBigInteger('id_pegawai');
            $table->unsignedBigInteger('id_jenisijin');
            $table->date('tanggalPengajuan');
            $table->enum('statusPengajuan', ['Pending', 'Disetujui', 'Ditolak'])->default('Pending');
            $table->timestamps(false);

            $table->foreign('id_pegawai')->references('id')->on('tb_pegawai')->onDelete('cascade');
            $table->foreign('id_jenisijin')->references('id')->on('tb_jenisijin')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pengajuanijin');
    }
};
