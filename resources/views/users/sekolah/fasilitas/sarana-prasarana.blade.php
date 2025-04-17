@extends('users.layouts.app')
@section('content') 

<main class="main">
    <div class="page-title dark-background" style="background: url('/gp/assets/img/hero-bg.jpg') center center/cover no-repeat; z-index: 1;">
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
                @include('users.sekolah.fasilitas.components.card_fasilitas')
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
