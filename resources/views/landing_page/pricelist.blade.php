{{-- @extends('layout.landingpage') --}}
{{-- @section('content') --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/styles.css">
    <title>Formulir dengan Slider Gambar</title>
</head>
<body>

    <div class="form-container">
        <form id="imageForm" >
            <div class="image-slider">
                <img src="asset/images/image1.jpg" alt="Image 1" class="slider-image">
                <img src="asset/images/image2.jpg" alt="Image 2" class="slider-image">
                <img src="asset/images/image3.jpg" alt="Image 3" class="slider-image">
            </div>
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Pesan:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Kirim</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="asset/js/script.js"></script>
</body>
</html>

{{-- @endsection --}}