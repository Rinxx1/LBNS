document.getElementById('blogImage').addEventListener('change', function () {
    const file = this.files[0];
    const previewImg = document.getElementById('blogPreviewImg');
  
    if (file) {
      const reader = new FileReader();
      reader.onload = function (e) {
        previewImg.src = e.target.result;
        previewImg.classList.remove('d-none');
      };
      reader.readAsDataURL(file);
    } else {
      previewImg.src = '#';
      previewImg.classList.add('d-none');
    }
  });

  document.getElementById("editBlogImage").addEventListener("change", function () {
    const preview = document.getElementById("currentBlogImage");
    const file = this.files[0];
  
    if (file) {
      const reader = new FileReader();
      reader.onload = function (e) {
        preview.src = e.target.result;
        preview.style.display = "block";
      };
      reader.readAsDataURL(file);
    }
  });
  