<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'beritas';

    protected $fillable = [
        'judul',
        'kategori',
        'deskripsi',
        'gambar',
        'dilihat'
    ];
    public function komentars()
    {
        return $this->hasMany(Komentar::class, 'berita_id');
    }
}
