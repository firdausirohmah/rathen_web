@extends('layout.admin')
@section('content')   
<div class="container">
  <div class="row mt-4">
    <div class="col-lg-6 mb-4">
      <div class="card z-index-2">
        <div class="card-header pb-0">
          <h6>Grafik Income Penjualan</h6>
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
    <div class="col-lg-6 mb-4">
      <div class="card z-index-2">
        <div class="card-header pb-0">
          <h6>Grafik Penjualan Product</h6>
          <p class="text-sm">
            {{-- <i class="fa fa-arrow-up text-success"></i> --}}
            {{-- <span class="font-weight-bold">4% more</span> in 2021 --}}
          </p>
        </div>
        <div class="card-body p-3">
          <div class="chart">
            <canvas id="metric-product" class="chart-canvas" height="300"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 mb-4">
      <div class="card z-index-2">
        <div class="card-header pb-0">
          <h6>Grafik Pembayaran Customer</h6>
          <p class="text-sm">
            {{-- <i class="fa fa-arrow-up text-success"></i> --}}
            {{-- <span class="font-weight-bold">4% more</span> in 2021 --}}
          </p>
        </div>
        <div class="card-body p-3">
          <div class="chart">
            <canvas id="metric-billing" class="chart-canvas" height="300"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 mb-4">
      <div class="card z-index-2">
        <div class="card-header pb-0">
          <h6>Grafik Pembayaran Customer</h6>
          <p class="text-sm">
            {{-- <i class="fa fa-arrow-up text-success"></i> --}}
            {{-- <span class="font-weight-bold">4% more</span> in 2021 --}}
          </p>
        </div>
        <div class="card-body p-3">
          <div class="chart">
            <canvas id="metric-region" class="chart-canvas" height="300"></canvas>
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
          [
              @foreach ($data as $item)
                  @if ($item->harga !== null)
                      {{ $item->harga.',' }}
                  @else
                      0,
                  @endif
              @endforeach
          ],
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

<script>
  var ctx = document.getElementById("metric-product").getContext("2d");

  var gradientStroke = ctx.createLinearGradient(0, 230, 0, 50);
  gradientStroke.addColorStop(1, 'rgba(203, 12, 159, 0.2)');
  gradientStroke.addColorStop(0.2, 'rgba(72, 72, 176, 0.0)');
  gradientStroke.addColorStop(0, 'rgba(203, 12, 159, 0)'); // Purple colors

  var data = {!! json_encode($uniqueCustomers) !!}; // Assuming $uniqueCustomers is an array of customer data

  new Chart(ctx, {
    type: "line",
    data: {
      labels: [
        @foreach ($data as $item)
          "{{ $item->created_at }}",
        @endforeach
      ],
      datasets: [
        @foreach ($uniqueCustomers as $customer)
          {
            label: "{{ $customer['nama_pemesanan'] }}",
            tension: 0.4,
            borderWidth: 3,
            pointRadius: 0,
            borderColor: getRandomColor(),
            backgroundColor: gradientStroke,
            fill: true,
            data: [
              @foreach ($data as $item)
                @php
                  $itemNamaTim = strtolower(str_replace(' ', '', $item->nama_pemesanan));
                  $customerNamaTim = strtolower(str_replace(' ', '', $customer['nama_pemesanan']));
                @endphp
                @if ($itemNamaTim === $customerNamaTim)
                  {{ $item->jumlah_pemesanan.',' }}
                @else
                  0,
                @endif
              @endforeach
            ],
            maxBarThickness: 6,
          },
        @endforeach
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: true,
        },
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
            borderDash: [5, 5],
          },
          ticks: {
            display: true,
            padding: 10,
            color: '#b2b9bf',
            font: {
              size: 11,
              family: 'Open Sans',
              style: 'normal',
              lineHeight: 2,
            },
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: true,
            borderDash: [5, 5],
          },
          ticks: {
            display: true,
            color: '#b2b9bf',
            padding: 20,
            font: {
              size: 11,
              family: 'Open Sans',
              style: 'normal',
              lineHeight: 2,
            },
          },
        },
      },
    },
  });

  function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
      color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
  }
</script>

<script>
  var ctx = document.getElementById("metric-billing").getContext("2d");

  var gradientStroke = ctx.createLinearGradient(0, 230, 0, 50);
  gradientStroke.addColorStop(1, 'rgba(203, 12, 159, 0.2)');
  gradientStroke.addColorStop(0.2, 'rgba(72, 72, 176, 0.0)');
  gradientStroke.addColorStop(0, 'rgba(203, 12, 159, 0)'); // Purple colors

  var data = {!! json_encode($uniqueCustomers) !!}; // Assuming $uniqueCustomers is an array of customer data

  new Chart(ctx, {
    type: "line",
    data: {
      labels: [
        @foreach ($data as $item)
          "{{ $item->created_at }}",
        @endforeach
      ],
      datasets: [
        @foreach ($uniqueCustomers as $customer)
          {
            label: "{{ $customer['nama_pemesanan'] }}",
            tension: 0.4,
            borderWidth: 3,
            pointRadius: 0,
            borderColor: getRandomColor(),
            backgroundColor: gradientStroke,
            fill: true,
            data: [
              @foreach ($data as $item)
                @php
                  $itemNamaTim = strtolower(str_replace(' ', '', $item->nama_pemesanan));
                  $customerNamaTim = strtolower(str_replace(' ', '', $customer['nama_pemesanan']));
                @endphp
                @if ($itemNamaTim === $customerNamaTim)
                  {{ $item->harga.',' }}
                @else
                  0,
                @endif
              @endforeach
            ],
            maxBarThickness: 6,
          },
        @endforeach
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: true,
        },
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
            borderDash: [5, 5],
          },
          ticks: {
            display: true,
            padding: 10,
            color: '#b2b9bf',
            font: {
              size: 11,
              family: 'Open Sans',
              style: 'normal',
              lineHeight: 2,
            },
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: true,
            borderDash: [5, 5],
          },
          ticks: {
            display: true,
            color: '#b2b9bf',
            padding: 20,
            font: {
              size: 11,
              family: 'Open Sans',
              style: 'normal',
              lineHeight: 2,
            },
          },
        },
      },
    },
  });

  function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
      color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
  }
</script>

<script>
  var ctx = document.getElementById("metric-region").getContext("2d");

  var gradientStroke = ctx.createLinearGradient(0, 230, 0, 50);
  gradientStroke.addColorStop(1, 'rgba(203, 12, 159, 0.2)');
  gradientStroke.addColorStop(0.2, 'rgba(72, 72, 176, 0.0)');
  gradientStroke.addColorStop(0, 'rgba(203, 12, 159, 0)'); // Purple colors

  var data = {!! json_encode($uniqueDom) !!}; // Assuming $uniqueCustomers is an array of customer data

  new Chart(ctx, {
    type: "line",
    data: {
      labels: [
        @foreach ($data as $item)
          "{{ $item->created_at }}",
        @endforeach
      ],
      datasets: [
        @foreach ($uniqueDom as $customer)
          {
            label: "{{ $customer['domisili'] }}",
            tension: 0.4,
            borderWidth: 3,
            pointRadius: 0,
            borderColor: getRandomColor(),
            backgroundColor: gradientStroke,
            fill: true,
            data: [
              @foreach ($data as $item)
                @php
                  $itemNamaTim = strtolower(str_replace(' ', '', $item->domisili));
                  $customerNamaTim = strtolower(str_replace(' ', '', $customer['domisili']));
                @endphp
                @if ($itemNamaTim === $customerNamaTim)
                  {{ $item->jumlah_pemesanan.',' }}
                @else
                  0,
                @endif
              @endforeach
            ],
            maxBarThickness: 6,
          },
        @endforeach
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: true,
        },
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
            borderDash: [5, 5],
          },
          ticks: {
            display: true,
            padding: 10,
            color: '#b2b9bf',
            font: {
              size: 11,
              family: 'Open Sans',
              style: 'normal',
              lineHeight: 2,
            },
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: true,
            borderDash: [5, 5],
          },
          ticks: {
            display: true,
            color: '#b2b9bf',
            padding: 20,
            font: {
              size: 11,
              family: 'Open Sans',
              style: 'normal',
              lineHeight: 2,
            },
          },
        },
      },
    },
  });

  function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
      color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
  }
</script>

@endsection
