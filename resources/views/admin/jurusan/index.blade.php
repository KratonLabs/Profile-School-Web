@extends('admin.layouts.app')
@section('content')
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Jurusan</h2>
        </div>
    </div>
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center pr-3">
            <div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item active"><a href="/jurusan">Jurusan</a></li>
                </ul>
            </div>
            <div>
                <a href="/jurusan/create" type="button" class="btn btn-sm btn-primary"><i
                        class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>
    <section class="no-padding-top">
        <div class="container-fluid">
            @if (count($jurusan) < 1)
                <div class="row d-flex justify-content-center">
                    <h2 class="text-danger">Tidak ada data</h2>
                </div>
            @else
                <div class="row">
                    @foreach ($jurusan as $item)
                        <div class="col-lg-4">
                            <div class="user-block block text-center">
                                <div class=""><img src="{{ asset('img/jurusan/' . $item->gambar) }}" alt="..."
                                        class="img-fluid" style="width: 2500px; height: 150px; object-fit: cover;">
                                </div><a href="#" class="user-title">
                                    <h3 class="h5">{{ $item->nama }}</h3>
                                </a>
                                <div class="details row">
                                    <div class="col">
                                        <a href="{{ route('jurusan.edit', $item->id) }}"
                                            class="btn btn-lg btn-warning h5"><i class="fa fa-pencil-square"></i> Update</a>
                                    </div>
                                    <div class="col">
                                        <a type="button" data-toggle="modal" data-target="#myJurusan{{ $item->id }}"
                                            class="btn btn-lg btn-danger h5"><i class="fa fa-trash"></i> Hapus</a>
                                    </div>
                                    @include('admin.jurusan.confirmdelete')
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endsection
