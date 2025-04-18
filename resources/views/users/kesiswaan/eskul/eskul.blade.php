@extends('users.layouts.app')
@section('content')
@php
$icons = [
    'kenegaraan' => 'bi bi-flag',
    'keagamaan' => 'bi bi-book',
    'seni' => 'bi bi-brush',
    'olahraga' => 'bi bi-dribbble',
    'sains & teknologi' => 'bi bi-lightbulb',
];
@endphp

    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" style="background: url('/gp/assets/img/hero-bg.jpg') center center/cover no-repeat; z-index: 1;">
            <div class="section-title" data-aos="fade-up">
                <h2>Kesiswaan</h2>
                <p>Ekstrakulikuler</p>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Kategori Icon Ekstrakurikuler -->
        <section id="features" class="features">
            <div class="container">
                <ul class="nav nav-tabs row d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <li class="nav-item col-4 col-md-2">
                        <a class="nav-link active show text-center" data-bs-toggle="tab" data-bs-target="#all">
                            <i class="bi bi-grid-fill fs-2"></i>
                            <h4 class="d-none d-lg-block mt-2">All</h4>
                        </a>
                    </li>
                    @foreach ($kategori_list as $kategori)
                        <li class="nav-item col-4 col-md-2">
                            <a class="nav-link text-center" data-bs-toggle="tab"
                                data-bs-target="#{{ Str::slug($kategori->kategori) }}">
                                <i class="{{ $icons[strtolower($kategori->kategori)] ?? 'bi bi-folder' }} fs-2"></i>
                                <h4 class="d-none d-lg-block mt-2">{{ $kategori->kategori }}</h4>
                            </a>
                        </li>
                    @endforeach
                </ul>

            </div>
        </section><!-- End Kategori Icon -->

        <!-- Blog Posts Section (Ekstrakurikuler Cards) -->
        <div class="blog-posts section">
            <div class="container tab-content">
                {{-- Tab All --}}
                <div class="tab-pane fade show active" id="all">
                    <div class="row gy-4">
                        @foreach ($ekstrakulikuler as $item)
                            @include('users.kesiswaan.eskul.components.card_ekskul', ['item' => $item])
                        @endforeach
                    </div>
                </div>

                {{-- Tab per kategori --}}
                @foreach ($kategori_list as $kategori)
                    <div class="tab-pane fade" id="{{ Str::slug($kategori->kategori) }}">
                        <div class="row gy-4">
                            @forelse ($ekskulByKategori[$kategori->kategori] as $item)
                                @include('users.kesiswaan.eskul.components.card_ekskul', ['item' => $item])
                            @empty
                                <p class="text-center text-danger">Tidak ada data {{ $kategori->kategori }}.</p>
                            @endforelse
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
