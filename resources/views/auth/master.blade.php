@extends('layout.admin')
@section('content')

    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <div class="container">
                <div class="row">
                  <div class="col">
                    <label for="">Harga Bahan</label>
                    <input type="text" class="form-control" value="{{ $data->u_logo3d }}" name="hargaa....">
                  </div>
                  <div class="col">
                    <label for="">Harga Badan Bawah</label>
                    <input type="text" class="form-control" name="bbm">
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label for="">Harga Bahan</label>
                    <input type="text" class="form-control" name="hargaa....">
                  </div>
                  <div class="col">
                    <label for="">Harga Badan Bawah</label>
                    <input type="text" class="form-control" name="bbm">
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col">
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>

    </div>
    @endsection