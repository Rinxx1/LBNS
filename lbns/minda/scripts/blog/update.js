document.getElementById('editBlogForm').addEventListener('submit', function (e) {
  e.preventDefault();

  const form = document.getElementById('editBlogForm');
  const formData = new FormData(form);

  fetch('./php/blog/update.php', {
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
          const modal = bootstrap.Modal.getInstance(document.getElementById('editBlogModal'));
          modal.hide();
          form.reset();

          // Reset preview
          document.getElementById('currentBlogImage').src = '#';
          document.getElementById('currentBlogImage').style.display = 'none';

          fetchBlogs(); // Refresh the list
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
