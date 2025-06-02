@extends('admin.layouts.login')
@section('contentLogin')
    <style>
        .swiper-slide {
            background-image: url('/img/carousel/caraousel1.jpg');
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            font-weight: bold;
            color: #fff;
        }
        .swiper-slide:nth-child(1n) {
            background-image: url('/img/carousel/caraousel1.jpg');
            background-size: cover;
            background-position: center;
            position: relative;
            overflow: hidden;
        }

        .swiper-slide:nth-child(2n) {
            background-image: url('/img/carousel/carousel2.jpg');
            background-size: cover;
            background-position: center;
            position: relative;
            overflow: hidden;
        }

        .swiper-slide:nth-child(3n) {
            background-image: url('/img/carousel/carousel3.jpg');
            background-size: cover;
            background-position: center;
            position: relative;
            overflow: hidden;
        }
        .swiper-slide.swiper-slide:nth-child(2n) {
            background-image: url('/img/carousel/carousel4.jpg');
            background-size: cover;
            background-position: center;
            position: relative;
            overflow: hidden;
        }

    .slide-with-bg .overlay {
        position: absolute;
        top: 0; left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Warna hitam dengan transparansi */
        z-index: 1;
    }

    .slide-with-bg .content {
        position: relative;
        z-index: 2;
    }

    </style>
    <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
            <div class="row">
                <!-- Logo & Information Panel-->
                <div class="col-lg-6">
                    <div class="swiper mySwiper w-100 h-100">
                        <div class="swiper-wrapper d-flex justify-items-center">
                            <div class="swiper-slide slide-with-bg">
                                <div class="overlay"></div>
                                <div class="content p-5 text-white relative z-10">
                                    <div class="logo">
                                        <h1>Dashboard Admin</h1>
                                    </div>
                                    <p> SMA Daan Mogot Tangerang</p>
                                </div>
                            </div>
                            <div class="swiper-slide slide-with-bg">
                                <div class="overlay"></div>
                                <div class="content p-5 text-white relative z-10">
                                    <div class="logo">
                                        <h1>Dashboard Admin</h1>
                                    </div>
                                    <p> SMA Daan Mogot Tangerang </p>
                                </div>
                            </div>
                            <div class="swiper-slide slide-with-bg">
                                <div class="overlay"></div>
                                <div class="content p-5 text-white relative z-10">
                                    <div class="logo">
                                        <h1>Dashboard Admin</h1>
                                    </div>
                                    <p> SMA Daan Mogot Tangerang </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Form Panel    -->
                <div class="col-lg-6 bg-white">
                    <div class="form d-flex align-items-center">
                        <div class="content">
                            <form action="/login" method="POST" class="form-validate">
                                @csrf
                                @method('POST')
                                <div class="form-group">
                                    <input id="login-email" type="text" name="email" required
                                        data-msg="Please enter your email" class="input-material"
                                        value="{{ old('email') }}">
                                    <label for="login-email" class="label-material">Email</label>
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="login-password" type="password" name="password" required
                                        data-msg="Please enter your password" class="input-material">
                                    <label for="login-password" class="label-material">Password</label>
                                </div>
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <button type="submit" class="btn btn-primary">Login</button>
                                <a href="/" type="button" class="btn btn-secondary">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="module">
        import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'
        var swiper = new Swiper(".mySwiper", {
        grabCursor: true,
        effect: "creative",
        autoplay: {
        delay: 2500,
        disableOnInteraction: false,

        },
        creativeEffect: {
            prev: {
            shadow: true,
            translate: [0, 0, -400],
            },
            next: {
            translate: ["100%", 0, 0],
            },
        },
        });
    </script>
@endsection
