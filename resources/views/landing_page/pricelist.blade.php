@extends('layout.landingpage')
@section('content')

<link rel="stylesheet" href="asset/css/styles.css">
<script src="asset/js/script.js"></script>

<section class="py-5 py-xl-8">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
          <h1 class="mb-4 display-5 text-center" style="font-family: Montheavy; color: #1890fd; font-size: 24px; font-weight: bold; margin-bottom: 20px; text-align: center;">PRICE LIST</h1>
            {{-- <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle"> --}}
        </div>
      </div>
    </div>
</section>


<section class="py-5 py-xl-8" id="listHarga">
  <div class="container">
      <div class="row">
          <div class="col-12">
            <form action="" id="priceList"></form>
            @csrf
              <div class="image-container justify-content-md-center">
                  <div class="image-wrapper active">
                      <img src="asset/images/image1.jpg" alt="non-print" class="clickable-image" data-position="1">
                      <p class="image-text">Deskripsi Gambar 1</p>
                  </div>
                  <div class="image-wrapper">
                      <img src="asset/images/image2.jpg" alt="half-print" class="clickable-image" data-position="2">
                      <p class="image-text">Deskripsi Gambar 2</p>
                  </div>
                  <div class="image-wrapper">
                      <img src="asset/images/image3.jpg" alt="full-print" class="clickable-image" data-position="3">
                      <p class="image-text">Deskripsi Gambar 3</p>
                  </div>
                </div>
                <label for="nama">Nama Pemesan:</label>
                    <input type="text" id="nama_pelanggan" name="nama" required>

                    <label for="nama">Nama Tim:</label>
                    <input type="text" id="nama_tim" name="nama_tim" required>

                    <label for="nama">No Hp:</label>
                    <input type="text" id="no_hp" name="no_hp" required>

                    <label for="nama">Alamat:</label>
                    <input type="text" id="alamat" name="alamat" required>

                    <label for="nama">Kualitas:</label>
                    <input type="text" id="kualitas" name="kualitas" required>
                    <button type="button" >Kirim Data</button>
                </form>
          </div>
      </div>
  </div>
</section>
<script>
    $(document).ready(function() {
    $('.clickable-image img').on('click', function() {
        // Handle image click event (you can implement image selection logic here)
        // For example, you can highlight the selected image
        $('.clickable-image img').removeClass('selected');
        $(this).addClass('selected');
    });

    $('#priceList').submit(function(event) {
        event.preventDefault();

        // Get selected image information
        var selectedImage = $('.clickable-image img.selected');
        var selectedImageSrc = selectedImage.attr('src');
        var selectedImageAlt = selectedImage.attr('alt');

        // Get other form data
        var np = $('#nama_pelanggan').val();
        var nt = $('#nama_tim').val();
        var alamat = $('#alamat').val();
        var nh = $('#no_hp').val();
        var kualitas = $('#kualitas').val();

        // You can now use the collected information as needed (e.g., send it to the server)
        console.log('Selected Image:', selectedImageSrc, '(', selectedImageAlt, ')');
        console.log('Nama Tim:', nt);
        console.log('Nama Pelanggan:', np);
        console.log('Alamat:', alamat);
        console.log('No Hp:', nh);
        console.log('Kualitas:', kualitas);
    });
});
</script>
{{-- <script>
    function kirimData() {
        var np = document.getElementById('nama_pelanggan').value;
        var nt = document.getElementById('nama_tim').value;
        var nh = document.getElementById('no_hp').value;
        var alamat = document.getElementById('alamat').value;
        var kualitas = document.getElementByAlt('kualitas').value;
        var katagori = document.getElementByAlt('kualitas').value;


        fetch('saveData.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'nama=' + encodeURIComponent(nama) + '&email=' + encodeURIComponent(email),
        })
        .then(response => response.text())
        .then(data => {
            console.log(data);
            // Tambahkan logika atau tindakan lain setelah data berhasil dikirim
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
</script> --}}
@endsection
