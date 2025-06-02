<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CarouselEskul;
use Illuminate\Support\Facades\File;

class CarouselEskulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carouselEskul = CarouselEskul::paginate(6);
        return view('admin.ekstrakulikuler.detail.index', compact('carouselEskul'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $eskulId = $request->query('id');
        $carouselEskul = CarouselEskul::all();
        return view('admin.ekstrakulikuler.detail.create', compact('carouselEskul', 'eskulId'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'eskul_id' => 'required|exists:ekstrakurikulers,id',
            'gambar' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');

            // Buat nama file unik dan aman
            $extension = $file->getClientOriginalExtension();
            $filename = Str::uuid() . '.' . $extension;

            // Simpan file ke folder publik
            $file->move(public_path('img/ekstrakulikuler'), $filename);

            // Simpan ke database
            CarouselEskul::create([
                'eskul_id' => $request->eskul_id,
                'gambar' => $filename
            ]);

            session()->flash('swal', [
                'title' => 'Berhasil!',
                'text' => 'Gambar berhasil diunggah.',
                'icon' => 'success'
            ]);
        } else {
            session()->flash('swal', [
                'title' => 'Gagal!',
                'text' => 'Tidak ada gambar yang dipilih.',
                'icon' => 'error'
            ]);
        }

        return redirect()->route('carouselekstrakulikuler.index');
    }



    /**
     * Display the specified resource.
     */
    public function show(CarouselEskul $carouselEskul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarouselEskul $carouselEskul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CarouselEskul $carouselEskul)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $carouselEskul = CarouselEskul::findOrFail($id);

        // Hitung jumlah gambar untuk eskul_id yang sama
        $count = CarouselEskul::where('eskul_id', $carouselEskul->eskul_id)->count();

        if ($count <= 1) {
            // Jika hanya ada 1 gambar, batalkan penghapusan
            session()->flash('swal', [
                'title' => 'Gagal!',
                'text' => 'Tidak dapat menghapus. Minimal harus memiliki satu gambar.',
                'icon' => 'error'
            ]);
            return redirect()->route('carouselekstrakulikuler.index');
        }

        // Hapus gambar dari folder jika ada
        if ($carouselEskul->gambar && File::exists(public_path('img/ekstrakulikuler/' . $carouselEskul->gambar))) {
            File::delete(public_path('img/ekstrakulikuler/' . $carouselEskul->gambar));
        }

        // Hapus data dari database
        if ($carouselEskul->delete()) {
            session()->flash('swal', [
                'title' => 'Berhasil!',
                'text' => 'Gallery Foto Ekstrakulikuler berhasil dihapus.',
                'icon' => 'success'
            ]);
        } else {
            session()->flash('swal', [
                'title' => 'Gagal!',
                'text' => 'Gagal menghapus data.',
                'icon' => 'error'
            ]);
        }

        return redirect()->route('carouselekstrakulikuler.index');
    }
}
