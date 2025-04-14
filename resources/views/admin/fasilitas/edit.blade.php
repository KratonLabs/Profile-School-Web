@extends('admin.layouts.app')
@section('content')
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Fasilitas</h2>
        </div>
    </div>
    <div class="container-fluid m-0">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Fasilitas</li>
    </div>
    <section class="no-padding-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="block">
                        <div class="title"><strong class="d-block">Edit Fasilitas</strong></div>
                        <div class="block-body">
                            <form action="{{ route('fasilitas.update',$data->id) }}" method="POST" class="form-horizontal"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label h6">Nama Fasilitas</label>
                                    <div class="col-sm-9">
                                        <input id="inputHorizontalSuccess" type="text" name="nama"
                                            class="form-control rounded @error('nama') is-invalid @else border border-light @enderror"
                                            value="{{ old('nama',$data->nama) }}">
                                        @error('nama')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label h6">Jenis</label>
                                    <div class="col-sm-9">
                                        <select name="jenis" class="form-control mb-3">
                                            <option value="">-- Pilih Jenis Fasilitas --</option>
                                            <option value="Akademik" {{ old('jenis',$data->jenis) == "Akademik" ? 'selected' : '' }}>Akademik</option>
                                            <option value="Non-Akademik" {{ old('jenis',$data->jenis) == "Non-Akademik" ? 'selected' : '' }}>Non-Akademik</option>
                                            <option value="Keorganisasian" {{ old('jenis',$data->jenis) == "Keorganisasian" ? 'selected' : '' }}>Keorganisasian</option>
                                            <option value="Umum" {{ old('jenis',$data->jenis) == "Umum" ? 'selected' : '' }}>Umum</option>
                                        </select>
                                        @error('jenis')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label h6">Gambar</label>
                                    <div class="col-sm-9">
                                        <span>Masukkan file gambar jika anda ingin mengganti gambar</span>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="gambar" id="inputGroupFile01"
                                                aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label form-control @error('gambar') is-invalid @enderror"
                                                for="inputGroupFile01">Pilih Gambar</label>
                                            </div>
                                        @if ($data->gambar)
                                        <a type="button" data-toggle="modal" data-target="#myPicture{{ $data->id }}"
                                            class="btn btn-lg btn-warning h6 mt-2"><i class="fa fa-trash"></i> Lihat Gambar saat ini</a>
                                            @include('admin.fasilitas.showpicture')
                                        @endif
                                        @error('gambar')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label h6">Dekripsi</label>
                                    <div class="col-sm-9">
                                        <input id="deskripsi" type="hidden" name="deskripsi"
                                            value="{{ old('deskripsi', $data->deskripsi) }}">
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
                                        <a type="button" href="/fasilitas"
                                            class="btn btn-secondary text-white">Kembali</a>
                                        <button type="submit" class="btn btn-primary">Update</button>
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
