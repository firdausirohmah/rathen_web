@extends('layout.admin')
@section('content')

    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
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
                    <tr>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 text-center">{{ $order->nama_pelanggan }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 text-center">{{ $order->alamat }}</p>

                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 text-center">{{ $order->no_hp }}</p>

                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 text-center">{{ $order->kategori }} : {{ $order->kualitas }}</p>

                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 text-center">Rp. {{ $order->total }}</p>

                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-warning">{{ $order->status }}</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    @endsection