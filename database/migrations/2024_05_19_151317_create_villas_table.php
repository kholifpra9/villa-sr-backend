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
        Schema::create('villas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_villa');
            $table->string('tipe');
            $table->string('Deskripsi');
            $table->string('lokasi');
            $table->double('harga');
            $table->string('gambar');
            // $table->integer('harga_senin_kamis');
            // $table->integer('harga_jumat&minggu');
            // $table->integer('harga_sabtu&h1_tglmerah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('villas');
    }
};
