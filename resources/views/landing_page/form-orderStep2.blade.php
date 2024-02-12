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
        Custom Rathen - Form Order
      </div>
    </div>
  </header>
  <section class="content content-back">
    <a class="btn btn-back" href="/invoice/{{$kode}}">
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
                            <i class="icon icon-cloud-upload"></i>ReUpload
                            <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput2" name="djk" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" required
                                  onchange="updateFileName('fileInput2')">
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
                          <div class="form-upload payment__type--cc">
                            <i class="icon icon-cloud-upload"></i>Upload</div>
                            <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput3" name="djk" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" required
                                  onchange="updateFileName('fileInput3')">
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
                          <div class="form-upload payment__type--cc">
                            <i class="icon icon-cloud-upload"></i>Upload</div>
                            <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput4" name="djk" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" 
                                  onchange="updateFileName('fileInput4')">
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
                          <div class="form-upload payment__type--cc">
                              <i class="icon icon-cloud-upload"></i>Upload</div>
                              <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput5" name="djk" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" 
                                  onchange="updateFileName('fileInput5')">
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
                        <span class="extraDesign">+15.000/pcs</span>
                      </div>
                      <div class="form-upload payment__type--cc">
                      <i class="icon icon-cloud-upload"></i>ReUpload</div>
                      <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput6" name="djk" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" 
                                  onchange="updateFileName('fileInput6')">
                      <!-- <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput6" name="t1b" class="fileInput form-control fw-lighter hidden" placeholder="Upload File"> -->
                    </label>
                </div>
                <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">(format file : .cdr./.ai/.pdf/.jpg)</small><br>
                <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">  +15,000/pcs utk NON-PRINT ; free utk kategori HALF-PRINT dan FULL PRINT </small>
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
                        <span class="extraDesign">+30.000/pcs</span>
                      </div>
                      <div class="form-upload payment__type--cc">
                      <i class="icon icon-cloud-upload"></i>Upload</div>
                      <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput7" name="djk" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" 
                                  onchange="updateFileName('fileInput7')">
                      <!-- <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput7" name="ltt" class="fileInput form-control fw-lighter hidden" placeholder="Upload File"> -->
                    </label>
                </div>
                <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">(format file : .cdr./.ai/.pdf/.jpg)</small><br>
                <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">   +30,000/pcs utk NON-PRINT ; free utk kategori HALF-PRINT dan FULL PRINT </small>
                <!-- <input type="text" class="input txt text-validated" value='Upload' /> -->
              </div>
            </div>
            <div class="row">
              <div class="field">
                <div class="title">Logo di lengan kanan
                </div>
                <div class="form-uploads">
                    <label for="fileInput8" id="customLabel8" class="customLabel" style="width:20rem;">
                    <div class="form-upload payment__type--cc">
                      <i class="icon icon-cloud-upload"></i>Upload</div>
                      <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput8" name="djk" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" 
                                  onchange="updateFileName('fileInput8')">
                      <!-- <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput8" name="lk" class="fileInput form-control fw-lighter hidden" placeholder="Upload File"> -->
                    </label>
                </div>
                <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">(format file : .cdr./.ai/.pdf/.jpg)</small><br>
                <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">   15,000/pcs utk NON-PRINT dan HALF-PRINT ; free utk kategori FULL PRINT </small>
                <!-- <input type="text" class="input txt text-validated" value='Upload' /> -->
              </div>
            </div>
            <div class="row">
              <div class="field">
                <div class="title">Logo di lengan kanan kiri
                </div>
                <div class="form-uploads">
                    <label for="fileInput9" id="customLabel9" class="customLabel" style="width:20rem;">
                    <div class="form-upload payment__type--cc">
                      <i class="icon icon-cloud-upload"></i>Upload</div>
                      <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput9" name="djk" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" 
                                  onchange="updateFileName('fileInput9')">
                      <!-- <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput9" name="llk" class="fileInput form-control fw-lighter hidden" placeholder="Upload File"> -->
                    </label>
                </div>
                <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">(format file : .cdr./.ai/.pdf/.jpg)</small><br>
                <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">   +15,000/pcs utk NON-PRINT dan HALF-PRINT ; free utk kategori FULL PRINT </small>
                <!-- <input type="text" class="input txt text-validated" value='Upload' /> -->
              </div>
            </div>
            <div class="row">
              <div class="field">
                <div class="title">Sponsor belakang (tulisan 1 baris)
                </div>
                <div class="form-uploads">
                    <label for="fileInput10" id="customLabel0" class="customLabel" style="width:20rem;">
                    <div class="form-upload payment__type--cc">
                      <i class="icon icon-cloud-upload"></i>Upload</div>
                      <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput10" name="djk" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" 
                                  onchange="updateFileName('fileInput10')">
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
                <div class="form-uploads">
                    <label for="fileOrder1" id="OrderLabel1" class="customLabel" style="width:20rem;">
                    <div class="form-upload payment__type--cc">
                      <i class="icon icon-cloud-upload"></i>Upload</div>
                      <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileOrder1" name="djk" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" 
                                  onchange="updateFileName('fileOrder1')">
                      <!-- <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileOrder1" name="sblt" class="fileInput form-control fw-lighter hidden" placeholder="Upload File"> -->
                    </label>
                </div>
                <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">(format file : .cdr./.ai/.pdf/.jpg)</small> <br>
                <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">  +30,000/pcs utk NON-PRINT dan HALF-PRINT ; free utk kategori  </small>
                <!-- <input type="text" class="input txt text-validated" value='Upload' /> -->
              </div>
            </div>
            <!-- <div class="details__user">
              <div class="user__name">John Doe
                <br> 13/03/1980</div>
              <div class="user__address">Shipping Address: 22 Street, Address
                <br>Country</div>
            </div> -->

          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="actions pt250">

        <button type="submit" href="{{ url('/form-3') }}" class="btn action__submit">Save & Next
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
