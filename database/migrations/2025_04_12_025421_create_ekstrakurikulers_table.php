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
        Schema::create('ekstrakurikulers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pegawai_id')->nullable();
            $table->string('nama'); 
            $table->enum('kategori', ['Kenegaraan', 'Keagamaan','Seni','Olahraga','Sains & Teknologi']);
            $table->text('deskripsi'); 
            $table->year('tahun_berdiri');
            $table->string('nama_ig')->nullable();
            $table->string('alamat_ig')->nullable();
            $table->integer('jumlah_anggota')->default(0);
            $table->string('logo')->nullable()->default('logo_sma.png');
            $table->timestamps();

            $table->foreign('pegawai_id')->references('id')->on('pegawais')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ekstrakurikulers');
    }
};
