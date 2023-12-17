@extends('layout.admin')
<<<<<<< HEAD
@section('content')
   <a href="{{ route('downloadPdf') }}"><button>PDF</button></a>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Money</p>
                    <h5 class="font-weight-bolder mb-0">
                      $53,000
                      <span class="text-success text-sm font-weight-bolder">+55%</span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
=======
@section('content')   
<div class="container">
  <div class="row mt-4">
    <div class="col-lg-12">
      <div class="card z-index-2">
        <div class="card-header pb-0">
          <h6>Grafik Penjualan</h6>
          <p class="text-sm">
            {{-- <i class="fa fa-arrow-up text-success"></i> --}}
            {{-- <span class="font-weight-bold">4% more</span> in 2021 --}}
          </p>
>>>>>>> a43113f02e3fe058e277cc31ea3fcd43941308db
        </div>
        <div class="card-body p-3">
          <div class="chart">
            <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 

<script src="asset/admin/js/plugins/chartjs.min.js"></script>

<script>
  
  var ctx2 = document.getElementById("chart-line").getContext("2d");

  var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

  gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
  gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
  gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

  var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

  gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
  gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
  gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

  new Chart(ctx2, {
    type: "line",
    data: {
      // labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      // labels: 
      
      //   {{ '[' }}
      //     @foreach ($data as $date)
      //         {{ '"'.$date->created_at.'"'.',' }}
      //     @endforeach
      //     {{ ']' }}
      //   ,
      labels: 
[
    @foreach ($data as $date)
        "{{ $date->created_at }}",
    @endforeach
],

      datasets: [
        {
          label: "income",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#cb0c9f",
          borderWidth: 3,
          backgroundColor: gradientStroke1,
          fill: true,
          // data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          data: 
          {{ '[' }}
          @foreach ($data as $item)
              {{ $item->harga.',' }}
          @endforeach
          {{ ']' }}
          ,
          maxBarThickness: 6

        }
        // ,
        // {
        //   label: "Websites",
        //   tension: 0.4,
        //   borderWidth: 0,
        //   pointRadius: 0,
        //   borderColor: "#3A416F",
        //   borderWidth: 3,
        //   backgroundColor: gradientStroke2,
        //   fill: true,
        //   data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
        //   maxBarThickness: 6
        // },
      ],
    },
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
