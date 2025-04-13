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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jabatan_id'); // FK ke tabel jabatan
            $table->unsignedBigInteger('mata_pelajaran_id')->nullable(); // FK ke tabel mata_pelajaran, bisa null
            $table->string('nama');
            $table->string('gambar'); // Nama file/folder path gambar
            $table->string('nip'); // NIP bisa kosong (misalnya untuk honorer)
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('jabatan_id')->references('id')->on('jabatans')->onDelete('cascade');
            $table->foreign('mata_pelajaran_id')->references('id')->on('mata_pelajarans')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};
