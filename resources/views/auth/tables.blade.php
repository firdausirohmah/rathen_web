@extends('layout.admin')
@section('content')

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>    
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script> 
  new DataTable('#example', {
    columnDefs: [
        {
            target: 2,
            visible: false,
            searchable: false
        },
        {
            target: 3,
            visible: false
        }
    ]
});
</script>
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

    </div>
    @endsection