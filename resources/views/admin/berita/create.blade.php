@extends('admin.layouts.app')
@section('content')
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Berita</h2>
        </div>
    </div>
    <div class="container-fluid m-0">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Berita</li>
    </div>
    <section class="no-padding-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="block">
                        <div class="title"><strong class="d-block">Tambah Berita</strong></div>
                        <div class="block-body">
                            <form action="{{ route('berita.store') }}" method="POST" class="form-horizontal"
                                enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label h6">Judul Berita</label>
                                    <div class="col-sm-9">
                                        <input id="inputHorizontalSuccess" type="text" name="judul"
                                            class="form-control rounded @error('judul') is-invalid @else border border-light @enderror"
                                            value="{{ old('judul') }}">
                                        @error('judul')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label h6">Ketgori</label>
                                    <div class="col-sm-9">
                                        <select name="kategori" class="form-control mb-3">
                                            <option value="">-- Pilih Kategori Berita --</option>
                                            <option value="Pengumuman" {{ old('kategori') == "Pengumuman" ? 'selected' : '' }}>Pengumuman</option>
                                            <option value="Kegiatan" {{ old('kategori') == "Kegiatan" ? 'selected' : '' }}>Kegiatan</option>
                                            <option value="Prestasi" {{ old('kategori') == "Prestasi" ? 'selected' : '' }}>Prestasi</option>
                                        </select>
                                        @error('kategori')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label h6">Gambar</label>
                                    <div class="col-sm-9">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="gambar" id="inputGroupFile01"
                                                aria-describedby="inputGroupFileAddon01">
                                            <label
                                                class="custom-file-label form-control @error('gambar') is-invalid @enderror"
                                                for="inputGroupFile01">Pilih Gambar</label>
                                        </div>
                                        @error('gambar')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label h6">Dekripsi</label>
                                    <div class="col-sm-9">
                                        <input id="deskripsi" type="hidden" name="deskripsi"
                                            value="{{ old('deskripsi') }}">
                                        <trix-editor id="trixDeskripsi" input="deskripsi"></trix-editor>
                                        @error('deskripsi')
                                            <small class="text-danger fs-6">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-9 offset-sm-3">
                                        <a type="button" href="/berita"
                                            class="btn btn-secondary text-white">Kembali</a>
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
