@extends('admin.layouts.app')
@section('content')
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Jurusan</h2>
        </div>
    </div>
    <div class="container-fluid m-0">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Jurusan</li>
    </div>
    <section class="no-padding-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="block">
                        <div class="title"><strong class="d-block">Tambah Jurusan</strong></div>
                        <div class="block-body">
                            <form action="{{ route('jurusan.store') }}" method="POST" class="form-horizontal"
                                enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label h6">Nama Jurusan</label>
                                    <div class="col-sm-9">
                                        <input id="inputHorizontalSuccess" type="text" name="nama"
                                            class="form-control rounded @error('nama') is-invalid @else border border-light @enderror"
                                            value="{{ old('nama') }}">
                                        @error('nama')
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
                                        <a type="button" href="/pegawai"
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
