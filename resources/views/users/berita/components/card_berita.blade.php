<div class="col-xl-6 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
    <article class="shadow-lg rounded overflow-hidden w-100" style="background-color: #e91d1d;">
        <div class="post-img position-relative overflow-hidden">
            <img src="{{ asset('img/berita/'.$b->gambar) }}" class="img-fluid" alt="{{ $b->judul }}" style="height: 220px; width: 100%; object-fit: cover;">
            <a href="{{ route('detail.berita', ['id' => $b->id]) }}" class="icon-link d-flex align-items-center justify-content-center">
                <i class="bi bi-link-45deg"></i>
            </a>
        </div>

        <div class="member-info p-2" style="border-top: 2px solid #f8e807;">
            <p class="post-category fw-bold text-white mb-1">
                <i class="bi bi-newspaper text-warning"></i> {{ ucfirst($b->kategori) }}
                {{-- <i class="{{ $icons[strtolower($kategori)] ?? 'bi bi-folder' }} fs-2"></i>
                {{ ucfirst($b->kategori) }} --}}
            </p>
            <h2 class="title h5 text-white">
                <a href="{{ route('detail.berita', ['id' => $b->id]) }}" class="text-white text-decoration-none">{{ $b->judul }}</a>
            </h2>

            <div class="d-flex align-items-center mt-3">
                <img src="/selecao/assets/img/blog/blog-author.jpg" class="img-fluid post-author-img flex-shrink-0" style="width: 40px; height: 40px; object-fit: cover;" alt="Author">
                <div class="post-meta ms-2">
                    <p class="post-author text-white mb-0">{{ $b->penulis ?? 'Admin' }}</p>
                    <p class="post-date text-white mb-0">
                        <i class="bi bi-calendar-event text-warning me-1"></i>
                        <time datetime="{{ $b->created_at }}">{{ $b->created_at->format('d M Y') }}</time>
                    </p>
                </div>
            </div>
        </div>
    </article>
</div>
