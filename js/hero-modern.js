// Hero Product Swiper Initialization
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Hero Product Swiper
    if (document.querySelector('.heroProductSwiper')) {
        const heroProductSwiper = new Swiper('.heroProductSwiper', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            effect: 'slide',
            speed: 600,
            navigation: {
                nextEl: '.next-btn',
                prevEl: '.prev-btn',
            },
            breakpoints: {
                576: {
                    slidesPerView: 1.2,
                    spaceBetween: 15,
                },
                768: {
                    slidesPerView: 1.5,
                    spaceBetween: 20,
                },
                992: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                }
            }
        });
        
        // Custom navigation
        document.querySelector('.next-btn')?.addEventListener('click', () => {
            heroProductSwiper.slideNext();
        });
        
        document.querySelector('.prev-btn')?.addEventListener('click', () => {
            heroProductSwiper.slidePrev();
        });
    }
    
    // Business Hours Status Update
    function updateBusinessStatus() {
        const now = new Date();
        const currentHour = now.getHours();
        const statusBadge = document.querySelector('.status-badge');
        const statusDot = document.querySelector('.status-dot');
        
        if (statusBadge && statusDot) {
            // Business hours: 8 AM to 8 PM (08:00 - 20:00)
            if (currentHour >= 8 && currentHour < 20) {
                statusBadge.classList.add('open');
                statusBadge.classList.remove('closed');
                statusBadge.innerHTML = '<span class="status-dot"></span>Open Now';
                statusBadge.style.background = '#d4edda';
                statusBadge.style.color = '#155724';
            } else {
                statusBadge.classList.add('closed');
                statusBadge.classList.remove('open');
                statusBadge.innerHTML = '<span class="status-dot"></span>Closed';
                statusBadge.style.background = '#f8d7da';
                statusBadge.style.color = '#721c24';
            }
        }
    }
    
    // Update status on page load
    updateBusinessStatus();
    
    // Update status every minute
    setInterval(updateBusinessStatus, 60000);
    
    // Smooth scroll for scroll indicator
    document.querySelector('.scroll-indicator')?.addEventListener('click', () => {
        const nextSection = document.querySelector('.about-section');
        if (nextSection) {
            nextSection.scrollIntoView({ 
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
    
    // Image error handling for product cards
    document.querySelectorAll('.product-img').forEach(img => {
        img.addEventListener('error', function() {
            this.style.background = 'linear-gradient(135deg, var(--secondary-color), var(--primary-color))';
            this.style.display = 'flex';
            this.style.alignItems = 'center';
            this.style.justifyContent = 'center';
            this.style.color = 'white';
            this.style.fontSize = '14px';
            this.style.fontWeight = '600';
            this.innerHTML = '<i class="bi bi-image" style="font-size: 24px;"></i>';
        });
        
        // Preload images
        img.addEventListener('load', function() {
            this.style.opacity = '0';
            this.style.transition = 'opacity 0.3s ease';
            setTimeout(() => {
                this.style.opacity = '1';
            }, 100);
        });
    });
    
    // Hero animations on load
    function animateHeroElements() {
        const heroContent = document.querySelector('.hero-content');
        const heroRightContent = document.querySelector('.hero-right-content');
        
        if (heroContent) {
            heroContent.style.opacity = '0';
            heroContent.style.transform = 'translateY(30px)';
            
            setTimeout(() => {
                heroContent.style.transition = 'all 0.8s ease-out';
                heroContent.style.opacity = '1';
                heroContent.style.transform = 'translateY(0)';
            }, 200);
        }
        
        if (heroRightContent) {
            heroRightContent.style.opacity = '0';
            heroRightContent.style.transform = 'translateX(30px)';
            
            setTimeout(() => {
                heroRightContent.style.transition = 'all 0.8s ease-out';
                heroRightContent.style.opacity = '1';
                heroRightContent.style.transform = 'translateX(0)';
            }, 400);
        }
    }
    
    // Trigger animations
    animateHeroElements();

    // Add parallax effect to floating elements
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const parallaxElements = document.querySelectorAll('.floating-element');
        
        parallaxElements.forEach((element, index) => {
            const speed = 0.5 + (index * 0.1);
            const yPos = -(scrolled * speed);
            element.style.transform = `translateY(${yPos}px)`;
        });
    });
});
