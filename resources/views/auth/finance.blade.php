@extends('layout.admin')
@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="{{asset('asset/css/tables.css')}}">
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>

<script src="{{asset('asset/js/tables.js')}}"></script>

<div class="container p-4">
  <ul class="nav nav-tabs" id="myTabs" role="tablist">
    <li class="nav-item" role="presentation">
      <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="true">Dashboard</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="dataFinance-tab" data-bs-toggle="tab" href="#dataFinance" role="tab" aria-controls="dataFinance" aria-selected="false">Data</a>
    </li>
  </ul>

  <!-- <div class="row mt-2"> -->


  <div class="tab-content">
    <!-- dashboard Tab -->
    <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">

      <div class="row mt-2">
        <div class="col-lg-6">
          <div class="mb-4 w-50 mx-auto">
            <div class="rounded-4 bg-dark py-2 text-center text-light">
              <!-- Omset berjalan -->
              <h3 class="m-0">Omset</h3>
              <h2 class="m-0">Rp {{number_format($omset,0,',','.')}}</h1>
            </div>

          </div>
        </div>
        <div class="col-lg-6">
          <div class="mb-5 w-50 mx-auto">
            <a href="" class="text-decoration-none">
              <div class="rounded-4 bg-dark py-2 text-center text-light">
                <!-- Target OMSET -->
                <!-- ADMIN BISA INPUT-->
                <h3 class="m-0">Target</h3>
                <h2 class="m-0">Rp 20.000.000</h1>
                <input type="hidden">

              </div>
            </a>

          </div>
        </div>
        
        
        <div class="col-lg-12 mb-3 d-flex">
          <form action="{{route('finance.update.chart')}}" method="post">
            @csrf
            <div class="ms-auto">
              <label for="DateFinance" class="me-3 form-label">Monthly:</label>
              <input type="month" id="DateFinance" name="date" class="form-control-sm">
            </div>
            <div class="ms-auto">
              <button type="submit" class="form-label text-dark text-center me-3 w-100 flex-wrap" style="border: none; background: none;">
                Update Chart<i class="ms-2 fas fa-edit"></i>
              </button>
      
            </div>
          </form>
        </div>
        
        <div class="col-lg-12 mb-4">
          <div class="card z-index-2">
            <div class="card-header d-flex">
              <div class="text-center">
                <p>{{$order}} Order<i class="ms-2 fa fa-shopping-bag"></i></p>
                <span>Rp {{number_format($omset,0,',','.')}}</span>
              </div>
              <div class="ms-auto d-flex w-25">
                <a href="" class="text-dark text-decoration-none text-center me-3 w-100 flex-wrap">
                  <p>Income<i class="ms-2 fas fa-hand-holding-usd"></i></p>
                  <span>Rp {{number_format($omset,0,',','.')}}</span>
                </a>
                
                <a href="" class="text-dark text-decoration-none text-center w-100 flex-wrap">
                  <p>Expenses<i class="ms-2 fas fa-sign-out-alt"></i></p>
                  <span>Rp {{number_format($expense,0,',','.')}}</span>
                </a>
                <!-- <input type="text" placeholder="INCOME" class="form-control-sm"> -->
                <!-- <input type="text" placeholder="EXPENSE" class="form-control-sm"> -->
              </div>
              
              
            </div>
            <div class="card-body p-3">
              <div class="ms-auto d-flex w-100">
                <a href="" class="text-dark text-decoration-none text-center me-3 w-100 flex-wrap">
                  <p>Saldo<i class="ms-2 fas fa-wallet"></i></p>
                  <span>Rp {{number_format($saldo,0,',','.')}}</span>
                </a>
                
                <a href="" class="text-dark text-decoration-none text-center w-100 flex-wrap">
                  <p>Gross Profit<i class="ms-2 fas fa-sign-out-alt"></i></p>
                  <span>{{$gross_profit}}%</span>
                </a>
                
                <a href="" class="text-dark text-decoration-none text-center w-100 flex-wrap">
                  <p>Net Profit<i class="ms-2 fas fa-sign-out-alt"></i></p>
                  <span>{{$net_profit}}%</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 mb-4">
          <div class="card z-index-2">
            <div class="card-header pb-0">
              <h6>Grafik Income</h6>
              
            </div>
            <div class="card-body p-3">
              <div class="chart">
                <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 mb-4">
          <div class="card z-index-2">
            <div class="card-header pb-0 text-center">
              <h6>Current Ratio</h6>
              
            </div>
            <div class="card-body p-3">
              <div class="text-center">
                <h1>{{$current_ratio}}</h1>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <!-- dataFinance Tab -->
    <div class="tab-pane fade" id="dataFinance" role="tabpanel" aria-labelledby="dataFinance-tab">
      <div class="card card-tab mb-4">
        <div class="card-header pb-0 d-flex">
          <h6>Data Finance</h6>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary ms-auto m-2S" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Input Data
          </button>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <form action="{{route('finance.add')}}" method="post">
                @csrf
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">FINANCIAL - RATHEN</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" name="date" id="date" class="form-control">
                      </div>
                      <!--new-->
                      <div class="form-group">
                        <label for="nominal">Transaksi</label>
                        <input type="text" name="transaksi" id="transaksi" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="nominal">Nilai (Rp)</label>
                        <input type="number" name="nominal" id="nominal" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="type">Jenis Transaksi</label>
                        <select name="type" id="type" class="form-control">
                          <option value="">Select Here</option>
                          <option value="debit">Uang Masuk</option>
                          <option value="credit">Uang Keluar</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="kategori_transaksi">Kategori Transaksi</label>
                        <select name="kategori_transaksi" id="kategori_transaksi" class="form-control">
                          <option value="">Select Here</option>
                          <option value="pembayaran_dp">Pembayaran DP</option>
                          <option value="pembayaran_pelunasan">Pembayaran Pelunasan</option>
                          <option value="belanja_bahan">Belanja bahan</option>
                          <option value="belanja_poliflex">Belanja poliflex</option>
                          <option value="belanja_logo">Belanja logo</option>
                          <option value="bayar_jahit">Bayar Jahit</option>
                          <option value="bayar_sublim">Bayar sublim</option>
                          <option value="bayar_lasercut">Bayar lasercut</option>
                          <option value="aksesoris">Aksesoris</option>
                          <option value="operasional">Operasional</option>
                          <option value="gopay">Gopay</option>
                          <option value="internet">Internet</option>
                          <option value="listrik">Listrik</option>
                          <option value="air">Air</option>
                          <option value="entertainment">Entertainment</option>
                          <option value="maintenance">Maintenance</option>
                          <option value="ads">Ads (Iklan)</option>
                          <option value="tata_usaha">Tata usaha (iuran keamanan dan sampah)</option>
                          <option value="cicilan_alat">Cicilan Pembelian Alat</option>
                          <option value="salary">Salary</option>
                          <option value="fee_marketing">Fee Marketing</option>
                          <option value="laba_ditahan">Laba di tahan</option>
                          <option value="dividen">Dividen</option>
                          <option value="pengeluaran_lain">Pengeluaran Tak terduga</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="status_uang">Status Uang</label>
                        <select name="status_uang" id="status_uang" class="form-control">
                          <option value="">Select Here</option>
                          <option value="lunas">Lunas</option>
                          <option value="hutang">Hutang</option>
                          <option value="piutang">Piutag</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="note">Keterangan</label>
                        <textarea name="note" id="note" class="form-control"></textarea>
                      </div>
                      
                      <!--<div class="form-group">-->
                      <!--  <label for="status">Status</label>-->
                      <!--  <select name="status" id="status" class="form-control">-->
                      <!--    <option value="">Select Here</option>-->
                      <!--    <option value="order">Order</option>-->
                      <!--    <option value="belanja">Belanja</option>-->
                      <!--    <option value="hr">HR</option>-->
                      <!--    <option value="ads">Ads</option>-->
                      <!--  </select>-->
                      <!--</div>-->
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0 display" id="view-finance" style="width:100%">
              <thead>
                <tr>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No
                  </th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status
                  </th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Type
                  </th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nominal</th>
                  <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">Note</th>
                  <!-- u. kategori dan kualitas -->
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created at
                  </th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action
                  </th>
                  <!-- <th class="text-secondary opacity-7"></th> -->
                </tr>
              </thead>
              <tbody>
                @php $index = 1 @endphp
                @foreach ($financeData as $item)
                <tr class="text-center">
                  <td>
                    {{ $index++ }}
                  </td>
                  <td>
                    {{ $item->status }}
                  </td>
                  <td>
                    {{ $item->type }}
                  </td>
                  <td>
                    Rp {{number_format($item->nominal,0,',','.')}}
                  </td>
                  <td>
                    {{ $item->note }}
                  </td>
                  <td class="text-center text-sm"> {{date("d-m-Y", strtotime($item->created_at))}}
                    
                  </td>
                  <td class="text-center text-sm">
                    
                  </td>
                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>
      
    </div>

  </div>
</div>       


<script src="asset/admin/js/plugins/chartjs.min.js"></script>

<script>
  const xValues = <?php echo json_encode($data_bulan); ?>;
  var ctx1 = document.getElementById("chart-line").getContext("2d");
  var chart1;

  // Initial data
  var initialData1 = {
    labels: xValues,
    datasets: [
      {
        label: "income",
        tension: 0.4,
        borderWidth: 0,
        pointRadius: 0,
        borderColor: "#343a40",
        borderWidth: 3,
        backgroundColor: '#495057',
        fill: true,
        data: <?php echo json_encode($data); ?>,
        maxBarThickness: 6
      }
    ],
  };

  // Create initial chart
  chart1 = new Chart(ctx1, {
    type: "line",
    data: initialData1,
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            padding: 10,
            color: '#b2b9bf',
            font: {
              size: 11,
              family: "Open Sans",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            color: '#b2b9bf',
            padding: 20,
            font: {
              size: 11,
              family: "Open Sans",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
      },
    },
  });
</script>
    @endsection