@extends('user.layouts.app')
@section('content')
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <section id="call-to-action" class="call-to-action section dark-background">

            <img src="{{ asset('gp/assets/img/cta-bg.jpg') }}" alt="">
      
            <div class="container">
              <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                  <div class="text-center">
                    <h3>Call To Action</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <a class="cta-btn" href="#">Call To Action</a>
                  </div>
                </div>
              </div>
            </div>
      
          </section><!-- /Call To Action Section -->
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Starter Page</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Starter Section</h2>
            <p>Check Starter Section<br></p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">
            {!!  $cleanDeskripsi !!} 
        </div>

        {{-- <div class="m-3 d-flex justify-content-center">
          <iframe src="{{ asset('doc/Kumpulan SS share poster.pdf') }}" width="85%" height="600px"></iframe>
        </div> --}}


    </section><!-- /Starter Section Section -->

@endsection
