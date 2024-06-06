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
        Schema::create('tb_gaji', function (Blueprint $table) {
            $table->id('id_gaji');
            $table->unsignedBigInteger('id_pegawai');
            $table->unsignedBigInteger('id_tunjangan');
            $table->date('tanggal_gaji');
            $table->decimal('gaji_pokok', 10, 2)->default(0.00);
            $table->decimal('gaji_lembur', 10, 2)->default(0.00)->nullable();
            $table->decimal('gaji_total', 10, 2)->default(0.00);
            $table->timestamps(false);

            $table->foreign('id_pegawai')->references('id')->on('tb_pegawai')->onDelete('cascade');
            $table->foreign('id_tunjangan')->references('id')->on('tb_tunjangan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_gaji');
    }
};
