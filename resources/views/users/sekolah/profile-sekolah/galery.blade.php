@extends('users.layouts.app')
@section('content')
    <div class="page-title dark-background"
        style="background: url('/gp/assets/img/hero-bg.jpg') center center/cover no-repeat; z-index: 1;">
        <div class="section-title" data-aos="fade-up">
            <h2>Profil Sekolah</h2>
            <p>Galery Kegiatan dan Acara</p>
        </div>
    </div>

    {{-- --}}

    <section id="portfolio" class="portfolio section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>SMA DAAN MOGOT</h2>
            <p>Gallery</p>
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
                        <img src="/img/berita/Hari Pendidikan Nasional.jpg" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Hari Pendidikan Nasional</h4>
                            <a href="/img/berita/Hari Pendidikan Nasional.jpg" title="Hari Pendidikan Nasional"
                                data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-kegiatan">
                        <img src="/img/galery/solo-tari-traditional.jpg" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Solo Traditional</h4>
                            <a href="/img/galery/solo-tari-traditional.jpg" title="Solo Traditional"
                                data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-lingkungan">
                        <img src="/img/berita/Pelantikan Osis 2024.jpg" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Pelantikan Kepengurusan OSIS</h4>
                            <a href="/img/berita/Pelantikan Osis 2024.jpg" title="Pelantikan Kepengurusan OSIS"
                                data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-event">
                        <img src="/img/berita/hari-guru-nasional.jpg" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Hari Guru Nasional</h4>
                            <a href="/img/berita/hari-guru-nasional.jpg" title="Hari Guru Nasional"
                                data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-kegiatan">
                        <img src="/img/berita/Bazar dan Fashion Show.jpg" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Bazar dan Fashion Show</h4>
                            <a href="/img/berita/Bazar dan Fashion Show.jpg" title="Bazar dan Fashion Show"
                                data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-lingkungan">
                        <img src="/img/berita/2025.jpg" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Pemilihan Ketua OSIS</h4>
                            <a href="/img/berita/2025.jpg" title="Branding 2"
                                data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="Pemilihan Ketua OSIS" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-event">
                        <img src="/img/berita/Pertandingan Volley 2024.jpg" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Pertandingan Volley Ball</h4>
                            <a href="/img/berita/Pertandingan Volley 2024.jpg" title="App 3"
                                data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="Pertandingan Volley Ball" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-kegiatan">
                        <img src="/img/galery/paskibra.jpg" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Paskibra</h4>
                            <a href="/img/galery/paskibra.jpg" title="Product 3"
                                data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="Paskibra" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-lingkungan">
                        <img src="/img/galery/guru.jpg" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Upacara Hari Guru</h4>
                            <a href="/img/galery/guru.jpg" title="Branding 2"
                                data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="Guru" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                </div><!-- End Portfolio Container -->
            </div>
        </div>
    </section>
@endsection
