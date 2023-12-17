@extends('layout.form-order')

@section('content')

          <style>
            table{
              width: 80%;
              align-content: center;
              text-align: left;
              border-spacing: 0px; /* Mengatur jarak antar sel menjadi 0 */ 
              border-collapse: collapse; /* Menggabungkan batas sel */
            }
            tr{
              margin-top: auto;
              padding-top: auto;
              
            }
                        
            
            tr, td {
            padding: auto; /* Menambahkan padding untuk ruang di dalam sel */
            text-align: left; /* Penataan teks di dalam sel */
          }
            .col-1{
               margin-top: auto;
              width: 20%;
            }
            .col-2{
              margin-top: auto;
              width: 1%;
              font-weight: bold;
            }
            .col-3{
               margin-top: auto;
              width: 62%;
            }
            .hidden{
                color: #f5f5f9;

            }
            #fileInput {
            display: none;
        }
         /* Gaya kustom untuk elemen pengganti */
         #customLabel {
            display: inline-block;
            padding: 8px 12px;
            cursor: pointer;
            border: 1px solid #ccc;
            color: white;
            border-radius: 5px;
            background-color: #979797;
        }
        @media screen and (max-width : 800px){
    .notes{
      font-size: 8px;

    }.title{
      font-size:  10px;
    }
    .imgg {
       width: 150px; 
    }
  }
    @media screen and (max-width : 500px){
    .notes{
      font-size: 8px;

    }.title{
      font-size:  10px;
    }
    .imgg {
       width: 100px; 
    }
  }
  @media screen and (max-width : 400px){
    .notes{
      font-size: 6px;

    }.title{
      font-size:  10px;
    }
    .imgg {
       width: 50px; 
    }
  }
  @media screen and (max-width : 300px){
    .notes{
      font-size: 4px;

    }.title{
      font-size:  8px;
    }
    .imgg {
       width: 50px; 
    }
  }
  @media screen and (max-width : 200px){
    .notes{
      font-size: 4px;

    }.title{
      font-size:  8px;
    }
    .imgg {
       width: 150px; 
    }
  }
          </style>
        </div>
        <div class="container">
            <div class="row">
                <p style="color: #1890fd;  font-family: Montheavy;  font-weight: bold; padding-left:0%;">Step 3. Spesifikasi</p>
    
        
        <table style="width: 100%; border:10px; font-size:14px; font-weight:100; color:black;">
            <tr style="font-weight: bold; " >
            <td class="col-1 fw-semibold title">Kategori Harga</td>
            <td class="col-2">:</td>
            <td class="col-3">
                <input type="text" name="kh" class="form-control" placeholder="" value="{{ $data->kategori_harga }}" readonly>
                {{-- <select name="kategori" class="form-control" id="">
                  <option class="" value="" style="font-weight: bold; "><span class="fw-lighter">Non-Print</span></option>
                  <option value="" style="font-weight: bold;" ><span class="fw-lighter"> Half-Print</span></option>
                  <option value=""style="font-weight: bold;" ><span class="fw-lighter"> Full-Print</span></option>
                </select> --}}
              </td>
            </tr>

            <tr style="font-weight: bold; " >
                <td class="col-1 fw-semibold title">Kualitas</td>
                <td class="col-2">:</td>
                <td class="col-3">
                    <input type="text" name="k" class="form-control" placeholder="" value="{{ $data->tipe_kualitas }}" readonly>
                    {{-- <select name="kategori" class="form-control" id="">
                      <option class="" value="" style="font-weight: bold; "><span class="fw-lighter">Fans</span></option>
                      <option value="" style="font-weight: bold; "><span class="fw-lighter"> Stadium</span></option>
                      <option value=""style="font-weight: bold; "><span class="fw-lighter"> PRO</span></option>
                    </select> --}}
                  </td>
                </tr>
                <tr>
                <td>
                    <div style="margin-bottom: 20px;"></div>
                </td>
                </tr>
                <form action="{{ route('addForm3') }}" method="POST">
                  @csrf
                <tr>
                    <td class="col-1 fw-semibold title">Pola Lengan</td>
                    <td class="col-2">:</td>
                    <td class="col-3 input-group">
                    <select name="pola_lengan" class="form-extra" id="">
                      <option value="Normal" style="font-weight: bold; "><span class="fw-lighter"> Normal</span></option>
                      <option value="Raglan"style="font-weight: bold; "><span class="fw-lighter"> Raglan</span></option> 
                    </select>
                    <div class="input-group-text" style="font-size: 15px; font-weight: bold; color: grey;"><small>(+15,000 pola raglan)</small></div>
                      </td>
                    </tr>

                <tr>
                    <td class="col-1 fw-semibold title">Model Kerah</td>
                    <td class="col-2">:</td>
                    <td class="col-3">
                        {{-- <input type="text" name="pl" class="form-control" placeholder=""> --}}
                        <select name="model_kerah" id="" class="form-control">
                          <option value="K.R 01">K.R 01</option>
                          <option value="K.R 02">K.R 02</option>
                          <option value="K.R 03">K.R 03</option>
                          <option value="K.R 04">K.R 04</option>
                          <option value="K.R 05">K.R 05</option>
                          <option value="K.R 06">K.R 06</option>
                          <option value="K.R 07">K.R 07</option>
                          <option value="K.R 08">K.R 08</option>
                          <option value="K.R 09">K.R 09</option>
                          <option value="K.R 10">K.R 10</option>
                          <option value="K.R 11">K.R 11</option>
                          <option value="K.R 12">K.R 12</option>
                          <option value="K.R 13">K.R 13</option> 
                        </select>
                      </td>
                    </tr>

                    <tr>
                        <td class="col-1 fw-semibold title">Bahan baju</td>
                        <td class="col-2">:</td>
                        <td class="col-3">
                            <input type="text" name="bb" class="form-control" placeholder="">
                          </td>
                        </tr>

                        <tr>
                            <td class="col-1 fw-semibold title">Bahan celana</td>
                            <td class="col-2">:</td>
                            <td class="col-3">
                                <input type="text" name="bc" class="form-control" placeholder="">
                              </td>
                            </tr>

                            <tr>
                                <td colspan="3" style="text-align: center; align-item:center;padding-top:3%;" >
                                    <button type="submit" style="font-family: Montheavy; width:15%" class="btn btn-dark title">NEXT</button>
                                  </td>
                            </tr>
          </table>
          
        </form>
        <table class="mb-4 mt-4" style="font-family:Montheavy; font-weight: bold;">
            <th>
                <tr>
                    <td colspan="3" style=" font-weight: bold;" class="title">
                        JENIS BAHAN
                    </td>
                    <td style="width: 10px"></td>

                    <td class="title">MODEL KERAH</td>
                </tr>
            </th>
            <tbody>
                <tr>
                    <td class="title" style="background-color: #a0a0a0; color:white; widht:30px; margin-center:30%; height:25%">
                        FANS
                    </td>
                    <td  class="title" style=" background-color: #a0a0a0; color:white; text-align:center; widht:30px; margin-center:30%; height:25%">
                        STADIUM
                    </td>
                    <td class="title"  style="background-color: #a0a0a0; color:white;  text-align:center; widht:30px; margin-center:14%;  height:25%">
                        PRO
                    </td>
                    <td></td>
                    <td rowspan="9">
                        <img class="imgg" style="width: 300px" src="{{ asset('asset/images/KERAH.jpg') }}" alt="">
                    </td>
                </tr>
                <tr >
                    <td class="fw-center title">
                        MILANO
                    </td>
                    <td class="fw-center title">
                        RTNH-TECT
                    </td>
                    <td class="fw-center title">
                        MOVINGKNIT
                    </td>
                </tr>
                    <tr>
                        <td class="fw-center title">
                            BINTIK
                        </td>
                        <td class="fw-center title">
                            EMBOS-TOPO
                        </td>
                    </tr>
                        <tr>
                            <td class="fw-center">

                            </td>
                            <td class="fw-center title" >
                                EMBOS-STRAW
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-center">
                                
                            </td>
                            <td class="fw-center title">
                                DROPNIDLE
                            </td>
                        </tr>
                        <tr>
                            <td>
                                
                            </td>
                            <td  class="fw-center title">
                                AIRWALK
                            </td>
                        </tr>
                        <tr>
                            <td>
                                
                            </td>
                            <td  class="fw-center title">
                                SMASH
                            </td>
                        </tr>
                        <tr>
                            <td>
                                
                            </td>
                            <td class="fw-center title" >
                                RHABIT
                            </td>
                        </tr>
                </tr>
            </tbody>
        </table>

    </div>
</div>

@endsection