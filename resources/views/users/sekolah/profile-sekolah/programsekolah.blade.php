@extends('users.layouts.app')
@section('content')
 <div class="page-title dark-background" style="background: url('/gp/assets/img/hero-bg.jpg') center center/cover no-repeat; z-index: 1;">
    <div class="section-title" data-aos="fade-up">
        <h2>Profil Sekolah</h2>
        <p>Program dan Sasaran</p>
    </div>
</div>

<section id="about" class="about section">

    <div class="container">
        <div class="row gy-4">
            <!-- Kolom Program -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="section-title text-start">
                    <h2>SMA Daan Mogot Kota Tangerang</h2>
                    <p>Program</p>
                </div>
                <div class="content">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua.
                    </p>
                    <ul>
                        <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</span></li>
                        <li><i class="bi bi-check2-circle"></i> <span>Duis aute irure dolor in reprehenderit in
                                voluptate
                                velit.</span></li>
                        <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea
                                commodo</span></li>
                    </ul>
                </div>
            </div>

            <!-- Kolom Sasaran  -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="section-title text-end">
                    <h2>SMA Daan Mogot Kota Tangerang</h2>
                    <p>Sasaran dan Tujuan</p>
                </div>
                <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <ul>
                    <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>Duis aute irure dolor in reprehenderit in
                            voluptate
                            velit.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea
                            commodo</span></li>
                </ul>
                {{-- <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a> --}}
            </div>

        </div>
    </div>

</section>
@endsection