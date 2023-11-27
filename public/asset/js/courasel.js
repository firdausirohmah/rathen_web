const carousel = document.querySelector(".carousel-shuffle");
const items = document.querySelectorAll(".item");
const leftButton = document.querySelector(".button--left");
const rightButton = document.querySelector(".button--right");

leftButton.addEventListener("click", function () {
    roll("left");
});
rightButton.addEventListener("click", function () {
    roll("right");
});

function roll(direction) {
    carousel.classList.add(`moving-${direction}`);

    for (var item of items) {
        const startPosition = item.dataset.position;
        let endPosition;

        if (direction === "right") {
            endPosition = parseInt(startPosition) + 1;
        }
        if (direction === "left") {
            endPosition = parseInt(startPosition) - 1;
        }
        if (endPosition > 3) {
            endPosition = 1;
            item.style.zIndex = "-1";
        } else if (endPosition < 1) {
            endPosition = 3;
            item.style.zIndex = "-1";
        } else {
            item.style.zIndex = "";
        }
        item.dataset.position = endPosition;
        item.addEventListener(
            "transitionend",
            function () {
                carousel.classList.remove(`moving-${direction}`);
            },
            false
        );
    }

    const activeItem = document.querySelector('[data-position="3"]');
    console.log(activeItem);
}
