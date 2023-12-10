<!DOCTYPE html>
<html lang="en">

<head>
	<title>QUOTATION</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


</head>

<body>
	<style>
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
	<a href="{{ route('generate') }}" class="print"><button>
		<i class='bx bx-printer'></i></button></a>
<div class="container mt-3">
		<div class="row justify-content-center">
			<div class="col-8">
				<div class="card">
					<div class="card-body">
						<h3 class="text-center font-weight-bold mb-1"><img
								src="{{ asset('asset/images/logo-dark.png') }}" width="15%" alt=""></h3>
						<p class="text-center font-weight-bold mont mb-0" style="font-size: 12px;">Office: RATHEN
							INDONESIA, Jl. Mayjen Ishak Djuarsa no.167B Gunung Batu Bogor, Indonesia</p>
						<p class="text-center font-weight-bold mont"><small class="font-weight-bold">Phone No:
								0896-1108-1988 | 0878-1108-1988</small></p>
						<div class="row pb-2 p-2">
							<div class="col-md-12">
								<h5 class="text-center font-weight-bold text-primary mt-2">QUOTATION</h5>
							</div>
						</div>
						<div class="row pb-2 p-2">
							<div class="col-md-6">
								<p class="mb-0 font-weight-bold text-primary">Kepada Yth:</p>
								<p class="mb-0">{{ $nama }}</p>
								<p class="mb-0">{{ $kontak }}</p>
								<p class="mb-0">{{ $email }}</p>
								<p class="mb-0">{{ $alamat }}</p>
								{{-- <p>di tempat</p> --}}

							</div>
							<div class="col-md-6">
								<p class="mb-0 text-right">{{ $tanggal }}</p>
							</div>

						</div>
						<div class="table-responsive">
							<table class="table table-bordered mt-4 mb-0 ">
								<thead class="text-center">
									<tr class="text-center">
										<th class="text-uppercase small font-weight-bold">Kualitas</th>
										<th class="text-uppercase small font-weight-bold">Kategori</th>
										<th class="text-uppercase small font-weight-bold">Harga</th>
										<th class="text-uppercase small font-weight-bold">Min. Order</th>
									</tr>
								</thead>
								<tbody>
									<tr class="text-center">
										<td rowspan="3">Stadium Version</td>
										<td class="text-center">Non - Print</td>
										<td class="text-center">149,900</td>
										<td class="text-center">12/cs</td>
									</tr>
									<tr>
										<td class="text-center">Half - Print</td>
										<td class="text-center"> 174,900</td>
										<td class="text-center">12/cs</td>
									</tr>
									<tr>
										<td class="text-center">Full - Print</td>
										<td class="text-center">199,900</td>
										<td class="text-center">12/pcs</td>

									</tr>
									<tr>
										<td>Pro</td>
										<td class="text-center">-</td>
										<td class="text-center">299,900</td>
										<td class="text-center">24/pcs</td>

									</tr>
									<tr>
										<td>Pro Version</td>
										<td class="text-center">-</td>
										<td class="text-center">399,900</td>
										<td class="text-center">24/pcs</td>

									</tr>
									<tr>
									</tr>

								</tbody>
							</table>
						</div><!--table responsive end-->

						{{-- EXTRA --}}
						{{-- <h6 class="text-left font-weight-bold  mt-2">EXTRA</h6> --}}
						<div class="table-responsive">
							<table class="table table-bordered mt-4 mb-0 ">
								<thead class="text-center">
									<tr class="text-center">
										<th class="text-uppercase small font-weight-bold">Extra</th>
										<th class="text-uppercase small font-weight-bold">Tambah Harga</th>
										<th class="text-uppercase small font-weight-bold">Keterangan</th>

										{{-- <th class="text-uppercase small font-weight-bold">Min. Order</th> --}}
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Badan bawah melengkung</td>
										<td class="text-center">15,000/pcs</td>
										<td class="text-center">untuk stadium, free utk PRO dan PRO+</td>
									<tr>
										<td>Pola lengan raglan</td>
										<td class="text-center">15,000/pcs</td>
										<td class="text-center">untuk stadium, free utk PRO dan PRO+</td>

									</tr>
									<tr>
										<td>Upgrade logo 3D</td>
										<td class="text-center">30,000/pcs</td>
										<td class="text-center">untuk stadium, free utk PRO dan PRO+</td>

									</tr>
									<tr>
										<td>Logo tim di celana</td>
										<td class="text-center">10,000/pcs</td>
										<td class="text-center"> untuk stadium dan PRO, free utk PRO+</td>


									</tr>
									<tr>
										<td>Lengan panjang</td>
										<td class="text-center">30,000/pcs</td>
										<td class="text-center">-</td>
									</tr>

									<tr>
										<td>Size 2XL</td>
										<td class="text-center">20,000/pcs</td>
										<td class="text-center">-</td>
									</tr>

									<tr>
										<td>Size 3XL</td>
										<td class="text-center">35,000/pcs</td>
										<td class="text-center">-</td>
									</tr>
									<tr>
										<td>Size >4XL</td>
										<td class="text-center">50,000/pcs</td>
										<td class="text-center">-</td>
									</tr>
									<tr>
										<td>Celana Panjang</td>
										<td class="text-center">150,000/pcs</td>
										<td class="text-center">-</td>
									</tr>
									<tr>
										<td>Kaoskaki</td>
										<td class="text-center">50,000/pcs</td>
										<td class="text-center">-</td>
									</tr>
								</tbody>
							</table>
						</div>
						{{-- <h6 class="text-left font-weight-bold  mt-2"></h6> --}}
						<div class="table-responsive">
							<table class="table table-bordered mt-4 mb-0 ">
								<thead class="text-center">
									<tr class="text-center">
										<th class="text-uppercase small font-weight-bold"  colspan="4">Keterangan untuk
											Extra</th>
										</tr>
											<tr class="text-center">
										<th class="text-uppercase small font-weight-bold">Extra</th>
										<th class="text-uppercase small font-weight-bold">Jenis</th>
										{{-- <th class="text-uppercase small font-weight-bold">Keterangan</th> --}}
										<th class="text-uppercase small font-weight-bold">Harga</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td rowspan="2">Pola Badan</td>
										<td class="text-center">Normal</td>
										<td class="text-center">Free</td>
									<tr>
										<td class="text-center">Badan bawah melengkung</td>
										<td class="text-center">15,000</td>
									</tr>
									<tr>
										<td rowspan="2">Pola Lengan</td>
										<td class="text-center">Normal</td>
										<td class="text-center">Free</td>
									<tr>
										<td class="text-center">Raglan</td>
										<td class="text-center">15,000</td>
									</tr>
									<tr>
										<td >Material (Bahan)</td>
										<td class="text-center">-</td>
										<td class="text-center">-</td>
									</tr>
									<tr>
										<td>Kerah</td>
										<td class="text-center">custom elastic rib</td>
										<td class="text-center">20,000</td>
									</tr>
								</tbody>
							</table>
						</div>

						{{-- LOGO TIM --}}
						<div class="table-responsive">
							<table class="table table-bordered mt-4 mb-0 ">
								<thead class="text-center">
									<tr class="text-center">
										<th class="text-uppercase small font-weight-bold"  colspan="4">EXTRA LOGO TIM</th>
										</tr>
											<tr class="text-center">
										<th class="text-uppercase small font-weight-bold">Jenis</th>
										<th class="text-uppercase small font-weight-bold">Harga</th>
										{{-- <th class="text-uppercase small font-weight-bold">Keterangan</th> --}}
										<th class="text-uppercase small font-weight-bold">Keterangan</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td >DTF</td>
										<td class="text-center">Free</td>
										<td class="text-center">-</td>
									<tr>
										<td >Extra logo tim (DTF)</td>
										<td class="text-center">15,000</td>
										<td class="text-center">Min order 12 pcs dan untuk stadium, free utk PRO dan PRO+</td>
									</tr>
									<tr>
										<td >3D TPU</td>
										<td class="text-center">30,000</td>
										<td class="text-center">Min order 24 pcs dan untuk stadium, free utk PRO dan PRO+</td>
									<tr>
										<td >Rubber on Tatami</td>
										<td class="text-center">30,000</td>
										<td class="text-center">Min order 50 pcs dan untuk stadium, free utk PRO dan PRO+</td>

									</tr>
									<tr>

										<td >Silicone HD</td>
										<td class="text-center">30,000</td>
										<td class="text-center">Min order 100 pcs dan untuk stadium, free utk PRO dan PRO+</td>
									</tr>
									<tr>
										<td >Woven HD</td>
										<td class="text-center">30,000</td>
										<td class="text-center">Min order 50 pcs dan untuk stadium, free utk PRO dan PRO+</td>
									</tr>
									<tr>
										<td >Woven Lokal</td>
										<td class="text-center">30,000</td>
										<td class="text-center">Min order 12 pcs dan untuk stadium, free utk PRO dan PRO+</td>
									</tr>
								</tbody>
							</table>
						</div>
						{{-- SPONSOR DEPAN --}}
						<div class="table-responsive">
							<table class="table table-bordered mt-4 mb-0 ">
								<thead class="text-center">
									<tr class="text-center">
										<th class="text-uppercase small font-weight-bold"  colspan="4">EXTRA SPONSOR DEPAN</th>
										</tr>
											<tr class="text-center">
										<th class="text-uppercase small font-weight-bold">Jenis</th>
										<th class="text-uppercase small font-weight-bold">Harga</th>
										{{-- <th class="text-uppercase small font-weight-bold">Keterangan</th> --}}
										<th class="text-uppercase small font-weight-bold">Keterangan</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td > Printing</td>
										<td class="text-center">Free</td>
										<td class="text-center">untuk kategori HALF - PRINT dan FULL - PRINT</td>
									<tr>
										<td >Tulisan poliflek 1 warna 1 baris</td>
										<td class="text-center">Free</td>
										<td class="text-center">-</td>
									</tr>
									<tr>
										<td > Extra Tulisan poliflek 1 warna 1 baris</td>
										<td class="text-center">10,000</td>
										<td class="text-center">-</td>
									<tr>
										<td >Logo + Tulisan poliflek 1 warnaa</td>
										<td class="text-center">35,000</td>
										<td class="text-center">-</td>

									</tr>
									<tr>
										<td> Extra Tulisan poliflek >1 warna</td>
										<td class="text-center">45,000</td>
										<td class="text-center">-</td>
									</tr>
								</tbody>
							</table>
						</div>
						{{-- LENGAN --}}
						<div class="table-responsive">
							<table class="table table-bordered mt-4 mb-0 ">
								<thead class="text-center">
									<tr class="text-center">
										<th class="text-uppercase small font-weight-bold"  colspan="4">EXTRA LENGAN</th>
										</tr>
											<tr class="text-center">
										<th class="text-uppercase small font-weight-bold">Jenis</th>
										<th class="text-uppercase small font-weight-bold">Harga</th>
										{{-- <th class="text-uppercase small font-weight-bold">Keterangan</th> --}}
										{{-- <th class="text-uppercase small font-weight-bold">Keterangan</th> --}}
									</tr>
								</thead>
								<tbody>
									<tr>
										<td >Extra logo DTF</td>
										<td class="text-center">15,000</td>
									<tr>
										<td >Extra Tulisan 1 baris</td>
										<td class="text-center">10,000</td>
									</tr>
									
								</tbody>
							</table>
						</div>


						<br>
						{{-- <p style="font-style: italic;">Note: All payment should be direct bank in into our official bank
							account as following bank:</p> --}}
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
						</style>
						{{-- <div class="container">
							<div class="row">
								<table
									style="width: 100%; border:10px; font-size:14px; font-weight: bold;  font-weight:100; color:black;">
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
						</div> --}}

						<style>
							.right-align {
								text-align: right;
								margin-top: 10px;
							}
						</style>
						<div class="container">
							<div class="row">
								<div class="col-lg-12">
									<p class="right-align mb-4 pb-4">Best regard,</p>
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

</html>