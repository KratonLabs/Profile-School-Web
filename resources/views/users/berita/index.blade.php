@extends('users.layouts.app')
@section('content')
    <div class="page-title dark-background">
        <div class="section-title" data-aos="fade-up">
            <h2>Berita Terbaru</h2>
            <p>Kategori Berita</p>
        </div>
    </div>

    <section id="recent-posts" class="recent-posts section">
        <div class="container">
            <div class="row">
                <!-- Konten Berita -->
                <div class="col-lg-8">

                    <!-- Tabs Icon Kategori -->
                    <div class="features mb-4">
                        <ul class="nav nav-tabs row d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                            <li class="nav-item col-3">
                                <a class="nav-link active show text-center" data-bs-toggle="tab"
                                    data-bs-target="#kategori-1">
                                    <i class="bi bi-binoculars"></i>
                                    <h4 class="d-none d-lg-block">Berita Acara</h4>
                                </a>
                            </li>
                            <li class="nav-item col-3">
                                <a class="nav-link text-center" data-bs-toggle="tab" data-bs-target="#kategori-2">
                                    <i class="bi bi-box-seam"></i>
                                    <h4 class="d-none d-lg-block">Berita Kegiatan</h4>
                                </a>
                            </li>
                            <li class="nav-item col-3">
                                <a class="nav-link text-center" data-bs-toggle="tab" data-bs-target="#kategori-3">
                                    <i class="bi bi-brightness-high"></i>
                                    <h4 class="d-none d-lg-block">Prestasi</h4>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Konten Tab Kategori -->
                    <div class="tab-content">
                        <!-- Kategori 1 -->
                        <div class="tab-pane fade show active" id="kategori-1">
                            <div class="row gy-4">
                                @for ($i = 1; $i <= 4; $i++)
                                    <div class="col-xl-6 col-md-6" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                                        <article>
                                            <div class="post-img position-relative">
                                                <img src="/selecao/assets/img/blog/blog-{{ $i }}.jpg"
                                                    class="img-fluid" alt="">
                                                <a href="/detail-berita"
                                                    class="overlay-icon d-flex align-items-center justify-content-center">
                                                    <i class="bi bi-link-45deg"></i>
                                                </a>
                                            </div>
                                            <p class="post-category">Kegiatan</p>
                                            <h2 class="title">
                                                <a href="/detail-berita">Judul Berita Kegiatan {{ $i }}</a>
                                            </h2>
                                            <div class="d-flex align-items-center">
                                                <img src="/selecao/assets/img/blog/blog-author.jpg"
                                                    class="img-fluid post-author-img flex-shrink-0" alt="">
                                                <div class="post-meta">
                                                    <p class="post-author">Penulis {{ $i }}</p>
                                                    <p class="post-date"><time datetime="2025-04-15">Apr 15, 2025</time></p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                @endfor
                            </div>
                        </div>

                        <!-- Kategori 2 -->
                        <div class="tab-pane fade" id="kategori-2">
                            <div class="row gy-4">
                                @for ($i = 1; $i <= 3; $i++)
                                    <div class="col-xl-6 col-md-6" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                                        <article>
                                            <div class="post-img">
                                                <img src="/selecao/assets/img/blog/blog-{{ $i }}.jpg"
                                                    class="img-fluid" alt="">
                                            </div>
                                            <p class="post-category">Pengumuman</p>
                                            <h2 class="title">
                                                <a href="#">Judul Pengumuman {{ $i }}</a>
                                            </h2>
                                            <div class="d-flex align-items-center">
                                                <img src="/selecao/assets/img/blog/blog-author-2.jpg"
                                                    class="img-fluid post-author-img flex-shrink-0" alt="">
                                                <div class="post-meta">
                                                    <p class="post-author">Admin {{ $i }}</p>
                                                    <p class="post-date"><time datetime="2025-04-10">Apr 10, 2025</time></p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                @endfor
                            </div>
                        </div>

                        <!-- Kategori 3 -->
                        <div class="tab-pane fade" id="kategori-3">
                            <div class="row gy-4">
                                @for ($i = 1; $i <= 5; $i++)
                                    <div class="col-xl-6 col-md-6" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                                        <article>
                                            <div class="post-img">
                                                <img src="/selecao/assets/img/blog/blog-{{ $i }}.jpg"
                                                    class="img-fluid" alt="">
                                            </div>
                                            <p class="post-category">Lomba</p>
                                            <h2 class="title">
                                                <a href="#">Judul Lomba {{ $i }}</a>
                                            </h2>
                                            <div class="d-flex align-items-center">
                                                <img src="/selecao/assets/img/blog/blog-author-3.jpg"
                                                    class="img-fluid post-author-img flex-shrink-0" alt="">
                                                <div class="post-meta">
                                                    <p class="post-author">Panitia {{ $i }}</p>
                                                    <p class="post-date"><time datetime="2025-04-12">Apr 12, 2025</time></p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="widgets-container">

                        <!-- Blog Author Widget -->
                        <div class="blog-author-widget widget-item text-center">
                            <img src="/img/logo_sma_dm[1].png" class="rounded-circle mb-3" alt="">
                            <h4>SMA Daan Mogot</h4>
                            <div class="social-links mb-2">
                                <a href="#"><i class="bi bi-book"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                            <p>Itaque quidem optio quia voluptatibus dolorem dolor...</p>
                        </div>

                        <!-- Search Widget -->
                        <div class="search-widget widget-item">
                            <h3 class="widget-title">Search</h3>
                            <form>
                                <input type="text">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div>

                        <!-- Categories Widget -->
                        <div class="categories-widget widget-item">
                            <h3 class="widget-title">Categories</h3>
                            <ul class="mt-3">
                                <li><a href="#">Event<span>(25)</span></a></li>
                                <li><a href="#">Activity<span>(12)</span></a></li>
                                <li><a href="#">Achievement<span>(55)</span></a></li>
                            </ul>
                        </div>

                        <!-- Recent Posts Widget -->
                        <div class="recent-posts-widget widget-item">
                            <h3 class="widget-title">Recent Posts</h3>
                            <div class="post-item">
                                <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4><time>Jan 1, 2025</time>
                            </div>
                            <div class="post-item">
                                <h4><a href="#">Quidem autem et impedit</a></h4><time>feb 1, 2025</time>
                            </div>
                            <div class="post-item">
                                <h4><a href="#">Id quia et et ut maxime</a></h4><time>April 13, 2025</time>
                            </div>
                            <div class="post-item">
                                <h4><a href="#">Laborum corporis quo dara net</a></h4><time>Jan 1, 2025</time>
                            </div>
                            <div class="post-item">
                                <h4><a href="#">Et dolores corrupti quae illo</a></h4><time>mei 23, 2025</time>
                            </div>
                        </div>

                        <!-- Tags Widget -->
                        <div class="tags-widget widget-item">
                            <h3 class="widget-title">Tags</h3>
                            <p>Untuk Halaman Blog jika ada</p>
                            <ul>
                                <li><a href="#">App</a></li>
                                <li><a href="#">IT</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Competition</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Studio</a></li>
                                <li><a href="#">Smart</a></li>
                                <li><a href="#">Tips</a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
    </section>
@endsection
