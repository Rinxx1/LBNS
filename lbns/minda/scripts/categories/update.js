document.getElementById('editCategoryForm').addEventListener('submit', function (e) {
    e.preventDefault();
  
    const formData = new FormData();
    formData.append('id', document.getElementById('editCategoryID').value);
    formData.append('name', document.getElementById('editCategoryName').value.trim());
  
    fetch('./php/categories/update.php', {
      method: 'POST',
      body: formData
    })
      .then(res => res.json())
      .then(data => {
        if (data.status === 'success') {
          Swal.fire({
            title: 'Updated!',
            text: data.message,
            icon: 'success'
          }).then(() => {
            const modal = bootstrap.Modal.getInstance(document.getElementById('editCategoryModal'));
            modal.hide();
            fetchCategories();
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
          text: 'Unable to update category.',
          icon: 'error'
        });
      });
  });
  