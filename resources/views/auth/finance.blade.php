@extends('layout.admin')
@section('content')

      <div class="container-fluid py-4">
        <div class="container-fluid py-4">
          <div class="row">
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header pb-0">
                  <h6>Table</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                  <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0 display"  id="example" style="width:100%">
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
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status
                          </th>
    
    
                          <th class="text-secondary opacity-7"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($order as $item)
                        <tr>
                          <td>
                            <p class="text-xs font-weight-bold mb-0 text-center">{{ $item->nama_pemesanan }}</p>
                          </td>
                          <td>
                            <p class="text-xs font-weight-bold mb-0 text-center">{{ $item->alamat_pengirim }}</p>
    
                          </td>
                          <td>
                            <p class="text-xs font-weight-bold mb-0 text-center">{{ $item->kontak }}</p>
    
                          </td>
                          <td>
                            <p class="text-xs font-weight-bold mb-0 text-center">{{ $item->kategori_harga }} : {{ $item->tipe_kualitas }}</p>
    
                          </td>
                          <td>
                            <p class="text-xs font-weight-bold mb-0 text-center">Rp. {{ $item->harga }}</p>
    
                          </td>
                          <td class="align-middle text-center text-sm">
                            {{-- <span class="badge badge-sm bg-gradient-warning">{{ $item->status }}</span> --}}
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
    
        
        <!-- <div class="row">
        <div class="col-lg-8">
          <div class="row">
            <div class="col-xl-6 mb-xl-0 mb-4">
              <div class="card bg-transparent shadow-xl">
                <div class="overflow-hidden position-relative border-radius-xl" style="background-image: url('../assets/img/curved-images/curved14.jpg');">
                  <span class="mask bg-gradient-dark"></span>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="row">
                <div class="col-md-6">
                  <div class="card"> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
        <div class="col-lg-6 align-items-center">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0">Invoices</h6>
                </div>
                <div class="col-6 text-end">
                  <button class="btn btn-outline-primary btn-sm mb-0">View All</button>
                </div>
              </div>
            </div>
            <div class="card-body p-3 pb-0">
              <ul class="list-group">
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark font-weight-bold text-sm">March, 01, 2020</h6>
                    <span class="text-xs">#MS-415646</span>
                  </div>
                  <div class="d-flex align-items-center text-sm">
                    $180
                    <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                        class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                  </div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="text-dark mb-1 font-weight-bold text-sm">February, 10, 2021</h6>
                    <span class="text-xs">#RV-126749</span>
                  </div>
                  <div class="d-flex align-items-center text-sm">
                    $250
                    <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                        class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                  </div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="text-dark mb-1 font-weight-bold text-sm">April, 05, 2020</h6>
                    <span class="text-xs">#FB-212562</span>
                  </div>
                  <div class="d-flex align-items-center text-sm">
                    $560
                    <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                        class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                  </div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="text-dark mb-1 font-weight-bold text-sm">June, 25, 2019</h6>
                    <span class="text-xs">#QW-103578</span>
                  </div>
                  <div class="d-flex align-items-center text-sm">
                    $120
                    <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                        class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                  </div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="text-dark mb-1 font-weight-bold text-sm">March, 01, 2019</h6>
                    <span class="text-xs">#AR-803481</span>
                  </div>
                  <div class="d-flex align-items-center text-sm">
                    $300
                    <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                        class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>


    </div>
    @endsection