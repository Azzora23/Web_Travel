@extends('layouts.user')

@section('header')
    <style>
        .full-img {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 180px;
        }
        #hero {
            background: url('{{ asset('user/images/hero-3.jpeg') }}') top center;
            background-size: cover;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
        }
        .gallery-item {
            width: 23%;
            overflow: hidden;
            position: relative;
        }
        .gallery-item img {
            width: 100%;
            height: auto;
            transition: transform 0.3s ease;
        }
        .gallery-item:hover img {
            transform: scale(1.1);
        }
        .gallery-item:hover .overlay {
            opacity: 1;
        }
        /* Overlay */
        .overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100%;
            width: 100%;
            opacity: 0;
            transition: 0.5s ease;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex; /* Untuk memusatkan teks */
            align-items: center; /* Memusatkan secara vertikal */
            justify-content: center; /* Memusatkan secara horizontal */
        }
        .text {
            color: white;
            font-size: 20px;
            text-align: center;
        }
        /* Responsive */
        @media (max-width: 768px) {
            .gallery-item {
                width: 48%;
            }
        }
        @media (max-width: 576px) {
            .gallery-item {
                width: 100%;
            }
        }
    </style>
@endsection

@section('hero')
<h1>Gallery Purwa-Travel</h1>
<h2>Kami adalah agen travel terpercaya dan jaminan layanan perencanaan wisata yang mudah dan murah</h2>
@endsection

@section('content')
<section id="contact" style="padding-bottom:85px">
    <div class="container wow fadeInUp">
        <div class="section-header">
        <h3 class="section-title">Galeri</h3>
        <p class="section-description">Jelajahi keindahan destinasi kami melalui galeri foto yang memukau. Temukan pemandangan indah dan pengalaman seru yang menanti Anda!</p>
        </div>
    </div>

            <div class="gallery">
                @foreach($galleryImages as $image)
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <img src="{{ $image->url }}" class="card-img-top" alt="{{ $image->title }}">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $image->title }}</h5>
                            <p class="card-text">Nikmati keindahan {{ $image->title }} dan jelajahi destinasi menakjubkan kami.</p>
                        </div>
                        <div class="card-footer text-center">
                            <div class="btn btn-outline-primary">Lihat Detail</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
