@extends('layout.landingpage')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pemesanan</title>
</head>
{{-- <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css"> --}}
{{-- <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.2/components/services/service-1/assets/css/service-1.css"> --}}
<script src="/js/app.js" defer></script>
<link href="/css/app.css" rel="stylesheet">
<body>
    <!-- Service 1 - Bootstrap Brain Component -->
<section class="py-5 py-xl-8">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
          <h1 class="mb-4 display-5 text-center" style="font-family: Montheavy; color: #1890fd; font-size: 24px; font-weight: bold; margin-bottom: 20px; text-align: center;">CARA PEMESANAN</h1>

          
        </div>
      </div>
    </div>
  
    <div class="container overflow-hidden">
      <div class="row mb-4 gy-5">
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="text-center px-xl-2">
            <h1 class='bx bx-cart'></h1>
            <h6 class="m-2" style="font-family: 'Mont Heavy', sans-serif; color: #1890fd;  font-weight: bold; margin-bottom: 15px;   ">1. MIN. ORDER</h6>
            <p class="m-0 text-secondary text-justify">
                - Dapatkan 
                <span style="font-weight: bold;">500RB untuk kamu yang baru pertama kali pesan jersey</span>
                di 
                <span style="font-weight: bold; font-size: smaller;">RATHEN</span><span style="color:red">*)</span>
                <br><span style="font-weight: bold; color: red; font-family: 'Mont Heavy', sans-serif;"> Note: *) Minimal Order 50 PCS</span><br>
                <span>- Kami memiliki 3 Level kualitas:</ p> <br>
                <span> <strong>1. FANS VERSION (Minimun order 12 pcs) - </strong> Kualitas Standar </span><br>
                <span> <strong>2. STADIUM  VERSION (Minimun order 12 pcs) -  </strong> Kualitas Medium </span> <br>
                <span> <strong>3. PRO VERSION (Minimun order 24 pcs) -  </strong> Kualitas PRO</span>
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
            </body>
            </html>
@endsection