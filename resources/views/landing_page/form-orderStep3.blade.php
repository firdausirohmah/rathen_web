<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rathen</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700|Open+Sans:400,600'>
  <!-- <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700|Open+Sans:400,600'> -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css'>
  <link rel="stylesheet" href="{{ asset('asset/css/formOrder.css') }}">

</head>

<body>
  <!-- partial:index.partial.html -->
  <header>
    <div class="container">
      <div class="navigation center-content">

        <div class="logo">
          <img class="icon icon-basket" src="{{asset('asset/cfind/source/images/rathen.png')}}" width="12%">
        </div>

      </div>
      <div class="notification">
        Custom Rathen - Form Order
      </div>
    </div>
  </header>
  <section class="content content-back">
    <a class="btn btn-back" href="/invoice/{{$kode}}">
      <i class="icon-arrow-left"></i>
    </a>
    <div class="container">
      <div class="payment">
        <div class="payment__title fw-6">
          Step Order
        </div>
        <div class="payment__types">
          <a class="payment__type payment__type--cc " href="/form-2/{{$kode}}">
            <i class="icon icon-picture"></i>Design Logo</a>
          <a class="payment__type payment__type--paypal active" href="/form-3/{{$kode}}">
            <i class="icon icon-pencil"></i>Spesifikasi</a>
          <a class="payment__type payment__type--paypal" href="/form-4/{{$kode}}">
            <i class="icon icon-docs"></i>Form Data</a>

        </div>

        <div class="payment__info">
          <div class="payment__cc">
            <div class="payment__title fw-6">
              <i class="icon icon-pencil"></i>Spesifikasi
            </div>
            <form action="{{ route('addForm3') }}" method="POST">
              @csrf
              <input type="hidden" name="idForm3" value="{{$kode}}" />
              <div class="form__cc">
                <div class="row">
                  <div class="field">
                    <div class="title">Product
                    </div>
                    <input type="text" class="input txt" value="{{ $data->product }}" readonly />
                  </div>
                </div>
                @if(!isset($data->pola_lengan) && $data->kategori_harga !== 'pro' && $data->kategori_harga !== 'pro-plus')
                <div class="row">
                  <div class="field small">
                    <div class="title">Pola lengan
                    </div>
                    <select name="pola_lengan" class="input ddl">
                      <option value="{{ $data->pola_lengan }}">{{ $data->pola_lengan }}</option>
                      <option value="Normal">Normal</option>
                      <option value="Raglan">Raglan</option>
                    </select>
                    <span class="title">+15,000 pola raglan</span>
                  </div>
                </div>
                @endif
                <div class="row">
                  <div class="field">
                    <div class="title">Model Kerah
                    </div>
                    <select name="model_kerah" class="input ddl w-100">
                      <option value="{{ $data->model_kerah }}">{{ $data->model_kerah }}</option>
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
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title">Pola Badan
                    </div>
                    <select name="pola_badan" class="input ddl w-100">
                      <option value="{{ $data->pola_badan }}">{{ $data->pola_badan }}</option>
                      <option value="Normal">Normal</option>
                      <option value="Slim-fit">Slim-fit</option>
                    </select>
                  </div>
                </div>
                @if($data->kategori_harga == 'pro-plus')
                <div class="row">
                  <div class="field">
                    <div class="title">Lasercut
                    </div>
                    <select name="lasercut" class="input ddl w-100">
                      <option value="{{ $data->lasercut }}">{{ $data->lasercut }}</option>
                      <option value="Ada">Ada</option>
                      <option value="Tidak">Tidak Ada</option>
                    </select>
                  </div>
                </div>
                @endif
                
              </div>
          </div>
          <div class="payment__shipping">
            <div class="payment__title fw-6">
              <i class="icon icon-info"></i> Model Kerah
            </div>
            <div class="row">
              <div class="image">
                <div class="form-upload payment__type--cc">
                  <img src="{{ asset('asset/images/KERAH.jpg')}}" alt="">
                </div>
                
              </div>
            </div>
          </div>
          
        </div>
        <div class="payment__info">
          <div class="payment__cc">
            <div class="form__cc">
              <div class="row">
                <div class="table w-100">
                  <div class="payment__title fw-6">
                    <i class="icon icon-info"></i> Jenis bahan
                  </div>
                  <table class="wp-table w-100">
                    <tr>
                      <th>Kategori</th>
                      <th>Gambar</th>
                    </tr>
                    <tr>
                      <td>
                        Stadium
                      </td>
                      <td>
                        <div class="row flex-wrap">
                          <div class="field-bahan">
                            <input type="radio" id="stadium1" name="bb" value="AIRWALK" {{ $data->bahan_baju == 'AIRWALK' ? 'checked' : '' }}>
                            <div class="title-note">AIRWALK</div>
                            <label for="stadium1" style="background-image: url('{{ asset('/asset/material/stadium/1.jpg') }}');">
                            </label>
                          </div>
                          
                          <div class="field-bahan">
                            <input type="radio" id="stadium2" name="bb" value="EMBROSS-STRAW" {{ $data->bahan_baju == 'EMBROSS-STRAW' ? 'checked' : '' }}>
                            <div class="title-note">EMBROSS STRAW</div>
                            <label for="stadium2" style="background-image: url('{{ asset('/asset/material/stadium/2.jpg') }}');">
                            </label>
                          </div>
                          
                          <div class="field-bahan">
                            <input type="radio" id="stadium3" name="bb" value="EMBROSS-TOPO" {{ $data->bahan_baju == 'EMBROSS-TOPO' ? 'checked' : '' }}>
                            <div class="title-note">EMBROSS TOPO</div>
                            <label for="stadium3" style="background-image: url('{{ asset('/asset/material/stadium/3.jpg') }}');">
                            </label>
                          </div>
                          
                          <div class="field-bahan">
                            <input type="radio" id="stadium4" name="bb" value="EMBROSS-MIX" {{ $data->bahan_baju == 'EMBROSS-MIX' ? 'checked' : '' }}>
                            <div class="title-note">EMBROSS MIX</div>
                            <label for="stadium4" style="background-image: url('{{ asset('/asset/material/stadium/4.jpg') }}');">
                            </label>
                          </div>
                          
                          <div class="field-bahan">
                            <input type="radio" id="stadium5" name="bb" value="ERBINA" {{ $data->bahan_baju == 'ERBINA' ? 'checked' : '' }}>
                            <div class="title-note">ERBINA</div>
                            <label for="stadium5" style="background-image: url('{{ asset('/asset/material/stadium/5.jpg') }}');">
                            </label>
                          </div>
                          
                          <div class="field-bahan">
                            <input type="radio" id="stadium6" name="bb" value="MILANO" {{ $data->bahan_baju == 'MILANO' ? 'checked' : '' }}>
                            <div class="title-note">MILANO</div>
                            <label for="stadium6" style="background-image: url('{{ asset('/asset/material/stadium/6.jpg') }}');">
                            </label>
                          </div>
                          
                          <div class="field-bahan">
                            <input type="radio" id="stadium7" name="bb" value="PUMA" {{ $data->bahan_baju == 'PUMA' ? 'checked' : '' }}>
                            <div class="title-note">PUMA</div>
                            <label for="stadium7" style="background-image: url('{{ asset('/asset/material/stadium/7.jpg') }}');">
                            </label>
                          </div>
                          
                          <div class="field-bahan">
                            <input type="radio" id="stadium8" name="bb" value="RATHEN-TECH" {{ $data->bahan_baju == 'RATHEN-TECH' ? 'checked' : '' }}>
                            <div class="title-note">RATHEN - TECH</div>
                            <label for="stadium8" style="background-image: url('{{ asset('/asset/material/stadium/8.jpg') }}');">
                            </label>
                          </div>
                          
                          <div class="field-bahan">
                            <input type="radio" id="stadium9" name="bb" value="RHABIT" {{ $data->bahan_baju == 'RHABIT' ? 'checked' : '' }}>
                            <div class="title-note">RHABIT</div>
                            <label for="stadium9" style="background-image: url('{{ asset('/asset/material/stadium/9.jpg') }}');">
                            </label>
                          </div>
                          
                          <div class="field-bahan">
                            <input type="radio" id="stadium10" name="bb" vaalue="SMASH" {{ $data->bahan_baju == 'SMASH' ? 'checked' : '' }}>
                            <div class="title-note">SMASH</div>
                            <label for="stadium10" style="background-image: url('{{ asset('/asset/material/stadium/10.jpg') }}');">
                            </label>
                          </div>
                          
                          <div class="field-bahan">
                            <input type="radio" id="stadium11" name="bb" value="SULKUL" {{ $data->bahan_baju == 'SULKUL' ? 'checked' : '' }}>
                            <div class="title-note">SULKUL</div>
                            <label for="stadium11" style="background-image: url('{{ asset('/asset/material/stadium/11.jpg') }}');">
                            </label>
                          </div>
                          
                          <div class="field-bahan">
                            <input type="radio" id="stadium12" name="bb" value="WAVE" {{ $data->bahan_baju == 'WAVE' ? 'checked' : '' }}>
                            <div class="title-note">WAVE</div>
                            <label for="stadium12" style="background-image: url('{{ asset('/asset/material/stadium/12.jpg') }}');">
                            </label>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="bg-unset">
                      <td>
                        Pro
                      </td>
                      <td>
                        <div class="row">
                          <div class="field-bahan">
                            <input type="radio" id="pro" name="bb" value="VAPORKNIT" {{ $data->bahan_baju == 'VAPORKNIT' ? 'checked' : '' }}>
                            <div class="title-note">VAPORKNIT</div>
                            <label for="pro" style="background-image: url('{{ asset('/asset/images/jenisbahan/BAHAN - PRO/VAporknit.jpg') }}');">
                            </label>
                          </div>

                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Pro+
                      </td>
                      <td>
                        <div class="row">
                          <div class="field-bahan">
                            <input type="radio" id="proplus" name="bb" value="MOVING-KNIT" {{ $data->bahan_baju == 'MOVING-KNIT' ? 'checked' : '' }} >
                            <div class="title-note">MOVING KNIT</div>
                            <label for="proplus" style="background-image: url('{{ asset('/asset/material/BAHAN - PROPLUS/proplus.jpg') }}');">
                            </label>
                          </div>

                        </div>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="zoomed-in-image">
      </div>

      <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal
        var img = document.querySelector(".form-upload img");
        var modalImg = document.getElementById("zoomed-in-image");
        img.onclick = function() {
          modal.style.display = "block";
          modalImg.src = this.src;
        };

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = "none";
        };

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        };
      </script>


      <div class="container">
        <div class="actions pt275">
          <button type="submit" class="btn action__submit">Save & Next
            <i class="icon icon-arrow-right-circle"></i>
          </button>
          <a href="{{ url('/form-2/'.$kode) }}" class="backBtn">Go Back to Design</a>
        </div>
        </form>
  </section>
  </div>
  <!-- partial -->
</body>

</html>