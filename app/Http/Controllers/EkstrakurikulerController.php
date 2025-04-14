<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class EkstrakurikulerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ekstrakulikuler=Ekstrakurikuler::all();
        return view('admin.ekstrakulikuler.index', compact('ekstrakulikuler'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pembina=Pegawai::all();
        return view('admin.ekstrakulikuler.create', compact('pembina'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'pegawai_id' => 'nullable',
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'jumlah_anggota' => 'required|numeric',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
        
            // Ambil ekstensi file (misalnya jpg, png)
            $extension = $file->getClientOriginalExtension();
        
            // Ubah nama menjadi: nama-jurusan.jpg
            $namaEkstrakulikuler = Str::slug($request->nama); // Biar aman dan rapi
            $filename = $namaEkstrakulikuler . '.' . $extension;
        
            // Simpan file ke folder public/img/jurusan
            $file->move(public_path('img/ekstrakulikuler'), $filename);
        
            // Simpan nama file ke dalam database
            $validated['gambar'] = $filename;
        }
    
        $ekstrakulikuler = new Ekstrakurikuler($validated);
    
        if ($ekstrakulikuler->save()) {
            session()->flash('swal', [
                'title' => 'Berhasil!',
                'text' => 'Data Ekstrakulikuler berhasil ditambahkan.',
                'icon' => 'success'
            ]);
        } else {
            session()->flash('swal', [
                'title' => 'Gagal!',
                'text' => 'Gagal menambahkan data.',
                'icon' => 'error'
            ]);
        }
    
        return redirect()->route('ekstrakulikuler.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ekstrakurikuler $ekstrakurikuler)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Ekstrakurikuler::find($id);
        $pembina=Pegawai::all();
        return view('admin.ekstrakulikuler.edit', compact('data','pembina'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $ekstrakulikuler = Ekstrakurikuler::findOrFail($id);

        $validated = $request->validate([
            'pegawai_id' => 'nullable',
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'jumlah_anggota' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Proses upload gambar baru jika ada
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($ekstrakulikuler->gambar && File::exists(public_path('img/ekstrakulikuler/' . $ekstrakulikuler->gambar))) {
                File::delete(public_path('img/ekstrakulikuler/' . $ekstrakulikuler->gambar));
            }
    
            $file = $request->file('gambar');
            $filename = $request->nama . '.jpg'; // atau bisa pakai time() jika ingin unik
            $file->move(public_path('img/ekstrakulikuler'), $filename);
            $validated['gambar'] = $filename;
        }
    
        // Update data

        if ($ekstrakulikuler->update($validated)) {
            session()->flash('swal', [
                'title' => 'Berhasil!',
                'text' => 'Data Ekstrakulikuler berhasil diupdate.',
                'icon' => 'success'
            ]);
        } else {
            session()->flash('swal', [
                'title' => 'Gagal!',
                'text' => 'Gagal meng-update data.',
                'icon' => 'error'
            ]);
        }
    
        return redirect()->route('ekstrakulikuler.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ekstrakulikuler = Ekstrakurikuler::findOrFail($id);

        // Hapus gambar dari folder jika ada
        if ($ekstrakulikuler->gambar && File::exists(public_path('img/ekstrakulikuler/' . $ekstrakulikuler->gambar))) {
            File::delete(public_path('img/ekstrakulikuler/' . $ekstrakulikuler->gambar));
        }

        // Hapus data dari database
        if ($ekstrakulikuler->delete()) {
            session()->flash('swal', [
                'title' => 'Berhasil!',
                'text' => 'Data Ekstrakulikuler berhasil dihapus.',
                'icon' => 'success'
            ]);
        } else {
            session()->flash('swal', [
                'title' => 'Gagal!',
                'text' => 'Gagal menghapus data.',
                'icon' => 'error'
            ]);
        }

        return redirect()->route('ekstrakulikuler.index');
    }
}
