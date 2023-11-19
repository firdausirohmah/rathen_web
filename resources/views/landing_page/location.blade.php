@extends('layout.landingpage')
@section('content')
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Your Page Title</title>
    <script src="/js/app.js" defer></script>
    <link href="/css/app.css" rel="stylesheet">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}
</head>


<style>
    .abc{
        font-weight: bold;
        text-align: center;
        position: center;
    }
    .abc {
        font-family: 'Mont Heavy', sans-serif; color: #1890fd;
        font-weight: bold;
        text-align: center;
        position: center;
    }
</style>
<body>
    <br>
    <div style="font-family: Montheavy; color: #1890fd; font-size: 24px; font-weight: bold; margin-bottom: 20px; text-align: center; ">
        LOCATION
    </div>
<div class="container text-center" style="position: center;">
    <div class="row">
        <div class="col-lg-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.4343833806684!2d106.77431907418564!3d-6.5928088934009095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c57a439b19c9%3A0x4a05cc1ee48848ba!2sRATHEN%20Store%20-%20Sportwears%20Outlet!5e0!3m2!1sid!2sid!4v1700127350226!5m2!1sid!2sid" style="width: 110%; height: 100%; " allowfullscreen class="mx-auto"></iframe>
        </div>
        <div class="col-lg-6">
            <img src="/asset/images/top.jpg" alt="Your Image" style="width: 100%; height: 100%;" class="img-fluid">
        </div>
    </div>
</div>

<br>
<div class="container" style="text-align: center; align-items: center; justify-content: center; text-align: center; font-weight: bold;">
     <div class="row">

        <div class="col-lg-12" >
            <p class="abc">RATHEN STORE </p>
            <p> Ruko Sentra Gunungbatu<br>Jl. Mayjen Ishak Djuarsa no. 167B<br>Bogor 16118 </p>
        </div>
    </div>
</div>



</body>
</html>

@endsection