
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
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
				    <h3 class="text-center font-weight-bold mb-1"><img src="{{ asset('asset/images/logo-dark.png') }}" width="15%" alt=""></h3>
					<p class="text-center font-weight-bold mont mb-0" style="font-size: 12px;">Office: RATHEN INDONESIA, Jl. Mayjen Ishak Djuarsa no.167B Gunung Batu Bogor, Indonesia</p>
					<p class="text-center font-weight-bold mont"><small class="font-weight-bold">Phone No: 0896-1108-1988 | 0878-1108-1988</small></p>
                    <div class="row pb-2 p-2">
                        <div class="col-md-12">
				            <h3 class="text-center font-weight-bold text-primary mt-2">INVOICE</h3>
                            <p class="text-center"><small >No. 00178/inv-10/2023</small></p>
                        </div>
                    </div>
                    <div class="row pb-2 p-2">
                        <div class="col-md-6">
                         <p class="mb-0 font-weight-bold text-primary">Bill to:</p>			 
                         <p class="mb-0">{{ $data->nama_pemesanan }}</p>			 
                         <p class="mb-0">{{ $data->nama_tim }}</p>			 
                         <p class="mb-0">{{ $data->domisili }}</p>			 
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-md-2">
                            <p class="mb-0 font-weight-bold text-primary">Ship to:</p>			 
                            <p class="mb-0">{{ $data->nama_pemesanan }}</p>			 
                            <p class="mb-0">{{ $data->nama_tim }}</p>			 
                            <p class="mb-0">{{ $data->domisili }}</p>			 
                           </div>
                    </div>
                    <div class="table-responsive">
					<table class="table table-bordered mt-4 mb-0">
						<thead>
							<tr>
								<th class="text-uppercase small font-weight-bold">SR No.</th>
								<th class="text-uppercase small font-weight-bold">Item</th>
								<th class="text-uppercase small font-weight-bold">Qty</th>
								<th class="text-uppercase small font-weight-bold">Unit Price</th>
								<th class="text-uppercase small font-weight-bold">Desc</th>
								<th class="text-uppercase small font-weight-bold">Tax %</th>
								<th class="text-uppercase small font-weight-bold">Tax Amt.</th>
								<th class="text-uppercase small font-weight-bold">Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>10 Get item</td>
								<td>23</td>
								<td>100.00</td>
								<td>00</td>
								<td>GST 9%</td>
								<td>800</td>
								<td>1800</td>
							</tr>
							<tr>
								<td>1</td>
								<td>10 Get item</td>
								<td>23</td>
								<td>100.00</td>
								<td>00</td>
								<td>GST 9%</td>
								<td>800</td>
								<td>1800</td>
							</tr>
							<tr>
								<td>1</td>
								<td>10 Get item</td>
								<td>23</td>
								<td>100.00</td>
								<td>00</td>
								<td>GST 9%</td>
								<td>800</td>
								<td>1800</td>
							</tr>
							
						</tbody>
						<tfoot class="font-weight-bold small">
						 <tr>
							<td colspan="2">Total</td>
							<td>1800</td>
							<td> </td>
							<td>0.00</td>
							<td> </td>
							<td>900</td>
							<td>1000</td>
						 </tr>
						 <tr>
							<td colspan="8">Amount in words: Rs One Thusend Five Hundrate only 
							<span class="float-right">Balance:2000</span>
							</td>
							
						 </tr>
						 <tr>
							<td colspan="8">Card: 20000</td>
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

</body>
</html>