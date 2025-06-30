document.addEventListener("DOMContentLoaded", () => {
    const mainImage = document.getElementById('pd-mainProductImage');
    const thumbnails = document.querySelectorAll('.pd-thumbnail-img');
    const zoomBadge = document.querySelector('.pd-zoom-badge');
  
    let lockedImage = mainImage.getAttribute('src'); // ✅ Use attribute value
  
    thumbnails.forEach(thumb => {
      const imageSrc = thumb.getAttribute('data-image');
  
      // ✅ Hover preview
      thumb.addEventListener('mouseenter', () => {
        mainImage.setAttribute('src', imageSrc);
      });
  
      // ✅ Revert only if different
      thumb.addEventListener('mouseleave', () => {
        const currentSrc = mainImage.getAttribute('src');
        if (currentSrc !== lockedImage) {
          mainImage.setAttribute('src', lockedImage);
        }
      });
  
      // ✅ Lock selected thumbnail on click
      thumb.addEventListener('click', () => {
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
    });

    // ✅ Zoom functionality
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

    // Event listeners for zoom
    mainImage.addEventListener('click', openZoom);
    if (zoomBadge) {
      zoomBadge.addEventListener('click', openZoom);
    }
    zoomClose.addEventListener('click', closeZoom);
    zoomOverlay.addEventListener('click', (e) => {
      if (e.target === zoomOverlay) {
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
  