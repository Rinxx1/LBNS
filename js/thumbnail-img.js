document.addEventListener("DOMContentLoaded", () => {
    const mainImage = document.getElementById('mainProductImage');
    const thumbnails = document.querySelectorAll('.thumbnail-img');
  
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
  });
  