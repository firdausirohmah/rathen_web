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
  <!-- <link rel="stylesheet" href="{{ asset('asset/css/ex.css') }}"> -->

</head>

<body>
  <header>
    <!-- partial:index.partial.html -->
    <div class="container">
      <div class="navigation center-content">
        
        <div class="logo">
          <img class="icon icon-basket" src="{{asset('asset/cfind/source/images/rathen.png')}}" width="12%">
        </div>
        
      </div>
      <div class="notification">
        Custom Rathen - Form Order
      </div>
    </div>
  </header>
  <section class="content content-back">
    <a class="btn btn-back btn-dark" href="/invoice/{{$kode}}">
      <i class="icon-arrow-left"></i>
    </a>
    <div class="container">

      <div class="payment">
        
        <div class="payment__title fw-6">
          Step Order
        </div>
        <div class="payment__types">
          <a class="payment__type payment__type--cc active" href="/form-2/{{$kode}}">
            <i class="icon icon-picture"></i>Design Logo</a>
          <a class="payment__type payment__type--paypal" href="/form-3/{{$kode}}">
            <i class="icon icon-pencil"></i>Spesifikasi</a>
          <a class="payment__type payment__type--paypal" href="/form-4/{{$kode}}">
            <i class="icon icon-docs"></i>Form Data</a>

          </div>

        <div class="payment__info">
          <div class="payment__cc">
            <div class="payment__title fw-6">
              <i class="icon icon-picture"></i>Design dan Logo
            </div>
            <form action="{{ route('addForm2') }}" id="upload" method="POST" enctype="multipart/form-data">
              @method('POST')
              @csrf
              <input type="hidden" name="idForm2" value="{{$kode}}" />
              <div class="form__cc">
                <div class="row">
                  <div class="field">
                    <div class="title">Design jersey pemain*</div>
                    <div class="form-uploads w-17">
                      <label for="fileInput1" id="customLabel1" class="customLabel" style="width:20rem;">
                        @if(isset($data->design_jersey_pemain))
                        <img src="{{asset('uploads'.'/'.$data->design_jersey_pemain)}}" class="w-75" alt="">
                        @endif
                        <!-- <div class="img-upload" id="cutomerDesign1">
                          <img src="{{ asset('asset/images/content/customerDesign.png') }}" alt="">
                        </div> -->
                        <div class="title" id="statusUpload1"></div>
                        <div class="form-upload payment__type--cc">
                          <i class="icon icon-cloud-upload"></i>Upload
                          <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput1" name="djp" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" onchange="updateFileName('fileInput1', 'statusUpload1')">
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
                          @if(isset($data->design_jersey_kiper))
                          <img src="{{asset('uploads'.'/'.$data->design_jersey_kiper)}}" class="w-75" alt="">
                          @endif
                        <!-- <div class="img-upload" id="cutomerDesign">
                          <img src="{{ asset('asset/images/content/customerDesign.png') }}" alt="">
                        </div> -->
                        <div class="title" id="statusUpload2"></div>
                        <div class="form-upload payment__type--cc">
                          <i class="icon icon-cloud-upload"></i>Upload
                          <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput2" name="djk" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" onchange="updateFileName('fileInput2', 'statusUpload2')">
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
                          @if(isset($data->logo_tim))
                          <img src="{{asset('uploads'.'/'.$data->logo_tim)}}" alt="" class="w-75">
                          @endif
                        <div class="title" id="statusUpload3"></div>
                          <div class="form-upload payment__type--cc">
                            <i class="icon icon-cloud-upload"></i>Upload
                          </div>
                          <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput3" name="lt" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" onchange="updateFileName('fileInput3', 'statusUpload3')">
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
                        @if(isset($data->sponsor_dada_tulisan1baris))
                        <img src="{{asset('uploads'.'/'.$data->sponsor_dada_tulisan1baris)}}" class="w-75" alt="">
                        @endif
                        <div class="title" id="statusUpload4"></div>
                        <div class="form-upload payment__type--cc">
                          <i class="icon icon-cloud-upload"></i>Upload
                        </div>
                        <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput4" name="sdt" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" onchange="updateFileName('fileInput4', 'statusUpload4')">
                        <!-- <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput4" name="sdd" class="fileInput form-control fw-lighter hidden" placeholder="Upload File"> -->
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
                        @if(isset($data->sponsor_dada_logodantulisan))

                        <img src="{{asset('uploads'.'/'.$data->sponsor_dada_logodantulisan)}}" class="w-75" alt="">
                        @endif
                        <div class="title" id="statusUpload5"></div>
                        <div class="form-upload payment__type--cc">
                          <i class="icon icon-cloud-upload"></i>Upload
                        </div>
                        <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput5" name="sdl" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" onchange="updateFileName('fileInput5', 'statusUpload5')">
                      <!-- <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput5" name="sd" class="fileInput form-control fw-lighter hidden" placeholder="Upload File"> -->
                      </label>
                    </div>
                    <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">(format file : .cdr./.ai/.pdf/.jpg) </small> <br>
                    <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes"> +30,000/pcs utk NON-PRINT ; free utk kategori HALF-PRINT dan FULL PRINT </small>
                  <!-- <input type="text" class="input txt text-validated" value='Upload' /> -->
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
                    <div class="title">Extra Tulisan 1 Baris
                    </div>
                    <div class="form-uploads w-17">
                      <label for="fileInput6" id="customLabel6" class="customLabel" style="width:20rem;">
                        @if(isset($data->logo_dilengan_kanan))

                        <img src="{{asset('uploads'.'/'.$data->logo_dilengan_kanan)}}" class="w-75" alt="">
                        @endif
                        <div class="title" id="statusUpload6"></div>
                        <div class="form-upload payment__type--cc">
                          <i class="icon icon-cloud-upload"></i>Upload
                        </div>
                        <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput6" name="t1b" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" onchange="updateFileName('fileInput6', 'statusUpload6')">
                        <!-- <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput8" name="lk" class="fileInput form-control fw-lighter hidden" placeholder="Upload File"> -->
                      </label>
                    </div>
                      <!-- <input type="text" class="input txt text-validated" value='Upload' /> -->
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title">Extra Logo dan Tulisan
                    </div>
                    <div class="form-uploads w-17">
                      <label for="fileInput7" id="customLabel7" class="customLabel" style="width:20rem;">
                        @if(isset($data->logo_dilengan_kiri))
                              
                        <img src="{{asset('uploads'.'/'.$data->logo_dilengan_kiri)}}" class="w-75" alt="">
                        @endif
                        <div class="title" id="statusUpload7"></div>
                        <div class="form-upload payment__type--cc">
                          <i class="icon icon-cloud-upload"></i>Upload
                        </div>
                        <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput7" name="ldt" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" onchange="updateFileName('fileInput7', 'statusUpload7')">
                        <!-- <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput8" name="lk" class="fileInput form-control fw-lighter hidden" placeholder="Upload File"> -->
                      </label>
                    </div>
                  <!-- <input type="text" class="input txt text-validated" value='Upload' /> -->
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title">Logo di lengan kanan
                    </div>
                    <div class="form-uploads w-17">
                      <label for="fileInput8" id="customLabel8" class="customLabel" style="width:20rem;">
                        @if(isset($data->logo_dilengan_kanan))
  
                        <img src="{{asset('uploads'.'/'.$data->logo_dilengan_kanan)}}" class="w-75" alt="">
                        @endif
                        <div class="title" id="statusUpload8"></div>
                        <div class="form-upload payment__type--cc">
                          <i class="icon icon-cloud-upload"></i>Upload
                        </div>
                        <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput8" name="lk" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" onchange="updateFileName('fileInput8', 'statusUpload8')">
                        <!-- <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput8" name="lk" class="fileInput form-control fw-lighter hidden" placeholder="Upload File"> -->
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
                      <div class="form-uploads w-17">
                        <label for="fileInput9" id="customLabel9" class="customLabel" style="width:20rem;">
                          @if(isset($data->logo_dilengan_kiri))
                          <img src="{{asset('uploads'.'/'.$data->logo_dilengan_kiri)}}" class="w-75" alt="">
                          @endif
                          <div class="title" id="statusUpload9"></div>
                          <div class="form-upload payment__type--cc">
                            <i class="icon icon-cloud-upload"></i>Upload
                          </div>
                          <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput9" name="llk" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" onchange="updateFileName('fileInput9', 'statusUpload9')">
                          <!-- <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput9" name="llk" class="fileInput form-control fw-lighter hidden" placeholder="Upload File"> -->
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
                    <div class="form-uploads w-17">
                      <label for="fileInput10" id="customLabel0" class="customLabel" style="width:20rem;">
                        @if(isset($data->sponsor_belakang_tulisan1baris))
  
                        <img src="{{asset('uploads'.'/'.$data->sponsor_belakang_tulisan1baris)}}" class="w-75" alt="">
                        @endif
                        <div class="title" id="statusUpload10"></div>
                        <div class="form-upload payment__type--cc">
                          <i class="icon icon-cloud-upload"></i>Upload
                        </div>
                        <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput10" name="sbt" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" onchange="updateFileName('fileInput10', 'statusUpload10')">
                        <!-- <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput10" name="sbt" class="fileInput form-control fw-lighter hidden" placeholder="Upload File"> -->
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
                      <div class="form-uploads w-17">
                        <label for="fileOrder1" id="OrderLabel1" class="customLabel" style="width:20rem;">
                          @if(isset($data->sponsor_belakang_logodantulisan))
  
                          <img src="{{asset('uploads'.'/'.$data->sponsor_belakang_logodantulisan)}}" class="w-75" alt="">
                          @endif
                          <div class="title" id="statusUpload11"></div>
                          <div class="form-upload payment__type--cc">
                            <i class="icon icon-cloud-upload"></i>Upload
                          </div>
                          <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileOrder1" name="sbl" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" onchange="updateFileName('fileOrder1', 'statusUpload11')">
                          <!-- <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileOrder1" name="sblt" class="fileInput form-control fw-lighter hidden" placeholder="Upload File"> -->
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
      </div>
    </div>
    <div class="container">
      <div class="actions align-items-center">
        <button type="submit" class="btn action__submit">Save & Next
          <i class="icon icon-arrow-right-circle"></i>
        </button>
        <!-- <a href="/form/orderStep1" class="backBtn">Go Back to Form Order</a> -->
      </div>
      </form>
  </section>
  </div>
  <!-- partial -->
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
  </script>
</body>

</html>