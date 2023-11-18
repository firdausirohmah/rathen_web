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

    {{-- <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="asset/images/swiss.jpg" class="d-block w-100" alt="swiss">
                        </div>
                        <div class="carousel-item">
                            <img src="asset/images/top.jpg" class="d-block w-100" alt="top">
                        </div>
                        <div class="carousel-item">
                            <img src="asset/images/usa.jpg" class="d-block w-100" alt="usa">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    
    <!-- Tambahkan script berikut -->
    {{-- <script>
        // Menginisialisasi carousel dengan interval 2000 milidetik (2 detik)
        var myCarousel = new bootstrap.Carousel(document.getElementById('carouselExampleSlidesOnly'), {
            interval: 2000
        });
    </script> --}}
    
</body>
</html>


@endsection
