<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use App\Models\Fasilitas;
use App\Models\MataPelajaran;
use App\Models\Pegawai;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $jumlahPegawai = Pegawai::count();
        $jumlahMataPelajaran = MataPelajaran::count();
        $jumlahEsktrakulikuler = Ekstrakurikuler::count();
        $jumlahFasilitas = Fasilitas::count();

        $jumlahGuru = Pegawai::where('jabatan_id', 1)->count();
        $jumlahStaff = Pegawai::where('jabatan_id', 2)->count();

        // Ambil total view per kategori
        $kategoriData = DB::table('beritas')
            ->select('kategori', DB::raw('SUM(dilihat) as total_dilihat'))
            ->groupBy('kategori')
            ->get();

        // Pisahkan ke array untuk dikirim ke view
        $labels = $kategoriData->pluck('kategori')->toArray();
        $data = $kategoriData->pluck('total_dilihat')->toArray();


        return view('admin.dashboard', compact(
            'jumlahPegawai',
            'jumlahMataPelajaran',
            'jumlahEsktrakulikuler',
            'jumlahFasilitas',
            'jumlahGuru',
            'jumlahStaff',
            'labels',
            'data'
        ));
    }
}
