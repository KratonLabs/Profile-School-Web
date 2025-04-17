<?php

namespace App\Http\Controllers;

use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mata_pelajaran=MataPelajaran::paginate(10);
        return view('admin.mata-pelajaran.index', compact('mata_pelajaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.mata-pelajaran.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required|string',
        ]);

        $mata_pelajaran=new MataPelajaran();
        $mata_pelajaran->nama=$request->nama;
        $mata_pelajaran->deskripsi=strip_tags($request->input('deskripsi'));

        if ($mata_pelajaran->save()) {
            session()->flash('swal', [
                'title' => 'Berhasil!',
                'text' => 'Data Mata Pelajaran berhasil ditambahkan.',
                'icon' => 'success'
            ]);
        } else {
            session()->flash('swal', [
                'title' => 'Gagal!',
                'text' => 'Gagal menambah data.',
                'icon' => 'error'
            ]);
        }
    
        return redirect()->route('mata-pelajaran.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(MataPelajaran $mataPelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = MataPelajaran::find($id);
        return view('admin.mata-pelajaran.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required|string',
        ]);

        $mata_pelajaran=MataPelajaran::find($id);

        $mata_pelajaran->nama=$request->nama;
        $mata_pelajaran->deskripsi=strip_tags($request->input('deskripsi'));

        if ($mata_pelajaran->save()) {
            session()->flash('swal', [
                'title' => 'Berhasil!',
                'text' => 'Data Mata Pelajaran berhasil diupdate.',
                'icon' => 'success'
            ]);
        } else {
            session()->flash('swal', [
                'title' => 'Gagal!',
                'text' => 'Gagal mengupdate data.',
                'icon' => 'error'
            ]);
        }
    
        return redirect()->route('mata-pelajaran.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = MataPelajaran::find($id);
        if ($data->delete()){
            session()->flash('swal', [
                'title' => 'Berhasil!',
                'text' => 'Data Mata Pelajaran berhasil dihapus.',
                'icon' => 'success'
            ]);
        } else {
            session()->flash('swal', [
                'title' => 'Gagal!',
                'text' => 'Gagal menghapus data.',
                'icon' => 'error'
            ]);
        }
        return redirect()->route('mata-pelajaran.index');
    }
}
