@extends('admin.layouts.app')
@section('content')
<style>
.img-wrapper {
    position: relative;
    cursor: pointer;
}

.overlay-btns {
    position: absolute;
    top: 10px;
    left: 10px;
    display: flex;
    gap: 10px;
    opacity: 0;
    transform: translateY(-20px); /* Mulai dari sedikit lebih atas */
    transition: opacity 0.3s ease, transform 0.3s ease;
    pointer-events: none;
}

.overlay-btns button {
    background: rgba(0, 0, 0, 0.6);
    color: white;
    border: none;
    padding: 6px 12px;
    font-size: 1rem;
    border-radius: 4px;
}

.img-popup {
    display: none;
    position: fixed;
    z-index: 9999;
    top: 0; left: 0;
    width: 100vw; height: 100vh;
    background: rgba(0,0,0,0.8);
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.img-popup img {
    max-width: 90%;
    max-height: 80%;
    border-radius: 8px;
}

.img-wrapper:hover .overlay-btns {
    opacity: 1;
    transform: translateY(0); /* Turun ke posisi normal */
    pointer-events: auto;
}

.img-popup .close-btn {
    background: white;
    color: black;
    font-weight: bold;
    border: none;
    padding: 8px 16px;
    margin-bottom: 10px;
    border-radius: 4px;
    cursor: pointer;
}

    </style>
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Ekstrakulikuler</h2>
        </div>
    </div>
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center pr-3">
            <div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item active"><a href="/ekstrakulikuler">Ekstrakulikuler</a></li>
                </ul>
            </div>
            <div>
                <a href="/ekstrakulikuler/create" type="button" class="btn btn-sm btn-primary"><i
                        class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>
    <section class="no-padding-top">
        <div class="container-fluid">
            @if (count($ekstrakulikuler) < 1)
                <div class="row d-flex justify-content-center">
                    <h2 class="text-danger">Tidak ada data</h2>
                </div>
            @else
                <div class="row">
                    @foreach ($ekstrakulikuler as $item)
                        <div class="col-lg-4">
                            <div class="user-block block text-center">
                                <div class="img-wrapper" onclick="openPopup('{{ asset('img/ekstrakulikuler/' . $item->firstCarousel->gambar) }}')">
                                    <img src="{{ asset('img/ekstrakulikuler/' . $item->firstCarousel->gambar) }}" alt="..." class="img-fluid"
                                        style="width: 2500px; height: 150px; object-fit: cover;">
                                    
                                    <div class="overlay-btns">
                                        <!-- Tombol "+" -->
                                        <button type="button" onclick="event.stopPropagation(); openPopup('{{ asset('img/ekstrakulikuler/' . $item->firstCarousel->gambar) }}" title="Lihat besar">+</button>
                                
                                        <!-- Tombol "Logo" -->
                                        <button type="button" onclick="event.stopPropagation(); openPopup('{{ asset('img/ekstrakulikuler/logo/' . $item->logo) }}')" title="Logo">Logo</button>
                                    </div>
                                </div>
                                
                                <!-- Fullscreen Gambar -->
                                <div id="imgPopup" class="img-popup" onclick="closePopup()">
                                    <button class="close-btn" onclick="event.stopPropagation(); closePopup()">Tutup</button>
                                    <img id="popupImage" src="" alt="Preview Besar">
                                </div>
                                
                                <a href="#" class="user-title">
                                    <h3 class="h5">{{ $item->nama }}</h3>
                                    @if ($item->pegawai_id)
                                     <span>Pembina : {{$item->pegawai->nama}}</span>
                                    @endif
                                    <span>Kategori : {{$item->kategori}}</span>
                                    <span>Tahun berdiri : {{$item->tahun_berdiri}}</span>
                                    @if ($item->nama_ig)
                                    <a href="{{$item->alamat_ig}}"><span>
                                        Instagram :
                                        {{$item->nama_ig}}
                                    </span>
                                    </a>
                                     {{-- <span>Instagram :</span> --}}
                                    @endif
                                </a>
                                <div class="contributions">{{$item->jumlah_anggota}} Anggota</div>
                                <div class="details row">
                                    <div class="col">
                                        <a href="{{ route('ekstrakulikuler.edit', $item->id) }}"
                                            class="btn btn-lg btn-warning h5"><i class="fa fa-pencil-square"></i> Update</a>
                                    </div>
                                    <div class="col">
                                        <a type="button" data-toggle="modal" data-target="#myEkstrakulikuler{{ $item->id }}"
                                            class="btn btn-lg btn-danger h5"><i class="fa fa-trash"></i> Hapus</a>
                                    </div>
                                    @include('admin.ekstrakulikuler.confirmdelete')
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
            <div class="row mt-4 justify-content-center">
                {{ $ekstrakulikuler->onEachSide(1)->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </section>
    <script>
        function openPopup(imgSrc) {
            const popup = document.getElementById('imgPopup');
            const popupImg = document.getElementById('popupImage');
            popupImg.src = imgSrc;
            popup.style.display = 'flex';
        }
        
        function closePopup() {
            const popup = document.getElementById('imgPopup');
            const popupImg = document.getElementById('popupImage');
            popup.style.display = 'none';
            popupImg.src = '';
        }
        </script>
        
@endsection
