@extends('users.layouts.app')
@section('content')
 <div class="page-title dark-background" style="background: url('/gp/assets/img/hero-bg.jpg') center center/cover no-repeat; z-index: 1;">
    <div class="section-title" data-aos="fade-up">
        <h2>Kurikulum</h2>
        <p>Kalender Akademik</p>
    </div>
</div>

<section id="service-details" class="service-details section">
    <div class="container" data-aos="fade-up">
        <h3 class="school-title">Kalender Akademik Periode 2024/2025</h3>
        <p class="school-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos perferendis asperiores molestiae fugiat quidem
            laborum necessitatibus id vero possimus dolores.</p>
    </div>
    <div class="m-3 d-flex justify-content-center">
        <iframe src="{{ asset('doc/120225_Penyusunan Jadwal Skripsi Semester Genap 2024 2025.pdf') }}" width="85%" height="600px"></iframe>
    </div>
</section>
@endsection