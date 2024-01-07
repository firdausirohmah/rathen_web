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
        <div class="payment__title fw-6">
          Step Order
        </div>
        <div class="payment__types">
          <a class="payment__type payment__type--cc active" href="/form/orderStep2">
            <i class="icon icon-picture"></i>Design Logo</a>
          <a class="payment__type payment__type--paypal" href="/form/orderStep3">
            <i class="icon icon-pencil"></i>Spesifikasi</a>
          <a class="payment__type payment__type--paypal" href="/form/orderStep4">
            <i class="icon icon-docs"></i>Form Data</a>
          <a class="payment__type payment__type--paypal" href="/form/orderStep5">
            <i class="icon icon-note"></i>Invoice</a>
        </div>

        <div class="payment__info">
          <div class="payment__cc">
            <div class="payment__title fw-6">
              <i class="icon icon-picture"></i>Design dan Logo
            </div>
            <form>
              <div class="form__cc">
                <div class="row">
                  <div class="field">
                    <div class="title">Design jersey pemain
                    </div>
                    <div class="form-uploads w-17">
                      <div class="form-upload payment__type--cc">
                        <label for="fileInput1" id="customLabel1" class="customLabel" style="margin-right: 10px;">
                          <i class="icon icon-cloud-upload"></i>Upload
                          <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput1" name="djp" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" required>
                        </label>
                      </div>
                    </div>
                    <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">(format file : .cdr./.ai/.pdf/.jpg)</small>
                    <!-- <input type="text" class="input txt text-validated" value='Upload' /> -->
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title">Design jersey kiper
                    </div>
                    <div class="form-uploads w-17">
                      <div class="form-upload payment__type--cc">
                        <label for="fileInput2" id="customLabel2" class="customLabel" style="margin-right: 10px;">
                          <i class="icon icon-cloud-upload"></i>Upload
                          <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput2" name="djk" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" required>
                        </label>
                      </div>
                    </div>
                    <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">(format file : .cdr./.ai/.pdf/.jpg)</small>
                    <!-- <input type="text" class="input txt text-validated" value='Upload' /> -->
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title">Logo tim
                    </div>
                    <div class="form-uploads w-17">
                      <div class="form-upload payment__type--cc">
                        <label for="fileInput3" id="customLabel3" class="customLabel" style="margin-right: 10px;">
                          <i class="icon icon-cloud-upload"></i>Upload</div>
                          <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput3" name="lt" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" required>
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
                      <div class="form-upload payment__type--cc">
                        <label for="fileInput4" id="customLabel4" class="customLabel" style="margin-right: 10px;">
                          <i class="icon icon-cloud-upload"></i>Upload</div>
                          <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput4" name="sdd" class="fileInput form-control fw-lighter hidden" placeholder="Upload File">
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
                      <div class="form-upload payment__type--cc">
                        <label for="fileInput5" id="customLabel5" class="customLabel" style="margin-right: 10px;">
                          <i class="icon icon-cloud-upload"></i>Upload</div>
                          <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput5" name="sd" class="fileInput form-control fw-lighter hidden" placeholder="Upload File">
                        </label>
                    </div>
                    <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">(format file : .cdr./.ai/.pdf/.jpg) </small> <br>
                    <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes"> +30,000/pcs utk NON-PRINT ; free utk kategori HALF-PRINT dan FULL PRINT </small>
                    <!-- <input type="text" class="input txt text-validated" value='Upload' /> -->
                  </div>
                </div>

              </div>
            </form>
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
                  <div class="form-upload payment__type--cc">
                    <label for="fileInput6" id="customLabel6" class="customLabel" style="margin-right: 10px;">
                      <i class="icon icon-cloud-upload"></i>Upload</div>
                      <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput6" name="t1b" class="fileInput form-control fw-lighter hidden" placeholder="Upload File">
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
                  <div class="form-upload payment__type--cc">
                    <label for="fileInput7" id="customLabel7" class="customLabel" style="margin-right: 10px;">
                      <i class="icon icon-cloud-upload"></i>Upload</div>
                      <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput7" name="ltt" class="fileInput form-control fw-lighter hidden" placeholder="Upload File">
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
                  <div class="form-upload payment__type--cc">
                    <label for="fileInput8" id="customLabel8" class="customLabel" style="margin-right: 10px;">
                      <i class="icon icon-cloud-upload"></i>Upload</div>
                      <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput8" name="lk" class="fileInput form-control fw-lighter hidden" placeholder="Upload File">
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
                  <div class="form-upload payment__type--cc">
                    <label for="fileInput9" id="customLabel9" class="customLabel" style="margin-right: 10px;">
                      <i class="icon icon-cloud-upload"></i>Upload</div>
                      <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput9" name="llk" class="fileInput form-control fw-lighter hidden" placeholder="Upload File">
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
                  <div class="form-upload payment__type--cc">
                    <label for="fileInput10" id="customLabel0" class="customLabel" style="margin-right: 10px;">
                      <i class="icon icon-cloud-upload"></i>Upload</div>
                      <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput10" name="sbt" class="fileInput form-control fw-lighter hidden" placeholder="Upload File">
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
                  <div class="form-upload payment__type--cc">
                    <label for="fileOrder1" id="OrderLabel1" class="customLabel" style="margin-right: 10px;">
                      <i class="icon icon-cloud-upload"></i>Upload</div>
                      <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileOrder1" name="sblt" class="fileInput form-control fw-lighter hidden" placeholder="Upload File">
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

        <a href="/form/orderStep3" class="btn action__submit">Next
          <i class="icon icon-arrow-right-circle"></i>
        </a>
        <a href="/form/orderStep1" class="backBtn">Go Back to Form Order</a>

      </div>
  </section>
  </div>
<!-- partial -->
  
</body>
</html>
