<div class="col-lg-4">
    <article>
        <div class="post-img position-relative">
            <img src="{{ asset('img/ekstrakulikuler/'.$item->gambar) }}" alt="" class="img-fluid">
            <a href="{{ url('/detail/'.$item->id.'/ekstrakurikuler') }}" class="overlay-icon d-flex align-items-center justify-content-center">
                <i class="bi bi-link-45deg"></i>
            </a>
        </div>
        <p class="post-category">{{ $item->kategori }}</p>
        <h2 class="title">
            <a href="{{ url('/detail/'.$item->id.'/ekstrakurikuler') }}">{{ $item->nama }}</a>
        </h2>
        <p class="mb-2" style="text-align:justify;">{!! $item->deskripsi !!}</p>
        <div class="d-flex align-items-center">
            <img src="/img/logo_sma_dm[1].png" alt="" class="img-fluid post-author-img flex-shrink-0">
            <div class="post-meta">
                @if ($item->pegawai_id)
                <p class="post-author">Pembina: {{$item->pegawai->nama}}</p>
                @endif
                <p class="post-date">
                    <time datetime="2022-01-01">Setiap Sabtu</time>
                </p>
            </div>
        </div>
    </article>
</div>
