@extends('layout.admin')
@section('content')   
<div class="container">
  <div class="row mt-4">
    <div class="col-lg-12">
      <div class="mb-3">
        <div class="d-flex">
          <label for="startDatePicker" class="me-1 form-label">Start Date:</label>
          <input type="date" id="startDatePicker" class="form-control-sm">

          <label for="endDatePicker" class="me-1 ms-2 form-label">End Date:</label>
          <input type="date" id="endDatePicker" class="form-control-sm">
        </div>

        <button class="btn-sm btn-primary mt-2" onclick="updateChart()">Update Chart</button>

      </div>
    </div>
    <div class="col-lg-6 mb-4">
      <div class="card z-index-2">
        <div class="card-header pb-0">
          <h6>Grafik Income Penjualan</h6>
          
          
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
          <h6>Grafik Geografi Customer</h6>
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
  var ctx1 = document.getElementById("chart-line").getContext("2d");
  var chart1;

  // Initial data
  var initialData1 = {
    labels: [
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
        backgroundColor: 'rgba(203,12,159,0.2)',
        fill: true,
        data: [
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

  // start metric-product
  var ctx2 = document.getElementById("metric-product").getContext("2d");

  var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);
  gradientStroke2.addColorStop(1, 'rgba(203, 12, 159, 0.2)');
  gradientStroke2.addColorStop(0.2, 'rgba(72, 72, 176, 0.0)');
  gradientStroke2.addColorStop(0, 'rgba(203, 12, 159, 0)'); // Purple colors

  var data = {!! json_encode($uniqueCustomers) !!}; // Assuming $uniqueCustomers is an array of customer data

  chart2 = new Chart(ctx2, {
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
            label: "{{ $customer['nama_tim'] }}",
            tension: 0.4,
            borderWidth: 3,
            pointRadius: 0,
            borderColor: getRandomColor(),
            backgroundColor: gradientStroke2,
            fill: true,
            data: [
              @foreach ($data as $item)
                @php
                  $itemNamaTim = strtolower(str_replace(' ', '', $item->nama_tim));
                  $customerNamaTim = strtolower(str_replace(' ', '', $customer['nama_tim']));
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
  // end chart2

  // start metric-billing
  var ctx3 = document.getElementById("metric-billing").getContext("2d");

  var gradientStroke3 = ctx3.createLinearGradient(0, 230, 0, 50);
  gradientStroke3.addColorStop(1, 'rgba(203, 12, 159, 0.2)');
  gradientStroke3.addColorStop(0.2, 'rgba(72, 72, 176, 0.0)');
  gradientStroke3.addColorStop(0, 'rgba(203, 12, 159, 0)'); // Purple colors

  var data = {!! json_encode($uniqueCustomers) !!}; // Assuming $uniqueCustomers is an array of customer data

  chart3 = new Chart(ctx3, {
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
            label: "{{ $customer['nama_tim'] }}",
            tension: 0.4,
            borderWidth: 3,
            pointRadius: 0,
            borderColor: getRandomColor(),
            backgroundColor: gradientStroke3,
            fill: true,
            data: [
              @foreach ($data as $item)
                @php
                  $itemNamaTim = strtolower(str_replace(' ', '', $item->nama_tim));
                  $customerNamaTim = strtolower(str_replace(' ', '', $customer['nama_tim']));
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
  // end metric-billing

  // start metric-region
  var ctx4 = document.getElementById("metric-region").getContext("2d");

  var gradientStroke4 = ctx4.createLinearGradient(0, 230, 0, 50);
  gradientStroke4.addColorStop(1, 'rgba(203, 12, 159, 0.2)');
  gradientStroke4.addColorStop(0.2, 'rgba(72, 72, 176, 0.0)');
  gradientStroke4.addColorStop(0, 'rgba(203, 12, 159, 0)'); // Purple colors

  var data = {!! json_encode($uniqueDom) !!}; // Assuming $uniqueCustomers is an array of customer data

  chart4 = new Chart(ctx4, {
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
            backgroundColor: gradientStroke4,
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
  // end metric-region

  // Function to update chart based on selected date range
  function updateChart() {
    var startDate = document.getElementById('startDatePicker').value;
    var endDate = document.getElementById('endDatePicker').value;

    // Simulated AJAX request to fetch data based on selected date range
    // Replace this with your actual logic to fetch data dynamically
    var simulatedData = getSimulatedData(startDate, endDate);

    // Assuming response is an array of data for the chart
    chart1.data.labels = simulatedData.labels1;
    chart1.data.datasets[0].data = simulatedData.data1;

    // Update the chart
    chart1.update();

    chart2.data.labels = simulatedData.labels2;
    chart2.data.datasets[0].data = simulatedData.data2;

    // Update the chart
    chart2.update();

    chart3.data.labels = simulatedData.labels3;
    chart3.data.datasets[0].data = simulatedData.data3;

    // Update the chart
    chart3.update();

    chart4.data.labels = simulatedData.labels4;
    chart4.data.datasets[0].data = simulatedData.data4;

    // Update the chart
    chart4.update();
  }

  // Simulated function to fetch data
  function getSimulatedData(startDate, endDate) {
    // Your logic to fetch data based on the selected date range
    // This is a simulated function; replace it with your actual data fetching logic

    // Filter the data based on the selected date range
    var filteredData = chartData.filter(function(item) {
      return item.created_at >= startDate && item.created_at <= endDate;
    });

    // Extract labels and data from the filtered data
    var labels1 = filteredData.map(function(item) {
      return item.created_at;
    });

    var data1 = filteredData.map(function(item) {
      return item.harga !== null ? item.harga : 0;
    });

    var labels2 = filteredData.map(function(item) {
      return item.created_at;
    });

    var data2 = filteredData.map(function(item) {
      return item.jumlah_pemesanan !== null ? item.jumlah_pemesanan : 0;
    });

    var labels3 = filteredData.map(function(item) {
      return item.created_at;
    });

    var data3 = filteredData.map(function(item) {
      return item.harga !== null ? item.harga : 0;
    });

    var labels4 = filteredData.map(function(item) {
      return item.created_at;
    });

    var data4 = filteredData.map(function(item) {
      return item.jumlah_pemesanan !== null ? item.jumlah_pemesanan : 0;
    });

    return {
      labels1: labels1,
      data1: data1,
      labels2: labels2,
      data2: data2,
      labels3: labels3,
      data3: data3,
      labels4: labels4,
      data4: data4,
    };
  }

  var chartData = @json($data);
</script>


@endsection
