@extends('layout.admin')
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
