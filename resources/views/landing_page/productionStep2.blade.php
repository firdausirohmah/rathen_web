<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        Rathen - Edit Data
      </div>
    </div>
  </header>
  <section class="content content-back">
    <a class="btn btn-back" href="/production/{{$kode}}">
      <i class="icon-arrow-left"></i>
    </a>
    <div class="container">
      
      <div class="payment">
        
        <!-- <div class="payment__title fw-6">
          Step Order
        </div>
        <div class="payment__types">
          <a class="payment__type payment__type--cc active" href="/form-2/{{$kode}}">
            <i class="icon icon-picture"></i>Design Logo</a>
          <a class="payment__type payment__type--paypal" href="/form-3/{{$kode}}">
            <i class="icon icon-pencil"></i>Spesifikasi</a>
          <a class="payment__type payment__type--paypal" href="/form-4/{{$kode}}">
            <i class="icon icon-docs"></i>Form Data</a>
          
        </div> -->
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
                  <input type="text" class="input txt" value="{{ $data->product }}"/>
                </div>
              </div>
              
              <div class="row">
                <div class="field">
                  <div class="title">Model Kerah
                  </div>
                  <select name="model_kerah" class="input ddl w-100">
                    <option value="K.R 01">K.R 01</option>
                    <option value="K.R 02">K.R 02</option>
                    <option value="K.R 03">K.R 03</option>
                    <option value="K.R 04">K.R 04</option>
                    <option value="K.R 05">K.R 05</option>
                    <option value="K.R 06">K.R 06</option>
                    <option value="K.R 07">K.R 07</option>
                    <option value="K.R 08">K.R 08</option>
                    <option value="K.R 09">K.R 09</option>
                    <option value="K.R 10">K.R 10</option>
                    <option value="K.R 11">K.R 11</option>
                    <option value="K.R 12">K.R 12</option>
                    <option value="K.R 13">K.R 13</option> 
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="field">
                  <div class="title">Bahan baju
                  </div>
                  <input type="text"  name="bb" class="input txt" value='' />
                </div>
              </div>
              <div class="row">
                <div class="field">
                  <div class="title">Bahan celana
                  </div>
                  <input type="text" name="bc" class="input txt" value='' />
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
            <form action="{{ route('upload') }}" id="upload" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form__cc">
                <div class="row">
                  <div class="field">
                    <div class="title">Design jersey pemain*
                    </div>
                    <div class="form-uploads w-17">
                    <label for="fileInput1" id="customLabel1" class="customLabel" style="width:20rem;">
                        <div class="img-upload" id="cutomerDesign">
                          <img src="{{ asset('asset/images/content/customerDesign.png') }}" alt="">
                        </div>
                        <div class="img-upload" id="rathenDesign">
                          <img src="{{ asset('asset/images/content/rathenDesign.jpg') }}" alt="">
                        </div>
                        <div class="form-upload payment__type--cc">
                            <i class="icon icon-cloud-upload"></i>ReUpload
                            <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput1" name="djp" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" required
                                  onchange="updateFileName('fileInput1')">
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
                          <img src="{{ asset('asset/images/content/customerDesign.png') }}" alt="">
                        </div>
                        <div class="form-upload payment__type--cc">
                            <i class="icon icon-cloud-upload"></i>Upload
                            <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput2" name="djk" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" required
                                  onchange="updateFileName('fileInput2')">
                        </div>
                    </label>
                    </div>
                    <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">(format file : .cdr./.ai/.pdf/.jpg)</small>
                    <!-- <input type="text" class="input txt text-validated" value='Upload' /> -->
                  </div>
                </div>
                
                

              </div>
          </div>
          <div class="payment__order2">
            <div class="payment__title fw-6">
              <i class="icon icon-plus"></i> Extra
            </div>
            <div class="row">
              <div class="field">
                <div class="title">Sponsor dada (tulisan 1 baris)
                </div>
                <div class="form-uploads">
                    <label for="fileInput6" id="customLabel6" class="customLabel" style="width:20rem;">
                      <div class="img-upload" id="extraDesign">
                        <img src="{{ asset('asset/images/content/customerDesign.png') }}" alt="">
                      </div>
                      <div class="img-upload" id="extraRathenDesign">
                        <img src="{{ asset('asset/images/content/rathenDesign.jpg') }}" alt="">
                      </div>
                      <div class="form-upload payment__type--cc">
                      <i class="icon icon-cloud-upload"></i>ReUpload</div>
                      <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput6" name="djk" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" 
                                  onchange="updateFileName('fileInput6')">
                      <!-- <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput6" name="t1b" class="fileInput form-control fw-lighter hidden" placeholder="Upload File"> -->
                    </label>
                </div>
                <small style="font-size: 14px; color: grey;" class="input-group-text fw-lighter text-wrap notes">+15,000/pcs</small>
                <!-- <input type="text" class="input txt text-validated" value='Upload' /> -->
              </div>
            </div>
            <div class="row">
              <div class="field">
                <div class="title">Sponsor dada (logo + tulisan)
                </div>
                <div class="form-uploads">
                    <label for="fileInput7" id="customLabel7" class="customLabel" style="width:20rem;">
                      <div class="img-upload" id="extraDesign">
                        <img src="{{ asset('asset/images/content/customerDesign.png') }}" alt="">
                      </div>
                      <div class="form-upload payment__type--cc">
                      <i class="icon icon-cloud-upload"></i>Upload</div>
                      <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput7" name="djk" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" 
                                  onchange="updateFileName('fileInput7')">
                      <!-- <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput7" name="ltt" class="fileInput form-control fw-lighter hidden" placeholder="Upload File"> -->
                    </label>
                </div>
                <small style="font-size: 14px; color: grey;" class="input-group-text fw-lighter text-wrap notes">+30,000/pcs</small>
                <!-- <input type="text" class="input txt text-validated" value='Upload' /> -->
              </div>
            </div>
            

          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="actions pt250">

        <button type="submit" href="{{ url('/form-3') }}" class="btn action__submit">Save
          <i class="icon icon-arrow-right-circle"></i>
        </button>
        <!-- <a href="/form/orderStep1" class="backBtn">Go Back to Form Order</a> -->

      </div>
    </form>
  </section>
  </div>
<!-- partial -->
<script>
    function updateFileName(inputId) {
        const input = document.getElementById(inputId);
        const label = input.closest('label');

        if (input.files.length > 0) {
            label.innerText = 'File Selected: ' + input.files[0].name;
        } else {
            label.innerText = 'Upload';
        }
    }
</script>


  
</body>
</html>
