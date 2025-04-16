@extends('users.layouts.app')
@section('content') 

<main class="main">
    <div class="page-title dark-background">
        <div class="section-title" data-aos="fade-up">
            <h2>Sekolah</h2>
            <p>Sarana Prasarana</p>
        </div>
    </div>
    <section id="recent-posts" class="recent-posts section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Sarana Prasana</h2>
            <p>Fasilitias SMA Daan Mogot</p>
        </div>

        <div class="container">
            <div class="row gy-4">
                @foreach ($fasilitas as $item)
                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                        <article class="shadow-sm rounded overflow-hidden">

                            <div class="post-img">
                                <img src="{{ asset('img/fasilitas/' . $item->gambar) }}" alt="{{ $item->nama }}"
                                    class="img-fluid" style="height: 220px; width: 100%; object-fit: cover;">
                            </div>

                            <p class="post-category fw-bold text-primary">{{ $item->jenis }}</p>

                            <h2 class="title h5">
                                <a href="/fasilitas-item">{{ $item->nama }}</a>
                            </h2>

                            <div class="post-meta">
                                <p class="mb-2">{{ Str::limit($item->deskripsi, 100) }}</p>
                            </div>

                        </article>
                    </div>
                @endforeach
            </div>
        </div>

    </section>

    <!-- Blog Pagination Section -->
    <section id="blog-pagination" class="blog-pagination section">
        <div class="container">
            <div class="d-flex justify-content-center">
                {{ $fasilitas->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </section>
    <!-- /Blog Pagination Section -->
</main>
@endsection
