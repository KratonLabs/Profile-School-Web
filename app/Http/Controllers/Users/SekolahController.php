<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Users\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function index()
    {
       // $jurusan=Jurusan::all();
        $sejarah=Sekolah::all();
        return view('users.sekolah.profile-sekolah.sejarah', compact('sejarah'));
    }   
}
