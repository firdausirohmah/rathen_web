// Event listener for checkbox change
document.getElementById("kerah_kancing").addEventListener('change', function() {
    additionalCost = this.checked ? additionalCost + 10000 : additionalCost - 10000; // Update additional cost based on checkbox state
    updateTotalHarga();
});

document.getElementById("bb_melengkung").addEventListener('change', function() {
    additionalCost = this.checked ? additionalCost + 15000 : additionalCost - 15000; // Update additional cost based on checkbox state
    updateTotalHarga();
});

document.getElementById("lengan_raglan").addEventListener('change', function() {
    additionalCost = this.checked ? additionalCost + 15000 : additionalCost - 15000; // Update additional cost based on checkbox state
    updateTotalHarga();
});

document.getElementById("celana_printing").addEventListener('change', function() {
    additionalCost = this.checked ? additionalCost + 50000 : additionalCost - 50000; // Update additional cost based on checkbox state
    updateTotalHarga();
});

document.getElementById("bahan_embos").addEventListener('change', function() {
    additionalCost = this.checked ? additionalCost + 20000 : additionalCost - 20000; // Update additional cost based on checkbox state
    updateTotalHarga();
});

document.getElementById("logo_3d").addEventListener('change', function() {
    additionalCost = this.checked ? additionalCost + 30000 : additionalCost - 30000; // Update additional cost based on checkbox state
    updateTotalHarga();
});

document.getElementById("kerah_rib").addEventListener('change', function() {
    additionalCost = this.checked ? additionalCost + 20000 : additionalCost - 20000; // Update additional cost based on checkbox state
    updateTotalHarga();
});

document.getElementById("tangan_rib").addEventListener('change', function() {
    additionalCost = this.checked ? additionalCost + 20000 : additionalCost - 20000; // Update additional cost based on checkbox state
    updateTotalHarga();
});

// Event listener for input field change
document.querySelector('input[name="lengan_panjang"]').addEventListener('input', function() {
    var quantity = parseInt(this.value) || 0;
    additionalCost = quantity * 30000; // Update additional cost based on input value
    updateTotalHarga();
});

document.querySelector('input[name="s2xl"]').addEventListener('input', function() {
    var quantity = parseInt(this.value) || 0;
    additionalCost = quantity * 20000; // Update additional cost based on input value
    updateTotalHarga();
});

document.querySelector('input[name="s3xl"]').addEventListener('input', function() {
    var quantity = parseInt(this.value) || 0;
    additionalCost = quantity * 35000; // Update additional cost based on input value
    updateTotalHarga();
});

document.querySelector('input[name="s4xl"]').addEventListener('input', function() {
    var quantity = parseInt(this.value) || 0;
    additionalCost = quantity * 50000; // Update additional cost based on input value
    updateTotalHarga();
});

document.querySelector('input[name="celana_pro"]').addEventListener('input', function() {
  var quantity = parseInt(this.value) || 0; // Get the value of kaoskaki input field, default to 0 if not a number
  additionalCost = quantity * 150000;
  updateTotalHarga();
});

document.querySelector('input[name="kaoskaki"]').addEventListener('input', function() {
  var quantity = parseInt(this.value) || 0; // Get the value of kaoskaki input field, default to 0 if not a number
  additionalCost = quantity * 50000;
  updateTotalHarga();
});

function updateTotalHarga() {
  var hargaDb = parseFloat(document.getElementById("hargaDb").innerText.replace('Rp ', '').replace(',', ''));
  var quantityInput = parseInt(document.getElementById("quantityInput").value);
  var totalHarga = hargaDb * quantityInput + additionalCost;
  // var totalHarga = hargaDb * quantityInput;

  // Format total harga jika diperlukan
  var formattedTotalHarga = "Rp " + totalHarga.toLocaleString();
  
  // Tampilkan total harga di suatu tempat
  document.getElementById("totalHarga").innerText = formattedTotalHarga;
}

function validateForm() {
    var kontakInput = document.getElementById('kontakInput').value;
    var kontakError = document.getElementById('kontakError');

    // Memeriksa apakah input di kontak berupa angka
    if (!(/^\d+$/.test(kontakInput))) {
        kontakError.innerHTML = "Inputan harus berupa angka";
        return false;
    }

    // Memeriksa panjang input di kontak (minimal 10, maksimal 13 karakter)
    if (kontakInput.length < 10 || kontakInput.length > 13) {
        kontakError.innerHTML = "Input harus terdiri 10 hingga 13 angka";
        return false;
    }

    kontakError.innerHTML = ""; // Menghapus pesan kesalahan jika valid
    return true;
}