<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_sampah', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('id_petugas')->nullable();
            $table->foreignId('id_pelanggan')->nullable();
            $table->string('jenis_sampah', 20);
            $table->string('berat_sampah', 20);
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_sampah');
    }
};
