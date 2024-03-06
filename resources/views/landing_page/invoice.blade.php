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

	<div class="container mt-3">
		<div class="row justify-content-center">
			<div class="col-8">
				<div class="card">
					<div class="card-body">
						<h3 class="text-center font-weight-bold mb-1">
							<img id="dynamicImage" src="{{public_path('/asset/images/logo-dark.png')}}" width="15%" ></h3>
						<p class="text-center font-weight-bold mont mb-0" style="font-size: 12px;">Office: RATHEN
							INDONESIA, Jl. Mayjen Ishak Djuarsa no.167B Gunung Batu Bogor, Indonesia</p>
						<p class="text-center font-weight-bold mont"><small class="font-weight-bold">Phone No:
								0896-1108-1988 | 0878-1108-1988</small></p>
								s<div class="row content-center">
                <div class="col-md-12">
                  <h3 class="text-center font-weight-bold text-primary mt-2">INVOICE</h3>
                  <p class="text-center"><small >No. 00178/inv-10/2023</small></p>
                </div>
              </div>
              <div class="row pb-2 p-2 text-center-mb" style="text-align:justify;">
                <div class="col-md-6 mx-4 px-4">
                  <p class="mb-0 font-weight-bold text-primary">Bill to:</p>
                  <p class="mb-0">{{ $pesanan->nama_pemesanan }}</p>
                  <p class="mb-0">{{ $pesanan->nama_tim }}</p>			 
                            <p class="mb-0">{{ $pesanan->domisili }}</p>			 
                            </div>
                            <div class="col-lg-2"></div>
                            <div class="col-md-2">
                                <p class="mb-0 font-weight-bold text-primary">Ship to:</p>			 
                                <p class="mb-0">{{ $pesanan->nama_pemesanan }}</p>			 
                                <p class="mb-0">{{ $pesanan->nama_tim }}</p>			 
                                <p class="mb-0">{{ $pesanan->domisili }}</p>			 
                              </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered mt-4 mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase small font-weight-bold">No.</th>
                                    <th class="text-uppercase small font-weight-bold">Product</th>
                                    <th class="text-uppercase small font-weight-bold">qty(pcs)</th>
                                    <th class="text-uppercase small font-weight-bold">Retail Price</th>
                                    <th class="text-uppercase small font-weight-bold">Total</th> 
                                </tr>
                                </thead>
                                <?php 
                                $i = 1; 
                                $jqty = $pesanan->jumlah_pemesanan;
                                $jharga = $pesanan->harga;
                                $total = $jqty * $jharga;
                                ?>
                                <tbody>
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $pesanan->product }}</td>
                                    <td class="text-center">{{ $jqty }}</td>
                                    <td><span id="Harga">Rp <?= number_format($jharga , 0, ','); ?></span></td>
                                    <td id="totalHarga">Rp <?= number_format($total , 0, ','); ?></td> 
                                </tr>
                                </tbody>

                                <tfoot class="font-weight-bold text-primary table-total">
                                    <tr>
                                        <td colspan="2" class="text-center">TOTAL</td>
                                        <td class="text-center">{{$jqty}}</td>
                                        <td></td>
                                        <td>Rp <?= number_format($pesanan->total_harga , 0, ','); ?></td> 
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
						
						<div class="table-responsive">

                            <table class="table table-bordered mt-4 mb-0 table-extra">
                                <thead>
                                <tr>
                                    <th class="text-uppercase small font-weight-bold">No.</th>
                                    <th class="text-uppercase small font-weight-bold">Extra</th>
                                    <th class="text-uppercase small font-weight-bold">qty(pcs)</th>
                                    <th class="text-uppercase small font-weight-bold">Retail Price</th>
                                    <th class="text-uppercase small font-weight-bold">Total</th> 
                                </tr>
                                </thead>
                                <?php 
                                $i = 1; 
                                $jqty = $pesanan->jumlah_pemesanan;
                                $jharga = $pesanan->harga;
                                $total = $jqty * $jharga;
                                $subtotal = 0;
                                ?>
                                <tbody>
                                @if ($pesanan->kerah_kancing == null)
                                @else 
                                    @php
                                        $total = $jqty * $price->kerah_kancing;
                                        $subtotal += $total;
                                    @endphp
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>Kerah Kancing</td>
                                    <td class="text-center">{{ $jqty }}</td>
                                    <td><span id="hargaBbm">Rp <?= number_format($price->kerah_kancing , 0, ','); ?></span></td>
                                    <td id="totalBbm">Rp <?= number_format($total , 0, ','); ?></td> 
                                </tr> 
                                @endif
                                @if ($pesanan->badan_bawah ==null)
                                @else 
                                    @php
                                        $total = $jqty * $price->p_badan_m;
                                        $subtotal += $total;
                                    @endphp
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>Badan Bawah Melengkung</td>
                                    <td class="text-center">{{ $jqty }}</td>
                                    <td><span id="hargaBbm">Rp <?= number_format($price->p_badan_m , 0, ','); ?></span></td>
                                    <td id="totalBbm">Rp <?= number_format($total , 0, ','); ?><</td> 
                                </tr> 
                                @endif
                                @if ($pesanan->lengan_raglan ==null)
                                @else 
                                    @php
                                        $total = $jqty * $price->pola_lr;
                                        $subtotal += $total;
                                    @endphp
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>Pola Lengan Reglan</td>
                                    <td class="text-center">{{ $jqty }}</td>
                                    <td><span id="Harga">Rp <?= number_format($price->pola_lr , 0, ','); ?></span></td>
                                    <td id="totalLengan">Rp <?= number_format($total , 0, ','); ?></td> 
                                </tr> 
                                @endif
                                @if ($pesanan->lengan_panjang ==null)
                                @else 
                                    @php
                                        $total = $pesanan->lengan_panjang * $price->l_panjang;
                                        $subtotal += $total;
                                    @endphp
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>Lengan Panjang</td>
                                    <td class="text-center">{{ $pesanan->lengan_panjang }}</td>
                                    <td><span id="Harga">Rp <?= number_format($price->l_panjang , 0, ','); ?></span></td>
                                    <td id="totalHarga">Rp <?= number_format($total , 0, ','); ?></td> 
                                </tr> 
                                @endif

                                @if ($pesanan->size_2xl ==null)
                                @else 
                                    @php
                                        $total = $pesanan->size_2xl * $price->s_2xl;
                                        $subtotal += $total;
                                    @endphp
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>Ukuran Baju XXL</td>
                                    <td class="text-center">{{ $pesanan->size_2xl }}</td>
                                    <td><span id="Harga">Rp <?= number_format($price->s_2xl , 0, ','); ?></span></td>
                                    <td id="totalHarga">Rp <?= number_format($total , 0, ','); ?></td> 
                                </tr> 
                                @endif
                                @if ($pesanan->size_3xl ==null)
                                @else 
                                    @php
                                        $total = $pesanan->size_3xl * $price->s_3xl;
                                        $subtotal += $total;
                                    @endphp
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>Ukuran Baju XXXL</td>
                                    <td class="text-center">{{ $pesanan->size_3xl }}</td>
                                    <td><span id="Harga">Rp <?= number_format($price->s_3xl , 0, ','); ?></span></td>
                                    <td id="totalHarga">Rp <?= number_format($total , 0, ','); ?></td> 
                                </tr> 
                                @endif
                                @if ($pesanan->size_4xl ==null)
                                @else 
                                    @php
                                        $total = $pesanan->size_4xl * $price->s_4xl;
                                        $subtotal += $total;
                                    @endphp
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>Ukuran Baju XXXXL</td>
                                    <td class="text-center">{{ $pesanan->size_4xl }}</td>
                                    <td><span id="Harga">Rp <?= number_format($price->s_4xl , 0, ','); ?></span></td>
                                    <td id="totalHarga">Rp <?= number_format($total , 0, ','); ?></td> 
                                </tr> 
                                @endif 

                                @if ($pesanan->celana_printing ==null)
                                @else 
                                    @php
                                        $total = $jqty * $price->celana_printing;
                                        $subtotal += $total;
                                    @endphp
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>Celana Printing</td>
                                    <td class="text-center">{{ $jqty }}</td>
                                    <td><span id="Harga">Rp <?= number_format($price->celana_printing , 0, ','); ?></span></td>
                                    <td id="totalLengan">Rp <?= number_format($total , 0, ','); ?></td> 
                                </tr> 
                                @endif

                                @if ($pesanan->celana_panjang ==null)
                                @else 
                                    @php
                                        $total = $pesanan->celana_panjang * $price->c_panjang;
                                        $subtotal += $total;
                                    @endphp
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>Celana Panjang</td>
                                    <td class="text-center">{{ $pesanan->celana_panjang }}</td>
                                    <td><span id="Harga">Rp <?= number_format($price->c_panjang , 0, ','); ?></span></td>
                                    <td id="totalHarga">Rp <?= number_format($total , 0, ','); ?></td> 
                                </tr> 
                                @endif 
                                
                                @if ($pesanan->kaoskaki ==null)
                                @else 
                                    @php
                                        $total = $pesanan->kaoskaki * $price->kaoskaki;
                                        $subtotal += $total;
                                    @endphp
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>Kaoskaki</td>
                                    <td class="text-center">{{ $pesanan->kaoskaki }}</td>
                                    <td><span id="Harga">Rp <?= number_format($price->kaoskaki , 0, ','); ?></span></td>
                                    <td id="totalHarga">Rp <?= number_format($total , 0, ','); ?></td> 
                                </tr> 
                                @endif 

                                @if ($pesanan->bahan_embos ==null)
                                @else 
                                    @php
                                        $total = $jqty * $price->bahan_embos;
                                        $subtotal += $total;
                                    @endphp
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>Upgrade Bahan Embos</td>
                                    <td class="text-center">{{ $jqty }}</td>
                                    <td><span id="Harga">Rp <?= number_format($price->bahan_embos , 0, ','); ?></span></td>
                                    <td id="totalUpgrade">Rp <?= number_format($total , 0, ','); ?></td> 
                                </tr> 
                                @endif

                                @if ($pesanan->upgrade_logo_3d ==null)
                                @else 
                                    @php
                                        $total = $jqty * $price->u_logo3d;
                                        $subtotal += $total;
                                    @endphp
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>Upgrade Logo 3D</td>
                                    <td class="text-center">{{ $jqty }}</td>
                                    <td><span id="Harga">Rp <?= number_format($price->u_logo3d , 0, ','); ?></span></td>
                                    <td id="totalUpgrade">Rp <?= number_format($total , 0, ','); ?></td> 
                                </tr> 
                                @endif

                                @if ($pesanan->kerah_rib ==null)
                                
                                @else 
                                    @php
                                        $total = $jqty * $price->kerah_custom;
                                        $subtotal += $total;
                                    @endphp
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>Upgrade Kerah Rib</td>
                                    <td class="text-center">{{ $jqty }}</td>
                                    <td><span id="Harga">Rp <?= number_format($price->kerah_custom , 0, ','); ?></span></td>
                                    <td id="totalUpgrade">Rp <?= number_format($total , 0, ','); ?></td> 
                                </tr> 
                                @endif
                                
                                @if ($pesanan->tangan_rib ==null)
                                @else 
                                    @php
                                        $total = $jqty * $price->tangan_rib;
                                        $subtotal += $total;
                                    @endphp
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>Upgrade Tangan Rib</td>
                                    <td class="text-center">{{ $jqty }}</td>
                                    <td><span id="Harga">Rp <?= number_format($price->tangan_rib , 0, ','); ?></span></td>
                                    <td id="totalUpgrade">Rp <?= number_format($total , 0, ','); ?></td> 
                                </tr> 
                                @endif
                                
                                
                                </tbody>
                                
                                <tfoot class="font-weight-bold text-primary">
                                <tr>
                                    <td colspan="3"></td>
                                    <td></td>
                                    <td></td> 
                                </tr>  
                                <tr>
                                    <td colspan="3">Sub-Total</td>
                                    <td></td>
                                    <td>Rp <?= number_format($subtotal , 0, ','); ?></td> 
                                </tr>
                                <tr>
                                    <td colspan="2">TOTAL</td>
                                    <td class="text-center">{{$jqty}}</td>
                                    <td></td>
                                    <td>Rp <?= number_format($pesanan->total_harga , 0, ','); ?></td> 
                                </tr>
                                @if ($pesanan->biaya_dp ==null)
                                @else 
                                <tr>
                                    <td colspan="3"></td>
                                    <td>Initial Payment (50%)</td>
                                    <td>Rp <?= number_format($pesanan->biaya_dp , 0, ','); ?></td> 
                                </tr>
                                @endif
                                @if ($pesanan->biaya_desain ==null)
                                @else 
                                <tr>
                                    <td colspan="3"></td>
                                    <td>Design Payment</td>
                                    <td>Rp <?= number_format($pesanan->biaya_desain , 0, ','); ?></td> 
                                </tr>
                                @endif
                                @if ($pesanan->biaya_pelunasan ==null)
                                @else 
                                <tr>
                                    <td colspan="3"></td>
                                    <td>Final Payment</td>
                                    <td>Rp <?= number_format($pesanan->biaya_pelunasan , 0, ','); ?></td> 
                                </tr>
                                @endif
                                @if ($pesanan->biaya_pengiriman ==null)
                                @else 
                                <tr>
                                    <td colspan="3"></td>
                                    <td>Shipping Fee</td>
                                    <td>Rp <?= number_format($pesanan->biaya_pengiriman , 0, ','); ?></td> 
                                </tr>
                                @endif
                                </tfoot>
                            </table>
                            
                        </div><!--table responsive end-->
						<?php
						// Fungsi untuk mengonversi harga menjadi format rupiah
						function formatRupiah($harga)
						{
							return "Rp " . number_format($harga, 0, ',');
						}
						?>

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
						<div class="container">
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
						</div>

						<style>
							.right-align {
								text-align: right;
								margin-top: 10px;
							}
						</style>
						<div class="container w-unset-quo w-unset">
							<div class="row">
								<div class="col-lg-12">
									<p class="right-align mb-4 pb-4">Best regard,</p>
									<p class="right-align mt-4 pt-4"><u>R. Esa Pangersa Gusti</u></p>
									<p class="right-align" style="line-height: 0px">RATHEN INDONESIA</p>
								</div>
							</div>
						</div>

						<script>
							function goBack() {
								window.history.back();
							}
							document.addEventListener("DOMContentLoaded", function() {
								var dynamicImage = document.getElementById("dynamicImage");
							
								if (dynamicImage) {
									console.log("Element dengan ID dynamicImage ditemukan.");
									dynamicImage.src = "{{asset('/asset/images/logo-dark.png')}}";
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

					</div>
				</div>
			</div>
		</div>

	</div>

</body>

</html>