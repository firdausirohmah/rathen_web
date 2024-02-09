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
            <div class="card-header pb-0">
              <h6>Invoice</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0 display" id="view-invoice" style="width:100%">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama
                      </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat
                      </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.
                        WhatsApp</th>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">Pesanan</th>
                      <!-- u. kategori dan kualitas -->
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total
                        Harga</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Link Invoice
                      </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal dibuat
                      </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hapus Data
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
                        {{ $item->alamat_pengirim }}

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
                        Rp. <?= number_format($item->total_harga , 0, ','); ?>

                      </td>
                      
                      <td>
                        @php
                            $link = 'form-1/invoice';
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
                        <form action="{{ route('data.destroy', $item->kd_step2) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger m-0"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
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
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Pelanggan
                      </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No. Whatsapp
                      </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Proses</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Pemesanan</th>
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
                        <span class="text-success">Clicked</span>
                        @else
                        <form action="{{ url('/form-1/action') }}" method="POST">
                            @csrf
                            <input type="hidden" class="input txt" value="{{ $item->kd_step }}" name="kd_step" readonly/>
                            <input type="hidden" class="input txt" value="{{ $item->nama_pelanggan }}" name="np" readonly/>
                            <input type="hidden" class="input txt" value="{{ $item->alamat }}" name="alamat_p" readonly/>
                            <input type="hidden" class="input txt" value="{{ $item->no_hp }}" name="nw" readonly/>
                            <input type="hidden" class="input txt" value="{{ $item->tipe_kualitas }}" name="kualitas" readonly/>
                            <input type="hidden" class="input txt" value="{{ $item->kategori_harga }}" name="kategori" readonly/>
                            <input type="hidden" class="input txt" value="{{ $item->harga }}" name="harga" readonly/>
                            <input type="hidden" class="input txt" value="{{ $item->total_harga }}" name="total_harga" readonly/>
                            <button data-kode="{{ $item->kd_step }}" type="submit" class="btn btn-success btn-sm m-0">Invoice <i class="ps-1 fa fa-sign-out" aria-hidden="true"></i></button>
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