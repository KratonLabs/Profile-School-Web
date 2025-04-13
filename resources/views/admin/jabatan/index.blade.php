@extends('admin.layouts.app')
@section('content')
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Jabatan</h2>
        </div>
    </div>
    <div class="container-fluid">
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
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Jabatan</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                @if (count($jabatan)<1)
                                    <tbody>
                                        <tr>
                                            <td colspan="4">
                                                <p class="text-center text-danger">Tidak Ada Data</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                @else
                                    <tbody class="text-center">
                                        @foreach ($jabatan as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->deskripsi}}</td>
                                                <td class="d-flex justify-content-around">
                                                    <a href="{{ route('jabatan.edit',$item->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-pencil-square"></i></a>
                                                    <button type="button" data-toggle="modal" data-target="#myModal{{ $item->id }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                                </td>
                                                @include('admin.jabatan.confirmdelete')
                                            </tr>
                                        @endforeach
                                    </tbody>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
