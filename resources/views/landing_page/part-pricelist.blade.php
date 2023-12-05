@extends('layout.landingpage_nofooter')

@section('content')


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@500&display=swap');
      *{
        font-family: 'Red Hat Display', sans-serif;
      }
                .count{
                    background: none;
                    border: none;
                    color: blue; /* Sesuaikan dengan warna teks yang diinginkan */
                    text-decoration: underline; /* Menambahkan garis bawah untuk menunjukkan bahwa itu adalah tautan */
                    cursor: pointer;
                    padding: 0;
                    font-size: inherit;
                }
                <style>
        /* Gaya untuk tata letak dan tampilan */
        .quantity-container {
            display: flex;
            align-items: center;
        }

        .quantity-input {
            width: 50px;
            text-align: center;
            margin: 0 10px;
        }

        .quantity-button {
            cursor: pointer;
            padding: auto;
            font-size: 16px;
            /* align-items: center; */
            /* align-content: center; */
            text-align: center;
            margin: auto;
            margin-left: auto;
            margin-right: auto;
        }
        button.clicked {
          background-color: #000;
          color: #fff;
        }
        #imageSlider {
      width: 70%;
      margin: auto;
    }

    /* Gaya untuk pilihan gambar di bawah slider */
    .thumbnail-container {
      margin-top: 20px;
    }

    .thumbnail {
      width: 40px;
      height: 40px;
      /* margin-right: 5px; */
      cursor: pointer;
    }

    .thumbnail img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .selected-thumbnail {
      border: 2px solid #007bff;
    }
    </style>
    <link rel="stylesheet" href="asset/css/styles.css">
    <section id="home" style="overflow: hidden;">
    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col"><small class="text-muted">Home / Half-Print</small></div>
        </div>
    </div>
    {{-- <div class="d-inline-flex gap-1">
      <a href="#" class="btn" role="button" data-bs-toggle="button">Toggle link</a>
      <a href="#" class="btn active" role="button" data-bs-toggle="button" aria-pressed="true">Active toggle link</a>
      <a class="btn disabled" aria-disabled="true" role="button" data-bs-toggle="button">Disabled toggle link</a>
    </div>
    <p class="d-inline-flex gap-1">
      <a href="#" class="btn btn-primary" role="button" data-bs-toggle="button">Toggle link</a>
      <a href="#" class="btn btn-primary active" role="button" data-bs-toggle="button" aria-pressed="true">Active toggle link</a>
      <a class="btn btn-primary disabled" aria-disabled="true" role="button" data-bs-toggle="button">Disabled toggle link</a>
    </p> --}}
    <div class="container-xxl">
        <div class="row">
            <div class="col-lg-3">
              <div class="card">
                <div class="card-body">
                {{-- <img src="https://www.shutterstock.com/image-vector/adventure-offroad-4x4-badges-logo-260nw-2041894727.jpg" width="90%" class="img-fluid rounded-top mx-auto my-auto" alt=""> --}}
                <div id="imageSlider" class="carousel slide mx-auto" data-bs-interval="false">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{ asset('asset/extra/casual/C-1.png') }}" class="d-block w-100" alt="Image 1">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('asset/extra/casual/C-2.png') }}" class="d-block w-100" alt="Image 2">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('asset/extra/casual/C-3.png') }}" class="d-block w-100" alt="Image 3">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('asset/extra/casual/C-4.png') }}" class="d-block w-100" alt="Image 4">
                    </div>
                  </div>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col">
                      <div class="thumbnail bg-primary selected-thumbnail" onclick="changeSlide(0)">
                        <img src="{{ asset('asset/extra/casual/C-1.png') }}" alt="Thumbnail 1">
                      </div>
                    </div>
                    <div class="col">
                      <div class="thumbnail" onclick="changeSlide(1)">
                        <img src="{{ asset('asset/extra/casual/C-2.png') }}" alt="Thumbnail 2">
                      </div>
                    </div>
                    <div class="col">
                      <div class="thumbnail" onclick="changeSlide(2)">
                        <img src="{{ asset('asset/extra/casual/C-3.png') }}" alt="Thumbnail 3">
                      </div>
                    </div>
                    <div class="col">
                      <div class="thumbnail" onclick="changeSlide(3)">
                        <img src="{{ asset('asset/extra/casual/C-4.png') }}" alt="Thumbnail 4">
                      </div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
            <script>
              // Fungsi untuk mengubah slide berdasarkan thumbnail yang dipilih
              function changeSlide(index) {
                document.querySelector('#imageSlider').querySelector('.carousel-inner').children[index].classList.add('active');
                document.querySelector('#imageSlider').querySelector('.carousel-inner').children[(index + 1) % 3].classList.remove('active');
                document.querySelector('#imageSlider').querySelector('.carousel-inner').children[(index + 2) % 3].classList.remove('active');
            
                // Menghapus kelas 'selected-thumbnail' dari semua thumbnail
                document.querySelectorAll('.thumbnail').forEach(function(thumbnail) {
                  thumbnail.classList.remove('selected-thumbnail');
                });
            
                // Menambahkan kelas 'selected-thumbnail' ke thumbnail yang dipilih
                document.querySelector('.thumbnail-container').querySelectorAll('.thumbnail')[index].classList.add('selected-thumbnail');
              }
            </script>
            <div class="col-lg-6 " style="font-weight: 200; padding-left:10px;">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">DAFTAR HARGA JERSEY RATHEN</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <div class="container">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4" style="margin-top: auto; margin-bottom:auto; margin-left:0px; margin-right:0px;"><img src="{{ asset('asset/images/price-list/ceklis.png') }}" style="width:20px;" alt=""></div>
                                        <div class="col-lg-8" style="font-size: 14px">Stok <br> Tersedia</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4" style="margin-top: auto; margin-bottom:auto; margin-left:0px; margin-right:0px;"><img src="{{ asset('asset/images/price-list/broom.png') }}" width="20px" alt=""></div>
                                        <div class="col-lg-8" style="font-size: 14px">Bebas Biaya <br> Pengiriman</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3" style="margin-top: auto; margin-bottom:auto; margin-left:0px; margin-right:0px;"><img src="{{ asset('asset/images/price-list/presen.png') }}" width="20px" alt=""></div>
                                        <div class="col-lg-8" style="font-size: 14px">Cicilan 0% Hingga <br>24 Bulan</div>
                                    </div>
                                </div>
                                 
                            </div>
                        </div>
                        <div class="row mt-4 ">
                          <span>Kualitas :</span>
                          <div class="col">
                                <button class="btn btn-outline-secondary w-25 mx-3 menu-button" id="buttonA" onclick="selectOption(1, 1)">STADIUM</button>
                                <button class="btn btn-outline-secondary w-25 mx-3 menu-button" id="buttonB" onclick="selectOption(1, 2)">PRO</button>
                                <button class="btn btn-outline-secondary w-25 mx-3 menu-button" id="buttonC" onclick="selectOption(1, 3)">PRO<sup>+</sup></button>
                            </div>
                        </div>
                        <div class="row mt-4 ">
                          <span>Kategori :</span>
                          <div class="col">
                                <button class="btn btn-outline-secondary w-25 mx-3 menu-button" id="button1" onclick="selectOption(2, 1)">Non - Print</button>
                                <button class="btn btn-outline-secondary w-25 mx-3 menu-button" id="button2" onclick="selectOption(2, 2)">Half - Print</button>
                                <button class="btn btn-outline-secondary w-25 mx-3 menu-button" id="button3" onclick="selectOption(2, 3)">Full Print</button>
                            </div>
                        </div>
                    </div>
                    </div>
                  </div>
            </div>
          
            <div class="col-lg-3" style="font-weight: 200;">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Rp 24.000.000</h5>
                        <div class="container mt-4">
                            <div class="row">
                                <div class="col">
                                    <div class="quantity-button" onclick="decrement()">-</div>
                                </div>
                                <div class="col"><input type="text" class="quantity-input" id="quantityInput" value="1" readonly></div>
                                <div class="col"><div class="quantity-button" onclick="increment()">+</div></div>
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
            
        </div>

      </div>
      <style>
        /* Gaya dasar untuk tombol */
        .menu-button {
          padding: 10px;
          font-size: 16px;
          cursor: pointer;
        }
    
        /* Gaya untuk tombol yang dipilih */
        .selected {
          background-color: #fff;
          color: #fff;
        }
      </style>
    <!-- Jenis pilihan 1 -->
    {{-- <button class="menu-button" onclick="selectOption(1, 1)">Pilihan 1A</button>
    <button class="menu-button" onclick="selectOption(1, 2)">Pilihan 1B</button>
    <button class="menu-button" onclick="selectOption(1, 3)">Pilihan 1C</button> --}}
    
    <!-- Jenis pilihan 2 -->
    {{-- <button class="menu-button" onclick="selectOption(2, 1)">Pilihan 2A</button>
    <button class="menu-button" onclick="selectOption(2, 2)">Pilihan 2B</button>
    <button class="menu-button" onclick="selectOption(2, 3)">Pilihan 2C</button> --}}
    
    <!-- Tombol untuk mengubah warna jika minimal 2 menu telah dipilih -->
    <button id="submitBtn" onclick="changeColor()">Submit</button>
    
    <script>
      // Variabel untuk melacak pemilihan menu
      var selectedOptions = [];
    
      // Fungsi untuk menangani pemilihan menu
      function selectOption(type, option) {
        // Memeriksa apakah menu sudah dipilih, jika ya, hapus dari array
        var index = selectedOptions.indexOf(`${type}-${option}`);
        if (index !== -1) {
          selectedOptions.splice(index, 1);
        } else {
          // Jika belum dipilih, tambahkan ke array
          selectedOptions.push(`${type}-${option}`);
        }
    
        // Menghapus kelas "selected" dari semua tombol
        var buttons = document.querySelectorAll('.menu-button');
        buttons.forEach(function(button) {
          button.classList.remove('selected');
        });
    
        // Menambahkan kelas "selected" ke tombol yang dipilih
        selectedOptions.forEach(function(selectedOption) {
          var [selectedType, selectedNumber] = selectedOption.split('-');
          var selectedButton = document.querySelector(`.menu-button:nth-child(${selectedType * 3 + parseInt(selectedNumber)})`);
          selectedButton.classList.add('selected');
        });
      }
    
      // Fungsi untuk mengubah warna tombol jika minimal 2 menu telah dipilih
      function changeColor() {
        if (selectedOptions.length >= 2) {
          document.getElementById('submitBtn').style.backgroundColor = 'red';
        } else {
          alert('Pilih minimal 2 menu.');
        }
      }
    </script>
    </section>
    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <ul class="list-inline social-buttons">
              <li><a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li><a href="#"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-github"></i></a>
                      </li>
                      </ul>
                      <p class="copyright text-muted small">Copyright &copy; Your Website 2016. All Rights Res
                        </div>
                        </div>
                        </div>

    </footer>
  
    {{-- end of title page --}}
    <script>
      // Mendapatkan elemen tombol A dan B dari DOM
      var buttonA = document.getElementById('buttonA');
      var buttonB = document.getElementById('buttonB');
      var buttonC = document.getElementById('buttonC');

      var button1 = document.getElementById('button1');
      var button2 = document.getElementById('button2');
      var button3 = document.getElementById('button3');

      buttonA.addEventListener('click', function() {
        // Mematikan tombol B
        button1.disabled = false;
        button2.disabled = false;
        button3.disabled = false;
      });
      // Menambahkan event listener untuk tombol A
      buttonB.addEventListener('click', function() {
        // Mematikan tombol B
        button1.disabled = true;
        button2.disabled = true;
        button3.disabled = true;
      });
      buttonC.addEventListener('click', function() {
        // Mematikan tombol B
        button1.disabled = true;
        button2.disabled = true;
        button3.disabled = true;
      });
        // Fungsi untuk mengubah warna tombol
      function changeColor(button) {
        // Mengubah warna tombol menjadi merah
        button.style.backgroundColor = 'red';
      }
    </script>
    
    <script>
        // Fungsi untuk mengurangi jumlah
        function decrement() {
            var quantityInput = document.getElementById('quantityInput');
            var currentValue = parseInt(quantityInput.value, 10);
            
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
            }
        }
        
        // Fungsi untuk menambah jumlah
        function increment() {
            var quantityInput = document.getElementById('quantityInput');
            var currentValue = parseInt(quantityInput.value, 10);
            
            quantityInput.value = currentValue + 1;
        }
    </script>
        @endsection