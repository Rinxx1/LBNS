  document.getElementById('storeForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const formData = new FormData();
    formData.append('storeCity', document.getElementById('storeCity').value);
    formData.append('storeLocation', document.getElementById('storeLocation').value);
    formData.append('storeEmail', document.getElementById('storeEmail').value);
    formData.append('storeHours', document.getElementById('storeHours').value);

    fetch('././php/stores/add.php', {
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
          location.reload();
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

