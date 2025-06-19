document.getElementById("addProductForm").addEventListener("submit", function (e) {
  e.preventDefault();

  const form = document.getElementById("addProductForm");
  const formData = new FormData(form);

  fetch('././php/products/add.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.json())
  .then(data => {
    if (data.status === 'success') {
      Swal.fire({
        title: 'Success!',
        text: data.message,
        icon: 'success',
        confirmButtonColor: '#198754' // Bootstrap green
      }).then(() => {
        form.reset();
        document.getElementById("imagePreview").innerHTML = '';
        const modal = bootstrap.Modal.getInstance(document.getElementById('addProductModal'));
        modal.hide();

        fetchProducts();
        //location.reload(); // 🔄 Refresh page
      });
    } else {
      Swal.fire({
        title: 'Error!',
        text: data.message || 'Something went wrong.',
        icon: 'error',
        confirmButtonColor: '#dc3545' // Bootstrap red
      });
    }
  })
  .catch(error => {
    console.error("Fetch error:", error);
    Swal.fire({
      title: 'Server Error!',
      text: 'Unable to process your request.',
      icon: 'error',
      confirmButtonColor: '#dc3545'
    });
  });
});
