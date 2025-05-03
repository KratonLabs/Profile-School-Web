<section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Highlight News</h2>
        <p>Berita Terbaru</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-kegiatan">Kegiatan</li>
                <li data-filter=".filter-pengumuman">Pengumuman</li>
                <li data-filter=".filter-prestasi">Prestasi</li>
            </ul>
            
            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                @foreach($beritas as $berita)
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ strtolower($berita->kategori) }}">
                        <img src="{{ asset('img/berita/' . $berita->gambar) }}" class="img-fluid" width="400px" alt="">
                        <div class="portfolio-info">
                            <h4>{{ $berita->judul }}</h4>
                            <p>{{ Str::limit($berita->deskripsi, 50) }}</p>
                            <a href="{{ asset('img/berita/' . $berita->gambar) }}" title="{{ $berita->judul }}"
                                data-gallery="portfolio-gallery-{{ strtolower($berita->kategori) }}" class="glightbox preview-link">
                                <i class="bi bi-zoom-in"></i>
                            </a>
                            <a href="{{ route('detail.berita', ['id' => $berita->id]) }}" title="More Details" class="details-link">
                                <i class="bi bi-link-45deg"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            

        </div>

    </div>

</section>
