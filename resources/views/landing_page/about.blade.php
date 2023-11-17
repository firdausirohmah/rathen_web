<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slider</title>
</head>
<body>
    <?php
        // Daftar nama gambar
        $imageList = ['asset/images/swiss.jpg', 'asset/images/top.jpg', 'asset/images/usa.jpg'];

        // Pilih gambar secara acak
        $randomImage = $imageList[array_rand($imageList)];
    ?>

    <img src="<?php echo $randomImage; ?>" alt="Random Image">

    <!-- Contoh untuk refresh halaman setiap 5 detik -->
    <meta http-equiv="refresh" content="5">
</body>
</html>
