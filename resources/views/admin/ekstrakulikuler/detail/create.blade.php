@extends('admin.layouts.app')
@section('content')
<div class="page-header">
    <div class="container-fluid">
        <h2 class="h5 no-margin-bottom">Gallery Eskul</h2>
    </div>
</div>
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center pr-3">
        <div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item active"><a href="/ekstrakulikuler">Gallery Eskul </a></li>
            </ul>
        </div>
    </div>
</div>
<section class="no-padding-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="block">
                    <div class="title"><strong class="d-block">Tambah Foto Kegiatan</strong></div>
                    <div class="block-body">
                        <form action="{{ route('carouselekstrakulikuler.store') }}" method="POST" class="form-horizontal"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <input type="hidden" value="{{ $eskulId }}" name="eskul_id">
                                <label class="col-sm-3 form-control-label h6">Gambar</label>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file"
                                            class="custom-file-input @error('gambar') is-invalid @enderror"
                                            name="gambar" id="inputGroupFile01"
                                            aria-describedby="inputGroupFileAddon01" multiple>
                                        <label class="custom-file-label form-control" for="inputGroupFile01">Pilih
                                            Gambar</label>
                                    </div>
                                    @error('gambar')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-9 offset-sm-3">
                                    <a href="/ekstrakulikuler" class="btn btn-secondary text-white">Kembali</a>
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
@endsection
