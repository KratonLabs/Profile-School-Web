<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'berita_id' => 'required|exists:beritas,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'comment' => 'required|string',
            'photo' => 'nullable|image', // maksimal 2MB
        ]);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
        
            // Ambil ekstensi file (misalnya jpg, png)
            $extension = $file->getClientOriginalExtension();
        
            // Ubah nama menjadi: nama-jurusan.jpg
            $namaKomentator = Str::slug($request->name); // Biar aman dan rapi
            $filename = $namaKomentator . '.' . $extension;
        
            // Simpan file ke folder public/img/jurusan
            $file->move(public_path('img/komentator'), $filename);
        }

        Komentar::create([
            'berita_id' => $request->berita_id,
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
            'photo' => $filename ?? 'default-avatar.jpg', // atau kosong jika ingin
        ]);


        session()->flash('swal', [
            'title' => 'Berhasil!',
            'text'  => 'Terima kasih atas komentar Anda.',
            'icon'  => 'success',
        ]);

        return redirect()->route('detail.berita', ['id' => $request->berita_id]);
}



    /**
     * Display the specified resource.
     */
    public function show(Komentar $komentar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Komentar $komentar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Komentar $komentar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Komentar $komentar)
    {
        //
    }
}
