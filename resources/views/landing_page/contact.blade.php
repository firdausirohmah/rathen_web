

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background Image</title>
    <script src="/js/app.js" defer></script>
    <link href="/css/app.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url('/asset/images/kontak.png') center/cover no-repeat fixed;
            height: 100vh; /* Menetapkan tinggi elemen ke tinggi layar (viewport height) */
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff; /* Warna teks */
            font-family: Arial, sans-serif;
        }

        .content {
            text-align: center;
            padding: 20px;
            background: rgba(0, 0, 0, 0.7); /* Warna latar belakang dengan opasitas */
            border-radius: 10px;
        }

        h1 {
            margin: 0;
            font-size: 3em;
            position: center;
            text-align: center;
            font-weight: bold;
        }

        p {
            margin: 10px 0;
        }
        .row {
            background-color: red;
        }
        .contact {
            width: 100px;
            height: 100px;
            border-radius: 12px;
            background-color: white;
        }
        .contact,.icon {
            align-items: center;
            margin: auto;
            display: block;
        }
    </style>
</head>
<body>
<div class="container-xxl ">
    <div class="row-cols-2">
        <div class="col-lg-12">
            <h1 > stay connected <br> with us </h1>
        </div>
        <div class="col-lg-12">
            <h1 > stay connected <br> with us </h1>
        </div>
    </div>
</div>
<br>
<div class="container mb-4">
    <div class="row lg-12">
        <div class="col-lg-4 contact">
            <img src="asset/images/wa.png" class="icon" width="70%%" alt="wa">
        </div>
    </div>
</div>

  
</div>
</body>
</html>

