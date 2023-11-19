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
        console.log(
            "Selected Image:",
            selectedImageSrc,
            "(",
            selectedImageAlt,
            ")"
        );
        console.log("Name:", name);
        console.log("Email:", email);
        console.log("Message:", message);
    });
});
