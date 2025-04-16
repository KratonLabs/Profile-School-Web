@extends('users.layouts.app')
@section('content')
    <!-- Carousel Gambar -->
    @include('users.home.carousel')
    <!-- /Carousel Gambar -->

    <!-- Highlight News -->
    @include('users.home.highlight')
    <!-- /Highlight News -->

    <!-- Visi dan Misi -->
    @include('users.home.about')
    <!-- /Visi dan Misi -->

    <!-- Statistic -->
    @include('users.home.statistic')
    <!-- /Statistic -->

    <!-- Services Section -->
    {{-- <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p>What we do offer</p>
        </div>
        <!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item  position-relative">
                        <div class="icon">
                            <i class="bi bi-cash-stack" style="color: #0dcaf0;"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Nesciunt Mete</h3>
                        </a>
                        <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure
                            perferendis tempore et consequatur.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-calendar4-week" style="color: #fd7e14;"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Eosle Commodi</h3>
                        </a>
                        <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non
                            ut nesciunt dolorem.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-chat-text" style="color: #20c997;"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Ledo Markt</h3>
                        </a>
                        <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas
                            adipisci eos earum corrupti.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-credit-card-2-front" style="color: #df1529;"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Asperiores Commodit</h3>
                        </a>
                        <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit
                            provident adipisci neque.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-globe" style="color: #6610f2;"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Velit Doloremque</h3>
                        </a>
                        <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at
                            autem alias eius labore.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-clock" style="color: #f3268c;"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Dolori Architecto</h3>
                        </a>
                        <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti
                            recusandae ducimus enim.</p>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section> --}}
    <!-- /Services Section -->

    <!-- Alumni Section -->
    @include('users.home.alumni')
    <!-- /Alumni Section -->

    <!-- Faq Section -->
    {{-- <section id="faq" class="faq section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Frequently Asked Questions</h2>
            <p>Frequently Asked Questions</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-12">
                    <div class="custom-accordion" id="accordion-faq">
                        <div class="accordion-item">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-faq-1">
                                    How to download and register?
                                </button>
                            </h2>

                            <div id="collapse-faq-1" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion-faq">
                                <div class="accordion-body">
                                    Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts. Separated
                                    they live in Bookmarksgrove right at the coast of the Semantics,
                                    a large language ocean.
                                </div>
                            </div>
                        </div>
                        <!-- .accordion-item -->

                        <div class="accordion-item">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-faq-2">
                                    How to create your paypal account?
                                </button>
                            </h2>
                            <div id=" collapse-faq-2" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordion-faq">
                                <div class="accordion-body">
                                    A small river named Duden flows by their place and supplies it
                                    with the necessary regelialia. It is a paradisematic country, in
                                    which roasted parts of sentences fly into your mouth.
                                </div>
                            </div>
                        </div>
                        <!-- .accordion-item -->

                        <div class="accordion-item">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-faq-3">
                                    How to link your paypal and bank account?
                                </button>
                            </h2>

                            <div id="collapse-faq-3" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion-faq">
                                <div class="accordion-body">
                                    When she reached the first hills of the Italic Mountains, she
                                    had a last view back on the skyline of her hometown
                                    Bookmarksgrove, the headline of Alphabet Village and the subline
                                    of her own road, the Line Lane. Pityful a rethoric question ran
                                    over her cheek, then she continued her way.
                                </div>
                            </div>
                        </div>
                        <!-- .accordion-item -->

                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- /Faq Section -->

    <!-- Contact Section -->
    @include('users.home.contact')
    <!-- /Contact Section -->
@endsection
