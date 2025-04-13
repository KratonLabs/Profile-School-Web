@extends('admin.layouts.app')
@section('content')
    @if ($errors->has('deskripsi'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.getElementById('trixDeskripsi').classList.add('is-invalid');
            });
        </script>
    @endif
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Jabatan</h2>
        </div>
    </div>
    <div class="container-fluid m-0">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="/pegawai">Pegawai</a></li>
            <li class="breadcrumb-item active">Jabatan</li>
        </ul>
    </div>
    <section class="no-padding-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="block">
                        <div class="title"><strong class="d-block">Edit Jabatan</strong></div>
                        <div class="block-body">
                            <form action="{{ route('jabatan.update', $data->id) }}" method="POST" class="form-horizontal">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label h6">Nama Jabatan</label>
                                    <div class="col-sm-9">
                                        <input id="inputHorizontalSuccess" type="text" name="nama"
                                            class="form-control rounded @error('nama') is-invalid @else border border-light @enderror"
                                            value="{{ old('nama', $data->nama) }}">
                                        @error('nama')
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
                                        <a type="button" href="/jabatan" class="btn btn-secondary text-white">Kembali</a>
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
