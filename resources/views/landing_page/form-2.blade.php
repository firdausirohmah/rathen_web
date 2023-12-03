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
</style>
<div class="container">
  <div class="row">
      <p style="color: #1890fd;  font-family: Montheavy;  font-weight: bold; padding-left:0%;">Step 2. Design dan Logo</p>
      <table style="width: 100%; border:10px; font-size:14px; font-weight:100; color:black;">
          <tr>
            <td class="col-1 fw-semibold">Design Jersey Pemain</td>
            <td class="col-2">:</td>
            <td colspan="1" class="col-3">
              <div style="display: flex; align-items: center;">
                  <label for="fileInput" id="customLabel" style="margin-right: 10px;">Upload</label>
                  <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput" name="djp" class="form-control fw-lighter" placeholder="Upload File">
                  <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter">(format file : .cdr./.ai/.pdf/.jpg)</small>
              </div> </td>
          </tr>
          <tr>
            <td class="col-1 fw-semibold">Design jersey kiper</td>
            <td class="col-2">:</td>
            <td colspan="1" class="col-3">
              <div style="display: flex; align-items: center;">
                  <label for="fileInput" id="customLabel" style="margin-right: 10px;">Upload</label>
                  <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput" name="djk" class="form-control fw-lighter" placeholder="Upload File">
                  <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter">(format file : .cdr./.ai/.pdf/.jpg)</small>
              </div> </td>
          </tr>
          <tr>
            <td class="col-1 fw-semibold">Logo Tim</td>
            <td class="col-2">:</td>
            <td colspan="1" class="col-3">
              <div style="display: flex; align-items: center;">
                  <label for="fileInput" id="customLabel" style="margin-right: 10px;">Upload</label>
                  <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput" name="lt" class="form-control fw-lighter" placeholder="Upload File">
                  <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter">(format file : .cdr./.ai/.pdf/.jpg)</small>
              </div> </td>
          </tr>
          <tr>
            <td class="col-1 fw-semibold">Sponsor dada (tulisan 1 baris)</td>
            <td class="col-2">:</td>
            <td colspan="1" class="col-3">
              <div style="display: flex; align-items: center;">
                  <label for="fileInput" id="customLabel" style="margin-right: 10px;">Upload</label>
                  <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput" name="sdd" class="form-control fw-lighter" placeholder="Upload File">
                  <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter">(format file : .cdr./.ai/.pdf/.jpg)</small> <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter"> Free utk semua kategori harga </small>
              </div> </td>
          </tr>
          <tr>
            <td class="col-1 fw-semibold">Sponsor dada (logo + tulisan)</td>
            <td class="col-2">:</td>
            <td colspan="1" class="col-3">
              <div style="display: flex; align-items: center;">
                  <label for="fileInput" id="customLabel" style="margin-right: 10px;">Upload</label>
                  <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput" name="sd" class="form-control fw-lighter" placeholder="Upload File">
                  <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter">(format file : .cdr./.ai/.pdf/.jpg) </small>  <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter"> +30,000/pcs utk NON-PRINT ; free utk kategori HALF-PRINT dan FULL PRINT </small>
              </div> </td>
          </tr>
      </table>
      <hr class="hidden">
      <table style="width: 100%; font-size:14px;  color:black;">
          <tr>
            <td colspan="4">
              <h4 style="color: #71BF72;">Extra :</h4>
            </td>
            <tr>
              <td class="col-1 fw-semibold">Sponsor dada (tulisan 1 baris)</td>
              <td class="col-2">:</td>
              <td colspan="1" class="col-3">
                  <div style="display: flex; align-items: center;">
                      <label for="fileInput" id="customLabel" style="margin-right: 10px;">Upload</label>
                      <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput" name="t1b" class="form-control fw-lighter" placeholder="Upload File">
                      <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter">(format file : .cdr./.ai/.pdf/.jpg)</small>  <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter">  +15,000/pcs utk NON-PRINT ; free utk kategori HALF-PRINT dan FULL PRINT </small>
                  </div>
              </td>
          </tr>
          
            <tr>
              <td class="col-1 fw-semibold">Sponsor dada (logo + tulisan)</td>
              <td class="col-2">:</td>
              <td colspan="1" class="col-3">
                  <div style="display: flex; align-items: center;">
                      <label for="fileInput" id="customLabel" style="margin-right: 10px;">Upload</label>
                      <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput" name="ltt" class="form-control fw-lighter" placeholder="Upload File">
                      <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter">(format file : .cdr./.ai/.pdf/.jpg)</small> <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter">   +30,000/pcs utk NON-PRINT ; free utk kategori HALF-PRINT dan FULL PRINT </small>
                  </div>
              </td>
            </tr>
            <tr>
              <td class="col-1 fw-semibold">Logo di lengan kanan</td>
              <td class="col-2">:</td>
              <td colspan="1" class="col-3">
                  <div style="display: flex; align-items: center;">
                      <label for="fileInput" id="customLabel" style="margin-right: 10px;">Upload</label>
                      <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput" name="lk" class="form-control fw-lighter" placeholder="Upload File">
                      <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter">(format file : .cdr./.ai/.pdf/.jpg)</small> <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter">   15,000/pcs utk NON-PRINT dan HALF-PRINT ; free utk kategori FULL PRINT </small>
                  </div> </td>
            </tr>
            <tr>
              <td class="col-1 fw-semibold">Logo di lengan kanan kiri</td>
              <td class="col-2">:</td>
              <td colspan="1" class="col-3">
                  <div style="display: flex; align-items: center;">
                      <label for="fileInput" id="customLabel" style="margin-right: 10px;">Upload</label>
                      <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput" name="llk" class="form-control fw-lighter" placeholder="Upload File">
                      <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter">(format file : .cdr./.ai/.pdf/.jpg)</small> <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter">   +15,000/pcs utk NON-PRINT dan HALF-PRINT ; free utk kategori FULL PRINT </small>
                  </div> </td>
            </tr>
            <tr>
              <td class="col-1 fw-semibold">Sponsor belakang (tulisan 1 baris)</td>
              <td class="col-2">:</td>
              <td colspan="1" class="col-3">
                  <div style="display: flex; align-items: center;">
                      <label for="fileInput" id="customLabel" style="margin-right: 10px;">Upload</label>
                      <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput" name="sbt" class="form-control fw-lighter" placeholder="Upload File">
                      <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter">(format file : .cdr./.ai/.pdf/.jpg)</small> <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter"> +15,000/pcs utk NON-PRINT dan HALF-PRINT ; free utk kategori FULL PRINT </small>
                  </div> </td>
              </td>
          </tr>
          <tr>
              <td class="col-1 fw-semibold">Sponsor belakang (logo + tulisan)</td>
              <td class="col-2">:</td>
              <td colspan="1" class="col-3">
                  <div style="display: flex; align-items: center;">
                      <label for="fileInput" id="customLabel" style="margin-right: 10px;">Upload</label>
                      <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileInput" name="sblt" class="form-control fw-lighter" placeholder="Upload File">
                      <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter">(format file : .cdr./.ai/.pdf/.jpg)</small> <small style="font-size: 12px; color: grey;" class="input-group-text fw-lighter">  +30,000/pcs utk NON-PRINT dan HALF-PRINT ; free utk kategori  </small>
                  </div> </td>
          
              </tr>
              <tr>
                  <td colspan="3" style="text-align: center; align-item:center;padding-top:3%">
                      <button type="button" style="font-family: Montheavy; width:15%" class="btn btn-black">NEXT</button>
                    </td>
              </tr>

          </table>
  </div>
</div>
<script>
  // Event listener untuk perubahan pada input file
  document.getElementById('fileInput').addEventListener('change', function() {
      var fileName = this.value.split('\\').pop();
      // Jika file dipilih, tampilkan nama file di dalam label pengganti
      document.getElementById('customLabel').innerText = fileName ? fileName : 'Upload';
  });
</script>

@endsection