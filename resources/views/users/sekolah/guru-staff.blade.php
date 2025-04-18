@extends('users.layouts.app')
@section('content') 
    <div class="page-title dark-background" style="background: url('/gp/assets/img/hero-bg.jpg') center center/cover no-repeat; z-index: 1;">
        <div class="section-title" data-aos="fade-up">
            <h2>Sekolah</h2>
            <p>Guru dan Staff</p>
        </div>
    </div>
    <section id="team" class="team section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Tahun Ajaran 2024/2025</h2>
            <p>Data Tenaga Pendidik dan Kependidikan</p>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="row gy-4">
                @foreach ($guru as $item)
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                    <div class="team-member shadow-lg rounded d-flex flex-column">
                        <div class="member-img position-relative">
                            <img src="{{ asset('img/pegawai/' . $item->gambar) }}" class="img-fluid rounded-top" style="height: 250px; object-fit: cover;" alt="{{ $item->nama }}">
                            <div class="social">
                                <a href="#"><i class="bi bi-person-lines-fill"></i></a>
                                <a href="#"><i class="bi bi-book"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                        <div class="member-info p-3 mt-auto" style="background-color: #e91d1d; border-top: 4px solid #f8e807;">
                            <h5 class="fw-bold text-white text-center p-2">{{ $item->nama }}</h5>
                            <p class="mb-1 text-white p-2">
                                <i class="bi bi-card-heading me-1 text-warning"></i>NIP: {{ $item->nip }}
                            </p>
                            @if ($item->jabatan_id == 1)
                                <p class="mb-1 text-white p-2">
                                    <i class="bi bi-mortarboard-fill me-1 text-warning"></i>Mapel: {{ $item->mataPelajaran->nama }}
                                </p>
                            @endif
                            <p class="text-white p-2 ">
                                <i class="bi bi-award-fill me-1 text-warning"></i>Jabatan: {{ $item->jabatan->nama ?? '-' }}
                            </p>
                        </div>
                    </div>
                </div>
                
                @endforeach
            </div>
        </div>
    </section>

    <!-- Blog Pagination Section -->
    <section id="blog-pagination" class="blog-pagination section">
        <div class="container">
            <div class="d-flex justify-content-center">
                {{ $guru->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </section>
    <!-- /Blog Pagination Section -->
@endsection