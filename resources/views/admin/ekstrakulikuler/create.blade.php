@extends('admin.layouts.app')
@section('content')
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Ekstrakulikuler</h2>
        </div>
    <section class="no-padding-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="block">
                        <div class="title"><strong class="d-block">Tambah Ekstrakulikuler</strong></div>
                        <div class="block-body">
                            <form action="{{ route('ekstrakulikuler.store') }}" method="POST" class="form-horizontal"
                                enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label h6">Nama Ekstrakulikuler</label>
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
                                    <label class="col-sm-3 form-control-label h6">Jumlah Anggota</label>
                                    <div class="col-sm-9">
                                        <input id="inputHorizontalSuccess" type="number" name="jumlah_anggota"
                                            class="form-control rounded @error('jumlah_anggota') is-invalid @else border border-light @enderror"
                                            value="{{ old('jumlah_anggota') }}">
                                        @error('jumlah_anggota')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label h6">Tahun Berdiri</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="tahun_berdiri"
                                            class="form-control rounded @error('tahun_berdiri') is-invalid @else border border-light @enderror"
                                            value="{{ old('tahun_berdiri') }}" placeholder="Contoh: 2015" min="1900"
                                            max="{{ date('Y') }}">
                                        @error('tahun_berdiri')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label h6">Nama Instagram</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_ig"
                                            class="form-control rounded @error('nama_ig') is-invalid @else border border-light @enderror"
                                            value="{{ old('nama_ig') }}" placeholder="Contoh: OSIS SMAN 1">
                                        @error('nama_ig')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label h6">Link Instagram</label>
                                    <div class="col-sm-9">
                                        <input type="url" name="alamat_ig"
                                            class="form-control rounded @error('alamat_ig') is-invalid @else border border-light @enderror"
                                            value="{{ old('alamat_ig') }}"
                                            placeholder="Contoh: https://instagram.com/osis_sman1">
                                        @error('alamat_ig')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label h6">Kategori</label>
                                    <div class="col-sm-9">
                                        <select name="kategori"
                                            class="form-control rounded @error('kategori') is-invalid @else border border-light @enderror">
                                            <option value="">-- Pilih Kategori --</option>
                                            <option value="Kenegaraan" {{ old('kategori') == 'Kenegaraan' ? 'selected' : '' }}>Kenegaraan</option>
                                            <option value="Keagamaan" {{ old('kategori') == 'Keagamaan' ? 'selected' : '' }}>Keagamaan</option>
                                            <option value="Seni" {{ old('kategori') == 'Seni' ? 'selected' : '' }}>Seni</option>
                                            <option value="Olahraga" {{ old('kategori') == 'Olahraga' ? 'selected' : '' }}>Olahraga</option>
                                            <option value="Sains & Teknologi" {{ old('kategori') == 'Sains & Teknologi' ? 'selected' : '' }}>Sains & Teknologi</option>
                                        </select>
                                        @error('kategori')
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
                                                    {{ old('pegawai_id') == $item->id ? 'selected' : '' }}>
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
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="gambar"
                                                id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
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
                                    <label class="col-sm-3 form-control-label h6">Logo</label>
                                    <div class="col-sm-9">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="logo"
                                                id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                            <label
                                                class="custom-file-label form-control @error('logo') is-invalid @enderror"
                                                for="inputGroupFile01">Pilih Logo</label>
                                        </div>
                                        @error('logo')
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
                                        <a type="button" href="/ekstrakulikuler"
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
 </div>
    <div class="container-fluid m-0">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Ekstrakulikuler</li>
    </div>

@endsection
