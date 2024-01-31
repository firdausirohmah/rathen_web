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
        Rathen - Quotation
      </div>
    </div>
  </header>
  <section class="content" style="overflow-x:hidden;">

    <button class="button back" onclick="goBack()"><i class='icon icon-arrow-left'></i></button>
    
    <div class="container">
      <div class="payment">
        <div class="payment__info" style="width:100rem">
          <div class="payment__cc" id="myDIV">
            <div class="card-body card-body-mobile" id="content">
                <h3 class="text-center font-weight-bold mb-1">
                    <img id="dynamicImage" src="{{public_path('/asset/images/logo-dark.png')}}" width="15%" ></h3>
                <p class="text-center font-weight-bold mont mb-0" style="font-size: 12px;">Office: RATHEN
                    INDONESIA, Jl. Mayjen Ishak Djuarsa no.167B Gunung Batu Bogor, Indonesia</p>
                <p class="text-center font-weight-bold mont"><small class="font-weight-bold">Phone No:
                        0896-1108-1988 | 0878-1108-1988</small></p>
                <div class="row pb-2 p-2">
                    <div class="col-md-12">
                        <h5 class="text-center font-weight-bold mt-2">QUOTATION</h5>
                    </div>
                </div>

                <div class="row pb-2 p-2">
                    <div class="col-md-6" style="text-align:justify">
                        <p class="mb-0 font-weight-bold">Kepada Yth:</p>
                        <p class="mb-0">{{ $nama }}</p>
                        <p class="mb-0">{{ $kontak }}</p>
                        <p class="mb-0">{{ $email }}</p>
                        <p class="mb-0">{{ $alamat }}</p>
                        {{-- <p>di tempat</p> --}}

                    </div>
                    <div class="col-md-6">
                        <p class="mb-0 text-right">{{ $tanggal }}</p>
                    </div>

                </div>
                <div class="table-responsive">
                    <table class="table table-bordered mt-4 mb-0 ">
                        <thead class="text-center">
                            <tr class="text-center">
                                <th class="text-uppercase small font-weight-bold">Nama Produk</th>
                                <th class="text-uppercase small font-weight-bold">Qty(pcs)</th>
                                <th class="text-uppercase small font-weight-bold">Harga</th>
                                <th class="text-uppercase small font-weight-bold">Total</th>
                            </tr>
                        </thead>
                        <?php 
                            $i = 1; 
                            $total = $qty * $harga;
                        ?>
                        <tbody>
                            <tr>
                                <td>{{ $product }}</td>
                                <td>{{ $qty }}</td>
                                <td><span id="Harga">{{ formatRupiah($harga) }}</span></td>
                                <td id="totalHarga">{{ formatRupiah($total) }}</td> 
                            </tr>

                        </tbody>
                    </table>
                </div><!--table responsive end-->
                
                <div class="table-responsive">
                    <table class="table table-bordered mt-4 mb-0 ">
                        <thead class="text-center">
                            <tr class="text-center">
                                <th class="text-uppercase small font-weight-bold">No.</th>
                                <th class="text-uppercase small font-weight-bold">Extra</th>
                                <th class="text-uppercase small font-weight-bold">Qty(pcs)</th>
                                <th class="text-uppercase small font-weight-bold">Retail Price</th>
                                <th class="text-uppercase small font-weight-bold">Total</th>
                            </tr>
                        </thead>
                        <?php 
                            $i = 1;
                            $subTotal = 0;
                        ?>
                        <tbody>
                            @if ($kerah_kancing ==null)
                            @else 
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Kerah Pakai Kancing</td>
                                <td>-</td>
                                <td><span id="Harga">{{ formatRupiah($kerah_kancing) }}</span></td>
                                <td id="totalHarga">{{ formatRupiah($kerah_kancing) }}</td> 
                              </tr>
                              <?php $subTotal += $kerah_kancing; ?>
                            @endif
                            @if ($badan_bawah ==null)
                            @else 
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Badan Bawah Melengkung</td>
                                <td>-</td>
                                <td><span id="Harga">{{ formatRupiah($badan_bawah) }}</span></td>
                                <td id="totalHarga">{{ formatRupiah($badan_bawah) }}</td> 
                              </tr>
                              <?php $subTotal += $badan_bawah; ?>
                            @endif
                            @if ($pola_lengan ==null)
                            @else 
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Lengan Pola Raglan</td>
                                <td>-</td>
                                <td><span id="Harga">{{ formatRupiah($pola_lengan) }}</span></td>
                                <td id="totalHarga">{{ formatRupiah($pola_lengan) }}</td> 
                              </tr> 
                              <?php $subTotal += $pola_lengan; ?>
                            @endif
                            @if ($lengan_panjang ==null)
                            @else
                            <?php 
                                $totallp = $lengan_panjang * $price->l_panjang;
                                $subTotal += $totallp;
                            ?>
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Lengan Panjang</td>
                                <td>{{ $lengan_panjang }}</td>
                                <td><span id="Harga">{{ formatRupiah($price->l_panjang) }}</span></td>
                                <td id="totalHarga">{{ formatRupiah($totallp) }}</td> 
                              </tr> 
                            @endif
                            @if ($s2xl ==null)
                            @else 
                            <?php 
                                $total2xl = $s2xl * $price->s_2xl;
                                $subTotal += $total2xl;
                            ?>
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Size 2XL</td>
                                <td>{{ $s2xl }}</td>
                                <td><span id="Harga">{{ formatRupiah($price->s_2xl) }}</span></td>
                                <td id="totalHarga">{{ formatRupiah($total2xl) }}</td> 
                              </tr> 
                            @endif
                            @if ($s3xl ==null)
                            @else 
                            <?php 
                                $total3xl = $s3xl * $price->s_3xl;
                                $subTotal += $total3xl;
                            ?>
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Size 3XL</td>
                                <td>{{ $s3xl }}</td>
                                <td><span id="Harga">{{ formatRupiah($price->s_3xl) }}</span></td>
                                <td id="totalHarga">{{ formatRupiah($total3xl) }}</td> 
                              </tr> 
                            @endif
                            @if ($s4xl ==null)
                            @else 
                            <?php 
                                $total4xl = $s4xl * $price->s_4xl;
                                $subTotal += $total4xl;
                            ?>
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Size > 4XL</td>
                                <td>{{ $s4xl }}</td>
                                <td><span id="Harga">{{ formatRupiah($price->s_4xl) }}</span></td>
                                <td id="totalHarga">{{ formatRupiah($total4xl) }}</td> 
                              </tr> 
                            @endif
                            @if ($celana_printing ==null)
                            @else 
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Celana Printing</td>
                                <td>-</td>
                                <td><span id="Harga">{{ formatRupiah($celana_printing) }}</span></td>
                                <td id="totalHarga">{{ formatRupiah($celana_printing) }}</td> 
                              </tr> 
                              <?php 
                                $subTotal += $celana_printing;
                              ?>
                            @endif
                            @if ($celana_pro ==null)
                            @else 
                            <?php 
                                $totalcpro = $celana_pro * $price->c_panjang;
                                $subTotal += $totalcpro;
                            ?>
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Celana Panjang PRO</td>
                                <td>{{ $celana_pro }}</td>
                                <td><span id="Harga">{{ formatRupiah($price->c_panjang) }}</span></td>
                                <td id="totalHarga">{{ formatRupiah($totalcpro) }}</td> 
                              </tr> 
                            @endif
                            @if ($kaoskaki ==null)
                            @else 
                            <?php 
                                $totalkki = $kaoskaki * $price->kaoskaki;
                                $subTotal += $totalkki;
                            ?>
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Kaoskaki</td>
                                <td>{{ $kaoskaki }}</td>
                                <td><span id="Harga">{{ formatRupiah($price->kaoskaki) }}</span></td>
                                <td id="totalHarga">{{ formatRupiah($totalkki) }}</td> 
                              </tr> 
                            @endif
                            @if ($bahan_embos ==null)
                            @else 
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Bahan Embos</td>
                                <td>-</td>
                                <td><span id="Harga">{{ formatRupiah($bahan_embos) }}</span></td>
                                <td id="totalHarga">{{ formatRupiah($bahan_embos) }}</td> 
                              </tr> 
                              <?php
                                $subTotal += $bahan_embos;
                              ?>
                            @endif
                            @if ($logo_3d ==null)
                            @else 
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Logo 3D</td>
                                <td>-</td>
                                <td><span id="Harga">{{ formatRupiah($logo_3d) }}</span></td>
                                <td id="totalHarga">{{ formatRupiah($logo_3d) }}</td> 
                              </tr> 
                              <?php
                                $subTotal += $logo_3d;
                              ?>
                            @endif
                            @if ($kerah_rib ==null)
                            @else 
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Kerah Elastic Rib</td>
                                <td>-</td>
                                <td><span id="Harga">{{ formatRupiah($kerah_rib) }}</span></td>
                                <td id="totalHarga">{{ formatRupiah($kerah_rib) }}</td> 
                              </tr> 
                              <?php
                                $subTotal += $kerah_rib;
                              ?>
                            @endif
                            @if ($tangan_rib ==null)
                            @else 
                              <tr>
                                <td>{{ $i++ }}</td>
                                <td>Ujung Tangan Elastic Rib</td>
                                <td>-</td>
                                <td><span id="Harga">{{ formatRupiah($tangan_rib) }}</span></td>
                                <td id="totalHarga">{{ formatRupiah($tangan_rib) }}</td> 
                              </tr> 
                              <?php
                                $subTotal += $tangan_rib;
                              ?>
                            @endif

                        </tbody>
                        <tfoot class="font-weight-bold">
                            <?php
                                $total += $subTotal;
                            ?>
                            <tr>
                                <td colspan="3"></td>
                                <td></td>
                                <td></td> 
                            </tr>  
                            <tr>
                                <td colspan="3"></td>
                                <td>Sub-Total</td>
                                <td>{{formatRupiah($subTotal)}}</td> 
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center">TOTAL</td>
                                <td class="text-center">{{ $qty }}</td>
                                <td>{{ formatRupiah($harga) }}</td>
                                <td>{{formatRupiah($total)}}</td> 
                            </tr>
                        </tfoot>
                    </table>
                </div><!--table responsive end-->
                <?php
                // Fungsi untuk mengonversi harga menjadi format rupiah
                function formatRupiah($harga)
                {
                    return "Rp " . number_format($harga, 0, ',');
                }
                ?>

                <br>
                {{-- <p style="font-style: italic;">Note: All payment should be direct bank in into our official bank
                    account as following bank:</p> --}}
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
                </style>
                {{-- <div class="container">
                    <div class="row">
                        <table
                            style="width: 100%; border:10px; font-size:14px; font-weight: bold;  font-weight:100; color:black;">
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
                </div> --}}

                <style>
                    .right-align {
                        text-align: right;
                        margin-top: 10px;
                    }
                </style>
                <div class="container w-unset-quo w-unset">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="right-align mb-4 pb-4">Best regard,</p>
                            <p class="right-align mt-4 pt-4"><u>R. Esa Pangersa Gusti</u></p>
                            <p class="right-align" style="line-height: 0px">RATHEN INDONESIA</p>
                        </div>
                    </div>
                </div>

                <script>
                    function goBack() {
                        window.location.href = "/price-list/{{$kd_part}}";
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
                document.getElementById ("demo").innerHTML = "Height: " + y + " Width: " + x;
                </script>

            </div>
          </div>
          <div class="container w-unset">
            <div>
              <a href="{{ route('generate') }}" class="btn action__submit">Download
                <i class="icon icon-cloud-download"></i>
              </a>
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
