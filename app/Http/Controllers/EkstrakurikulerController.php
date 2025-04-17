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
        $ekstrakulikuler=Ekstrakurikuler::paginate(6);
        return view('admin.ekstrakulikuler.index', compact('ekstrakulikuler'));
    }

    public function ekstrakulikuler_user()
    {
        $ekstrakulikuler = Ekstrakurikuler::all();
        $kategori_list = Ekstrakurikuler::select('kategori')->distinct()->get();

        $ekskulByKategori = [];
        foreach ($kategori_list as $kategori) {
            $ekskulByKategori[$kategori->kategori] = Ekstrakurikuler::where('kategori', $kategori->kategori)->get();
        }

        return view('users.kesiswaan.eskul.eskul', compact('ekstrakulikuler', 'kategori_list', 'ekskulByKategori'));
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
            'pegawai_id'    => 'nullable|exists:pegawais,id',
            'nama'          => 'required|string|max:255',
            'kategori'      => 'required|in:Kenegaraan,Keagamaan,Seni,Olahraga,Sains & Teknologi',
            'deskripsi'     => 'required|string',
            'tahun_berdiri' => 'required|digits:4|integer|min:1900|max:' . date('Y'),
            'nama_ig'       => 'nullable|string|max:255',
            'alamat_ig'     => 'nullable|url',
            'jumlah_anggota'=> 'required|numeric|min:0',
            'gambar'        => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'logo'        => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
    
            // Buat nama file yang aman
            $extension = $file->getClientOriginalExtension();
            $namaEkstrakulikuler = Str::slug($request->nama);
            $filename = $namaEkstrakulikuler . '.' . $extension;
    
            // Simpan gambar
            $file->move(public_path('img/ekstrakulikuler'), $filename);
            $validated['gambar'] = $filename;
        }
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
    
            // Buat nama file yang aman
            $extension = $file->getClientOriginalExtension();
            $namaEkstrakulikuler = Str::slug($request->nama);
            $filename = $namaEkstrakulikuler . '.' . $extension;
    
            // Simpan gambar
            $file->move(public_path('img/ekstrakulikuler/logo'), $filename);
            $validated['logo'] = $filename;
        }
    
        // Simpan data
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
    public function detail_ekstrakulikuler_user($id)
    {
        $data = Ekstrakurikuler::find($id);
        return view('users.kesiswaan.eskul.detail', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $ekstrakulikuler = Ekstrakurikuler::findOrFail($id);

        $validated = $request->validate([
            'pegawai_id'    => 'nullable|exists:pegawais,id',
            'nama'          => 'required|string|max:255',
            'kategori'      => 'required|in:Kenegaraan,Keagamaan,Seni,Olahraga,Sains & Teknologi',
            'deskripsi'     => 'required|string',
            'tahun_berdiri' => 'required|digits:4|integer|min:1900|max:' . date('Y'),
            'nama_ig'       => 'nullable|string|max:255',
            'alamat_ig'     => 'nullable|url',
            'jumlah_anggota'=> 'required|numeric|min:0',
            'gambar'        => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'logo'        => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
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
        if ($request->hasFile('logo')) {
            // Hapus gambar lama
            if ($ekstrakulikuler->logo && File::exists(public_path('img/ekstrakulikuler/logo/' . $ekstrakulikuler->logo))) {
                File::delete(public_path('img/ekstrakulikuler/logo/' . $ekstrakulikuler->logo));
            }
    
            $file = $request->file('logo');
            $filename = $request->nama . '.jpg'; // atau bisa pakai time() jika ingin unik
            $file->move(public_path('img/ekstrakulikuler/logo'), $filename);
            $validated['logo'] = $filename;
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
        if ($ekstrakulikuler->logo && File::exists(public_path('img/ekstrakulikuler/logo/' . $ekstrakulikuler->logo))) {
            File::delete(public_path('img/ekstrakulikuler/logo/' . $ekstrakulikuler->logo));
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
