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
        Schema::create('carousel_eskuls', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('eskul_id'); // FK ke tabel jabatan
            $table->string('gambar');
            $table->timestamps();


            // Foreign key constraints
            $table->foreign('eskul_id')->references('id')->on('ekstrakurikulers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carousel_eskuls');
    }
};
