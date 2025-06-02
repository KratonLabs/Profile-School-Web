<section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Highlight News</h2>
        <p>Berita Terbaru</p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <!-- Filter Buttons -->
            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".kegiatan">Kegiatan</li>
                <li data-filter=".pengumuman">Pengumuman</li>
                <li data-filter=".prestasi">Prestasi</li>
            </ul>

            <!-- Items -->
            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                @foreach ($beritas as $berita)
                    @php
                        $kategoriSlug = Str::slug(trim($berita->kategori)); // pastikan tanpa spasi
                    @endphp

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item {{ $kategoriSlug }}">
                        <img src="{{ asset('img/berita/' . $berita->gambar) }}" class="img-fluid" width="100%"
                            height="250" style="object-fit: cover;" alt="">

                        <div class="portfolio-info">
                            <h4>{{ $berita->judul }}</h4>
                            <p>{!! Str::limit($berita->deskripsi, 50) !!}</p>
                            <a href="{{ asset('img/berita/' . $berita->gambar) }}" title="{{ $berita->judul }}"
                                data-gallery="portfolio-gallery-{{ $kategoriSlug }}" class="glightbox preview-link">
                                <i class="bi bi-zoom-in"></i>
                            </a>
                            <a href="{{ route('detail.berita', ['id' => $berita->id]) }}" title="More Details"
                                class="details-link">
                                <i class="bi bi-link-45deg"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var grid = document.querySelector('.isotope-container');

        if (grid) {
            // Tunggu semua gambar selesai dimuat sebelum initialize
            imagesLoaded(grid, function() {
                var iso = new Isotope(grid, {
                    itemSelector: '.portfolio-item',
                    layoutMode: 'masonry'
                });

                // Filter buttons
                document.querySelectorAll('.portfolio-filters li').forEach(function(btn) {
                    btn.addEventListener('click', function() {
                        document.querySelectorAll('.portfolio-filters li').forEach(el =>
                            el.classList.remove('filter-active'));
                        this.classList.add('filter-active');
                        var filterValue = this.getAttribute('data-filter');
                        iso.arrange({
                            filter: filterValue
                        });
                    });
                });
            });
        }
    });
</script>
