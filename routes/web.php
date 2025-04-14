<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\FasilitasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\PegawaiController;

Route::get('/', function () {
    return view('layouts.home');
});

Route::get('/login', function () {return view('admin.login');})->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {return view('admin.dashboard');})->name('dashboard');
    Route::resource('/jabatan', JabatanController::class)->names('jabatan');
    Route::resource('/mata-pelajaran', MataPelajaranController::class)->names('mata-pelajaran');
    Route::resource('/pegawai', PegawaiController::class)->names('pegawai');
    Route::resource('/jurusan', JurusanController::class)->names('jurusan');
    Route::resource('/ekstrakulikuler', EkstrakurikulerController::class)->names('ekstrakulikuler');
    Route::resource('/fasilitas', FasilitasController::class)->names('fasilitas');
    Route::resource('/berita', BeritaController::class)->names('berita');
});

