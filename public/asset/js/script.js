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

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry);
        if (entry.isIntersecting) {
            entry.target.classList.add('show-section');
        } else {
            entry.target.classList.remove('show-section')
        }
    });
});

const hiddenElements = document.querySelectorAll('.hidden-section');
hiddenElements.forEach((el) => observer.observe(el));

// timeline script

(function ($) {
    $(function () {
  
      $(window).on('scroll', function () {
        fnOnScroll();
      });
  
      $(window).on('resize', function () {
        fnOnResize();
      });
  
      var agTimeline = $('.js-timeline'),
        agTimelineLine = $('.js-timeline_line'),
        agTimelineLineProgress = $('.js-timeline_line-progress'),
        agTimelinePoint = $('.js-timeline-card_point-box'),
        agTimelineItem = $('.js-timeline_item'),
        agOuterHeight = $(window).outerHeight(),
        agHeight = $(window).height(),
        f = -1,
        agFlag = false;
  
      function fnOnScroll() {
        agPosY = $(window).scrollTop();
  
        fnUpdateFrame();
      }
  
      function fnOnResize() {
        agPosY = $(window).scrollTop();
        agHeight = $(window).height();
  
        fnUpdateFrame();
      }
  
      function fnUpdateWindow() {
        agFlag = false;
  
        agTimelineLine.css({
          top: agTimelineItem.first().find(agTimelinePoint).offset().top - agTimelineItem.first().offset().top,
          bottom: agTimeline.offset().top + agTimeline.outerHeight() - agTimelineItem.last().find(agTimelinePoint).offset().top
        });
  
        f !== agPosY && (f = agPosY, agHeight, fnUpdateProgress());
      }
  
      function fnUpdateProgress() {
        var agTop = agTimelineItem.last().find(agTimelinePoint).offset().top;
  
        i = agTop + agPosY - $(window).scrollTop();
        a = agTimelineLineProgress.offset().top + agPosY - $(window).scrollTop();
        n = agPosY - a + agOuterHeight / 2;
        i <= agPosY + agOuterHeight / 2 && (n = i - a);
        agTimelineLineProgress.css({height: n + "px"});
  
        agTimelineItem.each(function () {
          var agTop = $(this).find(agTimelinePoint).offset().top;
  
          (agTop + agPosY - $(window).scrollTop()) < agPosY + .5 * agOuterHeight ? $(this).addClass('js-ag-active') : $(this).removeClass('js-ag-active');
        })
      }
  
      function fnUpdateFrame() {
        agFlag || requestAnimationFrame(fnUpdateWindow);
        agFlag = true;
      }
  
    });
  })(jQuery);