@extends('layout.landingpage')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Price List Form</title>
    <script src="/js/app.js" defer></script>
    <link href="/css/app.css" rel="stylesheet">
   <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
        }

        .judul {
            text-align: center;
            color: #1890fd;
            font-size: 24px;
        }

        form {
            margin-top: 20px;
        }

        label {
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #1890fd;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
        }

        .total {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            color: #1890fd;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="judul">PRICE LIST</h2>
    <form>
        <label for="category">Kategori:</label>
        <select id="category" name="category">
            <option value="non-print">Non-Print</option>
            <option value="half-print">Half-Print</option>
            <option value="full-print">Full-Print</option>
        </select>

        <label for="quality">Kualitas:</label>
        <select id="quality" name="quality">
            <option value="fans">Fans</option>
            <option value="stadium">Stadium</option>
            <option value="pro">PRO</option>
        </select>

        <label for="teamName">Nama Tim:</label>
        <input type="text" id="teamName" name="teamName">

        <label for="customerName">Nama Pemesan:</label>
        <input type="text" id="customerName" name="customerName">

        <!-- ... (lanjutan form) -->

        <button type="submit">Hitung Total</button>
    </form>

    <div class="total">
        <p>TOTAL HARGA : IDR 123,456</p>
    </div>
</div>

</body>
</html>


@endsection