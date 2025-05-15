<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Komentar extends Model
{
    use HasFactory;

    protected $table = 'komentars';

    protected $fillable = [
        'berita_id',
        'name',
        'email',
        'comment',
        'photo',
    ];
    public function berita()
    {
        return $this->belongsTo(Berita::class, 'berita_id');
    }
}
