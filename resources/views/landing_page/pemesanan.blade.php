@extends('layout.landingpage')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
{{-- <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.2/components/services/service-1/assets/css/service-1.css">
<script src="/js/app.js" defer></script>
<link href="/css/app.css" rel="stylesheet"> --}}
<body>
    <!-- Service 1 - Bootstrap Brain Component -->
<section class="py-5 py-xl-8">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
          <h2 class="mb-4 display-5 text-center" style="font-family: 'Mont Heavy', sans-serif; color: #1890fd; font-size: 24px; font-weight: bold; margin-bottom: 20px; text-align: center;">PROSEDUR PEMESANAN</h2>
            <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
        </div>
      </div>
    </div>
  
    <div class="container overflow-hidden">
      <div class="row gy-5">
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="text-center px-xl-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-1-circle-fill text-primary mb-4" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383h1.312Z" />
            </svg>
            <h5 class="m-2" style="font-family: 'Mont Heavy', sans-serif; color: #1890fd; font-size: 24px; font-weight: bold; margin-bottom: 15px; text-align: center; ">1. MIN. ORDERh</h5>
            <p class="m-0 text-secondary">
                - Dapatkan 
                <span style="font-weight: bold;">500RaB untuk kamu yang baru pertama kali pesan jersey</span>
                di 
                <span style="font-weight: bold; font-size: smaller;">RATHEN</span><span style="color:red">*)</span>
                <br><span style="font-weight: bold; color: red; font-family: 'Mont Heavy', sans-serif;"> Note: *) Minimal Order 50 PCS</span><br>
                <span>- Kami memiliki 3 Level kualitas:</span> <br>
                <span> <strong>1. FANS VERSION (Minimun order 12 pcs) - </strong> Kualitas Standar </span><br>
                <span> <strong>2. STADIUM  VERSION (Minimun order 12 pcs) -  </strong> Kualitas Medium </span> <br>
                <span> <strong>3. PRO VERSION (Minimun order 24 pcs) -  </strong> Kualitas PRO</span>
            </p>
                    </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="text-center px-xl-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-2-circle-fill text-primary mb-4" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24c0-.691.493-1.306 1.336-1.306.756 0 1.313.492 1.313 1.236 0 .697-.469 1.23-.902 1.705l-2.971 3.293V12h5.344v-1.107H7.268v-.077l1.974-2.22.096-.107c.688-.763 1.287-1.428 1.287-2.43 0-1.266-1.031-2.215-2.613-2.215-1.758 0-2.637 1.19-2.637 2.402v.065h1.271v-.07Z" />
            </svg>
            <h5 class="m-2"style="font-family: 'Mont Heavy', sans-serif; color: #1890fd; font-size: 24px; font-weight: bold; margin-bottom: 20px; text-align: center;">2. DESIGN</h5>
            <p class="m-0 text-secondary">- Wajib kirim final Design</p>
            <P class="m-0 text-secondary"> - Untuk design printing wajib kirim mentahan file <strong> (.cdr X7 atau Ai) </strong></P>
            <P class="m-0 text-secondary"> - Design dan fitur mempengaruhi nilai harga</P>
            <p class="m-0 text-secondary" style="font-family: 'Mont Heavy'; color: #1890fd;">- Belum punya design?</p>
        {{-- WARNA BELUM BERUBAHHHHHHHHHHHHHHHHHHHHHH --}}
            <P class="m-0 text-secondary"> Bisa melihat referensi design kita di  <strong> Rathen.apparel </strong> atau <strong> Soccerkitdesign </strong></P>
            <P class="m-0 text-secondary"> - Tim design rathen juga dapat membantu anda membuatkan 3D , cukup dengan melakukan pembayaran <strong> Komitmen FEE </strong>  Rp.  <strong> 500,000 </strong> <em style="color: #1890fd;"> (biaya ini termasuk ke dalam total biaya produksi sehingga setara dengan free design !!! ) </em> </P>
            <P class="m-0 text-secondary"> - Diperbolehkan untuk revisi design minor 3x  <em style="color: #1890fd;"> (Bukan ganti total design)</em> </P>

        </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="text-center px-xl-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-3-circle-fill text-primary mb-4" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.082.414c.92 0 1.535.54 1.541 1.318.012.791-.615 1.36-1.588 1.354-.861-.006-1.482-.469-1.54-1.066H5.104c.047 1.177 1.05 2.144 2.754 2.144 1.653 0 2.954-.937 2.93-2.396-.023-1.278-1.031-1.846-1.734-1.916v-.07c.597-.1 1.505-.739 1.482-1.876-.03-1.177-1.043-2.074-2.637-2.062-1.675.006-2.59.984-2.625 2.12h1.248c.036-.556.557-1.054 1.348-1.054.785 0 1.348.486 1.348 1.195.006.715-.563 1.237-1.342 1.237h-.838v1.072h.879Z" />
            </svg>
            <h5 class="m-2" style="font-family: 'Mont Heavy', sans-serif; color: #1890fd; font-size: 24px; font-weight: bold; margin-bottom: 20px; text-align: center;">3. PEMBAYARAN DP</h5>
            <p class="m-0 text-secondary">- Setelah Preview 3D pesanan kamu sudah OK, maka kamu wajib membayar tambahan uang DP <strong> PRODUKSI Min. 50% </strong> dari total biaya untuk masuk antrian produksi </p>
            <p class="m-0 text-secondary">- Rekening resmi kami hanya ada 1 akun Bank <strong> BCA 0060435898 A.n R Esa Pangersa Gusti </strong> </p>
            <p class="m-0 text-secondary">- Pembayaran juga bisa dilakukan secara tunai di store kami </p>

          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="text-center px-xl-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-4-circle-fill text-primary mb-4" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM7.519 5.057c-.886 1.418-1.772 2.838-2.542 4.265v1.12H8.85V12h1.26v-1.559h1.007V9.334H10.11V4.002H8.176c-.218.352-.438.703-.657 1.055ZM6.225 9.281v.053H8.85V5.063h-.065c-.867 1.33-1.787 2.806-2.56 4.218Z" />
            </svg>
            <h5 class="m-2" style="font-family: 'Mont Heavy', sans-serif; color: #1890fd; font-size: 24px; font-weight: bold; margin-bottom: 20px; text-align: center;">4. DATA PRODUKSI</h5>
            <p class="m-0 text-secondary">
                - Berisi: <strong> Nama/No Punggung/Ukuran </strong> diisi berurutan mulai dari size paling kecil.
                Bisa pakai template FORM DATA kami, klik link 
                <a href="https://shorturl.at/mpO36" style="color: #1890fd;">https://shorturl.at/mpO36</a></p>
                      </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="text-center px-xl-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-5-circle-fill text-primary mb-4" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.006 4.158c1.74 0 2.924-1.119 2.924-2.806 0-1.641-1.178-2.584-2.56-2.584-.897 0-1.442.421-1.612.68h-.064l.193-2.344h3.621V4.002H5.791L5.445 8.63h1.149c.193-.358.668-.809 1.435-.809.85 0 1.582.604 1.582 1.57 0 1.085-.779 1.682-1.57 1.682-.697 0-1.389-.31-1.53-1.031H5.276c.065 1.213 1.149 2.115 2.72 2.115Z" />
            </svg>
            <h5 class="m-2" style="font-family: 'Mont Heavy', sans-serif; color: #1890fd; font-size: 24px; font-weight: bold; margin-bottom: 20px; text-align: center;">5. WAKTU PRODUKSI</h5>
            <p class="m-0 text-secondary">- <strong>  Non Printing</strong>: 2-3 Minggu </p>
            <p class="m-0 text-secondary">- <strong>  Printing</strong>: 3-4 Minggu </p>
            <p class="m-0 text-secondary">- <strong> PRO VERSION</strong>: 3-4 Minggu </p>
            @extends('layout.landingpage')
            @section('content')
            
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Document</title>
            </head>
            <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.2/components/services/service-1/assets/css/service-1.css">
            <script src="/js/app.js" defer></script>
            <link href="/css/app.css" rel="stylesheet">
            <body>
                <!-- Service 1 - Bootstrap Brain Component -->
            <section class="py-5 py-xl-8">
                <div class="container">
                  <div class="row justify-content-md-center">
                    <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                      <h2 class="mb-4 display-5 text-center" style="font-family: 'Mont Heavy', sans-serif; color: #1890fd; font-size: 24px; font-weight: bold; margin-bottom: 20px; text-align: center;">PROSEDUR PEMESANAN</h2>
                        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
                    </div>
                  </div>
                </div>
              
                <div class="container overflow-hidden">
                  <div class="row gy-5">
                    <div class="col-12 col-sm-6 col-lg-4">
                      <div class="text-center px-xl-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-1-circle-fill text-primary mb-4" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383h1.312Z" />
                        </svg>
                        <h5 class="m-2" style="font-family: 'Mont Heavy', sans-serif; color: #1890fd; font-size: 24px; font-weight: bold; margin-bottom: 15px; text-align: center; ">1. MIN. ORDER</h5>
                        <p class="m-0 text-secondary">
                            - Dapatkan 
                            <span style="font-weight: bold;">500RB untuk kamu yang baru pertama kali pesan jersey</span>
                            di 
                            <span style="font-weight: bold; font-size: smaller;">RATHEN</span><span style="color:red">*)</span>
                            <br><span style="font-weight: bold; color: red; font-family: 'Mont Heavy', sans-serif;"> Note: *) Minimal Order 50 PCS</span><br>
                            <span>- Kami memiliki 3 Level kualitas:</span> <br>
                            <span> <strong>1. FANS VERSION (Minimun order 12 pcs) - </strong> Kualitas Standar </span><br>
                            <span> <strong>2. STADIUM  VERSION (Minimun order 12 pcs) -  </strong> Kualitas Medium </span> <br>
                            <span> <strong>3. PRO VERSION (Minimun order 24 pcs) -  </strong> Kualitas PRO</span>
                        </p>
                                </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
                      <div class="text-center px-xl-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-2-circle-fill text-primary mb-4" viewBox="0 0 16 16">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24c0-.691.493-1.306 1.336-1.306.756 0 1.313.492 1.313 1.236 0 .697-.469 1.23-.902 1.705l-2.971 3.293V12h5.344v-1.107H7.268v-.077l1.974-2.22.096-.107c.688-.763 1.287-1.428 1.287-2.43 0-1.266-1.031-2.215-2.613-2.215-1.758 0-2.637 1.19-2.637 2.402v.065h1.271v-.07Z" />
                        </svg>
                        <h5 class="m-2"style="font-family: 'Mont Heavy', sans-serif; color: #1890fd; font-size: 24px; font-weight: bold; margin-bottom: 20px; text-align: center;">2. DESIGN</h5>
                        <p class="m-0 text-secondary">- Wajib kirim final Design</p>
                        <P class="m-0 text-secondary"> - Untuk design printing wajib kirim mentahan file <strong> (.cdr X7 atau Ai) </strong></P>
                        <P class="m-0 text-secondary"> - Design dan fitur mempengaruhi nilai harga</P>
                        <p class="m-0 text-secondary" style="font-family: 'Mont Heavy'; color: #1890fd;">- Belum punya design?</p>
                    {{-- WARNA BELUM BERUBAHHHHHHHHHHHHHHHHHHHHHH --}}
                        <P class="m-0 text-secondary"> Bisa melihat referensi design kita di  <strong> Rathen.apparel </strong> atau <strong> Soccerkitdesign </strong></P>
                        <P class="m-0 text-secondary"> - Tim design rathen juga dapat membantu anda membuatkan 3D , cukup dengan melakukan pembayaran <strong> Komitmen FEE </strong>  Rp.  <strong> 500,000 </strong> <em style="color: #1890fd;"> (biaya ini termasuk ke dalam total biaya produksi sehingga setara dengan free design !!! ) </em> </P>
                        <P class="m-0 text-secondary"> - Diperbolehkan untuk revisi design minor 3x  <em style="color: #1890fd;"> (Bukan ganti total design)</em> </P>
            
                    </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
                      <div class="text-center px-xl-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-3-circle-fill text-primary mb-4" viewBox="0 0 16 16">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.082.414c.92 0 1.535.54 1.541 1.318.012.791-.615 1.36-1.588 1.354-.861-.006-1.482-.469-1.54-1.066H5.104c.047 1.177 1.05 2.144 2.754 2.144 1.653 0 2.954-.937 2.93-2.396-.023-1.278-1.031-1.846-1.734-1.916v-.07c.597-.1 1.505-.739 1.482-1.876-.03-1.177-1.043-2.074-2.637-2.062-1.675.006-2.59.984-2.625 2.12h1.248c.036-.556.557-1.054 1.348-1.054.785 0 1.348.486 1.348 1.195.006.715-.563 1.237-1.342 1.237h-.838v1.072h.879Z" />
                        </svg>
                        <h5 class="m-2" style="font-family: 'Mont Heavy', sans-serif; color: #1890fd; font-size: 24px; font-weight: bold; margin-bottom: 20px; text-align: center;">3. PEMBAYARAN DP</h5>
                        <p class="m-0 text-secondary">- Setelah Preview 3D pesanan kamu sudah OK, maka kamu wajib membayar tambahan uang DP <strong> PRODUKSI Min. 50% </strong> dari total biaya untuk masuk antrian produksi </p>
                        <p class="m-0 text-secondary">- Rekening resmi kami hanya ada 1 akun Bank <strong> BCA 0060435898 A.n R Esa Pangersa Gusti </strong> </p>
                        <p class="m-0 text-secondary">- Pembayaran juga bisa dilakukan secara tunai di store kami </p>
            
                      </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
                      <div class="text-center px-xl-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-4-circle-fill text-primary mb-4" viewBox="0 0 16 16">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM7.519 5.057c-.886 1.418-1.772 2.838-2.542 4.265v1.12H8.85V12h1.26v-1.559h1.007V9.334H10.11V4.002H8.176c-.218.352-.438.703-.657 1.055ZM6.225 9.281v.053H8.85V5.063h-.065c-.867 1.33-1.787 2.806-2.56 4.218Z" />
                        </svg>
                        <h5 class="m-2" style="font-family: 'Mont Heavy', sans-serif; color: #1890fd; font-size: 24px; font-weight: bold; margin-bottom: 20px; text-align: center;">4. DATA PRODUKSI</h5>
                        <p class="m-0 text-secondary">
                            - Berisi: <strong> Nama/No Punggung/Ukuran </strong> diisi berurutan mulai dari size paling kecil.
                            Bisa pakai template FORM DATA kami, klik link 
                            <a href="https://shorturl.at/mpO36" style="color: #1890fd;">https://shorturl.at/mpO36</a></p>
                                  </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
                      <div class="text-center px-xl-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-5-circle-fill text-primary mb-4" viewBox="0 0 16 16">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.006 4.158c1.74 0 2.924-1.119 2.924-2.806 0-1.641-1.178-2.584-2.56-2.584-.897 0-1.442.421-1.612.68h-.064l.193-2.344h3.621V4.002H5.791L5.445 8.63h1.149c.193-.358.668-.809 1.435-.809.85 0 1.582.604 1.582 1.57 0 1.085-.779 1.682-1.57 1.682-.697 0-1.389-.31-1.53-1.031H5.276c.065 1.213 1.149 2.115 2.72 2.115Z" />
                        </svg>
                        <h5 class="m-2" style="font-family: 'Mont Heavy', sans-serif; color: #1890fd; font-size: 24px; font-weight: bold; margin-bottom: 20px; text-align: center;">5. WAKTU PRODUKSI</h5>
                        <p class="m-0 text-secondary">- <strong>  Non Printing</strong>: 2-3 Minggu </p>
                        <p class="m-0 text-secondary">- <strong>  Printing</strong>: 3-4 Minggu </p>
                        <p class="m-0 text-secondary">- <strong> PRO VERSION</strong>: 3-4 Minggu </p> <br>
                        <p class="m-0 text-secondary">Sejak pembayaran DP 50% kami terima
                            Apabila selesai lebih cepat, kami akan informasikan kepada Anda. </p> 
                        
            
                    </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
                      <div class="text-center px-xl-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-6-circle-fill text-primary mb-4" viewBox="0 0 16 16">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM8.21 3.855c-1.868 0-3.116 1.395-3.116 4.407 0 1.183.228 2.039.597 2.642.569.926 1.477 1.254 2.409 1.254 1.629 0 2.847-1.013 2.847-2.783 0-1.676-1.254-2.555-2.508-2.555-1.125 0-1.752.61-1.98 1.155h-.082c-.012-1.946.727-3.036 1.805-3.036.802 0 1.213.457 1.312.815h1.29c-.06-.908-.962-1.899-2.573-1.899Zm-.099 4.008c-.92 0-1.564.65-1.564 1.576 0 1.032.703 1.635 1.558 1.635.868 0 1.553-.533 1.553-1.629 0-1.06-.744-1.582-1.547-1.582Z" />
                        </svg>
                        <h5 class="m-2" style="font-family: 'Mont Heavy', sans-serif; color: #1890fd; font-size: 24px; font-weight: bold; margin-bottom: 20px; text-align: center;">6. PELUNASAN + PENGAMBILAN</h5>
                        <p class="m-0 text-secondary">Pelunasan dilakukan ketika jersey polosan sudah selesai dijahit, agar dapat lanjut ke proses finishing (pasang name set, logo, dll ) hal ini guna menghindari penumpukan jersey di gudang yang dapat menyebabkan kerusakan pada jersey</p>
                        <br><p class="m-0 text-secondary">Pesanan jersey kamu akan selesai 2-3 hari kerja sejak pembayaran pelunasan kami terima.</p>
                        <br><p class="m-0 text-secondary">Bagi yang mau melakukan pengambilan jersey <strong> <em> self-pickup</strong></em>, bisa langsung datang ke offline store kami. </p> <br>
                        <p class="m-0 text-secondary">
                            Bagi yang mau di kirim, bisa melalui: 
                            <strong> JNE / JNT / jasa pengiriman lainnya</strong> 
                            bisa langsung datang ke offline store kami. 
                            <em style="color: #bf00ff; font-weight: bold;"> (Ongkos kirim di tanggung customer) </em>
                        </p>                      
                    </div>
                    </div>
                      <div class="col-12 col-sm-6 col-lg-4">
                        <div class="text-center px-xl-2">
                          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-6-circle-fill text-primary mb-4" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM8.21 3.855c-1.868 0-3.116 1.395-3.116 4.407 0 1.183.228 2.039.597 2.642.569.926 1.477 1.254 2.409 1.254 1.629 0 2.847-1.013 2.847-2.783 0-1.676-1.254-2.555-2.508-2.555-1.125 0-1.752.61-1.98 1.155h-.082c-.012-1.946.727-3.036 1.805-3.036.802 0 1.213.457 1.312.815h1.29c-.06-.908-.962-1.899-2.573-1.899Zm-.099 4.008c-.92 0-1.564.65-1.564 1.576 0 1.032.703 1.635 1.558 1.635.868 0 1.553-.533 1.553-1.629 0-1.06-.744-1.582-1.547-1.582Z" />
                          </svg>
                          <h5 class="m-2" style="font-family: 'Mont Heavy', sans-serif; color: #1890fd; font-size: 24px; font-weight: bold; margin-bottom: 20px; text-align: center;">7. GARANSI KEPUASAN</h5>
                          <p class="m-0 text-secondary">Segala bentuk kesalahan produksi yang disebabkan oleh tim produksi, akan kami perbaiki sebagai bentuk komitmen kami untuk selalu memberikan pelayanan yang terbaik untuk customer.</p><br>
                          <p class="m-0 text-secondary">Hal ini tidak berlaku apabila kelalaian atau kerusakan disebabkan oleh customer.</p>
                         
                                                  
                      </div>
                      </div>
                      <div class="col-12 col-sm-6 col-lg-4">
                        <div class="text-center px-xl-2">
                          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-6-circle-fill text-primary mb-4" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM8.21 3.855c-1.868 0-3.116 1.395-3.116 4.407 0 1.183.228 2.039.597 2.642.569.926 1.477 1.254 2.409 1.254 1.629 0 2.847-1.013 2.847-2.783 0-1.676-1.254-2.555-2.508-2.555-1.125 0-1.752.61-1.98 1.155h-.082c-.012-1.946.727-3.036 1.805-3.036.802 0 1.213.457 1.312.815h1.29c-.06-.908-.962-1.899-2.573-1.899Zm-.099 4.008c-.92 0-1.564.65-1.564 1.576 0 1.032.703 1.635 1.558 1.635.868 0 1.553-.533 1.553-1.629 0-1.06-.744-1.582-1.547-1.582Z" />
                          </svg>
                          <h5 class="m-2" style="font-family: 'Mont Heavy', sans-serif; color: #1890fd; font-size: 24px; font-weight: bold; margin-bottom: 20px; text-align: center;">8. PUAS & ORDER LAGI</h5>
                          <p class="m-0 text-secondary">Menyebar kebaikan dengan berbagi informasi kepada rekan-rekan terdekat.</p>
                          <p class="m-0 text-secondary">Dapatkan berbagai merchandise unik sebagai refferal benefits.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                    </div>
                </div>
                
                      

                  </div>
                </div>
              </section>
            </body>
            </html>
            
            
            @endsection
            
        
  </section>
</body>
</html>


@endsection

