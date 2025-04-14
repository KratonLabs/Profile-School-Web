@extends('admin.layouts.app')
@section('content')
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Pegawai</h2>
        </div>
    </div>
    <div class="container-fluid m-0">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="/pegawai">Pegawai</a></li>
            <li class="breadcrumb-item active">Guru & Staff</li>
        </ul>
    </div>
    <section class="no-padding-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="block">
                        <div class="title"><strong class="d-block">Tambah Pegawai</strong></div>
                        <div class="block-body">
                            <form action="{{ route('pegawai.store') }}" method="POST" class="form-horizontal"
                                enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label h6">Nama Pegawai</label>
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
                                    <label class="col-sm-3 form-control-label h6">Jabatan</label>
                                    <div class="col-sm-9">
                                        <select name="jabatan_id" class="form-control mb-3">
                                            <option value="">-- Pilih Jabatan --</option>
                                            @foreach ($jabatan as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ old('jabatan_id') == $item->id ? 'selected' : '' }}>
                                                    {{ $item->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('jabatan_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label h6">Mata Pelajaran</label>
                                    <div class="col-sm-9">
                                        <select name="mata_pelajaran_id" class="form-control mb-3">
                                            <option value="">-- Pilih Mata Pelajaran --</option>
                                            @foreach ($mata_pelajaran as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ old('mata_pelajaran_id') == $item->id ? 'selected' : '' }}>
                                                    {{ $item->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('mata_pelajaran_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label h6">NIP</label>
                                    <div class="col-sm-9">
                                        <input id="inputHorizontalSuccess" type="number" name="nip"
                                            class="form-control rounded @error('nip') is-invalid @else border border-light @enderror"
                                            value="{{ old('nip') }}">
                                        @error('nip')
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
