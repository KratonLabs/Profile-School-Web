@extends('users.layouts.app')
@section('content')
    <main class="main">

        <!-- Tittle -->
        <div class="page-title dark-background">
            <div class="section-title" data-aos="fade-up">
                <h2>SMA Daan Mogot</h2>
                <p>Jurusan Studi</p>
            </div>
        </div>
        <!-- /Title-->

        <!-- Jurusan -->
        @foreach ($jurusan as $items)
            @if ($loop->iteration % 2 == 0)
                <!-- Kiri -->
                <section id="mission" class="about section">
                    <div class="container">
                        <div class="row gy-4">

                            <!-- Gambar di sebelah kiri -->
                            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                                <img src="{{ asset('img/jurusan/' . $items->gambar) }}" alt="Misi Sekolah"
                                    class="img-fluid rounded shadow mb-3">
                            </div>

                            <!-- Teks di sebelah kanan -->
                            <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">

                                <!-- Section Title di dalam kolom teks -->
                                <div class="section-title">
                                    <h2>Jurusan</h2>
                                    <p>{{ $items->nama }}</p>
                                </div>

                                <!-- Isi Misi -->
                                <p class="text-muted">{!! $items->deskripsi !!}</p>
                                <a href="/jurusan-detail/{{ $items->id }}" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                            </div>

                        </div>
                    </div>
                </section>
            @else
                <!-- Kanan -->
                <section id="vision" class="about section">

                    <!-- Section Title -->
                    <div class="container section-title" data-aos="fade-up">
                        <h2>Jurusan</h2>
                        <p>{{ $items->nama }}</p>
                    </div><!-- End Section Title -->

                    <div class="container">

                        <div class="row gy-4">

                            <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                                <p class="text-muted">
                                    {!! $items->deskripsi !!}
                                </p>
                                <a href="/jurusan-detail/{{ $items->id }}" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                            </div>

                            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                                <img src="{{ asset('img/jurusan/' . $items->gambar) }}" alt="Visi dan Misi Sekolah"
                                    class="img-fluid rounded shadow mb-3">
                            </div>

                        </div>

                    </div>

                </section>
            @endif
        @endforeach

        <!-- /Jurusan -->
    </main>
@endsection
