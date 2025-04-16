@extends('users.layouts.app')
@section('content')
    <div class="page-title dark-background">
        <div class="section-title" data-aos="fade-up">
            <h2>Profil Sekolah</h2>
            <p>Sejarah SMA Daan Mogot Kota Tangerang</p>
        </div>
    </div>
    <!-- Sambutan Kepala Sekolah -->
    <section id="vision" class="vison section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Sambutan Kepala Sekola SMA DAAN MOGOT</h2>
            <p> Ahmad Fauzi, S.Pd</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                    <p class="text-muted">Selamat Datang di SMA Daan Mogot Lorem ipsum dolor sit amet consectetur
                        adipisicing
                        elit. Labore corporis odio ipsum aut alias minus, nostrum optio perferendis doloremque explicabo
                        esse accusamus fugiat ducimus possimus ea autem fuga ipsam recusandae. Ut sapiente debitis iure.
                        Laboriosam vel aliquam explicabo quos culpa! </p>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('/selecao/assets/img/masonry-portfolio/masonry-portfolio-1.jpg') }}"
                        alt="Kepala Sekolah" class="img-fluid rounded shadow mb-3">
                </div>

            </div>

        </div>

    </section>
    <!-- /Sambutan Kepala Sekolah -->
    <section id="blog-details" class="blog-details section" style="background-color #fdf7e3;">
        <div class="content">
            <blockquote class="border-left: 5px solid #ffc451; background: #fdf7e3; padding: 20px 25px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-radius: 10px; font-style: italic;">
                <p style="margin: 0; color: #222" >
                    Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut.
                    Aut eos aliquam doloribus minus autem quos.
                </p>
            </blockquote>
        </div>
    </section>
    

    <!-- Sejarah -->
    <section id="mission" class="about section">

        <div class="container">
            <div class="row gy-4">

                <!-- Gambar di sebelah kiri -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('/selecao/assets/img/masonry-portfolio/masonry-portfolio-5.jpg') }}"
                        alt="Misi Sekolah" class="img-fluid rounded shadow mb-3">
                </div>

                <!-- Teks di sebelah kanan -->
                <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">

                    <!-- Section Title di dalam kolom teks -->
                    <div class="section-title">
                        <h2>Sejarah</h2>
                        <p>SMA DAAN MOGOT Kota Tangerang</p>
                    </div>

                    <!-- Isi Misi -->
                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat cupiditate
                        voluptas dolorem vel veritatis reprehenderit illo magni tempore blanditiis architecto tenetur odio
                        nostrum quia similique porro, quas dicta. Distinctio adipisci temporibus possimus rem sapiente
                        similique odio quidem facere quod aliquid repellendus est mollitia soluta facilis, rerum modi.
                        Sequi, aut repellat repellendus magnam nisi cum saepe possimus exercitationem incidunt impedit
                        provident delectus accusantium voluptas. Impedit maiores repellendus saepe, similique magni suscipit
                        omnis consequuntur architecto minus velit unde quisquam dolore illum quas aperiam aliquid totam nam
                        dolorem. Corrupti natus cum eaque consectetur ut nihil eveniet reprehenderit officia, libero enim
                        consequuntur nesciunt at.</p>
                </div>

            </div>
        </div>


    </section>
    <!-- /Sejarah -->
@endsection
