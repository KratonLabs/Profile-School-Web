@extends('users.layouts.app')
@section('content')
    <div class="page-title dark-background"
        style="background: url('/gp/assets/img/hero-bg.jpg') center center/cover no-repeat; z-index: 1;">
        <div class="section-title" data-aos="fade-up">
            <h2>Kurikulum</h2>
            <p>Peraturan Sekolah</p>
        </div>
    </div>

    <section id="about" class="about section">
        <div class="container">
            <div class="row gy-4">
                <!-- Kolom Tata Tertib -->
                <div class="col-lg-6 d-flex flex-column justify-content-between" data-aos="fade-up" data-aos-delay="100">
                    <div class="section-title text-start">
                        <h2>SMA Daan Mogot Kota Tangerang</h2>
                        <p>Tata Tertib</p>
                    </div>
                    <div class="content flex-grow-1 d-flex flex-column justify-content-between">
                        <p>Kegiatan Apel Pagi Bersama: 06.30-07.00</p>
                        <p>Kegiatan Belajar Mengajar dimulai Pagi: 07.00-15.15 (Mengikuti jadwal pelajaran)</p>
                        <ul class="list-aturan">
                            <!-- 1-10 -->
                            <li><i class="bi bi-check2-circle"></i> <span>1. Wajib hadir 10 menit sebelum kegiatan belajar
                                    mengajar dimulai.</span></li>
                            <li><i class="bi bi-check2-circle"></i> <span>2. Terlambat 10 menit setelah BELL berbunyi wajib
                                    lapor kepada GURU PIKET.</span></li>
                            <li><i class="bi bi-check2-circle"></i> <span>3. Terlambat lebih dari 10 menit setelah BELL
                                    berbunyi siswa tidak diperkenankan mengikuti pelajaran.</span></li>
                            <li><i class="bi bi-check2-circle"></i> <span>4. Diwajibkan memakai SERAGAM SEKOLAH sesuai waktu
                                    yang ditentukan</span></li>
                            <li><i class="bi bi-check2-circle"></i> <span>5. Siswa diwajibkan mengikuti Ekskul wajib Pramuka
                                    setiap hari Sabtu.</span></li>
                            <li><i class="bi bi-check2-circle"></i> <span>6. Dilarang membuang sampah sembarangan.</span>
                            </li>
                            <li><i class="bi bi-check2-circle"></i> <span>7. Dilarang makan dan minum pada saat jam
                                    pelajaran sedang berlangsung.</span></li>
                            <li><i class="bi bi-check2-circle"></i> <span>8. Dilarang melakukan aksi corat-coret pada
                                    lingkungan dan fasilitas sekolah.</span></li>
                            <li><i class="bi bi-check2-circle"></i> <span>9. Dilarang merokok di dalam dan di luar
                                    lingkungan sekolah (Radius 500 meter)</span></li>
                            <li><i class="bi bi-check2-circle"></i> <span>10. Dilarang bergerombol/berkumpul yang menggangu
                                    KETERTIBAN UMUM</span></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-end" data-aos="fade-up" data-aos-delay="200">
                    <ul class="list-aturan">
                        <!-- 11-20 -->
                        <li><i class="bi bi-check2-circle"></i> <span>11. Dilarang meninggalkan ruang kelas pada saat jam
                                pelajaran tanpa seijin guru kelas/guru piket</span></li>
                        <li><i class="bi bi-check2-circle"></i> <span>12. Dilarang meninggalkan lingkungan sekolah tanpa
                                seijin guru kelas/guru piket</span></li>
                        <li><i class="bi bi-check2-circle"></i> <span>13. Bagi siswa laki-laki dilarang berambut
                                GONDRONG/Diwarnai, panjang rambut max:2cm</span></li>
                        <li><i class="bi bi-check2-circle"></i> <span>14. Bagi siswi perempuan dilarang mewarnai
                                rambut</span></li>
                        <li><i class="bi bi-check2-circle"></i> <span>15. Bagi siswi perempuan dilarang menggunakan
                                perhiasan berlebihan</span></li>
                        <li><i class="bi bi-check2-circle"></i> <span>16. Dilarang mengkonsumsi/mengedarkan NARKOBA/atau
                                sejenisnya dalam bentuk apapun</span></li>
                        <li><i class="bi bi-check2-circle"></i> <span>17. Dilarang membawa buku/majalah/sejenisnya yang
                                bersifat pornografi</span></li>
                        <li><i class="bi bi-check2-circle"></i> <span>18. Dilarang melakukan tindakan pemalakan di
                                dalam/luar sekolah</span></li>
                        <li><i class="bi bi-check2-circle"></i> <span>19. Dilarang melakukan tindakan kekerasan terhadap
                                sesama warga sekolah</span></li>
                        <li><i class="bi bi-check2-circle"></i> <span>20. Hal-hal lain yang belum tertera dalam peraturan
                                ini akan ditentukan kemudian berdasarkan kepada situasi dan kondisi pada saat
                                tertentu</span></li>
                    </ul>
                </div>
            </div>
            
            <section id="about" class="about section">
                <div class="section-title text-start">
                    <h2>SMA Daan Mogot Tangerang</h2>
                    <p>Point-point Pelanggaran Peserta Didik</p>
                </div>
                <div class="m-3 d-flex justify-content-center">
                    <iframe src="{{ asset('doc/Point-point Pelanggaran.pdf') }}" width="85%" height="600px"></iframe>
                </div>
            </section>

        </div>
    </section>
@endsection
