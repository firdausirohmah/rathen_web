<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rathen</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700|Open+Sans:400,600'>
  <!-- <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700|Open+Sans:400,600'> -->
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="asset/admin/js/core/bootstrap.min.js"></script>

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css'>
  <link rel="stylesheet" href="{{ asset('asset/css/formOrder.css') }}">
  <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>

</head>

<body>
  <!-- partial:index.partial.html -->
  <header>
    <div class="container">
      <div class="navigation center-content">

        <div class="logo">
          <img class="icon icon-basket" src="{{asset('asset/cfind/source/images/rathen.png')}}" width="12%">
        </div>

      </div>
      <div class="notification">
        Rathen - Form Production
      </div>
    </div>
  </header>
  
  <div class="content content-back">
    <a class="btn btn-back" href="/production/{{$kode}}">
      <i class="icon-arrow-left"></i>
    </a>
  </div>
  <div class="container container-fluid pt-4">
    <ul class="nav nav-tabs text-center" id="myTabs" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="produksi-tab" data-bs-toggle="tab" href="#produksi" role="tab" aria-controls="produksi" aria-selected="true">Produksi</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link " id="finishing-tab" data-bs-toggle="tab" href="#finishing" role="tab" aria-controls="finishing" aria-selected="false">Finishing</a>
      </li>
    </ul>
  </div>

<div class="tab-content">
  <!-- Invoice Tab -->
  <div class="tab-pane fade show active" id="produksi" role="tabpanel" aria-labelledby="produksi-tab">
    <form action="{{route('update_production_desain')}}" method="post" enctype="multipart/form-data">
      @csrf
      <section>
        <div class="container">
          <div class="row">
            <div class="payment__title fw-6 mt-3 align-items-center">
              <i class="icon icon-pencil"></i>Data Produksi
            </div>

            <div class="col-sm-6">
              <div class="mb-3 row align-items-center">
                <div class="col-sm-4">
                  <label for="pola_badan" class="col-form-label">Pola Badan</label>
                </div>
                <div class="col-sm-7">
                  <select name="pola_badan" class="form-select input form-control">
                    <option value="{{ $data->pola_badan }}">{{ $data->pola_badan }}</option>
                    <option value="Normal">Normal</option>
                    <option value="Slim-fit">Slim-fit</option>
                  </select>
                </div>
              </div>  
              <div class="mb-3 row align-items-center">
                <div class="col-sm-4">
                  <label for="pola_lengan" class="col-form-label">Pola Lengan</label>
                </div>
                <div class="col-sm-7">
                  <select name="pola_lengan" class="form-select input form-control">
                    <option value="{{ $data->pola_lengan }}">{{ $data->pola_lengan }}</option>
                    <option value="Normal">Normal</option>
                    <option value="Raglan">Raglan</option>
                  </select>
                </div>
              </div>  
              <div class="mb-3 row align-items-center">
                <div class="col-sm-4">
                  <label for="model_kerah" class="col-form-label">Jenis Kerah</label>
                </div>
                <div class="col-sm-7">
                  <select name="model_kerah" class="form-select input form-control">
                    <option value="{{ $data->model_kerah }}">{{ $data->model_kerah }}</option>
                    <option value="C-1">C-1</option>
                    <option value="C-2">C-2</option>
                    <option value="C-3">C-3</option>
                    <option value="C-4">C-4</option>
                    <option value="C-5">C-5</option>
                    <option value="V-1">V-1</option>
                    <option value="V-2">V-2</option>
                    <option value="V-3">V-3</option>
                    <option value="V-4">V-4</option>
                    <option value="V-5">V-5</option>
                    <option value="V-6">V-6</option>
                    <option value="O-1">O-1</option>
                    <option value="O-2">O-2</option>
                    <option value="O-3">O-3</option>
                    <option value="O-4">O-4</option>
                    <option value="O-5">O-5</option>
                  </select>
                </div>
              </div>  
              <div class="mb-3 row align-items-center">
                <div class="col-sm-4">
                  <label for="bawah_baju" class="col-form-label">Bawah Baju</label>
                </div>
                <div class="col-sm-7">
                  <select name="bawah_baju" class="form-select input form-control">
                    <option value="{{ $data->bawah_baju }}">{{ $data->bawah_baju }}</option>
                    <option value="Normal">Normal</option>
                    <option value="Melengkung">Melengkung</option>
                  </select>
                </div>
              </div>  

            </div>

            <div class="col-sm-6">
              <div class="mb-3 row align-items-center">
                <div class="col-sm-4">
                  <label for="lasercut" class="col-form-label">Lasercut</label>
                </div>
                <div class="col-sm-7">
                  <select name="lasercut" class="form-select input form-control">
                    <option value="{{ $data->lasercut }}">{{ $data->lasercut }}</option>
                    <option value="Ada">Ada</option>
                    <option value="Tidak">Tidak Ada</option>
                  </select>
                </div>
              </div>  
              <div class="mb-3 row align-items-center">
                <div class="col-sm-4">
                  <label for="jenis_logo" class="col-form-label">Jenis Logo</label>
                </div>
                <div class="col-sm-7">
                  <select name="jenis_logo" class="form-select input form-control">
                    <option value="{{ $data->jenis_logo }}">{{ $data->jenis_logo }}</option>
                    <option value="Normal">Normal</option>
                    <option value="3D">3D</option>
                  </select>
                </div>
              </div>  
              <div class="mb-3 row align-items-center">
                <div class="col-sm-4">
                  <label for="bahan_baju" class="col-form-label">Jenis Bahan</label>
                </div>
                <div class="col-sm-7">
                  <select name="bahan_baju" class="form-select input form-control">
                    <option value="{{ $data->bahan_baju }}">{{ $data->bahan_baju }}</option>
                    <option value="AIRWALK">AIRWALK</option>
                    <option value="EMBROSS-STRAW">EMBROSS-STRAW</option>
                    <option value="EMBROSS-TOPO">EMBROSS-TOPO</option>
                    <option value="EMBROSS-MIX">EMBROSS-MIX</option>
                    <option value="ERBINA">ERBINA</option>
                    <option value="MILANO">MILANO</option>
                    <option value="PUMA">PUMA</option>
                    <option value="RATHEN-TECH">RATHEN-TECH</option>
                    <option value="RHABIT">RHABIT</option>
                    <option value="SMASH">SMASH</option>
                    <option value="SULKUL">SULKUL</option>
                    <option value="WAVE">WAVE</option>
                    <option value="VAPORKNIT">VAPORKNIT</option>
                    <option value="MOVING-KNIT">MOVING-KNIT</option>
                  </select>
                </div>
              </div>  
              <div class="mb-3 row align-items-center">
                <div class="col-sm-4">
                  <label for="kaos_kaki" class="col-form-label">Kaos Kaki</label>
                </div>
                <div class="col-sm-7">
                  <select name="kaos_kaki" class="form-select input form-control">
                    <option value="{{ $data->kaos_kaki }}">{{ $data->kaos_kaki }}</option>
                    <option value="Ada">Ada</option>
                    <option value="Tidak">Tidak Ada</option>
                  </select>
                </div>
              </div>  

            </div>
            <div class="col-sm-12">
              <label for="">Note for Form</label>
              <textarea class="input txt" name="note" id="note">{!! $data->note_order !!}</textarea>
            </div>
            
          </div>
          <div class="row mb-4">
            <div class="payment__title fw-6 mt-3 align-items-center">
              <i class="icon icon-picture"></i>Desain Customer
            </div>
          
            <div class="col-sm-6">
              <label for="design_pemain">Desain Pemain</label>
              <img src="/asset/images/content/customerDesign.png" class="w-100" alt="">
            </div>
            <div class="col-sm-6">
              <label for="design_kiper">Desain Kiper</label>
              <img src="/asset/images/content/customerDesign.png" class="w-100" alt="">
            </div>
          </div>
          <div class="row">
            <div class="payment__title fw-6 mt-3 align-items-center">
              <i class="icon icon-picture"></i>Desain Rathen
            </div>
          
            <div class="col-sm-6">
              <label for="design_pemain">Desain Pemain</label>
              <img src="/asset/images/content/rathenDesign.jpg" class="w-100" alt="">
              <div class="my-3 mx-auto form-upload payment__type--cc">
                <i class="icon icon-cloud-upload"></i>Upload
                <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileJersey1" name="djp" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" onchange="updateFileName('fileJersey1', 'statusUpload1')">
              </div>
            </div>
            <div class="col-sm-6">
              <label for="/asset/images/content/rathenDesign.jpg">Desain Kiper</label>
              <img src="/asset/images/content/rathenDesign.jpg" class="w-100" alt="">
              <div class="my-3 mx-auto form-upload payment__type--cc">
                <i class="icon icon-cloud-upload"></i>Upload
                <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileJersey2" name="djk" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" onchange="updateFileName('fileJersey2', 'statusUpload2')">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12">
              <div class="payment__title fw-6">
                <i class="icon icon-docs"></i>Form Data Pesanan
              </div>
              <div class="col-sm-6">
                <div class="row align-items-center">
                  <div class="col-sm-5">
                    <label for="date_ambil" class="col-form-label">Tanggal Pengambilan</label>
                  </div>
                  <div class="col-sm-7">
                    <input type="date" class="form-control" id="date_ambil">
                  </div>
                </div>  
              </div>

              
              <form>
                <div class="form__cc">
                  <div class="row">
                    <div class="table-responsive">
                      <div class="title">
                        <i class="icon icon-info" style="display:contents;"></i> <?php echo isset($data->nama_tim) ? $data->nama_tim : "nama_tim belum ada"; ?> ( $total_pemain stel) diambil ($tanggal_ambil)
                      </div>
                      <div class="accordion mb-3" id="accordionFlushExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                              Action Form Pemain
                            </button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                              <div class="row mb-3 g-2">
                                <div class="col-sm-4">
                                  <div class="btn btn-black px-3" id="importDataBtn" style="font-size:12px">
                                    <i class="icon icon-cloud-upload me-3"></i>Upload File
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="btn btn-black px-3" id="inputDataBtn" style="font-size:12px">
                                    <i class="icon icon-pencil me-3"></i>Input Data
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <a href="{{ route('downloadPdf') }}" class="btn btn-black px-3" style="font-size:12px">
                                    <i class="icon icon-cloud-download me-3"></i>Format Ukuran
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <h6 class="fw-6">Data Pemain</h6>
                      <table class="wp-table w-100">
                        <tr>
                          <th>No</th>
                          <th>Nama Punggung</th>
                          <th>Nomor</th>
                          <th>Ukuran</th>
                          <th>Action</th>
                        </tr>

                        <?php $i = 1; ?>

                        @foreach ($dataStep4 as $row)
                        <tr>
                          <td>{{ $i++; }}</td>
                          <td>{{ $row->namapunggung }}</td>
                          <td>{{ $row->nomor; }}</td>
                          <td>{{ $row->ukuran; }}</td>
                          <td><a href="{{ route('form-4.delete', ['id' => $row->kd_step4]) }}">delete</a></td>

                        </tr>
                        @endforeach

                      </table>

                      <div class="accordion my-3" id="accordionFlushExample2">
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne2" aria-expanded="false" aria-controls="flush-collapseOne2">
                              Action Form Kiper
                            </button>
                          </h2>
                          <div id="flush-collapseOne2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
                            <div class="accordion-body">
                              <div class="row mb-3 g-2">
                                <div class="col-sm-4">
                                  <div class="btn btn-black px-3" id="importDataBtn" style="font-size:12px">
                                    <i class="icon icon-cloud-upload me-3"></i>Upload File
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="btn btn-black px-3" id="inputDataBtn" style="font-size:12px">
                                    <i class="icon icon-pencil me-3"></i>Input Data
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <a href="{{ route('downloadPdf') }}" class="btn btn-black px-3" style="font-size:12px">
                                    <i class="icon icon-cloud-download me-3"></i>Format Ukuran
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <h6 class="fw-6 mt-3">Data Kiper</h6>
                      <table class="wp-table w-100">
                        <tr>
                          <th>No</th>
                          <th>Nama Punggung</th>
                          <th>Nomor</th>
                          <th>Ukuran</th>
                          <th>Action</th>
                        </tr>

                        <?php $i = 1; ?>

                        @foreach ($dataStep4 as $row)
                        <tr>
                          <td>{{ $i++; }}</td>
                          <td>{{ $row->namapunggung }}</td>
                          <td>{{ $row->nomor; }}</td>
                          <td>{{ $row->ukuran; }}</td>
                          <td><a href="{{ route('form-4.delete', ['id' => $row->kd_step4]) }}">delete</a></td>

                        </tr>
                        @endforeach

                      </table>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            
          </div>

        </div>

        <div id="inputDataModal" class="modal pt200">
          <div class="modal-content mw-32">
            <div class="modal-header">
              <h1 class="modal-title fs-5 mx-auto" id="exampleModalLabel">Input Data</h1>
              <span class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></span>
            </div>
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
            <div class="modal-header">
              <h1 class="modal-title fs-5 mx-auto" id="exampleModalLabel">Input File</h1>
              <span class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></span>
            </div>
            <div class="form-modal">
              <h4>Silahkan inputkan file</h4>
              <form action="{{ route('excel.import') }}" id="inputDataForm" method="post" enctype="multipart/form-data">
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
          <div class="actions">
            <button type="submit" class="btn action__submit">Save
              <i class="icon icon-arrow-right-circle"></i>
            </button>
            <!-- <a href="/form/orderStep1" class="backBtn">Go Back to Form Order</a> -->
          </div>
        </div>

      </section>
    </form> 

  </div>
  <div class="tab-pane fade " id="finishing" role="tabpanel" aria-labelledby="finishing-tab">
  
    <form action="" method="post" enctype="multipart/form-data">
      @csrf
      <section>
        <div class="container">
          <div class="row">
            <!-- <div class="payment__title fw-6 mt-3 align-items-center">
              <i class="icon icon-pencil"></i>Data Finishing
            </div> -->
            <h3 class="fw-6 pt-4 text-center"><?php echo isset($data->nama_tim) ? $data->nama_tim : "nama_tim belum ada"; ?> ( $total_pemain stel)</h3>
            <h4 class="pb-4 text-center">Diambil tanggal: $tanggal_ambil</h4>

            <div class="col-sm-4">
              <h6 class="fw-6 text-uppercase">Baju Depan</h6>
              <div class="mb-3 row align-items-center">
                <div class="col-sm-4">
                  <label for="size_chart" class="col-form-label">Size Chart</label>
                </div>
                <div class="col-sm-7">
                  <input class="form-control py-1 px-1" type="text">
                </div>
              </div>  
              <div class="mb-3 row align-items-center">
                <div class="col-sm-4">
                  <label for="t_pundak" class="col-form-label">T-pundak</label>
                </div>
                <div class="col-sm-7">
                  <input class="form-control py-1 px-1" type="text">
                </div>
              </div> 
              <div class="mb-3 row align-items-center">
                <div class="col-sm-4">
                  <label for="apparel" class="col-form-label">Apparel</label>
                </div>
                <div class="col-sm-7">
                  <input class="form-control py-1 px-1" type="text">
                </div>
              </div> 
              <div class="mb-3 row align-items-center">
                <div class="col-sm-4">
                  <label for="logo_tim" class="col-form-label">Logo Tim</label>
                </div>
                <div class="col-sm-7">
                  <input class="form-control py-1 px-1" type="text">
                </div>
              </div> 
              <div class="mb-3 row align-items-center">
                <div class="col-sm-4">
                  <label for="sponsor_dada" class="col-form-label">Sponsor Dada</label>
                </div>
                <div class="col-sm-7">
                  <input class="form-control py-1 px-1" type="text">
                </div>
              </div> 
              <div class="mb-3 row align-items-center">
                <div class="col-sm-4">
                  <label for="warna_depan" class="col-form-label">Warna</label>
                </div>
                <div class="col-sm-7">
                  <input class="form-control py-1 px-1" type="text">
                </div>
              </div> 
              <div class="mb-3 row align-items-center">
                <div class="col-sm-4">
                  <label for="font_depan" class="col-form-label">Font</label>
                </div>
                <div class="col-sm-7">
                  <input class="form-control py-1 px-1" type="text">
                </div>
              </div> 
            </div>

            <div class="col-sm-4">
              <h6 class="fw-6 text-uppercase">Baju Belakang</h6>
              <div class="mb-3 row align-items-center">
                <div class="col-sm-4">
                  <label for="logo_rKecil" class="col-form-label">Logo R kecil</label>
                </div>
                <div class="col-sm-7">
                  <input class="form-control py-1 px-1" type="text">
                </div>
              </div>  
              <div class="mb-3 row align-items-center">
                <div class="col-sm-4">
                  <label for="nameset" class="col-form-label">Nameset</label>
                </div>
                <div class="col-sm-7">
                  <input class="form-control py-1 px-1" type="text">
                </div>
              </div> 
              <div class="mb-3 row align-items-center">
                <div class="col-sm-4">
                  <label for="poliflek" class="col-form-label">Poliflek</label>
                </div>
                <div class="col-sm-7">
                  <input class="form-control py-1 px-1" type="text">
                </div>
              </div> 
              <div class="mb-3 row align-items-center">
                <div class="col-sm-4">
                  <label for="nama_belakang" class="col-form-label">Nama</label>
                </div>
                <div class="col-sm-7">
                  <input class="form-control py-1 px-1" type="text">
                </div>
              </div> 
              <div class="mb-3 row align-items-center">
                <div class="col-sm-4">
                  <label for="nomor_belakang" class="col-form-label">Nomor</label>
                </div>
                <div class="col-sm-7">
                  <input class="form-control py-1 px-1" type="text">
                </div>
              </div> 
              <div class="mb-3 row align-items-center">
                <div class="col-sm-4">
                  <label for="sponsor_belakang" class="col-form-label">Sponsor Belakang</label>
                </div>
                <div class="col-sm-7">
                  <input class="form-control py-1 px-1" type="text">
                </div>
              </div> 
              <div class="mb-3 row align-items-center">
                <div class="col-sm-4">
                  <label for="warna_belakang" class="col-form-label">Warna</label>
                </div>
                <div class="col-sm-7">
                  <input class="form-control py-1 px-1" type="text">
                </div>
              </div> 
              <div class="mb-3 row align-items-center">
                <div class="col-sm-4">
                  <label for="font_belakang" class="col-form-label">Font</label>
                </div>
                <div class="col-sm-7">
                  <input class="form-control py-1 px-1" type="text">
                </div>
              </div> 
            </div>

            <div class="col-sm-4">
              <div class="mb-3 row align-items-center">
                <div class="col-sm-4">
                  <label for="celana" class="fw-6 col-form-label text-uppercase">Celana</label>
                </div>
                <div class="col-sm-7">
                  <input class="form-control py-1 px-1" type="text">
                </div>
              </div>  
              <div class="mb-3 row align-items-center">
                <div class="col-sm-4">
                  <label for="nomor_celana" class="col-form-label">Nomor</label>
                </div>
                <div class="col-sm-7">
                  <input class="form-control py-1 px-1" type="text">
                </div>
              </div> 
              <div class="mb-3 row align-items-center">
                <div class="col-sm-4">
                  <label for="logo_rCelana" class="col-form-label">Logo R</label>
                </div>
                <div class="col-sm-7">
                  <input class="form-control py-1 px-1" type="text">
                </div>
              </div> 
              <div class="mb-3 row align-items-center">
                <div class="col-sm-4">
                  <label for="nama_tim" class="col-form-label">Nama Tim</label>
                </div>
                <div class="col-sm-7">
                  <input class="form-control py-1 px-1" type="text">
                </div>
              </div> 
              <div class="mb-3 row align-items-center">
                <div class="col-sm-4">
                  <label for="font_celana" class="col-form-label">Font</label>
                </div>
                <div class="col-sm-7">
                  <input class="form-control py-1 px-1" type="text">
                </div>
              </div>
              <div class="mb-3 row align-items-center">
                <div class="col-sm-4">
                  <label for="warna_celana" class="col-form-label">Warna</label>
                </div>
                <div class="col-sm-7">
                  <input class="form-control py-1 px-1" type="text">
                </div>
              </div>
              <h6 class="fw-6 text-uppercase">Kaoskaki</h6>
              <div class="mb-3 row align-items-center">
                <div class="col-sm-4">
                  <label for="kaoskaki_pemain" class="col-form-label">Pemain</label>
                </div>
                <div class="col-sm-7">
                  <input class="form-control py-1 px-1" type="text">
                </div>
              </div>
              <div class="mb-3 row align-items-center">
                <div class="col-sm-4">
                  <label for="kaoskaki_kiper" class="col-form-label">Kiper</label>
                </div>
                <div class="col-sm-7">
                  <input class="form-control py-1 px-1" type="text">
                </div>
              </div>
            </div>  
          </div>

          <div class="row">
            <div class="payment__title fw-6 mt-3 align-items-center">
              <i class="icon icon-picture"></i>Desain Rathen
            </div>
          
            <div class="col-sm-6">
              <label for="design_pemain" class="mb-3">Desain Pemain</label>
              <img src="/asset/images/content/rathenDesign.jpg" class="w-100" alt="">
              
            </div>
            <div class="col-sm-6">
              <label for="design_kiper" class="mb-3">Desain Kiper</label>
              <img src="/asset/images/content/rathenDesign.jpg" class="w-100" alt="">
              
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <label for="note_finishing" class="fw-6 my-3">Catatan Tambahan</label>
              <textarea class="input txt" name="note_finishing" id="note_finishing"></textarea>
            </div>
          </div>

          <div class="row">
            <div class="payment__title fw-6 mt-3 align-items-center">
              <i class="icon icon-picture"></i>Logo
            </div>
          
            <div class="col-sm-4">
              <label for="logo_tim_note" class="mb-3">Logo Tim</label>
              <img src="/asset/images/content/rathenDesign.jpg" class="w-100" alt="">
              <div class="my-3 mx-auto form-upload payment__type--cc">
                <i class="icon icon-cloud-upload"></i>Upload
                <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileLogo1" name="djp" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" onchange="updateFileName('fileLogo1', 'statusUpload1')">
              </div>
              <input class="form-control py-1 px-1" type="text">

              <label for="sponsor_belakang_note" class="my-3">Sponsor Belakang</label>
              <img src="/asset/images/content/rathenDesign.jpg" class="w-100" alt="">
              <div class="my-3 mx-auto form-upload payment__type--cc">
                <i class="icon icon-cloud-upload"></i>Upload
                <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileLogo2" name="djp" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" onchange="updateFileName('fileLogo2', 'statusUpload1')">
              </div>
              <input class="form-control py-1 px-1" type="text">
              
            </div>
            <div class="col-sm-4">
              <label for="sponsor_dada_note" class="mb-3">Sponsor Dada</label>
              <img src="/asset/images/content/rathenDesign.jpg" class="w-100" alt="">
              <div class="my-3 mx-auto form-upload payment__type--cc">
                <i class="icon icon-cloud-upload"></i>Upload
                <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileLogo3" name="djp" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" onchange="updateFileName('fileLogo3', 'statusUpload1')">
              </div>
              <input class="form-control py-1 px-1" type="text">

              <label for="font_nameset_note" class="my-3">Font Nameset</label>
              <img src="/asset/images/content/rathenDesign.jpg" class="w-100" alt="">
              <div class="my-3 mx-auto form-upload payment__type--cc">
                <i class="icon icon-cloud-upload"></i>Upload
                <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileLogo4" name="djp" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" onchange="updateFileName('fileLogo4', 'statusUpload1')">
              </div>
              <input class="form-control py-1 px-1" type="text">
              
            </div>
            <div class="col-sm-4">
              <label for="logo_lengan_note" class="mb-3">Logo Lengan</label>
              <img src="/asset/images/content/rathenDesign.jpg" class="w-100" alt="">
              <div class="my-3 mx-auto form-upload payment__type--cc">
                <i class="icon icon-cloud-upload"></i>Upload
                <input type="file" accept=".cdr, .ai, .pdf, .jpg" id="fileLogo5" name="djp" class="fileInput form-control fw-lighter hidden" placeholder="Upload File" onchange="updateFileName('fileLogo5', 'statusUpload1')">
              </div>
              <input class="form-control py-1 px-1" type="text">
              
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12">
              <div class="payment__title fw-6">
                <i class="icon icon-docs"></i>Form Data Pesanan {{--Tampilan Formnya saja--}}
              </div>
              
              <form>
                <div class="form__cc">
                  <div class="row">
                    <div class="table-responsive">
                      <div class="title">
                        <i class="icon icon-info" style="display:contents;"></i> <?php echo isset($data->nama_tim) ? $data->nama_tim : "nama_tim belum ada"; ?> ( $total_pemain stel) diambil ($tanggal_ambil)
                      </div>
                      <h6 class="fw-6">Data Pemain</h6>
                      <table class="wp-table w-100">
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
                      <h6 class="fw-6 mt-3">Data Kiper</h6>
                      <table class="wp-table w-100">
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
            
          </div>

        </div>

        <div id="inputDataModal" class="modal pt200">
          <div class="modal-content mw-32">
            <div class="modal-header">
              <h1 class="modal-title fs-5 mx-auto" id="exampleModalLabel">Input Data</h1>
              <span class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></span>
            </div>
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
            <div class="modal-header">
              <h1 class="modal-title fs-5 mx-auto" id="exampleModalLabel">Input File</h1>
              <span class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></span>
            </div>
            <div class="form-modal">
              <h4>Silahkan inputkan file</h4>
              <form action="{{ route('excel.import') }}" id="inputDataForm" method="post" enctype="multipart/form-data">
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
          <div class="actions">
            <button type="submit" class="btn action__submit">Save
              <i class="icon icon-arrow-right-circle"></i>
            </button>
            <!-- <a href="/form/orderStep1" class="backBtn">Go Back to Form Order</a> -->
          </div>
        </div>

      </section>
    </form>
  </div>

  <!-- partial -->

  <script>
     ClassicEditor
        .create( document.querySelector( '#note' ))
        .catch( error => {
            console.error( error );
        } );
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
      var span = document.getElementsByClassName('btn-close')[0];
      var import_modal = document.getElementById('importDataModal');
      var import_btn = document.getElementById('importDataBtn');
      var import_span = document.getElementsByClassName('btn-close')[1];
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