@extends('users.layouts.app')
@section('content')
    <div class="page-title dark-background" style="background: url('/gp/assets/img/hero-bg.jpg') center center/cover no-repeat; z-index: 1;">   
        <div class="section-title" data-aos="fade-up">
            <h2>Profil Sekolah</h2>
            <p>Visi, Misi , Tujuan, dan Makna Logo</p>
        </div>
    </div>
    <section id="about" class="about section">

        <div class="container">
            <div class="row gy-4">
                <!-- Kolom Visi -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="section-title text-start">
                        <h2>SMA Daan Mogot Kota Tangerang</h2>
                        <p>Visi</p>
                    </div>
                    <div class="content">
                        <p>
                            “Menjadikan siswa-siswi yang cerdas, kreatif dan bertaqkwa kepada Tuhan Yang Maha Esa”
                        </p>

                    </div>
                </div>

                <!-- Kolom Misi -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="section-title text-end">
                        <h2>SMA Daan Mogot Kota Tangerang</h2>
                        <p>Misi</p>
                    </div>
                    <ul>
                        <li><i class="bi bi-check2-circle"></i> <span>Mampu  menunjang kesetaraan akademik, baik dalam ilmu pengetahuan alam maupun sosial.
                            </span>
                        </li>
                        <li><i class="bi bi-check2-circle"></i> <span>Mencapai mutu pendidikan siswa-siswi sesuai perangkat kurikulum 2013.
                            </span>
                        </li>
                        <li><i class="bi bi-check2-circle"></i> <span>Mengikutsertakan guru-guru dalam penataran-penataran sesuai dengan bidang studi yang mereka ajarkan.
                            </span>
                        </li>
                        <li><i class="bi bi-check2-circle"></i> <span>Mengikutsertakan siswa-siswi dalam lomba-lomba IPTEK.
                            </span>
                        </li>
                        <li><i class="bi bi-check2-circle"></i> <span>Melaksanakan kegiatan rutin keagamaan.
                            </span>
                        </li>
                        <li><i class="bi bi-check2-circle"></i> <span>Menciptakan lingkungan sekolah yang bersih dan nyaman.
                            </span>
                        </li>
                        <li><i class="bi bi-check2-circle"></i> <span>Menciptakan lingkungan sekolah yang harmonis.
                            </span>
                        </li>
                    </ul>
                    {{-- <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a> --}}
                </div>

            </div>
        </div>

    </section>
    <section id="vision" class="about section">
        <div class="container">
            @include('users.sekolah.profile-sekolah.logo')
        </div>
    </section>
@endsection
