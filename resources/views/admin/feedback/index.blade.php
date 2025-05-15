@extends('admin.layouts.app')
@section('content')
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Feedback User</h2>
        </div>
    </div>
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center pr-3">
            <div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Feedback User</li>
                </ul>
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
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Subjek</th>
                                        <th>Pesan</th>
                                    </tr>
                                </thead>
                                @if (count($feedback)<1)
                                    <tbody>
                                        <tr>
                                            <td colspan="4">
                                                <p class="text-center text-danger">Tidak Ada Data</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                @else
                                    <tbody class="text-center">
                                        @foreach ($feedback as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->subject }}</td>
                                                <td>{{ $item->pesan }}</td>
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
                {{ $feedback->onEachSide(1)->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </section>
@endsection
