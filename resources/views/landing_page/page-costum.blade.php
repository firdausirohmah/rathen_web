@extends('layout.landingpage')

@section('content')
<link rel="stylesheet" href="asset/css/styles.css">
<section id="home" style="overflow: hidden;">
    <section class="main-banner">
        <div class="main-banner__logo">
            <img src="{{asset('asset/cfind/source/images/rathen.png')}}" alt="">
            
        </div>
{{--  --}}
        <div class="main-banner__cekresi">
            <div class="main-banner__cekresi--list cek-lacak">
                <a class="form"  href="">
                    <i><img src="{{asset('asset/images/material/ico-lacak.svg')}}"></i> 
                    <div class="input-box" style="margin-top: 10px">
                        <label>Lacak Pesanan</label>
                        <input type="text" placeholder="Masukan nomor pesanan">
                        {{-- <input type="text" placeholder="Masukkan nomor pesanan" name="pesanan" required> --}}
                        {{-- <input type="submit" class="button-search" placeholder="COSTUM JARSEY"> --}}
                        {{-- <small style="text-decoration: none;">*Beri tanda koma jika lebih dari 1 resi</small> --}}
                    </div>
                </a>
            </div>
            <div class="main-banner__cekresi--list cek-tarif">
                {{-- <div class="box-tarif"> --}}
                    {{-- <form action="" id="formResi">
                        <div class="field field-from field-autocomplete">
                            <i class="ico">
                                <img src="{{asset('asset/images/material/ico-cek-map.svg')}}">
                                
                            </i>
                            <input type="text" placeholder="Kategori" autocomplete="off" params="1" required>
                            <input type="hidden" name="origin">
                            <div class="autocomplete-box"></div>
                        </div>
                        <div class="field field-to field-autocomplete">
                            <i class="ico">
                                <img src="{{asset('asset/images/material/ico-cek-to.svg')}}">
                                
                            </i>
                            <input type="text" placeholder="Kualitas"  autocomplete="off" params="2" required>
                            <select name="kualitas" id="">
                                <option value="fans">FANS</option>
                                <option value="stadium">STADIUM</option>
                                <option value="pro">PRO</option>
                            </select>
                            <input type="hidden" name="destination">
                            <div class="autocomplete-box"></div>
                        </div>
                        <div class="field field-weight">
                            <i class="ico">
                                <img src="{{asset('asset/images/material/ico-cek-weight.svg')}">
                                
                            </i>
                            <input type="text" placeholder="Jumlah Pesanan" name="jumlah" required>
                        </div>
                        <div class="field field-button">
                            <button href="shipping-fee.html" class="button button-outline btn-hitung" type="submit">Check</button>
                        </div>
                    </form> --}}
                {{-- </div> --}}
                <form class="form">
                    <i><img src="{{asset('asset/images/material/ico-cek.svg')}}"></i>
                    
                    <div class="input-box">
                        <label>CEK HARGA</label>
                        <input type="text" placeholder="Masukan data pesanan">
                        <a class="button-search button-search-resi"></a>
                    </div>
                </form>
            </div>
        </div>
        <div class="main-banner__video">
            <video muted="muted" loop="loop" id="videohome" autoplay="autoplay" playsinline>
                <source src="{{asset('asset/cfind/source/files/video.mp4')}}" type="video/mp4">
                
                {{-- <source src="asset/cfind/source/files/hugo-papua-15-website.mp4" type="video/mp4"> --}}
                {{-- <source src="asset/cfind/source/files/hugo-papua-15-website.webm" type="video/webm"> --}}
            </video>
        </div>
    </section>
</section>

<section id="about">
    <section class="py-5 py-xl-8">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
              <h1 class="mb-2 display-5 text-center" style="font-family: Montheavy; color: black; font-size: 24px; font-weight: bold; margin-bottom: 20px; text-align: center;">ABOUT US</h1>
                {{-- <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle"> --}}
            </div>
          </div>
        </div>
    </section>
    
    <div class="container">
        <div class="row">
            {{-- <div class="col-lg-3"></div> --}}
            <div class="col-lg-6">

                <div id="carouselExample" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner ">
                        
                        <div class="carousel-item active">
                            <img src="{{asset('asset/images/swiss.jpg')}}" class="d-block w-100" alt="swiss">
                            
                            
                        </div>
                        <div class="carousel-item">
                            <img src=" {{asset('/asset/images/top.jpg')}}" class="d-block w-100" alt="top">
                           
                        </div>
                        <div class="carousel-item">
                            <!-- Gunakan tag video untuk video -->
                            <video id="video1" class="d-block w-50" controls autoplay muted>
                                <!-- Sediakan sumber video -->
                                <source src="{{asset('asset/images/video1.mp4')}}" type="video/mp4">
                                 
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="carousel-item" >
                            <!-- Gunakan tag video untuk video -->
                            <video id="video2" class="d-block w-50" controls autoplay muted>
                                <!-- Sediakan sumber video -->
                                <source src="{{asset('asset/images/video2.mp4')}}" type="video/mp4">
                                
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-lg-6" style="font-family: Montheavy; color: rgba(0, 0, 0, 0.8);">
                <p class=" text-justify">RATHEN merupakan sportwears brand yang berasal dari Bogor, Indonesia. Memulai industri sportwears pada tahun 2014 dengan berfokus pada pembuatan custom jersey sepakbola atau futsal. Berbagai jenis tim, baik dari level korporasi, akademisi, komunitas sepakbola, hingga tim liga futsal profesional telah menjadi bagian perjalanan manis rathen di dunia industri sportwear.</p>
                <p class=" text-justify">Hingga akhirnya, Pada tahun 2016, RATHEN dipercaya menjadi penyedia jersey latihan tim nasional Futsal Indonesia. 
                </p>
                <p class=" text-justify">Tahun 2020 menjadi langkah awal RATHEN menembus pasar Internasional. Dimulai dari negara di kawasan Asia seperti Timor Leste, bergerak perlahan ke Malaysia, hingga akhirnya Korea Selatan.</p>
                <p class=" text-justify">Tidak hanya puas di level Asia, Rathen melanjutkan langkah awal penetrasi ke pasar Eropa melalui negara Swiss hingga dapat memperluas jangkauan ke benua Amerika, tepatnya negara USA. </p>
                <p class=" text-justify">Pasar internasional memiliki standar mutu produk yang tinggi.
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
        });
    </script>

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

<section id="result">
    <section class="py-2 py-xl-4">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
              <h1 class="mb-4 display-5 text-center" style="font-family: Montheavy; padding-top:10%; color: black; font-size: 24px; font-weight: bold; margin-bottom: 20px; text-align: center;">LATEST RESULT</h1>
            </div>
          </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CztGkRBv1m2/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#000; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
            </div> 
            
            <div class="col-lg-4">
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/Czse_c8vlLo/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#000; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
            </div> 
            <div class="col-lg-4">
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CzsEOnUvMs_/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#000; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
            </div> 
            <div class="col-lg-4">
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CzqmUt9P5Ks/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#000; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
            </div> 
            <div class="col-lg-4">
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CzoAeKzvian/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#000; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
            </div> 
            <div class="col-lg-4">
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CznTMlcP332/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#000; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
            </div> 
        </div>
    </div>

<script async src="//www.instagram.com/embed.js"></script>
</section>

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
          <div class="row mb-4 gy-5">
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="text-center px-xl-2">
                <h1 class='bx bx-cart'></h1>
                <h6 class="m-2" style="font-family: 'Mont Heavy', sans-serif; font-size: 18px; color: black; font-weight: bold; margin-bottom: 15px;   ">1. MINIMUM ORDER QUANTITY (MOQ)</h6>
                <p class="m-0 text-secondary text-justify">
                    {{-- - Dapatkan 
                    <span style="font-weight: bold;">500RB untuk kamu yang baru pertama kali pesan jersey</span>
                    di 
                    <span style="font-weight: bold; font-size: smaller;">RATHEN</span><span style="color:red">*)</span>
                    <br><span style="font-weight: bold; color: red; font-family: 'Mont Heavy', sans-serif;"> Note: *) Minimal Order 50 PCS</span><br>
                    <span>- Kami memiliki 3 Level kualitas:</ p> <br>
                    <span> <strong>1. FANS VERSION (Minimun order 12 pcs) - </strong> Kualitas Standar </span><br>
                    <span> <strong>2. STADIUM  VERSION (Minimun order 12 pcs) -  </strong> Kualitas Medium </span> <br>
                    <span> <strong>3. PRO VERSION (Minimun order 24 pcs) -  </strong> Kualitas PRO</span> --}}
                    <style>
						table{
						  width: 80%;
						  align-content: center;
						  text-align: left;
						  border-spacing: 100px; /* Mengatur jarak antar sel menjadi 0 */ 
						  border-collapse: collapse; /* Menggabungkan batas sel */
						}
						tr{
						  margin-top: -10px;
						  padding-top: -10px;
						}
						tr, td {
						padding: 0px; /* Menambahkan padding untuk ruang di dalam sel */
						text-align: left; /* Penataan teks di dalam sel */
					  }
						.col-1{
						   margin-top: auto;
						  width: 40%;
						}
						.col-2{
						  margin-top: auto;
						  width: 1%;
						  font-weight: bold;
						}
						.col-3{
						   margin-top: auto;
						  width: 62%;
						}
					  </style>
					  <div class="container">
						<div class="row">
						  <table style="width: 100%; border:10px; font-size:12px; font-weight: bold;  font-weight:100; color:rgba(0, 0, 0, 0.75);">
							  <tr style="font-weight: bold; ">
								<td class="col-1 fw-bold">STADIUM Version</td>
								<td class="col-2">:</td>
								<td class="col-3 fw-semibold">MOQ 12 pcs</td>
							  </tr> 
							  <tr style="font-weight: bold; ">
								<td class="col-1 fw-semibold">PRO Version</td>
								<td class="col-2">:</td>
								<td class="col-3 fw-semibold">
                                    MOQ 24 pcs
                                    </td>
							  </tr>  
							  <tr style="font-weight: bold; ">
								<td class="col-1 fw-semibold">
                                    PRO+ Version</td>
								<td class="col-2">:</td>
								<td class="col-3 fw-semibold">MOQ 24 pcs</td>
							  </tr> 
							 
						  </table>
                </p>
                        </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="text-center px-xl-2">
                <h1 class='bx bx-desktop'></h1>
                <h6 class="m-2"style="font-family: 'Mont Heavy', sans-serif; color: #1890fd; font-weight: bold; margin-bottom: 20px;  ">2. DESIGN</h6>
                <p class="m-0 text-secondary text-justify">- Wajib kirim final Design</p>
                <P class="m-0 text-secondary text-justify"> - Untuk design printing wajib kirim mentahan file <strong> (.cdr X7 atau Ai) </strong></P>
                <P class="m-0 text-secondary text-justify"> - Design dan fitur mempengaruhi nilai harga</P>
                <p class="m-0 text-secondary text-justify" style="font-family: 'Mont Heavy'; color: #1890fd;">- Belum punya design?</p>
            {{-- WARNA BELUM BERUBAHHHHHHHHHHHHHHHHHHHHHH --}}
                <P class="m-0 text-secondary text-justify"> Bisa melihat referensi design kita di  <strong> Rathen.apparel </strong> atau <strong> Soccerkitdesign </strong></P>
                <P class="m-0 text-secondary text-justify"> - Tim design rathen juga dapat membantu anda membuatkan 3D , cukup dengan melakukan pembayaran <strong> Komitmen FEE </strong>  Rp.  <strong> 500,000 </strong> <em style="color: #1890fd;"> (biaya ini termasuk ke dalam total biaya produksi sehingga setara dengan free design !!! ) </em> </P>
                <P class="m-0 text-secondary text-justify"> - Diperbolehkan untuk revisi design minor 3x  <em style="color: #1890fd;"> (Bukan ganti total design)</em> </P>
    
            </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="text-center px-xl-2">
                <h1 class='bx bx-wallet'></h1>
                <h6 class="m-2" style="font-family: 'Mont Heavy', sans-serif; color: #1890fd;  font-weight: bold; margin-bottom: 20px;  ">3. PEMBAYARAN DP</h6>
                <p class="m-0 text-secondary text-justify">- Setelah Preview 3D pesanan kamu sudah OK, maka kamu wajib membayar tambahan uang DP <strong> PRODUKSI Min. 50% </strong> dari total biaya untuk masuk antrian produksi </p>
                <p class="m-0 text-secondary text-justify">- Rekening resmi kami hanya ada 1 akun Bank <strong> BCA 0060435898 A.n R Esa Pangersa Gusti </strong> </p>
                <p class="m-0 text-secondary text-justify">- Pembayaran juga bisa dilakukan secara tunai di store kami </p>
    
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="text-center px-xl-2">
                <h1 class='bx bxs-t-shirt'></h1>
                <h6 class="m-2" style="font-family: 'Mont Heavy', sans-serif; color: #1890fd;  font-weight: bold; margin-bottom: 20px;  ">4. DATA PRODUKSI</h5>
                <p class="m-0 text-secondary text-justify">
                    - Berisi: <strong> Nama/No Punggung/Ukuran </strong> diisi berurutan mulai dari size paling kecil.
                    Bisa pakai template FORM DATA kami, klik link 
                    <a href="https://shorturl.at/mpO36" style="color: #1890fd;">https://shorturl.at/mpO36</a></p>
                          </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="text-center px-xl-2">
                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-5-circle-fill text-primary mb-4" viewBox="0 0 16 16">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.006 4.158c1.74 0 2.924-1.119 2.924-2.806 0-1.641-1.178-2.584-2.56-2.584-.897 0-1.442.421-1.612.68h-.064l.193-2.344h3.621V4.002H5.791L5.445 8.63h1.149c.193-.358.668-.809 1.435-.809.85 0 1.582.604 1.582 1.57 0 1.085-.779 1.682-1.57 1.682-.697 0-1.389-.31-1.53-1.031H5.276c.065 1.213 1.149 2.115 2.72 2.115Z" />
                </svg> --}}
                <h1 class='bx bxs-time-five'></h1>
                {{-- <i class='bx bxs-time-five'></i> --}}
    
                <h6 class="m-2" style="font-family: 'Mont Heavy', sans-serif; color: #1890fd;  font-weight: bold; margin-bottom: 20px;  ">5. WAKTU PRODUKSI</h6>
                <p class="m-0 text-secondary text-justify">- <strong>  Non Printing</strong>: 2-3 Minggu </p>
                <p class="m-0 text-secondary text-justify">- <strong>  Printing</strong>: 3-4 Minggu </p>
                <p class="m-0 text-secondary text-justify">- <strong> PRO VERSION</strong>: 3-4 Minggu </p> <br>
                <P class="m-0 text-secondary text-justify">Sejak pembayaran DP 50% kami terimaApabila selesai lebih cepat, kami akan informasikan kepada Anda.</P>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-lg-4">
                        <div class="text-center px-xl-2">
                          {{-- <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-5-circle-fill text-primary mb-4" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.006 4.158c1.74 0 2.924-1.119 2.924-2.806 0-1.641-1.178-2.584-2.56-2.584-.897 0-1.442.421-1.612.68h-.064l.193-2.344h3.621V4.002H5.791L5.445 8.63h1.149c.193-.358.668-.809 1.435-.809.85 0 1.582.604 1.582 1.57 0 1.085-.779 1.682-1.57 1.682-.697 0-1.389-.31-1.53-1.031H5.276c.065 1.213 1.149 2.115 2.72 2.115Z" />
                          </svg> --}}
                          <h1 class='bx bx-money-withdraw'></h1>
                          <h6 class="m-2" style="font-family: 'Mont Heavy', sans-serif; color: #1890fd;  font-weight: bold; margin-bottom: 20px;  ">6. PELUNASAN + PENGAMBILAN</h6>
                          <p class="m-0 text-secondary text-justify">  Pelunasan dilakukan ketika jersey polosan sudah selesai dijahit, agar dapat lanjut ke proses finishing (pasang name set, logo, dll ) hal ini guna menghindari penumpukan jersey di gudang yang dapat menyebabkan kerusakan pada jersey  </p>
                          <p class="m-0 text-secondary text-justify">Pesanan jersey kamu akan selesai 2-3 hari kerja sejak pembayaran pelunasan kami terima.                    </p>
                          <p class="m-0 text-secondary text-justify ">Bagi yang mau melakukan pengambilan jersey <strong>  self-pickup</strong>, bisa langsung datang ke offline store kami.  </p>
                          <p class="m-0 text-secondary text-justify">
                            Bagi yang mau di kirim, bisa melalui: 
                            <strong> JNE / JNT / jasa pengiriman lainnya</strong> 
                            bisa langsung datang ke offline store kami. 
                            <em style="color: #bf00ff; font-weight: bold;"> (Ongkos kirim di tanggung customer) </em>
                        </p>
                                </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4">
                          <div class="text-center px-xl-2">
                              {{-- <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-5-circle-fill text-primary  mb-4" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.006 4.158c1.74 0 2.924-1.119 2.924-2.806 0-1.641-1.178-2.584-2.56-2.584-.897 0-1.442.421-1.612.68h-.064l.193-2.344h3.621V4.002H5.791L5.445 8.63h1.149c.193-.358.668-.809 1.435-.809.85 0 1.582.604 1.582 1.57 0 1.085-.779 1.682-1.57 1.682-.697 0-1.389-.31-1.53-1.031H5.276c.065 1.213 1.149 2.115 2.72 2.115Z" />
                              </svg> --}}
                              <h1 class='bx bx-receipt'></h1>
                              <h6 class="m-2 text-center" style="font-family: 'Mont Heavy', sans-serif; color: #1890fd;  font-weight: bold; margin-bottom: 20px;  ">7. GARANSI PELUNASAN</h6>
                              <p class="m-0 text-secondary text-justify align-left"> Segala bentuk kesalahan produksi yang disebabkan oleh tim produksi, akan kami perbaiki sebagai bentuk komitmen kami untuk selalu memberikan pelayanan yang terbaik untuk customer. </p>
                              <br><p class="m-0 text-secondary text-justify">Hal ini tidak berlaku apabila kelalaian atau kerusakan disebabkan oleh customer.</p>
                              
                                    </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="text-center px-xl-2">
                                  {{-- <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-5-circle-fill text-primary mb-4" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.006 4.158c1.74 0 2.924-1.119 2.924-2.806 0-1.641-1.178-2.584-2.56-2.584-.897 0-1.442.421-1.612.68h-.064l.193-2.344h3.621V4.002H5.791L5.445 8.63h1.149c.193-.358.668-.809 1.435-.809.85 0 1.582.604 1.582 1.57 0 1.085-.779 1.682-1.57 1.682-.697 0-1.389-.31-1.53-1.031H5.276c.065 1.213 1.149 2.115 2.72 2.115Z" />
                                  </svg> --}}
                                  <h1 class='bx bxs-star'></h1>
    
                                  <h6 class="m-2" style="font-family: 'Mont Heavy', sans-serif; color: #1890fd;  font-weight: bold; margin-bottom: 20px; ">8. PUAS & ORDER LAGI</h6>
                                  <p class="m-0 text-secondary text-justify">Menyebar kebaikan dengan berbagi informasi kepada rekan-rekan terdekat.</p>
                                  <br><p class="m-0 text-secondary text-justify">Dapatkan berbagai merchandise unik sebagai refferal benefits.</p>
                                  
                                        </div>
                                </div>
                    </div>
                    
                          
    
                  </section>

</section>
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
    margin-left: 5%;
    font-family: Montheavy; 
    font-weight: bold;
    }
    .btn-dark-transparent {
        background-color: transparent;
        color: black;
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
        color: red;
        font-family: Montheavy; 
        margin-left: 5%;
        font-size: 20px;


    }

    .btn-dark-transparent:hover {
        background-color: black;
        color: white;
    }
    .total{
        margin-left: 55%;
        width: 150px; /* Lebar tombol */
         height: 40px;
         background-color: red;
    }
    </style>
<section id="pricelist">
    <section class="py-5 py-xl-8">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
              <h1 class="mb-4 display-5 text-center" style="font-family: Montheavy; color: #1890fd; font-size: 24px; font-weight: bold; margin-bottom: 20px; text-align: center;">PRICE LIST</h1>
                {{-- <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle"> --}}
            </div>
          </div>
        </div>
      <div class="container" >
    <div class="row">
        <div class="col-lg-12">
                    <!-- Produk Gambar -->
            <div class="image-container justify-content-md-center">
                <div class="image-wrapper" data-position="1">
                    <img src="{{asset('asset/images/image1.jpg')}}" alt="Product 1" class="clickable-image" data-price="100000">
                    <p class="image-text" style="border: none;">Product 1</p>
                </div>
                <div class="image-wrapper" data-position="2">
                    <img src="{{asset('asset/images/image1.jpg')}}" alt="Product 2" class="clickable-image" data-price="150000">
                    <p class="image-text" style="border: none;">Product 2</p>
                </div>
                <div class="image-wrapper" data-position="3">
                    <img src="{{asset('asset/images/image1.jpg')}}" alt="Product 3" class="clickable-image" data-price="200000">
                    <p class="image-text" style="border: none;">Product 3</p>
                </div>
            </div>

            <!-- Tombol Kualitas -->
            <button type="button" class="btn btn-dark btn-dark-transparent" id="fans" data-multiplier="1">Fans</button>
            <button type="button" class="btn btn-dark btn-dark-transparent" id="stadium" data-multiplier="1.5">Stadium</button>
            <button type="button" class="btn btn-dark btn-dark-transparent" id="pro" data-multiplier="2">Pro</button>

            <!-- Tombol Cek Total Harga -->
            <button type="button" class="btn btn-danger total">Cek Total Harga</button>

            <!-- Total Harga -->
            <p class="level">Total Harga :</p>
            <h6 class="harga"> IDR <span class="bg-dangger" id="displayText">0</span></h6>
            </div>
        </div>
    </div>
    </section>
    <script src="asset/js/script.js"></script>
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
            document.querySelector('.total').addEventListener('click', function () {
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
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var buttons = document.querySelectorAll('.btn-dark-transparent');
            buttons.forEach(function (button) {
                button.addEventListener('click', function () {
                    // Tambahkan logika atau aksi yang diperlukan saat tombol diklik di sini
                });
            });
        });
    </script>

</section>
<section id="location">
    <style>
        .abc{
            font-weight: bold;
            text-align: center;
            position: center;
        }
        .abc {
            font-family: 'Mont Heavy', sans-serif; color: #1890fd;
            font-weight: bold;
            text-align: center;
            position: center;
        }
    </style>
    <body>
        <br>
        <div style="font-family: Montheavy; color: #1890fd; font-size: 24px; font-weight: bold; margin-bottom: 20px; text-align: center; ">
            LOCATION
        </div>
    <div class="container text-center" style="position: center;">
        <div class="row">
            <div class="col-lg-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.4343833806684!2d106.77431907418564!3d-6.5928088934009095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c57a439b19c9%3A0x4a05cc1ee48848ba!2sRATHEN%20Store%20-%20Sportwears%20Outlet!5e0!3m2!1sid!2sid!4v1700127350226!5m2!1sid!2sid" style="width: 100%; height: 100%; " allowfullscreen class="mx-auto"></iframe>
            </div>
            <div class="col-lg-6">
                <img src="{{asset('asset/images/top.jpg')}}" alt="Your Image" style="width: 100%; height: 100%;" class="img-fluid">
            
            </div>
        </div>
    </div>
    
    <br>
    <div class="container" style="text-align: center; align-items: center; justify-content: center; text-align: center; font-weight: bold;">
         <div class="row">
    
            <div class="col-lg-12" >
                <p class="abc" style=" font-family: Montheavy; font-size:18px;">RATHEN STORE </p>
                <p style=" font-family: Montheavy; font-size:12px;"> Ruko Sentra Gunungbatu<br>Jl. Mayjen Ishak Djuarsa no. 167B<br>Bogor 16118 </p>
            </div>
        </div>
    </div>
    
    

</section>

<section id="contact" class="wp">
    <style>
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
            background: url('/asset/images/kontak.png') ;
            background-repeat: no-repeat;
            /* background-size:cover; */
            height: 120vh   ; 

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
            margin-top: 20px;
            padding-top: 20px;
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
        @media (max-width: 768px) {
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
    .wp{
        /* background: url('/asset/images/kontak.png') ; */
            /* background-repeat: no-repeat; */
            /* background-size:cover; */
            height: 130vh; 
    }
    .footer{
            font-size: 13px;
        }
}
    </style>

<div class="container frame mt-4">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="contact-title" style=" font-family: Montheavy;"> stay connected <br> with us </h1>
        </div>
    </div>

        <div class="row sosmed">
            <div class="col-lg-2"></div>
                <a href="https://wa.me/6289611081988?text=halo%20RATHEN..%20Saya%20ingin%20membuat%20custom%20jersey" target="_blank" class="btn-mid"><img src="asset/images/wa.png" class="icon" width="50%" alt="wa"><h5>whatsapp</h5></a>
                <a href="https://shopee.co.id/rathen.id" target="_blank" class="btn-mid"><img src="asset/images/SHOPEE.png" class="icon" width="50%" alt="wa"><h5>shopee</h5></a>
                <a href="https://www.tokopedia.com/rathenid" target="_blank" class="btn-mid"><img src="asset/images/toko.png" class="icon" width="50%" alt="wa"><h5>tokopedia</h5></a>
            <div class="col-lg-2"></div>
        </div>
        <div class="row sosmed">
            <div class="container-sosmed">
                <a href="https://www.instagram.com/rathen.apparel/" target="_blank" ><img src="asset/images/ig-biru.png" class="btn-sosmed" alt="wa"></a>
                <a href="mailto:rathen.apparel@gmail.com" target="_blank" class="emai"><img src="asset/images/mail.png" class="btn-sosmed" alt="wa"></a>
                <p class="footer">copyright &copy; rathen indonesia 2023</p>
                {{-- <a href="https://wa.me/628123456789" --}}
            </div>
        </div>
        
    </div>
</div>
<div class="container">
    <div class="row">
        <ul class="carousel-2">
            {{-- <button class="button button--left">Left</button> --}}
            <li class="item item--1" data-position="1"></li>
            <li class="item item--2" data-position="2"></li>
            <li class="item item--3" data-position="3">
            {{-- <button class="button button--right">Right</button> --}}
          </li>
        </ul>
    </div>
</div>
</section>

@endsection
