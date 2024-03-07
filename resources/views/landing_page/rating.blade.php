<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rathen</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700|Open+Sans:400,600'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body{
            font-family: "Montserrat", sans-serif;
            line-height: 1.4;
        }

        /* multiple select */
        select[multiple] {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        background-color: transparent;
        border: none;
        padding: 0;
        margin: 0;
        overflow: hidden;
        height: 200px;
        width: 100%;
        }

        select[multiple] option {
        padding: 10px;
        background-color: #fff;
        border-bottom: 1px solid #ddd;
        cursor: pointer;
        }

        select[multiple] option:hover {
        background-color: #f0f0f0;
        }

        select[multiple] option:checked {
        background-color: #e0e0e0;
        }
        .form-select#alasan{
            height: 250px;
            padding-left: 1rem;
        }

        /* form */
        .form-group{
            padding-top:1rem;
        }
        .form-check-input:checked {
            background-color: #000;
            border-color: #000;
        }
        .form-control:focus, .form-check-input:focus, .form-select:focus{
            border-color: #57595c;
            box-shadow: 0 0 0 0.25rem rgb(36 45 59 / 25%);
        }
        .logo img{
            width:12%;
        }
        @media only screen and (max-width: 600px) {
            .row{
                display:block;
            }
            .form-check-inline{
                margin-right:0.75rem;
            }
            select[multiple] option {
                font-size:10px;
                padding: 8px;
            }
            .form-select#alasan{
                height: 175px;
                padding-left: 0.5rem;
            }
            .logo img{
                width:25%
            }

        }
    </style>
    <!-- <link rel="stylesheet" href="{{ asset('asset/css/formOrder.css') }}"> -->
  </head>
  <body>

  <!-- @foreach($data as $d)
  <img src="{{asset('uploads/'.$d->media->filename)}}" alt="">
  nama: {{$d->name}} <br> 
  nama tim: {{$d->team_name}} <br> 
  pesan: {{$d->pesan}} <br> 
  rating: {{$d->rating}} <br> 

  @endforeach -->
    <header class="bg-black">
        <div class="container text-center">
            <div class="navigation center-content">
                <div class="logo">
                    <img class="icon " src="{{asset('asset/cfind/source/images/rathen.png')}}">
                </div>
            </div>
            <div class="text-white py-3">
                <h3 class="fw-semibold">Rathen - Rating</h3>
            </div>
        </div>
    </header>

    <a class="btn btn-dark mt-4 ms-4" href="/page-custom">
      <i class="icon-arrow-left p-3"></i>
    </a>

    <div class="container pt-3 ps-5">
        <h5 class="fw-semibold">Note of Value</h5>
        <div class="row">
            <div class="col-sm">1 = Sangat Tidak Puas</div>
            <div class="col-sm">2 = Tidak Puas</div>
            <div class="col-sm">3 = Biasa Saja</div>
            <div class="col-sm">4 = Puas</div>
            <div class="col-sm">5 = Sangat Puas</div>
        </div>
    </div>
    <div class="container p-5">
        <form action="{{route('rating.add')}}" method="post" enctype="multipart/form-data">
            @csrf

            <h5 class="fw-semibold">Rate us</h5>
            <div class="row gap-5">
                <div class="col">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nama_tim">Nama Tim</label>
                        <input type="text" name="nama_tim" id="nama_tim" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="photo">Foto</label>
                        <input type="file" name="photo" id="photo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="kesesuaian">1. Bagaimana kesesuain desain dengan hasil produksi</label>
                        <div class="form-check">
                            <div class="form-check form-check-inline">
                                <input type="radio" name="kesesuaian" id="kesesuaian" value="1" class="form-check-input">1
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="kesesuaian" id="kesesuaian" value="2" class="form-check-input">2
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="kesesuaian" id="kesesuaian" value="3" class="form-check-input">3
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="kesesuaian" id="kesesuaian" value="4" class="form-check-input">4
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="kesesuaian" id="kesesuaian" value="5" class="form-check-input">5
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="kualitas">2. Bagaimana kualitas produk yang diterima</label>
                        <div class="form-check">
                            <div class="form-check form-check-inline">
                                <input type="radio" name="kualitas" id="kualitas" value="1" class="form-check-input">1
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="kualitas" id="kualitas" value="2" class="form-check-input">2
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="kualitas" id="kualitas" value="3" class="form-check-input">3
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="kualitas" id="kualitas" value="4" class="form-check-input">4
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="kualitas" id="kualitas" value="5" class="form-check-input">5
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fitur">3. Bagaimana dengan fitur yang ditawarkan</label>
                        <div class="form-check">
                            <div class="form-check form-check-inline">
                                <input type="radio" name="fitur" id="fitur" value="1" class="form-check-input">1
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="fitur" id="fitur" value="2" class="form-check-input">2
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="fitur" id="fitur" value="3" class="form-check-input">3
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="fitur" id="fitur" value="4" class="form-check-input">4
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="fitur" id="fitur" value="5" class="form-check-input">5
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="waktu_produksi">4. Bagaimana priode waktu produksi</label>
                        <div class="form-check">
                            <div class="form-check form-check-inline">
                                <input type="radio" name="waktu_produksi" id="waktu_produksi" value="1" class="form-check-input">1
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="waktu_produksi" id="waktu_produksi" value="2" class="form-check-input">2
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="waktu_produksi" id="waktu_produksi" value="3" class="form-check-input">3
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="waktu_produksi" id="waktu_produksi" value="4" class="form-check-input">4
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="waktu_produksi" id="waktu_produksi" value="5" class="form-check-input">5
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pelayanan">5. Bagaimaan pelayanan dan komunikasi dengan admin</label>
                        <div class="form-check">
                            <div class="form-check form-check-inline">
                                <input type="radio" name="pelayanan" id="pelayanan" value="1" class="form-check-input">1
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="pelayanan" id="pelayanan" value="2" class="form-check-input">2
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="pelayanan" id="pelayanan" value="3" class="form-check-input">3
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="pelayanan" id="pelayanan" value="4" class="form-check-input">4
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="pelayanan" id="pelayanan" value="5" class="form-check-input">5
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="form-group">
                        <label for="alasan">6. Sebutkan 3 alasan utama Anda membuat jersey di rathen</label>
                        <select class="form-select" aria-label="multiple select example" name="alasan[] " id="alasan" multiple>
                            <option value="Kualitas produk bagus">Kualitas Produk Bagus</option>
                            <option value="Design-design yang keren">Design-design yang keren</option>
                            <option value="Memiliki banyak jenis pilihan logo yang premium">Memiliki banyak jenis pilihan logo yang premium</option>
                            <option value="Memiliki pilihan kain yang unik dan berbeda">Memiliki pilihan kain yang unik dan berbeda</option>
                            <option value="Fitur mewah lasercut">Fitur mewah lasercut</option>
                            <option value="Proses produksi yang cepat">Proses produksi yang cepat</option>
                            <!-- tambahkan option lainya yang diminta client sesuaikan saja value sama yang ditampilkan-->
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="penialaian">7. Apa saja bsisnis proses atau pelayanan kami yang sudah sangat baik</label>
                        <textarea name="penilaian" id="penilaian" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="pesan">8. Apa saja perbaikan dan inovasi yang perlu kami lakukan agar produk dan pelayanan kami lebih baik lagi</label>
                        <textarea name="pesan" id="pesan" class="ps-1 form-control" rows="3"></textarea>
                    </div>
                    
                </div>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-lg btn-dark px-5 mt-5">Submit</button>
            </div>

        </form>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var selectElement = document.getElementById('alasan');
        var options = selectElement.options;

        selectElement.addEventListener('mousedown', function (event) {
            event.preventDefault(); // Prevent default behavior (e.g., closing dropdown)
            var option = event.target;

            var selectedOptions = Array.from(options).filter(option => option.selected);
            if (selectedOptions.length < 3 || option.selected) {
                if (!option.selected) {
                    option.selected = true; // Toggle selection
                    option.classList.add('active'); // Add active class
                } else {
                    option.selected = false; // Toggle selection
                    option.classList.remove('active'); // Remove active class
                }
            }
        });

        // Add event listener to clear selection on mouseup
        document.addEventListener('mouseup', function () {
            var selectedOptions = Array.from(options).filter(option => option.selected);
            if (selectedOptions.length > 3) {
                selectedOptions.forEach(option => {
                    if (!option.classList.contains('active')) {
                        option.selected = false;
                    }
                });
            }
        });
    });
    </script>

  </body>
</html>