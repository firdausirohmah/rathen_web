<!DOCTYPE html>
<html lang="en">

<head>
	<title>Form Produksi</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


</head>

<body style="width: 100%;max-width:100%;">
	<style>
    @page {
        size: a4 landscape; 
        margin:0.9;padding:0.9;
      } 
		@font-face {
			font-family: Montheavy;
			src: url("../../asset/fonts/Mont/Mont-Heavy.otf");
		}

		.mont {
			font-family: Montheavy;
		}

		p {
			line-height: 20px;
		}

		.table td,
		.table th {
			padding: 0.5rem;
			vertical-align: top;
			border-top: 1px solid #dee2e6;
			font-size: 14px;
		}

		.text-center {
			text-align: center;
		}
		.print-button {
			text-decoration: none;
			display: inline-block;
			}

			button {
			margin-top: 30px;
			margin-left: 40px;
			font-size: 20px; 
			border-radius: 2px;
			cursor: pointer;
			background-color: transparent;
			transition: background-color 0.3s ease;
			width: 60px;
			border-radius: 14px;
			height: 50px;
			}

			button:hover {
			/* border: red; */
			background-color: whitesmoke;
			}
	</style>
	
	<div class="mt-3">
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="card" style="width:1104px">

					<div class="card-body">
            <h3 class="text-center font-weight-bold mb-1"><img id="dynamicImage" src="{{ public_path('/asset/images/logo-dark.png') }}" width="15%" alt=""></h3>
            <p class="text-center font-weight-bold mont mb-0" style="font-size: 12px;">Office: RATHEN INDONESIA, Jl. Mayjen Ishak Djuarsa no.167B Gunung Batu Bogor, Indonesia</p>
            <p class="text-center font-weight-bold mont"><small class="font-weight-bold">Phone No: 0896-1108-1988 | 0878-1108-1988</small></p>
            <div class="row pb-2 p-2">
              <div class="col-md-12">
                <h4 class="text-center font-weight-bold text-dark mt-2">Form Persetujuan</h4>
                <p class="text-center"><small>No. {{$pesanan->kd_order}}/inv-{{$pesanan->kd_order}}/2024</small></p>
              </div>
            </div>
            <div class="table-responsive detail-customer">
              <table>
                <tbody>
                  <tr>
                    <td>
                      <div class="col-md-12">
                        <p class="mb-0 font-weight-bold text-dark">Bill to:</p>
                        <p class="mb-0">{{ $pesanan->nama_pemesanan }}</p>
                        <p class="mb-0">{{ $pesanan->nama_tim }}</p>
                        <p class="mb-0">{{ $pesanan->domisili }}</p>
                      </div>
                    </td>
                    <td>
                      <div class="col-md-12">
                        <p class="mb-0 font-weight-bold text-dark">Ship to:</p>
                        <p class="mb-0">{{ $pesanan->nama_pemesanan }}</p>
                        <p class="mb-0">{{ $pesanan->nama_tim }}</p>
                        <p class="mb-0">{{ $pesanan->domisili }}</p>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="table-responsive">
              <table class="table table-bordered mt-4 mb-0" style="table-layout: fixed;width:max-content;">
                <thead>
                  <tr>
                    <th class="text-uppercase font-weight-bold" style="width:27%;">Design</th>
                    <th class="text-uppercase font-weight-bold" style="width:73%;">Detail</th>
                  </tr>
                </thead>
                <?php
                $i = 1;
                $jqty = $pesanan->jumlah_pemesanan;
                $jharga = $pesanan->harga;
                $total = $jqty * $jharga;
                $subtotal = 0;
                $pathDataClient = "asset/dataClient/";
                ?>
                <tbody>
                  <tr>
                    <td>
                      <div class="img-tableView">
                        <b class="title">Design - Pemain</b>
                        <img src="{{public_path('uploads'.'/'.$pesanan->design_jersey_pemain)}}" id="design_pemain" alt="">
                        <span><b>Size</b>: S-3, M-11, L-14, XL-5, 2XL-1</span>
                      </div>
                    </td>
                    <td class="text-center border-top-0 border-bottom-0 border-left-0 detail-table" style="height:75%">
                      <div style="position:relative;right:2rem">
                        <div class="img-tableDetail">
                          <img src="{{ public_path('asset/images/price-list/komparasi/fabrics.jpg') }}">
                          <span class="font-weight-bold">Pola Badan:</span>
                          <span>Slim-fit</span>
                        </div>
                        <div class="img-tableDetail">
                          <img src="{{ public_path('asset/extra/putih2.png') }}">
                          <span class="font-weight-bold">Pola Lengan:</span>
                          @if(isset($pesanan->pola_lengan))
                          <span>{{ $pesanan->pola_lengan }}</span>
                          @else
                          <span>Normal</span>
                          @endif
                        </div>
                        <div class="img-tableDetail">
                          <img src="{{ public_path('asset/extra/casual/C-3.png') }}">
                          <span class="font-weight-bold">Jenis Kerah:</span>
                          <span>{{ $pesanan->model_kerah }}</span>
                        </div>
                        <div class="img-tableDetail">
                          <img src="{{ public_path('asset/polabadan/belakangNormal.png') }}">
                          <span class="font-weight-bold">Bawah Baju:</span>
                          @if(isset($pesanan->badan_bawah))
                          <span>Melengkung</span>
                          @else
                          <span>Normal</span>
                          @endif
                        </div>
                      </div>
                      <div style="padding-top:10rem;position:relative;left:2rem">
                        <div class="img-tableDetail2">
                          <img src="{{ public_path('asset/images/kaoskaki.jpeg') }}">
                          <span class="font-weight-bold">Kaoskaki:</span>
                          @if(isset($pesanan->kaoskaki))
                          <span>Ada ({{ $pesanan->kaoskaki }})</span>
                          @else
                          <span>Tidak</span>
                          @endif
                        </div>
                        <div class="img-tableDetail2">
                          <img src="{{ public_path('asset/images/price-list/komparasi/fabrics.jpg') }}">
                          <span class="font-weight-bold">Jenis Bahan:</span>
                          <span>{{ $pesanan->bahan_baju }}</span>
                        </div>
                        <div class="img-tableDetail2">
                          <img src="{{ public_path('asset/images/price-list/komparasi/logo-tim.jpg') }}">
                          <span class="font-weight-bold">Jenis Logo:</span>
                          @if(isset($pesanan->upgrade_logo_3d))
                          <span>3D</span>
                          @else
                          <span>Print</span>
                          @endif
                        </div>
                        <div class="img-tableDetail2">
                          <img src="{{ public_path('asset/images/price-list/komparasi/lasercut.jpg') }}">
                          <span class="font-weight-bold">Lasercut:</span>
                          <span>Tidak</span>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td rowspan="2">
                      <div class="img-tableView">
                        <b class="title">Design - Kiper</b>
                        <img src="{{public_path('uploads'.'/'.$pesanan->design_jersey_pemain)}}" alt="">
                        <span><b>Size</b>: M-2, L-2</span>
                      </div>
                    </td>
                    <td>
                      <div style="position:relative;left:1rem">
                        Note:
                        <ul>
                          <li>Sublim badan depan saja</li>
                          <li>lengan dan badan belakang bahan adidas (putih, dongker)</li>
                          <li>Samping baju variasi zig zag gold 2 cm</li>
                          <li>Nat/list ujung tangan gold 1,5 cm disambung</li>
                          <li>ujung tangan adidas (putih, dongker) 3 cm</li>
                          <li>Celana adidas (putih, dongker)polos</li>
                        </ul>
                      </div>
                    </td>

                  </tr>
                  <tr>
                    <td class="text-right" style="height:25%">
                      <div>Approval</div>
                      <div class="py-2"></div>
                      <div class="justify-content-end">
                        <div class="pl-5 pr-3" style="float:right">
                          @if(isset($aproval_2))
                          @if($aproval_2->is_agreed == 1)
                          <img src="{{public_path('asset/images/ttd/ervina_ttd.png')}}" alt="" style="height:100px; width: 100px;display:inline;" id="ttd2"><br>
                          @endif
                          @endif
                          <span>(Ervina)</span>
                        </div>
                        <div class="px-5 " style="float:right">
                          @if(isset($aproval_3))
                            @if($aproval_3->is_agreed == 1)
                            <img src="https://cdn.kibrispdr.org/data/957/tanda-tangan-keren-png-6.png" alt="" style="height:100px; width: 100px;display:inline;" id="ttd1"><br>
                            @endif
                          @endif
                          <span class="m-5">(Rhofik)</span>
                        </div>
                      </div>
                    </td>

                  </tr>
                </tbody>


              </table>
            </div>

            <br>
            <p class="text-justify" style="font-style: italic;">Note: All payment should be direct bank in into our official bank account as following bank:</p>
            <style>
              table {
                width: 80%;
                align-content: center;
                text-align: left;
                border-spacing: 100px;
                /* Mengatur jarak antar sel menjadi 0 */
                border-collapse: collapse;
                /* Menggabungkan batas sel */
              }

              tr {
                margin-top: -10px;
                padding-top: -10px;
              }

              tr,
              td {
                padding: 0px;
                /* Menambahkan padding untuk ruang di dalam sel */
                text-align: left;
                /* Penataan teks di dalam sel */
              }

              .col-1 {
                margin-top: auto;
                width: 10%;
              }

              .col-2 {
                margin-top: auto;
                width: 1%;
                font-weight: bold;
              }

              .col-3 {
                margin-top: auto;
                width: 62%;
              }

              .right-align {
                text-align: right;
                margin-top: 10px;
              }

              .img-tableView{
                width: auto;
                height: 15rem;
              }
              .img-tableView img{
                height: 12rem;
                width: 16rem;
                object-fit: cover;
              }
              .img-tableView .title{
                display: block;
              }
              .img-tableView span{
                display: block;
                margin-top: 0.2rem;
              }
              .img-tableDetail{
                float:left;
                padding: 0 1rem;
                width: 11rem;
                height: 10rem;
              }
              .img-tableDetail img{
                height: 4rem;
                width: 4rem;
                object-fit: cover;
              }
              .img-tableDetail span{
                display: block;
                font-size: 14px;
                margin-top: 0.2rem;
              }
              .img-tableDetail2{
                float:right;
                padding: 0 1rem;
                width: 11rem;
                height: 10rem;
              }
              .img-tableDetail2 img{
                height: 4rem;
                width: 4rem;
                object-fit: cover;
              }
              .img-tableDetail2 span{
                display: block;
                font-size: 14px;
                margin-top: 0.2rem;
              }
              textarea {
                height: 10rem!important;
              }
              .ttd #ttd1 {
                position: absolute; /* Change this line */
                top: 63.5rem;
                bottom: 1rem; /* Add this line */
                right: 13.5rem; /* Add this line */
              }
              .ttd #ttd2 {
                position: absolute; /* Change this line */
                top: 63.5rem;
                bottom: 1rem; /* Add this line */
                right: 1.5rem; /* Add this line */
              }
              .ttd #ttd3 {
                position: absolute; /* Change this line */
                top: 4rem;
                right: 2rem; /* Add this line */
              }
            </style>
            <div class="container">
              <div class="row">
                <table style="width: 100%; border:10px; font-size:14px; font-weight: bold;  font-weight:100; color:black;">
                  <tr style="font-weight: bold; ">
                    <td class="col-1 fw-bold">Account Name</td>
                    <td class="col-2">:</td>
                    <td class="col-3 fw-semibold">R. Esa Pangersa Gusti</td>
                  </tr>
                  <tr style="font-weight: bold; ">
                    <td class="col-1 fw-semibold">Account Number</td>
                    <td class="col-2">:</td>
                    <td class="col-3 fw-semibold">0060435898</td>
                  </tr>
                  <tr style="font-weight: bold; ">
                    <td class="col-1 fw-semibold">Bank</td>
                    <td class="col-2">:</td>
                    <td class="col-3 fw-semibold">BCA</td>
                  </tr>
                  <tr style="font-weight: bold; ">
                    <td class="col-1 fw-semibold">Branch</td>
                    <td class="col-2">:</td>
                    <td class="col-3 fw-semibold">Bogor</td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12 ">
                  <p class="right-align mb-4 pb-4">Best regard,</p>
                  @if(isset($aproval_1))
                    @if($aproval_1->is_agreed == 1)
                    <img src="https://cdn.kibrispdr.org/data/957/tanda-tangan-keren-png-6.png" alt="" style="width: 100px;display:inline;float:right;" id="ttd3"><br>
                    @endif
                  @endif
                  <p class="right-align mt-4 pt-4"><u>R. Esa Pangersa Gusti</u></p>
                  <p class="right-align" style="line-height: 0px">RATHEN INDONESIA</p>
                </div>
              </div>
            </div>
          </div>

				</div>
			</div>
		</div>

	</div>

</body>

  <script>
    function goBack() {
      window.history.back();
    }
    document.addEventListener("DOMContentLoaded", function() {
      var dynamicImage = document.getElementById("dynamicImage");
      // var design_pemain = document.getElementById("design_pemain");

    
      if (dynamicImage) {
        console.log("Element dengan ID dynamicImage ditemukan.");
        dynamicImage.src = "{{public_path('/asset/images/logo-dark.png')}}";
        // design_pemain.src = "{{asset('uploads'.'/'.$pesanan->design_jersey_pemain)}}"
        console.log("Src gambar diubah menjadi: " + dynamicImage.src);
      } else {
        console.error("Element dengan ID dynamicImage tidak ditemukan!");
      }
    });
  </script>
  <script>
  const element = document.getElementById("content");
  let y = element.scrollHeight;
  let x = element.scrollWidth;
  document.getElementById ("demo").innerHTML = "Height: " + y + " Width: " + x;
  </script>
</html>