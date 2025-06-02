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
            transform: translateY(-20px);
            /* Mulai dari sedikit lebih atas */
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
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.8);
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
            transform: translateY(0);
            /* Turun ke posisi normal */
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
            <h2 class="h5 no-margin-bottom">Gallery Eskul</h2>
        </div>
    </div>
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center pr-3">
            <div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item active"><a href="/ekstrakulikuler">Gallery Eskul </a></li>
                </ul>
            </div>
        </div>
    </div>
    <section class="no-padding-top">
        <div class="container-fluid">
            @if (count($carouselEskul) < 1)
                <div class="row d-flex justify-content-center">
                    <h2 class="text-danger">Tidak ada data</h2>
                </div>
            @else
                <div class="row">
                    @foreach ($carouselEskul as $item)
                        <div class="col-lg-4">
                            <div class="user-block block text-center">
                                <div class="img-wrapper"
                                    onclick="openPopup('{{ asset('img/ekstrakulikuler/' . $item->gambar) }}')">
                                    <img src="{{ asset('img/ekstrakulikuler/' . $item->gambar) }}" alt="..."
                                        class="img-fluid" style="width: 2500px; height: 150px; object-fit: cover;">

                                    <div class="overlay-btns">
                                        <!-- Tombol "+" -->
                                        <button type="button"
                                            onclick="event.stopPropagation(); openPopup('{{ asset('img/ekstrakulikuler/' . $item->gambar) }}')"
                                            title="Lihat besar">+</button>

                                        <!-- Tombol "Logo" -->
                                        <button type="button"
                                            onclick="event.stopPropagation(); openPopup('{{ asset('img/ekstrakulikuler/logo/' . $item->logo) }}')"
                                            title="Logo">Logo</button>
                                    </div>
                                </div>

                                <div class="row p-2 d-flex justify-content-center">
                                    <h4 class="text-center">
                                        {{ $item->eskul->nama }}
                                    </h4>
                                </div>
                                <!-- Button -->
                                <div class="details row">
                                    <div class="col">
                                        <a href="{{ url('/carouselekstrakulikuler/create?id=' . $item->eskul_id) }}"
                                            class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Tambah Gambar</a>
                                    </div>
                                    <div class="col">
                                        <a type="button" data-toggle="modal"
                                            data-target="#myEkstrakulikuler{{ $item->id }}"
                                            class="btn btn-sm btn-danger h5"><i class="fa fa-trash"></i> Hapus</a>
                                    </div>
                                    @include('admin.ekstrakulikuler.detail.confirmhapus')
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
            <div class="row mt-4 justify-content-center">
                {{ $carouselEskul->onEachSide(1)->links('pagination::bootstrap-4') }}
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
