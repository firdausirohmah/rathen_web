<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Rathen</title>
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
      <div class="notification">
        Custom Rathen - Form Order
      </div>
    </div>
  </header>
  <section class="content">

    <div class="container">
      <div class="payment">

        <div class="payment__info">
          <div class="payment__cc">
            <div class="payment__title fw-6">
              <i class="icon icon-pencil"></i>Form orderan
            </div>
            <form action="{{ url('/form-1/action') }}" method="POST">
            @csrf
              <div class="form__cc">
                <div class="row">
                  <div class="field">
                    <div class="title">Nama tim
                    </div>
                    <input type="text" class="input txt" name="nama_tim" placeholder='Masukkan nama tim'/>
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title">Domisili
                    </div>
                    <input type="text" class="input txt" name="dom" placeholder="Masukkan Kota/Kabupaten"/>
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title">Nama pemesanan
                    </div>
                    <input type="text" class="input txt" name="np" placeholder='Masukkan nama pemesanan' />
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title">Kontak
                    </div>
                    <input type="text" class="input txt" name="nw" placeholder="Masukkan no. Whatsapp"/>
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title">Alamat Pengiriman
                    </div>
                    <input type="text" class="input txt" name="alamat_p" placeholder="Masukkan alamat pengiriman"/>
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title">Tipe kualitas
                    </div>
                    <input type="text" class="input txt" value="{{ $data->kualitas }}" name="kualitas" disabled/>
                  </div>
                </div>
                <div class="row p-">
                  <div class="field">
                    <div class="title">Harga
                    </div>
                    <input type="text" class="input txt" name="harga" value='Rp {{ number_format($data->harga, 0, ",", ",") }} /pcs' disabled/>
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title">Jumlah pesanan
                    </div>
                    <input type="text" class="input txt" name="jp" value='{{ $qty }} pcs' disabled/>
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title">Kategori harga
                    </div>
                    <input type="text" class="input txt" value='{{ $data->deskripsi }}' name="kategori" disabled/>
                  </div>
                </div>

              </div>
          </div>
          <div class="payment__shipping col2-order1">
            <div class="payment__title fw-6">
              <i class="icon icon-plus"></i> Extra
            </div>
            <div class="row">
              <div class="field small">
                <div class="title">Badan bawah melengkung
                </div>
                <input type="text" class="input txt2" placeholder='Jumlah' name="bbm"/>
                <span class="title">PCS</span><br>
                <small>+15,000</small><br><small>untuk stadium, free untuk pro dan pro+</small>
              </div>
            </div>
            <div class="row">
              <div class="field small">
                <div class="title">Pola lengan reglan
                </div>
                <input type="text" class="input txt2" placeholder='Jumlah' name="plr"/>
                <span class="title">PCS</span><br>
                <small>+15,000</small><br><small>untuk stadium, free untuk pro dan pro+</small>
              </div>
            </div>
            <div class="row">
              <div class="field small">
                <div class="title">Upgrade pola 3D
                </div>
                <input type="text" class="input txt2" placeholder='Jumlah' name="up3d"/>
                <span class="title">PCS</span><br>
                <small>+30,000</small><br><small>untuk stadium, free untuk pro dan pro+</small>
              </div>
            </div>
            <div class="row">
              <div class="field small">
                <div class="title">Logo tim di celana
                </div>
                <input type="text" class="input txt2" placeholder='Jumlah' name="logo_celana"/>
                <span class="title">PCS</span><br>
                <small>+10,000</small><br><small>untuk stadium dan pro, free untuk pro+</small>
              </div>
            </div>
            <div class="row">
              <div class="field small">
                <div class="title">Lengan panjang
                </div>
                <input type="text" class="input txt2" placeholder='Jumlah' name="lengan_panjang"/>
                <span class="title">PCS</span><br>
                <small>+30,000</small>
              </div>
            </div>
            <div class="row">
              <div class="field small pt100">
                <div class="title">Size 2XL
                </div>
                <input type="text" class="input txt2" placeholder='Jumlah' name="xxl"/>
                <span class="title">PCS</span><br>
                <small>+20,000</small>
              </div>
            </div>
            <div class="row">
              <div class="field small">
                <div class="title">Size 3XL
                </div>
                <input type="text" class="input txt2" placeholder='Jumlah' name="xxxl"/>
                <span class="title">PCS</span><br>
                <small>+35,000</small>
              </div>
            </div>
            <div class="row">
              <div class="field small">
                <div class="title">Size 4XL
                </div>
                <input type="text" class="input txt2" placeholder='Jumlah' name="xxxxl"/>
                <span class="title">PCS</span><br>
                <small>+50,000</small>
              </div>
            </div>
            <div class="row">
              <div class="field small">
                <div class="title">Celana panjang
                </div>
                <input type="text" class="input txt2" placeholder='Jumlah' name="celana_panjang"/>
                <span class="title">PCS</span><br>
                <small>+150,000</small>
              </div>
            </div>
            <div class="row">
              <div class="field small pb50">
                <div class="title">Kaos kaki
                </div>
                <input type="text" class="input txt2" placeholder='Jumlah' name="kaoskaki"/>
                <span class="title">PCS</span><br>
                <small>+50,000</small>
              </div>
            </div>

          </div>
        </div>

        <div class="payment__info">
          <div class="payment__cc">
            <div class="payment__title fw-6">
              <i class="icon icon-pencil"></i>Keterangan extra
            </div>
            <div class="form-note">
              <div class="field-p" style="padding:0;">
                <!-- <div class="row"> -->
                  <div class="field-p small">
                    <div class="title-flex">
                      <input type="radio" name="extra-note" id="nonprint" value="nonprint">
                      <label for="nonprint">Non - Print (Free)</label>

                      <img src="{{asset('/asset/images/price-list/komparasi/LOGO_TBA.png')}}" alt="Product 1" class="img-note clickable-image" data-image="Non-Print">
                    </div>
                  </div>
                <!-- </div> -->
                <!-- <div class="row"> -->
                  <div class="field-p small">
                    <div class="title-flex">
                      <input type="radio" name="extra-note" id="fullprint" value="fullprint">
                      <label for="fullprint">Full - Print (+15,000)</label>

                      <img src="{{asset('/asset/images/price-list/komparasi/LOGO_TBA.png')}}" alt="Product 2" class="img-note clickable-image" data-image="Full-Print">
                    </div>
                  </div>
                <!-- </div> -->
              </div>
            </div>
          </div>
        </div>

        <div class="payment__info">
          <div class="payment__cc">
            <div class="payment__title m0 fw-6">
              <i class="icon icon-pencil"></i>Pola badan
            </div>
            <!-- <div class="form-note"> -->
                <div class="row">
                  <div class="fieldjk" style="padding-top: 1rem;">
                    <input type="radio" id="pb1" name="pola_badan" >
                    <label for="pb1" class="img-notejk pbnormal w-25" style="background-image: url('{{ asset('/asset/polabadan/belakangNormal.png') }}');"></label>
                    <label >Normal (Free)</label>
                  </div>
                </div>
                
                <div class="row">
                  <div class="fieldjk" style="padding-top: 1rem;">
                    <input type="radio" id="pb2" name="pola_badan" >
                    <label for="pb2" class="img-notejk bbm w-25" style="background-image: url('{{ asset('/asset/polabadan/belakang.png') }}');"></label>
                    <label >Badan bawah melengkung (+15,000)</label>
                  </div>
                </div>
              <!-- </div> -->
          </div>
        </div>
        
        <div class="payment__info">
          <div class="payment__cc">
            <div class="payment__title m0 fw-6">
              <i class="icon icon-pencil"></i>Pola Lengan
            </div>
            <!-- <div class="form-note"> -->
                <div class="row">
                  <div class="fieldjk" style="padding-top: 1rem;">
                    <input type="radio" id="pl1" name="pola_lengan" >
                    <label for="pl1" class="img-notejk lenganNormal w-25" style="background-image: url('{{ asset('/asset/extra/putih2.png') }}');"></label>
                    <label >Normal (Free)</label>
                  </div>
                </div>
                <div class="row">
                  <div class="fieldjk" style="padding-top: 1rem;">
                    <input type="radio" id="pl2" name="pola_lengan" >
                    <label for="pl2" class="img-notejk raglan w-25" style="background-image: url('{{ asset('/asset/extra/putih1.png') }}');"></label>
                    <label >Raglan (+15,000)</label>
                  </div>
                </div>
                
              <!-- </div> -->
          </div>
        </div>
        
        <div class="payment__info">
          <div class="payment__cc">
            <div class="payment__title fw-6">
              <i class="icon icon-pencil"></i>Material Bahan
            </div>
          </div>
        </div>
        <div class="payment__info">
          <div class="payment__cc">
            <div class="payment__title m0 fw-6">
              Pro
            </div>
            <div class="form-note">
                <div class="row">
                  <div class="field-bahan">
                    <div class="title-note">PRO : VAporknit</div>
                    <input type="radio" id="pro" name="material_pro" >
                    <label for="pro" class="img-note mp1" style="background-image: url('{{ asset('/asset/images/jenisbahan/BAHAN - PRO/VAporknit.jpg') }}');">
                      <!-- <img src="{{asset('/asset/images/jenisbahan/BAHAN - PRO/VAporknit.jpg')}}" class="img-note w-80 align-right" alt="pro"> -->
                    </label>
                    
                  </div>
                </div>
                
                <div class="row">
                  <div class="field-bahan">
                    <div class="title-note">PRO<sup>+</sup> : MOVING KNIT</div>
                    <input type="radio" id="proplus" name="material_pro" >
                    <label for="proplus" class="img-note mp2" style="background-image: url('{{ asset('/asset/material/BAHAN - PROPLUS/proplus.jpg') }}');">
                      <!-- <img src="{{asset('/asset/material/BAHAN - PROPLUS/proplus.jpg')}}" class="img-note w-80 align-right" alt="pro">  -->
                    </label>
                  </div>
                </div>
              </div>
          </div>
        </div>
        
        <div class="payment__info">
          <div class="payment__cc">
            <div class="payment__title m0 fw-6">
              Stadium
            </div>
            <div class="form-note">
                <div class="row">
                  <div class="field-bahan">
                    <div class="title-note">Stadium : Airwalk</div>
                    <input type="radio" id="stadium1" name="material_stadium" >
                    <label for="stadium1" class="img-note" style="background-image: url('{{ asset('/asset/material/stadium/1.jpg') }}');">
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="field-bahan">
                    <div class="title-note">Stadium : EMBROSS STRAW</div>
                    <input type="radio" id="stadium2" name="material_stadium" >
                    <label for="stadium2" class="img-note" style="background-image: url('{{ asset('/asset/material/stadium/2.jpg') }}');">
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="field-bahan">
                    <div class="title-note">Stadium : EMBROSS TOPO</div>
                    <input type="radio" id="stadium3" name="material_stadium" >
                    <label for="stadium3" class="img-note" style="background-image: url('{{ asset('/asset/material/stadium/3.jpg') }}');">
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="field-bahan">
                    <div class="title-note">Stadium : EMBROSS MIX</div>
                    <input type="radio" id="stadium4" name="material_stadium" >
                    <label for="stadium4" class="img-note" style="background-image: url('{{ asset('/asset/material/stadium/4.jpg') }}');">
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="field-bahan">
                    <div class="title-note">Stadium : ERBINA</div>
                    <input type="radio" id="stadium5" name="material_stadium" >
                    <label for="stadium5" class="img-note" style="background-image: url('{{ asset('/asset/material/stadium/5.jpg') }}');">
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="field-bahan">
                    <div class="title-note">Stadium : MILANO</div>
                    <input type="radio" id="stadium6" name="material_stadium" >
                    <label for="stadium6" class="img-note" style="background-image: url('{{ asset('/asset/material/stadium/6.jpg') }}');">
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="field-bahan">
                    <div class="title-note">Stadium : PUMA</div>
                    <input type="radio" id="stadium7" name="material_stadium" >
                    <label for="stadium7" class="img-note" style="background-image: url('{{ asset('/asset/material/stadium/7.jpg') }}');">
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="field-bahan">
                    <div class="title-note">Stadium : RATHEN - TECH</div>
                    <input type="radio" id="stadium8" name="material_stadium" >
                    <label for="stadium8" class="img-note" style="background-image: url('{{ asset('/asset/material/stadium/8.jpg') }}');">
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="field-bahan">
                    <div class="title-note">Stadium : RHABIT</div>
                    <input type="radio" id="stadium9" name="material_stadium" >
                    <label for="stadium9" class="img-note" style="background-image: url('{{ asset('/asset/material/stadium/9.jpg') }}');">
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="field-bahan">
                    <div class="title-note">Stadium : SMASH</div>
                    <input type="radio" id="stadium10" name="material_stadium" >
                    <label for="stadium10" class="img-note" style="background-image: url('{{ asset('/asset/material/stadium/10.jpg') }}');">
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="field-bahan">
                    <div class="title-note">Stadium : SULKUL</div>
                    <input type="radio" id="stadium11" name="material_stadium" >
                    <label for="stadium11" class="img-note" style="background-image: url('{{ asset('/asset/material/stadium/11.jpg') }}');">
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="field-bahan">
                    <div class="title-note">Stadium : WAVE</div>
                    <input type="radio" id="stadium12" name="material_stadium" >
                    <label for="stadium12" class="img-note" style="background-image: url('{{ asset('/asset/material/stadium/12.jpg') }}');">
                    </label>
                  </div>
                </div>
               
               
              </div>
          </div>
        </div>
        
        <div class="payment__info">
          <div class="payment__cc">
            <div class="payment__title fw-6">
              <i class="icon icon-pencil"></i>Jenis kerah
            </div>
            <span>Kerah custom elastic rib (+20,000)</span>
              <div class="">
                <div class="row">
                  <div class="fieldjk" style="padding-top: 1rem;">
                    <input type="radio" id="kerah1" name="jenis_kerah" >
                    <label for="kerah1" class="img-notejk C1 w-25" style="background-image: url('{{ asset('/asset/extra/casual/C-1.png') }}');"></label>

                    <input type="radio" id="kerah2" name="jenis_kerah">
                    <label for="kerah2" class="img-notejk C2 w-25" style="background-image: url('{{ asset('/asset/extra/casual/C-2.png') }}');"></label>

                    <input type="radio" id="kerah3" name="jenis_kerah" >
                    <label for="kerah3" class="img-notejk C3 w-25" style="background-image: url('{{ asset('/asset/extra/casual/C-3.png') }}');"></label>
                    
                    <input type="radio" id="kerah4" name="jenis_kerah" >
                    <label for="kerah4" class="img-notejk C4 w-25" style="background-image: url('{{ asset('/asset/extra/casual/C-4.png') }}');"></label>
                    
                    <input type="radio" id="kerah5" name="jenis_kerah" >
                    <label for="kerah5" class="img-notejk C5 w-25" style="background-image: url('{{ asset('/asset/extra/casual/C-5.png') }}');"></label>

                    <!-- Tambahkan inputan radio dan label untuk setiap gambar -->

                    <input type="radio" id="kerah6" name="jenis_kerah">
                    <label for="kerah6" class="img-notejk O1 w-25" style="background-image: url('{{ asset('/asset/extra/oneck/O-1a.png') }}');"></label>

                    <input type="radio" id="kerah7" name="jenis_kerah">
                    <label for="kerah7" class="img-notejk O2 w-25" style="background-image: url('{{ asset('/asset/extra/oneck/O-2.png') }}');"></label>
                  </div>
                </div>
              </div>
          </div>
        </div>

        <div class="payment__info">
          <div class="payment__cc">
            <div class="payment__title fw-6">
              <i class="icon icon-pencil"></i>Logo tim
            </div>
              <div class="col2-order1">
                <div class="row">
                  <div class="field" style="padding:0;">
                    <img src="{{asset('/asset/logotim/logo - DTF.png')}}" style="te" class="img-thumbnaill w-50 mr-2" alt="">
                  </div>
                </div>
                <div class="row">
                  <div class="field" style="padding:0;">
                    <img src="{{asset('/asset/logotim/logo - tpu.png')}}" class="img-thumbnaill w-50" alt="">
                  </div>
                </div>
                <div class="row">
                  <div class="field" style="padding:0;">
                    <img src="{{asset('/asset/logotim/logo - rubber.png')}}" class="img-thumbnaill w-50" alt="">
                  </div>
                </div>
                <div class="row">
                  <div class="field" style="padding:0;">
                    <img src="{{asset('/asset/logotim/logo - rubber on tatami.png')}}" class="img-thumbnaill w-50" alt="">
                  </div>
                </div>
                <div class="row">
                  <div class="field" style="padding:0;">
                    <img src="{{asset('/asset/logotim/logo - silicone HD.png')}}" class="img-thumbnaill w-50" alt="">
                  </div>
                </div>
                <div class="row">
                  <div class="field" style="padding:0;">
                    <img src="{{asset('/asset/logotim/logo - woven HD.png')}}" class="img-thumbnaill w-50" alt="">
                  </div>
                </div>
                <div class="row">
                  <div class="field" style="padding:0;">
                    <img src="{{asset('/asset/logotim/logo - woven.png')}}" class="img-thumbnaill w-50" alt="">
                  </div>
                </div>
              </div>
            <div class="col2-order1" id="rowsContainer">
              <div class="row">
                <div class="field small">
                  <div class="title">DTF (Free)
                  </div>
                  <!-- <input type="text" class="input txt2" value='' placeholder='Jumlah'/> -->
                  <!-- <span class="title">PCS</span><br> -->
                  <!-- <small>+35,000</small> -->
                </div>
              </div>
              <div class="row">
                <div class="field small">
                  <div class="title">Extra logo tim (DTF)
                  </div>
                  <div class="input-group">
                    <a class="btn-indec decrement" id="decrement" data-row-id="1">-</a>
                    <input class="input-indec" type="number" id="input-indec" data-row-id="1" value="12" readonly>
                    <a class="btn-indec increment" id="increment" data-row-id="1">+</a>
                  </div>
                  <div class="title" style="padding-top:10px;">+30,000</div>
                </div>
              </div>
              <div class="row">
                <div class="field small">
                  <div class="title">3D TPU
                  </div>
                  <div class="input-group">
                    <a class="btn-indec decrement" id="decrement" data-row-id="2">-</a>
                    <input class="input-indec" type="number" id="input-indec" data-row-id="2" value="24" readonly>
                    <a class="btn-indec increment" id="increment" data-row-id="2">+</a>
                  </div>
                  <div class="title" style="padding-top:10px;">+30,000</div>
                </div>
              </div>
              <div class="row">
                <div class="field small">
                  <div class="title">3D Rubber
                  </div>
                  <div class="input-group">
                    <a class="btn-indec decrement" id="decrement" data-row-id="3">-</a>
                    <input class="input-indec" type="number" id="input-indec" data-row-id="3" value="50" readonly>
                    <a class="btn-indec increment" id="increment" data-row-id="3">+</a>
                  </div>
                  <div class="title" style="padding-top:10px;">+30,000</div>
                </div>
              </div>
              <div class="row">
                <div class="field small">
                  <div class="title">Rubber on Tatammi
                  </div>
                  <div class="input-group">
                    <a class="btn-indec decrement" id="decrement" data-row-id="4">-</a>
                    <input class="input-indec" type="number" id="input-indec" data-row-id="4" value="10" readonly>
                    <a class="btn-indec increment" id="increment" data-row-id="4">+</a>
                  </div>
                  <div class="title" style="padding-top:10px;">+30,000</div>
                </div>
              </div>
              <div class="row">
                <div class="field small">
                  <div class="title">Silicon HD
                  </div>
                  <div class="input-group">
                    <a class="btn-indec decrement" id="decrement" data-row-id="5">-</a>
                    <input class="input-indec" type="number" id="input-indec" data-row-id="5" value="50" readonly>
                    <a class="btn-indec increment" id="increment" data-row-id="5">+</a>
                  </div>
                  <div class="title" style="padding-top:10px;">+30,000</div>
                </div>
              </div>
              <div class="row">
                <div class="field small">
                  <div class="title">Woven HD
                  </div>
                  <div class="input-group">
                    <a class="btn-indec decrement" id="decrement" data-row-id="6">-</a>
                    <input class="input-indec" type="number" id="input-indec" data-row-id="6" value="50" readonly>
                    <a class="btn-indec increment" id="increment" data-row-id="6">+</a>
                  </div>
                  <div class="title" style="padding-top:10px;">+30,000</div>
                </div>
              </div>
              
              <div class="row row2" data-row-id="7">
                <div class="field small">
                  <div class="title">Woven lokal
                  </div>
                  <div class="input-group">
                    <a class="btn-indec decrement" id="decrement" data-row-id="7">-</a>
                    <input class="input-indec" id="input-indec" type="number" data-row-id="7" value="12" readonly>
                    <a class="btn-indec increment" id="increment" data-row-id="7">+</a>
                  </div>
                  <div class="title" style="padding-top:10px;">+50,000</div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        
        <div class="payment__info">
          <div class="payment__cc">
            <div class="payment__title fw-6">
              <i class="icon icon-pencil"></i>Sponsor depan
            </div>
              <div class="col2-order1" style="width:70rem;">
                <div class="row">
                  <div class="field-p" style="padding:0;">
                    <div class="row">
                      <div class="field-p small">
                        <div class="title-flex">
                          <input type="radio" name="sponsorType" id="printingFree" value="printingFree">
                          <label for="printingFree">Printing (Free)
                            <br>
                            <small>kategori Half - Print dan Full - Print</small></label>
                        
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="field-p small">
                        <div class="title-flex">
                          <input type="radio" name="sponsorType" id="tulisanPolifek1" value="tulisanPolifek1">
                          <label for="tulisanPolifek1">Tulisan polifek 1 warna 1 baris (Free)</label>
                
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="field-p small">
                        <div class="title-flex">
                          <input type="radio" name="sponsorType" id="extraTulisanPolifek" value="extraTulisanPolifek">
                          <label for="extraTulisanPolifek">Extra tulisan polifek 1 warna 1 baris (+10,000)</label>
                
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="field-p small">
                        <div class="title-flex">
                          <input type="radio" name="sponsorType" id="logoTulisanPolifek" value="logoTulisanPolifek">
                          <label for="logoTulisanPolifek">Logo + tulisan polifek 1 warna 1 baris (+35,000)</label>
                
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="field-p small">
                        <div class="title-flex">
                          <input type="radio" name="sponsorType" id="extraTulisanPolifekWarna" value="extraTulisanPolifekWarna">
                          <label for="extraTulisanPolifekWarna">Extra tulisan polifek 1 warna (+45,000)</label>
                
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        
        <div class="payment__info">
          <div class="payment__cc">
            <div class="payment__title fw-6">
              <i class="icon icon-pencil"></i>Lengan
            </div>
              <div class="col2-order1" style="width:70rem;">
                <div class="row">
                  <div class="field-p" style="padding:0;">
                    <div class="row">
                      <div class="field-p small">
                        <div class="title-flex">
                          <input type="radio" name="lenganType" id="extraLogoDTF" value="extraLogoDTF">
                          <label for="extraLogoDTF">Extra logo DTF (+15,000)</label>
                
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="field-p small">
                        <div class="title-flex">
                          <input type="radio" name="lenganType" id="extraTulisan1Baris" value="extraTulisan1Baris">
                          <label for="extraTulisan1Baris">Extra tulisan 1 baris (+10,000)</label>
                
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>

        <div class="payment__info">
          <div class="payment__cc">
            <div class="payment__title fw-6">
              <i class="icon icon-wallet"></i>Total Harga
            </div>
              <div class="col2-order1" style="width:70rem;">
                <div class="row">
                  <div class="field" style="padding:0;">
                    <div class="row">
                      <div class="field small">
                        <div class="title fw-6 font-20">Rp {{ number_format($total, 0, ',', ',') }}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>

        <div class="paymen__shipping">
          <div class="row">
            <div class="actions" id="QuotationBtn">
              <a class="btn action__submit">Download Quotation
                <i class="icon icon-cloud-download"></i>
              </a>
            </div>
          </div>
        </div>
        
      </div>
    </div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var modal = document.getElementById('QuotationModal');
    var btn = document.getElementById('QuotationBtn');
    var span = document.getElementsByClassName('close')[0];

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

  });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const rowsContainer = document.getElementById("rowsContainer");

        rowsContainer.addEventListener("click", (event) => {
            const target = event.target;

            if (target.classList.contains("increment") || target.classList.contains("decrement")) {
                const rowId = target.getAttribute("data-row-id");
                const input = document.querySelector(`.input-indec[data-row-id="${rowId}"]`);
                let counter = parseInt(input.value);

                if (target.classList.contains("increment")) {
                    counter++;
                } else if (target.classList.contains("decrement") && counter > 0) {
                    counter--;
                }

                input.value = counter;
            }
        });
    });
</script>

    <div class="container">
      <div class="actions ">
        <button type="submit" href="/form/orderStep2" class="btn action__submit">Order
          <i class="icon icon-arrow-right-circle"></i>
        </button>
        <a href="/page-custom" class="backBtn">Go Back to Rathen</a>
      </div>
      </form>
  </section>
  </div>
<!-- partial -->

<div id="QuotationModal" class="modal pt200">
  <div class="modal-content mw-32">
    <span class="close">&times;</span>
    <div class="form-modal">
      <h4>Silahkan masukkan data</h4>
      <form action="{{ route('quotation') }}" method="POST" id="inputDataForm">
      @csrf
        <label for="" class="subtitle ">Nama Pelanggan</label>
        <input type="text" class="form-control" name="nama_pemesanan">
        <label for="" class="subtitle">Kontak (Whatsapp)</label>
        <input type="text" class="form-control" name="kontak"> 
        <label for="" class="subtitle">Email</label>
        <input type="text" class="form-control" name="email"> 
        <label for="" class="subtitle">Alamat</label>
        <input type="text" class="form-control" name="alamat"> 

        <button class="btn-modal" type="submit">Save</button>
      </form>
    </div>
  </div>
</div>
  
</body>
</html>
