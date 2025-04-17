<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Models\MataPelajaran;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function guru()
    {
        $guru = Pegawai::with(['jabatan', 'mataPelajaran'])->paginate(8); // misal 8 per halaman
        return view('users.sekolah.guru-staff', compact('guru'));

    }


    public function index()
    {
        $pegawai=Pegawai::paginate(6);
        return view('admin.pegawai.index', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jabatan=Jabatan::all();
        $mata_pelajaran=MataPelajaran::all();
        return view('admin.pegawai.create', compact('jabatan','mata_pelajaran'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'jabatan_id' => 'required|exists:jabatans,id',
            'mata_pelajaran_id' => 'nullable|exists:mata_pelajarans,id',
            'nama' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nip' => 'required|digits:18|unique:pegawais,nip',
        ]);
    
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
        
            // Ambil ekstensi file (misalnya jpg, png)
            $extension = $file->getClientOriginalExtension();
        
            // Ubah nama menjadi: nama-pegawai.jpg
            $namaPegawai = Str::slug($request->nama); // Biar aman dan rapi
            $filename = $namaPegawai . '.' . $extension;
        
            // Simpan file ke folder public/img/pegawai
            $file->move(public_path('img/pegawai'), $filename);
        
            // Simpan nama file ke dalam database
            $validated['gambar'] = $filename;
        }
    
        $pegawai = new Pegawai($validated);
    
        if ($pegawai->save()) {
            session()->flash('swal', [
                'title' => 'Berhasil!',
                'text' => 'Data Pegawai berhasil ditambahkan.',
                'icon' => 'success'
            ]);
        } else {
            session()->flash('swal', [
                'title' => 'Gagal!',
                'text' => 'Gagal menambah data.',
                'icon' => 'error'
            ]);
        }
    
        return redirect()->route('pegawai.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Pegawai::find($id);
        $jabatan=Jabatan::all();
        $mata_pelajaran=MataPelajaran::all();
        return view('admin.pegawai.edit', compact('data','jabatan','mata_pelajaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pegawai = Pegawai::findOrFail($id);

        $validated = $request->validate([
            'jabatan_id' => 'required|exists:jabatans,id',
            'mata_pelajaran_id' => 'nullable|exists:mata_pelajarans,id',
            'nama' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nip' => 'required|digits:18|unique:pegawais,nip,' . $pegawai->id,
        ]);
    
        // Proses upload gambar baru jika ada
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($pegawai->gambar && File::exists(public_path('img/pegawai/' . $pegawai->gambar))) {
                File::delete(public_path('img/pegawai/' . $pegawai->gambar));
            }
    
            $file = $request->file('gambar');
            $filename = $request->nama . '.jpg'; // atau bisa pakai time() jika ingin unik
            $file->move(public_path('img/pegawai'), $filename);
            $validated['gambar'] = $filename;
        }
    
        // Update data

        if ($pegawai->update($validated)) {
            session()->flash('swal', [
                'title' => 'Berhasil!',
                'text' => 'Data Pegawai berhasil diupdate.',
                'icon' => 'success'
            ]);
        } else {
            session()->flash('swal', [
                'title' => 'Gagal!',
                'text' => 'Gagal meng-update data.',
                'icon' => 'error'
            ]);
        }
    
        return redirect()->route('pegawai.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pegawai = Pegawai::findOrFail($id);

        // Hapus gambar dari folder jika ada
        if ($pegawai->gambar && File::exists(public_path('img/pegawai/' . $pegawai->gambar))) {
            File::delete(public_path('img/pegawai/' . $pegawai->gambar));
        }

        // Hapus data dari database
        if ($pegawai->delete()) {
            session()->flash('swal', [
                'title' => 'Berhasil!',
                'text' => 'Data Pegawai berhasil dihapus.',
                'icon' => 'success'
            ]);
        } else {
            session()->flash('swal', [
                'title' => 'Gagal!',
                'text' => 'Gagal menghapus data.',
                'icon' => 'error'
            ]);
        }
    
        return redirect()->route('pegawai.index');
    }
}
