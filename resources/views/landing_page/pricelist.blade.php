@extends('layout.landingpage')
@section('content')
<style>
  
     .radio1
    {
        display: none;
    }
    .label
    {

        padding: 5px 10px;
        background-color: #888;
        color: #fff;
        cursor: pointer;
        font-size: 14px;
    }
    #lang-1:checked ~ .label-1,
    #lang-2:checked ~ .label-2,
    #lang-3:checked ~ .label-3
    {
       background-color: #0069D9;   
    }
</style>

<link rel="stylesheet" href="asset/css/styles.css">
<script src="asset/js/script.js"></script>
<div class="container mt-10">
<body>
    
<div class="container">
    <div class="row">
        
    
    </div>
    <div class="row">L
        <h4>Level Kualitas</h4>
        <div class="col"></div>
    </div>
</div>
<div class="image-container">
    <img src="asset/images/image1.jpg" alt="Image 1" class="clickable-image" id="image1">
    <img src="asset/images/image2.jpg" alt="Image 2" class="clickable-image" id="image2">
    <img src="asset/images/image3.jpg" alt="Image 3" class="clickable-image" id="image3">
</div>
<div class="container-radio">
    <div class="row">
        <div class="form-container">
            <form method="POST" action="/pricelist">
                @csrf
                <input type="radio" id="lang-1" name="lang"
                value="FANS" class="radio1" checked>
                <label class="label label-1" for="lang-1">FANS</label> 
        
                <input type="radio" id="lang-2" name="lang"
                value="STADIUM" class="radio1" checked>
                <label class="label label-2" for="lang-2">STADIUM</label> 
        
                <input type="radio" id="lang-3" name="lang"
                value="PRO" class="radio1" checked>
                <label class="label label-3" for="lang-3">PRO</label> 
                <button type="submit">kirim</button>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">


            <form id="imageForm" >
                <div class="image-slider">
                    <img src="asset/images/image1.jpg" alt="Image 1" class="clickable-image active" data-position="1">
                    <img src="asset/images/image2.jpg" alt="Image 2" class="clickable-image" data-position="2">
                    <img src="asset/images/image3.jpg" alt="Image 3" class="clickable-image" data-position="3">
                </div>
                <label for="level">Level:</label>
                
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
    
                <label for="message">Pesan:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
    
                <button type="submit">Kirim</button>
            </form>
        </div>
    </div>
</div>
</div>

<script>
    const radios = document.querySelectorAll('.btn-check');
    
    radios.forEach(function(radio) {
        radio.addEventListener('change', function() {
            // Mengubah warna label saat radio button dipilih
            radios.forEach(function(otherRadio) {
                const label = document.querySelector('label[for="' + otherRadio.id + '"]');
                label.classList.remove('active');
            });

            const label = document.querySelector('label[for="' + radio.id + '"]');
            label.classList.add('active');
        });
    });
</script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="asset/js/script.js"></script>

@endsection
