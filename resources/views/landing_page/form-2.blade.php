<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="{{ asset('asset/css/core.css') }}" class="template-customizer-core-css" />
<script src="asset/js\bootstrap.js"></script>
<body>
    <br>
    <h3 style="font-family: Montheavy; color: #1890fd;  font-weight: bold; text-decoration: underline;
    margin-bottom: 20px; text-align: center;">FORM ORDER - CUSTOM RATHEN</h3>
    <div class="container">
        <div class="row ">
            <div class="col-xl-7">
              <div class="nav-align-top mb-4">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <button
                      type="button"
                      class="nav-link"
                      role="tab" 
                      data-bs-toggle="tab"
                      data-bs-target="#navs-top-home"
                      aria-controls="navs-top-home"
                      aria-selected="true"
                      
                      >Step 1
                    </button>
                  </li>
    
                  <li class="nav-item">
                    <button
                      type="button"
                      class="nav-link active"
                      role="tab" 
                      data-bs-toggle="tab"
                      data-bs-target="#navs-top-home"
                      aria-controls="navs-top-home"
                      aria-selected="true"
                    >
                      Step 2
                    </button>
                  </li>
    
                  <li class="nav-item">
                    <button
                      type="button"
                      class="nav-link"
                      role="tab" 
                      data-bs-toggle="tab"
                      data-bs-target="#navs-top-profile"
                      aria-controls="navs-top-profile"
                      aria-selected="false"
                    >
                      Step 3
                    </button>
                  </li>
                  <li class="nav-item">
                    <button
                      type="button"
                      class="nav-link"
                      role="tab" 
                      data-bs-toggle="tab"
                      data-bs-target="#navs-top-profile"
                      aria-controls="navs-top-profile"
                      aria-selected="false"
                    >
                      Step 4
                    </button>
                  </li>
                  <li class="nav-item">
                    <button
                      type="button"
                      class="nav-link"
                      role="tab" 
                      data-bs-toggle="tab"
                      data-bs-target="#navs-top-messages"
                      aria-controls="navs-top-messages"
                      aria-selected="false"
                    >
                      Step 5
                    </button>
                  </li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
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
        <footer>
        <div  style="text-align: right;" class="">
            <button type="button" style="font-family: Montheavy; width:25%; font-size:12px;" class="btn btn-secondary">Data step 1 ini utk invoice dan tracking</button>
  </div>
</footer>
    
</body>
</html>