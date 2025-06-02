<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\CarouselEskulController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\EkstrakurikulerController;

Route::get('/', [BeritaController::class, 'home'])->name('home');

Route::get('/home', function () {
    return view('user.index');
});

//Sekolah

//--Profil Sekolah
Route::get('/sejarah', function () {
    return view('users.sekolah.profile-sekolah.sejarah');
});

Route::get('/visi-misi', function () {
    return view('users.sekolah.profile-sekolah.visi-misi');
});

Route::get('/struktur-organisasi', function () {
    return view('users.sekolah.profile-sekolah.struktur-pengurus');
});

Route::get('/galery', function () {
    return view('users.sekolah.profile-sekolah.galery');
});


Route::get('/jadwal-kbm', function () {
    return view('users.sekolah.kurikulum.jadwalpelajaran');
});

Route::get('/kalender-akademik', function () {
    return view('users.sekolah.kurikulum.kalender');
});
Route::get('/peraturan-sekolah', function () {
    return view('users.sekolah.kurikulum.peraturan');
});


//--Profil Sekolah--

//Guru
Route::get('/guru', [PegawaiController::class, 'guru']);

//Sarana dan Prasarana
Route::get('/fasilitas-user', [FasilitasController::class, 'fasilitas_user']);
Route::get('/fasilitas-item', function () {
    return view('users.sekolah.fasilitas.detail');
});

// Jurusan
Route::get('/jurusan-user', [JurusanController::class, 'jurusan_user']);
Route::get('/jurusan-detail/{id}', [JurusanController::class, 'jurusan_detail']);

//Berita
Route::get('/beritas',[BeritaController::class, 'berita_user'])->name('beritas.kategori');
Route::get('/beritas/{id}', [BeritaController::class, 'tampil'])->name('detail.berita');
Route::get('/beritas/cari', [BeritaController::class, 'cari'])->name('beritas.cari');

//Kesiswaan
//--Ekstrakurikuler
Route::get('/ekstrakurikuler',[EkstrakurikulerController::class, 'ekstrakulikuler_user']);
Route::get('/detail/{id}/ekstrakurikuler',[EkstrakurikulerController::class, 'detail_ekstrakulikuler_user']);
Route::get('/struktur-eskul', function () {
    return view('users.kesiswaan.eskul.struktur');
});

// Organisasi
Route::get('/organisasi', function () {
    return view('users.kesiswaan.osis.osis');
});

Route::get('/struktur', function () {
    return view('users.kesiswaan.osis.struktur');
});

//Kontak
Route::get('/kontak', function () {
    return view('users.sekolah.kontak');
});

//Feedback
Route::post('/feedback-user', [FeedbackController::class, 'feedback_user'])->name('add.feedback.user');

// Form Komentar
 Route::resource('/komentar', KomentarController::class)->names('komentar');


Route::get('/test', function () {return view('user.test');});
Route::get('/test', [JurusanController::class, 'test']);

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
    Route::resource('/carouselekstrakulikuler', CarouselEskulController::class)->names('carouselekstrakulikuler');
    Route::resource('/fasilitas', FasilitasController::class)->names('fasilitas');
    Route::resource('/berita', BeritaController::class)->names('berita');
    Route::resource('/feedback', FeedbackController::class)->names('feedback');
}); 