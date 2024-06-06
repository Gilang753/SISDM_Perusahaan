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
        Schema::create('tb_pengembangandiri', function (Blueprint $table) {
            $table->id('id_pengembangan');
            $table->unsignedBigInteger('id_pegawai');
            $table->string('jenis_pelatihan');
            $table->date('tanggal_pelaksana');
            $table->string('sertifikat')->nullable();
            $table->timestamps(false);

            $table->foreign('id_pegawai')->references('id')->on('tb_pegawai')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pengembangandiri');
    }
};
