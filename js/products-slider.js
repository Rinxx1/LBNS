// products - slider
document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 20,
      loop: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".swiper-button-next-products",
        prevEl: ".swiper-button-prev-products",
      },
      pagination: {
        el: ".swiper-pagination-products",
        clickable: true,
      },
      breakpoints: {
        1024: {
          slidesPerView: 3,
        },
        768: {
          slidesPerView: 2,
        },
        0: {
          slidesPerView: 1,
        }
      }
    });
  });

