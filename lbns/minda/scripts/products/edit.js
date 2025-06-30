function editProduct(
    id, name, desc, weight, price,
    ingredients, shelfLife, shopee, lazada,
    bestseller, categoryId, slideshowDesc, slideshowImg,
    thumbnails
  ) {
    const modal = new bootstrap.Modal(document.getElementById('editProductModal'));
  
    // Fill form values
    document.getElementById("editProductID").value = id;
    document.getElementById("editProductName").value = name;
    document.getElementById("editProductDesc").value = desc;
    document.getElementById("editProductWeight").value = weight;
    document.getElementById("editProductPrice").value = price;
    document.getElementById("editProductIngredients").value = ingredients;
    document.getElementById("editProductShelflife").value = shelfLife;
    document.getElementById("editProductShopee").value = shopee;
    document.getElementById("editProductLazada").value = lazada;
    document.getElementById("editProductCategory").value = categoryId;
    document.getElementById("editSlideshowDescription").value = slideshowDesc || '';
    document.getElementById("editProductBestseller").checked = bestseller == 1;
  
    // Show current slideshow image
    const currentSlide = document.getElementById("currentSlideshowImg");
    currentSlide.src = slideshowImg ? `../../../lbnsv1/Images/slideshow/${slideshowImg}` : '';
    currentSlide.style.display = slideshowImg ? 'block' : 'none';
   console.log(currentSlide.src);
    // Reset removed thumbnails tracker
    const thumbContainer = document.getElementById("currentThumbnails");
    thumbContainer.innerHTML = '';
    document.getElementById("removedThumbnails").value = '';
  
    // Show current thumbnails
    if (Array.isArray(thumbnails)) {
      thumbnails.forEach((img) => {
        const wrapper = document.createElement("div");
        wrapper.className = "position-relative";
        wrapper.style.width = "80px";
        wrapper.style.height = "80px";
  
        const thumb = document.createElement("img");
        thumb.src = `../../../lbnsv1/Images/thumbnail/${img}`;
        thumb.className = "img-thumbnail";
        thumb.style.width = "100%";
        thumb.style.height = "100%";
        thumb.style.objectFit = "cover";
        console.log(thumb.src);
        const removeBtn = document.createElement("button");
        removeBtn.className = "btn btn-sm btn-danger position-absolute top-0 end-0 rounded-circle";
        removeBtn.innerHTML = "&times;";
        removeBtn.style.width = "30px";
        removeBtn.style.height = "30px";
        removeBtn.type = "button";
        removeBtn.onclick = () => {
          wrapper.remove();
          const hidden = document.getElementById("removedThumbnails");
          hidden.value += hidden.value ? `,${img}` : img;
        };
  
        wrapper.appendChild(thumb);
        wrapper.appendChild(removeBtn);
        thumbContainer.appendChild(wrapper);
      });
    }
  
    // Reset any previous slideshow preview
    const previewImg = document.getElementById("slideshowNewPreview");
    if (previewImg) previewImg.remove();
  
    modal.show();
  }
  
  // Thumbnail Upload and Preview
  document.getElementById("editProductImages").addEventListener("change", function () {
    const preview = document.getElementById("editImagePreview");
    preview.innerHTML = '';
    const files = Array.from(this.files);
  
    if (files.length > 5) {
      alert('You can only upload a maximum of 5 images.');
      this.value = '';
      return;
    }
  
    const newFiles = [];
  
    files.forEach((file) => {
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
          newFiles.splice(newFiles.indexOf(file), 1);
          updateFileInput(newFiles);
        };
  
        wrapper.appendChild(img);
        wrapper.appendChild(removeBtn);
        preview.appendChild(wrapper);
        newFiles.push(file);
      };
      reader.readAsDataURL(file);
    });
  
    function updateFileInput(filesArray) {
      const dt = new DataTransfer();
      filesArray.forEach(file => dt.items.add(file));
      document.getElementById("editProductImages").files = dt.files;
    }
  });
  
  // Slideshow Preview Update
  document.getElementById("editSlideshowImage").addEventListener("change", function () {
    const file = this.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function (e) {
        const currentSlide = document.getElementById("currentSlideshowImg");
        currentSlide.src = e.target.result;
        currentSlide.style.display = 'block';
      };
      reader.readAsDataURL(file);
    }
  });
  