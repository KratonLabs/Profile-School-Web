<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CarouselEskul extends Model
{
  use HasFactory;

    protected $table = 'carousel_eskuls';

    protected $fillable = [
        'eskul_id',
        'gambar',
    ];

    // Relasi ke tabel Jabatan
    public function eskul()
    {
        return $this->belongsTo(Ekstrakurikuler::class);
    }
}
