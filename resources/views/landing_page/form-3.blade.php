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
          </style>
        </div>
        <div class="container">
            <div class="row">
                <p style="color: #1890fd;  font-family: Montheavy;  font-weight: bold; padding-left:0%;">Step 3. Spesifikasi</p>
    
          
        <table style="width: 100%; border:10px; font-size:14px; font-weight:100; color:black;">
            <tr style="font-weight: bold; " >
            <td class="col-1 fw-semibold">Kategori Harga</td>
            <td class="col-2">:</td>
            <td class="col-3">
                <input type="text" name="kh" class="form-control" placeholder="">
                {{-- <select name="kategori" class="form-control" id="">
                  <option class="" value="" style="font-weight: bold; "><span class="fw-lighter">Non-Print</span></option>
                  <option value="" style="font-weight: bold;" ><span class="fw-lighter"> Half-Print</span></option>
                  <option value=""style="font-weight: bold;" ><span class="fw-lighter"> Full-Print</span></option>
                </select> --}}
              </td>
            </tr>

            <tr style="font-weight: bold; " >
                <td class="col-1 fw-semibold">Kualitas</td>
                <td class="col-2">:</td>
                <td class="col-3">
                    <input type="text" name="k" class="form-control" placeholder="">
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

                <tr>
                    <td class="col-1 fw-semibold">Pola Lengan</td>
                    <td class="col-2">:</td>
                    <td class="col-3 input-group">
                         <select name="kategori" class="form-extra" id="">
                      <option value="" style="font-weight: bold; "><span class="fw-lighter"> Normal</span></option>
                      <option value=""style="font-weight: bold; "><span class="fw-lighter"> Ragian</span></option> 
                    </select>
                    <div class="input-group-text" style="font-size: 15px; font-weight: bold; color: grey;"><small>(+15,000 pola raglan)</small></div>
                      </td>
                    </tr>

                <tr>
                    <td class="col-1 fw-semibold">Model Kerah</td>
                    <td class="col-2">:</td>
                    <td class="col-3">
                        <input type="text" name="pl" class="form-control" placeholder="">
                      </td>
                    </tr>

                    <tr>
                        <td class="col-1 fw-semibold">Bahan baju</td>
                        <td class="col-2">:</td>
                        <td class="col-3">
                            <input type="text" name="bb" class="form-control" placeholder="">
                          </td>
                        </tr>

                        <tr>
                            <td class="col-1 fw-semibold">Bahan celana</td>
                            <td class="col-2">:</td>
                            <td class="col-3">
                                <input type="text" name="bc" class="form-control" placeholder="">
                              </td>
                            </tr>

                            <tr>
                                <td colspan="3" style="text-align: center; align-item:center;padding-top:3%;" >
                                    <button type="button" style="font-family: Montheavy; width:15%" class="btn btn-black">NEXT</button>
                                  </td>
                            </tr>
        </table>
        <table class="mb-4 mt-4" style="font-family:Montheavy; font-weight: bold;">
            <th>
                <tr>
                    <td colspan="3" style=" font-weight: bold;">
                        JENIS BAHAN
                    </td>
                    <td style="width: 10px"></td>

                    <td>MODEL KERAH</td>
                </tr>
            </th>
            <tbody>
                <tr>
                    <td  style="background-color: #a0a0a0; color:white; widht:30px; margin-center:30%; height:25%">
                        FANS
                    </td>
                    <td  style=" background-color: #a0a0a0; color:white; text-align:center; widht:30px; margin-center:30%; height:25%">
                        STADIUM
                    </td>
                    <td  style="background-color: #a0a0a0; color:white;  text-align:center; widht:30px; margin-center:14%;  height:25%">
                        PRO
                    </td>
                    <td></td>
                    <td rowspan="9">
                        <img style="width: 300px" src="{{ asset('asset/images/KERAH.jpg') }}" alt="">
                    </td>
                </tr>
                <tr >
                    <td class="fw-center">
                        MILANO
                    </td>
                    <td class="fw-center">
                        RTNH-TECT
                    </td>
                    <td class="fw-center">
                        MOVINGKNIT
                    </td>
                </tr>
                    <tr>
                        <td class="fw-center">
                            BINTIK
                        </td>
                        <td class="fw-center">
                            EMBOS-TOPO
                        </td>
                    </tr>
                        <tr>
                            <td class="fw-center">

                            </td>
                            <td class="fw-center" >
                                EMBOS-STRAW
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-center">
                                
                            </td>
                            <td class="fw-center">
                                DROPNIDLE
                            </td>
                        </tr>
                        <tr>
                            <td>
                                
                            </td>
                            <td  class="fw-center">
                                AIRWALK
                            </td>
                        </tr>
                        <tr>
                            <td>
                                
                            </td>
                            <td  class="fw-center">
                                SMASH
                            </td>
                        </tr>
                        <tr>
                            <td>
                                
                            </td>
                            <td class="fw-center" >
                                RHABIT
                            </td>
                        </tr>
                </tr>
            </tbody>
        </table>

    </div>
</div>

@endsection