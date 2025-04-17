@extends('admin.layouts.app')
@section('content')
@php
    use Illuminate\Support\Str;
@endphp
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Mata Pelajaran</h2>
        </div>
    </div>
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center pr-3">
            <div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="/pegawai">Pegawai</a></li>
                    <li class="breadcrumb-item active">Mata Pelajaran</li>
                </ul>
            </div>
            <div>
                <a href="/mata-pelajaran/create" type="button" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i></a>
            </div>
        </div>
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
                                        <th>Mata Pelajaran</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                @if (count($mata_pelajaran)<1)
                                    <tbody>
                                        <tr>
                                            <td colspan="4">
                                                <p class="text-center text-danger">Tidak Ada Data</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                @else
                                    <tbody class="text-center">
                                        @foreach ($mata_pelajaran as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ Str::words($item->deskripsi, 9, '...') }}</td>
                                                <td class="d-flex justify-content-around">
                                                    <a href="{{ route('mata-pelajaran.edit',$item->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-pencil-square"></i></a>
                                                    <button type="button" data-toggle="modal" data-target="#myModal{{ $item->id }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                                </td>
                                                @include('admin.mata-pelajaran.confirmdelete')
                                            </tr>
                                        @endforeach
                                    </tbody>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4 justify-content-center">
                {{ $mata_pelajaran->onEachSide(1)->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </section>
@endsection
