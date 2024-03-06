@extends('layout.admin')
@section('content')

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="{{asset('asset/css/tables.css')}}">
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>

<script src="{{asset('asset/js/tables.js')}}"></script>
<!-- End Navbar -->
<div class="container-fluid py-4">
  <ul class="nav nav-tabs" id="myTabs" role="tablist">
    <li class="nav-item" role="presentation">
      <a class="nav-link active" id="quotation-tab" data-bs-toggle="tab" href="#quotation" role="tab" aria-controls="quotation" aria-selected="true">Quotation</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="invoice-tab" data-bs-toggle="tab" href="#invoice" role="tab" aria-controls="invoice" aria-selected="false">Invoice</a>
    </li>
  </ul>

  <div class="tab-content">
    <!-- Invoice Tab -->
    <div class="tab-pane fade" id="invoice" role="tabpanel" aria-labelledby="invoice-tab">
      <div class="card card-tab mb-4">
        <div class="card-header pb-0 d-flex">
          <h6>Invoice</h6>
          <a data-bs-toggle="modal" data-bs-target="#invoiceCreate" class="btn btn-primary ms-auto">Create <i class="ms-1 fa fa-plus-circle"></i></a>

          <!-- Modal -->
          <div class="modal fade" id="invoiceCreate" tabindex="-1" aria-labelledby="invoiceCreateLabel" aria-hidden="true">
            <div class="modal-dialog">
              <form action="{{route('create_invoice')}}" method="post">
                @csrf
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="invoiceCreateLabel">Invoice Input</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                  <div class="mb-3">
                    <label for="name" class="form-label">Nama Pemesan:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                    <label for="team_name" class="form-label">Nama Team:</label>
                    <input type="text" class="form-control" id="team_name" name="team_name" placeholder="Enter Team Name">
                    <label for="kontak" class="form-label">Kontak:</label>
                    <input type="text" class="form-control" id="kontak" name="kontak" placeholder="Enter Contact">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="">
                    <label for="alamat" class="form-label">Alamat:</label>
                   <textarea name="alamat" id="alamat" class="form-control"></textarea>
                    <label for="product" class="form-label">Product:</label>
                    <select class="form-select form-control" aria-label="Default select example" name="product" id="product">
                      <option selected>Select Order Product</option>
                      <option value="non-print">Jersey Stadiun Version - Non Print</option>
                      <option value="half-print">Jersey Stadiun Version - Half Print</option>
                      <option value="full-print">Jersey Stadiun Version - Full Print</option>
                      <option value="pro">Jersey Pro Version</option>
                      <option value="pro-plus">Jersey Pro Plus Version</option>
                      <option value="jacket-anthem">Jacket Anthem Pro</option>
                    </select>
                    <label for="qty" class="form-label">Quantity:</label>
                    <input type="number" class="form-control" id="qty" name="qty" placeholder="Enter Quantity" onchange="qtyubah()">
                    <label for="total_harga" class="form-label">Total Harga:</label>
                    <input type="text" class="form-control" id="total_harga"  name="total_harga" readonly>
                    <label for="design_create" class="form-label">Design Payment:</label>
                    <input type="text" class="form-control" id="design_create" name="biaya_desain" placeholder="Enter Design Payment" >
                    <label for="dp_create" class="form-label">Initial Payment (DP):</label>
                    <input type="text" class="form-control" id="dp_create" name="biaya_dp" placeholder="Enter Initial Payment">
                    <label for="pelunasan_create" class="form-label">Final Payment:</label>
                    <input type="text" class="form-control" id="pelunasan_create"  name="biaya_pelunasan" readonly>
                  </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" value="Submit">Submit</button>
                </div>
              </div>
              </form>
            </div>
          </div>
          <!-- end modal -->

        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0 display" id="view-invoice" style="width:100%">
              <thead>
                <tr>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name
                  </th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Address
                  </th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">WhatsApp Number</th>
                  <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">Order</th>
                  <!-- u. kategori dan kualitas -->
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total
                    Price</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Invoice Link
                  </th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created at
                  </th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action
                  </th>
                  <!-- <th class="text-secondary opacity-7"></th> -->
                </tr>
              </thead>
              <tbody>
                @foreach ($order as $item)
                <tr>
                  <td>
                    {{ $item->nama_pemesanan }}
                  </td>
                  <td>
                    {{ $item->domisili }}
                  </td>
                  <td>
                    @php
                    $phoneNumber = $item->kontak;
                    // Remove leading '+' and '62' from the phone number
                    $cleanedPhoneNumber = ltrim($phoneNumber, '+');
                    @endphp
                    <a href="https://api.whatsapp.com/send/?phone={{ $cleanedPhoneNumber }}&text&type=phone_number&app_absent=0" target="_blank">{{ $phoneNumber }}</a>
                  </td>
                  <td>
                    {{ $item->tipe_kualitas }} : {{ $item->kategori_harga }}
                  </td>
                  <td>
                    Rp. <?= number_format($item->total_harga, 0, ','); ?>

                  </td>

                  <td>
                    @php
                    $link = 'invoice';
                    $kode = $item->kd_step2;
                    $link_kode = $link . '/' . $kode;
                    $baseUrl = URL::to('/');
                    @endphp
                    <a href="{{ $baseUrl }}/{{ $link_kode }}" target="_blank">{{ $baseUrl }}/{{ $link_kode }}</a>
                  </td>
                  <td class="align-middle text-center text-sm"> {{date("d-m-Y", strtotime($item->created_at))}}
                    {{-- <span class="badge badge-sm bg-gradient-warning">{{ $item->status }}</span> --}}
                  </td>
                  <td class="align-middle text-center text-sm">
                    <div class="d-flex">
                      @php
                      $link = 'production';
                      $kode = $item->kd_step2;
                      $link_kode = $link . '/' . $kode;
                      $baseUrl = URL::to('/');
                      @endphp
                      <a href="{{ $baseUrl }}/{{ $link_kode }}" target="_blank" class="btn btn-primary btn-action me-1"><i class="fas fa-pen" aria-hidden="true"></i></a>
                      <form action="{{ route('data.destroyInv', $item->kd_step2) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger m-0 btn-action"><i class="fa fa-trash" aria-hidden="true"></i></button>
                      </form>
                    </div>
                  </td>
                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Quotation Tab -->
    <div class="tab-pane fade show active" id="quotation" role="tabpanel" aria-labelledby="quotation-tab">
      <div class="card card-tab mb-4">
        <div class="card-header pb-0">
          <h6>Quotation</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0 display" id="view-quotation" style="width:100%">
              <thead>
                <tr>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Whatsapp Number</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Process</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                  <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">Address</th>
                  <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">Order Date</th>
                  <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                  <!-- u. kategori dan kualitas -->
                  <!-- <th class="text-secondary opacity-7"></th> -->
                </tr>
              </thead>
              <tbody>
                @foreach ($quo as $item)
                <tr>
                  <td>
                    {{ $item->nama_pelanggan }}
                  </td>
                  <td>
                    @php
                    $phoneNumber = $item->no_hp;
                    // Remove leading '+' and '62' from the phone number
                    $cleanedPhoneNumber = ltrim($phoneNumber, '+');
                    @endphp
                    <a href="https://api.whatsapp.com/send/?phone={{ $cleanedPhoneNumber }}&text&type=phone_number&app_absent=0" target="_blank">{{ $phoneNumber }}</a>

                  </td>
                  <td>
                    @php
                    $processed = $order->contains('kd_step2', $item->kd_step);
                    @endphp
                    @if($processed)
                    <span class="text-dark">Clicked</span>
                    @else
                    <form action="{{ url('/form-1/action/'.$item->kd_step) }}" method="POST" id="submit_biaya_{{ $item->id  }}">
                      @csrf
                      <input type="hidden" class="input txt" value="{{ $item->kd_step }}" name="kd_step" readonly />
                      <input type="hidden" class="input txt" value="{{ $item->nama_pelanggan }}" name="np" readonly />
                      <input type="hidden" class="input txt" value="{{ $item->alamat }}" name="dom" readonly />
                      <input type="hidden" class="input txt" value="{{ $item->no_hp }}" name="nw" readonly />

                      <input type="hidden" class="input txt" value="{{ $item->product }}" name="product" readonly />
                      <input type="hidden" class="input txt" value="{{ $item->tipe_kualitas }}" name="kualitas" readonly />
                      <input type="hidden" class="input txt" value="{{ $item->kategori_harga }}" name="kategori" readonly />
                      <input type="hidden" class="input txt" value="{{ $item->harga }}" name="harga" readonly />
                      <input type="hidden" class="input txt" value="{{ $item->total_harga }}" name="total_harga" data="{{$item->id}}" readonly />
                      <input type="hidden" class="input txt" value="{{ $item->qty }}" name="jp" readonly />

                      <input type="hidden" class="input txt" value="{{ $item->kerah_kancing }}" name="kerah_kancing" readonly />
                      <input type="hidden" class="input txt" value="{{ $item->bb_melengkung }}" name="bbm" readonly />
                      <input type="hidden" class="input txt" value="{{ $item->lengan_raglan }}" name="plr" readonly />
                      <input type="hidden" class="input txt" value="{{ $item->logo_3d }}" name="up3d" readonly />
                      <!-- <input type="hidden" class="input txt" value="{{ $item->qty }}" name="logo_celana" readonly/> -->
                      <input type="hidden" class="input txt" value="{{ $item->lengan_panjang }}" name="lengan_panjang" readonly />
                      <input type="hidden" class="input txt" value="{{ $item->s2xl }}" name="xxl" readonly />
                      <input type="hidden" class="input txt" value="{{ $item->s3xl }}" name="xxxl" readonly />
                      <input type="hidden" class="input txt" value="{{ $item->s4xl }}" name="xxxxl" readonly />
                      <input type="hidden" class="input txt" value="{{ $item->celana_pro }}" name="celana_panjang" readonly />
                      <input type="hidden" class="input txt" value="{{ $item->celana_printing }}" name="celana_printing" readonly />
                      <input type="hidden" class="input txt" value="{{ $item->kaoskaki }}" name="kaoskaki" readonly />

                      <input type="hidden" class="input txt" value="{{ $item->bahan_embos }}" name="bahan_embos" readonly />
                      <input type="hidden" class="input txt" value="{{ $item->kerah_rib }}" name="kerah_rib" readonly />
                      <input type="hidden" class="input txt" value="{{ $item->tangan_rib }}" name="tangan_rib" readonly />

                      <a data-bs-toggle="modal" data-bs-target="#invoiceModal_{{$item->kd_step}}" data-kode="{{ $item->id }}" onclick="test({{ $item->id  }})" class="btn btn-primary btn-sm m-0">Invoice <i class="ps-1 fa fa-sign-out" aria-hidden="true"></i></a>

                      <!-- Modal -->
                      <div class="modal fade" id="invoiceModal_{{$item->kd_step}}" tabindex="-1" aria-labelledby="invoiceModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="invoiceModalLabel">Invoice Input</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                              <div class="mb-3">
                                <label for="design" class="form-label">Design Payment:</label>
                                <input type="text" class="form-control" id="design_{{$item->id}}" oninput="formatRupiah(this);calculatePelunasan();" name="biaya_desain" data="{{$item->id}}" placeholder="Enter Design Payment">
                                <label for="dp" class="form-label">Initial Payment (DP):</label>
                                <input type="text" class="form-control" id="dp_{{$item->id}}" oninput="formatRupiah(this);calculatePelunasan();" name="biaya_dp" data="{{$item->id}}" placeholder="Enter Initial Payment">
                                <label for="pelunasan" class="form-label">Final Payment:</label>
                                <input type="text" class="form-control" id="pelunasan_{{$item->id}}" oninput="formatRupiah(this)" name="biaya_pelunasan" readonly>
                              </div>

                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary" value="Submit" id="submit_biaya_btn">Submit</button>
                            </div>
                          </div>
                        </div>
                      </div>

                    </form>
                    @endif
                  </td>
                  <td>
                    {{ $item->email }}
                  </td>
                  <td>
                    {{ $item->alamat }}
                  </td>
                  <td class="text-center">
                    {{ date("d-m-Y", strtotime($item->created_at))}}
                  </td>
                  <td class="text-center">
                    <div class="d-flex">
                      @php
                      $link = 'form-1/quotation';
                      $kode = $item->kd_step;
                      $link_kode = $link . '/' . $kode;
                      $baseUrl = URL::to('/');
                      @endphp
                      <a href="{{ $baseUrl }}/{{ $link_kode }}" target="_blank" class="btn btn-primary btn-action me-1"><i class="fas fa-eye" aria-hidden="true"></i></a>
                      <form action="{{ route('data.destroyQuo', $item->kd_quotation) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-action m-0"><i class="fa fa-trash" aria-hidden="true"></i></button>
                      </form>
                    </div>
                  </td>

                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  var total_harga =  document.getElementById("total_harga");
  var design_create =  document.getElementById("design_create");
  var dp_create =  document.getElementById("dp_create");
  var pelunasan_create =  document.getElementById("pelunasan_create");
  var harge = null;
  design_create.addEventListener("change", function(){
    pelunasan_create.value = (+pelunasan_create.value) - (+design_create.value);
  });
  dp_create.addEventListener("change", function(){
    pelunasan_create.value = (+pelunasan_create.value) - (+dp_create.value);
  });
  document.getElementById("product").addEventListener("change", function() {

    var xhr = new XMLHttpRequest(); // Membuat objek XMLHttpRequest
    
    
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) { // Periksa jika permintaan selesai
        if (xhr.status === 200) { // Periksa jika permintaan berhasil
          var data =  JSON.parse(xhr.responseText);
          console.log(data);
          harga = +(data.harga);

          document.getElementById("qty").value = data.min_order; // Tampilkan respons dari server
          total_harga.value = (+(data.harga))*(+(data.min_order)); // Tampilkan respons dari server
          pelunasan_create.value = (+(data.harga))*(+(data.min_order)); // Tampilkan respons dari server
        } else {
          alert('Terjadi kesalahan: ' + xhr.status); // Tampilkan pesan kesalahan jika permintaan gagal
        }
      }
    };
    
    var kd_part = this.value;
    
    xhr.open("GET", "/api/get-harga/"+kd_part, true); // Konfigurasi permintaan GET ke data.php
    xhr.send(); // Kir
  });
  function qtyubah(){
    var qty = document.getElementById('qty');
    total_harga.value = +(qty.value) * harga;
    pelunasan_create.value = +(qty.value) * harga;


  }
</script>
@endsection