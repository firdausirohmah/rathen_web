@extends('layout.form-order')

@section('content')


<style>
  table{
    width: 80%;
    align-content: center;
    text-align: left;
    border-spacing: 0px; /* Mengatur jarak antar sel menjadi 0 */ 
    border-collapse: collapse; /* Menggabungkan batas sel */
  }
  tr{
    margin-top: auto;
    padding-top: auto;
  }
  tr, td {
  padding: auto; /* Menambahkan padding untuk ruang di dalam sel */
  text-align: left; /* Penataan teks di dalam sel */
}
  .col-1{
     margin-top: auto;
    width: 20%;
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
  .hidden{
      color: #f5f5f9;

  }
  #fileInput {
  display: none;
}
/* Gaya kustom untuk elemen pengganti */
#customLabel {
  display: inline-block;
  padding: 8px 12px;
  cursor: pointer;
  border: 1px solid #ccc;
  color: white;
  border-radius: 5px;
  background-color: #979797;
}
.fileInput {
  display: none;
}
/* Gaya kustom untuk elemen pengganti */
.customLabel {
  display: inline-block;
  padding: 8px 12px;
  cursor: pointer;
  border: 1px solid #ccc;
  color: white;
  border-radius: 5px;
  background-color: #979797;
}
@media screen and (max-width : 800px){
    .notes{
      font-size: 8px;

    }.title{
      font-size:  10px;
    }
  }
    @media screen and (max-width : 500px){
    .notes{
      font-size: 8px;

    }.title{
      font-size:  10px;
    }
  }
  @media screen and (max-width : 400px){
    .notes{
      font-size: 6px;

    }.title{
      font-size:  10px;
    }
  }
  @media screen and (max-width : 300px){
    .notes{
      font-size: 4px;

    }.title{
      font-size:  8px;
    }
  }
  @media screen and (max-width : 200px){
    .notes{
      font-size: 4px;

    }.title{
      font-size:  8px;
    }
  }
</style> 
<form action="{{ route('upload') }}" id="upload" method="post" enctype="multipart/form-data">
  @csrf
<div class="container">
  <div class="row">
      <p style="color: #1890fd;  font-family: Montheavy;  font-weight: bold; padding-left:0%;">Step 2. Design dan Logo</p>
      <div class="col">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
      </div> 
      <table style="width: 100%; border:10px; font-size:14px; font-weight:100; color:black;"> 
          <tr>
            <td class="col-1 fw-semibold title">Design Jersey Pemain</td>
            <td class="col-2">:</td>
            <td colspan="1" class="col-3">
              <div style="display: flex; align-items: center;">
                <label for="fileInput1" id="customLabel1" class="customLabel" style="margin-right: 10px;">Upload</label>
                  <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput1" name="djp" class="fileInput form-control fw-lighter" placeholder="Upload File" required>
                  <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">(format file : .cdr./.ai/.pdf/.jpg)</small>  
              </div> 
            </td>
          </tr>
          <tr>
            <td class="col-1 fw-semibold title">Design jersey kiper</td>
            <td class="col-2">:</td>
            <td colspan="1" class="col-3">
              <div style="display: flex; align-items: center;">
                  <label for="fileInput2" id="customLabel2" class="customLabel" style="margin-right: 10px;">Upload</label>
                  <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput2" name="djk" class="fileInput form-control fw-lighter" placeholder="Upload File" required>
                  <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">(format file : .cdr./.ai/.pdf/.jpg)</small>
              </div> </td>
          </tr>
          <tr>
            <td class="col-1 fw-semibold title">Logo Tim</td>
            <td class="col-2">:</td>
            <td colspan="1" class="col-3">
              <div style="display: flex; align-items: center;">
                  <label for="fileInput3" id="customLabel3" class="customLabel" style="margin-right: 10px;">Upload</label>
                  <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput3" name="lt" class="fileInput form-control fw-lighter" placeholder="Upload File" required>
                  <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">(format file : .cdr./.ai/.pdf/.jpg)</small>
              </div> </td>
          </tr>
          <tr>
            <td class="col-1 fw-semibold title">Sponsor dada (tulisan 1 baris)</td>
            <td class="col-2">:</td>
            <td colspan="1" class="col-3">
              <div style="display: flex; align-items: center;">
                  <label for="fileInput4" id="customLabel4" class="customLabel" style="margin-right: 10px;">Upload</label>
                  <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput4" name="sdd" class="fileInput form-control fw-lighter" placeholder="Upload File">
                  <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">(format file : .cdr./.ai/.pdf/.jpg)</small> <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes"> Free utk semua kategori harga </small>
              </div> </td>
          </tr>
          <tr>
            <td class="col-1 fw-semibold title">Sponsor dada (logo + tulisan)</td>
            <td class="col-2">:</td>
            <td colspan="1" class="col-3">
              <div style="display: flex; align-items: center;">
                  <label for="fileInput5" id="customLabel5" class="customLabel" style="margin-right: 10px;">Upload</label>
                  <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput5" name="sd" class="fileInput form-control fw-lighter" placeholder="Upload File">
                  <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">(format file : .cdr./.ai/.pdf/.jpg) </small>  <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes"> +30,000/pcs utk NON-PRINT ; free utk kategori HALF-PRINT dan FULL PRINT </small>
              </div> </td>
          </tr>
      </table>
      <hr class="hidden">
      <table style="width: 100%; font-size:14px;  color:black;">
          <tr>
            <td colspan="4">
              <h5 style="color: #71BF72;">Extra :</h5>
            </td>
            <tr>
              <td class="col-1 fw-semibold title">Sponsor dada (tulisan 1 baris)</td>
              <td class="col-2">:</td>
              <td colspan="1" class="col-3">
                  <div style="display: flex; align-items: center;">
                      <label for="fileInput6" id="customLabel6" class="customLabel" style="margin-right: 10px;">Upload</label>
                      <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput6" name="t1b" class="fileInput form-control fw-lighter" placeholder="Upload File">
                      <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">(format file : .cdr./.ai/.pdf/.jpg)</small>  <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">  +15,000/pcs utk NON-PRINT ; free utk kategori HALF-PRINT dan FULL PRINT </small>
                  </div>
              </td>
          </tr>
          
            <tr>
              <td class="col-1 fw-semibold title">Sponsor dada (logo + tulisan)</td>
              <td class="col-2">:</td>
              <td colspan="1" class="col-3">
                  <div style="display: flex; align-items: center;">
                      <label for="fileInput7" id="customLabel7" class="customLabel" style="margin-right: 10px;">Upload</label>
                      <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput7" name="ltt" class="fileInput form-control fw-lighter" placeholder="Upload File">
                      <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">(format file : .cdr./.ai/.pdf/.jpg)</small> <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">   +30,000/pcs utk NON-PRINT ; free utk kategori HALF-PRINT dan FULL PRINT </small>
                  </div>
              </td>
            </tr>
            <tr>
              <td class="col-1 fw-semibold title">Logo di lengan kanan</td>
              <td class="col-2">:</td>
              <td colspan="1" class="col-3">
                  <div style="display: flex; align-items: center;">
                      <label for="fileInput8" id="customLabel8" class="customLabel" style="margin-right: 10px;">Upload</label>
                      <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput8" name="lk" class="fileInput form-control fw-lighter" placeholder="Upload File">
                      <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">(format file : .cdr./.ai/.pdf/.jpg)</small> <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">   15,000/pcs utk NON-PRINT dan HALF-PRINT ; free utk kategori FULL PRINT </small>
                  </div> </td>
            </tr>
            <tr>
              <td class="col-1 fw-semibold title">Logo di lengan kanan kiri</td>
              <td class="col-2">:</td>
              <td colspan="1" class="col-3">
                  <div style="display: flex; align-items: center;">
                      <label for="fileInput9" id="customLabel9" class="customLabel" style="margin-right: 10px;">Upload</label>
                      <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput9" name="llk" class="fileInput form-control fw-lighter" placeholder="Upload File">
                      <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">(format file : .cdr./.ai/.pdf/.jpg)</small> <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">   +15,000/pcs utk NON-PRINT dan HALF-PRINT ; free utk kategori FULL PRINT </small>
                  </div> </td>
            </tr>
            <tr>
              <td class="col-1 fw-semibold title">Sponsor belakang (tulisan 1 baris)</td>
              <td class="col-2">:</td>
              <td colspan="1" class="col-3">
                  <div style="display: flex; align-items: center;">
                      <label for="fileInput10" id="customLabel0" class="customLabel" style="margin-right: 10px;">Upload</label>
                      <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput10" name="sbt" class="fileInput form-control fw-lighter" placeholder="Upload File">
                      <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">(format file : .cdr./.ai/.pdf/.jpg)</small> <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes"> +15,000/pcs utk NON-PRINT dan HALF-PRINT ; free utk kategori FULL PRINT </small>
                  </div> </td>
              </td>
          </tr>
          <tr>
              <td class="col-1 fw-semibold title">Sponsor belakang (logo + tulisan)</td>
              <td class="col-2">:</td>
              <td colspan="1" class="col-3">
                  <div style="display: flex; align-items: center;">
                      <label for="fileOrder1" id="OrderLabel1" class="customLabel" style="margin-right: 10px;">Upload</label>
                      <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileOrder1" name="sblt" class="fileInput form-control fw-lighter" placeholder="Upload File">
                      <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">(format file : .cdr./.ai/.pdf/.jpg)</small> <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter text-wrap notes">  +30,000/pcs utk NON-PRINT dan HALF-PRINT ; free utk kategori  </small>
                  </div>
              </td>
          
          </tr>
              <tr>
                  <td colspan="3" style="text-align: center; align-item:center;padding-top:3%">
                      <button type="submit" style="font-family: Montheavy;" class="btn btn-dark  title ">NEXT</button>
                    </td>
              </tr> 
          </table>
  </div>
</div> 
      </form> 
<script>
  // Event listener untuk perubahan pada setiap input file
  var fileInputs = document.querySelectorAll('[id^="fileInput"]');
  var fileInputs2 = document.querySelectorAll('[id^="fileOrder"]');

  
  fileInputs.forEach(function(input) {
      input.addEventListener('change', function() {
          var fileName = this.value.split('\\').pop();
          // Dapatkan id dari elemen label dengan mengambil substring dari id input file
          var labelId = 'customLabel' + this.id.slice(-1);
          // Jika file dipilih, tampilkan nama file di dalam label pengganti
          document.getElementById(labelId).innerText = fileName ? fileName : 'Upload';
      });
  });
  fileInputs2.forEach(function(input) {
      input.addEventListener('change', function() {
          var fileName = this.value.split('\\').pop(); 
          var labelId = 'OrderLabel' + this.id.slice(-1); 
          document.getElementById(labelId).innerText = fileName ? fileName : 'Upload';
      });
  });
  // document.getElementById('upload').addEventListener('submit', function() { 
  //       if (document.getElementById('fileInput1').value === '') { 
  //           document.getElementById('fileInput1').value = 'default_value';
  //       } 
  //       if (document.getElementById('fileInput2').value === '') {
  //           document.getElementById('fileInput2').value = 'default_value';
  //       }
  //       if (document.getElementById('fileInput3').value === '') {
  //           document.getElementById('fileInput3').value = 'default_value';
  //       }
  //       if (document.getElementById('fileInput4').value === '') {
  //           document.getElementById('fileInput4').value = 'default_value';
  //       }
  //       if (document.getElementById('fileInput5').value === '') {
  //           document.getElementById('fileInput5').value = 'default_value';
  //       }
  //       if (document.getElementById('fileInput6').value === '') {
  //           document.getElementById('fileInput6').value = 'default_value';
  //       }
  //       if (document.getElementById('fileInput7').value === '') {
  //           document.getElementById('fileInput7').value = 'default_value';
  //       }
  //       if (document.getElementById('fileInput8').value === '') {
  //           document.getElementById('fileInput8').value = 'default_value';
  //       }
  //       if (document.getElementById('fileInput9').value === '') {
  //           document.getElementById('fileInput9').value = 'default_value';
  //       }
  //       if (document.getElementById('fileInput10').value === '') {
  //           document.getElementById('fileInput10').value = 'default_value';
  //       } 
  //       if (document.getElementById('fileOrder1').value === '') {
  //           document.getElementById('fileOrder1').value = 'default_value';
  //       }  
  //   });
</script> 
@endsection