<?php

namespace App\Http\Controllers;

use App\Models\CarouselEskul;
use App\Models\Ekstrakurikuler;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Models\Pegawai;
use Illuminate\Http\Request;

use function Pest\Laravel\get;

class EkstrakurikulerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $ekstrakulikuler = Ekstrakurikuler::with(['pegawai', 'firstCarousel'])->paginate(6);
        return view('admin.ekstrakulikuler.index', compact('ekstrakulikuler'));
    }

    public function ekstrakulikuler_user()
    {
        $ekstrakulikuler = Ekstrakurikuler::with(['pegawai', 'firstCarousel'])->get();
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
        $pembina = Pegawai::all();
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
            'jumlah_anggota' => 'required|numeric|min:0',
            'gambar'        => 'required|image|mimes:jpeg,png,jpg',
            'logo'          => 'nullable|image|mimes:jpeg,png,jpg',
        ]);

        // Simpan gambar utama
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $namaEkstrakulikuler = Str::slug($request->nama);
            $filename = $namaEkstrakulikuler . '.' . $extension;
            $file->move(public_path('img/ekstrakulikuler'), $filename);
            $validated['gambar'] = $filename;
        }

        // Simpan logo jika ada
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $namaEkstrakulikuler = Str::slug($request->nama);
            $filename = $namaEkstrakulikuler . '.' . $extension;
            $file->move(public_path('img/ekstrakulikuler/logo'), $filename);
            $validated['logo'] = $filename;
        }

        // Simpan data ke tabel ekstrakurikuler
        $ekstrakulikuler = new Ekstrakurikuler($validated);

        if ($ekstrakulikuler->save()) {
            // Simpan gambar ke tabel carouselEskul
            CarouselEskul::create([
                'eskul_id' => $ekstrakulikuler->id,
                'gambar'   => $validated['gambar']
            ]);

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
        $pembina = Pegawai::all();
        return view('admin.ekstrakulikuler.edit', compact('data', 'pembina'));
    }
    public function detail_ekstrakulikuler_user($id)
    {
        $data = Ekstrakurikuler::find($id);
        $carousel = CarouselEskul::where('eskul_id', $id)->get();
        return view('users.kesiswaan.eskul.detail', compact('data', 'carousel'));
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
            'jumlah_anggota' => 'required|numeric|min:0',
            'logo'        => 'nullable|image|mimes:jpeg,png,jpg',
        ]);

        // Proses upload gambar baru jika ada

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
