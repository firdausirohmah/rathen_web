<!DOCTYPE html>
<html lang="en" >
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
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css'><link rel="stylesheet" href="{{ asset('asset/css/formOrder.css') }}">

</head>
<body>
<!-- partial:index.partial.html -->
<header>
    <div class="container">
      <div class="navigation center-content">

        <div class="logo">
          <img class="icon icon-basket" src="{{asset('asset/cfind/source/images/rathen.png')}}" width="12%"></div>
        
      </div>
      <div class="notification">
        Custom Rathen - Form Order
      </div>
    </div>
  </header>
  <section class="content">

    <div class="container">
      <div class="payment">
        <div class="payment__title fw-6">
          Step Order
        </div>
        <div class="payment__types">
          <a class="payment__type payment__type--cc" href="/form-2/{{$kode}}">
            <i class="icon icon-picture"></i>Design</a>
          <a class="payment__type payment__type--paypal" href="/form-3/{{$kode}}">
            <i class="icon icon-pencil"></i>Spesifikasi</a>
          <a class="payment__type payment__type--paypal" href="/form-4/{{$kode}}">
            <i class="icon icon-docs"></i>Form Data</a>
          <a class="payment__type payment__type--paypal active" href="/invoice/{{$kode}}">
            <i class="icon icon-note"></i>Invoice</a>
        </div>

        <div class="payment__info">
          <div class="payment__cc">
            <div class="payment__title fw-6">
              <i class="icon icon-doc"></i>Invoice Order
            </div>
            <div class="card-body card-body-mobile">
              <h3 class="text-center font-weight-bold mb-1"><img src="{{ asset('/asset/images/logo-dark.png') }}" width="15%" alt=""></h3>
              <p class="text-center font-weight-bold mont mb-0" style="font-size: 12px;">Office: RATHEN INDONESIA, Jl. Mayjen Ishak Djuarsa no.167B Gunung Batu Bogor, Indonesia</p>
              <p class="text-center font-weight-bold mont"><small class="font-weight-bold">Phone No: 0896-1108-1988 | 0878-1108-1988</small></p>
              <div class="row content-center">
                <div class="col-md-12">
                  <h3 class="text-center font-weight-bold text-primary mt-2">INVOICE</h3>
                  <p class="text-center"><small >No. 00178/inv-10/2023</small></p>
                </div>
              </div>
              <div class="row pb-2 p-2 text-center-mb" style="text-align:justify;">
                <div class="col-md-6 mx-4 px-4">
                  <p class="mb-0 font-weight-bold text-primary">Bill to:</p>
                  <p class="mb-0">{{ $pesanan->nama_pemesanan }}</p>
                  <p class="mb-0">{{ $pesanan->nama_tim }}</p>			 
                            <p class="mb-0">{{ $pesanan->domisili }}</p>			 
                            </div>
                            <div class="col-lg-2"></div>
                            <div class="col-md-2">
                                <p class="mb-0 font-weight-bold text-primary">Ship to:</p>			 
                                <p class="mb-0">{{ $pesanan->nama_pemesanan }}</p>			 
                                <p class="mb-0">{{ $pesanan->nama_tim }}</p>			 
                                <p class="mb-0">{{ $pesanan->domisili }}</p>			 
                              </div>
                        </div>
                        <div class="table-responsive">
                          <table class="table table-bordered mt-4 mb-0">
                            <thead>
                              <tr>
                                <th class="text-uppercase small font-weight-bold">No.</th>
                                <th class="text-uppercase small font-weight-bold">Article</th>
                                <th class="text-uppercase small font-weight-bold">qty(pcs)</th>
                                <th class="text-uppercase small font-weight-bold">Retail Price</th>
                                <th class="text-uppercase small font-weight-bold">Total</th> 
                              </tr>
                            </thead>
                            <?php 
                            $i = 1; 
                            $jqty = $pesanan->jumlah_pemesanan;
                            $jharga = $pesanan->harga;
                            $total = $jqty * $jharga;
                            ?>
                            <tbody>
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $Jarsey }}</td>
                                <td>{{ $jqty }}</td>
                                <td><span id="Harga">{{ $jharga }}</span></td>
                                <td id="totalHarga">{{ $total }}</td> 
                              </tr>
                            @if ($pesanan->badan_bawah ==null)
                            @else 
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Badan Bawah Melengkung</td>
                                <td>{{ $pesanan->badan_bawah }}</td>
                                <td><span id="hargaBbm">{{ $price->p_badan_m }}</span></td>
                                <td id="totalBbm">{{ $total }}</td> 
                              </tr> 
                            @endif
                            @if ($pesanan->pola_lengan ==null)
                            @else 
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Pola Lengan Reglan</td>
                                <td>{{ $pesanan->pola_lengan }}</td>
                                <td><span id="Harga">{{ $price->pola_lr }}</span></td>
                                <td id="totalLengan">{{ $total }}</td> 
                              </tr> 
                            @endif
                            @if ($pesanan->upgrade_logo_3d ==null)
                            @else 
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Upgrade Logo 3D</td>
                                <td>{{ $pesanan->upgrade_logo_3d }}</td>
                                <td><span id="Harga">{{ $price->u_logo3d }}</span></td>
                                <td id="totalUpgrade">{{ $total }}</td> 
                              </tr> 
                            @endif
                            @if ($pesanan->logo_tim_dicelana ==null)
                            @else 
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Logo Tim Di Celana</td>
                                <td>{{ $pesanan->logo_tim_dicelana }}</td>
                                <td><span id="Harga">{{ $price->l_timdicelana }}</span></td>
                                <td id="totalHarga">{{ $total }}</td> 
                              </tr> 
                            @endif
                            @if ($pesanan->lengan_panjang ==null)
                            @else 
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Lengan Panjang</td>
                                <td>{{ $pesanan->lengan_panjang }}</td>
                                <td><span id="Harga">{{ $price->l_panjang }}</span></td>
                                <td id="totalHarga">{{ $total }}</td> 
                              </tr> 
                            @endif

                            @if ($pesanan->size_2xl ==null)
                            @else 
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Ukuran Baju XXL</td>
                                <td>{{ $pesanan->size_2xl }}</td>
                                <td><span id="Harga">{{ $price->s_2xl }}</span></td>
                                <td id="totalHarga">{{ $total }}</td> 
                              </tr> 
                            @endif
                            @if ($pesanan->size_3xl ==null)
                            @else 
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Ukuran Baju XXXL</td>
                                <td>{{ $pesanan->size_3xl }}</td>
                                <td><span id="Harga">{{ $price->s_3xl }}</span></td>
                                <td id="totalHarga">{{ $total }}</td> 
                              </tr> 
                            @endif
                            @if ($pesanan->size_4xl ==null)
                            @else 
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Ukuran Baju XXXXL</td>
                                <td>{{ $pesanan->size_4xl }}</td>
                                <td><span id="Harga">{{ $price->s_4xl }}</span></td>
                                <td id="totalHarga">{{ $total }}</td> 
                              </tr> 
                            @endif 
                              
                            </tbody>
                            
                            <tfoot class="font-weight-bold small text-primary">
                              <tr>
                                <td colspan="3"></td>
                                <td></td>
                                <td></td> 
                              </tr>  
                              <tr>
                                <td colspan="3"></td>
                                <td>Sub-Total</td>
                                <td>IDR </td> 
                              </tr>
                              <tr>
                                <td colspan="3"></td>
                                <td>Initial Payment (50%)</td>
                                <td>IDR </td> 
                              </tr>
                              <tr>
                                <td colspan="3"></td>
                                <td>Final Payment</td>
                                <td>IDR </td> 
                              </tr>
                              <tr>
                                <td colspan="3"></td>
                                <td>Shepping Fee</td>
                                <td>IDR </td> 
                              </tr>
                              <tr>
                                <td colspan="2" class="text-center">TOTAL</td>
                                <td class="text-center">QTY</td>
                                <td></td>
                                <td>IDR</td> 
                              </tr>
                            </tfoot>
                          </table>
                        </div><!--table responsive end-->
              <br>
                          <p style="font-style: italic;text-align:justify;">Note: All payment should be direct bank in into our official bank account as following bank:</p>
                <style>
                table{
                  width: 80%;
                  align-content: center;
                  text-align: left;
                  border-spacing: 100px; /* Mengatur jarak antar sel menjadi 0 */ 
                  border-collapse: collapse; /* Menggabungkan batas sel */
                }
                tr{
                  margin-top: -10px;
                  padding-top: -10px;
                }
                tr, td {
                padding: 0px; /* Menambahkan padding untuk ruang di dalam sel */
                text-align: left; /* Penataan teks di dalam sel */
                }
                .col-1{
                  margin-top: auto;
                  width: 10%;
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
                .text-primary{
                  color:#000!important;
                }
                .btn-download{
                  width: 18.5rem;
                  padding: 2rem 0 0 2rem;
                }
                </style>
                <div class="container">
                  <div class="row">
                    <table class="table-responsive" style="width: 100%; border:10px; font-size:14px; font-weight: bold;  font-weight:100; color:black;">
                      <tr style="font-weight: bold; ">
                      <td class="col-1 fw-bold">Account Name</td>
                      <td class="col-2">:</td>
                      <td class="col-3 fw-semibold">R. Esa Pangersa Gusti</td>
                      </tr> 
                      <tr style="font-weight: bold; ">
                      <td class="col-1 fw-semibold">Account Number</td>
                      <td class="col-2">:</td>
                      <td class="col-3 fw-semibold">0060435898</td>
                      </tr>  
                      <tr style="font-weight: bold; ">
                      <td class="col-1 fw-semibold">Bank</td>
                      <td class="col-2">:</td>
                      <td class="col-3 fw-semibold">BCA</td>
                      </tr> 
                      <tr style="font-weight: bold; ">
                      <td class="col-1 fw-semibold">Branch</td>
                      <td class="col-2">:</td>
                      <td class="col-3 fw-semibold">Bogor</td>
                      </tr> 
                    </table>
                  </div>
                </div>
                
                  <style>
                  .right-align {
                    text-align: right;
                    margin-top: 10px;  
                  }
                  .w-680{
                    width: 680px ;;
                  }
                  </style>
                  <div class="container w-680">
                    <div class="row">
                      <div class="col-lg-12">
                        <p class="right-align mb-4 pb-4">Best regard,</p>
                        <p class="right-align mt-4 pt-4"><u>R. Esa Pangersa Gusti</u></p>
                        <p class="right-align" style="line-height: 0px">RATHEN INDONESIA</p>
                      </div>
                    </div>
                  </div>
                  
            </div>
          </div>
          <div class="container w-unset">
            <div class="actions pt135">
              <a href="{{ route('export') }}" class="btn action__submit">Download
                <i class="icon icon-cloud-download"></i>
              </a>
              <a href="{{ url('/form-4') }}" class="backBtn">Go Back to Form Data</a>
            </div>
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
</style>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var modal = document.getElementById('inputDataModal');
    var btn = document.getElementById('inputDataBtn');
    var span = document.getElementsByClassName('close')[0];
    var form = document.getElementById('inputDataForm');
    var tableBody = document.querySelector('.wp-table tbody');

    // Counter for row index
    var rowIndex = 1;

    // Display the modal when the button is clicked
    btn.onclick = function () {
      modal.style.display = 'block';
    };

    // Close the modal when the close button is clicked
    span.onclick = function () {
      modal.style.display = 'none';
    };

    // Close the modal when clicking outside of it
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = 'none';
      }
    };

    // Handle form submission
    form.addEventListener('submit', function (e) {
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
