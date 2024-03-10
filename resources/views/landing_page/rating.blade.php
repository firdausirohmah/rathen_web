<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rathen</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700|Open+Sans:400,600'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('asset/css/rating.css') }}">
    
  </head>
  <body>


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
        <h5 class="fw-semibold">Note of Stars</h5>
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
                        <input type="text" name="nama" id="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_tim">Nama Tim</label>
                        <input type="text" name="nama_tim" id="nama_tim" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="photo">Foto</label>
                        <input type="file" name="photo" id="photo" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="kesesuaian">1. Bagaimana kesesuain desain dengan hasil produksi</label>
                        <div class="container_rate">
                            <div class="container__items">
                                <input type="radio" name="kesesuaian" id="st5" value="5" class="form-check-input">
                                <label for="st5">
                                <div class="star-stroke">
                                    <div class="star-fill"></div>
                                </div>
                                <div class="label-description" data-content="Excellent"></div>
                                </label>
                                <input type="radio" name="kesesuaian" id="st4" value="4" class="form-check-input">
                                <label for="st4">
                                <div class="star-stroke">
                                    <div class="star-fill"></div>
                                </div>
                                <div class="label-description" data-content="Good"></div>
                                </label>
                                <input type="radio" name="kesesuaian" id="st3" value="3" class="form-check-input">
                                <label for="st3">
                                <div class="star-stroke">
                                    <div class="star-fill"></div>
                                </div>
                                <div class="label-description" data-content="OK"></div>
                                </label>
                                <input type="radio" name="kesesuaian" id="st2" value="2" class="form-check-input">
                                <label for="st2">
                                <div class="star-stroke">
                                    <div class="star-fill"></div>
                                </div>
                                <div class="label-description" data-content="Bad"></div>
                                </label>
                                <input type="radio" name="kesesuaian" id="st1" value="1" class="form-check-input">
                                <label for="st1">
                                <div class="star-stroke">
                                    <div class="star-fill"></div>
                                </div>
                                <div class="label-description" data-content="Terrible"></div>
                                </label>
                            </div>
                        </div>

                        {{--<div class="form-check">
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
                        </div>--}}
                    </div>

                    <div class="form-group">
                        <label for="kualitas">2. Bagaimana kualitas produk yang diterima</label>
                        <div class="container_rate">
                            <div class="container__items">
                                <input type="radio" name="kualitas" id="kualitas5" value="5" class="form-check-input">
                                <label for="kualitas5">
                                <div class="star-stroke">
                                    <div class="star-fill"></div>
                                </div>
                                <div class="label-description" data-content="Excellent"></div>
                                </label>
                                <input type="radio" name="kualitas" id="kualitas4" value="4" class="form-check-input">
                                <label for="kualitas4">
                                <div class="star-stroke">
                                    <div class="star-fill"></div>
                                </div>
                                <div class="label-description" data-content="Good"></div>
                                </label>
                                <input type="radio" name="kualitas" id="kualitas3" value="3" class="form-check-input">
                                <label for="kualitas3">
                                <div class="star-stroke">
                                    <div class="star-fill"></div>
                                </div>
                                <div class="label-description" data-content="OK"></div>
                                </label>
                                <input type="radio" name="kualitas" id="kualitas2" value="2" class="form-check-input">
                                <label for="kualitas2">
                                <div class="star-stroke">
                                    <div class="star-fill"></div>
                                </div>
                                <div class="label-description" data-content="Bad"></div>
                                </label>
                                <input type="radio" name="kualitas" id="kualitas1" value="1" class="form-check-input">
                                <label for="kualitas1">
                                <div class="star-stroke">
                                    <div class="star-fill"></div>
                                </div>
                                <div class="label-description" data-content="Terrible"></div>
                                </label>
                            </div>
                        </div>

                        {{--<div class="form-check">
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
                        </div>--}}
                    </div>
                    <div class="form-group">
                        <label for="fitur">3. Bagaimana dengan fitur yang ditawarkan</label>
                        <div class="container_rate">
                            <div class="container__items">
                                <input type="radio" name="fitur" id="fitur5" value="5" class="form-check-input">
                                <label for="fitur5">
                                <div class="star-stroke">
                                    <div class="star-fill"></div>
                                </div>
                                <div class="label-description" data-content="Excellent"></div>
                                </label>
                                <input type="radio" name="fitur" id="fitur4" value="4" class="form-check-input">
                                <label for="fitur4">
                                <div class="star-stroke">
                                    <div class="star-fill"></div>
                                </div>
                                <div class="label-description" data-content="Good"></div>
                                </label>
                                <input type="radio" name="fitur" id="fitur3" value="3" class="form-check-input">
                                <label for="fitur3">
                                <div class="star-stroke">
                                    <div class="star-fill"></div>
                                </div>
                                <div class="label-description" data-content="OK"></div>
                                </label>
                                <input type="radio" name="fitur" id="fitur2" value="2" class="form-check-input">
                                <label for="fitur2">
                                <div class="star-stroke">
                                    <div class="star-fill"></div>
                                </div>
                                <div class="label-description" data-content="Bad"></div>
                                </label>
                                <input type="radio" name="fitur" id="fitur1" value="1" class="form-check-input">
                                <label for="fitur1">
                                <div class="star-stroke">
                                    <div class="star-fill"></div>
                                </div>
                                <div class="label-description" data-content="Terrible"></div>
                                </label>
                            </div>
                        </div>

                        {{--<div class="form-check">
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
                        </div>--}}
                    </div>
                    <div class="form-group">
                        <label for="waktu_produksi">4. Bagaimana priode waktu produksi</label>
                        <div class="container_rate">
                            <div class="container__items">
                                <input type="radio" name="waktu_produksi" id="waktu_produksi5" value="5" class="form-check-input">
                                <label for="waktu_produksi5">
                                <div class="star-stroke">
                                    <div class="star-fill"></div>
                                </div>
                                <div class="label-description" data-content="Excellent"></div>
                                </label>
                                <input type="radio" name="waktu_produksi" id="waktu_produksi4" value="4" class="form-check-input">
                                <label for="waktu_produksi4">
                                <div class="star-stroke">
                                    <div class="star-fill"></div>
                                </div>
                                <div class="label-description" data-content="Good"></div>
                                </label>
                                <input type="radio" name="waktu_produksi" id="waktu_produksi3" value="3" class="form-check-input">
                                <label for="waktu_produksi3">
                                <div class="star-stroke">
                                    <div class="star-fill"></div>
                                </div>
                                <div class="label-description" data-content="OK"></div>
                                </label>
                                <input type="radio" name="waktu_produksi" id="waktu_produksi2" value="2" class="form-check-input">
                                <label for="waktu_produksi2">
                                <div class="star-stroke">
                                    <div class="star-fill"></div>
                                </div>
                                <div class="label-description" data-content="Bad"></div>
                                </label>
                                <input type="radio" name="waktu_produksi" id="waktu_produksi1" value="1" class="form-check-input">
                                <label for="waktu_produksi1">
                                <div class="star-stroke">
                                    <div class="star-fill"></div>
                                </div>
                                <div class="label-description" data-content="Terrible"></div>
                                </label>
                            </div>
                        </div>

                        {{--<div class="form-check">
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
                        </div>--}}
                    </div>
                    <div class="form-group">
                        <label for="pelayanan">5. Bagaimaan pelayanan dan komunikasi dengan admin</label>
                        <div class="container_rate">
                            <div class="container__items">
                                <input type="radio" name="pelayanan" id="pelayanan5" value="5" class="form-check-input">
                                <label for="pelayanan5">
                                <div class="star-stroke">
                                    <div class="star-fill"></div>
                                </div>
                                <div class="label-description" data-content="Excellent"></div>
                                </label>
                                <input type="radio" name="pelayanan" id="pelayanan4" value="4" class="form-check-input">
                                <label for="pelayanan4">
                                <div class="star-stroke">
                                    <div class="star-fill"></div>
                                </div>
                                <div class="label-description" data-content="Good"></div>
                                </label>
                                <input type="radio" name="pelayanan" id="pelayanan3" value="3" class="form-check-input">
                                <label for="pelayanan3">
                                <div class="star-stroke">
                                    <div class="star-fill"></div>
                                </div>
                                <div class="label-description" data-content="OK"></div>
                                </label>
                                <input type="radio" name="pelayanan" id="pelayanan2" value="2" class="form-check-input">
                                <label for="pelayanan2">
                                <div class="star-stroke">
                                    <div class="star-fill"></div>
                                </div>
                                <div class="label-description" data-content="Bad"></div>
                                </label>
                                <input type="radio" name="pelayanan" id="pelayanan1" value="1" class="form-check-input">
                                <label for="pelayanan1">
                                <div class="star-stroke">
                                    <div class="star-fill"></div>
                                </div>
                                <div class="label-description" data-content="Terrible"></div>
                                </label>
                            </div>
                        </div>
                        
                        {{--<div class="form-check">
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
                        </div>--}}
                    </div>
                </div>
                
                <div class="col">
                    <div class="form-group">
                        <label for="alasan">6. Sebutkan 3 alasan utama Anda membuat jersey di rathen</label>
                        <p class="multiple-note">*Select option below</p>
                        <select class="form-select" aria-label="multiple select example" name="alasan[] " id="alasan" multiple>
                            <option value="Kualitas produk bagus">Kualitas Produk Bagus</option>
                            <option value="Design-design yang keren">Design-design yang keren</option>
                            <option value="Memiliki banyak jenis pilihan logo yang premium">Memiliki banyak jenis pilihan logo yang premium</option>
                            <option value="Memiliki pilihan kain yang unik dan berbeda">Memiliki pilihan kain yang unik dan berbeda</option>
                            <option value="Fitur mewah lasercut">Fitur mewah lasercut</option>
                            <option value="Proses produksi yang cepat">Proses produksi yang cepat</option>
                            <option value="Pelayanan yang baik">Pelayanan yang baik</option>
                            <option value="Sajian portofolio produksi yang baik">Sajian portofolio produksi yang baik</option>
                            <option value="Memiliki store ofline">Memiliki store ofline</option>
                            <option value="Proses pemesanan yang mudah (user friendly) di website">Proses pemesanan yang mudah (user friendly) di website</option>
                            <option value="Ingin coba produk rathen">Ingin coba produk rathen</option>
                            <option value="Harga yang worth it dengan kualitas yang diterima">Harga yang worth it dengan kualitas yang diterima</option>
                            <!-- tambahkan option lainya yang diminta client sesuaikan saja value sama yang ditampilkan-->
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="penialaian">7. Apa saja bisnis proses atau pelayanan kami yang sudah sangat baik</label>
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

        function handleSelection(event) {
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
        }

        if (window.innerWidth > 768) {
            selectElement.addEventListener('mousedown', handleSelection);

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
        }
    });
    </script>

  </body>
</html>