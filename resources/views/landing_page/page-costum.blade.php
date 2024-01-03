@extends('layout.landingpage')

@section('content')
{{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="asset/css/styles.css">
<!-- <link id="pagestyle" href="asset/admin/css/soft-ui-dashboard.  css?v=1.0.3" rel="stylesheet" /> -->
<section id="home" class="section-home" style="overflow: hidden;">
 
    <section class="main-banner">
        <div class="main-banner__logo">
            <img src="{{asset('asset/images/LOGO.png')}}" class="rounded mx-auto d-block" alt="">
            </div>

            <style>
                
                
                .teks{

                    font-size: 15px;
                    margin-top: 0px;
                }
                .text-about{
                    font-size: 14px;
                    line-height: 25px;
                    margin-top: 0px;
                }
                .h-carousel{
                    height: 30%;
                }
                .h-image{
                    height: 30%;
                }
                /* body {
            margin: 0;
            padding: 0;
            background: url('/asset/images/kontak.png') ;
            background-repeat: no-repeat;
            background-size:cover;
            height: 100vh   ; 
            display:grid;
            align-items: center;
            justify-content: center;
            color: #fff; 
            font-family: Montheavy;
        } */
        .wp {
            background-image: url('asset/images/kontak.png');
            height: 800px;
            background-size: cover;
            -o-object-position: center;
            object-position: center;
            /* transform: scale(1.5); */
            width: 100%;

        }
        .content {
            text-align: center;
            padding: 20px;
            background: rgba(0, 0, 0, 0.7); /* Warna latar belakang dengan opasitas */
            border-radius: 10px;
        }

        h1 {
            margin: 0;
            font-size: 3em;
            position: center;
            text-align: center;
            font-weight: bold;
        }

        p {
            margin: 10px 0;
        }
        .contact {
            width: 100px;
            height: 100px;
            border-radius: 12px;
            padding-top: 50px;
            /* background-color: white; */
        }
        .contact-title{
            color: #fff;
            font-family: Montheavy;
            font-weight: bold;
            font-size: 4.2rem;
        }
        .contact,.icon {
            align-items: center;
            margin: auto;
            display: block;
            padding-top: 20%;
            padding-bottom: 10px;
        }
        .btn-mid{
            width: 150px;
            height: 150px;
            background-color: #fff;
            border-radius: 14px;
            box-shadow:black 2px 2px 2px !important;
            margin: auto;
            display: block;
            transition: all 0.5s ease-in-out;
            cursor: pointer;
            outline: none;

        }
        .btn-mid:hover{
            width: 150px;
            height: 150px;
            background-color: #fff;
            border: 0.2rem solid #1890fd;
            /* border-radius: 6rem; */
            padding: 0.4em;
            box-shadow: 0 0 .2rem #fff,
              0 0 .2rem #fff,
              0 0 2rem #1890fd,
              0 0 0.8rem #1890fd,
              0 0 2.8rem #1890fd,
              inset 0 0 1.3rem #1890fd;
        }
        .btn-mid:visited{
           width: 150px;
            height: 150px;
            background-color: #fff;
            border-radius: 14px;
            box-shadow:black 2px 2px 2px !important;
            margin: auto;
            display: block;
            transition: all 0.5s ease-in-out;
            cursor: pointer;
            outline: none;
        }
        .container-sosmed{
            border-radius: 14px;
            align-items: center;
            /* display: flex; */
            transition: all 0.5s ease-in-out;
            /* transition: cubic-bezier(0.95, 0.05, 0.795, 0.035); */
            cursor: pointer;
            outline: none;
        }
        .btn-sosmed{
            transition: all 0.5s ease-in;
            width: 80px;

        }
        .btn-sosmed:hover{
            transition: all 0.5s ease-in-out;
            /* width: 100px; */
            border-radius: 12px;
            padding: 0.4em;
            box-shadow: 0 0 .1rem #fff,
              0 0 .2rem #fff,
              0 0 1rem #1890fd,
              0 0 0.4rem #1890fd,
              0 0 1.2rem #1890fd,
              inset 0 0 1.0rem #1890fd;
        }
        .frame{
            padding: 10%;
            width: 100%;
            height: 90vh;

        }
        .sosmed{
            padding-top: 50px;
            align-content: center;
            text-align: center;
    
        }
        .footer{
            font-family: Montheavy;
            color:gray;
            margin-top: 3rem;
            padding-top: 4.2rem;
        }
    .kurir-img{
        width: 80px;
    }
@media (max-width: 340px) {
    .contact-title {
        color: #fff;
        font-size: 1.8rem;
    }
}
/* @media (min-width: 300px) {
    .contact-title {
        color: #fff;
        font-size: 1.8rem;
    }
} */
        @media  (max-width: 768px) {
    .btn-mid {
        width: 50%; /* Ubah lebar tombol menjadi 100% */
        height: 50%;
        padding: 5px 5px 5px 5px;
        margin-top: 5px;
    }
    h5{
        font-size: 18px;
    }

    .icon {
        width: 40%; /* Ubah lebar ikon menjadi 50% */
    }
    .contact-title{
        font-size: 2.2rem;
    }
    .kurir-img{
        width: 50px;
    }
    /* .wp{
        background: url('/asset/images/kontak.png') ;
            background-repeat: no-repeat;
            background-size:cover;
            height: 130vh; 
    } */
    .footer{
            font-size: 13px;
        }
    }
                .store{
                    text-align: center; 
                    align-items: center; 
                    justify-content: center; text-align:center; 
                    font-weight: bold;
                    margin-top:4px;
                }
                @media screen and(max-width: 280.98px) { 
                    .teks {
                        font-size: 12px;

                    } .img-carousel{
                        padding-bottom: 10px;
                    }
                   
                }
                @media screen and (max-width: 350.98px)  { 
                    .teks {
                        margin-top: 10px;
                    }
                    .carousel-about{
                        width: 100% !important;
                        height: 400px;
                        /* background-color: yellow; */
                    }
                    .cstore{
                        margin-top:0px;
                        padding-top: 0px;
                    }
                    .btn-mid{
                        width: 30%;
                        height: 10%;
                    }
                    .footer {
                        margin-top: 10px;
                        /* font-size: 12px; */
                    }
                 }
                 @media screen and (max-width: 399.98px) {
                    
                    .cstore{
                        /* padding-top: 5%; */
                        margin-top: 10px;
                    }
                    .btn-mid{
                        width: 30%;
                        height: 10%;
                    }
                    .footer {
                        margin-top: 10px;
                        
                    }
                }
                @media screen and (max-width: 450.98px) {
                    
                    .cstore{
                        /* padding-top: 5%; */
                        margin-top: 2px;
                    }
                    .
                    *{
                        /* background-color: yellow; */
                    }
                }
                @media screen and (max-width: 767.98px) { 
                    .teks {
                        font-size: 15px;
                        line-height: 100px;
                    } 
                    .cstore{
                        padding-top: 40px;
                        margin-top: 40px;
                        /* background-color: #000; */
                    }.card_location{
                        height: 100vh; 
                    }
                }
                @media screen and (max-width: 800px) {
                    .teks{
                        margin-top: 80%;
                        padding-top: 4px;                        
                        font-size: 14px;
                        line-height: 100px;

                    }
                    .location-crs{
                        width: 100%;
                        height: 30%;
                        /* height: 100vh; */
                    }
                    .card_location{
                        width: 100%;
                        height: 40vh;
                    }
                    .btn-mid{
                        width: 30%;
                        height: 30%;
                    }
                    .cstore{
                        padding-top: 10%;
                        margin-top: 20%;
                    }
                }
                @media (max-width: 991.98px) { 
                    .teks {
                        margin-top: 80%;
                        font-size: 15px;
                        line-height: 100px;

                 }
                }
                @media (max-width: 1199.98px) { 
                    .teks {
                        margin-top: 10px;
                        font-size: 15px;
                        line-height: 100px;

                 }
                 }
                @media (max-width: 1399.98px) { 
                    .teks {
                        margin-top: 4px;
                        color: red;
                        font-size: 15px;
                        line-height: 100px;
                        
                 }
                 }
                /* new */
                .input-bar {
                    font-size: 15px!important;
                    border-radius: 7px!important;
                }

                .input-bar,
                .input-bar::-webkit-input-placeholder {
                    font-size: 15px;
                    padding-right:10rem;
                }

                ul.pesan {
                    list-style: none; /* Remove HTML bullets */
                    padding: 0;
                    margin: 0;
                }

                li.pesan { 
                    padding-left: 16px; 
                    text-indent: -16px;
                }

                li.pesan::before {
                    content: "-"; /* Insert content that looks like bullets */
                    padding-right: 8px;
                }

                .hidden-section{
                    opacity: 0;
                    filter: blur(5px);
                    transform: translateX(-100%);
                    transition: all 1s;
                }
                .show-section{
                    opacity: 1;
                    filter: blur(0);
                    transform: translateX(0)
                }
                .section-pesan{
                    display:flex;
                }
                .section-pesan2:nth-child(2){
                    transition-delay: 200ms;
                }
                .section-pesan2:nth-child(3){
                    transition-delay: 400ms;
                }
                .section-pesan2:nth-child(4){
                    transition-delay: 600ms;
                }
                .section-pesan2:nth-child(5){
                    transition-delay: 800ms;
                }
                .section-pesan2:nth-child(6){
                    transition-delay: 1000ms;
                }
                .section-pesan2:nth-child(7){
                    transition-delay: 1200ms;
                }
                .section-pesan2:nth-child(8){
                    transition-delay: 1400ms;
                }
            </style>
            
        <div class="main-banner__cekresi">
            <div class="main-banner__cekresi--list cek-lacak">
                <form class="form">
                    <i><img src="{{asset('asset/images/material/ico-lacak.svg')}}"></i> 
                    {{-- <i><img src="{{asset('asset/images/material/ico-lacak.svg')}}"></i>  --}}
                    <div class="input-box">
                        <label class="ip">Lacak Pesanan</label>
                        <input class="input-bar" type="text" placeholder="Masukan nomor pesanan">
                        <a class="button-search button-search-resi"></a>
                    </div>
                </form>
            </div>
            <div class="main-banner__cekresi--list cek-tarif">
               
                <form class="form">
                    <i><img src="{{asset('asset/images/material/ico-cek.svg')}}"></i>
                    {{-- <i><img src="{{asset('asset/images/material/ico-cek.svg')}}"></i> --}}
                    
                    <div class="input-box">
                        <label>Cek Harga</label>
                        <input class="input-bar" type="text" placeholder="Masukan data pesanan">
                        <a class="button-search button-search-resi"></a>
                    </div>
                </form>
            </div>
        </div>
        <div class="main-banner__video vid ">
            <video muted="muted" loop="loop" id="videohome" autoplay="autoplay" playsinline>
                <source src="{{asset('asset/cfind/source/files/video.mp4')}}" type="video/mp4">
                <source src="{{asset('asset/cfind/source/files/video.mp4')}}" type="video/mp4">
             </video>
        </div>
    </section>
</section>

<section id="about" class="section-about">
    <style>
        @media  and (max-width: 350px) {
         .csabout {
            width: 100%; /* Lebar gambar sesuai dengan lebar kontennya */
            height: 100%; /* Mempertahankan aspek rasio gambar */
            max-width: 100%; /* Batas maksimum lebar gambar */
            display: block; /* Menghilangkan whitespace di sekitar gambar */
            margin: 0 auto; /* Pusatkan gambar di dalam kontennya jika perlu */
            }
              
  }
    </style>
    <section class="py-5 py-xl-8">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
              <h1 class="mb-2 display-5 text-center" style="font-family: Montheavy; color: black; font-size: 24px; font-weight: bold; margin-bottom: 20px; text-align: center;">ABOUT US</h1>
            </div>
          </div>
        </div>
    </section>
    
    <div class="container mb-4 pb-4 ">
        <div class="row">
            {{-- <div class="col-lg-3"></div> --}}
            <div class="col-lg-6">

                <div id="carouselExample" class="carousel slide w-100 h-carousel slider" data-ride="carousel">
                    <div class="carousel-inner"> 
                        <div class="carousel-item img-carousel active">
                            <img src="{{asset('asset/images/swiss.jpg')}}" class="d-block w-100 img-fluid"  alt="swiss"> 
                        </div>
                        <div class="carousel-item">
                            <img src=" {{asset('asset/images/top.jpg')}}" class="d-block w-100" alt="top"> 
                        </div>
                        <div class="carousel-item"> 
                            <video id="video1" class="d-block w-100 csabout" controls autoplay muted> 
                                <source src="{{asset('asset/images/video1.mp4')}}" type="video/mp4"> 
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="carousel-item" >
                            <!-- Gunakan tag video untuk video -->
                            <video id="video2" class="d-block w-100 csabout" controls autoplay muted>
                                <!-- Sediakan sumber video -->
                                <source src="{{asset('asset/images/video2.mp4')}}" type="video/mp4">
                                
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <button class="carousel-control-prev center-vertical w-9" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next center-vertical w-9" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-6 teks" style="font-family: Montheavy; color: rgba(0, 0, 0, 0.8);">
                <p class=" text-justify mb-4 text-about">RATHEN merupakan sportwears brand yang berasal dari Bogor, Indonesia. Memulai industri sportwears pada tahun 2014 dengan berfokus pada pembuatan custom jersey sepakbola atau futsal. Berbagai jenis tim, baik dari level korporasi, akademisi, komunitas sepakbola, hingga tim liga futsal profesional telah menjadi bagian perjalanan manis rathen di dunia industri sportwear.</p>
                <p class=" text-justify mb-4 text-about font-light">Hingga akhirnya, Pada tahun 2016, RATHEN dipercaya menjadi penyedia jersey latihan tim nasional Futsal Indonesia. 
                </p>
                <p class=" text-justify mb-4 text-about font-light">Tahun 2020 menjadi langkah awal RATHEN menembus pasar Internasional. Dimulai dari negara di kawasan Asia seperti Timor Leste, bergerak perlahan ke Malaysia, hingga akhirnya Korea Selatan.</p>
                <p class=" text-justify mb-4 text-about font-light">Tidak hanya puas di level Asia, Rathen melanjutkan langkah awal penetrasi ke pasar Eropa melalui negara Swiss hingga dapat memperluas jangkauan ke benua Amerika, tepatnya negara USA. </p>
                <p class=" text-justify mb-4 text-about font-light">Pasar internasional memiliki standar mutu produk yang tinggi.
                    Kami, RATHEN Indonesia, dengan bangga dapat memenuhi persyaratan standar mutu tersebut.
                    </p>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
   

<script>
    $(document).ready(function () {
        // Inisialisasi carousel dengan interval
        $('#carouselExample').carousel({
            interval: 2000
        });

        // Menangani peristiwa slid.bs.carousel
        $('#carouselExample').on('slid.bs.carousel', function (e) {
            // Menghentikan pemutaran otomatis video1 dan video2
            $('#video1')[0].pause();
            $('#video2')[0].pause();

            // Memulai pemutaran video pada slide yang aktif
            var activeIndex = $(this).find('.carousel-item.active').index();
            if (activeIndex === 2) { // Jika slide ketiga (indeks dimulai dari 0)
                $('#video1')[0].play();
            } else if (activeIndex === 3) { // Jika slide keempat
                $('#video2')[0].play();
            }
        });

        // Menangani interaksi pengguna untuk memulai autoplay
        $('#startAutoplay').on('click', function () {
            $('#video1')[0].play();
            $(this).addClass('d-none'); // Menyembunyikan tombol setelah diklik
        });

        // Menambahkan logika untuk menunjukkan tombol setelah slide pertama
        $('#carouselExample').on('slid.bs.carousel', function () {
            var activeIndex = $(this).find('.carousel-item.active').index();
            if (activeIndex === 0) {
                $('#startAutoplay').removeClass('d-none');
            }
        });
    });
</script>    
</section>

<section id="result" class="result" class="mt-4 pt-4">
    
    <section class="py-2 py-xl-4">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
              <h1 class="mb-4 display-5 text-center pt-4 fw-bold" style="font-family: Montheavy; font-size: 24px; text-align: center;">LATEST RESULT</h1>
            </div>
          </div>
        </div>
    </section>
    <div class="container">
        <div class="row center-hori">
            <div class="col-lg-3 m-4">
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CztGkRBv1m2/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#000; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
            </div> 
            
            <div class="col-lg-3 m-4">
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/Czse_c8vlLo/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#000; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
            </div> 
            <div class="col-lg-3 m-4">
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CzsEOnUvMs_/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#000; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
            </div> 
            <div class="col-lg-3 m-4">
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CzqmUt9P5Ks/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#000; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
            </div> 
            <div class="col-lg-3 m-4">
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CzoAeKzvian/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#000; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
            </div> 
            <div class="col-lg-3 m-4">
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CznTMlcP332/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#000; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
            </div> 
        </div>
    </div>

<script async src="//www.instagram.com/embed.js"></script>
</section>
<style>
    .section {
      height: 100vh;
      /* Style for each section */
    }

    #progress-bar {
        position: fixed;
      top: 0;
      left: 0;
      width: 4px;
      height: 100%;
      background-color: #00f;
      z-index: 999;
    }
</style>
<div id="progress-container">
    {{-- <div id="progress-bar"></div>  --}}
    <section id="order">
        <section class="py-5 py-xl-8">
            <div class="container">
              <div class="row justify-content-md-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                  <h1 class="mb-4 display-5 text-center" style="font-family: Montheavy; color: black; font-size: 22px; font-weight: bold; margin-bottom: 20px; text-align: center;">CARA PEMESANAN</h1>
                </div>
              </div>
            </div>
            <div class="container overflow-hidden">
                <div class="row mb-4 gy-5 section-pesan">
                    <div class="col-sm-6 col-lg-4 section-pesan2 hidden-section" id="section1">
                        <div class="text-center px-xl-2">
                            <h1 class='bx bx-cart'></h1>
                            <h6 class="m-2" style=" font-size: 18px; color: black; font-weight: bold; margin-bottom: 15px;">1. MINIMUM ORDER QUANTITY (MOQ)</h6>
                            <ul class="pesan">
                                <li class="m-0 text-secondary text-justify pesan" style=" font-size:12px;  color:rgba(0, 0, 0, 0.75);">STADIUM Version: MOQ 12 pcs</li>
                                <li class="m-0 text-secondary text-justify pesan" style=" font-size:12px;  color:rgba(0, 0, 0, 0.75);">PRO Version: MOQ 24 pcs</li>
                                <li class="m-0 text-secondary text-justify pesan" style=" font-size:12px;  color:rgba(0, 0, 0, 0.75);">PRO+ Version: MOQ 24 pcs</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 section-pesan2 hidden-section" id="section2">
                        <div class="text-center px-xl-2">
                            <h1 class='bx bx-desktop'></h1>
                            <h6 class="m-2"style=" font-size: 18px; color: black; font-weight: bold;  margin-bottom: 20px;">2. DESIGN</h6>
                            <ul class="pesan">
                                <li class="m-0 text-secondary text-justify pesan" style=" font-size:12px;  color:rgba(0, 0, 0, 0.75);">Kirim design via whatsapp atau email</li>
                                <li class="m-0 text-secondary text-justify pesan" style=" font-size:12px;  color:rgba(0, 0, 0, 0.75);">Belum punya design?</li>
                                <li class="m-0 text-secondary text-justify pesan" style=" font-size:12px;  color:rgba(0, 0, 0, 0.75);">Tim kami bisa bantu buatkan 3D design nya cukup dengan membayar<strong> Komitmen FEE </strong> sebesar Rp.  <strong>500,000 </strong>  <em>(biaya ini termasuk ke dalam total biaya produksi sehingga setara dengan free design) </em></li>
                                <li class="m-0 text-secondary text-justify pesan" style=" font-size:12px;  color:rgba(0, 0, 0, 0.75);">Revisi minor design 3x</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 section-pesan2 hidden-section" id="section3">
                        <div class="text-center px-xl-2">
                            <h1 class='bx bx-wallet'></h1>
                            <h6 class="m-2" style=" font-size: 18px; color: black; font-weight: bold;  margin-bottom: 20px;">3. PEMBAYARAN DP</h6>
                            <ul class="pesan">
                                <li class="m-0 text-secondary text-justify pesan" style=" font-size:12px;  color:rgba(0, 0, 0, 0.75);">Pembayaran DP  <strong> PRODUKSI Min. 50%</strong> dari total biaya untuk masuk antrian produksi melalui Rekening resmi kami <span style="color:red;">BCA 0060435898 A.n R Esa Pangersa Gusti</span></li>
                                <li class="m-0 text-secondary text-justify pesan" style=" font-size:12px;  color:rgba(0, 0, 0, 0.75);">Pembayaran juga bisa dilakukan secara tunai di store.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 section-pesan2 hidden-section" id="section4">
                        <div class="text-center px-xl-2">
                            <h1 class='bx bxs-t-shirt'></h1>
                            <h6 class="m-2" style=" font-size: 18px; color: black; font-weight: bold;  margin-bottom: 20px;">4. DATA PRODUKSI</h5>
                            <ul class="pesan">
                                <li class="m-0 text-secondary text-justify pesan" style=" font-size:12px;  color:rgba(0, 0, 0, 0.75);">Berisi: <strong> Nama/No Punggung/Ukuran  </strong>diisi berurutan mulai dari size paling kecil atau bisa menggunakan template FORM DATA kami, klik link :  <span style="color: #1890fd; text-decoration: underline;
                                ">form order </span></li>
                            </ul>
                            <!-- <p class="m-0 text-secondary text-justify" style=" font-size:12px;  color:rgba(0, 0, 0, 0.75);">
                                - Berisi: <strong> Nama/No Punggung/Ukuran  </strong>diisi berurutan mulai dari size paling kecil atau bisa menggunakan template FORM DATA kami, klik link :  <span style="color: #1890fd;     text-decoration: underline;
                                ">form order </span> </p> -->
                                <!-- {{-- <a href="https://shorturl.at/mpO36" style="color: #1890fd;">https://shorturl.at/mpO36</a></p> --}} -->
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 section-pesan2 hidden-section" id="section5">
                        <div class="text-center px-xl-2">
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-5-circle-fill text-primary mb-4" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.006 4.158c1.74 0 2.924-1.119 2.924-2.806 0-1.641-1.178-2.584-2.56-2.584-.897 0-1.442.421-1.612.68h-.064l.193-2.344h3.621V4.002H5.791L5.445 8.63h1.149c.193-.358.668-.809 1.435-.809.85 0 1.582.604 1.582 1.57 0 1.085-.779 1.682-1.57 1.682-.697 0-1.389-.31-1.53-1.031H5.276c.065 1.213 1.149 2.115 2.72 2.115Z" />
                            </svg> --}}
                            <h1 class='bx bxs-time-five'></h1>
                            {{-- <i class='bx bxs-time-five'></i> --}}
                
                            <h6 class="m-2" style=" font-size: 18px; color: black; font-weight: bold;  margin-bottom: 20px;">5. WAKTU PRODUKSI</h6>
                            <ul class="pesan">
                                <li class="m-0 text-secondary text-justify pesan" style=" font-size:12px;  color:rgba(0, 0, 0, 0.75);"><strong>Non Printing</strong>: 2-3 Minggu</li>
                                <li class="m-0 text-secondary text-justify pesan" style=" font-size:12px;  color:rgba(0, 0, 0, 0.75);"><strong>Printing</strong>: 3-4 Minggu</li>
                                <li class="m-0 text-secondary text-justify pesan" style=" font-size:12px;  color:rgba(0, 0, 0, 0.75);"><strong>PRO dan PRO+ Version</strong>: 3-4 Minggu</li>
                                <li class="m-0 text-secondary text-justify pesan" style=" font-size:12px;  color:rgba(0, 0, 0, 0.75);">Sejak pembayaran DP 50 <strong>%</strong> kami terimaApabila selesai lebih cepat, kami akan informasikan kepada Anda.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 section-pesan2 hidden-section" id="section6">
                        <div class="text-center px-xl-2"> 
                            <h1 class='bx bx-money-withdraw'></h1>
                            <h6 class="m-2" style=" font-size: 18px; color: black; font-weight: bold;  margin-bottom: 20px;">6. PELUNASAN + PENGAMBILAN</h6>
                            <ul class="pesan">
                                <li class="m-0 text-secondary text-justify pesan" style=" font-size:12px;  color:rgba(0, 0, 0, 0.75);">Pelunasan dilakukan ketika jersey sudah selesai produksi. Pengiriman paling cepat 1-3 hari sejak pelunasan dibayarkan.</li>
                                <li class="m-0 text-secondary text-justify pesan" style=" font-size:12px;  color:rgba(0, 0, 0, 0.75);">Mekanisme pengambilan jersey  <span style="font-weight: bold; text-decoration: underline;">self-pickup,</span> bisa langsung datang ke offline store kami.</li>
                                <li class="m-0 text-secondary text-justify pesan" style=" font-size:12px;  color:rgba(0, 0, 0, 0.75);">Mekanisme pengiriman, bisa melalui: <strong>JNE/JNT/Driver online/jasa pengiriman lainnya</strong><em style="color: red; font-weight: bold;"> (Ongkos kirim di tanggung customer) </em></li>
                            </ul>
                            
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 section-pesan2 hidden-section" id="section7">
                        <div class="text-center px-xl-2">
                            <h1 class='bx bx-receipt'></h1>
                            <h6 class="m-2 text-center" style=" font-size: 18px; color: black; font-weight: bold;  margin-bottom: 20px;">7. GARANSI PELUNASAN</h6>
                            <ul class="pesan">
                                <li class="m-0 text-secondary text-justify " style=" font-size:12px;  color:rgba(0, 0, 0, 0.75);">Segala bentuk kesalahan produksi yang disebabkan oleh tim produksi, akan kami perbaiki sebagai bentuk komitmen kami untuk selalu memberikan pelayanan yang terbaik untuk customer. Hal ini tidak berlaku apabila kelalaian atau kerusakan disebabkan oleh customer.</li>
                            </ul>
                            <!-- <p class="m-0 text-secondary text-justify align-left" style=" font-size:12px;  color:rgba(0, 0, 0, 0.75);"> Segala bentuk kesalahan produksi yang disebabkan oleh tim produksi, akan kami perbaiki sebagai bentuk komitmen kami untuk selalu memberikan pelayanan yang terbaik untuk customer. Hal ini tidak berlaku apabila kelalaian atau kerusakan disebabkan oleh customer.
                            </p> -->
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 section-pesan2 hidden-section" id="section8">
                        <div class="text-center px-xl-2"> 
                            <h1 class='bx bxs-star'></h1>
                            <h6 class="m-2" style=" font-size: 18px; color: black; font-weight: bold;  margin-bottom: 20px;">8. PUAS & ORDER LAGI</h6>
                            <ul class="pesan">
                                <li class="m-0 text-secondary text-justify " style=" font-size:12px;  color:rgba(0, 0, 0, 0.75);">Menyebar kebaikan dengan berbagi informasi kepada rekan-rekan terdekat. Dapatkan berbagai merchandise unik sebagai refferal benefits.</li>
                            </ul>
                            <!-- <p class="m-0 text-secondary text-justify" style=" font-size:12px;  color:rgba(0, 0, 0, 0.75);">Menyebar kebaikan dengan berbagi informasi kepada rekan-rekan terdekat. Dapatkan berbagai merchandise unik sebagai refferal benefits.</p>       -->
                        </div>
                    </div>
                </div>
             </div>
        </section>
    </section> 
    <!-- </div> -->
</div>
<script>
// script.js
document.addEventListener('DOMContentLoaded', function () {
    var progressBar = document.getElementById('progress-bar');
    var sections = document.querySelectorAll('.section');

    window.addEventListener('scroll', function () {
        var scrollPosition = window.scrollY;
        var windowHeight = window.innerHeight;
        var documentHeight = document.documentElement.scrollHeight;

        var progress = (scrollPosition / (documentHeight - windowHeight)) * 100;
        progressBar.style.height = progress + '%';
    });
});
     </script>
<style>
.button {
    /* padding: 100px 100px 100px 100px; */
    position: relative;
    &--left {
          left: 50%;
          top: 50%;
          transform: translateX(-400px);
        }
    &--right {
          right: 50%;
          top: 50%;
          transform: translateX(50px);
        }
      }
</style>
<style>
    .level{
    text-align: left ;
    font-family: Montheavy; 
    font-weight: bold;
    }
    .btn-dark-transparent {
        background-color: transparent;
        color: #000;
        border: 1px solid black;
        transition: background-color 0.3s ease-in-out;
        margin-right: 5%; /* Jarak kanan antara tombol dan elemen di sebelah kanan */
         /* margin-bottom: 10px; */
         width: 150px; /* Lebar tombol */
         height: 40px;
         margin-left: 7%
         
    }
    .harga{
        font-weight: bold;
        text-align: left ;
        color: red;
        font-family: Montheavy; 
        margin-left: auto;
        font-size: 20px;


    }

    .btn-dark-transparent:hover {
        background-color: gray;
        color: white;
    }
    .btn-dark-transparent:focus{
        background-color: #000;
        color: #fff

    }
    .cek-harga{
        width: 200px;
        margin-top: 10px;
        height: 40px;
        border-radius: 14px;
        padding-top: 3%;
    }
    </style>
{{-- <section id="pricelist">
    <section class="py-5 py-xl-8">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
              <h1 class="mb-4 display-5 text-center" style="font-family: Montheavy; color:black; font-size: 24px; font-weight: bold; margin-bottom: 20px; text-align: center;">PRICE LIST</h1> --}}
                {{-- <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle"> --}}
            {{-- </div>
          </div>
        </div>
        <div class="container" >
            <div class="row">
                <div class="col-lg-12">
                            <!-- Produk Gambar -->
                    <div class="image-container justify-content-md-center">
                        <div class="image-wrapper" data-position="1">
                            <img src="{{asset('asset/images/image1.jpg')}}" alt="Product 1" class="clickable-image" data-price="100000">
                            <p class="image-text" style="border: none;">NON - PRINT </p>
                        </div>
                        <div class="image-wrapper" data-position="2">
                            <img src="{{asset('asset/images/image1.jpg')}}" alt="Product 2" class="clickable-image" data-price="150000">
                            <p class="image-text" style="border: none;">FULL- PRINT </p>
                        </div>
                        <div class="image-wrapper" data-position="3">
                            <img src="{{asset('asset/images/image1.jpg')}}" alt="Product 3" class="clickable-image" data-price="200000">
                            <p class="image-text" style="border: none;">HALF - PRINT </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-4">
                        <label for="nama">Level Kualitas:</label>
                </div>
            </div>
        </div>
        <div class="container text-center mt-2">
            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-dark-transparent total1" id="fans" data-multiplier="1">FANS</button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-dark-transparent total2" id="stadium" data-multiplier="1.5">STADIUM</button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-dark-transparent total3" id="pro" data-multiplier="2">PRO</button>
                </div>
            </div>
        </div>
        <div class="container text-center mt-2">
            <div class="row">
                <div class="col">
                    <p class="level">Harga :</p>
                    <h6 class="harga">IDR <span class="bg-dangger" id="displayText">0</span></h6>
                </div>
                <div class="col">
                </div>
                <div class="col">
                    <a href="/form-1"><button type="button"  class="cek-harga btn btn-danger">Cek Total Harga</button></a>
                </div>
            </div>
        </div>

    </div>
    </section> --}}
    <script src="{{ asset('asset/js/script.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var selectedImage;
            var selectedQuality = 1;  // Default multiplier
    
            // Event listener untuk gambar yang diklik
            document.querySelectorAll('.clickable-image').forEach(function (img) {
                img.addEventListener('click', function () {
                    // Hapus kelas selected dari semua gambar
                    document.querySelectorAll('.clickable-image').forEach(function (img) {
                        img.classList.remove('selected');
                    });
    
                    // Tambahkan kelas selected pada gambar yang dipilih
                    this.classList.add('selected');
                    selectedImage = this;
                });
            });
    
            // Event listener untuk tombol kualitas
            document.querySelectorAll('.btn-dark-transparent').forEach(function (btn) {
                btn.addEventListener('click', function () {
                    // Set multiplier berdasarkan data-multiplier pada tombol
                    selectedQuality = parseFloat(this.getAttribute('data-multiplier'));
                });
            });
    
            // Event listener untuk tombol cek total harga
            document.querySelector('.total1').addEventListener('click', function () {
                // Cek apakah gambar dan kualitas sudah dipilih
                if (selectedImage && selectedQuality) {
                    // Ambil harga dari data-price pada gambar yang dipilih
                    var hargaProduk = parseFloat(selectedImage.getAttribute('data-price'));
    
                    // Hitung total harga dengan mengalikan harga produk dengan multiplier kualitas
                    var totalHarga = hargaProduk * selectedQuality;
    
                    // Tampilkan total harga pada elemen dengan ID displayText
                    document.getElementById('displayText').innerText = totalHarga.toLocaleString('id-ID');
                } else {
                    // Tampilkan pesan jika gambar atau kualitas belum dipilih
                    alert('Pilih gambar dan kualitas terlebih dahulu.');
                }
            });
            document.querySelector('.total2').addEventListener('click', function () {
                // Cek apakah gambar dan kualitas sudah dipilih
                if (selectedImage && selectedQuality) {
                    // Ambil harga dari data-price pada gambar yang dipilih
                    var hargaProduk = parseFloat(selectedImage.getAttribute('data-price'));
    
                    // Hitung total harga dengan mengalikan harga produk dengan multiplier kualitas
                    var totalHarga = hargaProduk * selectedQuality;
    
                    // Tampilkan total harga pada elemen dengan ID displayText
                    document.getElementById('displayText').innerText = totalHarga.toLocaleString('id-ID');
                } else {
                    // Tampilkan pesan jika gambar atau kualitas belum dipilih
                    alert('Pilih gambar dan kualitas terlebih dahulu.');
                }
            });
            document.querySelector('.total3').addEventListener('click', function () {
                // Cek apakah gambar dan kualitas sudah dipilih
                if (selectedImage && selectedQuality) {
                    // Ambil harga dari data-price pada gambar yang dipilih
                    var hargaProduk = parseFloat(selectedImage.getAttribute('data-price'));
    
                    // Hitung total harga dengan mengalikan harga produk dengan multiplier kualitas
                    var totalHarga = hargaProduk * selectedQuality;
    
                    // Tampilkan total harga pada elemen dengan ID displayText
                    document.getElementById('displayText').innerText = totalHarga.toLocaleString('id-ID');
                } else {
                    // Tampilkan pesan jika gambar atau kualitas belum dipilih
                    alert('Pilih gambar dan kualitas terlebih dahulu.');
                }
            });
        });
    </script>

</section>
<section id="location">
    <style>
        .store{
            font-family: 'Montheavy'; 
            color: #1890fd;
            font-weight: bold;
            text-align: center;
            position: center;
            font-size: 18px;
        }
        .addres{
            font-family: 'Montheavy'; 
            font-weight: bold;
            text-align: center;
            position: center;
            font-size: 12px;
        }
        
        .img_location{
            width: 100%;
            height: 512px;
        }.l-carousel{
            width: 100%;
            height: 100%;

        }
    </style>
    <body>
        <br>
        <div style="font-family: Montheavy; color: black; font-size: 24px; font-weight: bold; margin-bottom: 20px; text-align: center; ">
            LOCATION
        </div>
    <div class="container text-center">
        <div class="row center-hori">
            <div class="col-lg-5 card_location m-4">
                <div class="img_location ">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.4343833806684!2d106.77431907418564!3d-6.5928088934009095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c57a439b19c9%3A0x4a05cc1ee48848ba!2sRATHEN%20Store%20-%20Sportwears%20Outlet!5e0!3m2!1sid!2sid!4v1700127350226!5m2!1sid!2sid" allowfullscreen class="img_location" style="500px"></iframe>
                </div>
            </div>
            <div class="col-lg-5 m-4">
        
                <div id="carouselExample" class="carousel slide w-100 h-carousel slide"  data-ride="carousel">
                    <div class="carousel-inner ">
                        
                        <div class="carousel-item img-carousel active">
                            <img src="{{asset('asset/images/location/f1.JPG')}}" class="-block  w-100 img-fluid" alt="swiss">
                        </div>
                        <div class="carousel-item">
                            <img src=" {{asset('asset/images/location/F2a.JPG')}}" class="d-block w-100" alt="top">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('asset/images/location/F5.JPG')}}" class="l-carousel" alt="swiss">
                        </div>
                        <div class="carousel-item" >
                            <img src="{{asset('asset/images/location/F7.JPG')}}" class="l-carousel" alt="swiss">
                            </video>
                        </div>
                        <div class="carousel-item" >
                            <img src="{{asset('asset/images/location/F8.JPG')}}" class="l-carousel" alt="swiss">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row m-4">
            <div class="col-lg-12" >
                <p class="store">RATHEN STORE </p>
                <p class="addres"> Ruko Sentra Gunungbatu<br>Jl. Mayjen Ishak Djuarsa no. 167B<br>Bogor 16118 </p>
            </div>
        </div>
    </div>
    
    

</section>

<section id="contact" >
<footer class="wp">
    <div class="container frame ">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="contact-title"> stay connected <br> with us </h1>
            </div>
          </div>
            <div class="row sosmed">
                <div class="col-lg-2"></div>
                    <a href="https://wa.me/6289611081988?text=halo%20RATHEN..%20Saya%20ingin%20membuat%20custom%20jersey" target="_blank" class="btn-mid"><img src="asset/images/whatsapp_new.png" class="icon" width="50%" alt="wa"><h5>Whatsapp</h5></a>
                    <a href="https://shopee.co.id/rathen.id" target="_blank" class="btn-mid"><img src="asset/images/SHOPEE.png" class="icon" width="50%" alt="wa"><h5>Shopee</h5></a>
                    <a href="https://www.tokopedia.com/rathenid" target="_blank" class="btn-mid"><img src="asset/images/tokped_new.png" class="icon" width="50%" alt="wa"><h5>Tokopedia</h5></a>
                <div class="col-lg-2"></div>
            </div>
            <div class="row sosmed">
                <div class="container-sosmed">
                    <a href="https://www.instagram.com/rathen.apparel/" target="_blank" ><img src="asset/images/ig-biru.png" class="btn-sosmed" alt="wa"></a>
                    <a href="mailto:rathen.apparel@gmail.com" target="_blank" class="emai"><img src="asset/images/mail.png" class="btn-sosmed" alt="wa"></a>
                    <p class="footer">copyright &copy; rathen indonesia 2024</p>
                </div>
            </div>
    </div>
</footer>

</section>

@endsection
