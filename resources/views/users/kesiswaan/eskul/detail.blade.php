@extends('users.layouts.app')
@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background">
        <div class="section-title" data-aos="fade-up">
            <h2>Ekstrakulikuler</h2>
            <p>{{ $data->nama }}</p>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Profil Eskul -->
    <section id="portfolio-details" class="portfolio-details section">

        <div class="container" data-aos="fade-up">
  
          <div class="portfolio-details-slider swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "navigation": {
                  "nextEl": ".swiper-button-next",
                  "prevEl": ".swiper-button-prev"
                },
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                }
              }
            </script>
            <div class="swiper-wrapper align-items-center">
  
              <div class="swiper-slide">
                <img src="/selecao/assets/img/portfolio/app-1.jpg" alt="">
              </div>
  
              <div class="swiper-slide">
                <img src="/selecao/assets/img/portfolio/product-1.jpg" alt="">
              </div>
  
              <div class="swiper-slide">
                <img src="/selecao/assets/img/portfolio/branding-1.jpg" alt="">
              </div>
  
              <div class="swiper-slide">
                <img src="/selecao/assets/img/portfolio/books-1.jpg" alt="">
              </div>
  
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-pagination"></div>
          </div>
  
          <div class="row justify-content-between gy-4 mt-4">
  
            <div class="col-lg-8" data-aos="fade-up">
              <div class="portfolio-description">
                <h2>{{ $data->nama }} SMA Daan Mogot</h2>
                <p style="text-align:justify;">
                  {!! $data->deskripsi !!}
                </p>

                @if ($data->pegawai!=null)
                <div class="testimonial-item">
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                  <div>
                    <img src="/selecao/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                    <h3> {{ $data->pegawai->nama }}</h3>
                    <h4>Pembina  {{ $data->nama }}</h4>
                  </div>
                </div>
                @endif
              </div>
            </div>
  
            <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="portfolio-info">
                  <h3>Profil Eskul</h3>
                  <ul>
                    <li>
                      <i class="bi bi-person-badge"></i> <strong>Pembina:</strong>
                      @if ($data->pegawai!=null)
                      {{ $data->pegawai->nama }}
                      @else
                      -
                      @endif
                    </li>
                    <li>
                      <i class="bi bi-calendar-check"></i> <strong>Tahun Berdiri:</strong> {{ $data->tahun_berdiri }}
                    </li>
                    <li>
                      <i class="bi bi-people-fill"></i> <strong>Jumlah Anggota:</strong>  {{ $data->jumlah_anggota }} siswa
                    </li>
                    <li>
                      <i class="bi bi-instagram"></i> <strong>Instagram:</strong> 
                      <a href="{{$data->alamat_ig}}" target="_blank">{{$data->nama_ig}}</a>
                    </li>
                    <li>
                      <i class="bi bi-link-45deg"></i> <strong>Form Pendaftaran:</strong> 
                      <a href="https://bit.ly/daftar-pramuka" target="_blank">Klik di sini</a>
                    </li>
                  </ul>
                </div>
              </div>
              
  
          </div>
  
        </div>
  
    </section>
    <!-- /Profil Eskul -->

  </main>
@endsection