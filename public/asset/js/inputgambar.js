function selectImage(selectedText) {
    // Menghapus kelas 'selected' dari semua gambar
    var images = document.querySelectorAll(".clickable-image");
    images.forEach((image) => {
        image.classList.remove("selected");
    });

    // Menambahkan kelas 'selected' ke gambar yang dipilih
    event.target.classList.add("selected");

    // Mengirimkan keterangan gambar yang dipilih ke dalam database (gunakan AJAX atau formulir sesuai kebutuhan)
    //     console.log("Gambar dipilih:", selectedText);
    // Kirim data ke server menggunakan Ajax
    var xhr = new XMLHttpRequest();
    var url = "/save-selected-text"; // Sesuaikan dengan URL endpoint Anda
    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-Type", "application/json");

    // Kirim data JSON ke server
    var data = JSON.stringify({ selectedText: selectedText });
    xhr.send(data);

    // Tambahkan fungsi callback jika diperlukan
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var response = JSON.parse(xhr.responseText);
            console.log(response);
        }
    };
}
