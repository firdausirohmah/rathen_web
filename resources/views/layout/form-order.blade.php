<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="asset/images/LOGO.png">

    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>
<link rel="stylesheet" href="{{ asset('asset/css/part.css') }}" class="template-customizer-core-css" />
<script src="asset/js\bootstrap.js"></script>

<style>
  .nav-link.active span {
    color: white; /* Ganti warna sesuai kebutuhan */
    /* Atau tambahkan gaya CSS lainnya untuk menyesuaikan tampilan */
  }
</style>
<body>
    <br>
    <h3 style="font-family: Montheavy; color: #1890fd;  font-weight: bold; text-decoration: underline;
    margin-bottom: 20px; text-align: center;">FORM ORDER - CUSTOM RATHEN</h3>
    <div class="container justify-content-center">
    <div class="row ">
        <div class="col-xl-7">
          <div class="nav-align-top mb-4">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a href="{{ url('/form-1') }}">
                    <button
                    type="button"
                    class="nav-link {{ request()->is('form-1') ? 'active' : '' }}"
                    role="tab" 
                    data-bs-toggle="tab"
                    data-bs-target="#navs-top-home"
                    aria-controls="navs-top-home"
                    aria-selected="true"
                    
                    ><span>Step 1</span>
                  </button>
                </a>
                
              </li>
              
              <li class="nav-item">
                <a href="{{ url('/form-2') }}">
                    <button
                    type="button"
                    class="nav-link {{ request()->is('form-2') ? 'active' : '' }}"
                    role="tab" 
                    data-bs-toggle="tab"
                    data-bs-target="#navs-top-home"
                    aria-controls="navs-top-home"
                    aria-selected="true"
                  >
                    <span>Step 2</span>
                  </button>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('/form-3') }}">

                <button
                  type="button"
                  class="nav-link {{ request()->is('form-3') ? 'active' : '' }}"
                  role="tab" 
                  data-bs-toggle="tab"
                  data-bs-target="#navs-top-profile"
                  aria-controls="navs-top-profile"
                  aria-selected="false"
                >
                  <span>Step 3</span>
                </button>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/form-4') }}">

                <button
                  type="button"
                  class="nav-link {{ request()->is('form-4') ? 'active' : '' }}"
                  role="tab" 
                  data-bs-toggle="tab"
                  data-bs-target="#navs-top-profile"
                  aria-controls="navs-top-profile"
                  aria-selected="false"
                >
                  <span>Step 4</span>
                </button>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/invoice') }}">

                <button
                  type="button"
                  class="nav-link {{ request()->is('invoice') ? 'active' : '' }}"
                  role="tab" 
                  data-bs-toggle="tab"
                  data-bs-target="#navs-top-messages"
                  aria-controls="navs-top-messages"
                  aria-selected="false"
                >
                  <span>Step 5</span>
                </button>
                </a>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>
 
    @yield('content')
    {{-- <footer>
          <div  style="text-align: right; " class="mt-4">
            <button type="button" style="font-family: Montheavy; width:20%; font-size:12px; margin-left:10%" class="btn btn-secondary">Data MASUK ke CRM</button>
          </div>
          <div style="text-align: right;" class="">
          </div>
      
    </footer> --}}
              
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>