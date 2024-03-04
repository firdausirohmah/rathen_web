<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rathen</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700|Open+Sans:400,600'>
  <!-- <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700|Open+Sans:400,600'> -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css'>
  <link rel="stylesheet" href="{{ asset('asset/css/formOrder.css') }}">
  <!-- <link id="pagestyle" href="{{asset('asset/admin/css/soft-ui-dashboard.css?v=1.0.3')}}" rel="stylesheet" /> -->
  <!-- <link rel="stylesheet" href="{{ asset('asset/css/ex.css') }}"> -->

</head>

<body>
  <!-- partial:index.partial.html -->
  <header>
    <div class="container container-logo">
      <div class="navigation center-content">

        <div class="logo">
          <img class="icon icon-basket" src="{{asset('asset/cfind/source/images/rathen.png')}}" width="12%">
        </div>

      </div>
      <div class="notification">
        Rathen - Production Results
      </div>

    </div>
  </header>
  <section class="content" style="overflow-x:hidden;">

    <button class="m-3 button back" onclick="goBack()"><i class='icon icon-arrow-left'></i></button>

    <div class="container">
      <div class="payment">
        <div class="payment__info" style="width:129rem">
          <div class="payment__cc" id="myDIV">
            <div class="card-body card-body-mobile" id="content">
              <h3 class="text-center font-weight-bold mb-1"><img src="{{ asset('/asset/images/logo-dark.png') }}" width="15%" alt=""></h3>
              <p class="text-center font-weight-bold mont mb-0" style="font-size: 12px;">Office: RATHEN INDONESIA, Jl. Mayjen Ishak Djuarsa no.167B Gunung Batu Bogor, Indonesia</p>
              <p class="text-center font-weight-bold mont"><small class="font-weight-bold">Phone No: 0896-1108-1988 | 0878-1108-1988</small></p>
              <div class="row content-center">
                <div class="col-md-12">
                  <h3 class="text-center font-weight-bold text-primary mt-2">Results</h3>
                  <p class="text-center"><small>No. inv-{{$pesanan->kd_step2}}/2024</small></p>
                </div>
              </div>
              <div class="row pb-2 p-2 text-center-mb" style="text-align:justify;">
                <div class="col-md-7 mx-4 px-4">
                  <p class="mb-0 font-weight-bold text-primary">Customer:</p>
                  <p class="mb-0">{{ $pesanan->nama_pemesanan }}</p>
                  <p class="mb-0">{{ $pesanan->kontak }}</p>
                  <p class="mb-0">{{ $pesanan->domisili }}</p>
                </div>
                <div class="col-md-4">
                  <p class="mb-0 font-weight-bold text-primary">Product:</p>
                  <p class="mb-0">{{ $pesanan->product }}</p>
                  <p class="mb-0">{{ $pesanan->jumlah_pemesanan }}</p>
                  <p class="mb-0">Rp <?= number_format($pesanan->total_harga, 0, ','); ?></p>
                </div>
              </div>
              <div class="table-responsive">
                <table class="table table-bordered mt-4 mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase small font-weight-bold">No.</th>
                      <th class="text-uppercase small font-weight-bold">Production</th>
                      <th class="text-uppercase small font-weight-bold text-center">Image</th>
                      
                    </tr>
                  </thead>
                  <?php
                  $i = 1;
                  $jqty = $pesanan->jumlah_pemesanan;
                  $jharga = $pesanan->harga;
                  $total = $jqty * $jharga;
                  ?>
                  <tbody>
                    @php
                    $data = [];
                    $progress = json_decode($progress, true);
                    foreach ($progress as $key => $value) {
                        $data[] = [$key, $value];
                    }
                    @endphp
                    @foreach($data as $row)

                    @if(in_array($row[0], ['final_concept', 'production_data', 'order_quantity', 'logo', 'polifek_quality', 'delivery', 'packaging', 'stitching_neatness']))
                    <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{$row[0]}}</td>
                      <td class="text-center">
                        @if($row[1] != null)
                        <img src="{{asset('uploads/'.$row[1])}}" class="h-50 w-50" alt="">
                        @else
                        <p>Not yet</p>
                        @endif
                      </td>
                        
                      </tr>
                      @endif
                    @endforeach
                  </tbody>

                  <tfoot class="text-primary">
                    <tr>
                      <td colspan="3" class="text-center">
                      <div class="col-lg-12">
                        <p class="right-align mb-4 pb-4">Best regard,</p>
                        @if($pesanan->status_order == 'produksi')
                        <img src="https://cdn.kibrispdr.org/data/957/tanda-tangan-keren-png-6.png" alt="" style="width: 100px;display:none;float:right;" id="ttd1"><br>
                        @endif
                        <p class="right-align mt-4 pt-4"><u>R. Esa Pangersa Gusti</u></p>
                        <p class="right-align" style="line-height: 0px">RATHEN INDONESIA</p>
                      </div>
                      </td>
                      
                    </tr>
                  </tfoot>
                </table>
              </div>
              
              <style>
                table {
                  width: 80%;
                  align-content: center;
                  text-align: left;
                  border-spacing: 100px;
                  /* Mengatur jarak antar sel menjadi 0 */
                  border-collapse: collapse;
                  /* Menggabungkan batas sel */
                }

                tr {
                  margin-top: -10px;
                  padding-top: -10px;
                }

                tr,
                td {
                  padding: 0px;
                  /* Menambahkan padding untuk ruang di dalam sel */
                  text-align: left;
                  /* Penataan teks di dalam sel */
                }

                .col-1 {
                  margin-top: auto;
                  width: 10%;
                }

                .col-2 {
                  margin-top: auto;
                  width: 1%;
                  font-weight: bold;
                }

                .col-3 {
                  margin-top: auto;
                  width: 62%;
                }

                .text-primary {
                  color: #000 !important;
                }

                .btn-download {
                  width: 18.5rem;
                  padding: 2rem 0 0 2rem;
                }
              </style>
              

              <style>
                .right-align {
                  text-align: right;
                  margin-top: 10px;
                }

                .w-680 {
                  width: 680px;
                  ;
                }

                .container {
                  width: 100rem;
                }
              </style>
              

              <script>
                function goBack() {
                  window.location.href = "/production";
                }
                document.addEventListener("DOMContentLoaded", function() {
                  var dynamicImage = document.getElementById("dynamicImage");

                  if (dynamicImage) {
                    console.log("Element dengan ID dynamicImage ditemukan.");
                    dynamicImage.src = "{{asset('/asset/images/logo-dark.png')}}";
                    console.log("Src gambar diubah menjadi: " + dynamicImage.src);
                  } else {
                    console.error("Element dengan ID dynamicImage tidak ditemukan!");
                  }
                });
              </script>
              <script>
                const element = document.getElementById("content");
                let y = element.scrollHeight;
                let x = element.scrollWidth;
                document.getElementById("demo").innerHTML = "Height: " + y + " Width: " + x;
              </script>
            </div>


            <style>
              .table-extra {
                display: none;
              }

              .table-total {
                display: table-footer-group;
                ;
              }
            </style>
            {{-- @if ($subtotal > 0)
            <style>
              .table-extra {
                display: table;
              }

              .table-total {
                display: none;
              }
            </style>
            @endif --}}


          </div>
          <div class="container w-unset">

            @if($pesanan->status_order == 'produksi')
            <div>
              <a href="{{ route('progress.generate', ['kd_step' => $kode]) }}" class="btn action__submit">Download
                <i class="icon icon-cloud-download"></i>
              </a>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="approval1" id="approval1" >
              <label class="form-check-label" for="approval1">
              R. Esa Pangersa Gusti
              </label>
            </div>
            
            @endif
          </div>
          <!-- <div class="payment__shipping">
            <div class="row">
              <div class="field">
                <div class="form-uploads btn-download">
                  <a href="{{ route('export') }}" class="btn action__submit">
                    <i class="icon icon-cloud-download"></i>Download File</a>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>

    <div class="container">
      <div class="actions pt135">
        <a href="/form/orderStep5" class="btn action__submit hidden">Next
          <i class="icon icon-arrow-right-circle"></i>
        </a>
        <a href="/page-custom" class="backBtn">Go Back to Rathen</a>
      </div>
  </section>
  </div>
  <!-- partial -->
  <style>
    *,
    *:after,
    *:before {
      /* box-sizing: border-box; */
      overflow-x: visible;
    }

    button {
      margin-top: 30px;
      margin-left: 40px;
      font-size: 20px;
      border-radius: 2px;
      cursor: pointer;
      background-color: transparent;
      transition: background-color 0.3s ease;
      width: 60px;
      border-radius: 14px;
      height: 50px;
    }

    button:hover {
      /* border: red; */
      background-color: whitesmoke;
    }
  </style>
  <script>
    var approval = document.getElementById('approval1');
    approval.addEventListener('change', function(){
      ttd = document.getElementById('ttd1');
      if(approval.checked){

        ttd.style = 'display:block;width: 100px;float:right'
      }
    });
    document.addEventListener('DOMContentLoaded', function() {
      var modal = document.getElementById('inputDataModal');
      var btn = document.getElementById('inputDataBtn');
      var span = document.getElementsByClassName('close')[0];
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

      // Close the modal when clicking outside of it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = 'none';
        }
      };

      // Handle form submission
      form.addEventListener('submit', function(e) {
        e.preventDefault();

        // Get input values
        var name = document.getElementById('name').value;
        var number = document.getElementById('number').value;
        var size = document.getElementById('size').value;

        // Check if any input is provided
        if (name || number || size) {
          // Create a new table row with the input values
          var newRow = tableBody.insertRow();
          var cell1 = newRow.insertCell(0);
          var cell2 = newRow.insertCell(1);
          var cell3 = newRow.insertCell(2);
          var cell4 = newRow.insertCell(3);
          cell1.innerHTML = rowIndex++; // Increment the counter
          cell2.innerHTML = name || '-';
          cell3.innerHTML = number || '-';
          cell4.innerHTML = size || '-';
        }

        // Close the modal
        modal.style.display = 'none';

        // Clear the form fields for the next input
        form.reset();
      });
    });
  </script>

</body>

</html>