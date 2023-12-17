@extends('layout.admin')
@section('content')

    <!-- End Navbar -->
    <div class="container-fluid py-4">
      @if(session('success'))
      <div class="alert alert-success" style="font-family: Montheavy;">
        {{ session('success') }}
      </div>
      @endif
      <div class="row">
        
        <div class="col-sm-6 mb-3 mb-sm-0">
          <form action="{{ route('updateHargaBahan') }}" method="POST">
          @csrf
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Harga Bahan</h5>
              <div class="container">
                <div class="row">
                  <div class="col">
                    <label for="">Badan bawah melengkung</label>
                    <input type="text" class="form-control" value="{{ $data->badan_bm }}" name="badan_bm">
                  </div>
                  <div class="col">
                    <label for="">Upgrade logo 3D</label>
                    <input type="text" class="form-control"  value="{{ $data->u_logo3d}}"name="u_logo3d">
                  </div>
                </div>
                  <div class="row">
                    <div class="col">
                      <label for="">Pola lengan raglan</label>
                      <input type="text" class="form-control" value="{{ $data->pola_lr}}" name="pola_lr">
                    </div>
                    <div class="col">
                      <label for="">Logo tim di celana</label>
                      <input type="text" class="form-control" value="{{ $data->l_timdicelana}}" name="l_timdicelana">
                    </div>
                  </div>
                  
                 <div class="row">
                  <div class="col">
                    <label for="">Lengan panjang</label>
                    <input type="text" class="form-control"value="{{ $data->l_panjang}}"  name="l_panjang">
                  </div>
                  <div class="col">
                    <label for="">Size 2XL</label>
                    <input type="text" class="form-control"value="{{ $data->pola_lr}}" name="s_2xl">
                  </div>
                 </div>
                  
                 <div class="row">
                  <div class="col">
                    <label for="">Size 3XL</label>
                    <input type="text" class="form-control"value="{{ $data->s_2xl}}" name="s_3xl">
                  </div>
                  <div class="col">
                    <label for="">Size >4XL</label>
                    <input type="text" class="form-control"value="{{ $data->s_3xl}}" name="s_4xl">
                  </div>
                 </div>
                 
                
                 <div class="row">
                  <div class="col">
                    <label for="">Pola Badan Normal</label>
                    <input type="text" class="form-control"value="{{ $data->pb_normal}}" name="pb_normal">
                  </div>
                  <div class="col">
                    <label for="">Pola Badan Melengkung</label>
                    <input type="text" class="form-control"value="{{ $data->p_badan_m}}" name="p_badan_m">
                  </div>
                 </div>

                 <div class="row">
                  <div class="col">
                    <label for="">Pola Lengan Normal</label>
                    <input type="text" class="form-control"value="{{ $data->pl_normal}}" name="pl_normal">
                  </div>
                  <div class="col">
                    <label for="">Pola Lengan Raglan</label>
                    <input type="text" class="form-control"value="{{ $data->p_lenganraglan}}" name="p_lenganraglan">
                  </div>
                 </div>
                 <div class="row">
                  <div class="col">
                    <label for="">Jenis Kerah custom elastic rib</label>
                    <input type="text" class="form-control"value="{{ $data->kerah_custom}}" name="kerah_custom">
                  </div>
                 
                 </div>
                 
               
                
                <div class="row mt-4">
                  <div class="col">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
        </div>
        
        <div class="col-sm-6">
          <form action="{{ route('updateHargaLogo') }}" method="POST">
            @csrf
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Harga Logo</h5>
              <div class="container">
                <div class="row">
                  <div class="col">
                    <label for="">DTF</label>
                    <input type="text" class="form-control" value="{{ $data->dtf}}" name="dtf">
                  </div>
                  <div class="col">
                    <label for="">Extra logo tim (DTF)</label>
                    <input type="text" class="form-control" value="{{ $data->extra_ltim}}" name="extra_ltim">
                  </div>
                </div>
                
               <div class="row">
                <div class="col">
                  <label for="">3D TPU</label>
                  <input type="text" class="form-control"value="{{ $data->d_tpu}}"  name="d_tpu">
                </div>
                <div class="col">
                  <label for="">3D RUBBER</label>
                  <input type="text" class="form-control"value="{{ $data->d_rubber}}" name="d_rubber">
                </div>
               </div>
                
               <div class="row">
                <div class="col">
                  <label for="">Rubber on Tatami</label>
                  <input type="text" class="form-control"value="{{ $data->rubber_ot}}" name="rubber_ot">
                </div>
                <div class="col">
                  <label for="">Silicone HD</label>
                  <input type="text" class="form-control"value="{{ $data->s_hd}}" name="s_hd">
                </div>
               </div>
               
              
               <div class="row">
                <div class="col">
                  <label for="">Woven HD</label>
                  <input type="text" class="form-control"value="{{ $data->w_hd}}" name="w_hd">
                </div>
                <div class="col">
                  <label for="">Woven Lokal</label>
                  <input type="text" class="form-control"value="{{ $data->w_lokal}}" name="w_lokal">
                </div>
               </div>
               <div class="row">
                <div class="col">
                  <label for="">Printing</label>
                  <input type="text" class="form-control"value="{{ $data->printing}}" name="printing">
                </div>
                <div class="col">
                  <label for="">Tulisan poliflek 1 warna 1 baris</label>
                  <input type="text" class="form-control"value="{{ $data->tulisan_1baris}}" name="tulisan_1baris">
                </div>
               </div>
               <div class="row">
                <div class="col">
                  <label for="">Extra Tulisan poliflek 1 warna 1 baris</label>
                  <input type="text" class="form-control"value="{{ $data->extra_1baris}}" name="extra_1baris">
                </div>
                <div class="col">
                  <label for="">Logo + Tulisan poliflek 1 warna</label>
                  <input type="text" class="form-control"value="{{ $data->logo_1warna}}" name="logo_1warna">
                </div>
               </div>
               <div class="row">
                <div class="col">
                  <label for="">Extra Tulisan poliflek >1 warna</label>
                  <input type="text" class="form-control"value="{{ $data->extra__1warna}}" name="extra__1warna">
                </div>
                <div class="col">
                  <label for="">Extra Logo DTF</label>
                  <input type="text" class="form-control"value="{{ $data->e_logodtf}}" name="e_logodtf">
                </div>
               </div>
               <div class="row">
                <div class="col">
                  <label for="">Extra Tulisan 1 baris</label>
                  <input type="text" class="form-control"value="{{ $data->e_tulisan1baris}}" name="e_tulisan1baris">
                </div>
                
               </div>


                <div class="row mt-4">
                  <div class="col">
                      <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </form>
        </div>
      </div>

    </div>

    
    @endsection