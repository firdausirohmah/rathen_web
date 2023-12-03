@extends('layout.form-order')
@section('content')
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
  .inpt-harga{
    background-color: transparent;
    width: 10%;
  }
  .img-thumbnail{
    width: 80%;
  }
  .img-thumbnail:hover{
    background-color: black;
  }
</style>
<div class="container">
  <div class="row">
    {{-- <p style="color: #1890fd;  font-family: Montheavy;  font-weight: bold; padding-left:0%;">Step 1. Data Pesanan</p> --}}
    <table style="width: 100%; border:10px; font-size:14px; font-weight:100; color:black;">
      <form action="{{ url('/form-1/action') }}" method="POST">
        @csrf
        <tr>
          <td class="col-1 fw-semibold">Nama Tim</td>
          <td class="col-2">:</td>
          <td class="col-3"><input type="text" name="nama_tim" class="form-control fw-lighter" placeholder="Masukkan Nama Tim"></td>
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
          <td class="col-1 fw-semibold"> Tipe Kualitas</td>
          <td class="col-2">:</td>
          <td class="col-3">
            <select name="kualitas" class="form-control" id="">
              <option class="" value="Fans"><span class="fw-lighter"> Stadium</span></option>
              <option value="Stadium"><span class="fw-lighter"> PRO</span></option>
              <option value="PRO"><span class="fw-lighter"> PRO+</span></option>
            </select>
          </td>
        </tr>
        <tr>
          <td class="col-1 fw-semibold">Harga</td>
          <td class="col-2">:</td>
          <td class="col-3">
            <span class="mx-3 fw-bold">IDR</span><input type="text" name="harga" class="inpt-harga"> <strong>/</strong><span class="fw-normal">pcs</span>
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
              <option value="Non-Print"><span class="fw-lighter"> Non-Print</span></option>
              <option value="Half-Print"><span class="fw-lighter"> Half-Print</span></option>
              <option value="Full-Print"><span class="fw-lighter"> Full-Print</span></option>
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
        <td class="extra-1"><span class="fw-semibold"><i class='bx bx-circle' style="font-size: 10px"></i> Badan bawah melengkung</span></td>
        <td class="harga extra-2" >(+15,000):</td>
        <td colspan="1" class="input-group extra-3">
          <input type="text" class="form-extra" placeholder="Input Jumlah"  aria-describedby="basic-addon1" name="bbm">
          <span class="input-group-text fw-lighter" id="basic-addon1">pcs </span><small style="font-size: 12px; color:grey;" class="input-group-text fw-lighter">(utk stadium, free utk PRO dan PRO+)</small><tr>
        <td class="extra-1"><span class="fw-semibold"><i class='bx bx-circle' style="font-size: 10px"></i> Pola lengan reglan</span></td>
        <td class="harga extra-2" >(+15,000):</td>
        <td colspan="1" class="input-group extra-3">
          <input type="text" class="form-extra" placeholder="Input Jumlah"  aria-describedby="basic-addon1" name="plr">
          <span class="input-group-text fw-lighter" id="basic-addon1">pcs </span><small style="font-size: 12px; color:grey;" class="input-group-text fw-lighter">(utk stadium, free utk PRO dan PRO+)</small>
        </td>
      </tr></small>
        </td>
      </tr>
     
      <tr>
        <td class="extra-1"><span class="fw-semibold"><i class='bx bx-circle' style="font-size: 10px"></i> Upgrade logo 3D</span></td>
        <td class="harga extra-2" >(+30,000):</td>
        <td colspan="1" class="input-group extra-3">
          <input type="text" class="form-extra" placeholder="Input Jumlah"  aria-describedby="basic-addon1" name="up3d">
          <span class="input-group-text fw-lighter" id="basic-addon1">pcs </span><small style="font-size: 12px; color:grey;" class="input-group-text fw-lighter">(utk stadium, free utk PRO dan PRO+)</small>
        </td>
      </tr>

      <tr>
        <td class="extra-1"><span class="fw-semibold"> <i class='bx bx-circle' style="font-size: 10px"></i> Logo tim di celana</span></td>
        <td class="harga extra-2" >(+10,000):</td>
        <td class="input-group extra-3">
          <input type="text" class="form-extra" placeholder="Input Jumlah"  aria-describedby="basic-addon1" name="logo_celana">
          <span class="input-group-text fw-lighter" id="basic-addon1">pcs</span><small style="font-size: 12px; color:grey;" class="input-group-text fw-lighter">(utk stadium dan PRO, free utk PRO+) </small>
        </td>
      </tr>

      <tr>
        <td class="extra-1"><span class="fw-semibold"><i class='bx bx-circle' style="font-size: 10px"></i>  Lengan panjang</span></td>
        <td class="harga extra-2" >(+30,000):</td>
        <td class="input-group extra-3 ">
          <input type="text" class="form-extra" placeholder="Input Jumlah"   aria-describedby="basic-addon1" name="lengan_panjang">
          <span class="input-group-text fw-lighter" id="basic-addon1">pcs</span>
        </td>
      </tr>

      <tr>
        <td class="extra-1"><span class="fw-semibold"><i class='bx bx-circle' style="font-size: 10px"></i>  size 2XL</span></td>
        <td class="harga extra-2" >(+20,000):</td>
        <td class="input-group extra-3 ">
          <input type="text" class="form-extra" placeholder="Input Jumlah"  aria-describedby="basic-addon1" name="xxl">
          <span class="input-group-text fw-lighter" id="basic-addon1">pcs</span>
        </td>
      </tr>

      <tr>
        <td class="extra-1"><span class="fw-semibold"><i class='bx bx-circle' style="font-size: 10px"></i>  size 3XL</span></td>
        <td class="harga extra-2" >(+35,000):</td>
        <td class="input-group  extra-3">
          <input type="text" class="form-extra" placeholder="Input Jumlah"  aria-describedby="basic-addon1" name="xxxl">
          <span class="input-group-text fw-lighter" id="basic-addon1">pcs</span>
        </td>
      </tr>

      <tr>
        <td class="extra-1"><span class="fw-semibold"> <i class='bx bx-circle' style="font-size: 10px"></i> size  &gt; 4XL</span></td>
        <td class="harga extra-2" >(+50,000):</td>
        <td class="input-group extra-3 ">
          <input type="text" class="form-extra" placeholder="Input Jumlah"  aria-describedby="basic-addon1" name="xxxxl">
          <span class="input-group-text fw-lighter" id="basic-addon1">pcs</span>
        </td>
      </tr>

      <tr>
        <td class="extra-1"><span class="fw-semibold"><i class='bx bx-circle' style="font-size: 10px"></i>  Celana Panjang</span></td>
        <td class="harga extra-2" >(+150,000):</td>
        <td class="input-group extra-3 ">
          <input type="text" class="form-extra" placeholder="Input Jumlah"  aria-describedby="basic-addon1" name="celana_panjang">
          <span class="input-group-text fw-lighter" id="basic-addon1">pcs</span>
        </td>
      </tr>

      <tr>
        <td class="extra-1"><span class="fw-semibold"><i class='bx bx-circle' style="font-size: 10px"></i>  Kaoskaki</span></td>
        <td class="harga extra-2" >(+50,000):</td>
        <td class="input-group extra-3 ">
          <input type="text" class="form-extra"placeholder="Input Jumlah"   aria-describedby="basic-addon1" name="kaoskaki">
          <span class="input-group-text fw-lighter" id="basic-addon1">pcs</span>
        </td>
      </tr>
      <tr>
        <td>
          <div style="margin-bottom: 30px;"></div>

        </td>
      </tr>
      {{-- <tr>
        <td><h6  class="fw-lighter" style="color: red">TOTAL HARGA</h6></td>
        <td colspan="2"><h6  class="fw-lighter" style="color: red; text-align:left; padding-left:50px">:  IDR <input type="text" class="inpt-harga text-danger" name="total_harga" value="124.000" placeholder="124.000"></h6></td>
      </tr> --}}
      {{-- <tr>
        <td colspan="3" style="text-align: center; align-item:center;">
          <button type="button" style="font-family: Montheavy; width:15%" class="btn btn-black">NEXT</button>
        </td>
      </tr> --}}
    </table>
  </div>
  <div class="row bg-primary" style="text-align: left">
    <div class="col"><h4 style="color: #71BF72; text-align:left;">Keterangan Extra:</h4></div>
  </div>
</div>
<div class="container text-center">
  <div class="row">
    <div class="col">
      <img src="https://th.bing.com/th/id/OIP.nyFLBYjD207JNHC4hBQBAwHaE8?rs=1&pid=ImgDetMain" class="img-thumbnail" alt="...">
    </div>
    <div class="col">
      <img src="https://th.bing.com/th/id/OIP.nyFLBYjD207JNHC4hBQBAwHaE8?rs=1&pid=ImgDetMain" class="img-thumbnail" alt="...">
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h5  class="fw-bold" style="color: red">TOTAL HARGA <span class="mx-5">:</span> IDR <input type="text" class="inpt-harga text-danger fw-bold" name="total_harga" value="124.000" placeholder="124.000"></h5>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <button type="submit" style="font-family: Montheavy; width:15%" class="btn btn-black mx-4">ORDER </button>
    </form>
    <a href="/page-costum" style="font-family: Montheavy; width:15%" class="btn btn-black">CANCEL </a>
  </div>
</div>
@endsection