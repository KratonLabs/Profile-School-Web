<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Users\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
       // $jurusan=Jurusan::all();
        $jurusan=Jurusan::all();
        return view('users.jurusan.index', compact('jurusan'));
    }
}
