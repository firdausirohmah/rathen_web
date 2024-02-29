<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rathen</title>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700|Open+Sans:400,600'> -->
  <!-- <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700|Open+Sans:400,600'> -->
  <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css'>
  <link rel="stylesheet" href="{{ asset('asset/css/formOrder.css') }}"> -->

</head>

<body>
  <!-- partial:index.partial.html -->
  <header>
    <div class="container container-logo">
      <div class="navigation center-content">

        <div class="logo">
          <img class="icon icon-basket" src="{{asset('asset/cfind/source/images/rathen.png')}}" width="12%">
        </div>

      </div>
      <div class="notification">
        Rathen - Production
      </div>

    </div>
  </header>
  <section class="content" style="overflow-x:hidden;">


    <div class="container">
      <div class="payment">
        <div class="payment__info" style="width:129rem">
          <div class="payment__cc" id="myDIV">
            @if($pesanan->status_order == 'produksi')
            <div class="card-body card-body-mobile" id="content">
              <h3 class="text-center font-weight-bold mb-1"><img src="{{ asset('/asset/images/logo-dark.png') }}" style="width:10%" alt=""></h3>
              <div class="row content-center">
                <div class="col-md-12">
                  <h4 class="text-center font-weight-bold text-primary mt-2">Form Persetujuan</h4>
                  <p class="text-center"><small>No. {{$pesanan->kd_order}}/inv-{{$pesanan->kd_order}}/2024</small></p>
                </div>
              </div>

              <div class="table-responsive">
                <table class="table table-bordered mt-4 mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase font-weight-bold" style="width:18rem;">Design</th>
                      <th class="text-uppercase font-weight-bold">Detail</th>
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
                          <img src="{{asset('uploads'.'/'.$pesanan->design_jersey_pemain)}}" alt="">
                          <span><b>Size</b>: S-3, M-11, L-14, XL-5, 2XL-1</span>
                        </div>
                      </td>
                      <td class="d-flex text-center" style="flex-wrap:wrap;">
                        <div class="img-tableDetail">
                          <img src="{{ asset('asset/images/price-list/komparasi/fabrics.jpg') }}">
                          <span class="font-weight-bold">Pola Badan:</span>
                          <span>{{ $pesanan->badan_bawah }}</span>
                        </div>
                        <div class="img-tableDetail">
                          <img src="{{ asset('asset/extra/putih2.png') }}">
                          <span class="font-weight-bold">Pola Lengan:</span>
                          <span>{{ $pesanan->pola_lengan }}</span>
                        </div>
                        <div class="img-tableDetail">
                          <img src="{{ asset('asset/extra/casual/C-3.png') }}">
                          <span class="font-weight-bold">Jenis Kerah:</span>
                          <span>{{ $pesanan->model_kerah }}</span>
                        </div>
                        <div class="img-tableDetail">
                          <img src="{{ asset('asset/polabadan/belakangNormal.png') }}">
                          <span class="font-weight-bold">Bawah Baju:</span>
                          <span>Normal</span>
                        </div>
                        <div class="img-tableDetail">
                          <img src="{{ asset('asset/images/price-list/komparasi/lasercut.jpg') }}">
                          <span class="font-weight-bold">Lasercut:</span>
                          <span>Tidak</span>
                        </div>
                        <div class="img-tableDetail">
                          <img src="{{ asset('asset/images/price-list/komparasi/logo-tim.jpg') }}">
                          <span class="font-weight-bold">Jenis Logo:</span>
                          <span>Print</span>
                        </div>
                        <div class="img-tableDetail">
                          <img src="{{ asset('asset/images/price-list/komparasi/fabrics.jpg') }}">
                          <span class="font-weight-bold">Jenis Bahan:</span>
                          <span>Adidas</span>
                        </div>
                        <div class="img-tableDetail">
                          <img src="{{ asset('asset/images/kaoskaki.jpeg') }}">
                          <span class="font-weight-bold">Kaoskaki:</span>
                          <span>{{ $pesanan->kaoskaki }}</span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td rowspan="2">
                        <div class="img-tableView">
                          <b class="title">Design - Kiper</b>
                          <img src="{{asset('uploads'.'/'.$pesanan->design_jersey_pemain)}}" alt="">
                          <span><b>Size</b>: M-2, L-2</span>
                        </div>
                      </td>
                      <td>
                        Note:
                        <ul>
                          <li>Sublim badan depan saja</li>
                          <li>lengan dan badan belakang bahan adidas (putih, dongker)</li>
                          <li>Samping baju variasi zig zag gold 2 cm</li>
                          <li>Nat/list ujung tangan gold 1,5 cm disambung</li>
                          <li>ujung tangan adidas (putih, dongker) 3 cm</li>
                          <li>Celana adidas (putih, dongker)polos</li>
                        </ul>
                      </td>

                    </tr>
                    <tr>
                      <td class="text-right">
                        <div>Approval</div>
                        <div class="py-5"></div>
                        <div>
                          <span class="m-5">
                            @if(isset($aproval_3))
                            @if($aproval_3->is_agreed == 1)
                            <img src="https://cdn.kibrispdr.org/data/957/tanda-tangan-keren-png-6.png" alt="" style="width: 100px;display:none;float:left;" id="ttd1"><br>
                            @endif
                            @endif
                            (Rhofik)</span>
                            @if(isset($aproval_2))
                            @if($aproval_2->is_agreed == 1)
                            <img src="https://cdn.kibrispdr.org/data/957/tanda-tangan-keren-png-6.png" alt="" style="width: 100px;display:none;" id="ttd2"><br>
                            @endif
                            @endif
                          <span>(Ervina)</span>
                        </div>
                      </td>

                    </tr>
                  </tbody>


                </table>
              </div>


              <br>
              <p style="font-style: italic;text-align:justify;">Note: All payment should be direct bank in into our official bank account as following bank:</p>

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

             
              <div class="container w-680">
                <div class="row">
                  <div class="col-lg-12">
                    <p class="right-align mb-4 pb-4">Best regard,</p>
                    @if(isset($aproval_1))
                            @if($aproval_1->is_agreed == 1)
                            <img src="https://cdn.kibrispdr.org/data/957/tanda-tangan-keren-png-6.png" alt="" style="width: 100px;display:none;float:left;" id="ttd3"><br>
                            @endif
                            @endif
                    <p class="right-align mt-4 pt-4"><u>R. Esa Pangersa Gusti</u></p>
                    <p class="right-align" style="line-height: 0px">RATHEN INDONESIA</p>
                  </div>
                </div>
              </div>

              
            
            </div>

            @else

            <div class="card-body card-body-mobile" id="content">
              <h3 class="text-center font-weight-bold mb-1"><img src="{{ asset('/asset/images/logo-dark.png') }}" width="15%" alt=""></h3>
              <p class="text-center font-weight-bold mont mb-0" style="font-size: 12px;">Office: RATHEN INDONESIA, Jl. Mayjen Ishak Djuarsa no.167B Gunung Batu Bogor, Indonesia</p>
              <p class="text-center font-weight-bold mont"><small class="font-weight-bold">Phone No: 0896-1108-1988 | 0878-1108-1988</small></p>
              <div class="row content-center">
                <div class="col-md-12">
                  <h3 class="text-center font-weight-bold text-primary mt-2">INVOICE</h3>
                  <p class="text-center"><small>No. 00178/inv-10/2023</small></p>
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
                      <td><span id="Harga">Rp <?= number_format($jharga, 0, ','); ?></span></td>
                      <td id="totalHarga">Rp <?= number_format($total, 0, ','); ?></td>
                    </tr>
                  </tbody>

                  <tfoot class="font-weight-bold text-primary table-total">
                    <tr>
                      <td colspan="2" class="text-center">TOTAL</td>
                      <td class="text-center">{{$jqty}}</td>
                      <td></td>
                      <td>Rp <?= number_format($pesanan->total_harga, 0, ','); ?></td>
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
                      <td><span id="hargaBbm">Rp <?= number_format($price->kerah_kancing, 0, ','); ?><< /span>
                      </td>
                      <td id="totalBbm">Rp <?= number_format($total, 0, ','); ?><< /td>
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
                      <td><span id="hargaBbm">Rp <?= number_format($price->p_badan_m, 0, ','); ?><< /span>
                      </td>
                      <td id="totalBbm">Rp <?= number_format($total, 0, ','); ?><< /td>
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
                      <td><span id="Harga">Rp <?= number_format($price->pola_lr, 0, ','); ?></span></td>
                      <td id="totalLengan">Rp <?= number_format($total, 0, ','); ?></td>
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
                      <td><span id="Harga">Rp <?= number_format($price->l_panjang, 0, ','); ?></span></td>
                      <td id="totalHarga">Rp <?= number_format($total, 0, ','); ?></td>
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
                      <td><span id="Harga">Rp <?= number_format($price->s_2xl, 0, ','); ?></span></td>
                      <td id="totalHarga">Rp <?= number_format($total, 0, ','); ?></td>
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
                      <td><span id="Harga">Rp <?= number_format($price->s_3xl, 0, ','); ?></span></td>
                      <td id="totalHarga">Rp <?= number_format($total, 0, ','); ?></td>
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
                      <td><span id="Harga">Rp <?= number_format($price->s_4xl, 0, ','); ?></span></td>
                      <td id="totalHarga">Rp <?= number_format($total, 0, ','); ?></td>
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
                      <td><span id="Harga">Rp <?= number_format($price->celana_printing, 0, ','); ?></span></td>
                      <td id="totalLengan">Rp <?= number_format($total, 0, ','); ?></td>
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
                      <td><span id="Harga">Rp <?= number_format($price->c_panjang, 0, ','); ?></span></td>
                      <td id="totalHarga">Rp <?= number_format($total, 0, ','); ?></td>
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
                      <td><span id="Harga">Rp <?= number_format($price->kaoskaki, 0, ','); ?></span></td>
                      <td id="totalHarga">Rp <?= number_format($total, 0, ','); ?></td>
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
                      <td><span id="Harga">Rp <?= number_format($price->bahan_embos, 0, ','); ?></span></td>
                      <td id="totalUpgrade">Rp <?= number_format($total, 0, ','); ?></td>
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
                      <td><span id="Harga">Rp <?= number_format($price->u_logo3d, 0, ','); ?></span></td>
                      <td id="totalUpgrade">Rp <?= number_format($total, 0, ','); ?></td>
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
                      <td><span id="Harga">Rp <?= number_format($price->kerah_custom, 0, ','); ?></span></td>
                      <td id="totalUpgrade">Rp <?= number_format($total, 0, ','); ?></td>
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
                      <td><span id="Harga">Rp <?= number_format($price->tangan_rib, 0, ','); ?></span></td>
                      <td id="totalUpgrade">Rp <?= number_format($total, 0, ','); ?></td>
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
                      <td>Rp <?= number_format($subtotal, 0, ','); ?></td>
                    </tr>
                    <tr>
                      <td colspan="2">TOTAL</td>
                      <td class="text-center">{{$jqty}}</td>
                      <td></td>
                      <td>Rp <?= number_format($pesanan->total_harga, 0, ','); ?></td>
                    </tr>
                    @if ($pesanan->biaya_dp ==null)
                    @else
                    <tr>
                      <td colspan="3"></td>
                      <td>Initial Payment (50%)</td>
                      <td>Rp <?= number_format($pesanan->biaya_dp, 0, ','); ?></td>
                    </tr>
                    @endif
                    @if ($pesanan->biaya_desain ==null)
                    @else
                    <tr>
                      <td colspan="3"></td>
                      <td>Design Payment</td>
                      <td>Rp <?= number_format($pesanan->biaya_desain, 0, ','); ?></td>
                    </tr>
                    @endif
                    @if ($pesanan->biaya_pelunasan ==null)
                    @else
                    <tr>
                      <td colspan="3"></td>
                      <td>Final Payment</td>
                      <td>Rp <?= number_format($pesanan->biaya_pelunasan, 0, ','); ?></td>
                    </tr>
                    @endif
                    @if ($pesanan->biaya_pengiriman ==null)
                    @else
                    <tr>
                      <td colspan="3"></td>
                      <td>Shipping Fee</td>
                      <td>Rp <?= number_format($pesanan->biaya_pengiriman, 0, ','); ?></td>
                    </tr>
                    @endif
                  </tfoot>
                </table>

              </div><!--table responsive end-->
              <br>
              <p style="font-style: italic;text-align:justify;">Note: All payment should be direct bank in into our official bank account as following bank:</p>
              
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

              
              <div class="container w-680">
                <div class="row">
                  <div class="col-lg-12">
                    <p class="right-align mb-4 pb-4">Best regard,</p>
                    <p class="right-align mt-4 pt-4"><u>R. Esa Pangersa Gusti</u></p>
                    <p class="right-align" style="line-height: 0px">RATHEN INDONESIA</p>
                  </div>
                </div>
              </div>

             
            </div>

            @endif

           


          </div>
          
          
          <!-- <div class="payment__shipping">
            <div class="row">
              <div class="field">
                <div class="form-uploads btn-download">
                  <a href="{{ route('export') }}" class="btn action__submit">
                    <i class="icon icon-cloud-download"></i>Download File</a>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>

    
  </section>
  </div>
  <!-- partial -->
  

</body>

</html>