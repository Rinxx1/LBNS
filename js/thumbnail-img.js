document.addEventListener("DOMContentLoaded", () => {
    const mainImage = document.getElementById('pd-mainProductImage');
    const thumbnails = document.querySelectorAll('.pd-thumbnail-img');
    const zoomBadge = document.querySelector('.pd-zoom-badge');
  
    let lockedImage = mainImage.getAttribute('src'); // ✅ Use attribute value
    
    // ✅ Detect if device supports touch
    const isTouchDevice = 'ontouchstart' in window || navigator.maxTouchPoints > 0;
    
    // ✅ Track if we're in a touch interaction
    let touchStarted = false;
  
    thumbnails.forEach(thumb => {
      const imageSrc = thumb.getAttribute('data-image');
      
      // ✅ Touch event handlers for mobile
      if (isTouchDevice) {
        thumb.addEventListener('touchstart', (e) => {
          touchStarted = true;
          e.preventDefault(); // Prevent hover events
        });
        
        thumb.addEventListener('touchend', (e) => {
          if (touchStarted) {
            e.preventDefault();
            // Only change image on touch end (click equivalent)
            lockedImage = imageSrc;
            mainImage.setAttribute('src', lockedImage);
            
            thumbnails.forEach(img => img.classList.remove('active'));
            thumb.classList.add('active');
            
            touchStarted = false;
          }
        });
        
        thumb.addEventListener('touchcancel', () => {
          touchStarted = false;
        });
      } else {
        // ✅ Mouse hover preview for desktop only
        thumb.addEventListener('mouseenter', () => {
          if (!touchStarted) {
            mainImage.setAttribute('src', imageSrc);
          }
        });

        // ✅ Revert only if different on desktop
        thumb.addEventListener('mouseleave', () => {
          if (!touchStarted) {
            const currentSrc = mainImage.getAttribute('src');
            if (currentSrc !== lockedImage) {
              mainImage.setAttribute('src', lockedImage);
            }
          }
        });
      }
  
      // ✅ Click handler for desktop (with touch protection)
      thumb.addEventListener('click', (e) => {
        // Prevent click on mobile if touch was handled
        if (isTouchDevice && touchStarted) {
          return;
        }
        
        lockedImage = imageSrc;
        mainImage.setAttribute('src', lockedImage);

        thumbnails.forEach(img => img.classList.remove('active'));
        thumb.classList.add('active');
      });
    });
  
    // ✅ Mark initially active thumbnail
    thumbnails.forEach(thumb => {
      if (thumb.getAttribute('data-image') === lockedImage) {
        thumb.classList.add('active');
      }
    });    // ✅ Zoom functionality with mobile optimization
    function createZoomModal() {
      const modal = document.createElement('div');
      modal.className = 'pd-zoom-modal';
      modal.innerHTML = `
        <div class="pd-zoom-overlay">
          <div class="pd-zoom-container">
            <img class="pd-zoom-image" src="" alt="Zoomed product image">
            <button class="pd-zoom-close">&times;</button>
          </div>
        </div>
      `;
      document.body.appendChild(modal);
      return modal;
    }

    // Create zoom modal
    const zoomModal = createZoomModal();
    const zoomImage = zoomModal.querySelector('.pd-zoom-image');
    const zoomClose = zoomModal.querySelector('.pd-zoom-close');
    const zoomOverlay = zoomModal.querySelector('.pd-zoom-overlay');

    // Open zoom modal
    function openZoom() {
      const currentSrc = mainImage.getAttribute('src');
      zoomImage.setAttribute('src', currentSrc);
      zoomModal.style.display = 'flex';
      document.body.style.overflow = 'hidden';
    }

    // Close zoom modal
    function closeZoom() {
      zoomModal.style.display = 'none';
      document.body.style.overflow = 'auto';
    }

    // ✅ Mobile-optimized zoom event listeners
    if (isTouchDevice) {
      // Touch events for mobile zoom
      mainImage.addEventListener('touchend', (e) => {
        e.preventDefault();
        openZoom();
      });
      
      if (zoomBadge) {
        zoomBadge.addEventListener('touchend', (e) => {
          e.preventDefault();
          openZoom();
        });
      }
    } else {
      // Click events for desktop zoom
      mainImage.addEventListener('click', openZoom);
      if (zoomBadge) {
        zoomBadge.addEventListener('click', openZoom);
      }
    }
    
    // Close button works for both desktop and mobile
    zoomClose.addEventListener('click', closeZoom);
    zoomClose.addEventListener('touchend', (e) => {
      e.preventDefault();
      closeZoom();
    });
    
    // Overlay close with touch support
    zoomOverlay.addEventListener('click', (e) => {
      if (e.target === zoomOverlay) {
        closeZoom();
      }
    });
    
    zoomOverlay.addEventListener('touchend', (e) => {
      if (e.target === zoomOverlay) {
        e.preventDefault();
        closeZoom();
      }
    });

    // Close on escape key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && zoomModal.style.display === 'flex') {
        closeZoom();
      }
    });
  });
  