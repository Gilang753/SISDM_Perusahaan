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
        Schema::create('tb_pendidikan', function (Blueprint $table) {
            $table->id('id_pendidikan');
            $table->unsignedBigInteger('id_pegawai');
            $table->unsignedBigInteger('id_pengembangan');
            $table->string('jenjangPendidikan');
            $table->string('institusiPendidikan');
            $table->string('jurusan');
            $table->date('tanggal_kelulusan');
            $table->timestamps(false);

            $table->foreign('id_pegawai')->references('id')->on('tb_pegawai')->onDelete('cascade');
            $table->foreign('id_pengembangan')->references('id')->on('tb_pengembangandiri')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pendidikan');
    }
};
