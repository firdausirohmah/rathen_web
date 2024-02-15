@extends('layout.admin')
@section('content')

<div class="container p-4">
  <div class="row mt-2">
    <div class="col-lg-6">
      <div class="mb-4 w-50 mx-auto">
        <div class="rounded-4 bg-dark py-2 text-center text-light">
          <!-- Omset berjalan -->
          <h3 class="m-0">Omset</h3>
          <h2 class="m-0">Rp 10.000.000</h1>
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
      <div class="">
        <label for="DateFinance" class="me-3 form-label">Monthly:</label>
        <input type="date" id="DateFinance" class="form-control-sm">

      </div>
      <div class="ms-auto">
        <a href="" class="form-label text-dark text-center me-3 w-100 flex-wrap">
          Edit Data<i class="ms-2 fas fa-edit"></i>
        </a>

      </div>
    </div>
    
    <div class="col-lg-12 mb-4">
      <div class="card z-index-2">
        <div class="card-header d-flex">
          <div class="text-center">
            <p>12 Order<i class="ms-2 fa fa-shopping-bag"></i></p>
            <span>Rp 18.000.000</span>
          </div>
          <div class="ms-auto d-flex w-25">
            <a href="" class="text-dark text-decoration-none text-center me-3 w-100 flex-wrap">
              <p>Income<i class="ms-2 fas fa-hand-holding-usd"></i></p>
              <span>Rp 18.000.000</span>
            </a>
            
            <a href="" class="text-dark text-decoration-none text-center w-100 flex-wrap">
              <p>Expenses<i class="ms-2 fas fa-sign-out-alt"></i></p>
              <span>Rp 8.000.000</span>
            </a>
            <!-- <input type="text" placeholder="INCOME" class="form-control-sm"> -->
            <!-- <input type="text" placeholder="EXPENSE" class="form-control-sm"> -->
          </div>
          
          
        </div>
        <div class="card-body p-3">
          <div class="ms-auto d-flex w-100">
            <a href="" class="text-dark text-decoration-none text-center me-3 w-100 flex-wrap">
              <p>Saldo<i class="ms-2 fas fa-wallet"></i></p>
              <span>Rp 18.000.000</span>
            </a>
            
            <a href="" class="text-dark text-decoration-none text-center w-100 flex-wrap">
              <p>Gross Profit<i class="ms-2 fas fa-sign-out-alt"></i></p>
              <span>55%</span>
            </a>
            
            <a href="" class="text-dark text-decoration-none text-center w-100 flex-wrap">
              <p>Net Profit<i class="ms-2 fas fa-sign-out-alt"></i></p>
              <span>55%</span>
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
            <h1>0.65</h1>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>       


<script src="asset/admin/js/plugins/chartjs.min.js"></script>

<script>
  const xValues = [100,200,300,400,500,600,700,800,900,1000];
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
        data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
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