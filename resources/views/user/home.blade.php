    @extends('layouts.user')

    @section('header')
        <style>
            .full-img {
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                height: 180px;
            }
            #hero{
                background: url('{{ asset('user/images/hero-bg.jpg') }}') top center;
                background-size: cover;
            }
            .image-center{
            display: block;
            margin-left: 6.5px;
            margin-right: 6.5px;
            width: 100%;
            } 
        </style>    
    @endsection

    @section('hero')
        <h1>Welcome to Purwa-Travel</h1>
        <h2>Kami adalah agen travel terpercaya dan jaminan layanan perencanaan wisata yang mudah dan murah</h2>
        <a href="#about" class="btn-get-started">Get Started</a>
    @endsection


    @section('content')

        <!--========================== About Us Section ============================-->
        <section id="about">
            <div class="container">
            <div class="row about-container">
    
                <div class="col-lg-7 content order-lg-1 order-2">
                <h2 class="title text-center">Tentang Kami</h2>
                <div class="text-center">
                    @if(isset($about[0]))
                        {!! $about[0]->caption !!} <!-- Menampilkan caption dengan format HTML -->
                    @else
                        <p class="text-center">
                            Selamat datang di Purwa-travel, destinasi Anda untuk menjelajahi keindahan Purwakarta! Kami adalah tim penggemar petualangan yang berdedikasi untuk memberikan pengalaman perjalanan yang tak terlupakan bagi setiap pelanggan kami.</p>
                    @endif
                </div>
            </div>
            <div class="col-lg-5 background order-lg-2 order-1 wow fadeInRight text-center" ></div>
            </div>
    
                <!--========================== Services Section ============================-->
                <section id="services">
                <div class="container wow fadeIn">
                    <div class="section-header">
                    <h3 class="section-title">Mengapa Memilih Kami?</h3>
                    <p class="section-description">Kami memahami bahwa perjalanan yang sukses tidak hanya tentang destinasi, tetapi juga pengalaman yang menyenangkan dan lancar. Oleh karena itu, kami menawarkan kombinasi layanan yang dirancang untuk memastikan kepuasan setiap pelanggan kami.</p>
                    </div>
                    <div class="row">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box">
                        <div class="icon"><i class="fa fa-shield"></i></div>
                        <h4 class="title">Keamanan Berkendara</h4>
                        <p class="description">Keamanan Anda adalah prioritas utama kami. Semua kendaraan yang kami gunakan telah melewati inspeksi keselamatan dan dilengkapi dengan fitur keamanan terbaru.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="box">
                        <div class="icon"><i class="fa fa-money"></i></div>
                        <h4 class="title">Harga Ekonomis</h4>
                        <p class="description">Harga terjangkau dengan kualitas tetap terbaik, tanpa biaya tersembunyi.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="box">
                        <div class="icon"><i class="fa fa-thumbs-up"></i></div>
                        <h4 class="title">Kenyamanan Pelanggan</h4>
                        <p class="description">Kami memastikan transportasi dan akomodasi yang nyaman, dengan layanan ramah dan siap membantu sepanjang perjalanan.</p>
                        </div>
                    </div>
                    </div>
            
                </div>
                    </section><!-- #services -->
    
                    <!--========================== Call To Action Section ============================-->
                    <section id="call-to-action">
                    <div class="container wow fadeIn">
                        <div class="row">
                        <div class="col-lg-9 text-center text-lg-left">
                            <h3 class="cta-title">Bergabung dan Bepergian Bersama Kami</h3>
                            <p class="cta-text"> Kami mengundang Anda untuk menjadi bagian dari komunitas perjalanan kami. Dengan bergabung bersama kami, Anda tidak hanya mendapatkan akses ke penawaran eksklusif, tetapi juga menjadi bagian dari jaringan traveler yang antusias untuk menjelajahi keindahan kota Purwakarta yang kaya akan budaya dan pesona alam.</p>
                        </div>
                        <div class="col-lg-3 cta-btn-container text-center">
                            <a class="cta-btn align-middle" href="{{ route('contact') }}">Contact</a>
                        </div>
                        </div>
                
                    </div>
                        </section>
    
                        <!--========================== Gallery Section ============================-->
                        <section id="contact" style="padding-bottom:85px">
                        <div class="container wow fadeInUp">
                            <div class="section-header">
                            <h3 class="section-title">Galeri</h3>
                            <p class="section-description">Jelajahi keindahan destinasi kami melalui galeri foto yang memukau. Temukan pemandangan indah dan pengalaman seru yang menanti Anda!</p>
                            </div>
                        </div>
                    
                        <div class="container wow fadeInUp">
                            <div class="row justify-content-center">
                    
                            <div class="col-lg-12 col-md-4">
                                <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-6 full-img" style="background-image: url({{ asset('user/images/gallery/galeri.png') }})">
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 full-img" style="background-image: url({{ asset('user/images/gallery/wisata2.png') }})">
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 full-img" style="background-image: url({{ asset('user/images/gallery/wisata3.png') }})">
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 full-img" style="background-image: url({{ asset('user/images/gallery/wisata4.png') }})">
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 full-img" style="background-image: url({{ asset('user/images/gallery/wisata5.png') }})">
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 full-img" style="background-image: url({{ asset('user/images/gallery/wisata6.png') }})">
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 full-img" style="background-image: url({{ asset('user/images/gallery/wisata7.png') }})">
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 full-img" style="background-image: url({{ asset('user/images/gallery/wisata8.png') }})">
                                </div>
                                </div>
                            </div>
                        </div>
                    </section>
@endsection