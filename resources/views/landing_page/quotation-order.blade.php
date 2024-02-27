<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rathen</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700|Open+Sans:400,600'>
  <!-- <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700|Open+Sans:400,600'> -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css'><link rel="stylesheet" href="{{ asset('asset/css/formOrder.css') }}">

</head>
<body>
<!-- partial:index.partial.html -->
<header>
    <div class="container">
      <div class="navigation center-content">

        <div class="logo">
          <img class="icon icon-basket" src="{{asset('asset/cfind/source/images/rathen.png')}}" width="12%"></div>
        
      </div>
      @if (isset($pesanan->kd_pembelian))
      <div class="notification">
        Rathen - Invoice
      </div>
      @else
      <div class="notification">
        Rathen - Quotation
      </div>
      @endif
    </div>
  </header>
  <section class="content" style="overflow-x:hidden;">

    <button class="m-3 button back" onclick="goBack()"><i class='icon icon-arrow-left'></i></button>
    
    <div class="container">
      <div class="payment">
        <div class="payment__info" style="width:100rem">
          <div class="payment__cc" id="myDIV">
            @if (isset($pesanan->kd_pembelian))
            <div class="card-body card-body-mobile" id="content">
              <h3 class="text-center font-weight-bold mb-1"><img src="{{ asset('/asset/images/logo-dark.png') }}" width="15%" alt=""></h3>
              <p class="text-center font-weight-bold mont mb-0" style="font-size: 12px;">Office: RATHEN INDONESIA, Jl. Mayjen Ishak Djuarsa no.167B Gunung Batu Bogor, Indonesia</p>
              <p class="text-center font-weight-bold mont"><small class="font-weight-bold">Phone No: 0896-1108-1988 | 0878-1108-1988</small></p>
              <div class="row content-center">
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
                                @if ($pesanan->kerah_kancing ==null)
                                @else 
                                    @php
                                        $total = $jqty * $price->kerah_kancing;
                                        $subtotal += $total;
                                    @endphp
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>Kerah Kancing</td>
                                    <td class="text-center">{{ $jqty }}</td>
                                    <td><span id="hargaBbm">Rp <?= number_format($price->kerah_kancing , 0, ','); ?><</span></td>
                                    <td id="totalBbm">Rp <?= number_format($total , 0, ','); ?><</td> 
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
                                    <td><span id="hargaBbm">Rp <?= number_format($price->p_badan_m , 0, ','); ?><</span></td>
                                    <td id="totalBbm">Rp <?= number_format($total , 0, ','); ?><</td> 
                                </tr> 
                                @endif
                                @if ($pesanan->pola_lengan ==null)
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
              <br>
                          <p style="font-style: italic;text-align:justify;">Note: All payment should be direct bank in into our official bank account as following bank:</p>
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
                .text-primary{
                  color:#000!important;
                }
                .btn-download{
                  width: 18.5rem;
                  padding: 2rem 0 0 2rem;
                }
                </style>
                <div class="container">
                  <div class="row">
                    <table class="table-responsive" style="width: 100%; border:10px; font-size:14px; font-weight: bold;  font-weight:100; color:black;">
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
                  .w-680{
                    width: 680px ;;
                  }
                  </style>
                  <div class="container w-680">
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
                            window.location.href = "/price-list/{{$pesanan->kategori_harga}}";
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
            
            <style>
                .table-extra {
                    display: none;
                }
                .table-total{
                    display: table-footer-group;
;
                }
            </style>
            @if ($subtotal > 0)
                <style>
                    .table-extra {
                        display: table;
                    }
                    .table-total {
                        display: none;
                    }
                </style>
            @endif
            
            


            
            @else
            <div class="card-body card-body-mobile" id="content">
                <h3 class="text-center font-weight-bold mb-1">
                    <img id="dynamicImage" src="{{public_path('/asset/images/logo-dark.png')}}" width="15%" ></h3>
                <p class="text-center font-weight-bold mont mb-0" style="font-size: 12px;">Office: RATHEN
                    INDONESIA, Jl. Mayjen Ishak Djuarsa no.167B Gunung Batu Bogor, Indonesia</p>
                <p class="text-center font-weight-bold mont"><small class="font-weight-bold">Phone No:
                        0896-1108-1988 | 0878-1108-1988</small></p>
                <div class="row pb-2 p-2">
                    <div class="col-md-12">
                        <h5 class="text-center font-weight-bold mt-2">QUOTATION</h5>
                    </div>
                </div>

                <div class="row pb-2 p-2">
                    <div class="col-md-6" style="text-align:justify">
                        <p class="mb-0 font-weight-bold">Kepada Yth:</p>
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
                                <th class="text-uppercase small font-weight-bold">Nama Produk</th>
                                <th class="text-uppercase small font-weight-bold">Qty(pcs)</th>
                                <th class="text-uppercase small font-weight-bold">Harga</th>
                                <th class="text-uppercase small font-weight-bold">Total</th>
                            </tr>
                        </thead>
                        <?php 
                            $i = 1; 
                            $total = $qty * $harga;
                        ?>
                        <tbody>
                            <tr>
                                <td>{{ $product }}</td>
                                <td>{{ $qty }}</td>
                                <td><span id="Harga">Rp <?= number_format($harga , 0, ','); ?></span></td>
                                <td id="totalHarga">Rp <?= number_format($total , 0, ','); ?></td> 
                            </tr>

                        </tbody>
                    </table>
                </div><!--table responsive end-->
                
                <div class="table-responsive">
                    <table class="table table-bordered mt-4 mb-0 ">
                        <thead class="text-center">
                            <tr class="text-center">
                                <th class="text-uppercase small font-weight-bold">No.</th>
                                <th class="text-uppercase small font-weight-bold">Extra</th>
                                <th class="text-uppercase small font-weight-bold">Qty(pcs)</th>
                                <th class="text-uppercase small font-weight-bold">Retail Price</th>
                                <th class="text-uppercase small font-weight-bold">Total</th>
                            </tr>
                        </thead>
                        <?php 
                            $i = 1;
                            $subTotal = 0;
                        ?>
                        <tbody>
                            @if ($kerah_kancing ==null)
                            @else 
                            <?php 
                                $totalkancing = $qty * $kerah_kancing;
                                $subTotal += $totalkancing;
                            ?>
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Kerah Pakai Kancing</td>
                                <td>{{$qty}}</td>
                                <td><span id="Harga">Rp <?=number_format($kerah_kancing, 0, ',')?></span></td>
                                <td id="totalHarga">Rp <?=number_format($totalkancing, 0, ',')?></td> 
                              </tr>
                            @endif
                            @if ($badan_bawah ==null)
                            @else 
                            <?php 
                                $totalbbm = $qty * $badan_bawah;
                                $subTotal += $totalbbm;
                            ?>
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Badan Bawah Melengkung</td>
                                <td>{{ $qty }}</td>
                                <td><span id="Harga">Rp <?=number_format($badan_bawah, 0, ',')?></span></td>
                                <td id="totalHarga">Rp <?=number_format($totalbbm, 0, ',')?></td> 
                              </tr>
                            @endif
                            @if ($pola_lengan ==null)
                            @else 
                            <?php 
                                $totallpr = $qty * $pola_lengan;
                                $subTotal += $totallpr;
                            ?>
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Lengan Pola Raglan</td>
                                <td>{{ $qty }}</td>
                                <td><span id="Harga">Rp <?=number_format($pola_lengan, 0, ',')?></span></td>
                                <td id="totalHarga">Rp <?=number_format($totallpr, 0, ',')?></td> 
                              </tr> 
                            @endif
                            @if ($lengan_panjang ==null)
                            @else
                            <?php 
                                $totallp = $lengan_panjang * $price->l_panjang;
                                $subTotal += $totallp;
                            ?>
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Lengan Panjang</td>
                                <td>{{ $lengan_panjang }}</td>
                                <td><span id="Harga">Rp <?=number_format($price->l_panjang, 0, ',')?></span></td>
                                <td id="totalHarga">Rp <?=number_format($totallp, 0, ',')?></td> 
                              </tr> 
                            @endif
                            @if ($s2xl ==null)
                            @else 
                            <?php 
                                $total2xl = $s2xl * $price->s_2xl;
                                $subTotal += $total2xl;
                            ?>
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Size 2XL</td>
                                <td>{{ $s2xl }}</td>
                                <td><span id="Harga">Rp <?=number_format($price->s_2xl , 0, ',')?></span></td>
                                <td id="totalHarga">Rp <?=number_format($total2xl , 0, ',')?></td> 
                              </tr> 
                            @endif
                            @if ($s3xl ==null)
                            @else 
                            <?php 
                                $total3xl = $s3xl * $price->s_3xl;
                                $subTotal += $total3xl;
                            ?>
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Size 3XL</td>
                                <td>{{ $s3xl }}</td>
                                <td><span id="Harga">Rp <?=number_format($price->s_3xl , 0, ',')?></span></td>
                                <td id="totalHarga">Rp <?=number_format( $total3xl , 0, ',')?></td> 
                              </tr> 
                            @endif
                            @if ($s4xl ==null)
                            @else 
                            <?php 
                                $total4xl = $s4xl * $price->s_4xl;
                                $subTotal += $total4xl;
                            ?>
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Size > 4XL</td>
                                <td>{{ $s4xl }}</td>
                                <td><span id="Harga">Rp <?=number_format( $price->s_4xl , 0, ',')?></span></td>
                                <td id="totalHarga">Rp <?=number_format( $total4xl , 0, ',')?></td> 
                              </tr> 
                            @endif
                            @if ($celana_printing ==null)
                            @else 
                            <?php 
                                $totalcprint = $qty * $celana_printing;
                                $subTotal += $totalcprint;
                            ?>
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Celana Printing</td>
                                <td>{{$qty}}</td>
                                <td><span id="Harga">Rp <?=number_format( $celana_printing , 0, ',')?></span></td>
                                <td id="totalHarga">Rp <?=number_format( $totalcprint , 0, ',')?></td> 
                              </tr> 
                            @endif
                            @if ($celana_pro ==null)
                            @else 
                            <?php 
                                $totalcpro = $celana_pro * $price->c_panjang;
                                $subTotal += $totalcpro;
                            ?>
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Celana Panjang PRO</td>
                                <td>{{ $celana_pro }}</td>
                                <td><span id="Harga">Rp <?=number_format( $price->c_panjang , 0, ',')?></span></td>
                                <td id="totalHarga">Rp <?=number_format( $totalcpro , 0, ',')?></td> 
                              </tr> 
                            @endif
                            @if ($kaoskaki ==null)
                            @else 
                            <?php 
                                $totalkki = $kaoskaki * $price->kaoskaki;
                                $subTotal += $totalkki;
                            ?>
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Kaoskaki</td>
                                <td>{{ $kaoskaki }}</td>
                                <td><span id="Harga">Rp <?= number_format( $price->kaoskaki , 0, ',')?></span></td>
                                <td id="totalHarga">Rp <?=number_format( $totalkki , 0, ',')?></td> 
                              </tr> 
                            @endif
                            @if ($bahan_embos ==null)
                            @else 
                            <?php 
                                $totalbe = $qty * $bahan_embos;
                                $subTotal += $totalbe;
                            ?>
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Bahan Embos</td>
                                <td>{{$qty}}</td>
                                <td><span id="Harga">Rp <?=number_format($bahan_embos , 0, ',')?></span></td>
                                <td id="totalHarga">Rp <?=number_format($totalbe , 0, ',')?></td> 
                              </tr> 
                            @endif
                            @if ($logo_3d ==null)
                            @else 
                            <?php 
                                $total3d = $qty * $logo_3d;
                                $subTotal += $total3d;
                            ?>
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Logo 3D</td>
                                <td>{{$qty}}</td>
                                <td><span id="Harga">Rp <?=number_format($logo_3d , 0, ',')?></span></td>
                                <td id="totalHarga">Rp <?=number_format($total3d , 0, ',')?></td> 
                              </tr> 
                            @endif
                            @if ($kerah_rib ==null)
                            @else 
                            <?php 
                                $totalkrib = $qty * $kerah_rib;
                                $subTotal += $totalkrib;
                            ?>
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Kerah Elastic Rib</td>
                                <td>{{$qty}}</td>
                                <td><span id="Harga">Rp <?=number_format($kerah_rib , 0, ',')?></span></td>
                                <td id="totalHarga">Rp <?=number_format($totalkrib , 0, ',')?></td> 
                              </tr> 
                            @endif
                            @if ($tangan_rib ==null)
                            @else 
                            <?php 
                                $totaltrib = $qty * $tangan_rib;
                                $subTotal += $totaltrib;
                            ?>
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Ujung Tangan Elastic Rib</td>
                                <td>{{$qty}}</td>
                                <td><span id="Harga">Rp <?=number_format($tangan_rib , 0, ',')?></span></td>
                                <td id="totalHarga">Rp <?=number_format($totaltrib , 0, ',')?></td> 
                              </tr> 
                            @endif

                        </tbody>
                        <tfoot class="font-weight-bold">
                            <?php
                                $total += $subTotal;
                            ?>
                            <tr>
                                <td colspan="3"></td>
                                <td></td>
                                <td></td> 
                            </tr>  
                            <tr>
                                <td colspan="3"></td>
                                <td>Sub-Total</td>
                                <td>Rp <?=number_format($subTotal , 0, ',')?></td> 
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center">TOTAL</td>
                                <td class="text-center">{{ $qty }}</td>
                                <td>Rp <?=number_format($harga , 0, ',')?></td>
                                <td>Rp <?=number_format($total , 0, ',')?></td> 
                            </tr>
                        </tfoot>
                    </table>
                </div><!--table responsive end-->
                {{--<?php
                // Fungsi untuk mengonversi harga menjadi format rupiah
                function formatRupiah($harga)
                {
                    return "Rp " . number_format($harga, 0, ',');
                }
                ?>--}}

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
                        window.location.href = "/price-list/{{$kd_part}}";
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
            @endif
          </div>
          <div class="container w-unset">
            @if (isset($pesanan->kd_pembelian))
            <div class="mb-4 ml-3">
                <a href="/form-2/{{$kode}}" target="_blank" class="btn">Isi Data
                    <i class="icon icon-doc"></i>
                </a>
            </div>
            <div>
                <a href="{{ $kode ? route('export', ['id' => $kode]) : '#' }}" class="btn action__submit">Download
                    <i class="icon icon-cloud-download"></i>
                </a>
            </div>
            @else
            <div>
              <a href="{{ route('generate') }}" class="btn action__submit">Download
                <i class="icon icon-cloud-download"></i>
              </a>
            </div>
            @endif
          </div>
          
        </div>
      </div>
    </div>

    <div class="container">
      <div class="actions pt135">
        <a href="/form/orderStep5" class="btn action__submit hidden">Next
          <i class="icon icon-arrow-right-circle"></i>
        </a>
        <a href="/page-custom" class="backBtn">Go Back to Rathen</a>
      </div>
  </section>
  </div>
<!-- partial -->
<style>
    *,
    *:after,
    *:before {
        /* box-sizing: border-box; */
        overflow-x: visible;
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
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var modal = document.getElementById('inputDataModal');
    var btn = document.getElementById('inputDataBtn');
    var span = document.getElementsByClassName('close')[0];
    var form = document.getElementById('inputDataForm');
    var tableBody = document.querySelector('.wp-table tbody');

    // Counter for row index
    var rowIndex = 1;

    // Display the modal when the button is clicked
    btn.onclick = function () {
      modal.style.display = 'block';
    };

    // Close the modal when the close button is clicked
    span.onclick = function () {
      modal.style.display = 'none';
    };

    // Close the modal when clicking outside of it
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = 'none';
      }
    };

    // Handle form submission
    form.addEventListener('submit', function (e) {
      e.preventDefault();

      // Get input values
      var name = document.getElementById('name').value;
      var number = document.getElementById('number').value;
      var size = document.getElementById('size').value;

      // Check if any input is provided
      if (name || number || size) {
        // Create a new table row with the input values
        var newRow = tableBody.insertRow();
        var cell1 = newRow.insertCell(0);
        var cell2 = newRow.insertCell(1);
        var cell3 = newRow.insertCell(2);
        var cell4 = newRow.insertCell(3);
        cell1.innerHTML = rowIndex++; // Increment the counter
        cell2.innerHTML = name || '-';
        cell3.innerHTML = number || '-';
        cell4.innerHTML = size || '-';
      }

      // Close the modal
      modal.style.display = 'none';

      // Clear the form fields for the next input
      form.reset();
    });
  });
</script>

</body>
</html>
