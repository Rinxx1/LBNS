//hero - slider
document.addEventListener('DOMContentLoaded', function () {
    let heroSwiper = null;
    let isInitialized = false;

    function initSwiper() {
        if (heroSwiper !== null) {
            return; // Already initialized
        }

        const swiperContainer = document.querySelector('.heroSwiper');
        if (!swiperContainer) {
            return;
        }

        // Check if slider should be visible (not on mobile)
        const isDesktop = window.innerWidth > 991;
        if (!isDesktop) {
            return;
        }

        heroSwiper = new Swiper('.heroSwiper', {
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
                    const activeContent = document.querySelector('.swiper-slide-active .slide-content');
                    if (activeContent) {
                        activeContent.style.transform = 'translateY(0)';
                    }
                },
            }
        });

        // Add animation to slide content when slide changes
        heroSwiper.on('slideChangeTransitionStart', function () {
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

        isInitialized = true;
    }

    function destroySwiper() {
        if (heroSwiper !== null) {
            heroSwiper.destroy(true, true);
            heroSwiper = null;
            isInitialized = false;
        }
    }

    function handleResize() {
        const isDesktop = window.innerWidth > 991;
        
        if (isDesktop && !isInitialized) {
            // Initialize swiper for desktop
            initSwiper();
        } else if (!isDesktop && isInitialized) {
            // Destroy swiper for mobile
            destroySwiper();
        }
    }

    // Initialize on load
    initSwiper();

    // Handle window resize with debouncing
    let resizeTimeout;
    window.addEventListener('resize', function () {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(handleResize, 250);
    });

    // Hide scroll indicator on scroll
    window.addEventListener('scroll', function () {
        const scrollIndicator = document.querySelector('.scroll-indicator');
        if (scrollIndicator) {
            if (window.scrollY > 100) {
                scrollIndicator.style.opacity = '0';
            } else {
                scrollIndicator.style.opacity = '0.7';
            }
        }
    });
});
