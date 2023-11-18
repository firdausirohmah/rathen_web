@extends('layout.landingpage')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slider</title>
    <script src="/js/app.js" defer></script>
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
    <section class="py-5 py-xl-8">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
              <h2 class="mb-4 display-5 text-center" style="font-family: Montheavy; color: #1890fd; font-size: 24px; font-weight: bold; margin-bottom: 20px; text-align: center;">ABOUT US</h2>
                <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
            </div>
          </div>
        </div>
    </section>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="asset/images/swiss.jpg" class="d-block w-10" alt="swiss">
                        </div>
                        <div class="carousel-item">
                            <img src="asset/images/top.jpg" class="d-block w-10" alt="top">
                        </div>
                        <div class="carousel-item">
                            <img src="asset/images/usa.jpg" class="d-block w-10" alt="usa">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            
        </div>
    </div>
    
    <!-- Tambahkan script berikut -->
    <script>
        // Menginisialisasi carousel dengan interval 2000 milidetik (2 detik)
        var myCarousel = new bootstrap.Carousel(document.getElementById('carouselExampleSlidesOnly'), {
            interval: 2000
        });
    </script>
    
</body>
</html>


@endsection
