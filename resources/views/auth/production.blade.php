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
                        Rp. <?= number_format($item->biaya_pelunasan , 0, ','); ?>

                      </td>
                      
                      <td class="align-middle text-center text-sm">
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <div class="d-flex">
                          @php
                              $link = 'production';
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
                        $processed = $order->contains('status_order', 'produksi');
                        @endphp
                        @if($processed)
                        <span class="text-success">Approved</span>
                        @else
                        <form action="{{ url('/approval/action') }}" method="POST" >
                            @csrf
                            <input type="hidden" class="input txt" value="{{ $item->kd_step2 }}" name="kd_step" readonly/>

                            <button class="btn btn-success btn-sm m-0">Approve <i class="ps-1 fa fa-sign-out" aria-hidden="true"></i></button>
                            
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