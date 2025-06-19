document.getElementById('addCategoryForm').addEventListener('submit', function (e) {
    e.preventDefault();
  
    const formData = new FormData();
    formData.append('name', document.getElementById('categoryName').value.trim());
  
    fetch('././php/categories/add.php', {
      method: 'POST',
      body: formData
    })
      .then(res => res.json())
      .then(data => {
        if (data.status === 'success') {
          Swal.fire({
            title: 'Success!',
            text: data.message,
            icon: 'success'
          }).then(() => {
            const modal = bootstrap.Modal.getInstance(document.getElementById('addCategoryModal'));
            modal.hide();
            document.getElementById('addCategoryForm').reset();
            fetchCategories();
            //location.reload(); // 🔄 Refresh page
          });
        } else {
          Swal.fire({
            title: 'Error!',
            text: data.message,
            icon: 'error'
          });
        }
      })
      .catch(() => {
        Swal.fire({
          title: 'Server Error!',
          text: 'Unable to process your request.',
          icon: 'error'
        });
      });
  });
  