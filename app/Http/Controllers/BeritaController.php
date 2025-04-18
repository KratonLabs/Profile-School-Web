<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita=Berita::paginate(6);
        return view('admin.berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.berita.create');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|in:Pengumuman,Kegiatan,Prestasi',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
        
            // Ambil ekstensi file (misalnya jpg, png)
            $extension = $file->getClientOriginalExtension();
        
            // Ubah nama menjadi: nama-jurusan.jpg
            $namaBerita = Str::slug($request->judul); // Biar aman dan rapi
            $filename = $namaBerita . '.' . $extension;
        
            // Simpan file ke folder public/img/jurusan
            $file->move(public_path('img/berita'), $filename);
        
            // Simpan nama file ke dalam database
            $validated['gambar'] = $filename;
        }
    
        $berita = new Berita($validated);
    
        if ($berita->save()) {
            session()->flash('swal', [
                'title' => 'Berhasil!',
                'text' => 'Data Berita berhasil ditambahkan.',
                'icon' => 'success'
            ]);
        } else {
            session()->flash('swal', [
                'title' => 'Gagal!',
                'text' => 'Gagal menambahkan data.',
                'icon' => 'error'
            ]);
        }
    
        return redirect()->route('berita.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Berita::find($id);
        $berita = Berita::all();
        $kategoriCounts = Berita::select('kategori')
        ->groupBy('kategori')
        ->selectRaw('kategori, COUNT(*) as total')
        ->get();

        return view('users.berita.detail', compact('data','berita','kategoriCounts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Berita::find($id);
        return view('admin.berita.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|in:Pengumuman,Kegiatan,Prestasi',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Proses upload gambar baru jika ada
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($berita->gambar && File::exists(public_path('img/berita/' . $berita->gambar))) {
                File::delete(public_path('img/berita/' . $berita->gambar));
            }
    
            $file = $request->file('gambar');
            $filename = $request->judul . '.jpg'; // atau bisa pakai time() jika ingin unik
            $file->move(public_path('img/berita'), $filename);
            $validated['gambar'] = $filename;
        }
    
        // Update data
        if ($berita->update($validated)) {
            session()->flash('swal', [
                'title' => 'Berhasil!',
                'text' => 'Data Berita berhasil diupdate.',
                'icon' => 'success'
            ]);
        } else {
            session()->flash('swal', [
                'title' => 'Gagal!',
                'text' => 'Gagal meng-update data.',
                'icon' => 'error'
            ]);
        }
    
        return redirect()->route('berita.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        // Hapus gambar dari folder jika ada
        if ($berita->gambar && File::exists(public_path('img/berita/' . $berita->gambar))) {
            File::delete(public_path('img/berita/' . $berita->gambar));
        }

        // Hapus data dari database
        if ($berita->delete()) {
            session()->flash('swal', [
                'title' => 'Berhasil!',
                'text' => 'Data Berita berhasil dihapus.',
                'icon' => 'success'
            ]);
        } else {
            session()->flash('swal', [
                'title' => 'Gagal!',
                'text' => 'Gagal menghapus data.',
                'icon' => 'error'
            ]);
        }

        return redirect()->route('berita.index');
    }


    // public function berita_user()
    // {
    //      // $jurusan=Jurusan::all();
    //      $berita=Berita::all();
    //      return view('users.berita.index', compact('berita'));
    // }

    public function berita_user(Request $request)
    {

        $kategori_list = DB::table('beritas')->distinct()->pluck('kategori');
        $berita = Berita::all();

        $kategoriCounts = Berita::select('kategori')
            ->groupBy('kategori')
            ->selectRaw('kategori, COUNT(*) as total')
            ->get();

        if($request->query('kategori'))
        {
            $kategoriAktif = $request->query('kategori'); 
            return view('users.berita.berita', compact('berita', 'kategori_list', 'kategoriAktif','kategoriCounts'));
        }else{
            $kategoriAktif = null;
            return view('users.berita.berita', compact('berita', 'kategori_list', 'kategoriAktif','kategoriCounts'));
        }
    }

    public function cari(Request $request)
    {
        $keyword = $request->keyword;

        // Cari berdasarkan judul atau kategori (dengan LIKE)
        $berita = Berita::where('judul', 'like', "%$keyword%")
                        ->orWhere('kategori', 'like', "%$keyword%")
                        ->latest()
                        ->get();

        // Ambil semua kategori unik & icon jika diperlukan
        $kategori_list = Berita::select('kategori')->distinct()->pluck('kategori');
        $kategoriCounts = Berita::select('kategori', DB::raw('count(*) as total'))
                                ->groupBy('kategori')->get();

        return view('users.berita.berita', compact('berita', 'kategori_list', 'kategoriCounts'))
            ->with('kategoriAktif', null);
    }


}
