@extends('users.layouts.app')
@section('content')
    <main class="main">
        <!-- Page Title -->
        <div class="page-title dark-background"
            style="background: url('/gp/assets/img/hero-bg.jpg') center center/cover no-repeat; z-index: 1;">
            <div class="section-title" data-aos="fade-up">
                <h2>Berita</h2>
                <p>{{ $data->kategori }}</p>
            </div>
        </div>
        <!-- End Page Title -->

        <div class="container">
            <div class="row">

                <div class="col-lg-8">

                    <!-- Blog Details Section -->
                    <section id="blog-details" class="blog-details section">
                        <div class="container">

                            <article class="article">

                                <div class="post-img">
                                    <img src="{{ asset('img/berita/' . $data->gambar) }}" alt="" class="img-fluid">
                                </div>

                                <h3 class="title">{{ $data->judul }}</h3>

                                <div class="meta-top">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                href="blog-details.html">By: {{ $data->penulis ?? 'Admin' }}</a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                href="blog-details.html"><time
                                                    datetime="{{ $data->created_at }}">{{ $data->created_at->format('M d, Y') }}</time></a>
                                        </li>
                                        <li class="d-flex align-items-center"><i class="bi bi-eye"></i> <a
                                                href="blog-details.html">{{ $data->dilihat }} views</a>
                                        </li>
                                        @if ($komentar->isEmpty())
                                            <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                                    href="blog-details.html">0 Komentar</a></li>
                                        @else
                                            <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                                    href="blog-details.html">{{ $komentar->count() }} Komentar</a></li>
                                        @endif
                                    </ul>
                                </div><!-- End meta top -->

                                <div class="content">
                                    @php
                                        $words = explode(' ', strip_tags($data->deskripsi)); // pisahkan kata & hilangkan tag HTML
                                        $chunks = array_chunk($words, 40); // bagi tiap 150 kata
                                    @endphp

                                    @foreach ($chunks as $chunk)
                                        <p style="text-align:justify;">{!! implode(' ', $chunk) !!}</p>
                                    @endforeach
                                </div>

                                <!-- End post content -->
                            </article>

                        </div>
                    </section><!-- /Blog Details Section -->

                    <!-- Blog Comments Section -->
                    <section id="blog-comments" class="blog-comments section">

                        <div class="container">

                            @if ($komentar->isEmpty())
                                <h4 class="comments-count">Belum ada komentar</h4>
                            @else
                                <h4 class="comments-count">{{ $komentar->count() }} Komentar</h4>

                                <div class="comments-list">

                                    @foreach ($komentar as $item)
                                        <div id="comment-1" class="comment">
                                            <div class="d-flex">
                                                <div class="comment-img"><img
                                                        src="{{ asset('img/komentator/' . $item->photo) }}" alt="">
                                                </div>
                                                <div>
                                                    <h5><a href="">{{ $item->name }}</a></h5>
                                                    <time
                                                        datetime="2020-01-01">{{ $item->created_at->format('M d, Y') }}</time>
                                                    <p>
                                                        {{ $item->comment }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div><!-- End comment #1 -->
                                    @endforeach
                                </div>
                            @endif

                    </section>
                    <!-- /Blog Comments Section -->

                    <!-- Comment Form Section -->
                    <section id="comment-form" class="comment-form section">
                        <div class="container">

                            <form method="POST" action="{{ route('komentar.store') }}" enctype="multipart/form-data">
                                @csrf
                                <h4>Silakan Beri Komentar</h4>
                                <p>Email anda tidak akan di publish. Input yang tidak boleh kosong bertanda * </p>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input name="berita_id" type="hidden" value="{{ $data->id }}">
                                        <input name="name" type="text" class="form-control" placeholder="Nama Anda*">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input name="email" type="text" class="form-control" placeholder="Email Anda*">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <input type="file" name="photo" class="form-control"
                                            placeholder="Upload Foto Anda">
                                        <small class="text-muted">*Optional</small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <textarea name="comment" class="form-control" placeholder="Komentar Anda*"></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Post Comment</button>
                                </div>

                            </form>

                        </div>
                    </section>
                    <!-- /Comment Form Section -->

                </div>

                <div class="col-lg-4 sidebar">

                    <div class="widgets-container">

                        <!-- Blog Author Widget -->
                        <div class="blog-author-widget widget-item">

                            <div class="d-flex flex-column align-items-center">
                                <img src="/img/logo_sma_dm[1].png" class="rounded-circle flex-shrink-0" alt="">
                                <h4>SMA Daan Mogot</h4>
                                <div class="social-links">
                                    <a href="https://x.com/#"><i class="bi bi-twitter-x"></i></a>
                                    <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                                    <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                                    <a href="https://instagram.com/#"><i class="biu bi-linkedin"></i></a>
                                </div>

                                <p>
                                    Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium.
                                    Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium
                                    ut unde voluptas.
                                </p>

                            </div>
                        </div><!--/Blog Author Widget -->

                        <!-- Search Widget -->
                        <div class="search-widget widget-item">

                            <h3 class="widget-title">Search</h3>
                            <form action="">
                                <input type="text">
                                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                            </form>

                        </div><!--/Search Widget -->

                        <!-- Categories Widget -->
                        <div class="categories-widget widget-item">

                            <h3 class="widget-title">Kategori Berita</h3>
                            <ul class="mt-3">
                                @foreach ($kategoriCounts as $item)
                                    <li>
                                        <a
                                            href="{{ route('beritas.kategori', ['kategori' => Str::slug($item->kategori)]) }}">
                                            {{ ucfirst($item->kategori) }} <span>({{ $item->total }})</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>

                        </div><!--/Categories Widget -->

                        <!-- Recent Posts Widget -->
                        <div class="recent-posts-widget widget-item">

                            <h3 class="widget-title">Recent Posts</h3>

                            @foreach ($berita->sortByDesc('created_at')->take(5) as $item)
                                <div class="post-item">
                                    <h4><a href="{{ route('detail.berita', $item->id) }}">{{ $item->judul }}</a></h4>
                                    <time>{{ \Carbon\Carbon::parse($item->created_at)->format('M d, Y') }}</time>
                                </div>
                            @endforeach

                        </div><!--/Recent Posts Widget -->

                        <!-- Tags Widget -->
                        <div class="tags-widget widget-item">

                            <h3 class="widget-title">Tags</h3>
                            <ul>
                                <li><a href="#">App</a></li>
                                <li><a href="#">IT</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Mac</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Studio</a></li>
                                <li><a href="#">Smart</a></li>
                                <li><a href="#">Tips</a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>

                        </div><!--/Tags Widget -->

                    </div>

                </div>

            </div>
        </div>

    </main>
@endsection
