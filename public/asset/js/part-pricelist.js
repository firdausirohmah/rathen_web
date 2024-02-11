// Fungsi untuk menangani perubahan pada checkbox
function handleCheckboxChange(id, cost) {
    document.getElementById(id).addEventListener('change', function() {
        var quantity = parseInt(document.getElementById("quantityInput").value);
        var costChange = this.checked ? cost * quantity : -cost * quantity;
        additionalCost += costChange;
        updateTotalHarga();
    });
}

// Fungsi untuk menangani perubahan pada input field
function handleInputChange(name, costPerUnit) {
    document.querySelector(`input[name="${name}"]`).addEventListener('input', function() {
        var quantity = parseInt(this.value) || 0;
        var prevQuantity = parseInt(this.dataset.prevValue) || 0;
        var prevCost = prevQuantity !== 0 ? prevQuantity * costPerUnit : 0;
        var newCost = quantity !== 0 ? quantity * costPerUnit : 0;
        additionalCost += newCost - prevCost;
        this.dataset.prevValue = quantity;
        updateTotalHarga();
    });
}

// Daftar perubahan biaya berdasarkan checkbox
handleCheckboxChange("kerah_kancing", 10000);
handleCheckboxChange("bb_melengkung", 15000);
handleCheckboxChange("lengan_raglan", 15000);
handleCheckboxChange("celana_printing", 50000);
handleCheckboxChange("bahan_embos", 20000);
handleCheckboxChange("logo_3d", 30000);
handleCheckboxChange("kerah_rib", 20000);
handleCheckboxChange("tangan_rib", 20000);

// Daftar perubahan biaya berdasarkan input field
handleInputChange("lengan_panjang", 30000);
handleInputChange("s2xl", 20000);
handleInputChange("s3xl", 35000);
handleInputChange("s4xl", 50000);
handleInputChange("celana_pro", 150000);
handleInputChange("kaoskaki", 50000);

function updateTotalHarga() {
  var hargaDb = parseFloat(document.getElementById("hargaDb").innerText.replace('Rp ', '').replace(',', ''));
  var quantityInput = parseInt(document.getElementById("quantityInput").value);
  var totalHarga = hargaDb * quantityInput + additionalCost;
  
  document.getElementById("totalHargaInput").value = totalHarga;
  // var totalHarga = hargaDb * quantityInput;

  // Format total harga jika diperlukan
  var formattedTotalHarga = "Rp " + totalHarga.toLocaleString();
  
  // Tampilkan total harga di suatu tempat
  document.getElementById("totalHarga").innerText = formattedTotalHarga;
}

function validateForm() {
    var kontakInput = document.getElementById('kontakInput').value;
    var kontakError = document.getElementById('kontakError');

    if (kontakInput.startsWith('0')) {
        kontakInput = '+62' + kontakInput.slice(1); // Mengganti "0" dengan "62"
        document.getElementById('kontakInput').value = kontakInput;
    }
    // Memeriksa apakah input di kontak berupa angka
    if (!(/^\+?\d+$/.test(kontakInput))) {
        kontakError.innerHTML = "Inputan harus berupa angka";
        return false;
    }

    // Memeriksa panjang input di kontak (minimal 10, maksimal 13 karakter)
    if (kontakInput.length < 10 || kontakInput.length > 14) {
        kontakError.innerHTML = "Input harus terdiri 10 hingga 14 angka";
        return false;
    }

    kontakError.innerHTML = ""; // Menghapus pesan kesalahan jika valid
    return true;
}