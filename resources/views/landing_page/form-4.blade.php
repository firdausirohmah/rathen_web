<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="{{ asset('asset/css/core.css') }}" class="template-customizer-core-css" />
<script src="asset/js\bootstrap.js"></script>
</head>
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
                      class="nav-link"
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
                      class="nav-link active"
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
                      class="nav-link "
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
        </div>
        <div class="container">
            <div class="row">
                <p style="color: #1890fd;  font-family: Montheavy;  font-weight: bold; padding-left:0%;">Step 4. Form Data Pesanan</p>
                <hr>
                <div class="col-lg-12 fw-center">
                  <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#addModal">
                    <small class="bx bxs-edit"></small> Input Data
                  </button>
                  <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#uploadModal">
                    <small class="bx bx-upload"></small> Upload File
                  </button>
                </div>
            </div>
            <div class="row mt-4">
                <table class="table table-bordered border-secondary fw-center " style="text-align:left; width: 50%; border:10px; font-size:14px; font-weight:100; color:black;">
                    <thead>
                        <tr class="bg-light"><td colspan="3" style=" text-align:center"><span class="text-danger fw-bold">NAMA TIM</span>(27 stel) <small style="font-size: 10px">diambil</small> <span class="text-primary">30 Okt 2023</span></td></tr>
                        <tr class="bg-secondary">
                            <td class="fw-center text-danger">NAMA PUNGGUNG</td>
                            <td class="fw-center text-danger">NOMOR</td>
                            <td class="fw-center text-danger">UKURAN</td>
                        </tr>
                        <tbody>
                          @foreach ($pesanan as $row)
                            <tr class="bg-light">
                              <td>{{ $row->namapunggung }}</td>
                              <td>{{ $row->nomor; }}</td>
                              <td>{{ $row->ukuran; }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
        <!-- Button trigger modal -->


        </body>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
        <script>
          const myModal = document.getElementById('myModal')
          const myInput = document.getElementById('myInput')

          myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
          })
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        </html>

<!-- Modal -->
{{-- <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Pesanan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ... --}}
        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Pesanan</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form action="{{ route('tambahDataPesanan') }}" method="post">
                      @csrf
                  <div class="modal-body">
                      <!-- Formulir untuk menginputkan NAMA PUNGGUNG, NOMOR, dan UKURAN -->
                          <div class="mb-3">
                              <label for="namaPunggung" class="form-label">NAMA PUNGGUNG:</label>
                              <input type="text" class="form-control" id="namaPunggung" name="namaPunggung" required>
                          </div>
                          <div class="mb-3">
                              <label for="nomor" class="form-label">NOMOR:</label>
                              <input type="text" class="form-control" id="nomor" name="nomor" required>
                          </div>
                          <div class="mb-3">
                              <label for="ukuran" class="form-label">UKURAN:</label>
                              <input type="text" class="form-control" id="ukuran" name="ukuran" required>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Upload File</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="label"><a href="{{ route('unduhFormatFile') }}" download> Download </a></div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
          </div>
      </div>
  </div>
</div>
