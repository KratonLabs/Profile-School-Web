<div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
    <article class="shadow-lg rounded overflow-hidden" style="background-color: #e91d1d;">
        <div class="post-img position-relative overflow-hidden">
            <img src="{{ asset('img/ekstrakulikuler/' . $item->firstCarousel->gambar) }}" alt="{{ $item->nama }}" class="img-fluid"
                style="height: 220px; width: 100%; object-fit: cover;">
            <a href="{{ url('/detail/' . $item->id . '/ekstrakurikuler') }}"
                class="icon-link d-flex align-items-center justify-content-center">
                <i class="bi bi-link-45deg"></i>
            </a>
        </div>

        <div class="member-info p-2" style="border-top: 2px solid #f8e807;">
            <p class="post-category fw-bold text-white mb-1">
                <i class="bi bi-award text-warning"></i> {{ $item->kategori }}
            </p>
            <h2 class="title h5 text-light">
                <a href="{{ url('/detail/' . $item->id . '/ekstrakurikuler') }}"
                    class="text-white text-decoration-none">{{ $item->nama }}</a>
            </h2>
            <div class="post-meta">
                <p class="mb-2 text-black text-justify" style="color:white">
                    {!!  Str::limit($item->deskripsi, 100) !!}
                    <a href="{{ url('/detail/' . $item->id . '/ekstrakurikuler') }}" class="readmore-link fw-semibold text">
                        Baca selengkapnya ...
                    </a>
                </p>
            </div> 
                
            <div class="d-flex align-items-center mt-3">
                <img src="/img/logo_sma_dm[1].png" alt="" class="img-fluid post-author-img flex-shrink-0"
                    style="width: 40px; height: 40px; object-fit: cover;">
                <div class="post-meta ms-2">
                    @if ($item->pegawai_id)
                        <p class="post-author text-white mb-0">Pembina: {{ $item->pegawai->nama }}</p>
                    @endif
                    <p class="post-date text-white mb-0">
                        <time datetime="2022-01-01">Setiap Sabtu</time>
                    </p>
                </div>
            </div>
        </div>
    </article>
</div>
