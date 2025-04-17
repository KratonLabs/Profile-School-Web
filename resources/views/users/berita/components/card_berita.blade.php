<div class="col-xl-6 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
    <article>
        <div class="post-img position-relative">
            <img src="{{ asset('img/berita/'.$b->gambar) }}" class="img-fluid" alt="">
            <a href="{{ route('detail.berita', ['id' => $b->id]) }}"
                class="overlay-icon d-flex align-items-center justify-content-center">
                <i class="bi bi-link-45deg"></i>
            </a>
        </div>
        <p class="post-category">{{ ucfirst($b->kategori) }}</p>
        <h2 class="title">
            <a href="{{ route('detail.berita', ['id' => $b->id]) }}">{{ $b->judul }}</a>
        </h2>
        <div class="d-flex align-items-center">
            <img src="/selecao/assets/img/blog/blog-author.jpg"
                class="img-fluid post-author-img flex-shrink-0" alt="">
            <div class="post-meta">
                <p class="post-author">{{ $b->penulis ?? 'Admin' }}</p>
                <p class="post-date"><time datetime="{{ $b->created_at }}">{{ $b->created_at->format('M d, Y') }}</time></p>
            </div>
        </div>
    </article>
</div>
