@extends('admin.layouts.app')
@section('content')
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Ekstrakulikuler</h2>
        </div>
    </div>
    <div class="container-fluid m-0">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Ekstrakulikuler</li>
    </div>
    <section class="no-padding-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="block">
                        <div class="title"><strong class="d-block">Edit Ekstrakulikuler</strong></div>
                        <div class="block-body">
                            <form action="{{ route('ekstrakulikuler.update',$data->id) }}" method="POST" class="form-horizontal"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label h6">Nama Ekstrakulikuler</label>
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
                                    <label class="col-sm-3 form-control-label h6">Jumlah Anggota</label>
                                    <div class="col-sm-9">
                                        <input id="inputHorizontalSuccess" type="number" name="jumlah_anggota"
                                            class="form-control rounded @error('jumlah_anggota') is-invalid @else border border-light @enderror"
                                            value="{{ old('jumlah_anggota',$data->jumlah_anggota) }}">
                                        @error('jumlah_anggota')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label h6">Pembina</label>
                                    <div class="col-sm-9">
                                        <select name="pegawai_id" class="form-control mb-3">
                                            <option value="">-- Pilih Pembina --</option>
                                            @foreach ($pembina as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ old('pegawai_id', $data->pegawai_id) == $item->id ? 'selected' : '' }}>
                                                    {{ $item->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('pegawai_id')
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
                                            @include('admin.ekstrakulikuler.showpicture')
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
                                        <a type="button" href="/ekstrakulikuler"
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
