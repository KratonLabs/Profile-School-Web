@extends('users.layouts.app')
@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" style="background: url('/gp/assets/img/hero-bg.jpg') center center/cover no-repeat; z-index: 1;">
        <div class="section-title" data-aos="fade-up">
            <h2>Kesiswaan</h2>
            <p>Organisasi Intra Sekolah</p>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Osis -->
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
                <h2>OSIS SMA Daan Mogot</h2>
                <p>
                  Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                </p>
                <p>
                  Amet consequatur qui dolore veniam voluptatem voluptatem sit. Non aspernatur atque natus ut cum nam et. Praesentium error dolores rerum minus sequi quia veritatis eum. Eos et doloribus doloremque nesciunt molestiae laboriosam.
                </p>
  
                <div class="testimonial-item">
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                  <div>
                    <img src="/selecao/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Ketua Osis</h4>
                  </div>
                </div>
  
                <p>
                  Impedit ipsum quae et aliquid doloribus et voluptatem quasi. Perspiciatis occaecati earum et magnam animi. Quibusdam non qui ea vitae suscipit vitae sunt. Repudiandae incidunt cumque minus deserunt assumenda tempore. Delectus voluptas necessitatibus est.
                </p>
  
                <p>
                  Sunt voluptatum sapiente facilis quo odio aut ipsum repellat debitis. Molestiae et autem libero. Explicabo et quod necessitatibus similique quis dolor eum. Numquam eaque praesentium rem et qui nesciunt.
                </p>
  
              </div>
            </div>
  
            <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="portfolio-info">
                  <h3>Profil Osis</h3>
                  <ul>
                    <li>
                      <i class="bi bi-person-badge"></i> <strong>Pembina:</strong> Sara Wilson
                    </li>
                    <li>
                      <i class="bi bi-calendar-check"></i> <strong>Tahun Berdiri:</strong> 2015
                    </li>
                    <li>
                      <i class="bi bi-people-fill"></i> <strong>Jumlah Anggota:</strong> 45 siswa
                    </li>
                    <li>
                      <i class="bi bi-instagram"></i> <strong>Instagram:</strong> 
                      <a href="https://instagram.com/eskul_paskibra" target="_blank">@eskul_paskibra</a>
                    </li>
                    <li>
                      <i class="bi bi-link-45deg"></i> <strong>Form Pendaftaran:</strong> 
                      <a href="https://bit.ly/daftar-pramuka" target="_blank">Klik di sini</a>
                    </li>
                    <li><a href="/struktur" class="btn-visit align-self-start">Struktur Organisasi</a></li>
                  </ul>
                </div>
              </div>
              
  
          </div>
  
        </div>
  
    </section>
    <!-- /Osis -->

  </main>
@endsection