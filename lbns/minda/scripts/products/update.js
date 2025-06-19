// scripts/products/update.js

document.getElementById("editProductForm").addEventListener("submit", function (e) {
    e.preventDefault();
  
    const form = document.getElementById("editProductForm");
    const formData = new FormData(form);
  
    fetch('./php/products/update.php', {
      method: 'POST',
      body: formData
    })
    .then(res => res.json())
    .then(data => {
      if (data.status === 'success') {
        Swal.fire({
          title: 'Success!',
          text: data.message,
          icon: 'success',
          confirmButtonColor: '#198754'
        }).then(() => {
          form.reset();
          document.getElementById("currentThumbnails").innerHTML = '';
          document.getElementById("editImagePreview").innerHTML = '';
          document.getElementById("removedThumbnails").value = '';
          document.getElementById("currentSlideshowImg").src = '';
          const modal = bootstrap.Modal.getInstance(document.getElementById('editProductModal'));
          modal.hide();
          fetchProducts(); // Refresh product list
        });
      } else {
        Swal.fire({
          title: 'Error!',
          text: data.message || 'Something went wrong.',
          icon: 'error',
          confirmButtonColor: '#dc3545'
        });
      }
    })
    .catch(error => {
      console.error("Update fetch error:", error);
      Swal.fire({
        title: 'Server Error! ⚠️',
        text: 'Unable to update product. Please try again.',
        icon: 'error',
        confirmButtonColor: '#dc3545'
      });
    });
  });
  