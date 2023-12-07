@extends('layout.form-order')
@section('content')
<style>
   .input-container {
      margin-bottom: 10px;
      background-color: transparent;

    }
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
    border-radius: 14px;
  }
  .normal{
    opacity: 1;
    transform: rotate(0deg); /* Mulai dengan rotasi 0 derajat */
    transition: opacity 0.3s ease, transform 0.3s ease; /* Efek transisi dengan durasi 0.3 detik dan fungsi timing ease */
  }
  .normal:hover{
    /* opacity: 0.5; */
    -webkit-transition: content 2s ease-out;
    content: url('/asset/extra/kuning2.png');
  }
  .raglan:hover{
    /* background-color: black; */
    content: url('/asset/extra/kuning1.png');
  }
  .C1:hover{
    /* opacity: 0.5; */
    -webkit-transition: content 2s ease-out;
    content: url('/asset/extra/casual/C-1Kuning.png');
  }
  .C2:hover{
    /* opacity: 0.5; */
    -webkit-transition: content 2s ease-out;
    content: url('/asset/extra/casual/C-2Kuning.png');
  }
  .C3:hover{
    /* opacity: 0.5; */
    -webkit-transition: content 2s ease-out;
    content: url('/asset/extra/casual/C-3Kuning.png');
  }
  .C4:hover{
    /* opacity: 0.5; */
    -webkit-transition: content 2s ease-out;
    content: url('/asset/extra/casual/C-4Kuning.png');
  }
  .C5:hover{
    /* opacity: 0.5; */
    -webkit-transition: content 2s ease-out;
    content: url('/asset/extra/casual/C-5Kuning.png');
  }
  .O1:hover{
    /* opacity: 0.5; */
    -webkit-transition: content 2s ease-out;
    content: url('/asset/extra/oneck/O-1akuning.png');
  }
  .O2:hover{
    /* opacity: 0.5; */
    -webkit-transition: content 2s ease-out;
    content: url('/asset/extra/oneck/O-2Kuning.png');
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
            <span class="mx-3 fw-bold">IDR</span><input type="text" name="harga" class="inpt-harga"> <b>/</b><span class="fw-normal">pcs</span>
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
    <div class="container">
      <div class="row-12">
        <div class="col-lg-12 mt-4">
          <h5  class="fw-bold" style="color: red">TOTAL HARGA <span class="mx-5">:</span> IDR <input type="text" class="inpt-harga text-danger fw-bold" name="total_harga" value="124.000" placeholder="124.000"></h5>
        </div>
      </div>
    </div>

    <a type="button"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="font-family: Montheavy;  font-size:12px; margin-left:30%; font-weight: bold; font-style: italic;"> Download QUOTATION (.pdf)</a>
  
 

<div class="container">
  <div class="row">
    <button type="submit" style="font-family: Montheavy; width:15%" class="btn btn-black mx-4">ORDER </button>
    </form>
    <a href="/page-costum" style="font-family: Montheavy; width:15%" class="btn btn-black">CANCEL </a>
  </div>
</div>

  </div>

  
  <hr>
  <div class="row " style="text-align: left">
    <div class="col-12" style="padding-left: 0; margin-left: 0;"><h4 style="color: #71BF72; text-align:left;">Keterangan Extra:</h4></div>
  </div>
  <div class="row " style="text-align: left">
    <div class="col-12" style="padding-left: 0; margin-left: 0;"><h5 style="color: #1890fd;   text-align:left;">POLA BADAN : </h5></div>
  </div> 
   
    <div class="row mb-2">
      <table style="width: 100%; border:10px; font-size:14px;  color:black;">
        <tr>
          <td class="extra-1"><span class="fw-semibold"><i class='bx bx-circle' style="font-size: 10px"></i> Normal</span></td>
          <td class="harga extra-2 style" style="margin-left: 5%;" >Free</td>
          <td colspan="1" class="input-group extra-3">
        <img src="{{asset('/asset/polabadan/belakangNormal.png')}}"  class="img-thumbnail w-25" alt="putih1">

            
           </tr>
           <tr>
            <td class="extra-1"><span class="fw-semibold"><i class='bx bx-circle' style="font-size: 10px"></i> Badan bawah meleng</span></td>
            <td class="harga extra-2 style" style="margin-left: 5%;" >(+15,000)</td>
            <td colspan="1" class="input-group extra-3">
        <img src="{{asset('/asset/polabadan/belakang.png')}}" class="img-thumbnail w-25" alt="putih2">

             </tr>
      </table>
    </div> 
    <div class="row mb-4">
      <div class="col">
        {{-- <img src="{{asset('/asset/polabadan/belakangNormal.png')}}"  class="img-thumbnail" alt="putih1"> --}}
      </div>
      <div class="col">
        {{-- <img src="{{asset('/asset/polabadan/belakang.png')}}" class="img-thumbnail" alt="putih2"> --}}
        
      </div>
    </div> 
    <div class="row" style="text-align: left">
      <div class="col-12" style="padding-left: 0; margin-left: 0;"><h5 style="color: #1890fd;   text-align:left;">POLA LENGAN : </h5></div>
    </div> 
    
    {{--  --}}
  <div class="row">
    <table style="width: 100%; border:10px; font-size:14px;  color:black;">
      <tr>
        <td class="extra-1"><span class="fw-semibold"><i class='bx bx-circle' style="font-size: 10px"></i> Normal</span></td>
        <td class="harga extra-2 style" style="margin-left: 5%;" >Free</td>
        <td colspan="1" class="input-group extra-3">
        <img src="{{asset('/asset/extra/putih2.png')}} "class="img-thumbnail w-25 normal" alt="putih1">

          
         </tr>
         <tr>
          <td class="extra-1"><span class="fw-semibold"><i class='bx bx-circle' style="font-size: 10px"></i> Raglan</span></td>
          <td class="harga extra-2 style" style="margin-left: 5%;" >(+15,000)</td>
          <td colspan="1" class="input-group extra-3">
          <img src="{{asset('/asset/extra/putih1.png')}}" class="img-thumbnail w-25 raglan" alt="putih2">

           </tr>
    </table>
  </div> 
  {{-- <div class="row mx-12">
    <div class="col ">
      <div class="card w-50">
        <img src="{{asset('/asset/extra/putih2.png')}} "class="img-thumbnail w-25 normal" alt="putih1">
      </div>
      <div class="card w-50">
        <img src="{{asset('/asset/extra/putih1.png')}}" class="img-thumbnail w-25 raglan" alt="putih2">
      </div> --}}
    {{-- </div> --}}
  {{-- </div>  --}}
  <div class="row mb-4" style="text-align: left">
    <div class="col-12" style="padding-left: 0; margin-left: 0;"><h5 style="color: #1890fd;   text-align:left;">MATERIAL (bahan) : </h5></div>
  </div> 

{{-- <div class="container text-center"> --}}
  <div class="row">
    <div class="col">
      {{-- <img src="{{asset('/asset/extra/putih2.jpeg')}}" class="img-thumbnail" alt="putih1"> --}}
    </div>
    <div class="col">
      {{-- <img src="{{asset('/asset/extra/putih1.jpeg')}}" class="img-thumbnail" alt="putih2"> --}}
    </div>
  </div>



<div class="row  " style="text-align: left">
  <div class="col "  style="padding-left: 0; margin-left: 0;"><h5 style="color: #1890fd;">JENIS KERAH : </h5></div>
</div>
<div class="row mb-2">
  <table style="width: 100%; border:10px; font-size:14px;  color:black;">
    <tr>
      <td class="extra-1"><span class="fw-semibold"><i class='bx bx-circle' style="font-size: 10px"></i> Kerah custom elastic rib</span>
      </td>
      <td class="harga extra-2 style" style="margin-left: 5%;" >(+20,000)</td>
      <td colspan="1" class="input-group extra-3">
        
      <img src="{{asset('/asset/extra/casual/C-1.png')}}" class="img-thumbnail C1 w-25" alt="">
      <img src="{{asset('/asset/extra/casual/C-2.png')}}" class="img-thumbnail C2 w-25" alt="">
      <img src="{{asset('/asset/extra/casual/C-3.png')}}"class="img-thumbnail C3 w-25" alt=""> 
      <img src="{{asset('/asset/extra/casual/C-4.png')}}" class="img-thumbnail C4 w-25" alt="">
      <img src="{{asset('/asset/extra/casual/C-5.png')}}" class="img-thumbnail C5 w-25" alt=""> 

      <img src="{{asset('/asset/extra/oneck/O-1a.png')}}" class="img-thumbnail O1 w-25" alt="">
      <img src="{{asset('/asset/extra/oneck/O-2.png')}}" class="img-thumbnail O2 w-25" alt="">







       </tr>
      
  </table>
</div> 

{{-- <div class="row mb-4 " style="text-align: left">
  <div class="col-12 mt-0 " style="padding-left: 0; margin-left: 0;"><h6 style="color: #1890fd;   text-align:left;">Casual </h6></div>
</div> 
  <div class="row text-center">
    <div class="col-4">
      <img src="{{asset('/asset/extra/casual/C-1.png')}}" class="img-thumbnail C1" alt="">
    </div>
    <div class="col-4">
      <img src="{{asset('/asset/extra/casual/C-2.png')}}" class="img-thumbnail C2" alt="">
    </div>
    <div class="col-4">
      <img src="{{asset('/asset/extra/casual/C-3.png')}}"class="img-thumbnail C3" alt=""> 
    </div>
    <div class="col-4">
      <img src="{{asset('/asset/extra/casual/C-4.png')}}" class="img-thumbnail C4" alt="">
    </div>
    <div class="col-4">
      <img src="{{asset('/asset/extra/casual/C-5.png')}}" class="img-thumbnail C5" alt=""> 
    </div> 
</div> --}}

{{-- <div class="row mb-4 " style="text-align: left">
  <div class="col-12 mt-0 " style="padding-left: 0; margin-left: 0;"><h6 style="color: #1890fd;   text-align:left;"> O-neck </h6></div>
</div> 
  <div class="row text-center">
    <div class="col-4">
      <img src="{{asset('/asset/extra/oneck/O-1a.png')}}" class="img-thumbnail O1" alt="">
    </div>
    <div class="col-4">
      <img src="{{asset('/asset/extra/oneck/O-2.png')}}" class="img-thumbnail O2" alt="">
    </div>
    <div class="col-4">
      <img src="{{asset('/asset/extra/casual/C-3.png')}}"class="img-thumbnail C3" alt=""> 
    </div>
    <div class="col-4">
      <img src="{{asset('/asset/extra/casual/C-4.png')}}" class="img-thumbnail C4" alt="">
    </div>
    <div class="col-4">
      <img src="{{asset('/asset/extra/casual/C-5.png')}}" class="img-thumbnail C5" alt=""> 
    </div>
  </div>  --}}

{{-- LOGO TIM --}}
<style>
  .int {
    width: 6%;
  }
</style>
 
<div class="row">
  <table style="width: 100%; border:10px; font-size:14px;  color:black;">
    <tr>
      <td colspan="2">
        <h4 style="color: #1890fd; ">LOGO TIM :</h4>
      </td>
    </tr>
    <tr>
      <td class="extra-1 "><span class="fw-semibold"><i class='bx bx-circle' style="font-size: 10px"></i> DTF</span></td>
      <td class="harga extra-2 style" style="margin-left: 5%;" >Free</td>
      <td colspan="1" class="input-group extra-3">

     
        {{-- <input type="text" class="form-extra" placeholder="Input Jumlah"  aria-describedby="basic-addon1" name="bbm"> --}}
        {{-- <span class="input-group-text fw-lighter" id="basic-addon1">pcs </span><small style="font-size: 12px; color:grey;" class="input-group-text fw-lighter">(utk stadium, free utk PRO dan PRO+)</small><tr> --}}
         
        </tr>
          <tr>
      <td class="extra-1 "><span class="fw-semibold"><i class='bx bx-circle' style="font-size: 10px"></i> Extra logo tim (DTF)</span></td>
      <td class="harga extra-2 " >(+30,000)</td>
      <td colspan="1" class="input-group extra-3">

        
        <style>
          .btn-hidden{
            border: 0px;
            background-color: transparent;
            /* margin-right:auto; */
            margin-left:0px;
          }
          .input-extra{
            border: 2px solid; /* Warna dan ketebalan border */
            padding: 4px; /* Ruang dalam input */
            margin-left: 4px;
            /* padding-left: 5px; */
            margin-right: 1px;
            width: 40px;
            outline: black 10px;
            background-color: transparent;
          }
        </style>
        <input type="number" id="jumlah1" value="12" class="mx-2 input-extra" min="12" readonly>
        <button onclick="tambahSatu('jumlah1')" type="button" class="btn-hidden">+</button>
        {{-- <img src="{{asset('/asset/logotim/logo - rubber on tatami.png')}}" class="img-thumbnail  w-25" alt=""> --}}

        {{-- <input type="text" class="form-extra" placeholder="Input Jumlah"  aria-describedby="basic-addon1" name="plr"> --}}
        {{-- <span class="input-group-text fw-lighter" id="basic-addon1"> </span><small style="font-size: 12px; color:grey;" class="input-group-text fw-lighter">(utk stadium, free utk PRO dan PRO+)</small> --}}
      </td>
    </tr></small>
      </td>
    </tr>
   
    <tr>
      <td class="extra-1"><span class="fw-semibold"><i class='bx bx-circle' style="font-size: 10px"></i> 3D TPU</span></td>
      <td class="harga extra-2" >(+30,000)</td>
      <td colspan="1" class="input-group extra-3">
        <input type="number" id="jumlah2" value="24" class="mx-2 input-extra" min="24" readonly>
        <button onclick="tambahSatu('jumlah2')"  type="button" class="btn-hidden">+</button>
        {{-- <input type="text" class="form-extra" placeholder="Input Jumlah"  aria-describedby="basic-addon1" name="up3d"> --}}
        <span class="input-group-text fw-lighter" id="basic-addon1"></span><small style="font-size: 12px; color:grey;" class="input-group-text fw-lighter">(utk stadium, free utk PRO dan PRO+)</small>
        <img src="{{asset('/asset/logotim/logotim/logo - tpu.png')}}" class="img-thumbnail  w-25" alt="">
      

      </td>
    </tr>

    <tr>
      <td class="extra-1"><span class="fw-semibold"> <i class='bx bx-circle' style="font-size: 10px"></i> 3D RUBBER</span></td>
      <td class="harga extra-2" >(+30,000)</td>
      <td class="input-group extra-3">
        <input type="number" id="jumlah3" value="50" class="mx-2 input-extra" min="50" readonly>
        <button onclick="tambahSatu('jumlah3')"  type="button" class="btn-hidden">+</button>
        {{-- <input type="text" class="form-extra" placeholder="Input Jumlah"  aria-describedby="basic-addon1" name="logo_celana"> --}}
        <span class="input-group-text fw-lighter" id="basic-addon1"></span><small style="font-size: 12px; color:grey;" class="input-group-text fw-lighter">(utk stadium dan PRO, free utk PRO+) </small>
      </td>
    </tr>

    <tr>
      <td class="extra-1"><span class="fw-semibold"><i class='bx bx-circle' style="font-size: 10px"></i>  Rubber on Tatammi</span></td>
      <td class="harga extra-2" >(+30,000)</td>
      <td class="input-group extra-3 ">
        <input type="number" id="jumlah4" value="100" class="mx-2 input-extra" min="100" readonly>
        <button onclick="tambahSatu('jumlah4')"  type="button" class="btn-hidden">+</button>
        {{-- <input type="text" class="form-extra" placeholder="Input Jumlah"   aria-describedby="basic-addon1" name="lengan_panjang"> --}}
        <span class="input-group-text fw-lighter" id="basic-addon1"></span><small style="font-size: 12px; color:grey;" class="input-group-text fw-lighter">(utk stadium dan PRO, free utk PRO+) </small>

        {{-- <span class="input-group-text fw-lighter" id="basic-addon1">pcs</span> --}}
      </td>
    </tr>

    <tr>
      <td class="extra-1"><span class="fw-semibold"><i class='bx bx-circle' style="font-size: 10px"></i> Silicon HD </span></td>
      <td class="harga extra-2" >(+30,000)</td>
      <td class="input-group extra-3 ">
        <input type="number" id="jumlah5" value="50" class="mx-2 input-extra" min="50" readonly>
        <button onclick="tambahSatu('jumlah5')"  type="button" class="btn-hidden">+</button>
        {{-- <input type="text" class="form-extra" placeholder="Input Jumlah"  aria-describedby="basic-addon1" name="xxl"> --}}
        {{-- <span class="input-group-text fw-lighter" id="basic-addon1"></span> --}}
        <span class="input-group-text fw-lighter" id="basic-addon1"></span><small style="font-size: 12px; color:grey;" class="input-group-text fw-lighter">(utk stadium dan PRO, free utk PRO+) </small>

      </td>
    </tr>

    <tr>
      <td class="extra-1"><span class="fw-semibold"><i class='bx bx-circle' style="font-size: 10px"></i>  Woven HD</span></td>
      <td class="harga extra-2" >(+30,000)</td>
      <td class="input-group  extra-3">
        <input type="number" id="jumlah6" value="50" class="mx-2 input-extra" min="50" readonly>
        <button onclick="tambahSatu('jumlah6')"  type="button" class="btn-hidden">+</button>
        {{-- <input type="text" class="form-extra" placeholder="Input Jumlah"  aria-describedby="basic-addon1" name="xxxl"> --}}
        {{-- <span class="input-group-text fw-lighter" id="basic-addon1"></span> --}}
        <span class="input-group-text fw-lighter" id="basic-addon1"></span><small style="font-size: 12px; color:grey;" class="input-group-text fw-lighter">(utk stadium dan PRO, free utk PRO+) </small>

      </td>
    </tr>

    <tr>
      <td class="extra-1"><span class="fw-semibold"> <i class='bx bx-circle' style="font-size: 10px"></i> Woven lokal</span></td>
      <td class="harga extra-2" >(+50,000)</td>
      <td class="input-group extra-3 ">
        <input type="number" id="jumlah7" value="12" class="mx-2 input-extra" min="12" readonly>
        <button onclick="tambahSatu('jumlah7')"  type="button" class="btn-hidden">+</button>
        {{-- <input type="text" class="form-extra" placeholder="Input Jumlah"  aria-describedby="basic-addon1" name="xxxxl"> --}}
        {{-- <span class="input-group-text fw-lighter" id="basic-addon1"></span> --}}
        <span class="input-group-text fw-lighter" id="basic-addon1"></span><small style="font-size: 12px; color:grey;" class="input-group-text fw-lighter">(utk stadium dan PRO, free utk PRO+) </small>

      </td>
      <style>
        /* Menerapkan Flexbox pada elemen <tr> */
       
    
        /* Mengatur ukuran dan gaya pada gambar */
        .img-thumbnaill {
          max-width: 100%;
          height: auto;
          margin-left: 5%;
          
        }
     
      </style>
      <tr>
        <td colspan="1">
          <div class="mx-4 px-4" ></div>
        </td>
        <td>
          <div style="margin-bottom: 30px;"></div>

          <div class="d-flex">
            <img src="{{asset('/asset/logotim/logo - DTF.png')}}" style="te" class="img-thumbnaill w-50 mr-2" alt="">
            <img src="{{asset('/asset/logotim/logo - tpu.png')}}" class="img-thumbnaill w-50" alt="">
            <img src="{{asset('/asset/logotim/logo - rubber.png')}}" class="img-thumbnaill w-50" alt="">
            <img src="{{asset('/asset/logotim/logo - rubber on tatami.png')}}" class="img-thumbnaill w-50" alt="">
            <img src="{{asset('/asset/logotim/logo - sicone HD.png')}}" class="img-thumbnaill w-50" alt="">
            <img src="{{asset('/asset/logotim/logo - woven HD.png')}}" class="img-thumbnaill w-50" alt="">
            <img src="{{asset('/asset/logotim/logo - woven.png')}}" class="img-thumbnaill w-50" alt="">

          </div>
        </td>
      </tr>
    </tr>
    <tr>
      <td>
        <div style="margin-bottom: 30px;"></div>
      </td>
    </tr>
    
  </table>
</div>

{{-- SPONSOR DEPAN --}}

  <div class="row">
    <table style="width: 100%; border:10px; font-size:14px;  color:black;">
      <tr>
        <td colspan="2">
          <h4 style="color: #1890fd; ">SPONSOR DEPAN :</h4>
        </td>
      </tr>
      <tr>
        <td class="extra-1"><span class="fw-semibold"><i class='bx bx-circle' style="font-size: 10px"></i> Printing</span></td>
        <td class="harga extra-2 style" style="margin-left: 5%;" >Free</td>
        <td colspan="1" class="input-group extra-3">
          {{-- <input type="text" class="form-extra" placeholder="Input Jumlah"  aria-describedby="basic-addon1" name="bbm"> --}}
          <span class="input-group-text fw-lighter" id="basic-addon1"></span><small style="font-size: 12px; color:grey;" class="input-group-text fw-lighter">(utk kategori HALF - PRINT dan FULL - PRINT)</small><tr>
           
          </tr>
            <tr>
        <td class="extra-1"><span class="fw-semibold"><i class='bx bx-circle' style="font-size: 10px"></i> Tulisan poliflek 1 warna 1 baris</span></td>
        <td class="harga extra-2" >Free</td>
        <td colspan="1" class="input-group extra-3">
          {{-- <div class="container">
            <div class="input-group">
              <button class="add-button" onclick="increment()">-</button>
             
              <input type="text" class="input-box" id="quantity" value="12" readonly>
              <button class="add-button" onclick="increment()">+</button>
            </div>
          </div> --}}
          {{-- <input type="number" id="jumlah" value="12" class="int" min="12" readonly>
          <button onclick="tambahSatu()">+</button> --}}
          {{-- <input type="text" class="form-extra" placeholder="Input Jumlah"  aria-describedby="basic-addon1" name="plr"> --}}
          {{-- <span class="input-group-text fw-lighter" id="basic-addon1"> </span><small style="font-size: 12px; color:grey;" class="input-group-text fw-lighter">(utk stadium, free utk PRO dan PRO+)</small> --}}
        </td>
      </tr></small>
        </td>
      </tr>
     
      <tr>
        <td class="extra-1"><span class="fw-semibold"><i class='bx bx-circle' style="font-size: 10px"></i> Extra Tulisan poliflek 1 warna 1 baris</span></td>
        <td class="harga extra-2" >(+10,000)</td>
        <td colspan="1" class="input-group extra-3">
          {{-- <input type="number" id="jumlah" value="24" class="int" min="24" readonly>
          <button onclick="tambahSatu()">+</button> --}}
          {{-- <input type="text" class="form-extra" placeholder="Input Jumlah"  aria-describedby="basic-addon1" name="up3d"> --}}
          {{-- <span class="input-group-text fw-lighter" id="basic-addon1"></span><small style="font-size: 12px; color:grey;" class="input-group-text fw-lighter">(utk stadium, free utk PRO dan PRO+)</small> --}}
        </td>
      </tr>
  
      <tr>
        <td class="extra-1"><span class="fw-semibold"> <i class='bx bx-circle' style="font-size: 10px"></i> Logo + Tulisan poliflek 1 warna</span></td>
        <td class="harga extra-2" >(+35,000)</td>
        <td class="input-group extra-3">
  
          {{-- <input type="text" class="form-extra" placeholder="Input Jumlah"  aria-describedby="basic-addon1" name="logo_celana"> --}}
          {{-- <span class="input-group-text fw-lighter" id="basic-addon1"></span><small style="font-size: 12px; color:grey;" class="input-group-text fw-lighter">(utk stadium dan PRO, free utk PRO+) </small> --}}
        </td>
      </tr>
  
      <tr>
        <td class="extra-1"><span class="fw-semibold"><i class='bx bx-circle' style="font-size: 10px"></i>  Extra Tulisan poliflek >1 warna</span></td>
        <td class="harga extra-2" >(+45,000)</td>
        <td class="input-group extra-3 ">
        
          {{-- <input type="text" class="form-extra" placeholder="Input Jumlah"   aria-describedby="basic-addon1" name="lengan_panjang"> --}}
          {{-- <span class="input-group-text fw-lighter" id="basic-addon1"></span><small style="font-size: 12px; color:grey;" class="input-group-text fw-lighter">(utk stadium dan PRO, free utk PRO+) </small> --}}
  
          {{-- <span class="input-group-text fw-lighter" id="basic-addon1">pcs</span> --}}
        </td>
      </tr>
      <tr>
        <td>

          <div style="margin-bottom: 30px;"></div>

        </td>
      </tr>
    </table>
    </div>
  {{-- lengan --}}

  <div class="row">
    <table style="width: 100%; border:10px; font-size:14px;  color:black;">
      <tr>
        <td colspan="2">
          <h4 style="color: #1890fd; ">LENGAN:</h4>
        </td>
      </tr>
      <tr>
        <td class="extra-1"><span class="fw-semibold"><i class='bx bx-circle' style="font-size: 10px"></i> Extra logo DTF</span></td>
        <td class="harga extra-2 style" style="margin-left: 5%;" >(+15,000)</td>
        <td colspan="1" class="input-group extra-3">
          {{-- <input type="text" class="form-extra" placeholder="Input Jumlah"  aria-describedby="basic-addon1" name="bbm"> --}}
          {{-- <span class="input-group-text fw-lighter" id="basic-addon1"></span><small style="font-size: 12px; color:grey;" class="input-group-text fw-lighter">(utk kategori HALF - PRINT dan FULL - PRINT)</small><tr> --}}
           
          </tr>
            <tr>
        <td class="extra-1"><span class="fw-semibold"><i class='bx bx-circle' style="font-size: 10px"></i> Extra Tulisan 1 baris</span></td>
        <td class="harga extra-2" >(+10,000)</td>
        <td colspan="1" class="input-group extra-3">
        </td>
      </tr></small>
        </td>
      </tr>
     
    </table>
    </div>


{{-- ORDER --}}





<script>
  function tambahSatu(idInput) {
    var inputJumlah = document.getElementById(idInput);
    var nilaiJumlah = parseInt(inputJumlah.value);
    
    // Tambah 1 ke nilai jumlah
    nilaiJumlah++;

    // Update nilai input jumlah
    inputJumlah.value = nilaiJumlah;
  }
</script>
 <!-- Modal -->
 <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{ route('quotation') }}" method="POST">
        @csrf
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Masukkan Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <label for="" class="subtitle">Nama Pelanggan</label>
        <input type="text" class="form-control" name="nama_pemesanan">
        <label for="" class="subtitle">Kontak (Whatsapp)</label>
        <input type="text" class="form-control" name="kontak"> 
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>
{{-- end modal --}}

@endsection