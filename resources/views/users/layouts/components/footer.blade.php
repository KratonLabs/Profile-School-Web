<!-- Footer Start -->
<footer id="footer" class="footer dark-background">
    <div class="container">
      <div class="row mb-5">
            <div class="col-lg-3 col-md-6">
              <div class="school-info mb-5">
                <!-- Logo -->
                <img src="{{ asset('/img/logo_sma_dm[1].png') }}" alt="Logo SMA Daan Mogot" width="60">
                <!-- Nama Sekolah + Deskripsi -->
                <div class="ms-3">
                    <h4 class="text-light school-title mb-2">SMA Daan Mogot</h4>
                    <p class="text-light text-start mb-0 school-desc">
                        Kami merupakan sekolah SMA Swasta di Kabupaten Tangerang, Provinsi Banten, berdiri sejak
                        tahun 1989 dan sudah terakreditasi "A".
                    </p>
                </div>
            </div>
            
                <!-- Social Media -->
                <div class="d-flex  gap-2">
                    <a href="#" class="btn btn-outline-light  rounded-2 p-2"><i class="bi bi-facebook fs-10"></i></a>
                    <a href="#" class="btn btn-outline-light  rounded-2 p-2 "><i class="bi bi-twitter fs-10"></i></a>
                    <a href="#" class="btn btn-outline-light  rounded-2 p-2 "><i class="bi bi-google fs-10"></i></a>
                    <a href="#" class="btn btn-outline-light  rounded-2 p-2 "><i class="bi bi-linkedin fs-10"></i></a>
                    <a href="#" class="btn btn-outline-light  rounded-2 p-2 "><i class="bi bi-pinterest fs-10"></i></a>
                    <a href="#" class="btn btn-outline-light  rounded-2 p-2 "><i class="bi bi-instagram fs-10"></i></a>
                </div>
                
            </div>

            <!-- Featured Links -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light school-title mb-5">Tautan Informasi</h4>
                <ul class="list-unstyled text-start ps-0 featured-links">
                    <li><i class="bi bi-chevron-right me-1 text-warning"></i><a href="#">Fasilitas</a></li>
                    <li><i class="bi bi-chevron-right me-1 text-warning"></i><a href="#">PPDB Online</a></li>
                    <li><i class="bi bi-chevron-right me-1 text-warning"></i><a href="#">Visi Misi</a></li>
                    <li><i class="bi bi-chevron-right me-1 text-warning"></i><a href="#">FAQs</a></li>
                    <li><i class="bi bi-chevron-right me-1 text-warning"></i><a href="#">Ekstrakurikuler</a></li>
                    <li><i class="bi bi-chevron-right me-1 text-warning"></i><a href="#">Sejarah Pramita</a></li>
                    <li><i class="bi bi-chevron-right me-1 text-warning"></i><a href="#">E-Library</a></li>
                    <li><i class="bi bi-chevron-right me-1 text-warning"></i><a href="#">Alumni</a></li>
                    <li><i class="bi bi-chevron-right me-1 text-warning"></i><a href="#">PPDB</a></li>
                    <li><i class="bi bi-chevron-right me-1 text-warning"></i><a href="#">Sejarah SMA Daan
                            Mogot</a></li>
                </ul>
            </div>

            <!-- Kontak Kami -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light school-title mb-5">Hubungi Kami</h4>
                <ul class="list-unstyled text-light ps-0 text-start">
                    <li class="mb-2 d-flex align-items-start">
                        <i class="bi bi-geo-alt-fill text-warning me-3"></i>
                        <span>Jl. Gatot Subroto, RT.003/RW.003, Sangiang Jaya, Kec. Periuk, Kota Tangerang, Banten 15138</span>
                    </li>
                    <li class="mb-2 d-flex align-items-start">
                        <i class="bi bi-telephone-fill text-warning me-3"></i>
                        <span>021-5980576</span>
                    </li>
                    <li class="d-flex align-items-start">
                        <i class="bi bi-envelope-fill text-warning me-3"></i>
                        <span>smasdaanmogot@gmail.com</span>
                    </li>
                </ul>
            </div>

            <!-- Flickr Photos -->
            <div class="col-lg-3 col-md-6">
              <h4 class="text-light school-title mb-5">Flickr Photos</h4>
                <div class="row g-2">
                    @for ($i = 0; $i < 6; $i++)
                        <div class="col-4">
                            <img src="{{ asset('/selecao/assets/img/masonry-portfolio/masonry-portfolio-2.jpg') }}"
                                class="img-fluid rounded">
                        </div>
                    @endfor
                </div>
            </div>
    </div>

        <!-- Bagian Bawah -->
        <div class="copyright mt-4 text-center text-light small">
            <span>© Copyright 2025</span> <strong class="px-1 sitename">SMA Daan Mogot</strong> <span>All Rights
                Reserved</span>
        </div>
    </div>
</footer>
<!-- Footer End -->
