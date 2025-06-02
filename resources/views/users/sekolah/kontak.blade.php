@extends('users.layouts.app')
@section('content')


<!-- Section Title -->
<div class="page-title dark-background" style="background: url('/gp/assets/img/hero-bg.jpg') center center/cover no-repeat; z-index: 1;">
    <div class="section-title" data-aos="fade-up">
        <h2>Contact Us</h2>
        <p>Kontak Kami</p>
    </div>
</div>
<!-- End Section Title -->

<section id="services" class="services section">
    <div class="container">

        <div class="row gy-4">
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item  position-relative">
                    <div class="icon">
                        <i class="bi bi-geo-alt-fill" style="color: #df1529;"></i>
                    </div>
                    <a href="service-details.html" class="stretched-link">
                        <h3>Lokasi</h3>
                    </a>
                    <h5>Jl. Gatot Subroto Km.5 Jatiuwung
                        Kec.Cibodas Kota Tangerang 
                    </h5>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-envelope-at-fill" style="color: #df1529;"></i>
                    </div>
                    <a href="service-details.html" class="stretched-link">
                        <h3>Email</h3>
                    </a>
                    <h5>sma.daanmogot@gmail.com</h5>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-telephone" style="color: #df1529;"></i>
                    </div>
                    <a href="service-details.html" class="stretched-link">
                        <h3>Telepon</h3>
                    </a>
                    <ul>
                        <li><h5>Mela Nurhikayah : 08561052793</h5></li>
                        <li><h5>Ismail qurba : 081280698269</h5></li>
                    </ul>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-instagram" style="color: #df1529;"></i>
                    </div>
                    <a href="service-details.html" class="stretched-link">
                        <h3>Instagram</h3>
                    </a>
                    <h5>@smadaanmogot</h5>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-youtube" style="color:#df1529;"></i>
                    </div>
                    <a href="service-details.html" class="stretched-link">
                        <h3>Youtube</h3>
                    </a>
                    <h5>smadaanmogot</h5>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-clock" style="color: #df1529;"></i>
                    </div>
                    <a href="service-details.html" class="stretched-link">
                        <h3>Jam Operasional</h3>
                    </a>
                    <h5>07.00-16.00 WIB</h5>
                </div>
            </div><!-- End Service Item -->

        </div>

    </div>

</section> 

@endsection