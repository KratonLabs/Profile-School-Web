<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ekstrakurikuler extends Model
{
    protected $table = 'ekstrakurikulers';

    protected $fillable = [
        'pegawai_id',
        'nama',
        'kategori',
        'deskripsi',
        'tahun_berdiri',
        'nama_ig',
        'alamat_ig',
        'jumlah_anggota',
        'gambar',
        'logo'
    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
}
