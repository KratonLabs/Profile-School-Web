<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class FasilitasController extends Controller
{
    public function fasilitas_user()
    {
        $fasilitas = Fasilitas::paginate(8);
        return view('users.sekolah.fasilitas.sarana-prasarana', compact('fasilitas'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fasilitas=Fasilitas::all();
        return view('admin.fasilitas.index', compact('fasilitas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.fasilitas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'jenis' => 'required|in:Akademik,Non-Akademik,Keorganisasian,Umum',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
        
            // Ambil ekstensi file (misalnya jpg, png)
            $extension = $file->getClientOriginalExtension();
        
            // Ubah nama menjadi: nama-jurusan.jpg
            $namaFasilitas = Str::slug($request->nama); // Biar aman dan rapi
            $filename = $namaFasilitas . '.' . $extension;
        
            // Simpan file ke folder public/img/jurusan
            $file->move(public_path('img/fasilitas'), $filename);
        
            // Simpan nama file ke dalam database
            $validated['gambar'] = $filename;
        }
    
        $fasilitas = new Fasilitas($validated);
    
        if ($fasilitas->save()) {
            session()->flash('swal', [
                'title' => 'Berhasil!',
                'text' => 'Data Fasilitas berhasil ditambahkan.',
                'icon' => 'success'
            ]);
        } else {
            session()->flash('swal', [
                'title' => 'Gagal!',
                'text' => 'Gagal menambahkan data.',
                'icon' => 'error'
            ]);
        }
    
        return redirect()->route('fasilitas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fasilitas $fasilitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Fasilitas::find($id);
        return view('admin.fasilitas.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $fasilitas = Fasilitas::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'jenis' => 'required|in:Akademik,Non-Akademik,Keorganisasian,Umum',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Proses upload gambar baru jika ada
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($fasilitas->gambar && File::exists(public_path('img/fasilitas/' . $fasilitas->gambar))) {
                File::delete(public_path('img/fasilitas/' . $fasilitas->gambar));
            }
    
            $file = $request->file('gambar');
            $filename = $request->nama . '.jpg'; // atau bisa pakai time() jika ingin unik
            $file->move(public_path('img/fasilitas'), $filename);
            $validated['gambar'] = $filename;
        }
    
        // Update data
        if ($fasilitas->update($validated)) {
            session()->flash('swal', [
                'title' => 'Berhasil!',
                'text' => 'Data Fasilitas berhasil diupdate.',
                'icon' => 'success'
            ]);
        } else {
            session()->flash('swal', [
                'title' => 'Gagal!',
                'text' => 'Gagal meng-update data.',
                'icon' => 'error'
            ]);
        }
    
        return redirect()->route('fasilitas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);

        // Hapus gambar dari folder jika ada
        if ($fasilitas->gambar && File::exists(public_path('img/fasilitas/' . $fasilitas->gambar))) {
            File::delete(public_path('img/fasilitas/' . $fasilitas->gambar));
        }

        // Hapus data dari database
        if ($fasilitas->delete()) {
            session()->flash('swal', [
                'title' => 'Berhasil!',
                'text' => 'Data Fasilitas berhasil dihapus.',
                'icon' => 'success'
            ]);
        } else {
            session()->flash('swal', [
                'title' => 'Gagal!',
                'text' => 'Gagal menghapus data.',
                'icon' => 'error'
            ]);
        }

        return redirect()->route('fasilitas.index');
    }
}
