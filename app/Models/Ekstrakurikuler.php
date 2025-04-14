<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ekstrakurikuler extends Model
{
    protected $table = 'ekstrakurikulers';

    protected $fillable = [
        'pegawai_id',
        'nama',
        'deskripsi',
        'jumlah_anggota',
        'gambar'
    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
}
