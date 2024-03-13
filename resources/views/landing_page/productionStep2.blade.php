<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rathen</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700|Open+Sans:400,600'>
  <!-- <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700|Open+Sans:400,600'> -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css'>
  <link rel="stylesheet" href="{{ asset('asset/css/formOrder.css') }}">

</head>

<body>
  <!-- partial:index.partial.html -->
  <header>
    <div class="container" style="width: 1024px;">
      <div class="navigation center-content">

        <div class="logo">
          <img class="icon icon-basket" src="{{asset('asset/cfind/source/images/rathen.png')}}" width="12%">
        </div>

      </div>
      <div class="notification">
        Rathen - Edit Data
      </div>
    </div>
  </header>
  <form action="{{route('update_production_desain')}}" method="post" enctype="multipart/form-data">
    @csrf

  <section class="content content-back">
    <a class="btn btn-back" href="/production/{{$kode}}">
      <i class="icon-arrow-left"></i>
    </a>
    <div class="container">

      <div class="payment">

        <div class="payment__info">
          <div class="payment__cc">
            <div class="payment__title fw-6">
              <i class="icon icon-pencil"></i>Data Order
            </div>

            <div class="form__cc">

              <div class="row">
                <div class="field">
                  <div class="title">Product
                  </div>
                  <input type="text" class="input txt" value="{{ $data->product }}" />
                </div>
              </div>

              <div class="row">
                <div class="field">
                  <div class="title">Model Kerah
                  </div>
                  <select name="model_kerah" class="input ddl w-100">
                    <option value="K.R 01" {{ $data->model_kerah == 'K.R 01' ? 'selected' : '' }}>K.R 01</option>
                    <option value="K.R 02" {{ $data->model_kerah == 'K.R 02' ? 'selected' : '' }}>K.R 02</option>
                    <option value="K.R 03" {{ $data->model_kerah == 'K.R 03' ? 'selected' : '' }}>K.R 03</option>
                    <option value="K.R 04" {{ $data->model_kerah == 'K.R 04' ? 'selected' : '' }}>K.R 04</option>
                    <option value="K.R 05" {{ $data->model_kerah == 'K.R 05' ? 'selected' : '' }}>K.R 05</option>
                    <option value="K.R 06" {{ $data->model_kerah == 'K.R 06' ? 'selected' : '' }}>K.R 06</option>
                    <option value="K.R 07" {{ $data->model_kerah == 'K.R 07' ? 'selected' : '' }}>K.R 07</option>
                    <option value="K.R 08" {{ $data->model_kerah == 'K.R 08' ? 'selected' : '' }}>K.R 08</option>
                    <option value="K.R 09" {{ $data->model_kerah == 'K.R 09' ? 'selected' : '' }}>K.R 09</option>
                    <option value="K.R 10" {{ $data->model_kerah == 'K.R 10' ? 'selected' : '' }}>K.R 10</option>
                    <option value="K.R 11" {{ $data->model_kerah == 'K.R 11' ? 'selected' : '' }}>K.R 11</option>
                    <option value="K.R 12" {{ $data->model_kerah == 'K.R 12' ? 'selected' : '' }}>K.R 12</option>
                    <option value="K.R 13" {{ $data->model_kerah == 'K.R 13' ? 'selected' : '' }}>K.R 13</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="field">
                  <div class="title">Bahan baju</div>
                  <input type="text" name="bb" class="input txt" value='{{$data->bahan_baju}}' />
                </div>
              </div>
              <div class="row">
                <div class="field">
                  <div class="title">Bahan celana
                  </div>
                  <input type="text" name="bc" class="input txt" value='{{$data->bahan_celana}}' />
                </div>
              </div>
            </div>

          </div>

          <div class="payment__cc">
            <div class="payment__title fw-6">
              <i class="icon icon-plus"></i> Extra
            </div>
            <div class="form__cc">
              <div class="row">
                <div class="field">
                  <div class="title">Note for Form</div>
                  <textarea class="input txt" name="note">{{ $data->note_order }}</textarea>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="payment__info">
          <div class="payment__cc">
            <div class="payment__title fw-6">
              <i class="icon icon-pencil"></i>Extra Data Order
            </div>
            <div class="form__cc">

              <div class="row">
                <div class="field">
                  <div class="title">Kerah pakai kancing
                  </div>
                  <input type='checkbox' id='kerah_kancing' name='kerah_kancing' value='10000' {{($data->kerah_kancing != null) ? 'checked' : ''}}>
                  <label class='label_harga' class='label_harga' for='kerah_kancing'>(+10,000)</label>
                </div>
              </div>
              <div class="row">
                <div class="field">
                  <div class="title">Badan bawah melengkung
                  </div>
                  <input type='checkbox' id='bb_melengkung' name='bb_melengkung' value='15000' {{($data->bb_melengkung != null) ? 'checked' : ''}}>
                  <label class='label_harga' for='bb_lengkung'>(+15,000)</label>
                </div>
              </div>
              <div class="row">
                <div class="field">
                  <div class="title">Lengan pola raglan
                  </div>
                  <input type='checkbox' id='lengan_raglan' name='lengan_raglan' value='15000' {{($data->lengan_raglan != null) ? 'checked' : ''}}>
                  <label class='label_harga' for='lengan_raglan'>(+15,000)</label>
                </div>
              </div>
              <div class="row">
                <div class="field">
                  <div class="title">Lengan Panjang
                  </div>
                  <div>
                    <input type='text' class='input txt2' placeholder='Jumlah' name='lengan_panjang' value="{{$data->lengan_panjang}}">
                    <span class='title'>PCS</span><br>
                  </div>
                  <span>(+30,000)</span>
                </div>
              </div>
              <div class='field'>Big Size</div>
              <div class="row">
                <div class="field">
                  <div class="title">- Size 2XL
                  </div>
                  <div>
                    <input type='text' class='input txt2' placeholder='Jumlah' name='s2xl' value="{{$data->s2xl}}">
                    <span class='title'>PCS</span><br>
                  </div>
                  <span>(+20,000)</span>
                </div>
              </div>
              <div class="row">
                <div class="field">
                  <div class="title">- Size 3XL
                  </div>
                  <div>
                    <input type='text' class='input txt2' placeholder='Jumlah' name='s3xl' value="{{$data->s3xl}}">
                    <span class='title'>PCS</span><br>
                  </div>
                  <span>(+35,000)</span>
                </div>
              </div>
              <div class="row">
                <div class="field">
                  <div class="title">- Size >4XL
                  </div>
                  <div>
                    <input type='text' class='input txt2' placeholder='Jumlah' name='s4xl' value="{{$data->s4xl}}">
                    <span class='title'>PCS</span><br>
                  </div>
                  <span>(+50,000)</span>
                </div>
              </div>
              

            </div>
          </div>
          <div class="payment__cc">
            <div class="payment__title fw-6">
              
            </div>
            <div class="form__cc">
              <div class="row">
                <div class="field">
                  <div class="title">Celana printing
                  </div>
                  <input type='checkbox' id='celana_printing' name='celana_printing' value='50000' {{($data->celana_printing != null) ? 'checked' : ''}}>
                  <label class='label_harga' for='celana_printing'>(+50,000)</label>
                </div>
              </div>
              <div class="row">
                <div class="field">
                  <div class="title">Celana panjang PRO
                  </div>
                  <div>
                    <input type='text' class='input txt2' placeholder='Jumlah' name='celana_pro' value="{{$data->celana_pro}}">
                    <span class='title'>PCS</span><br>
                  </div>
                  <span>(+150,000)</span>
                </div>
              </div>
              <div class="row">
                <div class="field">
                  <div class="title">Kaoskaki
                  </div>
                  <div>
                    <input type='text' class='input txt2' placeholder='Jumlah' name='kaoskaki' value="{{$data->kaoskaki}}">
                    <span class='title'>PCS</span><br>
                  </div>
                  <span>(+50,000)</span>
                </div>
              </div>
              <div class="payment__title fw-6">Upgrade Fitur</div>
              <div class="row">
                <div class="field">
                  <div class="title">Bahan embos
                  </div>
                  <input type='checkbox' id='bahan_embos' name='bahan_embos' value='20000' {{($data->bahan_embos != null) ? 'checked' : ''}}>
                  <label class='label_harga' for='bahan_embos'>(+20,000)</label>
                </div>
              </div>
              <div class="row">
                <div class="field">
                  <div class="title">Logo 3D
                  </div>
                  <input type='checkbox' id='logo_3d' name='logo_3d' value='30000' {{($data->logo_3d != null) ? 'checked' : ''}}>
                  <label class='label_harga' for='logo_3d'>(+30,000)</label>
                </div>
              </div>
              <div class="row">
                <div class="field">
                  <div class="title">Kerah elastic rib
                  </div>
                  <input type='checkbox' id='kerah_rib' name='kerah_rib' value='20000' {{($data->kerah_rib != null) ? 'checked' : ''}}>
                  <label class='label_harga' for='kerah_rib'>(+20,000)</label>
                </div>
              </div>
              <div class="row">
                <div class="field">
                  <div class="title">Ujung tangan elastic rib
                  </div>
                  <input type='checkbox' id='tangan_rib' name='tangan_rib' value='20000' {{($data->tangan_rib != null) ? 'checked' : ''}}>
                  <label class='label_harga' for='tangan_rib'>(+20,000)</label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="payment__info">
          <div class="payment__cc">
            <div class="payment__title fw-6">
              <i class="icon icon-picture"></i>Design dan Logo
            </div>
            
              <input type="hidden" name="idForm2" value="{{$kode}}" />
              <div class="form__cc">
                <div class="row">
                  <div class="field">
                    <div class="title">Design jersey pemain*</div>
                    <div class="form-uploads w-17">
                      <label for="fileInput1" id="customLabel1" class="customLabel" style="width:20rem;">
                        <div class="img-upload" id="cutomerDesign1">
                          <img src="{{ asset('uploads/'.$data->design_jersey_pemain)}}" alt="" onerror="hideBrokenImage(this)">
                        </div>
                        <div class="title" id="statusUpload1"></div>
                        <div class="form-upload payment__type--cc">
                          <i class="icon icon-cloud-upload"></i>ReUpload
                          <input type="file" id="fileInput1" name="djp" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" onchange="updateFileName('fileInput1', 'statusUpload1')">
                        </div>
                      </label>
                    </div>
                    <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">(format file : .cdr./.ai/.pdf/.jpg)</small>
                    <!-- <input type="text" class="input txt text-validated" value='Upload' /> -->
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title">Design jersey kiper*
                    </div>
                    <div class="form-uploads w-17">
                      <label for="fileInput2" id="customLabel2" class="customLabel" style="width:20rem;">
                        <div class="img-upload" id="cutomerDesign">
                        <img src="{{ asset('uploads/'.$data->design_jersey_kiper)}}" alt="" onerror="hideBrokenImage(this)">
                        </div>
                        <div class="title" id="statusUpload2"></div>
                        <div class="form-upload payment__type--cc">
                          <i class="icon icon-cloud-upload"></i>ReUpload
                          <input type="file"   id="fileInput2" name="djk" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" onchange="updateFileName('fileInput2', 'statusUpload2')">
                        </div>
                      </label>
                    </div>
                    <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">(format file : .cdr./.ai/.pdf/.jpg)</small>
                    <!-- <input type="text" class="input txt text-validated" value='Upload' /> -->
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title">Logo tim*
                    </div>
                    <div class="form-uploads w-17">
                      <label for="fileInput3" id="customLabel3" class="customLabel" style="width:20rem;">
                        <div class="img-upload" id="cutomerDesign">
                        <img src="{{ asset('uploads/'.$data->logo_tim)}}" alt="" onerror="hideBrokenImage(this)">
                        </div>
                        <div class="title" id="statusUpload3"></div>
                        <div class="form-upload payment__type--cc">
                          <i class="icon icon-cloud-upload"></i>Upload
                        </div>
                        <input type="file"   id="fileInput3" name="lt" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" onchange="updateFileName('fileInput3', 'statusUpload3')">
                      </label>
                    </div>
                    <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">(format file : .cdr./.ai/.pdf/.jpg)</small>
                    <!-- <input type="text" class="input txt text-validated" value='Upload' /> -->
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title">Sponsor dada (tulisan 1 baris)
                    </div>
                    <div class="form-uploads w-17">
                      <label for="fileInput4" id="customLabel4" class="customLabel" style="width:20rem;">
                      <div class="img-upload" id="cutomerDesign">
                        <img src="{{ asset('uploads/'.$data->sponsor_dada_tulisan1baris)}}" alt="" onerror="hideBrokenImage(this)">
                        </div>
                        <div class="title" id="statusUpload4"></div>
                        <div class="form-upload payment__type--cc">
                          <i class="icon icon-cloud-upload"></i>Upload
                        </div>
                        <input type="file"   id="fileInput4" name="sdt" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" onchange="updateFileName('fileInput4', 'statusUpload4')">
                        <!-- <input type="file"   id="fileInput4" name="sdd" class="fileInput form-control fw-lighter hidden" placeholder="Upload File"> -->
                      </label>
                    </div>
                    <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">(format file : .cdr./.ai/.pdf/.jpg)</small><br>
                    <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes"> Free utk semua kategori harga </small>
                    <!-- <input type="text" class="input txt text-validated" value='Upload' /> -->
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title">Sponsor dada (logo + tulisan)
                    </div>
                    <div class="form-uploads w-17">
                      <label for="fileInput5" id="customLabel5" class="customLabel" style="width:20rem;">
                      <div class="img-upload" id="cutomerDesign">
                        <img src="{{ asset('uploads/'.$data->sponsor_dada_logodantulisan)}}" alt="" onerror="hideBrokenImage(this)">
                        </div>
                        <div class="title" id="statusUpload5"></div>
                        <div class="form-upload payment__type--cc">
                          <i class="icon icon-cloud-upload"></i>Upload
                        </div>
                        <input type="file"   id="fileInput5" name="sdl" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" onchange="updateFileName('fileInput5', 'statusUpload5')">
                        <!-- <input type="file"   id="fileInput5" name="sd" class="fileInput form-control fw-lighter hidden" placeholder="Upload File"> -->
                      </label>
                    </div>
                    <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">(format file : .cdr./.ai/.pdf/.jpg) </small> <br>
                    <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes"> +30,000/pcs utk NON-PRINT ; free utk kategori HALF-PRINT dan FULL PRINT </small>
                    <!-- <input type="text" class="input txt text-validated" value='Upload' /> -->
                  </div>
                </div>
                <!-- <button type="submit" class="btn action__submit">Save
                  <i class="icon icon-arrow-right-circle"></i>
                </button> -->
              </div>
          </div>
          <div class="payment__cc">
            <div class="payment__title fw-6">
              <i class="icon icon-plus"></i> Extra
            </div>
            <div class="form__cc">
              <div class="row">
                <div class="field">
                  <div class="title">Extra Tulisan 1 Baris
                  </div>
                  <div class="form-uploads">
                    <label for="fileInput6" id="customLabel6" class="customLabel" style="width:20rem;">
                    <div class="img-upload" id="cutomerDesign">
                          <img src="{{ asset('uploads/'.$data->extra_tulisan1baris)}}" alt="" onerror="hideBrokenImage(this)">
                          </div>
                      <div class="title" id="statusUpload6"></div>
                      <div class="form-upload payment__type--cc">
                        <i class="icon icon-cloud-upload"></i>Upload
                      </div>
                      <input type="file"   id="fileInput6" name="t1b" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" onchange="updateFileName('fileInput6', 'statusUpload6')">
                      <!-- <input type="file"   id="fileInput8" name="lk" class="fileInput form-control fw-lighter hidden" placeholder="Upload File"> -->
                    </label>
                  </div>
                  <!-- <input type="text" class="input txt text-validated" value='Upload' /> -->
                </div>
              </div>
              <div class="row">
                <div class="field">
                  <div class="title">Extra Logo dan Tulisan
                  </div>
                  <div class="form-uploads">
                    <label for="fileInput7" id="customLabel7" class="customLabel" style="width:20rem;">
                    <div class="img-upload" id="cutomerDesign">
                          <img src="{{ asset('uploads/'.$data->extra_logodantulisan)}}" alt="" onerror="hideBrokenImage(this)">
                          </div>
                      <div class="title" id="statusUpload7"></div>
                      <div class="form-upload payment__type--cc">
                        <i class="icon icon-cloud-upload"></i>Upload
                      </div>
                      <input type="file"   id="fileInput7" name="ldt" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" onchange="updateFileName('fileInput7', 'statusUpload7')">
                      <!-- <input type="file"   id="fileInput8" name="lk" class="fileInput form-control fw-lighter hidden" placeholder="Upload File"> -->
                    </label>
                  </div>
                  <!-- <input type="text" class="input txt text-validated" value='Upload' /> -->
                </div>
              </div>
              <div class="row">
                <div class="field">
                  <div class="title">Logo di lengan kanan
                  </div>
                  <div class="form-uploads">
                    <label for="fileInput8" id="customLabel8" class="customLabel" style="width:20rem;">
                    <div class="img-upload" id="cutomerDesign">
                      <img src="{{ asset('uploads/'.$data->logo_dilengan_kanan)}}" alt="" onerror="hideBrokenImage(this)">
                    </div>
                    <div class="title" id="statusUpload8"></div>
                    <div class="form-upload payment__type--cc">
                      <i class="icon icon-cloud-upload"></i>Upload
                    </div>
                      <input type="file"   id="fileInput8" name="lk" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" onchange="updateFileName('fileInput8', 'statusUpload8')">
                      <!-- <input type="file"   id="fileInput8" name="lk" class="fileInput form-control fw-lighter hidden" placeholder="Upload File"> -->
                    </label>
                  </div>
                  <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">(format file : .cdr./.ai/.pdf/.jpg)</small><br>
                  <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes"> 15,000/pcs utk NON-PRINT dan HALF-PRINT ; free utk kategori FULL PRINT </small>
                  <!-- <input type="text" class="input txt text-validated" value='Upload' /> -->
                </div>
              </div>
              <div class="row">
                <div class="field">
                  <div class="title">Logo di lengan kanan kiri
                  </div>
                  <div class="form-uploads">
                    <label for="fileInput9" id="customLabel9" class="customLabel" style="width:20rem;">
                      <div class="img-upload" id="cutomerDesign">
                        <img src="{{ asset('uploads/'.$data->logo_dilengan_kiri)}}" alt="" onerror="hideBrokenImage(this)">
                      </div>
                    <div class="title" id="statusUpload9"></div>
                    <div class="form-upload payment__type--cc">
                      <i class="icon icon-cloud-upload"></i>Upload
                    </div>
                    <input type="file"   id="fileInput9" name="llk" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" onchange="updateFileName('fileInput9', 'statusUpload9')">
                    <!-- <input type="file"   id="fileInput9" name="llk" class="fileInput form-control fw-lighter hidden" placeholder="Upload File"> -->
                    </label>
                  </div>
                  <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">(format file : .cdr./.ai/.pdf/.jpg)</small><br>
                  <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes"> +15,000/pcs utk NON-PRINT dan HALF-PRINT ; free utk kategori FULL PRINT </small>
                    <!-- <input type="text" class="input txt text-validated" value='Upload' /> -->
                </div>
              </div>
              <div class="row">
                <div class="field">
                  <div class="title">Sponsor belakang (tulisan 1 baris)
                  </div>
                  <div class="form-uploads">
                    <label for="fileInput10" id="customLabel0" class="customLabel" style="width:20rem;">
                    <div class="img-upload" id="cutomerDesign">
                                  <img src="{{ asset('uploads/'.$data->sponsor_belakang_tulisan1baris)}}" alt="" onerror="hideBrokenImage(this)">
                                  </div>
                      <div class="title" id="statusUpload10"></div>
                      <div class="form-upload payment__type--cc">
                        <i class="icon icon-cloud-upload"></i>Upload
                      </div>
                      <input type="file"   id="fileInput10" name="sbt" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" onchange="updateFileName('fileInput10', 'statusUpload10')">
                      <!-- <input type="file"   id="fileInput10" name="sbt" class="fileInput form-control fw-lighter hidden" placeholder="Upload File"> -->
                    </label>
                  </div>
                  <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">(format file : .cdr./.ai/.pdf/.jpg)</small><br>
                  <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes"> +15,000/pcs utk NON-PRINT dan HALF-PRINT ; free utk kategori FULL PRINT </small>
                  <!-- <input type="text" class="input txt text-validated" value='Upload' /> -->
                </div>
              </div>
              <div class="row">
                <div class="field">
                  <div class="title">Sponsor belakang (logo + tulisan)
                  </div>
                  <div class="form-uploads">
                    <label for="fileOrder1" id="OrderLabel1" class="customLabel" style="width:20rem;">
                    <div class="img-upload" id="cutomerDesign">
                                  <img src="{{ asset('uploads/'.$data->sponsor_belakang_logodantulisan)}}" alt="" onerror="hideBrokenImage(this)">
                                  </div>
                      <div class="title" id="statusUpload11"></div>
                      <div class="form-upload payment__type--cc">
                        <i class="icon icon-cloud-upload"></i>Upload
                      </div>
                      <input type="file"   id="fileOrder1" name="sbl" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" onchange="updateFileName('fileOrder1', 'statusUpload11')">
                      <!-- <input type="file"   id="fileOrder1" name="sblt" class="fileInput form-control fw-lighter hidden" placeholder="Upload File"> -->
                    </label>
                  </div>
                  <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">(format file : .cdr./.ai/.pdf/.jpg)</small> <br>
                  <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes"> +30,000/pcs utk NON-PRINT dan HALF-PRINT ; free utk kategori </small>
                  <!-- <input type="text" class="input txt text-validated" value='Upload' /> -->
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="payment__info">
          <div class="payment__cc">
            <div class="payment__title fw-6">
              <i class="icon icon-docs"></i>Form Data Pesanan
            </div>
            <form>
              <div class="form__cc">
                <div class="row">
                  <div class="table-pesan">
                    <div class="title">
                      <i class="icon icon-info" style="display:contents;"></i> Nama Tim (27 stel) diambil 15 Jan 2024
                    </div>
                    <table class="wp-table">
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
          <div class="payment__shipping w-215-tab">
            <div class="row">
              <div class="field pt-5">
                <div class="payment__title"></div>
                <div class="form-uploads h-3 w-20">
                  <div class="form-upload payment__type--cc btn-black" id="importDataBtn">
                    <i class="icon icon-cloud-upload"></i>Upload File
                  </div>
                </div>
                <!-- <input type="text" class="input txt text-validated" value='Upload' /> -->
              </div>
            </div>
            <div class="row">
              <div class="field pt-5">
                <div class="form-uploads h-3 w-20">
                  <div class="form-upload payment__type--cc btn-black" id="inputDataBtn">
                    <i class="icon icon-pencil"></i>Input Data
                  </div>
                </div>
                <!-- <input type="text" class="input txt text-validated" value='Upload' /> -->
              </div>
            </div>
            <div class="row">
              <div class="field pt-5">
                <div class="form-uploads h-3 w-20">
                  <a href="{{ route('downloadPdf') }}" class="form-upload payment__type--cc btn-black">
                    <i class="icon icon-cloud-download"></i>Format Ukuran</a>
                </div>
                <!-- <input type="text" class="input txt text-validated" value='Upload' /> -->
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div id="inputDataModal" class="modal pt200">
      <div class="modal-content mw-32">
        <span class="close">&times;</span>
        <div class="form-modal">
          <h4>Silahkan inputkan data</h4>
          <form action="{{ route('tambahDataPesanan') }}" id="inputDataForm" method="post">
            @csrf
            <input type="hidden" name="idDataPesanan" value="{{$kode}}" />
            <label for="namaPunggung">Nama Punggung:</label>
            <input class="input-modal" type="text" id="namaPunggung" name="namaPunggung" required>
            <label for="nomor">Nomor:</label>
            <input class="input-modal" type="text" id="nomor" name="nomor" required>
            <label for="ukuran">Ukuran:</label>
            <input class="input-modal" type="text" id="ukuran" name="ukuran" required>
            <button class="btn-modal" type="submit">Save</button>
          </form>
        </div>
      </div>
    </div>
    <div id="importDataModal" class="modal pt200">
      <div class="modal-content mw-32">
        <span class="close">&times;</span>
        <div class="form-modal">
          <h4>Silahkan inputkan data</h4>
          <form action="{{ route('finance.import') }}" id="inputDataForm" method="post" enctype="multipart/form-data">
            @csrf
            <label for="import">file:</label>
            <input class="input-modal" type="file" id="import" name="import" required>
            <input type="hidden" name="type" value="pemain">
            <button class="btn-modal" type="submit">Save</button>
          </form>
        </div>
      </div>
    </div>
    
    <div class="container">
      <div class="actions pt250">
        <button type="submit" class="btn action__submit">Save
          <i class="icon icon-arrow-right-circle"></i>
        </button>
        <!-- <a href="/form/orderStep1" class="backBtn">Go Back to Form Order</a> -->
      </div>
    </section>
  </form>
  </div>
  <!-- partial -->
  <style>
    .field{
      width:75%;
    }
  </style>
  <script>
      function updateFileName(inputId, statusId) {
        const input = document.getElementById(inputId);
        const label = input.closest('label');
        const statusUpload = document.getElementById(statusId);

        if (input.files.length > 0) {
          statusUpload.innerText = 'File Selected: ' + input.files[0].name;
        } else {
          statusUpload.innerText = '*';
        }
      }

     document.addEventListener('DOMContentLoaded', function() {
      var modal = document.getElementById('inputDataModal');
      var btn = document.getElementById('inputDataBtn');
      var span = document.getElementsByClassName('close')[0];
      var import_modal = document.getElementById('importDataModal');
      var import_btn = document.getElementById('importDataBtn');
      var import_span = document.getElementsByClassName('close')[1];
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
      import_btn.onclick = function() {
        import_modal.style.display = 'block';
      };

      // Close the modal when the close button is clicked
      import_span.onclick = function() {
        import_modal.style.display = 'none';
      };

      // Close the modal when clicking outside of it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = 'none';
        }
      };

      // // Handle form submission
      // form.addEventListener('submit', function (e) {
      //   e.preventDefault();

      //   // Get input values
      //   var name = document.getElementById('name').value;
      //   var number = document.getElementById('number').value;
      //   var size = document.getElementById('size').value;

      //   // Check if any input is provided
      //   if (name || number || size) {
      //     // Create a new table row with the input values
      //     var newRow = tableBody.insertRow();
      //     var cell1 = newRow.insertCell(0);
      //     var cell2 = newRow.insertCell(1);
      //     var cell3 = newRow.insertCell(2);
      //     var cell4 = newRow.insertCell(3);
      //     cell1.innerHTML = rowIndex++; // Increment the counter
      //     cell2.innerHTML = name || '-';
      //     cell3.innerHTML = number || '-';
      //     cell4.innerHTML = size || '-';
      //   }

      //   // Close the modal
      //   modal.style.display = 'none';

      //   // Clear the form fields for the next input
      //   form.reset();
      // });
    });

    function hideBrokenImage(img) {
      img.style.display = 'none'; // Mengubah properti display menjadi none untuk menyembunyikan gambar yang rusak
    }
  </script>

</body>

</html>