<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
  html {
width: 100%;
height: 100%;
background: #efefef;
position: absolute;
}

.button {
  /* position: absolute; */
  align-items: center;
  text-align: center;

  &--left {
    left: 50%;
    top: 50%;
    transform: translateX(-100px);
  }
  &--right {
    right: 50%;
    top: 50%;
    transform: translateX(100px);
  }
}

.carousel-shuffle {
height: 50%;
padding: 0;
margin: 0;
position: relative;
left: 50%;
top: 50%;
transform: translate3d(-50%, -40%, 0);
}

.item {
width: 100px;
height: 150px;
background: #dadada;
float: left;
list-style: none;
margin-right: 20px;
position: absolute;
top: 0;
left: 0;
-webkit-transform-style: preserve-3d;
transition: all .5s ease;
}

.item--1 {
background-color: pink;
}
.item--2 {
background-color: purple;
}
.item--3 {
background-color: orange;
z-index: 1;
}

.item:last-child {
margin-right: 0;
}

[data-position='1'] {
  transform: scale(1.75) translate3d(-100px, 0px, 0px);
  z-index: 1;
}
[data-position='2'] {
transform: scale(2) translate3d(0px, 0px, 0px);
z-index: 2;
}
[data-position='3'] {
transform: scale(1.75) translate3d(100px, 0px, 0px);
z-index: 3;
}


@keyframes crossfade {
0% {
  opacity: 1;
}
5% {
  opacity: 0.7;
}
10% {
  opacity: 1;
}
100% {
  opacity: 1;
  }
}
</style>
</head>
<body>
  <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block w-100" src="#" src="asset/images/bismillah.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="#" src="asset/images/bismillah.jpg" alt="Second slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <button class="button button--left">Left</button>
  <button class="button button--right">Right</button>
  <ul class="carousel-shuffle">
    <li class="item item--1" data-position="1"></li>
    <li class="item item--2" data-position="2"></li>
    <li class="item item--3" data-position="3">
    </li>
</ul>
</body>
</html>
<script src="asset/js/courasel.js"></script>

<script>
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

</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  