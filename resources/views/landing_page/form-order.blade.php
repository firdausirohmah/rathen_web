<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="{{ asset('asset/css/core.css') }}" class="template-customizer-core-css" />
<script src="asset/js\bootstrap.js"></script>


<body>
  
    <br>
    <h3 style="font-family: Montheavy; color: #1890fd;  font-weight: bold; text-decoration: underline;
    margin-bottom: 20px; text-align: center;">FORM ORDER - CUSTOM RATHEN</h3>
    <div class="container">
    <div class="row ">
        <div class="col-xl-7">
          <div class="nav-align-top mb-4">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <button
                  type="button"
                  class="nav-link active"
                  role="tab" 
                  data-bs-toggle="tab"
                  data-bs-target="#navs-top-home"
                  aria-controls="navs-top-home"
                  aria-selected="true"
                  
                  >Step 1
                </button>
              </li>

              <li class="nav-item">
                <button
                  type="button"
                  class="nav-link "
                  role="tab" 
                  data-bs-toggle="tab"
                  data-bs-target="#navs-top-home"
                  aria-controls="navs-top-home"
                  aria-selected="true"
                >
                  Step 2
                </button>
              </li>

              <li class="nav-item">
                <button
                  type="button"
                  class="nav-link"
                  role="tab" 
                  data-bs-toggle="tab"
                  data-bs-target="#navs-top-profile"
                  aria-controls="navs-top-profile"
                  aria-selected="false"
                >
                  Step 3
                </button>
              </li>
              <li class="nav-item">
                <button
                  type="button"
                  class="nav-link"
                  role="tab" 
                  data-bs-toggle="tab"
                  data-bs-target="#navs-top-profile"
                  aria-controls="navs-top-profile"
                  aria-selected="false"
                >
                  Step 4
                </button>
              </li>
              <li class="nav-item">
                <button
                  type="button"
                  class="nav-link"
                  role="tab" 
                  data-bs-toggle="tab"
                  data-bs-target="#navs-top-messages"
                  aria-controls="navs-top-messages"
                  aria-selected="false"
                >
                  Step 5
                </button>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>
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
        width: 13%;
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
    </style>
    <div class="container">
      <div class="row">
        <p style="color: #1890fd;  font-family: Montheavy;  font-weight: bold; padding-left:0%;">Step 1. Data Pesanan</p>
        <table style="width: 100%; border:10px; font-size:14px; font-weight:100; color:black;">
            <tr>
              <td class="col-1 fw-semibold">Nama Tim</td>
              <td class="col-2">:</td>
              <td class="col-3"><input type="text" name="nama tim" class="form-control fw-lighter" placeholder="Masukkan Nama Tim"></td>
            </tr>
            <tr>
              <td class="col-1 fw-semibold">Domisili (Kota atau Kab)</td>
              <td class="col-2">:</td>
              <td class="col-3"><input type="text" name="dom" class="form-control" placeholder="Masukkan Domisili"></td>
            </tr>
            <tr>
              <td class="col-1 fw-semibold">Nama Pemesanan</td>
              <td class="col-2">:</td>
              <td class="col-3"><input type="text" name="np"  class="form-control" placeholder="Masukkan Nama Pesanan"></td>
            </tr>
            <tr>
              <td class="col-1 fw-semibold">Kontak (No. Whatsapp)</td>
              <td class="col-2">:</td>
              <td class="col-3"><input type="text" name="nw" class="form-control" placeholder="Masukkan No. WA"></td>
            </tr>
            <tr>
              <td class="col-1 fw-semibold">Alamat Pengiriman</td>
              <td class="col-2">:</td>
              <td class="col-3">
                <input type="text" name="alamat_p" class="form-control" placeholder="Masukkan Alamat Pengirim">
                {{-- <textarea name="alamat" class="form-control" id="" cols="1" rows="2" placeholder="Alamat"></textarea> --}}
              </td>
            </tr>
            <tr>
              <td>
                <div style="margin-bottom: 30px;"></div>

              </td>
            </tr>
            <tr>
              <td class="col-1 fw-semibold">Jumlah pesanan</td> 
              <td class="col-2">:</td>
              
              <td class="col-3 input-group"><input type="text" name="jp" class="form-extra" placeholder="Input Jumlah Pesanan">
                <span class="input-group-text fw-lighter" id="basic-addon1">pcs</span>
              </td>
            </tr>
            <tr>
              <td class="col-1 fw-semibold">Kategori Harga</td>
              <td class="col-2">:</td>
              <td class="col-3">
                <select name="kategori" class="form-control" id="">
                  <option class="" value=""><span class="fw-lighter"> Non-Print</span></option>
                  <option value=""><span class="fw-lighter"> Half-Print</span></option>
                  <option value=""><span class="fw-lighter"> Full-Print</span></option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="col-1 fw-semibold">Kualitas</td>
              <td class="col-2">:</td>
              <td class="col-3">
                <select name="kategori" class="form-control" id="">
                  <option class="" value=""><span class="fw-lighter"> Fans</span></option>
                  <option value=""><span class="fw-lighter"> Stadium</span></option>
                  <option value=""><span class="fw-lighter"> PRO</span></option>
                </select>
              </td>
            </tr>
        </table>
      </div>
    <div class="row">
        <table style="width: 100%; border:10px; font-size:14px;  color:black;">
          <tr>
            <td colspan="2">
              <h4 style="color: #71BF72;">Extra :</h4>
            </td>
          </tr>
          <tr>
            <td class="extra-1"><span class="fw-semibold">- upgrade logo 3D</span></td>
            <td class="harga extra-2" >(+30,000):</td>
            <td colspan="1" class="input-group extra-3">
              <input type="text" class="form-extra" placeholder="Input Jumlah"  aria-describedby="basic-addon1">
              <span class="input-group-text fw-lighter" id="basic-addon1">pcs </span><small style="font-size: 12px; color:grey;" class="input-group-text fw-lighter">(mulai dr 24 pcs utk logo 3D)</small>
            </td>
          </tr>

          <tr>
            <td class="extra-1"><span class="fw-semibold">- Logo tim di celana</span></td>
            <td class="harga extra-2" >(+10,000):</td>
            <td class="input-group extra-3">
              <input type="text" class="form-extra" placeholder="Input Jumlah"  aria-describedby="basic-addon1">
              <span class="input-group-text fw-lighter" id="basic-addon1">pcs</span>
            </td>
          </tr>

          <tr>
            <td class="extra-1"><span class="fw-semibold">- Lengan panjang</span></td>
            <td class="harga extra-2" >(+30,000):</td>
            <td class="input-group extra-3 ">
              <input type="text" class="form-extra" placeholder="Input Jumlah"   aria-describedby="basic-addon1">
              <span class="input-group-text fw-lighter" id="basic-addon1">pcs</span>
            </td>
          </tr>

          <tr>
            <td class="extra-1"><span class="fw-semibold">- size 2XL</span></td>
            <td class="harga extra-2" >(+20,000):</td>
            <td class="input-group extra-3 ">
              <input type="text" class="form-extra" placeholder="Input Jumlah"  aria-describedby="basic-addon1">
              <span class="input-group-text fw-lighter" id="basic-addon1">pcs</span>
            </td>
          </tr>

          <tr>
            <td class="extra-1"><span class="fw-semibold">- size 3XL</span></td>
            <td class="harga extra-2" >(+35,000):</td>
            <td class="input-group  extra-3">
              <input type="text" class="form-extra" placeholder="Input Jumlah"  aria-describedby="basic-addon1">
              <span class="input-group-text fw-lighter" id="basic-addon1">pcs</span>
            </td>
          </tr>

          <tr>
            <td class="extra-1"><span class="fw-semibold">- size  &gt; 4XL</span></td>
            <td class="harga extra-2" >(+50,000):</td>
            <td class="input-group extra-3 ">
              <input type="text" class="form-extra" placeholder="Input Jumlah"  aria-describedby="basic-addon1">
              <span class="input-group-text fw-lighter" id="basic-addon1">pcs</span>
            </td>
          </tr>

          <tr>
            <td class="extra-1"><span class="fw-semibold">- Celana Panjang</span></td>
            <td class="harga extra-2" >(+150,000):</td>
            <td class="input-group extra-3 ">
              <input type="text" class="form-extra" placeholder="Input Jumlah"  aria-describedby="basic-addon1">
              <span class="input-group-text fw-lighter" id="basic-addon1">pcs</span>
            </td>
          </tr>

          <tr>
            <td class="extra-1"><span class="fw-semibold">- Kaoskaki</span></td>
            <td class="harga extra-2" >(+50,000):</td>
            <td class="input-group extra-3 ">
              <input type="text" class="form-extra"placeholder="Input Jumlah"   aria-describedby="basic-addon1">
              <span class="input-group-text fw-lighter" id="basic-addon1">pcs</span>
            </td>
          </tr>
          <tr>
            <td><h6  class="fw-lighter" style="color: red">TOTAL HARGA</h6></td>
            <td colspan="2"><h6  class="fw-lighter" style="color: red; text-align:left; padding-left:50px">:  IDR 124.000</h6></td>
          </tr>
          {{-- <tr>
            <td colspan="3" style="text-align: center; align-item:center;">
              <button type="button" style="font-family: Montheavy; width:15%" class="btn btn-black">NEXT</button>
            </td>
          </tr> --}}
        </table>
<footer>
      <div  style="text-align: right; " class="">
        <button type="button" style="font-family: Montheavy; width:15%" class="btn btn-black">NEXT</button> 
        <button type="button" style="font-family: Montheavy; width:40%; font-size:12px; margin-left:10%" class="btn btn-secondary">Data step 1 ini utk invoice dan tracking</button>
      </div>
      <div style="text-align: right;" class="">
      </div>
  
</footer>
          
        
        

      </div>
    </div>
      
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>