//hero - slider
document.addEventListener('DOMContentLoaded', function () {
  const swiper = new Swiper('.heroSwiper', {
      loop: true,
      speed: 1000,
      autoplay: {
          delay: 5000,
          disableOnInteraction: false,
      },
      effect: 'fade',
      fadeEffect: {
          crossFade: true
      },
      pagination: {
          el: '.swiper-pagination',
          clickable: true,
      },
      navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
      },
      on: {
          init: function () {
              // Activate first slide content
              document.querySelector('.swiper-slide-active .slide-content').style.transform = 'translateY(0)';
          },
      }
  });

  // Add animation to slide content when slide changes
  swiper.on('slideChangeTransitionStart', function () {
      const activeSlide = document.querySelector('.swiper-slide-active');
      const slides = document.querySelectorAll('.swiper-slide');

      // Reset all slides
      slides.forEach(slide => {
          const content = slide.querySelector('.slide-content');
          if (content) {
              content.style.transform = 'translateY(100%)';
          }
      });

      // Animate active slide with a slight delay
      setTimeout(() => {
          const activeContent = activeSlide.querySelector('.slide-content');
          if (activeContent) {
              activeContent.style.transform = 'translateY(0)';
          }
      }, 300);
  });

  // Hide scroll indicator on scroll
  window.addEventListener('scroll', function () {
      const scrollIndicator = document.querySelector('.scroll-indicator');
      if (window.scrollY > 100) {
          scrollIndicator.style.opacity = '0';
      } else {
          scrollIndicator.style.opacity = '0.7';
      }
  });
});
