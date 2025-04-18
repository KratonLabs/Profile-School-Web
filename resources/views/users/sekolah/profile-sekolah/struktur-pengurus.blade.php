@extends('users.layouts.app')
@section('content')
<div class="page-title dark-background" style="background: url('/gp/assets/img/hero-bg.jpg') center center/cover no-repeat; z-index: 1;">
    <div class="section-title" data-aos="fade-up">
        <h2>Profil Sekolah</h2>
        <p>Struktur Kepengurusan</p>
    </div>
</div>

<section class="organogram">  
    <div class="organogram-node root">
      <!-- Kepala Sekolah -->
      <div class="card">
        <i class="bi bi-person-badge-fill"></i><br>
        Kepala Sekolah<br><strong>Eka Gini Nadya, S.Pd.</strong>
      </div>
  
      <div class="line-vertical"></div>
  
      <!-- Wakasek -->
      <div class="horizontal-box">
        <div class="box">
          <i class="bi bi-person-workspace"></i><br>
          Wakasek I (Kurikulum)<br><strong>Hardi Nurdiansyah, S.T.</strong>
        </div>
        <div class="box">
          <i class="bi bi-person-video3"></i><br>
          Wakasek II (Kesiswaan)<br><strong>Reynard Christines, S.Inf.</strong>
        </div>
        <div class="box">
          <i class="bi bi-person-video3"></i><br>
          Wakasek III (Sarana Prasarana)<br><strong>Reynard Christines, S.Inf.</strong>
        </div>
      </div>
  
      <div class="line-vertical"></div>
  
      <!-- Ketua & Wakil -->
      <div class="horizontal-box">
        <div class="box">
          <i class="bi bi-person-video"></i><br>
          Guru Mata Pelajaran Wajib<br><strong>DINDA TRIHADIATI</strong>
        </div>
        <div class="box">
          <i class="bi bi-person-rolodex"></i><br>
          Guru Mata Pelajaran Peminatan<br><strong>NANDHINIZ FEBRIANTI</strong>
        </div>
        <div class="box">
          <i class="bi bi-person-lines-fill"></i><br>
          Staff TU<br><strong>NANDHINIZ FEBRIANTI</strong>
        </div>
        <div class="box">
          <i class="bi bi-person-fill-gear"></i><br>
          Pembina Esktrakirikuler<br><strong>NANDHINIZ FEBRIANTI</strong>
        </div>
      </div>
  
      <div class="line-vertical"></div>
  
      <!-- Sekretaris & Bendahara -->
      <div class="horizontal-box">
        <div class="box">
          <i class="bi bi-person-fill"></i><br>
          Staff Keamanan
        </div>
        <div class="box">
          <i class="bi bi-person-fill"></i><br>
          Staff Kebersihan
        </div>
        <div class="box">
          <i class="bi bi-person-fill"></i><br>
          Pramubakti
        </div>
      </div>
  
      <div class="line-vertical"></div>
  
      <!-- Sekbid Grid -->
      {{-- <div class="grid">
        <!-- Ulangi blok ini untuk setiap Sekbid -->
        <div class="box">SEKBID 1<br>
          <li><strong>Fabiano Dwi Putra</strong></li>
          <li><strong>Rachma Dwi Putri</strong></li>
          <li><strong>Jeremy Dwi Putra</strong></li>
        </div>
        <div class="box">SEKBID 2<br>
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
        </div>
      </div> --}}
    </div>
  </section>
@endsection