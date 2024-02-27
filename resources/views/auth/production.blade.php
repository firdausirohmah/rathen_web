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
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Final
                    Payment</th>
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
                  @php 
                  $progress = (($item->is_shipping_payment+$item->is_final_concept+$item->is_order_quantity+$item->is_production_data+$item->is_polifek_quality+$item->is_stitching_neatness+$item->is_packaging+$item->is_delivery+$item->is_logo)/7)*100;


                  @endphp

                  <td class="align-middle text-center text-sm">
                    <div class="progress" style ="height:25px">
                      <div class="progress-bar" role="progressbar" style="width: {{$progress}}%; height:30px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                          @php
                            $progress_bulat = round($progress);
                          @endphp
                          {{$progress_bulat}}%
                      </div>
                    </div>
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
                              <div class="modal-body">
  
                                <div class="mb-3">
                                  <label for="biaya_pengiriman" class="form-label">Shipping Payment:</label>
                                  <input type="text" class="form-control" id="biaya_pengiriman" oninput="formatRupiah(this);" name="biaya_pengiriman" placeholder="Enter Shipping Payment">
                                </div>
  
                                <!-- Final Payment => biaya_pelunasan += biaya_pengiriman -->
                                <div class="mb-3">
                                  <label for="biaya_pelunasan" class="form-label">Final Payment:</label>
                                  <input type="text" class="form-control" id="biaya_pelunasan" oninput="formatRupiah(this);" readonly>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="statusChecklist1" name="is_shipping_payment"  {{ $item->is_shipping_payment ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist1">
                                      Checklist Final Payment
                                    </label>
                                  </div>
                                </div>
  
                                <!-- Remaining payment must be 0, if checklist was checked, mean LUNAS -->
                                <div class="mb-3">
                                  <label for="pelunasan" class="form-label">Remaining Payment:</label>
                                  <input type="text" class="form-control" id="pelunasan" oninput="formatRupiah($item->biaya_pelunasan);" name="biaya_pelunasan" readonly value="{{$item->biaya_pelunasan}}">
                                </div>
                                <label for="statusChecklist" class="form-label">Quality Control:</label>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="is_final_concept" id="statusChecklist1" name="is_final_concept" {{ $item->is_final_concept ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist1">
                                      Konsep Akhir
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="photo_upload">
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="statusChecklist2" name="is_order_quantity" {{ $item->is_order_quantity ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist2">
                                      Jumlah Pesanan
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="photo_upload">
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox"  id="statusChecklist2" name="is_production_data" {{ $item->is_production_data ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist2">
                                      Data Produksi
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="photo_upload">
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox"  id="statusChecklist2" name="is_logo" {{ $item->is_logo ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist2">
                                      Jenis Logo
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="photo_upload">
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="statusChecklist2" name="is_polifek_quality" {{ $item->is_polifek_quality ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist2" >
                                      Kualitas Polifek
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="photo_upload">
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="statusChecklist2" name="is_stitching_neatness" {{ $item->is_stitching_neatness ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist2">
                                      Kerapihan Jahitan
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="photo_upload">
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox"  id="statusChecklist2" name="is_packaging" {{ $item->is_packaging ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist2">
                                      Packaging
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="photo_upload">
                                </div>
                                <div class="mb-3">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox"  id="statusChecklist2" name="is_delivery" {{ $item->is_delivery ? 'checked' : '' }}>
                                    <label class="form-check-label" for="statusChecklist2">
                                      Finishing, Deliver/ Pickup
                                    </label>
                                  </div>
                                  <label for="photoUpload" class="form-label">Upload Photo:</label>
                                  <input type="file" class="form-control" id="photoUpload" name="photo_upload">
                                </div>
  
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

    <!-- Quotation Tab -->
    <div class="tab-pane fade show active" id="approval" role="tabpanel" aria-labelledby="approval-tab">
      <div class="card card-tab mb-4">
        <div class="card-header pb-0">
          <h6>Approval</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0 display" id="view-quotation" style="width:100%">
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
                    {{ date("d-m-Y", strtotime($item->created_at))}}
                  </td>
                  <td class="text-center">
                    <div class="d-flex">
                      @php
                      $link = 'production';
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


@endsection