@extends('layout.landingpage_nofooter')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="asset/css/ex.css">


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
        .btn-sosmed{
            border-radius: 14px;
            align-items: center;
            /* display: flex; */
            transition: all 0.5s ease-in-out;
            /* transition: cubic-bezier(0.95, 0.05, 0.795, 0.035); */
            cursor: pointer;
            outline: none;
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
        }
     
        
        @media (max-width: 768px) {
    .btn-mid {
        width: 20%; /* Ubah lebar tombol menjadi 100% */
        height: 20%;

    }
    h5{
        font-size: 18px;
    }

    .icon {
        width: 40%; /* Ubah lebar ikon menjadi 50% */
    }
    
}
    </style>

<div class="container frame mt-4">
    <div class="row">
        <div class="col-lg-12">
            <h1 style="color: #fff"> stay connected <br> with us </h1>
        </div>
    </div>

        <div class="row sosmed">
            <div class="col-lg-2"></div>
                <a href="https://wa.me/6289611081988?text=halo%20RATHEN..%20Saya%20ingin%20membuat%20custom%20jersey" class="btn-mid"><img src="asset/images/wa.png" class="icon" width="50%" alt="wa"><h5>whatsapp</h5></a>
                <a href="https://shopee.co.id/rathen.id" class="btn-mid"><img src="asset/images/SHOPEE.png" class="icon" width="50%" alt="wa"><h5>shopee</h5></a>
                <a href="https://www.tokopedia.com/rathenid" class="btn-mid"><img src="asset/images/toko.png" class="icon" width="50%" alt="wa"><h5>tokopedia</h5></a>
            <div class="col-lg-2"></div>
        </div>
        <div class="row sosmed">
            <div class="btn-sosmed">
                <a href="https://www.instagram.com/rathen.apparel/" class="btn-sosmed"><img src="asset/images/ig-biru.png" width="80px" alt="wa"></a>
                <a href="mailto:rathen.apparel@gmail.com" class="email btn-sosmed"><img src="asset/images/mail.png" width="80px" alt="wa"></a>
                <p class="footer">copycight &copy; rathen indonesia 2023</p>
                {{-- <a href="https://wa.me/628123456789" --}}
            </div>
        </div>
        
    </div>
</body>
</html>

@endsection
