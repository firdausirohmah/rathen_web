@extends('layout.landingpage')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prosedur Pemesanan</title>
    <script src="/js/app.js" defer></script>
    <link href="/css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mont:wght@700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #000;
            background-color: #fff;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            color: #1890fd;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .container {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            overflow: hidden;
            background-color: #fff;
            padding: 20px;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .container:hover {
            transform: scale(1.05);
        }

        .icon {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
            position: center;
        }

        .title {
            color: #1890fd;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .content {
            color: #000;
        }

        .container:nth-child(odd) {
            background-color: #f8f8f8;
        }
    </style>
</head>
<body>

<h2>PROSEDUR PEMESANAN</h2>

<div class="container">
    <div>
        <img src="/asset/images/min.png" alt="Icon 1" class="icon">
        <div class="title">1. MIN. ORDER</div>
        <div class="content">
            - Dapatkan CASHBACK <span style="color: #1890fd; font-weight: bold;">500RB</span> untuk kamu yang baru pertama kali pesan jersey di RATHEN*
            <br>Note: *) Minimal Order <span style="color: #1890fd; font-weight: bold;">50 PCS</span>
            <br>- Kami memiliki 3 Level kualitas:
            <br>FANS VERSION (Minimum order 12 pcs) - Kualitas Standar
            <br>STADIUM VERSION (Minimum order 12 pcs) - Kualitas Medium
            <br>PRO VERSION (Minimum order 24 pcs) - Kualitas PRO
        </div>
    </div>
</div>

<div class="container">
    <div>
        <img src="icon_path_2.png" alt="Icon 2" class="icon">
        <div class="title">DESIGN</div>
        <div class="content">
            - Wajib kirim final Design
            <br>- Untuk design printing wajib kirim mentahan file (.cdr X7 atau Ai)
            <br>- Design dan fitur mempengaruhi nilai harga
            <br>- Belum punya design? Bisa melihat referensi design kita di Instagram: Rathen.apparel atau Soccerkitdesign
            <br>- Tim design rathen juga dapat membantu anda membuatkan 3D, cukup dengan melakukan pembayaran Komitmen FEE sebesar Rp. 500,000 (biaya ini termasuk ke dalam total biaya produksi sehingga setara dengan free design !!!)
            <br>- Diperbolehkan untuk revisi design minor 3x (Bukan ganti total design)
        </div>
    </div>
</div>

<div class="container">
    <div>
        <img src="icon_path_3.png" alt="Icon 3" class="icon">
        <div class="title">PEMBAYARAN DP</div>
        <div class="content">
            - Setelah Preview 3D pesanan kamu sudah OK, maka kamu wajib membayar tambahan uang DP PRODUKSI Min. 50% dari total biaya untuk masuk antrian produksi
            <br>- Rekening resmi kami hanya ada 1 akun Bank BCA 0060435898 A.n R Esa Pangersa Gusti
            <br>- Pembayaran juga bisa dilakukan secara tunai di store kami
        </div>
    </div>
</div>

</body>
</html>

@endsection
