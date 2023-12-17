
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Invoice</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</head>
<body>
  <style>
    @font-face {
    font-family: Montheavy;
    src: url("../../asset/fonts/Mont/Mont-Heavy.otf");
    }
    .mont{
        font-family: Montheavy;
    }
    p{
        line-height: 20px;
    }
    .table td, .table th {
    padding: 0.5rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
    font-size: 14px;
}
  </style>
	<a href="{{ route('export') }}" class="print"><button>
		<i class='bx bx-printer'></i></button></a>

<div class="container mt-3">
	<div class="row justify-content-center">
		<div class="col-8">
			<div class="card w-100">
				<div class="card-body">
					<h3 class="text-center font-weight-bold mb-1"><img src="{{ asset('/asset/images/logo-dark.png') }}" width="15%" alt=""></h3>
					<p class="text-center font-weight-bold mont mb-0" style="font-size: 12px;">Office: RATHEN INDONESIA, Jl. Mayjen Ishak Djuarsa no.167B Gunung Batu Bogor, Indonesia</p>
					<p class="text-center font-weight-bold mont"><small class="font-weight-bold">Phone No: 0896-1108-1988 | 0878-1108-1988</small></p>
					<div class="row pb-2 p-2">
						<div class="col-md-12">
							<h3 class="text-center font-weight-bold text-primary mt-2">INVOICE</h3>
							<p class="text-center"><small >No. 00178/inv-10/2023</small></p>
						</div>
					</div>
					<div class="row pb-2 p-2">
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
								<th class="text-uppercase small font-weight-bold">Article</th>
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
								<td>{{ $Jarsey }}</td>
								<td>{{ $jqty }}</td>
								<td><span id="Harga">{{ $jharga }}</span></td>
								<td id="totalHarga">{{ $total }}</td> 
							</tr>
						@if ($pesanan->badan_bawah ==null)
						@else 
							<tr>
								<td>{{ $i++ }}</td>
								<td>Badan Bawah Melengkung</td>
								<td>{{ $pesanan->badan_bawah }}</td>
								<td><span id="hargaBbm">{{ $price->p_badan_m }}</span></td>
								<td id="totalBbm">{{ $total }}</td> 
							</tr> 
						@endif
						@if ($pesanan->pola_lengan ==null)
						@else 
							<tr>
								<td>{{ $i++ }}</td>
								<td>Pola Lengan Reglan</td>
								<td>{{ $pesanan->pola_lengan }}</td>
								<td><span id="Harga">{{ $price->pola_lr }}</span></td>
								<td id="totalLengan">{{ $total }}</td> 
							</tr> 
						@endif
						@if ($pesanan->upgrade_logo_3d ==null)
						@else 
							<tr>
								<td>{{ $i++ }}</td>
								<td>Upgrade Logo 3D</td>
								<td>{{ $pesanan->upgrade_logo_3d }}</td>
								<td><span id="Harga">{{ $price->u_logo3d }}</span></td>
								<td id="totalUpgrade">{{ $total }}</td> 
							</tr> 
						@endif
						@if ($pesanan->logo_tim_dicelana ==null)
						@else 
							<tr>
								<td>{{ $i++ }}</td>
								<td>Logo Tim Di Celana</td>
								<td>{{ $pesanan->logo_tim_dicelana }}</td>
								<td><span id="Harga">{{ $price->l_timdicelana }}</span></td>
								<td id="totalHarga">{{ $total }}</td> 
							</tr> 
						@endif
						@if ($pesanan->lengan_panjang ==null)
						@else 
							<tr>
								<td>{{ $i++ }}</td>
								<td>Lengan Panjang</td>
								<td>{{ $pesanan->lengan_panjang }}</td>
								<td><span id="Harga">{{ $price->l_panjang }}</span></td>
								<td id="totalHarga">{{ $total }}</td> 
							</tr> 
						@endif

						@if ($pesanan->size_2xl ==null)
						@else 
							<tr>
								<td>{{ $i++ }}</td>
								<td>Ukuran Baju XXL</td>
								<td>{{ $pesanan->size_2xl }}</td>
								<td><span id="Harga">{{ $price->s_2xl }}</span></td>
								<td id="totalHarga">{{ $total }}</td> 
							</tr> 
						@endif
						@if ($pesanan->size_3xl ==null)
						@else 
							<tr>
								<td>{{ $i++ }}</td>
								<td>Ukuran Baju XXXL</td>
								<td>{{ $pesanan->size_3xl }}</td>
								<td><span id="Harga">{{ $price->s_3xl }}</span></td>
								<td id="totalHarga">{{ $total }}</td> 
							</tr> 
						@endif
						@if ($pesanan->size_4xl ==null)
						@else 
							<tr>
								<td>{{ $i++ }}</td>
								<td>Ukuran Baju XXXXL</td>
								<td>{{ $pesanan->size_4xl }}</td>
								<td><span id="Harga">{{ $price->s_4xl }}</span></td>
								<td id="totalHarga">{{ $total }}</td> 
							</tr> 
						@endif 
							
						</tbody>
						
						<tfoot class="font-weight-bold small text-primary">
							<tr>
								<td colspan="3"></td>
								<td></td>
								<td></td> 
							</tr>  
							<tr>
								<td colspan="3"></td>
								<td>Sub-Total</td>
								<td>IDR </td> 
							</tr>
							<tr>
								<td colspan="3"></td>
								<td>Initial Payment (50%)</td>
								<td>IDR </td> 
							</tr>
							<tr>
								<td colspan="3"></td>
								<td>Final Payment</td>
								<td>IDR </td> 
							</tr>
							<tr>
								<td colspan="3"></td>
								<td>Shepping Fee</td>
								<td>IDR </td> 
							</tr>
							<tr>
								<td colspan="2" class="text-center">TOTAL</td>
								<td class="text-center">QTY</td>
								<td></td>
								<td>IDR</td> 
							</tr>
						</tfoot>
                      </table>
                    </div><!--table responsive end-->
					<br>
                       <p style="font-style: italic;">Note: All payment should be direct bank in into our official bank account as following bank:</p>
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
						  width: 10%;
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
{{-- Format IDR --}}
<script> 
	function formatHarga(total) {
			return "Rp " + total.toLocaleString();
	}  


	// =====================================
	var tharga = {{ $jharga }};
	document.getElementById("Harga").innerText = formatHarga(tharga);

	var tharga2 = {{ $total }};
	document.getElementById("totalHarga").innerText = formatHarga(tharga2);

	var tharga3 = {{ $price->p_badan_m }};
	document.getElementById("hargaBbm").innerText = formatHarga(tharga3);

	document.getElementById("totalBbm").innerText = formatHarga(totalBbm);

	document.getElementById("totalLengan").innerText = formatHarga(totalLengan);

	document.getElementById("totalUpgrade").innerText = formatHarga(totalUpgrade);

</script>
</body>
</html>
