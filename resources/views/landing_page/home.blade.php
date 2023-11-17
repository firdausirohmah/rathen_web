@extends('layout.landingpage')

@section('content')
    <style>
        a:hover{
            color: red;
        },
    </style>
<section style="overflow: hidden;">
    <section class="main-banner">
        <div class="main-banner__logo">
            <img src="asset/cfind/source/images/rathen.png" alt="">
        </div>
        {{--  --}}
        <div class="main-banner__cekresi">
            <div class="main-banner__cekresi--list cek-lacak">
                <a class="form button-search"  href="{{ url('/page-costum') }}">
                    <i><img src="asset/images/icon baju - biru.png" style="width : 100%;"></i>
                    <div class="input-box" >
                        <h5 class="item-center jersey">COSTUM JERSEY</h5>
                        {{-- <input type="text" placeholder="Masukkan nomor pesanan" name="pesanan" required> --}}
                        {{-- <input type="submit" class="button-search" placeholder="COSTUM JARSEY"> --}}
                        {{-- <small>*Beri tanda koma jika lebih dari 1 resi</small> --}}
                    </div>
                </a>
            </div>
            <div class="main-banner__cekresi--list cek-tarif">
                <a class="form button-search"  href="{{ url('/page-costum') }}">
                    <i><img src="asset/images/icon baju - ungu.png"></i>
                    <div class="input-box">
                        <h5 class="item-center jersey">SPORTWEARS</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="main-banner__video">
            <video muted="muted" loop="loop" id="videohome" autoplay="autoplay" playsinline>
                <source src="asset/cfind/source/files/video.mp4" type="video/mp4">
                {{-- <source src="asset/cfind/source/files/hugo-papua-15-website.mp4" type="video/mp4"> --}}
                {{-- <source src="asset/cfind/source/files/hugo-papua-15-website.webm" type="video/webm"> --}}
            </video>
        </div>
    </section>

   


            
@endsection

