@extends('layout.landingpage')

@section('content')
{{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="asset/css/styles.css">
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
<!-- <link id="pagestyle" href="asset/admin/css/soft-ui-dashboard.  css?v=1.0.3" rel="stylesheet" /> -->
<section id="home" class="section-home" style="overflow: hidden;">
 
    <section class="main-banner">
        <div class="main-banner__logo">
            <img src="{{asset('uploads').'/'.(isset($logo->filename)?$logo->filename:'')}}" class="rounded mx-auto d-block" alt="">
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
            background-image: url("{{asset('uploads/'.(isset($footer_image->filename)?$footer_image->filename: ''))}}");
            height: 800px;
            background-size: cover;
            -o-object-position: center;
            object-position: center;
            /* transform: scale(1.5); */
            width: 100%;
            background-color: black;

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
@media only screen and (max-width:600px) {
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
    .carousel-item{
        height: 18rem!important;
    }
    .carousel-item.active{
        height: 18rem!important;
    }
    .py-5{
        padding-top: 2rem !important;
        padding-bottom: 2rem !important;
    }
    .mb0-mobile{
        margin-bottom: unset!important;
    }
    .mb2-mobile{
        margin: 0 0 2rem 0!important;
    }
    .mb7-mobile{
        margin: 0 0 7rem 0!important;
    }
    .pt0-mobile{
        padding-top:unset!important;
    }
    .p0-mobile{
        padding:unset!important;
    }
    .center-hori{
        display: block;
        margin-left: auto!important;
        margin-right: auto!important;
    }
    .pb2-mobile{
        padding-bottom:1rem!important;
    }
    .img_location{
        width: 100%;
        height: 340px!important;
    }
    .dis-icon{
        display: -webkit-inline-box;
    }
    .icon-mobile{
        width:27%!important;
        height: 85px!important;
        padding: 0.5rem 0 0.5rem 0;
        
    }
    .icon-mobile h5{
        font-size:0.875rem!important;
        font-weight:500!important;
        padding-top:0!important;
    }
    .icon-mobile img{
        padding-top:0!important;
    }
    .footer-mobile{
        height:500px;
        .frame{
            height:30rem;
        }
    }
}
@media only screen and (min-width: 768px) and (max-width: 1024px) {
    .container{
        width:36rem;
    }
    .kurir-bt{
        padding: 0 1rem 7rem 0;
    }
    #contact .footer-mobile{
        height:unset;
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
                        color: #000;
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
                    transform: translateY(-100%);
                    transition: all 1s;
                }
                .show-section{
                    opacity: 1;
                    filter: blur(0);
                    transform: translateY(0);
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
                <div class="result-box result-harga">
                    
                </div>
                <form class="form">
                    <i><img src="{{asset('asset/images/material/ico-cek.svg')}}"></i>
                    {{-- <i><img src="{{asset('asset/images/material/ico-cek.svg')}}"></i> --}}
                    
                    <div class="input-box">
                        <label>Cek Harga</label>
                        <input class="input-bar" id="input-harga" autocomplete="off" type="text" placeholder="Masukan data pesanan">
                        <a class="button-search button-search-resi"></a>
                    </div>
                </form>
            </div>
            
        </div>
        
        <div class="main-banner__video vid ">
            <video muted="muted" loop="loop" id="videohome" autoplay="autoplay" playsinline>
                <source src="{{asset('uploads').'/'.(isset($header_banner->filename)?$header_banner->filename:'')}}" type="video/mp4">
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
          <div class="row center-hori">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
              <h1 class="mb-2 mb0-mobile display-5 text-center" style="font-family: Montheavy; color: black; font-size: 24px; font-weight: bold; margin-bottom: 20px; text-align: center;">ABOUT US</h1>
            </div>
          </div>
        </div>
    </section>
    
    <div class="container pb2-mobile pb-3">
        <div class="row center-hori">
            {{-- <div class="col-lg-3"></div> --}}
            <div class="col-lg-6">

                <div id="carouselExample" class="carousel slide w-100 h-carousel slider" data-ride="carousel">
                    <div class="carousel-inner"> 
                        @foreach($about_us_media as $index => $data)
                            @if($data['type'] == 'video')
                            <div class="carousel-item {{ $index === 0 ? ' active' : '' }}"> 
                            <video id="video1" class="d-block w-100 csabout" controls autoplay muted> 
                                    <source src="{{asset('/uploads').'/' .$data['filename']}}" type="video/mp4"> 
                                    Your browser does not support the video tag.
                            </video>
                            </div>
                            @else
                        
                            <div class="carousel-item img-carousel {{ $index === 0 ? ' active' : '' }}">
                                <img src="{{asset('/uploads').'/' .$data['filename']}}" class="d-block w-100 img-fluid"  alt="swiss"> 
                            </div>
                            @endif
                        @endforeach
                        
<!--                         
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
                            Gunakan tag video untuk video -->
                            <!-- <video id="video2" class="d-block w-100 csabout" controls autoplay muted>
                                 Sediakan sumber video
                                <source src="{{asset('asset/images/video2.mp4')}}" type="video/mp4">
                                
                                Your browser does not support the video tag.
                            </video>
                        </div> -->
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
            <div class="col-lg-6 teks" style="text-align:justify">
                {!!$about_us->description!!}
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
    
    <section class="pt-2 py-xl-4">
        <div class="container">
          <div class="row center-hori">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
              <h1 class="mb-4 display-5 text-center pt-4 fw-bold pt0-mobile " style="font-family: Montheavy; font-size: 24px; text-align: center;">LATEST RESULT</h1>
            </div>
          </div>
        </div>
    </section>
    <div class="container">
        <div class="col-lg-12 mb-5">
            <iframe src='https://9dd6b738c9454a42b64822c62423e89e.elf.site' width='100%' frameborder='0' style="height:960px; overflow:hidden" class="ig-frame" scrolling="no"></iframe>
        </div>
        
        {{--<div class="row center-hori">
            @foreach($instagram as $data)
            <div class="col-lg-3 m-4 mb2-mobile">
                <blockquote class="instagram-media" data-instgrm-permalink="{{$data->link}}/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#000; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
            </div> 
            @endforeach
            
        </div>--}}
    </div>

    <style>
        .instagram-media-children {
            max-height: 500px;
            overflow: hidden;
        }
        .instagram-media-footer {
            display: none !important;
        }
        .instagram-media-header {
            display: none !important;
        }
    </style>
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
        <section class="py-5 py-xl-8 p0-mobile">
            <div class="container">
              <div class="row center-hori">
                <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                  <h1 class="mb-5 display-5 text-center" style="font-family: Montheavy; color: black; font-size: 22px; font-weight: bold; margin-bottom: 20px; text-align: center;">CARA PEMESANAN</h1>
                </div>
              </div>
            </div>

            <div class="containerFlow">
                <div class="js-timeline ag-timeline">
                
                        <!-- Progress Bar Line Code-->
                    <div class="js-timeline_line ag-timeline_line">
                    <div class="js-timeline_line-progress ag-timeline_line-progress"></div>
                    </div>
                    
                    <div class="ag-timeline_list">
                        @foreach($order_step as $index => $data)
                        @if(($index + 1)%2 == 0)
                    
                        <!-- Left Batman Box -->
                    <div class="js-timeline_item ag-timeline_item">
                        <div class="ag-timeline-card_box">
                        <!-- Name Code-->
                        <div class="ag-timeline-card_meta-box">
                            <div class="ag-timeline-card_meta">{{($index + 1).' '.$data['name']}}</div>
                        </div>
                        
                                <!-- Number Code-->
                        <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                            <div class="ag-timeline-card_point">
                            <h2 class="bx {{$data['icon']}}"></h2>
                            </div>
                        </div>
                        </div>
                        
                            <!-- Image Code-->
                        <div class="ag-timeline-card_item">
                        <div class="ag-timeline-card_inner">
                            <div class="ag-timeline-card_img-box text-white text-justify">
                            {!!$data['description']!!}
                            </div>
                        </div>
                        <div class="ag-timeline-card_arrow"></div>
                        </div>
                    </div>

                    
                    @else

                        <!-- Right Deathstroke Box -->
                        <div class="js-timeline_item ag-timeline_item">
                        <div class="ag-timeline-card_box">
                                <!-- Number Code-->
                        <div class="js-timeline-card_point-box ag-timeline-card_point-box">
                            <div class="ag-timeline-card_point">
                            <!-- <h2 class="bx bx-shop"></h2> -->
                            <h2 class="bx {{$data['icon']}}"></h2>
                            </div>
                        </div>
                        
                                <!-- Name Code-->
                        <div class="ag-timeline-card_meta-box">
                            <div class="ag-timeline-card_meta">{{($index + 1).' '.$data['name']}}</div>
                        </div>
                        </div>
                        
                            <!-- Image Code-->
                        <div class="ag-timeline-card_item">
                        <div class="ag-timeline-card_inner">
                            <div class="ag-timeline-card_img-box text-white text-justify">
                            {!!$data['description']!!}
                            </div>
                        </div>
                        <div class="ag-timeline-card_arrow"></div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                        
                        
                   

                    </div>
                </div>
            </div>            
        </section>
    </section> 
    <!-- </div> -->
    <section id="price-list" class="pb-5 py-xl-8 p0-mobile">
        
            <div class="container">
              <div class="row center-hori">
                <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                  <h1 class="display-5 text-center" style="font-family: Montheavy; color: black; font-size: 22px; font-weight: bold; margin-bottom: 20px; text-align: center;">PRICE LIST</h1>
                </div>
              </div>
            </div>

            <div class="container-tranding">
                <div class="swiper tranding-slider">
                    <div class="swiper-wrapper">
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <a href="{{ url('/price-list', ['kd_part' => 'non-print']) }}" target="_blank">
                                <img src="{{asset('asset/images/price-list/detail/nonprint/cover.png')}}" class="img-pricelist" alt="nonprint"> 
                            </a>
                        </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <a href="{{ url('/price-list', ['kd_part' => 'half-print']) }}" target="_blank">
                                <img src="{{asset('asset/images/price-list/detail/halfprint/cover.png')}}" class="img-pricelist" alt="nonprint"> 
                            </a>
                        </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <a href="{{ url('/price-list', ['kd_part' => 'full-print']) }}" target="_blank">
                                <img src="{{asset('asset/images/price-list/detail/fullprint/cover.png')}}" class="img-pricelist" alt="nonprint"> 
                            </a>
                        </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <a href="{{ url('/price-list', ['kd_part' => 'pro']) }}" target="_blank">
                                <img src="{{asset('asset/images/price-list/detail/pro/cover.png')}}" class="img-pricelist" alt="nonprint"> 
                            </a>
                        </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <a href="{{ url('/price-list', ['kd_part' => 'pro-plus']) }}" target="_blank">
                                <img src="{{asset('asset/images/price-list/detail/proplus/cover.png')}}" class="img-pricelist" alt="nonprint"> 
                            </a>
                        </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <a href="{{ url('/price-list', ['kd_part' => 'jacket-anthem']) }}" target="_blank">
                                <img src=" {{asset('asset/images/price-list/detail/jacket-anthem/cover.png')}}" class="img-pricelist" alt="jacket-anthem">
                            </a>
                        </div>
                        </div>
                        <!-- Slide-end -->
                        
                    </div>

                    <div class="tranding-slider-control">
                        <div class="swiper-button-prev slider-arrow">
                        <ion-icon name="arrow-back-outline"></ion-icon>
                        </div>
                        <div class="swiper-button-next slider-arrow">
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                        </div>
                        <!-- <div class="swiper-pagination"></div> -->
                    </div>

                </div>
            </div>

    </section> 
    <!-- </div> -->

    <section id="faq" class="py-xl-8 mt-5">
        <div class="container">
            <div class="row center-hori">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                <h1 class="mb-5 display-5 text-center" style="font-family: Montheavy; color: black; font-size: 22px; font-weight: bold; margin-bottom: 20px; text-align: center;">FAQ</h1>
            </div>
            </div>
        </div>

        <div class="containerFlow">
            <section class="accordion">
                @foreach($faq as $index => $data)
                <div class="tab-accordion">
                    <input type="checkbox" name="accordion-1" id="cb_{{($index+1)}}">
                    <label for="cb_{{($index+1)}}" class="tab__label">{{$data->question}}</label>
                    <div class="tab__content">
                    {!!$data->answer!!}
                    </div>
                </div>
                @endforeach
                
            </section>
        </div>
    </section>
     
    <!-- </div> -->
    <section id="clients" class="clients pt-5">
        <div class="container">
            <div class="row center-hori">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                <h1 class="mb-5 display-5 text-center" style="font-family: Montheavy; color: black; font-size: 22px; font-weight: bold; margin-bottom: 20px; text-align: center;">CLIENTS</h1>
            </div>
            </div>
        </div>
        <div class="container">
            
            <div class="company-slider swiper-container pt-3 pb-3">
                <div class="swiper-wrapper align-items-center">
                    
        
                @foreach ($top_image as $data) 
                    <div class="swiper-slide">
                        <img src="{{asset('uploads/'.$data->filename)}}" class="img-client" alt="">
                    </div>
                @endforeach

                </div>
            </div>

            <div class="academy-slider swiper-container pt-5">
                <div class="swiper-wrapper align-items-center">
                    
                @foreach ($buttom_image as $data) 
                    <div class="swiper-slide">
                        <img src="{{asset('uploads/'.$data->filename)}}" class="img-client" alt="">
                    </div>
                @endforeach

                </div>
            </div>
        </div>

    </section>
    
    <!-- End Clients Section -->
</div>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script>
    var TrandingSlider = new Swiper('.tranding-slider', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    slidesPerView: 'auto',
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 200,
        modifier: 2.5,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    autoplay:{
        delay:2500,
        disableOnInteraction: false,
    },
    });
</script>

<!-- Initialize Swiper -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        function initializeSwiper(selector) {
            return new Swiper(selector, {
                direction: 'horizontal',
                loop: true,
                slidesPerView: getSlidesPerView(),
                spaceBetween: 100,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                autoplay:{
                    delay:2500,
                    disableOnInteraction: false,
                },
            });
        }

        initializeSwiper('.company-slider');
        initializeSwiper('.academy-slider');

        window.addEventListener('resize', function(){
            swiper.params.slidesPerView = getSlidesPerView();
            swiper.update();
        });
        function getSlidesPerView() {
            // Check device width and return appropriate slidesPerView
            if (window.innerWidth <= 768) { // For mobile and tablet devices
                return 3;
            } else { // For larger devices
                return 5;
            }
        }
    });
    
    
</script>

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
            // document.querySelector('.total1').addEventListener('click', function () {
            //     // Cek apakah gambar dan kualitas sudah dipilih
            //     if (selectedImage && selectedQuality) {
            //         // Ambil harga dari data-price pada gambar yang dipilih
            //         var hargaProduk = parseFloat(selectedImage.getAttribute('data-price'));
    
            //         // Hitung total harga dengan mengalikan harga produk dengan multiplier kualitas
            //         var totalHarga = hargaProduk * selectedQuality;
    
            //         // Tampilkan total harga pada elemen dengan ID displayText
            //         document.getElementById('displayText').innerText = totalHarga.toLocaleString('id-ID');
            //     } else {
            //         // Tampilkan pesan jika gambar atau kualitas belum dipilih
            //         alert('Pilih gambar dan kualitas terlebih dahulu.');
            //     }
            // });
            // document.querySelector('.total2').addEventListener('click', function () {
            //     // Cek apakah gambar dan kualitas sudah dipilih
            //     if (selectedImage && selectedQuality) {
            //         // Ambil harga dari data-price pada gambar yang dipilih
            //         var hargaProduk = parseFloat(selectedImage.getAttribute('data-price'));
    
            //         // Hitung total harga dengan mengalikan harga produk dengan multiplier kualitas
            //         var totalHarga = hargaProduk * selectedQuality;
    
            //         // Tampilkan total harga pada elemen dengan ID displayText
            //         document.getElementById('displayText').innerText = totalHarga.toLocaleString('id-ID');
            //     } else {
            //         // Tampilkan pesan jika gambar atau kualitas belum dipilih
            //         alert('Pilih gambar dan kualitas terlebih dahulu.');
            //     }
            // });
            // document.querySelector('.total3').addEventListener('click', function () {
            //     // Cek apakah gambar dan kualitas sudah dipilih
            //     if (selectedImage && selectedQuality) {
            //         // Ambil harga dari data-price pada gambar yang dipilih
            //         var hargaProduk = parseFloat(selectedImage.getAttribute('data-price'));
    
            //         // Hitung total harga dengan mengalikan harga produk dengan multiplier kualitas
            //         var totalHarga = hargaProduk * selectedQuality;
    
            //         // Tampilkan total harga pada elemen dengan ID displayText
            //         document.getElementById('displayText').innerText = totalHarga.toLocaleString('id-ID');
            //     } else {
            //         // Tampilkan pesan jika gambar atau kualitas belum dipilih
            //         alert('Pilih gambar dan kualitas terlebih dahulu.');
            //     }
            // });
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
        <div style="font-family: Montheavy; color: black; font-size: 24px; font-weight: bold; margin-bottom: 20px; text-align: center; margin-top:3rem">
            LOCATION
        </div>
    <div class="container text-center">
        <div class="row center-hori">
            <div class="col-lg-5 card_location m-4 mb7-mobile">
                <div class="img_location ">
                {!!(isset($location->iframe_maps)?$location->iframe_maps:'')!!}
                </div>
            </div>
            <div class="col-lg-5 m-4 mb2-mobile">
        
                <div id="carouselExample" class="carousel slide w-100 h-carousel slide"  data-ride="carousel">
                    <div class="carousel-inner ">
                    @foreach($location_carousel as $index => $data)
                            @if($data['type'] == 'video')
                            <div class="carousel-item {{ $index === 0 ? ' active' : '' }}"> 
                            <video id="video1" class="d-block w-100 l-carousel" controls autoplay muted> 
                                    <source src="{{asset('/uploads').'/' .$data['filename']}}" type="video/mp4"> 
                                    Your browser does not support the video tag.
                            </video>
                            </div>
                            @else
                        
                            <div class="carousel-item img-carousel {{ $index === 0 ? ' active' : '' }}">
                                <img src="{{asset('/uploads').'/' .$data['filename']}}" class="d-block w-100 img-fluid"  alt="swiss"> 
                            </div>
                            @endif
                        @endforeach
                        <!-- <div class="carousel-item img-carousel active">
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
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row m-4 center-hori" style="display:unset;">
            <div class="col-lg-12" >
                <p class="store">{{(isset($location->name)?$location->name:'')}} </p>
                <p class="addres">{{(isset($location->address)?$location->address:'')}}</p>
            </div>
        </div>
    </div>
    
    

</section>

<section id="rating">
    
    <div class="text-center">
        <a href="/rating" class="btn btn-dark px-5 mb-5 fs-5" style="padding-bottom:2.5rem">Rate Us</a>
    </div>
    
</section>

<section id="contact" >
<footer class="wp footer-mobile">
    <div class="container frame ">
        <div class="row center-hori">
            <div class="col-lg-12">
                <h1 class="contact-title"> {{$about_us->tagline}} </h1>
            </div>
          </div>
            <div class="row sosmed center-hori dis-icon">
                <div class="col-lg-2"></div>
                    @foreach($link_web_section_1 as $data)
                    <a href="{{$data->link}}" target="_blank" class="btn-mid icon-mobile">
                        <img src="{{asset('uploads/'.$data->media->filename)}}" class="icon" width="50%" alt="wa">
                        <h5>{{$data->name}}</h5>
                    </a>
                    @endforeach
                    <!-- <a href="https://wa.me/6289611081988?text=halo%20RATHEN..%20Saya%20ingin%20membuat%20custom%20jersey" target="_blank" class="btn-mid icon-mobile">
                        <img src="asset/images/whatsapp_new.png" class="icon" width="50%" alt="wa">
                        <h5>Whatsapp</h5>
                    </a>
                    <a href="https://shopee.co.id/rathen.id" target="_blank" class="btn-mid icon-mobile"><img src="asset/images/SHOPEE.png" width="50%" class="icon" alt="wa"><h5>Shopee</h5></a>
                    <a href="https://www.tokopedia.com/rathenid" target="_blank" class="btn-mid icon-mobile"><img src="asset/images/tokped_new.png" width="50%" class="icon" alt="wa"><h5>Tokopedia</h5></a> -->
                <div class="col-lg-2"></div>
            </div>
            <div class="row sosmed center-hori">
                <div class="container-sosmed">
                @foreach($link_web_section_2 as $data)
                    <a href="{{$data->link}}" target="_blank" >
                        <img src="{{asset('uploads/'.$data->media->filename)}}" class="btn-sosmed" alt="{{$data->name}}">
                    </a>
                @endforeach
                    <!-- <a href="https://www.instagram.com/rathen.apparel/" target="_blank" ><img src="asset/images/ig-biru.png" class="btn-sosmed" alt="wa"></a>
                    <a href="mailto:rathen.apparel@gmail.com" target="_blank" class="emai"><img src="asset/images/mail.png" class="btn-sosmed" alt="wa"></a> -->
                    <p class="footer">copyright &copy; {{$about_us->name}} 2024</p>
                </div>
            </div>
    </div>

</footer>

</section>
<script src="{{ asset('asset/js/autocomplete.js') }}"></script>

@endsection
