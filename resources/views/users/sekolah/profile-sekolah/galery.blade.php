@extends('users.layouts.app')
@section('content')
<div class="page-title dark-background" style="background: url('/gp/assets/img/hero-bg.jpg') center center/cover no-repeat; z-index: 1;">
    <div class="section-title" data-aos="fade-up">
        <h2>Profil Sekolah</h2>
        <p>Galery Kegiatan dan Acara</p>
    </div>
</div>

{{-- --}}

<section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Highlight News</h2>
        <p>Berita Terbaru</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-event">Event</li>
                <li data-filter=".filter-kegiatan">Kegiatan</li>
                <li data-filter=".filter-lingkungan">Lingkungan Sekolah</li>
            </ul><!-- End Portfolio Filters -->

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-event">
                    <img src="/selecao/assets/img/masonry-portfolio/masonry-portfolio-1.jpg" class="img-fluid"
                        alt="">
                    <div class="portfolio-info">
                        <h4>App 1</h4>
                        <a href="/selecao/assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="App 1"
                            data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                class="bi bi-zoom-in"></i></a>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-kegiatan">
                    <img src="/selecao/assets/img/masonry-portfolio/masonry-portfolio-2.jpg" class="img-fluid"
                        alt="">
                    <div class="portfolio-info">
                        <h4>Berita Satu</h4>
                        <a href="/selecao/assets/img/masonry-portfolio/masonry-portfolio-2.jpg" title="Product 1"
                            data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                class="bi bi-zoom-in"></i></a>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-lingkungan">
                    <img src="/selecao/assets/img/masonry-portfolio/masonry-portfolio-3.jpg" class="img-fluid"
                        alt="">
                    <div class="portfolio-info">
                        <h4>Berita 2</h4>
                        <a href="/selecao/assets/img/masonry-portfolio/masonry-portfolio-3.jpg" title="Branding 1"
                            data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                class="bi bi-zoom-in"></i></a>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-event">
                    <img src="/selecao/assets/img/masonry-portfolio/masonry-portfolio-4.jpg" class="img-fluid"
                        alt="">
                    <div class="portfolio-info">
                        <h4>App 2</h4>
                        <a href="/selecao/assets/img/masonry-portfolio/masonry-portfolio-4.jpg" title="App 2"
                            data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                class="bi bi-zoom-in"></i></a>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-kegiatan">
                    <img src="/selecao/assets/img/masonry-portfolio/masonry-portfolio-5.jpg" class="img-fluid"
                        alt="">
                    <div class="portfolio-info">
                        <h4>Berita 3</h4>
                        <a href="/selecao/assets/img/masonry-portfolio/masonry-portfolio-5.jpg" title="Product 2"
                            data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                class="bi bi-zoom-in"></i></a>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-lingkungan">
                    <img src="/selecao/assets/img/masonry-portfolio/masonry-portfolio-6.jpg" class="img-fluid"
                        alt="">
                    <div class="portfolio-info">
                        <h4>Berita 4</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse quis incidunt ipsam nobis
                            molestiae autem error, similique earum neque omnis!</p>
                        <a href="/selecao/assets/img/masonry-portfolio/masonry-portfolio-6.jpg" title="Branding 2"
                            data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                class="bi bi-link-45deg"></i></a>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-event">
                    <img src="/selecao/assets/img/masonry-portfolio/masonry-portfolio-7.jpg" class="img-fluid"
                        alt="">
                    <div class="portfolio-info">
                        <h4>Berita 5</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse quis incidunt ipsam nobis
                            molestiae autem error, similique earum neque omnis!</p>
                        <a href="/selecao/assets/img/masonry-portfolio/masonry-portfolio-7.jpg" title="App 3"
                            data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                class="bi bi-link-45deg"></i></a>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-kegiatan">
                    <img src="/selecao/assets/img/masonry-portfolio/masonry-portfolio-8.jpg" class="img-fluid"
                        alt="">
                    <div class="portfolio-info">
                        <h4>Berita 6</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse quis incidunt ipsam nobis
                            molestiae autem error, similique earum neque omnis!</p>
                        <a href="/selecao/assets/img/masonry-portfolio/masonry-portfolio-8.jpg" title="Product 3"
                            data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                class="bi bi-link-45deg"></i></a>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-lingkungan">
                    <img src="/selecao/assets/img/masonry-portfolio/masonry-portfolio-9.jpg" class="img-fluid"
                        alt="">
                    <div class="portfolio-info">
                        <h4>Branding 3</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse quis incidunt ipsam nobis
                            molestiae autem error, similique earum neque omnis!</p>
                        <a href="/selecao/assets/img/masonry-portfolio/masonry-portfolio-9.jpg" title="Branding 2"
                            data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                class="bi bi-link-45deg"></i></a>
                    </div>
                </div><!-- End Portfolio Item -->

            </div><!-- End Portfolio Container -->

        </div>

    </div>

</section>


@endsection