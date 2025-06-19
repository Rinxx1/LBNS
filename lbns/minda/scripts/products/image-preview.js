document.addEventListener("DOMContentLoaded", () => {
  const MAX_FILE_SIZE_MB = 5;
  const ALLOWED_TYPES = ['image/jpeg', 'image/png'];
  const MAX_IMAGES = 5;

  const productInputs = [
    { inputId: 'productImages', previewId: 'imagePreview' },
    { inputId: 'editProductImages', previewId: 'editImagePreview' }
  ];

  const slideshowInputs = [
    { inputId: 'slideshowImage' },
    { inputId: 'editSlideshowImage' }
  ];

  // Validate & preview multiple product thumbnails
  productInputs.forEach(({ inputId, previewId }) => {
    const input = document.getElementById(inputId);
    const preview = document.getElementById(previewId);

    input.addEventListener('change', () => {
      const files = Array.from(input.files);
      preview.innerHTML = '';

      if (files.length > MAX_IMAGES) {
        alert('❌ You can only upload a maximum of 5 images.');
        input.value = '';
        return;
      }

      const validFiles = [];

      files.forEach(file => {
        const isValidType = ALLOWED_TYPES.includes(file.type);
        const isValidSize = file.size <= MAX_FILE_SIZE_MB * 1024 * 1024;

        if (!isValidType || !isValidSize) {
          alert(`❌ Invalid file: ${file.name}. Only PNG/JPG under 5MB allowed.`);
          return; // skip preview
        }

        validFiles.push(file);

        const reader = new FileReader();
        reader.onload = function (e) {
          const wrapper = document.createElement('div');
          wrapper.className = 'position-relative';
          wrapper.style.width = '100px';
          wrapper.style.height = '100px';

          const img = document.createElement('img');
          img.src = e.target.result;
          img.className = 'rounded shadow';
          img.style.width = '100%';
          img.style.height = '100%';
          img.style.objectFit = 'cover';

          const removeBtn = document.createElement('button');
          removeBtn.innerHTML = '&times;';
          removeBtn.className = 'btn btn-danger btn-sm position-absolute top-0 end-0 m-1 rounded-circle';
          removeBtn.style.width = '30px';
          removeBtn.style.height = '30px';
          removeBtn.type = 'button';
          removeBtn.onclick = () => {
            wrapper.remove();
            const index = validFiles.indexOf(file);
            if (index > -1) validFiles.splice(index, 1);
            updateFileInput(input, validFiles);
          };

          wrapper.appendChild(img);
          wrapper.appendChild(removeBtn);
          preview.appendChild(wrapper);
        };

        reader.readAsDataURL(file);
      });

      // If no valid files, reset input
      if (validFiles.length === 0) {
        input.value = '';
        preview.innerHTML = '';
      } else {
        updateFileInput(input, validFiles);
      }
    });
  });

  // Validate slideshow image (single file only)
  slideshowInputs.forEach(({ inputId }) => {
    const input = document.getElementById(inputId);
    input.addEventListener("change", () => {
      const file = input.files[0];

      if (file) {
        const isValidType = ALLOWED_TYPES.includes(file.type);
        const isValidSize = file.size <= MAX_FILE_SIZE_MB * 1024 * 1024;

        if (!isValidType || !isValidSize) {
          alert(`❌ Invalid file: ${file.name}. Only PNG/JPG under 5MB allowed.`);
          input.value = '';
        }
      }
    });
  });

  // Utility function to reset the files programmatically
  function updateFileInput(inputElement, filesArray) {
    const dt = new DataTransfer();
    filesArray.forEach(file => dt.items.add(file));
    inputElement.files = dt.files;
  }
});
