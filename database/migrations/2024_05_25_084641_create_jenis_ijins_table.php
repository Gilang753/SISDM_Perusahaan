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
        Schema::create('tb_jenisijin', function (Blueprint $table) {
            $table->id('id_jeniijin');
            $table->text('persyaratan')->nullable();
            $table->integer('lamaijin');
            $table->text('ketentuan')->nullable();
            $table->timestamps(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_jenisijin');
    }
};
