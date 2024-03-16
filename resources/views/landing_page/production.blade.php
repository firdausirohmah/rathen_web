<!DOCTYPE html>
<html lang="en">

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
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css'>
  <link rel="stylesheet" href="{{ asset('asset/css/formOrder.css') }}">

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

    <button class="m-3 button back" onclick="goBack()"><i class='icon icon-arrow-left'></i></button>

    <div class="container">
      <div class="payment">
        <div class="payment__info" style="width:129rem">
          <div class="payment__cc" id="myDIV">
            
            <div class="card-body card-body-mobile" id="content">
              <h3 class="text-center font-weight-bold mb-1"><img src="{{ asset('/asset/images/logo-dark.png') }}" class="w-10" alt=""></h3>
              <div class="row content-center">
                <div class="col-md-12">
                  <h4 class="text-center font-weight-bold text-black mt-2">Form Persetujuan</h4>
                  <p class="text-center"><small>No. $th$bln$no_order/inv-$bln/$tahun</small></p>
                </div>
              </div>
              <div class="row col-md-12 text-justify">
                <div class="text-uppercase text-justify badge badge-dark w-auto m-1">{{$pesanan->kd_order}}</div>
              </div>
              <div class="row col-md-12 text-justify">
                <div class="col-md-9 customNote">
                  <p class="mb-0 font-weight-bold text-dark">Bill to:</p>
                  <p class="mb-0">{{ $pesanan->nama_pemesanan }}</p>
                  <p class="mb-0">{{ $pesanan->nama_tim }}</p>
                  <p class="mb-0">{{ $pesanan->domisili }}</p>
                </div>
                <div class="col-md-3 customNote">
                  <p class="mb-0 font-weight-bold text-dark">Ship to:</p>
                  <p class="mb-0">{{ $pesanan->nama_pemesanan }}</p>
                  <p class="mb-0">{{ $pesanan->nama_tim }}</p>
                  <p class="mb-0">{{ $pesanan->domisili }}</p>
                </div>
              </div>
              
              <div class="card mt-3">
                <div class="text-uppercase text-justify badge badge-success w-25 m-1">Lembar Kerja - Produksi</div>
                <h5 class="fw-6 text-center"><?php echo isset($pesanan->nama_tim) ? $pesanan->nama_tim : "nama_tim belum ada"; ?> ( $total_pemain stel)</h5>
                <h6 class="text-center">Diambil tanggal: $tanggal_ambil</h6>
                
                <div class="table-responsive px-1 py-1">
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
                            <img src="{{asset('uploads'.'/'.$pesanan->design_jersey_pemain)}}" alt=""> {{--$design_admin (jika blm upload $design_customer)--}}
                            <span><b>Size</b>: S-3, M-11, L-14, XL-5, 2XL-1</span> {{--$size sesuai database--}}
                          </div>
                        </td>
                        <td class="d-flex text-center" style="flex-wrap:wrap;">
                          <div class="img-tableDetail">
                            <img src="{{ asset('asset/images/price-list/komparasi/fabrics.jpg') }}">
                            <span class="font-weight-bold">Pola Badan:</span>
                            @if(isset($pesanan->pola_badan))
                            <span>{{ $pesanan->pola_badan }}</span>
                            @else
                            <span>-</span>
                            @endif
                          </div>
                          <div class="img-tableDetail">
                            @if($pesanan->pola_lengan == 'Raglan')
                            <img src="{{ asset('asset/extra/putih1.png') }}">
                            @else
                            <img src="{{ asset('asset/extra/putih2.png') }}">
                            @endif
                            <span class="font-weight-bold">Pola Lengan:</span>
                            @if(isset($pesanan->pola_lengan))
                            <span>{{ $pesanan->pola_lengan }}</span>
                            @else
                            <span>Normal</span>
                            @endif
                          </div>
                          <div class="img-tableDetail">
                            <img src="{{ asset('asset/extra/casual/C-3.png') }}">
                            <span class="font-weight-bold">Jenis Kerah:</span>
                            <span>{{ $pesanan->model_kerah }}</span>
                          </div>
                          <div class="img-tableDetail">
                            <img src="{{ asset('asset/polabadan/belakangNormal.png') }}">
                            <span class="font-weight-bold">Bawah Baju:</span>
                            @if(isset($pesanan->badan_bawah))
                            <span>Melengkung</span>
                            @else
                            <span>Normal</span>
                            @endif
                          </div>
                          <div class="img-tableDetail">
                            <img src="{{ asset('asset/images/price-list/komparasi/lasercut.jpg') }}">
                            <span class="font-weight-bold">Lasercut:</span>
                            <span>Tidak</span>
                          </div>
                          <div class="img-tableDetail">
                            <img src="{{ asset('asset/images/price-list/komparasi/logo-tim.jpg') }}">
                            <span class="font-weight-bold">Jenis Logo:</span>
                            @if(isset($pesanan->upgrade_logo_3d))
                            <span>3D</span>
                            @else
                            <span>Print</span>
                            @endif
                          </div>
                          <div class="img-tableDetail">
                            <img src="{{ asset('asset/images/price-list/komparasi/fabrics.jpg') }}">
                            <span class="font-weight-bold">Jenis Bahan:</span>
                            <span>{{ $pesanan->bahan_baju }}</span>
                          </div>
                          <div class="img-tableDetail">
                            <img src="{{ asset('asset/images/kaoskaki.jpeg') }}">
                            <span class="font-weight-bold">Kaos kaki:</span>
                            @if(isset($pesanan->kaoskaki))
                            <span>Ada ({{ $pesanan->kaoskaki }})</span>
                            @else
                            <span>Tidak</span>
                            @endif
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td rowspan="2">
                          <div class="img-tableView">
                            <b class="title">Design - Kiper</b>
                            <img src="{{asset('uploads'.'/'.$pesanan->design_jersey_kiper)}}" alt=""> {{--$design_admin (jika blm upload $design_customer)--}}
                            <span><b>Size</b>: M-2, L-2</span> {{--$size sesuai database--}}
                          </div>
                        </td>
                        <td>
                          Keterangan tambahan:
                          @if(isset($pesanan->note_order))
                          {!!$pesanan->note_order!!}
                          @else
                          -
                          @endif
                        </td>

                      </tr>
                      <tr>
                        <td class="text-right">
                          <div>Approval</div>
                          <!-- <div class="py-4"></div> -->
                          <div class="d-flex justify-content-end">
                            <div class="px-5 ttd">
                              <div style="height:100px" id="ttd1"></div><br>
                              <span class="mx-5">(</span><span class="ml-5">)</span>
                            </div>
                            <div class="py-4 pl-5 pr-3 ttd">
                              <img src="{{asset('/asset/images/ttd/ervina_ttd.png')}}" alt="" style="width: 100px;display:none;" id="ttd2"><br>
                              <span>(Ervina)</span>
                            </div>
                          </div>
                          
                        </td>

                      </tr>
                    </tbody>


                  </table>
                </div>
              </div>

              <div class="card mt-3">
                <div class="d-flex">
                  <div class="text-uppercase text-justify badge badge-primary w-25 m-1">Lembar Kerja - Finishing</div>
                  <div class="text-uppercase text-justify badge badge-dark w-auto ml-auto mt-1 mr-1 h-100">{{$pesanan->product}}</div>
                </div>
                <h5 class="fw-6 text-center"><?php echo isset($pesanan->nama_tim) ? $pesanan->nama_tim : "nama_tim belum ada"; ?> ( $total_pemain stel)</h5>
                <h6 class="text-center mb-3">Diambil tanggal: $tanggal_ambil</h6>
                <div class="px-5 paddingCustom">
                  <div class="table-responsive">
                    <table>
                      <tbody>
                        <tr>
                          <td>
                            <div class="titleCustom">
                              <p class="fw-6 text-uppercase mb-0">Baju Depan</p>
                            </div>
                            <div class="d-table-custom">
                              <p class="col-form-label pb-0">Size Chart</p>
                              <p class="col-form-label pb-0">T-pundak</p>
                              <p class="col-form-label pb-0">Apparel</p>
                              <p class="col-form-label pb-0">Logo Tim</p>
                              <p class="col-form-label pb-0">Sponsor Dada</p>
                              <p class="col-form-label pb-0">Warna</p>
                              <p class="col-form-label pb-0">Font</p>
                              
                            </div>
                              
                          </td>
                          <td>
                            <div class="titleCustom">

                            </div>
                            <div class="d-table-custom">
                              <p class="col-form-label pb-0">$Size Chart</p>
                              <p class="col-form-label pb-0">$T-pundak</p>
                              <p class="col-form-label pb-0">$Apparel</p>
                              <p class="col-form-label pb-0">$Logo Tim</p>
                              <p class="col-form-label pb-0">$Sponsor Dada</p>
                              <p class="col-form-label pb-0">$Warna</p>
                              <p class="col-form-label pb-0">$Font</p>
                            </div>
                          </td>
                          <td>
                            <div class="titleCustom">
                              <p class="fw-6 text-uppercase mb-0">Baju Belakang</p>
                            </div>
                            <div class="d-table-custom">
                              <p class="col-form-label pb-0">Logo R kecil</p>
                              <p class="col-form-label pb-0">Nameset</p>
                              <p class="col-form-label pb-0">Poliflek</p>
                              <p class="col-form-label pb-0">Nama</p>
                              <p class="col-form-label pb-0">Nomor</p>
                              <p class="col-form-label pb-0">Sponsor Belakang</p>
                              <p class="col-form-label pb-0">Warna</p>
                              <p class="col-form-label pb-0">Font</p>
                            </div>
                          </td>
                          <td>
                            <div class="titleCustom">

                            </div>
                            <div class="d-table-custom">
                              <p class="col-form-label pb-0">$Logo R kecil</p>
                              <p class="col-form-label pb-0">$Nameset</p>
                              <p class="col-form-label pb-0">$Poliflek</p>
                              <p class="col-form-label pb-0">$Nama</p>
                              <p class="col-form-label pb-0">$Nomor</p>
                              <p class="col-form-label pb-0">$Sponsor Belakang</p>
                              <p class="col-form-label pb-0">$Warna</p>
                              <p class="col-form-label pb-0">$Font</p>
                            </div>
                          </td>
                          <td>
                            <div class="titleCustom">
                              <p class="fw-6 mb-0 text-uppercase">Celana</p>
                            </div>
                            <div class="d-table-custom">
                              <p class="col-form-label pb-0">Nomor</p>
                              <p class="col-form-label pb-0">Logo R</p>
                              <p class="col-form-label pb-0">Nama Tim</p>
                              <p class="col-form-label pb-0">Font</p>
                              <p class="col-form-label pb-0">Warna</p>

                              <div class="titleCustom">
                                <p class="fw-6 text-uppercase mb-0">Kaos kaki</p>
                              </div>
  
                              <p class="col-form-label pb-0">Pemain</p>
                              <p class="col-form-label pb-0">Kiper</p>
                            </div>
                          </td>
                          <td>
                            <div class="titleCustom">
                              <p class="fw-6 mb-0 text-uppercase">$Celana</p>
                            </div>
                            <div class="d-table-custom">
                              <p class="col-form-label pb-0">$Nomor</p>
                              <p class="col-form-label pb-0">$Logo R</p>
                              <p class="col-form-label pb-0">$Nama Tim</p>
                              <p class="col-form-label pb-0">$Font</p>
                              <p class="col-form-label pb-0">$Warna</p>
                              <div class="titleCustom">

                              </div>
                              <p class="col-form-label pb-0">$Pemain</p>
                              <p class="col-form-label pb-0">$Kiper</p>
                            </div>
                          </td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                  <div class="table-responsive pt-4">
                    <table class="w-100">
                      <tbody>
                        <td class="text-center">
                          <img src="/asset/images/content/rathenDesign.jpg" class="w-75" alt="">
                        </td>
                        <td class="text-center">
                          <img src="/asset/images/content/rathenDesign.jpg" class="w-75" alt="">
                        </td>
                      </tbody>
                    </table>
                  </div>

                  <div class="row">
                    <div class="col-sm-12 text-left">
                      <label for="note_finishing" class="font-note-finish fw-6 my-3">Catatan Tambahan:</label>
                      <!-- if isset -->
                      <p class="font-note-finish">-ISI CATATAN-</p>
                      <!-- else -->
                      <!-- <p>-</p> -->
                      
                    </div>
                  </div>
                </div>
                
              </div>
              
              <div class="card mt-3">
                <div class="d-flex">
                  <div class="text-uppercase text-justify badge badge-primary w-25 m-1">Lembar Kerja - Finishing</div>
                  <div class="text-uppercase text-justify badge badge-dark w-auto ml-auto mt-1 mr-1 h-100">{{$pesanan->product}}</div>
                </div>
                <h5 class="fw-6 text-center"><?php echo isset($pesanan->nama_tim) ? $pesanan->nama_tim : "nama_tim belum ada"; ?> ( $total_pemain stel)</h5>
                <h6 class="text-center mb-3">Diambil tanggal: $tanggal_ambil</h6>
                <div class="px-5 pb-5">
                  <div class="table-responsive">
                    <table>
                      <tbody>
                        <tr>
                          <td>
                            <div class="d-grid-table border text-center">
                              <img src="/asset/images/content/rathenDesign.jpg" class="w-75 mx-auto py-1" alt="">
                              <p class="border-top fw-6 h5 m-0 py-1">Logo Tim</p>
                              <p class="border-top fw-6 h6 m-0 py-1 text-primary">$Logo Tim</p>
                            </div>
                          </td>
                          <td>
                            <div class="d-grid-table border text-center">
                              <img src="/asset/images/content/rathenDesign.jpg" class="w-75 mx-auto py-1" alt="">
                              <p class="border-top fw-6 h5 m-0 py-1">Sponsor Dada</p>
                              <p class="border-top fw-6 h6 m-0 py-1 text-primary">$Sponsor Dada</p>
                            </div>
                          </td>
                          <td>
                            <div class="d-grid-table border text-center">
                              <img src="/asset/images/content/rathenDesign.jpg" class="w-75 mx-auto py-1" alt="">
                              <p class="border-top fw-6 h5 m-0 py-1">Logo Lengan</p>
                              <p class="border-top fw-6 h6 m-0 py-1 text-primary">$Logo Lengan</p>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-grid-table border text-center">
                              <img src="/asset/images/content/rathenDesign.jpg" class="w-75 mx-auto py-1" alt="">
                              <p class="border-top fw-6 h5 m-0 py-1">Sponsor Belakang</p>
                              <p class="border-top fw-6 h6 m-0 py-1 text-primary">$Sponsor Belakang</p>
                            </div>
                          </td>
                          <td>
                            <div class="d-grid-table border text-center">
                              <img src="/asset/images/content/rathenDesign.jpg" class="w-75 mx-auto py-1" alt="">
                              <p class="border-top fw-6 h5 m-0 py-1">Font Nameset</p>
                              <p class="border-top fw-6 h6 m-0 py-1 text-primary">$Font Nameset</p>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  
                </div>
                
              </div>
              
              <div class="card mt-3">
                <div class="d-flex">
                  <div class="text-uppercase text-justify badge badge-primary w-25 m-1">Lembar Kerja - Finishing</div>
                  <div class="text-uppercase text-justify badge badge-dark w-auto ml-auto mt-1 mr-1 h-100">{{$pesanan->product}}</div>
                </div>
                <h5 class="fw-6 text-center"><?php echo isset($pesanan->nama_tim) ? $pesanan->nama_tim : "nama_tim belum ada"; ?> ( $total_pemain stel)</h5>
                <h6 class="text-center mb-3">Diambil tanggal: $tanggal_ambil</h6>
                <div class="px-5 pb-5">
                  <div class="row">
                    <div class="col-sm-12">
                      {{--Tampilan Formnya saja--}}
                      
                      <form>
                        <div class="form__cc">
                          <div class="row">
                            <div class="table-responsive">
                              <h6 class="fw-6 text-left">Data Pemain</h6>
                              <table class="wp-table w-100">
                                <tr>
                                  <th>No</th>
                                  <th>Nama Punggung</th>
                                  <th>Nomor</th>
                                  <th>Ukuran</th>
                                </tr>

                                <?php $i = 1; ?>

                                @foreach ($dataStep4 as $row)
                                <tr>
                                  <td>{{ $i++; }}</td>
                                  <td>{{ $row->namapunggung }}</td>
                                  <td>{{ $row->nomor; }}</td>
                                  <td>{{ $row->ukuran; }}</td>

                                </tr>
                                @endforeach

                              </table>
                              <h6 class="fw-6 mt-3 text-left">Data Kiper</h6>
                              <table class="wp-table w-100">
                                <tr>
                                  <th>No</th>
                                  <th>Nama Punggung</th>
                                  <th>Nomor</th>
                                  <th>Ukuran</th>
                                </tr>

                                <?php $i = 1; ?>

                                @foreach ($dataStep4 as $row)
                                <tr>
                                  <td>{{ $i++; }}</td>
                                  <td>{{ $row->namapunggung }}</td>
                                  <td>{{ $row->nomor; }}</td>
                                  <td>{{ $row->ukuran; }}</td>

                                </tr>
                                @endforeach

                              </table>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    
                  </div>
                  
                </div>
                
              </div>

              <br>

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

                .btn-download {
                  width: 18.5rem;
                  padding: 2rem 0 0 2rem;
                }

                .right-align {
                  text-align: right;
                  margin-top: 10px;
                }

                .w-680 {
                  width: 685rem;
                }

                .container {
                  margin: unset;
                }

                .container.container-logo {
                  margin: 0 auto;
                }
                @media only screen and (max-width: 600px){
                  #myDIV {
                      width: 305px;
                  }
                }
              </style>
              <div class="container w-680">
                <div class="row">
                  <div class="col-lg-12 ttd">
                    <p class="right-align">Best regard,</p>
                    <img src="{{asset('/asset/images/ttd/rathen_ttd.png')}}" alt="" style="width: 100px;display:none;float:right;" id="ttd3">
                    <p class="right-align"><u>R. Esa Pangersa Gusti</u></p>
                    <p class="right-align" style="line-height: 0px">RATHEN INDONESIA</p>
                  </div>
                </div>
              </div>

              <script>
                function goBack() {
                  window.location.href = "/production";
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
                document.getElementById("demo").innerHTML = "Height: " + y + " Width: " + x;
              </script>
            </div>

          </div>
          <div class="container w-unset">
            @if (isset($pesanan->kd_pembelian))
            <div class="mb-4 ml-2">
              <a href="/production/design-production/{{$kode}}" target="_blank" class="btn">Edit Data
                <i class="icon icon-doc"></i>
              </a>
            </div>
            @endif

            @if($pesanan->status_order == 'produksi')
                @if( isset($aproval_2) && isset($aproval_1) && $aproval_2->is_agreed == 1 && $aproval_1->is_agreed == 1)
                <div>
                  <a href="{{ route('production_generate', ['id' => $kode]) }}" class="btn action__submit">Download
                    <i class="icon icon-cloud-download"></i>
                  </a>
                </div>
                @endif
            <form action="{{route('production.approval')}}" method="post">
              <input type="hidden" name="kode" value="{{$kode}}">
              @csrf
             
              {{--<div class="form-check">
                <input class="form-check-input" type="checkbox" name="approval3" id="approval3" onchange="approve()" {{(isset($aproval_3))?(($aproval_3->is_agreed == 1)?'checked':''):''}}>
                <label class="form-check-label" for="approval3">
                  Rhofik
                </label>
              </div>--}}
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="approval2" id="approval2" onchange="approve()" {{(isset($aproval_2))?(($aproval_2->is_agreed == 1)?'checked':''):''}}>
                <label class="form-check-label" for="approval2">
                Ervina
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="approval1" id="approval1" onchange="approve()" {{(isset($aproval_1))?(($aproval_1->is_agreed == 1)?'checked':''):''}}>
                <label class="form-check-label" for="approval1">
                R. Esa Pangersa Gusti
                </label>
              </div>
              <button type="submit" class="btn btn-primary w-auto">submit</button>
            </form>
            @endif
          </div>
          <script>
            function approve(){

              var approval_1 = document.getElementById('approval1');
              var approval_2 = document.getElementById('approval2');
              var approval_3 = document.getElementById('approval3');
              if(approval_1.checked){
                document.getElementById('ttd3').style = 'display:inline;width:200px;';
              }else{
                document.getElementById('ttd3').style = 'display:none;width:100px;';
              }
              if(approval_2.checked){
                document.getElementById('ttd2').style = 'display:inline;width:100px;height:100px;';
              }else{
                document.getElementById('ttd2').style = 'display:none;width:100px;height:100px;';
              }
              if(approval_3.checked){
                document.getElementById('ttd1').style = 'display:inline;width:100px;height:100px;';
              }else{
                document.getElementById('ttd1').style = 'display:none;width:100px;height:100px;';
              }

            }
            approve();
          </script>
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

    <div class="container">
      <div class="actions pt135">
        
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
    document.addEventListener('DOMContentLoaded', function() {
      var modal = document.getElementById('inputDataModal');
      var btn = document.getElementById('inputDataBtn');
      var span = document.getElementsByClassName('close')[0];
      var form = document.getElementById('inputDataForm');
      var tableBody = document.querySelector('.wp-table tbody');

      // Counter for row index
      var rowIndex = 1;

      // Display the modal when the button is clicked
      btn.onclick = function() {
        modal.style.display = 'block';
      };

      // Close the modal when the close button is clicked
      span.onclick = function() {
        modal.style.display = 'none';
      };

      // Close the modal when clicking outside of it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = 'none';
        }
      };

      // Handle form submission
      form.addEventListener('submit', function(e) {
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