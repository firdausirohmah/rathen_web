@extends('layout.admin')
@section('content')



<div class="container p-4">
  <div class="row mt-2">
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary m-2S" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="{{route('finance.add')}}" method="post">
      @csrf
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         <div class="form-group">
          <label for="date">Date</label>
          <input type="date" name="date" id="date" class="form-control">
         </div>
         <div class="form-group">
          <label for="type">Type</label>
          <select name="type" id="type" class="form-control">
            <option value="">Select Here</option>
            <option value="debit">Debit</option>
            <option value="credit">Credit</option>
          </select>
         </div>
         <div class="form-group">
          <label for="status">Status</label>
          <select name="status" id="status" class="form-control">
            <option value="">Select Here</option>
            <option value="order">Order</option>
            <option value="belanja">Belanja</option>
            <option value="hr">HR</option>
            <option value="ads">Ads</option>
          </select>
         </div>
         <div class="form-group">
          <label for="note">Details</label>
          <textarea name="note" id="note" class="form-control"></textarea>
         </div>
         <div class="form-group">
          <label for="nominal">Nominal</label>
          <input type="number" name="nominal" id="nominal" class="form-control">
         </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </form>
  </div>
</div>
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