<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Mews\Purifier\Facades\Purifier;

class JurusanController extends Controller
{

    public function jurusan_user()
    {
        $jurusan = Jurusan::all();
        return view('users.jurusan.index', compact('jurusan'));
    }

    public function jurusan_detail()
    {
        $jurusan = Jurusan::all();
        return view('users.jurusan.detail', compact('jurusan'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusan=Jurusan::all();
        return view('admin.jurusan.index', compact('jurusan'));
    }

    public function test()
    {
        $data = Jurusan::where('nama','Ilmu Pengetahuan Alam (IPA)')->first();
        $cleanDeskripsi = Purifier::clean($data->deskripsi);
        return view('user.test', compact('cleanDeskripsi'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
        
            // Ambil ekstensi file (misalnya jpg, png)
            $extension = $file->getClientOriginalExtension();
        
            // Ubah nama menjadi: nama-jurusan.jpg
            $namaJurusan = Str::slug($request->nama); // Biar aman dan rapi
            $filename = $namaJurusan . '.' . $extension;
        
            // Simpan file ke folder public/img/jurusan
            $file->move(public_path('img/jurusan'), $filename);
        
            // Simpan nama file ke dalam database
            $validated['gambar'] = $filename;
        }
    
        $jurusan = new Jurusan($validated);
    
        if ($jurusan->save()) {
            session()->flash('swal', [
                'title' => 'Berhasil!',
                'text' => 'Data Jurusan berhasil ditambahkan.',
                'icon' => 'success'
            ]);
        } else {
            session()->flash('swal', [
                'title' => 'Gagal!',
                'text' => 'Gagal menambahkan data.',
                'icon' => 'error'
            ]);
        }
    
        return redirect()->route('jurusan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jurusan $jurusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Jurusan::find($id);
        return view('admin.jurusan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $jurusan = Jurusan::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Proses upload gambar baru jika ada
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($jurusan->gambar && File::exists(public_path('img/jurusan/' . $jurusan->gambar))) {
                File::delete(public_path('img/jurusan/' . $jurusan->gambar));
            }
    
            $file = $request->file('gambar');
            $filename = $request->nama . '.jpg'; // atau bisa pakai time() jika ingin unik
            $file->move(public_path('img/jurusan'), $filename);
            $validated['gambar'] = $filename;
        }
    
        // Update data

        if ($jurusan->update($validated)) {
            session()->flash('swal', [
                'title' => 'Berhasil!',
                'text' => 'Data Jurusan berhasil diupdate.',
                'icon' => 'success'
            ]);
        } else {
            session()->flash('swal', [
                'title' => 'Gagal!',
                'text' => 'Gagal meng-update data.',
                'icon' => 'error'
            ]);
        }
    
        return redirect()->route('jurusan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jurusan = Jurusan::findOrFail($id);

        // Hapus gambar dari folder jika ada
        if ($jurusan->gambar && File::exists(public_path('img/jurusan/' . $jurusan->gambar))) {
            File::delete(public_path('img/jurusan/' . $jurusan->gambar));
        }

        // Hapus data dari database
        if ($jurusan->delete()) {
            session()->flash('swal', [
                'title' => 'Berhasil!',
                'text' => 'Data Jurusan berhasil dihapus.',
                'icon' => 'success'
            ]);
        } else {
            session()->flash('swal', [
                'title' => 'Gagal!',
                'text' => 'Gagal menghapus data.',
                'icon' => 'error'
            ]);
        }

        return redirect()->route('jurusan.index');
    }
}
