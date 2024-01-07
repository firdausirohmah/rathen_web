<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Rathen</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700|Open+Sans:400,600'>
<!-- <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700|Open+Sans:400,600'> -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css'><link rel="stylesheet" href="{{ asset('asset/css/formOrder.css') }}">

</head>
<body>
<!-- partial:index.partial.html -->
<header>
    <div class="container">
      <div class="navigation center-content">

        <div class="logo">
          <img class="icon icon-basket" src="{{asset('asset/cfind/source/images/rathen.png')}}" width="12%"></div>
        
      </div>
      <div class="notification">
        Custom Rathen - Form Order
      </div>
    </div>
  </header>
  <section class="content">

    <div class="container">
      <div class="payment">
        <div class="payment__title fw-6">
          Step Order
        </div>
        <div class="payment__types">
          <a class="payment__type payment__type--cc" href="/form/orderStep2">
            <i class="icon icon-picture"></i>Design Logo</a>
          <a class="payment__type payment__type--paypal" href="/form/orderStep3">
            <i class="icon icon-pencil"></i>Spesifikasi</a>
          <a class="payment__type payment__type--paypal active" href="/form/orderStep4">
            <i class="icon icon-docs"></i>Form Data</a>
          <a class="payment__type payment__type--paypal" href="/form/orderStep5">
            <i class="icon icon-note"></i>Invoice</a>
        </div>

        <div class="payment__info">
          <div class="payment__cc">
            <div class="payment__title fw-6">
              <i class="icon icon-docs"></i>Form Data Pesanan
            </div>
            <form>
              <div class="form__cc">
                <div class="row">
                  <div class="table-pesan">
                    <div class="title">
                      <i class="icon icon-info" style="display:contents;"></i> Nama Tim (27 stel) diambil 15 Jan 2024
                    </div>
                    <table class="wp-table">
                      <tr>
                        <th>No</th>
                        <th>Nama Punggung</th>
                        <th>Nomor</th>
                        <th>Ukuran</th>
                      </tr>
                      
                    </table>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="payment__shipping">
            <div class="row">
              <div class="field">
                <div class="payment__title"></div>
                <div class="form-uploads">
                  <div class="form-upload payment__type--cc">
                    <i class="icon icon-cloud-upload"></i>Upload File</div>
                </div>
                <!-- <input type="text" class="input txt text-validated" value='Upload' /> -->
              </div>
            </div>
            <div class="row">
              <div class="field">
                <div class="form-uploads">
                  <div class="form-upload payment__type--cc" id="inputDataBtn">
                    <i class="icon icon-pencil"></i>Input Data</div>
                </div>
                <!-- <input type="text" class="input txt text-validated" value='Upload' /> -->
              </div>
            </div>
            <div class="row">
              <div class="field">
                <div class="form-uploads">
                  <div class="form-upload payment__type--cc">
                    <i class="icon icon-cloud-download"></i>Format Data</div>
                </div>
                <!-- <input type="text" class="input txt text-validated" value='Upload' /> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Add this modal structure before the closing </body> tag -->
    <div id="inputDataModal" class="modal pt200">
      <div class="modal-content mw-32">
        <span class="close">&times;</span>
        <div class="form-modal">
          <h4>Silahkan inputkan data</h4>
          <form id="inputDataForm">
            <label for="name">Nama Punggung:</label>
            <input class="input-modal" type="text" id="name" name="name" required>

            <label for="number">Nomor:</label>
            <input class="input-modal" type="text" id="number" name="number" required>

            <label for="size">Ukuran:</label>
            <input class="input-modal" type="text" id="size" name="size" required>

            <button class="btn-modal" type="submit">Save</button>
          </form>
        </div>
      </div>
    </div>


    <div class="container">
      <div class="actions pt135">
        <a href="/form/orderStep5" class="btn action__submit">Next
          <i class="icon icon-arrow-right-circle"></i>
        </a>
        <a href="/form/orderStep3" class="backBtn">Go Back to Specification</a>
      </div>
  </section>
  </div>
<!-- partial -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var modal = document.getElementById('inputDataModal');
    var btn = document.getElementById('inputDataBtn');
    var span = document.getElementsByClassName('close')[0];
    var form = document.getElementById('inputDataForm');
    var tableBody = document.querySelector('.wp-table tbody');

    // Counter for row index
    var rowIndex = 1;

    // Display the modal when the button is clicked
    btn.onclick = function () {
      modal.style.display = 'block';
    };

    // Close the modal when the close button is clicked
    span.onclick = function () {
      modal.style.display = 'none';
    };

    // Close the modal when clicking outside of it
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = 'none';
      }
    };

    // Handle form submission
    form.addEventListener('submit', function (e) {
      e.preventDefault();

      // Get input values
      var name = document.getElementById('name').value;
      var number = document.getElementById('number').value;
      var size = document.getElementById('size').value;

      // Check if any input is provided
      if (name || number || size) {
        // Create a new table row with the input values
        var newRow = tableBody.insertRow();
        var cell1 = newRow.insertCell(0);
        var cell2 = newRow.insertCell(1);
        var cell3 = newRow.insertCell(2);
        var cell4 = newRow.insertCell(3);
        cell1.innerHTML = rowIndex++; // Increment the counter
        cell2.innerHTML = name || '-';
        cell3.innerHTML = number || '-';
        cell4.innerHTML = size || '-';
      }

      // Close the modal
      modal.style.display = 'none';

      // Clear the form fields for the next input
      form.reset();
    });
  });
</script>

</body>
</html>
