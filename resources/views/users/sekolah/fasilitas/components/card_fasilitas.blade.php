<div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
    <article class="shadow-lg rounded overflow-hidden" style="background-color: #e91d1d;">
        <div class="post-img position-relative overflow-hidden">
            <img src="{{ asset('img/fasilitas/' . $item->gambar) }}" alt="{{ $item->nama }}"
                class="img-fluid" style="height: 220px; width: 100%; object-fit: cover;">
            
            <!-- Icon muncul saat hover -->
            <a href="/fasilitas-item" class="icon-link d-flex justify-content-center align-items-center">
                <i class="bi bi-link-45deg"></i>
            </a>
        </div>
        
        <div class="member-info p-3" style="border-top: 2px solid #f8e807;">
            <p class="post-category fw-bold text-white mb-1">
                <i class="bi bi-building text-warning"></i> {{ $item->jenis }}
            </p>
            <h2 class="title h5 text-white">
                <a href="/fasilitas-item" class="text-white text-decoration-none">{{ $item->nama }}</a>
            </h2>
            <div class="post-meta">
                <p class="mb-2 text-white">{{ Str::limit($item->deskripsi, 100) }}</p>
            </div>
        
            <!-- Tombol Read More -->
            <a href="/fasilitas-item" class="btn btn-sm btn-warning mt-2 px-3 py-1 fw-semibold shadow-sm text-dark"
               style="background-color: #f8e807; border: none; transition: 0.3s;">
               Read More
            </a>
        </div>
        
    </article>                
</div>