@extends('users.layouts.app')

@section('content')
    @php
        use Illuminate\Support\Str;
        $icons = [
            'pengumuman' => 'bi bi-binoculars',
            'kegiatan' => 'bi bi-box-seam',
            'prestasi' => 'bi bi-brightness-high',
        ];
    @endphp

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
                            <li class="nav-item col-3 p-2">
                                <a class="nav-link active show text-center" data-bs-toggle="tab" data-bs-target="#all">
                                    <i class="bi bi-grid fs-2"></i>
                                    <h4 class="d-none d-lg-block mt-2">All</h4>
                                </a>
                            </li>
                            @foreach ($kategori_list as $kategori)
                            <li class="nav-item col-3 p-2">
                                <a class="nav-link {{ isset($kategoriAktif) && Str::slug($kategoriAktif) === Str::slug($kategori) ? 'active show' : '' }} text-center"
                                    data-bs-toggle="tab" data-bs-target="#{{ Str::slug($kategori) }}">
                                    <i class="{{ $icons[strtolower($kategori)] ?? 'bi bi-folder' }} fs-2"></i>
                                    <h4 class="d-none d-lg-block mt-2">{{ $kategori }}</h4>
                                </a>
                            </li>
                        @endforeach
                        </ul>
                    </div>

                    <!-- Konten Tab Kategori -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="all">
                            <div class="row gy-4">
                                @foreach ($berita as $b)
                                    @include('users.berita.components.card_berita', ['berita' => $b])
                                @endforeach
                            </div>
                        </div>
                        @foreach ($kategori_list as $index => $kategori)
                            @php $slug = Str::slug($kategori); @endphp
                            @if (isset($kategoriAktif))
                            <div class="tab-pane fade {{ Str::slug($kategori) === Str::slug($kategoriAktif) ? 'show active' : '' }}"
                                id="{{ $slug }}">
                            @else
                                <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}" id="{{ $slug }}">
                            @endif

                                <div class="row gy-4">
                                    @foreach ($berita->where('kategori', $kategori) as $b)
                                        @include('users.berita.components.card_berita', ['berita' => $b])
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
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
                        </div>

                        <!-- Recent Posts Widget -->
                        <div class="recent-posts-widget widget-item">
                            <h3 class="widget-title">Recent Posts</h3>
                        
                            @foreach($berita->sortByDesc('created_at')->take(5) as $item)
                                <div class="post-item">
                                    <h4><a href="{{ route('detail.berita', $item->id) }}">{{ $item->judul }}</a></h4>
                                    <time>{{ \Carbon\Carbon::parse($item->created_at)->format('M d, Y') }}</time>
                                </div>
                            @endforeach
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
    </section>
@endsection
