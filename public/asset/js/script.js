$(document).ready(function () {
    $(".slider-image").on("click", function () {
        // Mengaktifkan gambar yang dipilih
        $(".slider-image").removeClass("active");
        $(this).addClass("active");
    });

    $("#imageForm").submit(function (event) {
        event.preventDefault();

        // Get selected image information
        var selectedImage = $(".slider-image.active");
        var selectedImageSrc = selectedImage.attr("src");
        var selectedImageAlt = selectedImage.attr("alt");

        // Get other form data
        var name = $("#name").val();
        var email = $("#email").val();
        var message = $("#message").val();

        // You can now use the collected information as needed (e.g., send it to the server)
        console.log("option:", selectedImageAlt);
        console.log("Level:", name);
        console.log("Email:", email);
        console.log("Message:", message);
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const clickableImages = document.querySelectorAll(".clickable-image");

    clickableImages.forEach(function (image) {
        image.addEventListener("click", function () {
            // Menghapus kelas "active" dari semua gambar
            clickableImages.forEach(function (img) {
                img.classList.remove("active");
            });

            // Menambahkan kelas "active" ke gambar yang diklik
            image.classList.add("active");

            // Menangkap posisi gambar yang diklik
            const position = image.getAttribute("data-position");

            // Menggeser posisi gambar agar gambar yang diklik berada di tengah
            clickableImages.forEach(function (img) {
                const imgPosition = img.getAttribute("data-position");
                const newPosition = parseInt(imgPosition) - parseInt(position);
                img.setAttribute("data-position", newPosition);
            });

            // Mengurutkan gambar berdasarkan posisi
            clickableImages.forEach(function (img) {
                const imgPosition = img.getAttribute("data-position");
                img.style.order = imgPosition;
            });
        });
    });
});
