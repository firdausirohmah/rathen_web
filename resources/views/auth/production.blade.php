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
      <a class="nav-link active" id="approval-tab" data-bs-toggle="tab" href="#approval" role="tab" aria-controls="approval" aria-selected="true">Approval</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link " id="production-tab" data-bs-toggle="tab" href="#production" role="tab" aria-controls="production" aria-selected="false">Production</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link " id="progress-tab" data-bs-toggle="tab" href="#progress" role="tab" aria-controls="progress" aria-selected="false">Progress Results</a>
    </li>
  </ul>

  <div class="tab-content">
    <!-- Invoice Tab -->
    <div class="tab-pane fade " id="production" role="tabpanel" aria-labelledby="production-tab">
      <div class="card card-tab mb-4">
        <div class="card-header pb-0">
          <h6>Production</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0 display" id="view-production" style="width:100%">
              <thead>
                <tr>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id Production
                  </th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name
                  </th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Address
                  </th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">WhatsApp Number</th>
                  <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">Order</th>
                  <!-- u. kategori dan kualitas -->
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Final
                    Payment</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Approve Date</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Progress
                  </th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action
                  </th>


                  <!-- <th class="text-secondary opacity-7"></th> -->
                </tr>
              </thead>


              <tbody>
                @foreach ($order as $item)

                @if($item->status_order == 'produksi')
                <tr>
                  <td>
                    {{ $item->kd_step }}
                  </td>
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
                    Rp. <?= number_format($item->biaya_pelunasan, 0, ','); ?>
                  </td>
                  
                  <td>
                    @php
                    $utcTimestamp = $item->updated_at_production;

                    $dateUtc = new DateTime($utcTimestamp, new DateTimeZone('UTC'));

                    $dateUtc->setTimezone(new DateTimeZone('Asia/Jakarta'));

                    $jakartaTime = $dateUtc->format('Y-m-d / H:i:s');
                    @endphp
                    {{ $jakartaTime}}
                  </td>
                  
                  {{--
                  @php 
                  $progress = (($item->is_shipping_payment+$item->is_final_concept+$item->is_order_quantity+$item->is_production_data+$item->is_polifek_quality+$item->is_stitching_neatness+$item->is_packaging+$item->is_delivery+$item->is_logo)/9)*100;


                  @endphp
                  --}}

                  <td class="align-middle text-center text-sm">
                    {{--
                    @php
                        $progress_bulat = round($progress);
                        if ($progress_bulat >= 0 && $progress_bulat < 100) {
                            echo '<span class="badge bg-warning">in progress</span>';
                        } elseif ($progress_bulat >= 100) {
                            echo '<span class="badge bg-success">done</span>';
                        }
                    @endphp
                    --}}
                  </td>
                  <td class="align-middle text-sm">
                    <div class="d-flex">
                      @php
                      $link = 'production';
                      $kode = $item->kd_step2;
                      $link_kode = $link . '/' . $kode;
                      $baseUrl = URL::to('/');
                      @endphp
                      <a href="{{ $baseUrl }}/{{ $link_kode }}" target="_blank" class="btn btn-primary btn-action me-1"><i class="fas fa-eye" aria-hidden="true"></i></a>

                      <!-- <a href="{{ $baseUrl }}/{{ $link_kode }}" target="_blank" class="btn btn-primary btn-action me-1"><i class="fas fa-pen" aria-hidden="true"></i></a> -->
                      <a data-bs-toggle="modal" data-bs-target="#editProduction_{{$item->kd_step2}}" class="btn btn-primary btn-action me-1"><i class="fa fa-pen" aria-hidden="true"></i></a>

                      @foreach ($order as $item)
                      <!-- Modal -->
                      <div class="modal fade" id="editProduction_{{$item->kd_step2}}" tabindex="-1" aria-labelledby="editProductionLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <form action="{{route('update_progress')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="kd_step" value="{{$item->kd_step2}}">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="editProductionLabel">Progres Production</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body" style="height:30rem;overflow-y:scroll">
  
                                <div class="mb-3">
                                  <label for="biaya_pengiriman" class="form-label">Shipping Payment:</label>
                                  <input type="number" class="form-control" id="biaya_pengiriman_{{$item->id}}"  name="biaya_pengiriman" placeholder="Enter Shipping Payment" oninput="shipping_rate({{$item->id}})"  value="{{(isset($item->shipping_payment)?$item->shipping_payment:' ')}}">
                                </div>
  
                                <!-- Final Payment => biaya_pelunasan += biaya_pengiriman -->
                                <div class="mb-3">
                                  <label for="biaya_pelunasan" class="form-label">Final Payment:</label>
                                  <input type="number" class="form-control" id="biaya_pelunasan_{{$item->id}}"  name="biaya_akhir" value="{{($item->biaya_pelunasan+$item->shipping_payment)}}">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="final_payment_{{$item->id}}" name="is_shipping_payment" onchange="final_payment({{$item->id}});"  {{ $item->is_shipping_payment ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist1">
                                      Checklist Final Payment
                                    </label>
                                  </div>
                                </div>
                                <input type="hidden" name="pelunasan_before" id="pelunasan_before_{{$item->id}}" value="{{$item->biaya_pelunasan}}">
                                <!-- Remaining payment must be 0, if checklist was checked, mean LUNAS -->
                                <div class="mb-3">
                                  <label for="pelunasan" class="form-label">Remaining Payment:</label>
                                  <input type="text" class="form-control" id="pelunasan_{{$item->id}}"  name="biaya_pelunasan" value="{{ ($item->is_shipping_payment ?'0': $item->biaya_pelunasan) }}" disabled >
                                </div>
                               
                                <label for="statusChecklist" class="form-label h6 mb-3">Progress:</label>

                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="3d_design" id="statusChecklist1" name="3d_design" {{ $item->is_final_concept ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist1">
                                      3D Design
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="3d_design">
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="dp_produksi" id="statusChecklist1" name="dp_produksi" {{ $item->is_final_concept ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist1">
                                      DP Produksi
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="dp_produksi">
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="form_order" id="statusChecklist1" name="form_order" {{ $item->is_final_concept ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist1">
                                      Form Order
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="form_order">
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="pesan_sublim" id="statusChecklist1" name="pesan_sublim" {{ $item->is_final_concept ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist1">
                                      Pesan Sublim
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="pesan_sublim">
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="pesan_bahan" id="statusChecklist1" name="pesan_bahan" {{ $item->is_final_concept ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist1">
                                      Pesan Bahan
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="pesan_bahan">
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="pesan_logo" id="statusChecklist1" name="pesan_logo" {{ $item->is_final_concept ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist1">
                                      Pesan Logo
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="pesan_logo">
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="pesan_poliflek" id="statusChecklist1" name="pesan_poliflek" {{ $item->is_final_concept ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist1">
                                      Pesan Poliflek
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="pesan_poliflek">
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="sublim_ready" id="statusChecklist1" name="sublim_ready" {{ $item->is_final_concept ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist1">
                                      Sublim Ready
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="sublim_ready">
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="bahan_ready" id="statusChecklist1" name="bahan_ready" {{ $item->is_final_concept ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist1">
                                      Bahan Ready
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="bahan_ready">
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="logo_ready" id="statusChecklist1" name="logo_ready" {{ $item->is_final_concept ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist1">
                                      Logo Ready
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="logo_ready">
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="poliflek_ready" id="statusChecklist1" name="poliflek_ready" {{ $item->is_final_concept ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist1">
                                      Poliflek Ready
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="poliflek_ready">
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="proses_jahit" id="statusChecklist1" name="proses_jahit" {{ $item->is_final_concept ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist1">
                                      Proses Jahit
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="proses_jahit">
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="cut_nameset" id="statusChecklist1" name="cut_nameset" {{ $item->is_final_concept ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist1">
                                      Cutting Nameset
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="cut_nameset">
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="qc_awal" id="statusChecklist1" name="qc_awal" {{ $item->is_final_concept ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist1">
                                      QC Awal
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="qc_awal">
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="nameset_ready" id="statusChecklist1" name="nameset_ready" {{ $item->is_final_concept ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist1">
                                      Nameset Ready
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="nameset_ready">
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="press" id="statusChecklist1" name="press" {{ $item->is_final_concept ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist1">
                                      Press
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="press">
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="take_photo" id="statusChecklist1" name="take_photo" {{ $item->is_final_concept ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist1">
                                      Take Photo / video
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="take_photo">
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="qc_akhir" id="statusChecklist1" name="qc_akhir" {{ $item->is_final_concept ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist1">
                                      QC Akhir
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="qc_akhir">
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="siap_kirim" id="statusChecklist1" name="siap_kirim" {{ $item->is_final_concept ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist1">
                                      Siap Kirim
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="siap_kirim">
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="pelunasan" id="statusChecklist1" name="pelunasan" {{ $item->is_final_concept ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist1">
                                      Bayar Pelunasan
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="pelunasan">
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="delivery" id="statusChecklist1" name="delivery" {{ $item->is_final_concept ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist1">
                                      Pesanan dikirim/diambil
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="delivery">
                                </div>
                                
                                <!-- <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="is_final_concept" id="statusChecklist1" name="is_final_concept" {{ $item->is_final_concept ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist1">
                                      Konsep Akhir
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="final_concept">
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="statusChecklist2" name="is_order_quantity" {{ $item->is_order_quantity ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist2">
                                      Jumlah Pesanan
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="order_quantity">
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox"  id="statusChecklist2" name="is_production_data" {{ $item->is_production_data ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist2">
                                      Data Produksi
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="production_data">
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox"  id="statusChecklist2" name="is_logo" {{ $item->is_logo ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist2">
                                      Jenis Logo
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="logo">
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="statusChecklist2" name="is_polifek_quality" {{ $item->is_polifek_quality ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist2" >
                                      Kualitas Polifek
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="polifek_quality">
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="statusChecklist2" name="is_stitching_neatness" {{ $item->is_stitching_neatness ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist2">
                                      Kerapihan Jahitan
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="stitching_neatness">
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox"  id="statusChecklist2" name="is_packaging" {{ $item->is_packaging ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist2">
                                      Packaging
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="packaging">
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox"  id="statusChecklist2" name="is_delivery" {{ $item->is_delivery ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist2">
                                      Finishing, Deliver/ Pickup
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="delivery">
                                </div> -->
  
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" value="Submit" id="submit_biaya_btn">Submit</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                      @endforeach

                    </div>
                  </td>
                  
                </tr>
                @endif
                @endforeach

              </tbody>

            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane fade " id="progress" role="tabpanel" aria-labelledby="progress-tab">
      <div class="card card-tab mb-4">
        <div class="card-header pb-0">
          <h6>Progress Results</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0 display" id="view-progress" style="width:100%">
              <thead>
                <tr>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID Production
                  </th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name
                  </th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Shipping Payment</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Final Payment</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Approve Date</th>
                  <!-- u. kategori dan kualitas -->
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Progress
                  </th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action
                  </th>
                  <!-- <th class="text-secondary opacity-7"></th> -->
                </tr>
              </thead>

              <tbody>
                @foreach ($order as $item)

                @if($item->status_order == 'produksi')
                <tr>
                  <td>
                    {{ $item->kd_step }}
                  </td>
                  <td>
                    {{ $item->nama_pemesanan }}
                  </td>
                  <td>
                    {{ $item->shipping_payment }}
                  </td>
                  <td>
                    Rp. <?= number_format($item->biaya_pelunasan, 0, ','); ?>
                  </td>
                  
                  <td>
                    @php
                    $utcTimestamp = $item->updated_at_production;

                    $dateUtc = new DateTime($utcTimestamp, new DateTimeZone('UTC'));

                    $dateUtc->setTimezone(new DateTimeZone('Asia/Jakarta'));

                    $jakartaTime = $dateUtc->format('Y-m-d / H:i:s');
                    @endphp
                    {{ $jakartaTime}}
                  </td>
                  
                  {{--
                  @php 
                  $progress = (($item->is_shipping_payment+$item->is_final_concept+$item->is_order_quantity+$item->is_production_data+$item->is_polifek_quality+$item->is_stitching_neatness+$item->is_packaging+$item->is_delivery+$item->is_logo)/9)*100;


                  @endphp
                  --}}

                  <td class="align-middle text-center text-sm">
                    <div class="progress" style ="height:25px">
                      @if(isset($progress))
                      <div class="progress-bar" role="progressbar" style="width: {{$progress}}%; height:30px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                      @endif
                          {{--
                            @php
                            $progress_bulat = round($progress);
                          @endphp
                          {{$progress_bulat}}%
                          --}}
                      </div>
                    </div>
                  </td>
                  <td class="align-middle text-sm text-center">
                    <div class="d-flex">
                      @php
                      $link = 'progress';
                      $kode = $item->kd_step2;
                      $link_kode = $link . '/' . $kode;
                      $baseUrl = URL::to('/');
                      @endphp
                      <a href="{{ $baseUrl }}/{{ $link_kode }}" target="_blank" class="btn btn-primary btn-action me-1"><i class="fas fa-eye" aria-hidden="true"></i></a>

                    </div>
                  </td>
                </tr>
                @endif
                @endforeach

              </tbody>

            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Quotation Tab -->
    <div class="tab-pane fade show active" id="approval" role="tabpanel" aria-labelledby="approval-tab">
      <div class="card card-tab mb-4">
        <div class="card-header pb-0">
          <h6>Approval</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0 display" id="view-approval" style="width:100%">
              <thead>
                <tr>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name
                  </th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Whatsapp Number
                  </th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Process</th>
                  <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">Address</th>
                  <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">Order Date</th>
                  <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                  <!-- u. kategori dan kualitas -->
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
                    @php
                    $phoneNumber = $item->kontak;
                    // Remove leading '+' and '62' from the phone number
                    $cleanedPhoneNumber = ltrim($phoneNumber, '+');
                    @endphp
                    <a href="https://api.whatsapp.com/send/?phone={{ $cleanedPhoneNumber }}&text&type=phone_number&app_absent=0" target="_blank">{{ $phoneNumber }}</a>
                  </td>
                  <td>
                    @php
                    $processed = $item->status_order == 'produksi';
                    @endphp
                    @if($processed)
                    <span class="text-dark">Approved</span>
                    @else
                    <form action="{{ url('/approval/action') }}" method="POST">
                      @csrf
                      <input type="hidden" class="input txt" value="{{ $item->kd_step2 }}" name="kd_step" readonly />
                      <button class="btn btn-primary btn-sm m-0">Approve <i class="ps-1 fa fa-sign-out" aria-hidden="true"></i></button>
                    </form>
                    @endif
                  </td>
                  <td>
                    {{ $item->domisili }}
                  </td>
                  <td class="text-center">
                    @php
                    $utcTimestamp = $item->created_at;

                    $dateUtc = new DateTime($utcTimestamp, new DateTimeZone('UTC'));

                    $dateUtc->setTimezone(new DateTimeZone('Asia/Jakarta'));

                    $jakartaTime = $dateUtc->format('Y-m-d / H:i:s');
                    @endphp
                    {{ $jakartaTime}}
                  </td>
                  <td class="text-center">
                    <div class="d-flex">
                      @php
                      $link = 'production-invoice';
                      $kode = $item->kd_step2;
                      $link_kode = $link . '/' . $kode;
                      $baseUrl = URL::to('/');
                      @endphp
                      <a href="{{ $baseUrl }}/{{ $link_kode }}" target="_blank" class="btn btn-primary btn-action me-1"><i class="fas fa-pen" aria-hidden="true"></i></a>

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
  function shipping_rate(id){
    console.log('ini id ke-'+id);
    var biaya_pengiriman = document.getElementById(('biaya_pengiriman_'+id));
    var pelunasan_before = document.getElementById(('pelunasan_before_'+id));
    var biaya_pelunasan = document.getElementById(('biaya_pelunasan_'+id));
    var pelunasan = document.getElementById(('pelunasan_'+id)); 
    var final_payment = (+biaya_pengiriman.value) + (+pelunasan_before.value);
    biaya_pelunasan.value = final_payment;
    pelunasan.value = final_payment;

    console.log(final_payment);

}
function final_payment(id){
    var biaya_pelunasan = document.getElementById(('biaya_pelunasan_'+id));
    var final_payment = document.getElementById(('final_payment_'+id));
    var pelunasan = document.getElementById(('pelunasan_'+id)); 
    if(final_payment.checked){
       
        pelunasan.value = '0';
    }

}
</script>


@endsection