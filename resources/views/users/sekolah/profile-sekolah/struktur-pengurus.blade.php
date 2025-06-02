@extends('users.layouts.app')
@section('content')
    <div class="page-title dark-background"
        style="background: url('/img/osis.jpg') center center/cover no-repeat; z-index: 1;">
        <div class="section-title" data-aos="fade-up">
            <h2>Profil Sekolah</h2>
            <p>Struktur Organisasi Sekolah SMA Daan Mogot Tangerang</p>
        </div>
    </div>

    <section class="organogram">
        <div class="organogram-node root">
            <div class="container-card"
                style="display: flex; justify-content: center; gap: 50px; align-items: center; position: relative;">

                <!-- Kepala Sekolah - Center -->
                <div class="card" style="text-align: center;">
                    <i class="bi bi-person-badge-fill"></i><br>
                    Kepala Sekolah<br><strong>AIS KOSILAWATI, S.Pd.</strong>
                </div>

                <!-- Komite - Right -->
                <div class="card" style="text-align: center;">
                    <div style="width: 100px; height: 2px;"></div>
                    <i class="bi bi-person-badge-fill"></i><br>
                    Komite<br><strong>SABARNA UTAMA, SE</strong>
                </div>

            </div>

            <div class="line-vertical"></div>
            <!-- Bendahara & TU -->
            <div class="horizontal-box">
                <div class="box">
                    <i class="bi bi-person-workspace"></i><br>
                    BENDAHARA<br><strong>NILOPAR YADATUR RAHAM, S.Pd.</strong>
                </div>
                <div class="box">
                    <i class="bi bi-person-video3"></i><br>
                    TATA USAHA<br><strong>MELA NURHIKAYAH</strong>
                </div>
                <div class="box">
                    <i class="bi bi-person-video3"></i><br>
                    TATA USAHA<br><strong>ABI DARDA</strong>
                </div>
            </div>

            <div class="line-vertical"></div>

            <!-- Wakasek -->
            <div class="horizontal-box">
                <div class="box">
                    <i class="bi bi-person-video"></i><br>
                    WAKA KURIKULUM<br><strong>ISMAIL QURBA, S.Pd.</strong>
                </div>
                <div class="box">
                    <i class="bi bi-person-rolodex"></i><br>
                    WAKA KESISWAAN<br><strong>GUSANAWATI PUSPANINGTYAS, S.Pd.</strong>
                </div>
                <div class="box">
                    <i class="bi bi-person-fill-gear"></i><br>
                    WAKA BIDANG HUMAS<br><strong>MIFTAHUL ALIM, M.Pd.</strong>
                </div>
                <div class="box">
                    <i class="bi bi-person-fill-gear"></i><br>
                    WAKA BIDANG SAPRAS<br><strong>SUHERMAN ARIF B.</strong>
                </div>
            </div>

            <div class="line-vertical"></div>

            <!-- Sekretaris & Bendahara -->
            <div class="horizontal-box">
                <div class="box">
                    <i class="bi bi-person-lines-fill"></i><br>
                    WALI KELAS
                </div>
                <div class="box">
                    <i class="bi bi-person-lines-fill"></i><br>
                    DEWAN GURU
                </div>
            </div>

            <div class="line-vertical"></div>

            <!-- Sekbid Grid -->
            <div class="horizontal-box">
                <!-- Ulangi blok ini untuk setiap Sekbid -->
                <div class="box"><i class="bi bi-person-fill"></i><br>
                    SISWA
                </div>
                {{-- <div class="box">SEKBID 2<br>
                  <li><strong>Fabiano Dwi Putra</strong></li>
                  <li><strong>Rachma Dwi Putri</strong></li>
                  <li><strong>Jeremy Dwi Putra</strong></li>
                </div>
                <div class="box">SEKBID 3<br>
                  <li><strong>Fabiano Dwi Putra</strong></li>
                  <li><strong>Rachma Dwi Putri</strong></li>
                  <li><strong>Jeremy Dwi Putra</strong></li>
                </div>
                <div class="box">SEKBID 4<br>
                  <li><strong>Fabiano Dwi Putra</strong></li>
                  <li><strong>Rachma Dwi Putri</strong></li>
                  <li><strong>Jeremy Dwi Putra</strong></li>
                </div>
                <div class="box">SEKBID 5<br>
                  <li><strong>Fabiano Dwi Putra</strong></li>
                  <li><strong>Rachma Dwi Putri</strong></li>
                  <li><strong>Jeremy Dwi Putra</strong></li>
                </div>
                <div class="box">SEKBID 6<br>
                  <li><strong>Fabiano Dwi Putra</strong></li>
                  <li><strong>Rachma Dwi Putri</strong></li>
                  <li><strong>Jeremy Dwi Putra</strong></li>
                </div>
                <div class="box">SEKBID 7<br>
                  <li><strong>Fabiano Dwi Putra</strong></li>
                  <li><strong>Rachma Dwi Putri</strong></li>
                  <li><strong>Jeremy Dwi Putra</strong></li>
                </div> --}}
            </div>
        </div>
    </section>
@endsection
