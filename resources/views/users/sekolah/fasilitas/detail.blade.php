@extends('users.layouts.app')
@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background">
            <div class="container position-relative">
                <h1>Sarana Prasarana</h1>
                <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam
                    molestias.</p>
            </div>
        </div><!-- End Page Title -->

        <!-- Portfolio Details Section -->
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
                            <h2>Nama Fasilitas</h2>
                            <p>
                                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore
                                quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim.
                                Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi
                                nulla at esse enim cum deserunt eius.
                            </p>
                            <p>
                                Amet consequatur qui dolore veniam voluptatem voluptatem sit. Non aspernatur atque natus ut
                                cum nam et. Praesentium error dolores rerum minus sequi quia veritatis eum. Eos et doloribus
                                doloremque nesciunt molestiae laboriosam.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <!-- /Portfolio Details Section -->

    </main>
@endsection
