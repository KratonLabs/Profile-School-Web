@extends('admin.layouts.app')
@section('content')
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                    <div class="progress-details d-flex align-items-end justify-content-between">
                        <div class="title">
                            <div class="icon"><i class="icon-user-1"></i></div><strong>Guru & Staff</strong>
                        </div>
                        <div class="number " style="color:#f58f7a;">{{ $jumlahPegawai }}</div>
                    </div>
                    <div class="progress progress-template">
                        <div role="progressbar" style="width: 100%;background-color:#f58f7a;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"
                            class="progress-bar progress-bar-template"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                    <div class="progress-details d-flex align-items-end justify-content-between">
                        <div class="title">
                            <div class="icon"><i class="icon-contract"></i></div><strong>Mata Pelajaran</strong>
                        </div>
                        <div class="number dashtext-2">{{ $jumlahMataPelajaran }}</div>
                    </div>
                    <div class="progress progress-template">
                        <div role="progressbar" style="width: 100%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                            class="progress-bar progress-bar-template dashbg-2"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                    <div class="progress-details d-flex align-items-end justify-content-between">
                        <div class="title">
                            <div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>Ekstrakulikuler</strong>
                        </div>
                        <div class="number dashtext-3">{{ $jumlahEsktrakulikuler }}</div>
                    </div>
                    <div class="progress progress-template">
                        <div role="progressbar" style="width: 100%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"
                            class="progress-bar progress-bar-template dashbg-3"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                    <div class="progress-details d-flex align-items-end justify-content-between">
                        <div class="title">
                            <div class="icon"><i class="icon-writing-whiteboard"></i></div><strong>Fasilitas</strong>
                        </div>
                        <div class="number" style="color:#8f43e0;">{{ $jumlahFasilitas }}</div>
                    </div>
                    <div class="progress progress-template">
                        <div role="progressbar" style="width: 100%;background-color:#8f43e0" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"
                            class="progress-bar progress-bar-template"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="pie-chart chart block">
                    <div class="title"><strong>Perbandingan Jumlah Guru dan Staff</strong></div>
                    <div class="pie-chart chart margin-bottom-sm">
                        <canvas id="pieChartPerbandinganGurudanStaff"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="doughnut-chart chart block">
                  <div class="title"><strong>Kategori Berita Terpopuler</strong></div>
                  <div class="doughnut-chart chart margin-bottom-sm">
                    <canvas id="doughnutChartKategoriBeritaTerpopuler"></canvas>
                  </div>
                </div>
              </div>
        </div>
    </div>

    <script>
        window.jumlahGuru = {{ $jumlahGuru }};
        window.jumlahStaff = {{ $jumlahStaff }};

        window.kategoriLabels = @json($labels);
        window.kategoriData = @json($data);
    </script>
@endsection
