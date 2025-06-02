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
                            <form action="{{ route('ekstrakulikuler.update', $data->id) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label h6">Nama Ekstrakulikuler</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama" class="form-control rounded @error('nama') is-invalid @else border border-light @enderror"
                                            value="{{ old('nama', $data->nama) }}">
                                        @error('nama')<small class="text-danger">{{ $message }}</small>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label h6">Jumlah Anggota</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="jumlah_anggota" class="form-control rounded @error('jumlah_anggota') is-invalid @else border border-light @enderror"
                                            value="{{ old('jumlah_anggota', $data->jumlah_anggota) }}">
                                        @error('jumlah_anggota')<small class="text-danger">{{ $message }}</small>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label h6">Tahun Berdiri</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="tahun_berdiri" class="form-control rounded @error('tahun_berdiri') is-invalid @else border border-light @enderror"
                                            value="{{ old('tahun_berdiri', $data->tahun_berdiri) }}" min="1900" max="{{ date('Y') }}">
                                        @error('tahun_berdiri')<small class="text-danger">{{ $message }}</small>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label h6">Nama Instagram</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_ig" class="form-control rounded @error('nama_ig') is-invalid @else border border-light @enderror"
                                            value="{{ old('nama_ig', $data->nama_ig) }}">
                                        @error('nama_ig')<small class="text-danger">{{ $message }}</small>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label h6">Link Instagram</label>
                                    <div class="col-sm-9">
                                        <input type="url" name="alamat_ig" class="form-control rounded @error('alamat_ig') is-invalid @else border border-light @enderror"
                                            value="{{ old('alamat_ig', $data->alamat_ig) }}">
                                        @error('alamat_ig')<small class="text-danger">{{ $message }}</small>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label h6">Kategori</label>
                                    <div class="col-sm-9">
                                        <select name="kategori" class="form-control rounded @error('kategori') is-invalid @else border border-light @enderror">
                                            <option value="">-- Pilih Kategori --</option>
                                            @foreach(['Kenegaraan', 'Keagamaan', 'Seni', 'Olahraga', 'Sains & Teknologi'] as $kategori)
                                                <option value="{{ $kategori }}" {{ old('kategori', $data->kategori) == $kategori ? 'selected' : '' }}>{{ $kategori }}</option>
                                            @endforeach
                                        </select>
                                        @error('kategori')<small class="text-danger">{{ $message }}</small>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label h6">Pembina</label>
                                    <div class="col-sm-9">
                                        <select name="pegawai_id" class="form-control">
                                            <option value="">-- Pilih Pembina --</option>
                                            @foreach ($pembina as $item)
                                                <option value="{{ $item->id }}" {{ old('pegawai_id', $data->pegawai_id) == $item->id ? 'selected' : '' }}>
                                                    {{ $item->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('pegawai_id')<small class="text-danger">{{ $message }}</small>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label h6">Logo</label>
                                    <div class="col-sm-9">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="logo" id="inputLogo">
                                            <label class="custom-file-label form-control @error('logo') is-invalid @enderror" for="inputLogo">Pilih Logo</label>
                                        </div>
                                        @error('logo')<small class="text-danger">{{ $message }}</small>@enderror
                                        @if ($data->logo)
                                        <a type="button" data-toggle="modal" data-target="#myLogo{{ $data->id }}"
                                            class="btn btn-lg btn-warning h6 mt-2"><i class="fa fa-trash"></i> Lihat Logo saat ini</a>
                                            @include('admin.ekstrakulikuler.showpicture')
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label h6">Deskripsi</label>
                                    <div class="col-sm-9">
                                        <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi', $data->deskripsi) }}">
                                        <trix-editor input="deskripsi"></trix-editor>
                                        @error('deskripsi')<small class="text-danger">{{ $message }}</small>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-9 offset-sm-3">
                                        <a href="/ekstrakulikuler" class="btn btn-secondary text-white">Kembali</a>
                                        <button type="submit" class="btn btn-primary">Perbarui</button>
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
