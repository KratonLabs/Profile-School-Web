@extends('users.layouts.app')
@section('content')
    <main class="main">
        <!-- Page Title -->
        <div class="page-title dark-background">
            <div class="section-title" data-aos="fade-up">
                <h2>SMA Daan Mogot</h2>
                <p>Jurusan Studi</p>
            </div>
        </div>
        <!-- End Page Title -->
        <section id="portfolio-details" class="portfolio-details section">
            @foreach ($jurusan as $items)
                <div class="container" data-aos="fade-up">

                    <div class="portfolio-images d-flex justify-content-center flex-wrap gap-4" style="padding: 20px 0;">
                        <img src="{{ asset('img/jurusan/' . $items->gambar) }}" alt="App 1"
                            class="img-fluid shadow rounded" style="width: 1500px; height: 600px;">

                    </div>

                    <div class="row justify-content-between gy-4 mt-4">

                        <div class="col-lg-8" data-aos="fade-up">
                            <div class="portfolio-description">
                                <h2>{{ $items->nama }}</h2>
                                <p>
                                    {{ $items->deskripsi }}
                                </p>
                                <p>
                                    Amet consequatur qui dolore veniam voluptatem voluptatem sit. Non aspernatur atque natus
                                    ut cum nam et. Praesentium error dolores rerum minus sequi quia veritatis eum. Eos et
                                    doloribus doloremque nesciunt molestiae laboriosam.
                                </p>

                                <div class="testimonial-item">
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum
                                            quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat
                                            irure amet legam anim culpa.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                    <div>
                                        <img src="/selecao/assets/img/testimonials/testimonials-2.jpg"
                                            class="testimonial-img" alt="">
                                        <h3>Sara Wilsson</h3>
                                        <h4>Pembina Paskibra</h4>
                                    </div>
                                </div>

                                <p>
                                    Impedit ipsum quae et aliquid doloribus et voluptatem quasi. Perspiciatis occaecati
                                    earum et magnam animi. Quibusdam non qui ea vitae suscipit vitae sunt. Repudiandae
                                    incidunt cumque minus deserunt assumenda tempore. Delectus voluptas necessitatibus est.
                                </p>

                                <p>
                                    Sunt voluptatum sapiente facilis quo odio aut ipsum repellat debitis. Molestiae et autem
                                    libero. Explicabo et quod necessitatibus similique quis dolor eum. Numquam eaque
                                    praesentium rem et qui nesciunt.
                                </p>

                            </div>
                        </div>

                        <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="portfolio-info">
                                <h3>Profil Eskul</h3>
                                <ul>
                                    <li>
                                        <i class="bi bi-person-badge"></i> <strong>Kepala Sekolah:</strong> Sara Wilson
                                    </li>
                                    <li>
                                        <i class="bi bi-people-fill"></i> <strong>Jumlah Guru:</strong> 45 Guru
                                    </li>
                                    <li>
                                        <i class="bi bi-instagram"></i> <strong>Instagram:</strong>
                                        <a href="https://instagram.com/eskul_paskibra" target="_blank">@eskul_paskibra</a>
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
            @endforeach

        </section>
    </main>
@endsection
