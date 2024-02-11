<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rathen</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700|Open+Sans:400,600'>
<!-- <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700|Open+Sans:400,600'> -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css'><link rel="stylesheet" href="{{ asset('asset/css/formOrder.css') }}">

</head>
<body>
<!-- partial:index.partial.html -->
<header>
    <div class="container">
      <div class="navigation center-content">

        <div class="logo">
          <img class="icon icon-basket" src="{{asset('asset/cfind/source/images/rathen.png')}}" width="12%"></div>
        
      </div>
      <div class="notification">
        Custom Rathen - Form Order
      </div>
    </div>
  </header>
  <section class="content" style="padding-top:3rem;">
    <a class="btn" style="padding:1rem;margin-left:2rem" href="/invoice/{{$kode}}">
      <i class="icon icon-arrow-left"></i>
      Back
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
              <div class="form__cc">
                <div class="row">
                  <div class="field">
                    <div class="title">Kategori Harga
                    </div>
                    <input type="text" class="input txt" value="{{ $data->kategori_harga }}" readonly/>
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title">Kualitas
                    </div>
                    <input type="text" class="input txt" value="{{ $data->tipe_kualitas }}" readonly/>
                  </div>
                </div>
                <div class="row">
                  <div class="field small">
                    <div class="title">Pola lengan
                    </div>
                    <select name="pola_lengan" class="input ddl">
                      <option value="Normal">Normal</option>
                      <option value="Raglan">Reglan</option>
                    </select>
                    <span class="title">+15,000 pola raglan</span>
                    <!-- <input type="text" class="input ddl" value='(+15,000 pola raglan)' disabled/> -->
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title">Model Kerah
                    </div>
                    <select name="model_kerah" class="input ddl w-100">
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
                    <div class="title">Bahan baju
                    </div>
                    <input type="text"  name="bb" class="input txt" value='' />
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title">Bahan celana
                    </div>
                    <input type="text" name="bc" class="input txt" value='' />
                  </div>
                </div>
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
                <div class="table">
                  <div class="payment__title fw-6">
                    <i class="icon icon-info"></i> Jenis bahan
                  </div>
                  <table class="wp-table">
                    <tr>
                      <th>Fans</th>
                      <th>Stadium</th>
                      <th>Pro</th>
                    </tr>
                    <tr>
                      <td>
                        <ul>
                          <li>MILANO</li>
                          <li>BINTIK</li>
                        </ul>
                      </td>
                      <td>
                        <ul>
                          <li>RTNH-TECT</li>
                          <li>EMBOS-TOPO</li>
                          <li>EMBOS-STRAW</li>
                          <li>DROPNIDLE</li>
                          <li>AIRWALK</li>
                          <li>SMASH</li>
                          <li>RHABIT</li>
                        </ul>
                      </td>
                      <td>
                        <ul>
                          <li>MOVINGKNIT</li>
                        </ul>
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
      <div class="actions pt135">
        <button href="/form/orderStep4" class="btn action__submit">Save & Next
          <i class="icon icon-arrow-right-circle"></i>
        </button>
        <a href="{{ url('/form-2') }}" class="backBtn">Go Back to Design</a>
      </div>
    </form>
  </section>
  </div>
<!-- partial -->
  
</body>
</html>
