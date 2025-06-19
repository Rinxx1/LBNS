function deleteBlog(blogId) {
    Swal.fire({
      title: 'Are you sure?',
      text: 'This blog entry will be permanently deleted!',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#dc3545',
      cancelButtonColor: '#6c757d',
      confirmButtonText: 'Yes, delete it!'
    }).then(result => {
      if (result.isConfirmed) {
        const formData = new FormData();
        formData.append('blogId', blogId);
  
        fetch('./php/blog/delete.php', {
          method: 'POST',
          body: formData
        })
        .then(res => res.json())
        .then(data => {
          if (data.status === 'success') {
            Swal.fire({
              title: 'Deleted!',
              text: data.message,
              icon: 'success'
            }).then(() => {
              fetchBlogs(); // refresh the table
            });
          } else {
            Swal.fire('Error', data.message, 'error');
          }
        })
        .catch(() => {
          Swal.fire('Server Error', 'Unable to process request.', 'error');
        });
      }
    });
  }
  