@extends('layout.landingpage')
@section('content')
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Your Page Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    .store{
        font-weight: bold;
        text-align: center;
    }
    .store-name {
        font-family: 'Mont Heavy', sans-serif; color: #1890fd;
        font-weight: bold;
        text-align: center;

    }
</style>
<body>
    
    <div style="font-family: 'Mont Heavy', sans-serif; color: #1890fd; font-size: 24px; font-weight: bold; margin-bottom: 20px; text-align: center; ">
        LOCATION
    </div>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.4343833806684!2d106.77431907418564!3d-6.5928088934009095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c57a439b19c9%3A0x4a05cc1ee48848ba!2sRATHEN%20Store%20-%20Sportwears%20Outlet!5e0!3m2!1sid!2sid!4v1700127350226!5m2!1sid!2sid" frameborder="0" style="border:0; width: 90%; height: 90%; text-align: center;" allowfullscreen></iframe>
        </div>
        <div class="col-lg-6">
            <img src="/asset/images/top.jpg" alt="Your Image" style="width: 90%; height: 90%; text-align: center;">
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <p class="store-name">RATHEN STORE </p>
            <p class="store">Ruko Sentra Gunungbatu<br>Jl. Mayjen Ishak Djuarsa no. 167B<br>Bogor 16118</p>
        </div>
    </div>
</div>



</body>
</html>

@endsection