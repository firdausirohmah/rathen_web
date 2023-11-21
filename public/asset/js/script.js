document.addEventListener("DOMContentLoaded", function () {
    const clickableImages = document.querySelectorAll(".clickable-image");
    const imageText = document.querySelectorAll(".image-wrapper");
    const prevButton = document.getElementById("prevButton");
    const nextButton = document.getElementById("nextButton");

    // let activeImageIndex = 1;

    // function updateImagePosition() {
    // image.classList.add("active");
    // clickableImages.forEach(function (img, index) {
    //   const newPosition =
    //     (index + clickableImages.length - activeImageIndex) %
    //     clickableImages.length;

    // img.setAttribute("data-position", newPosition);
    //   img.classList.add("active");

    // img.style.order = newPosition;
    //   });
    // }

    // function moveLeft() {
    //   activeImageIndex =
    //     (activeImageIndex - 1 + clickableImages.length) % clickableImages.length;
    //   updateImagePosition();
    // }

    // function moveRight() {
    //   activeImageIndex = (activeImageIndex + 1) % clickableImages.length;
    //   updateImagePosition();
    // }

    // prevButton.addEventListener("click", moveLeft);
    // nextButton.addEventListener("click", moveRight);

    // clickableImages.forEach(function (image) {
    //     image.addEventListener("click", function () {
    //         clickableImages.forEach(function (img) {
    //             img.classList.remove("active");
    //         });

    //         image.classList.add("active");
    //         activeImageIndex = Array.from(clickableImages).indexOf(image);
    //         updateImagePosition();
    //     });
    // });
    imageText.forEach(function (image) {
        image.addEventListener("click", function () {
            imageText.forEach(function (img) {
                img.classList.remove("active-img");
            });

            image.classList.add("active-img");
            activeImageIndex = Array.from(imageText).indexOf(image);
            updateImagePosition();
        });
    });
});
