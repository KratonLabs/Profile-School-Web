@extends('users.layouts.app')
@section('content')

<main class="main">    
  <!-- Page Title -->
  <div class="page-title dark-background" style="background: url('/gp/assets/img/hero-bg.jpg') center center/cover no-repeat; z-index: 1;">
    <div class="section-title" data-aos="fade-up">
      <h2>Periode 2024/2025</h2>
       <p>Struktur Organisasi Osis</p>
    </div>
  </div>
  <!-- End Page Title -->
  
  <section class="organogram">  
    <div class="organogram-node root">
      <!-- Kepala Sekolah -->
      <div class="card">
        <i class="bi bi-person-badge-fill"></i><br>
        Penanggung Jawab<br><strong>Eka Gini Nadya, S.Pd.</strong>
      </div>
  
      <div class="line-vertical"></div>
  
      <!-- Wakasek & Pembina -->
      <div class="horizontal-box">
        <div class="box">
          <i class="bi bi-person-workspace"></i><br>
          Pembimbing<br><strong>Hardi Nurdiansyah, S.T.</strong>
        </div>
        <div class="box">
          <i class="bi bi-person-video3"></i><br>
          Pembina OSIS<br><strong>Reynard Christines, S.Inf.</strong>
        </div>
      </div>
  
      <div class="line-vertical"></div>
  
      <!-- Ketua & Wakil -->
      <div class="horizontal-box">
        <div class="box">
          <i class="bi bi-person-fill-check"></i><br>
          Ketua OSIS<br><strong>DINDA TRIHADIATI</strong>
        </div>
        <div class="box">
          <i class="bi bi-person-fill-up"></i><br>
          Wakil Ketua OSIS<br><strong>NANDHINIZ FEBRIANTI</strong>
        </div>
      </div>
  
      <div class="line-vertical"></div>
  
      <!-- Sekretaris & Bendahara -->
      <div class="horizontal-box">
        <div class="box">
          <i class="bi bi-journal-text"></i><br>
          Sekretaris
          <ul>
            <li><strong>YESA MURENA KHASANAH</strong></li>
            <li><strong>GABRIELLE SAHDA SANGKAY A</strong></li>
          </ul>
        </div>
        <div class="box">
          <i class="bi bi-cash-stack"></i><br>
          Bendahara
          <ul>
            <li><strong>JELIANA FATRECIA A.</strong></li>
            <li><strong>DESTY MAHARANI</strong></li>
          </ul>
        </div>
      </div>
  
      <div class="line-vertical"></div>
  
      <!-- Sekbid Grid -->
      <div class="grid">
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
      </div>
    </div>
  </section>


</main>
@endsection