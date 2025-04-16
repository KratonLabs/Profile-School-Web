<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Ekstrakurikuler;
use App\Models\Users\Kesiswaan;
use Illuminate\Http\Request;

use function Pest\Laravel\get;

class KesiswaanController extends Controller
{
    public function organisasi()
    {
        $kesiswaan=Ekstrakurikuler::where('nama', 'OSIS')->get();
        return view('users.kesiswaan.osis', compact('kesiswaan'));
    }
    
    public function ekstrakurikuler()
    {
        $kesiswaan=Ekstrakurikuler::all();
        return view('users.kesiswaan.osis', compact('kesiswaan'));
    }
}