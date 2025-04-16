@extends('users.layouts.app')
@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background">
          <div class="section-title" data-aos="fade-up">
              <h2>Kesiswaan</h2>
              <p>Ekstrakulikuler</p>
          </div>
      </div>
        <!-- End Page Title -->

        <!-- Kategori Icon Ekstrakurikuler -->
        <section id="features" class="features">
            <div class="container">
                <ul class="nav nav-tabs row d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <li class="nav-item col-4 col-md-2">
                        <a class="nav-link active show text-center" data-bs-toggle="tab" data-bs-target="#all">
                            <i class="bi bi-grid-fill fs-2"></i>
                            <h4 class="d-none d-lg-block mt-2">All</h4>
                        </a>
                    </li>
                    <li class="nav-item col-4 col-md-2">
                        <a class="nav-link text-center" data-bs-toggle="tab" data-bs-target="#kenegaraan">
                            <i class="bi bi-flag fs-2"></i>
                            <h4 class="d-none d-lg-block mt-2">Kenegaraan</h4>
                        </a>
                    </li>
                    <li class="nav-item col-4 col-md-2">
                        <a class="nav-link text-center" data-bs-toggle="tab" data-bs-target="#keagamaan">
                            <i class="bi bi-book fs-2"></i>
                            <h4 class="d-none d-lg-block mt-2">Keagamaan</h4>
                        </a>
                    </li>
                    <li class="nav-item col-4 col-md-2">
                        <a class="nav-link text-center" data-bs-toggle="tab" data-bs-target="#seni">
                            <i class="bi bi-brush fs-2"></i>
                            <h4 class="d-none d-lg-block mt-2">Seni</h4>
                        </a>
                    </li>
                    <li class="nav-item col-4 col-md-2">
                        <a class="nav-link text-center" data-bs-toggle="tab" data-bs-target="#olahraga">
                            <i class="bi bi-dribbble fs-2"></i>
                            <h4 class="d-none d-lg-block mt-2">Olahraga</h4>
                        </a>
                    </li>
                    <li class="nav-item col-4 col-md-2">
                        <a class="nav-link text-center" data-bs-toggle="tab" data-bs-target="#sains">
                            <i class="bi bi-lightbulb fs-2"></i>
                            <h4 class="d-none d-lg-block mt-2">Sains & Teknologi</h4>
                        </a>
                    </li>
                </ul>
            </div>
        </section><!-- End Kategori Icon -->

        <!-- Blog Posts Section (Ekstrakurikuler Cards) -->
        <section id="blog-posts" class="blog-posts section">
            <div class="container">
                <div class="row gy-4">

                    <!-- Ulangi struktur card ini sesuai jumlah ekskul -->
                    <div class="col-lg-4">
                        <article>
                          <div class="post-img position-relative">
                            <img src="/selecao/assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                            <a href="/ekskul-detail" class="overlay-icon d-flex align-items-center justify-content-center">
                              <i class="bi bi-link-45deg"></i>
                            </a>
                          </div>
                                                                    
                            <p class="post-category">Kenegaraan</p>
                            <h2 class="title">
                                <a href="/ekskul-detail">Pramuka: Latihan Kepemimpinan & Mandiri</a>
                            </h2>
                            <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, eum.</p>
                            <div class="d-flex align-items-center">
                                <img src="/img/logo_sma_dm[1].png" alt=""
                                    class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                    <p class="post-author">Pembina: Kak Rina</p>
                                    <p class="post-date">
                                        <time datetime="2022-01-01">Setiap Sabtu</time>
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4">
                        <article>
                          <div class="post-img position-relative">
                            <img src="/selecao/assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                            <a href="/ekskul-detail" class="overlay-icon d-flex align-items-center justify-content-center">
                              <i class="bi bi-link-45deg"></i>
                            </a>
                          </div>
                                                 
                            <p class="post-category">Keagamaan</p>
                            <h2 class="title">
                                <a href="/ekskul-detail">Rohis</a>
                            </h2>
                            <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, eum.</p>
                            <div class="d-flex align-items-center">
                                <img src="/img/logo_sma_dm[1].png" alt=""
                                    class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                    <p class="post-author">Pembina: Kak Rina</p>
                                    <p class="post-date">
                                        <time datetime="2022-01-01">Setiap Sabtu</time>
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4">
                        <article>
                          <div class="post-img position-relative">
                            <img src="/selecao/assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                            <a href="/ekskul-detail" class="overlay-icon d-flex align-items-center justify-content-center">
                              <i class="bi bi-link-45deg"></i>
                            </a>
                          </div>
                                                 
                            <p class="post-category">Seni</p>
                            <h2 class="title">
                                <a href="/ekskul-detail">Seni Musik</a>
                            </h2>
                            <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, eum.</p>
                            <div class="d-flex align-items-center">
                                <img src="/img/logo_sma_dm[1].png" alt=""
                                    class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                    <p class="post-author">Pembina: Kak Rina</p>
                                    <p class="post-date">
                                        <time datetime="2022-01-01">Setiap Sabtu</time>
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4" id="">
                        <article>
                          <div class="post-img position-relative">
                            <img src="/selecao/assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                            <a href="/ekskul-detail" class="overlay-icon d-flex align-items-center justify-content-center">
                              <i class="bi bi-link-45deg"></i>
                            </a>
                          </div>
                                                 
                            <p class="post-category">Olahraga</p>
                            <h2 class="title">
                                <a href="/ekskul-detail">Volley Ball</a>
                            </h2>
                            <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, eum.</p>
                            <div class="d-flex align-items-center">
                                <img src="/img/logo_sma_dm[1].png" alt=""
                                    class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                    <p class="post-author">Pembina: Kak Rina</p>
                                    <p class="post-date">
                                        <time datetime="2022-01-01">Setiap Sabtu</time>
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4" id="">
                        <article>
                          <div class="post-img position-relative">
                            <img src="/selecao/assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                            <a href="/ekskul-detail" class="overlay-icon d-flex align-items-center justify-content-center">
                              <i class="bi bi-link-45deg"></i>
                            </a>
                          </div>
                                                 
                            <p class="post-category">Sains dan Teknologi</p>
                            <h2 class="title">
                                <a href="/ekskul-detail">Robotic Community</a>
                            </h2>
                            <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, eum.</p>
                            <div class="d-flex align-items-center">
                                <img src="/img/logo_sma_dm[1].png" alt=""
                                    class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                    <p class="post-author">Pembina: Kak Rina</p>
                                    <p class="post-date">
                                        <time datetime="2022-01-01">Setiap Sabtu</time>
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- Tambahkan card lainnya seperti struktur di atas -->

                </div>
            </div>
        </section><!-- /Blog Posts Section -->

        <!-- Blog Pagination Section -->
        <section id="blog-pagination" class="blog-pagination section">
            <div class="container">
                <div class="d-flex justify-content-center">
                    <ul>
                        <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#" class="active">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li>...</li>
                        <li><a href="#">10</a></li>
                        <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </section><!-- /Blog Pagination Section -->

    </main>
@endsection
