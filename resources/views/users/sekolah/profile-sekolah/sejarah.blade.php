    @extends('users.layouts.app')
    @section('content')
        <main class="main">
            <div class="page-title dark-background"
                style="background: url('/img/osis.jpg') center center/cover no-repeat; z-index: 1;">
                <div class="section-title" data-aos="fade-up">
                    <h2>Profil Sekolah</h2>
                    <p>Sejarah SMA Daan Mogot Kota Tangerang</p>
                </div>
            </div>
            <!-- Sambutan Kepala Sekolah -->
            <section id="vision" class="vison section">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Sambutan Kepala Sekola SMA DAAN MOGOT</h2>
                    <p>AIS KOSILAWATI, S.Pd</p>
                </div><!-- End Section Title -->

                <div class="container">

                    <div class="row gy-4">

                        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                            <p>Selamat datang di SMA Daan Mogot
                                SMA Daan Mogot mempersiapkan peserta didik yang berprestasi dan mampu bersaing di era
                                globalisasi.
                            </p>

                            </p>
                            Asslamualaikum Wr. Wb.
                            Puji syukur marilah senantiasa kita panjatkan kehadirat Allah SWT yang masih memberikan
                            nikmat dan karunia kepada kita semua, sehingga kita masih bisa beraktifitas dan memotivasi
                            peserta didik untuk mencapai tujuan dan cita-citanya.
                            <p>
                        </div>

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ asset('/selecao/assets/img/masonry-portfolio/masonry-portfolio-1.jpg') }}"
                                alt="Kepala Sekolah" class="img-fluid rounded shadow mb-3">
                        </div>

                    </div>

                </div>

            </section>
            <!-- /Sambutan Kepala Sekolah -->
            <section id="blog-details" class="blog-details section" style="background-color #fdf7e3;">
                <div class="content">
                    <blockquote>
                        <p style="margin: 0; color: #222">
                            SMA Daan Mogot mempersiapkan peserta didik yang berprestasi dan mampu bersaing di era
                            globalisasi.
                        </p>
                    </blockquote>
                </div>
            </section>


            <!-- Sejarah -->
            <section id="mission" class="about section">
                <div class="container">
                    <div class="row gy-4">
                        <!-- Gambar di sebelah kiri -->
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <img src="{{ asset('/selecao/assets/img/masonry-portfolio/masonry-portfolio-5.jpg') }}"
                                alt="Misi Sekolah" class="img-fluid rounded shadow mb-3">
                        </div>

                        <!-- Teks dan Tabel di sebelah kanan -->
                        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                            <!-- Section Title di dalam kolom teks -->
                            <div class="section-title">
                                <h2>Sejarah</h2>
                                <p>SMA DAAN MOGOT Kota Tangerang</p>
                            </div>

                            <!-- Isi Paragraf Sejarah -->
                            <blockquote
                                style="max-height: 200px; overflow-y: auto; padding-right: 10px; scrollbar-width: thin; background-color: #ebeae7;"
                                class="p-3 border-start border-danger border-2">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet nostrum incidunt quae
                                    iste quis ab maiores rem asperiores exercitationem pariatur, saepe ipsum laudantium, in
                                    necessitatibus libero adipisci placeat eos quaerat repellat facilis vero dicta unde
                                    illum
                                    reprehenderit! Corporis libero voluptatibus asperiores dolores, esse nihil praesentium
                                    quaerat rem adipisci consectetur quas.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto dolores, id vitae saepe
                                    mollitia dolore magnam aperiam dolorem culpa hic amet cupiditate, ipsa autem nemo
                                    expedita reprehenderit sequi, corporis ab.
                                </p>
                            </blockquote>


                            <!-- Tabel Data Sekolah -->
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr>
                                            <th colspan="2">DATA SEKOLAH</th>
                                        </tr>
                                        <tr>
                                            <td><strong>Nama Sekolah</strong></td>
                                            <td>SMA DAAN MOGOT</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Alamat Sekolah</strong></td>
                                            <td>Jl. Gatot Subroto Km.5 Jatiuwung, Kec. Cibodas, Kota Tangerang</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Kategori Sekolah</strong></td>
                                            <td>Reguler</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Tahun Didirikan / Beroperasi</strong></td>
                                            <td>1985</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Kepemilikan Tanah / Bangunan</strong></td>
                                            <td>Milik Yayasan</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Luas Tanah / Status</strong></td>
                                            <td>2480 M<sup>2</sup></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Luas Bangunan</strong></td>
                                            <td>694 M<sup>2</sup></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Sejarah -->

        </main>
    @endsection
