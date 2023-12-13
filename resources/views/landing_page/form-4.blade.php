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
        </div>
        <div class="container">
            <div class="row">
                <p style="color: #1890fd;  font-family: Montheavy;  font-weight: bold; padding-left:0%;">Step 4. Form Data Pesanan</p>
                <hr>
                <div class="col-lg-12 fw-center">
                  <button type="button" class="btn btn-outline-warning">
                    <i class='bx bx-library'></i> Format Ukuran
                  </button>
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
                              <input type="number" class="form-control" id="nomor" name="nomor" required>
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
              <div class="label"><a href="" download> Download </a></div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
          </div>
      </div>
  </div>
</div>
@endsection
