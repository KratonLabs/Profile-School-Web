<?php

namespace App\Models;

use App\Models\Jabatan;
use App\Models\MataPelajaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawais';

    protected $fillable = [
        'jabatan_id',
        'mata_pelajaran_id',
        'nama',
        'gambar',
        'nip',
    ];

    // Relasi ke tabel Jabatan
    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }

    // Relasi ke tabel Mata Pelajaran (nullable)
    public function mataPelajaran()
    {
        return $this->belongsTo(MataPelajaran::class);
    }

    public function ekstrakulikuler()
    {
        return $this->hasMany(Ekstrakurikuler::class);
    }
}
