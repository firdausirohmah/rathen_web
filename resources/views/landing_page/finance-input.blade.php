<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rathen</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700|Open+Sans:400,600'>
  <!-- <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700|Open+Sans:400,600'> -->
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="asset/admin/js/core/bootstrap.min.js"></script>

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css'>
  <link rel="stylesheet" href="{{ asset('asset/css/formOrder.css') }}">
  <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>

</head>

<body>
  <!-- partial:index.partial.html -->
  <header>
    <div class="container">
      <div class="navigation center-content">

        <div class="logo">
          <img class="icon icon-basket" src="{{asset('asset/cfind/source/images/rathen.png')}}" width="12%">
        </div>

      </div>
      <div class="notification">
        Rathen - Finance
      </div>
    </div>
  </header>
  
  <div class="content content-back">
    <a class="btn btn-back" href="/finance">
      <i class="icon-arrow-left"></i>
    </a>
  </div>
  
  <form action="{{route('finance.add')}}" method="post">
    @csrf
    <div class="container">
      <div class="header text-center">
        <h1 class="modal-title fs-5" id="exampleModalLabel">FINANCIAL - RATHEN</h1>
      </div>
      <div class="">
          <div class="form-group mt-3">
            <label for="date">Date</label>
            <input type="date" name="date" id="date" class="form-control">
          </div>
          <!--new-->
          <div class="form-group mt-3">
            <label for="nominal">Transaksi</label>
            <input type="text" name="transaksi" id="transaksi" class="form-control">
          </div>
          <div class="form-group mt-3">
            <label for="nominal">Nilai (Rp)</label>
            <input type="number" name="nominal" id="nominal" class="form-control">
          </div>
          <div class="form-group mt-3">
            <label for="type">Jenis Transaksi</label>
            <select name="type" id="type" class="form-control">
              <option value="debit">Uang Masuk</option>
              <option value="credit">Uang Keluar</option>
            </select>
          </div>
          <div class="form-group mt-3">
            <label for="kategori_transaksi">Kategori Transaksi</label>
            <select name="kategori_transaksi" id="kategori_transaksi" class="form-control">
              <option value="pembayaran_dp">Pembayaran DP</option>
              <option value="pembayaran_pelunasan">Pembayaran Pelunasan</option>
              <option value="belanja_bahan">Belanja bahan</option>
              <option value="belanja_poliflex">Belanja poliflex</option>
              <option value="belanja_logo">Belanja logo</option>
              <option value="bayar_jahit">Bayar Jahit</option>
              <option value="bayar_sublim">Bayar sublim</option>
              <option value="bayar_lasercut">Bayar lasercut</option>
              <option value="aksesoris">Aksesoris</option>
              <option value="operasional">Operasional</option>
              <option value="gopay">Gopay</option>
              <option value="internet">Internet</option>
              <option value="listrik">Listrik</option>
              <option value="air">Air</option>
              <option value="entertainment">Entertainment</option>
              <option value="maintenance">Maintenance</option>
              <option value="ads">Ads (Iklan)</option>
              <option value="tata_usaha">Tata usaha (iuran keamanan dan sampah)</option>
              <option value="cicilan_alat">Cicilan Pembelian Alat</option>
              <option value="salary">Salary</option>
              <option value="fee_marketing">Fee Marketing</option>
              <option value="laba_ditahan">Laba di tahan</option>
              <option value="dividen">Dividen</option>
              <option value="pengeluaran_lain">Pengeluaran Tak terduga</option>
            </select>
          </div>
          <div class="form-group mt-3">
            <label for="status_uang">Status Uang</label>
            <select name="status_uang" id="status_uang" class="form-control">
              <option value="lunas">Lunas</option>
              <option value="hutang">Hutang</option>
              <option value="piutang">Piutag</option>
            </select>
          </div>
          <div class="form-group mt-3">
            <label for="note">Keterangan</label>
            <textarea name="note" id="note" class="form-control"></textarea>
          </div>
          
      </div>
      <div class="footer text-center my-4">
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </div>
  </form>

  <!-- partial -->

  <script>
     ClassicEditor
        .create( document.querySelector( '#note' ))
        .catch( error => {
            console.error( error );
        } );
      function updateFileName(inputId, statusId) {
        const input = document.getElementById(inputId);
        const label = input.closest('label');
        const statusUpload = document.getElementById(statusId);

        if (input.files.length > 0) {
          statusUpload.innerText = 'File Selected: ' + input.files[0].name;
        } else {
          statusUpload.innerText = '*';
        }
      }

     document.addEventListener('DOMContentLoaded', function() {
      var modal = document.getElementById('inputDataModal');
      var btn = document.getElementById('inputDataBtn');
      var span = document.getElementsByClassName('btn-close')[0];
      var import_modal = document.getElementById('importDataModal');
      var import_btn = document.getElementById('importDataBtn');
      var import_span = document.getElementsByClassName('btn-close')[1];
      var form = document.getElementById('inputDataForm');
      var tableBody = document.querySelector('.wp-table tbody');

      // Counter for row index
      var rowIndex = 1;

      // Display the modal when the button is clicked
      btn.onclick = function() {
        modal.style.display = 'block';
      };

      // Close the modal when the close button is clicked
      span.onclick = function() {
        modal.style.display = 'none';
      };
      import_btn.onclick = function() {
        import_modal.style.display = 'block';
      };

      // Close the modal when the close button is clicked
      import_span.onclick = function() {
        import_modal.style.display = 'none';
      };

      // Close the modal when clicking outside of it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = 'none';
        }
      };

      // // Handle form submission
      // form.addEventListener('submit', function (e) {
      //   e.preventDefault();

      //   // Get input values
      //   var name = document.getElementById('name').value;
      //   var number = document.getElementById('number').value;
      //   var size = document.getElementById('size').value;

      //   // Check if any input is provided
      //   if (name || number || size) {
      //     // Create a new table row with the input values
      //     var newRow = tableBody.insertRow();
      //     var cell1 = newRow.insertCell(0);
      //     var cell2 = newRow.insertCell(1);
      //     var cell3 = newRow.insertCell(2);
      //     var cell4 = newRow.insertCell(3);
      //     cell1.innerHTML = rowIndex++; // Increment the counter
      //     cell2.innerHTML = name || '-';
      //     cell3.innerHTML = number || '-';
      //     cell4.innerHTML = size || '-';
      //   }

      //   // Close the modal
      //   modal.style.display = 'none';

      //   // Clear the form fields for the next input
      //   form.reset();
      // });
    });

    function hideBrokenImage(img) {
      img.style.display = 'none'; // Mengubah properti display menjadi none untuk menyembunyikan gambar yang rusak
    }
  </script>

</body>

</html>