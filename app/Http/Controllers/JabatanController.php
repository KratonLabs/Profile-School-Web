<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jabatan=Jabatan::all();
        return view('admin.jabatan.index', compact('jabatan'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Jabatan $jabatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Jabatan::find($id);
        return view('admin.jabatan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'nama' => 'required|in:Guru,Staff',
            'deskripsi' => 'required|string',
        ]);

        $jabatan=Jabatan::find($id);

        $jabatan->nama=$request->nama;
        $jabatan->deskripsi=strip_tags($request->input('deskripsi'));

        if ($jabatan->save()) {
            session()->flash('swal', [
                'title' => 'Berhasil!',
                'text' => 'Data Jabatan berhasil diupdate.',
                'icon' => 'success'
            ]);
        } else {
            session()->flash('swal', [
                'title' => 'Gagal!',
                'text' => 'Gagal mengupdate data.',
                'icon' => 'error'
            ]);
        }
    
        return redirect()->route('jabatan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Jabatan::find($id);
        if ($data->delete()){
            session()->flash('swal', [
                'title' => 'Berhasil!',
                'text' => 'Data Jabatan berhasil dihapus.',
                'icon' => 'success'
            ]);
        } else {
            session()->flash('swal', [
                'title' => 'Gagal!',
                'text' => 'Gagal menghapus data.',
                'icon' => 'error'
            ]);
        }
    }
}
