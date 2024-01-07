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
            <form>
            <div class="form__cc">
                <div class="row">
                  <div class="field">
                    <div class="title">Nama tim
                    </div>
                    <input type="text" class="input txt" value='' placeholder='Masukkan nama tim'/>
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title">Domisili
                    </div>
                    <input type="text" class="input txt" value='' placeholder="Masukkan Kota/Kabupaten"/>
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title">Nama pemesanan
                    </div>
                    <input type="text" class="input txt" value='Masukkan nama pemesanan' />
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title">Kontak
                    </div>
                    <input type="text" class="input txt" value='' placeholder="Masukkan no. Whatsapp"/>
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title">Tipe kualitas
                    </div>
                    <input type="text" class="input txt" value='Stadium' disabled/>
                  </div>
                </div>
                <div class="row p-">
                  <div class="field">
                    <div class="title">Harga
                    </div>
                    <input type="text" class="input txt" value='Rp 149,900 /pcs' disabled/>
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title">Jumlah pesanan
                    </div>
                    <input type="text" class="input txt" value='12 pcs' disabled/>
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title">Kategori harga
                    </div>
                    <input type="text" class="input txt" value='Non-print' disabled/>
                  </div>
                </div>

              </div>
            </form>
          </div>
          <div class="payment__shipping col2-order1">
            <div class="payment__title fw-6">
              <i class="icon icon-plus"></i> Extra
            </div>
            <div class="row">
              <div class="field small">
                <div class="title">Badan bawah melengkung
                </div>
                <input type="text" class="input txt2" value='' placeholder='Jumlah'/>
                <span class="title">PCS</span><br>
                <small>+15,000</small><br><small>untuk stadium, free untuk pro dan pro+</small>
              </div>
            </div>
            <div class="row">
              <div class="field small">
                <div class="title">Pola lengan reglan
                </div>
                <input type="text" class="input txt2" value='' placeholder='Jumlah'/>
                <span class="title">PCS</span><br>
                <small>+15,000</small><br><small>untuk stadium, free untuk pro dan pro+</small>
              </div>
            </div>
            <div class="row">
              <div class="field small">
                <div class="title">Upgrade pola 3D
                </div>
                <input type="text" class="input txt2" value='' placeholder='Jumlah'/>
                <span class="title">PCS</span><br>
                <small>+30,000</small><br><small>untuk stadium, free untuk pro dan pro+</small>
              </div>
            </div>
            <div class="row">
              <div class="field small">
                <div class="title">Logo tim di celana
                </div>
                <input type="text" class="input txt2" value='' placeholder='Jumlah'/>
                <span class="title">PCS</span><br>
                <small>+10,000</small><br><small>untuk stadium dan pro, free untuk pro+</small>
              </div>
            </div>
            <div class="row">
              <div class="field small">
                <div class="title">Lengan panjang
                </div>
                <input type="text" class="input txt2" value='' placeholder='Jumlah'/>
                <span class="title">PCS</span><br>
                <small>+30,000</small>
              </div>
            </div>
            <div class="row">
              <div class="field small pt100">
                <div class="title">Size 2XL
                </div>
                <input type="text" class="input txt2" value='' placeholder='Jumlah'/>
                <span class="title">PCS</span><br>
                <small>+20,000</small>
              </div>
            </div>
            <div class="row">
              <div class="field small">
                <div class="title">Size 3XL
                </div>
                <input type="text" class="input txt2" value='' placeholder='Jumlah'/>
                <span class="title">PCS</span><br>
                <small>+35,000</small>
              </div>
            </div>
            <div class="row">
              <div class="field small">
                <div class="title">Size 4XL
                </div>
                <input type="text" class="input txt2" value='' placeholder='Jumlah'/>
                <span class="title">PCS</span><br>
                <small>+50,000</small>
              </div>
            </div>
            <div class="row">
              <div class="field small">
                <div class="title">Celana panjang
                </div>
                <input type="text" class="input txt2" value='' placeholder='Jumlah'/>
                <span class="title">PCS</span><br>
                <small>+150,000</small>
              </div>
            </div>
            <div class="row">
              <div class="field small pb50">
                <div class="title">Kaos kaki
                </div>
                <input type="text" class="input txt2" value='' placeholder='Jumlah'/>
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
            <form>
            <div class="form-note">
                <div class="row">
                  <div class="field">
                    <div class="title-note">Non - Print (Free)
                    </div>
                    <img src="{{asset('/asset/images/price-list/komparasi/LOGO_TBA.png')}}" alt="Product 1" class="img-note clickable-image" data-image="Non-Print">
                  </div>
                </div>
                
                <div class="row">
                  <div class="field">
                    <div class="title-note">Full - Print (+15,000)
                    </div>
                    <img src="{{asset('/asset/images/price-list/komparasi/LOGO_TBA.png')}}" alt="Product 2" class="img-note clickable-image" data-image="Full-Print">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="payment__info">
          <div class="payment__cc">
            <div class="payment__title m0 fw-6">
              <i class="icon icon-pencil"></i>Pola badan
            </div>
            <form>
            <div class="form-note">
                <div class="row">
                  <div class="field">
                    <div class="title-note">Normal (Free)
                    </div>
                    <img src="{{asset('/asset/polabadan/belakangNormal.png')}}" alt="Product 1" class="img-note pbnormal clickable-image" data-image="Non-Print">
                  </div>
                </div>
                
                <div class="row">
                  <div class="field">
                    <div class="title-note">Badan bawah melengkung (+15,000)
                    </div>
                    <img src="{{asset('/asset/polabadan/belakang.png')}}" alt="Product 2" class="img-note bbm clickable-image" data-image="Full-Print">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        
        <div class="payment__info">
          <div class="payment__cc">
            <div class="payment__title m0 fw-6">
              <i class="icon icon-pencil"></i>Pola Lengan
            </div>
            <form>
            <div class="form-note">
                <div class="row">
                  <div class="field">
                    <div class="title-note">Normal (Free)
                    </div>
                    <img src="{{asset('/asset/extra/putih2.png')}} "class="img-note w-25 lenganNormal" alt="putih1">
                  </div>
                </div>
                
                <div class="row">
                  <div class="field">
                    <div class="title-note">Raglan (+15,000)
                    </div>
                    <img src="{{asset('/asset/extra/putih1.png')}}" class="img-note w-25 raglan" alt="putih2">
                  </div>
                </div>
              </div>
            </form>
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
            <form>
            <div class="form-note">
                <div class="row">
                  <div class="field">
                    <div class="title-note">PRO : VAporknit</div>
                    <img src="{{asset('/asset/images/jenisbahan/BAHAN - PRO/VAporknit.jpg')}}" class="img-note w-80 align-right" alt="pro">
                  </div>
                </div>
                
                <div class="row">
                  <div class="field">
                    <div class="title-note">PRO<sup>+</sup> : MOVING KNIT</div>
                    <img src="{{asset('/asset/material/BAHAN - PROPLUS/proplus.jpg')}}" class="img-note w-80 align-right" alt="pro"> 
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        
        <div class="payment__info">
          <div class="payment__cc">
            <div class="payment__title m0 fw-6">
              Stadium
            </div>
            <form>
            <div class="form-note">
                <div class="row">
                  <div class="field">
                    <div class="title-note">Stadium : Airwalk</div>
                    <img src="{{asset('/asset/material/stadium/1.jpg')}}" class="img-note w-80 align-right" alt="STADIUM">
                  </div>
                </div>
                
                <div class="row">
                  <div class="field">
                    <div class="title-note">Stadium : EMBROSS STRAW</div>
                    <img src="{{asset('/asset/material/stadium/2.jpg')}}" class="img-note w-80 align-right" alt="STADIUM">
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title-note">Stadium : EMBROSS TOPO</div>
                    <img src="{{asset('/asset/material/stadium/3.jpg')}}" class="img-note w-80 align-right" alt="STADIUM">
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title-note">Stadium : EMBROSS MIX</div>
                    <img src="{{asset('/asset/material/stadium/4.jpg')}}" class="img-note w-80 align-right" alt="STADIUM">
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title-note">Stadium : ERBINA</div>
                    <img src="{{asset('/asset/material/stadium/5.jpg')}}" class="img-note w-80 align-right" alt="STADIUM">
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title-note">Stadium : MILANO</div>
                    <img src="{{asset('/asset/material/stadium/6.jpg')}}" class="img-note w-80 align-right" alt="STADIUM">
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title-note">Stadium : PUMA</div>
                    <img src="{{asset('/asset/material/stadium/7.jpg')}}" class="img-note w-80 align-right" alt="STADIUM">
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title-note">Stadium : RATHEN - TECH</div>
                    <img src="{{asset('/asset/material/stadium/8.jpg')}}" class="img-note w-80 align-right" alt="STADIUM">
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title-note">Stadium : RHABIT</div>
                    <img src="{{asset('/asset/material/stadium/9.jpg')}}" class="img-note w-80 align-right" alt="STADIUM">
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title-note">Stadium : SMASH</div>
                    <img src="{{asset('/asset/material/stadium/10.jpg')}}" class="img-note w-80 align-right" alt="STADIUM">
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title-note">Stadium : SULKUL</div>
                    <img src="{{asset('/asset/material/stadium/11.jpg')}}" class="img-note w-80 align-right" alt="STADIUM">
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title-note">Stadium : WAFE</div>
                    <img src="{{asset('/asset/material/stadium/12.jpg')}}" class="img-note w-80 align-right" alt="STADIUM">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        
        <div class="payment__info">
          <div class="payment__cc">
            <div class="payment__title fw-6">
              <i class="icon icon-pencil"></i>Jenis kerah
            </div>
            <span>Kerah custom elastic rib (+20,000)</span>
            <form>
              <div class="form-note4">
                <div class="row">
                  <div class="fieldjk" style="padding: 0;">
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
            </form>
          </div>
        </div>

        <div class="payment__info">
          <div class="payment__cc">
            <div class="payment__title fw-6">
              <i class="icon icon-pencil"></i>Logo tim
            </div>
            <form>
              <div class="form-note">
                <div class="row">
                  <div class="field" style="padding:0;">
                    <img src="{{asset('/asset/logotim/logo - DTF.png')}}" style="te" class="img-thumbnaill w-50 mr-2" alt="">
                    <img src="{{asset('/asset/logotim/logo - tpu.png')}}" class="img-thumbnaill w-50" alt="">
                    <img src="{{asset('/asset/logotim/logo - rubber.png')}}" class="img-thumbnaill w-50" alt="">
                    <img src="{{asset('/asset/logotim/logo - rubber on tatami.png')}}" class="img-thumbnaill w-50" alt="">
                    <img src="{{asset('/asset/logotim/logo - sicone HD.png')}}" class="img-thumbnaill w-50" alt="">
                    <img src="{{asset('/asset/logotim/logo - woven HD.png')}}" class="img-thumbnaill w-50" alt="">
                    <img src="{{asset('/asset/logotim/logo - woven.png')}}" class="img-thumbnaill w-50" alt="">
                  </div>
                </div>
              </div>
            </form>
            <div class="col2-order1">
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
                  <input type="text" class="input txt2" value='' placeholder='min. 12'/>
                  <span class="title">PCS</span><br>
                  <small>+30,000</small>
                </div>
              </div>
              <div class="row">
                <div class="field small">
                  <div class="title">3D TPU
                  </div>
                  <input type="text" class="input txt2" value='' placeholder='min. 24'/>
                  <span class="title">PCS</span><br>
                  <small>+30,000</small>
                </div>
              </div>
              <div class="row">
                <div class="field small">
                  <div class="title">3D Rubber
                  </div>
                  <input type="text" class="input txt2" value='' placeholder='min. 50'/>
                  <span class="title">PCS</span><br>
                  <small>+30,000</small>
                </div>
              </div>
              <div class="row">
                <div class="field small">
                  <div class="title">Rubber on Tatammi
                  </div>
                  <input type="text" class="input txt2" value='' placeholder='min. 10'/>
                  <span class="title">PCS</span><br>
                  <small>+30,000</small>
                </div>
              </div>
              <div class="row">
                <div class="field small">
                  <div class="title">Silicon HD
                  </div>
                  <input type="text" class="input txt2" value='' placeholder='min. 50'/>
                  <span class="title">PCS</span><br>
                  <small>+30,000</small>
                </div>
              </div>
              <div class="row">
                <div class="field small">
                  <div class="title">Woven HD
                  </div>
                  <input type="text" class="input txt2" value='' placeholder='min. 50'/>
                  <span class="title">PCS</span><br>
                  <small>+30,000</small>
                </div>
              </div>
              <div class="row row2">
                <div class="field small">
                  <div class="title">Woven lokal
                  </div>
                  <input type="text" class="input txt2" value='' placeholder='min. 12'/>
                  <span class="title">PCS</span><br>
                  <small>+50,000</small>
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
            <form>
              <div class="col2-order1" style="width:70rem;">
                <div class="row">
                  <div class="field" style="padding:0;">
                    <div class="row">
                      <div class="field small">
                        <div class="title">
                          <input type="radio" name="sponsorType" id="printingFree" value="printingFree">
                          <label for="printingFree">Printing (Free)</label>
                        <br>
                        <small>kategori Half - Print dan Full - Print</small>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="field small">
                        <div class="title">
                          <input type="radio" name="sponsorType" id="tulisanPolifek1" value="tulisanPolifek1">
                          <label for="tulisanPolifek1">Tulisan polifek 1 warna 1 baris (Free)</label>
                
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="field small">
                        <div class="title">
                          <input type="radio" name="sponsorType" id="extraTulisanPolifek" value="extraTulisanPolifek">
                          <label for="extraTulisanPolifek">Extra tulisan polifek 1 warna 1 baris (+10,000)</label>
                
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="field small">
                        <div class="title">
                          <input type="radio" name="sponsorType" id="logoTulisanPolifek" value="logoTulisanPolifek">
                          <label for="logoTulisanPolifek">Logo + tulisan polifek 1 warna 1 baris (+35,000)</label>
                
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="field small">
                        <div class="title">
                          <input type="radio" name="sponsorType" id="extraTulisanPolifekWarna" value="extraTulisanPolifekWarna">
                          <label for="extraTulisanPolifekWarna">Extra tulisan polifek 1 warna (+45,000)</label>
                
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        
        <div class="payment__info">
          <div class="payment__cc">
            <div class="payment__title fw-6">
              <i class="icon icon-pencil"></i>Lengan
            </div>
            <form>
              <div class="col2-order1" style="width:70rem;">
                <div class="row">
                  <div class="field" style="padding:0;">
                    <div class="row">
                      <div class="field small">
                        <div class="title">
                          <input type="radio" name="lenganType" id="extraLogoDTF" value="extraLogoDTF">
                          <label for="extraLogoDTF">Extra logo DTF (+15,000)</label>
                
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="field small">
                        <div class="title">
                          <input type="radio" name="lenganType" id="extraTulisan1Baris" value="extraTulisan1Baris">
                          <label for="extraTulisan1Baris">Extra tulisan 1 baris (+10,000)</label>
                
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="payment__info">
          <div class="payment__cc">
            <div class="payment__title fw-6">
              <i class="icon icon-wallet"></i>Total Harga
            </div>
            <form>
              <div class="col2-order1" style="width:70rem;">
                <div class="row">
                  <div class="field" style="padding:0;">
                    <div class="row">
                      <div class="field small">
                        <div class="title fw-6 font-20">IDR 1,798,800
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
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

    <div class="container">
      <div class="actions ">
        <a href="/form/orderStep2" class="btn action__submit">Order
          <i class="icon icon-arrow-right-circle"></i>
        </a>
        <a href="/page-custom" class="backBtn">Go Back to Rathen</a>

      </div>
  </section>
  </div>
<!-- partial -->
  
</body>
</html>
