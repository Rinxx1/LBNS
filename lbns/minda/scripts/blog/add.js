document.getElementById('addBlogForm').addEventListener('submit', function (e) {
  e.preventDefault();

  const form = document.getElementById('addBlogForm');
  const formData = new FormData(form); // Collects all input fields including the image

  fetch('././php/blog/add.php', {
    method: 'POST',
    body: formData
  })
  .then(res => res.json())
  .then(data => {
    if (data.status === 'success') {
      Swal.fire({
        title: 'Success!',
        text: 'Blog added successfully.',
        icon: 'success'
      }).then(() => {
        const modal = bootstrap.Modal.getInstance(document.getElementById('addBlogModal'));
        modal.hide();
        form.reset();

        // Reset image preview
        document.getElementById('blogPreviewImg').src = '#';
        document.getElementById('blogPreviewImg').classList.add('d-none');
        
        location.reload();
        loadBlogs(); // Refresh blog list
        
      });
    } else {
      Swal.fire({
        title: 'Error!',
        text: data.message || 'Something went wrong.',
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
