document.getElementById('editStoreForm').addEventListener('submit', function (e) {
    e.preventDefault();
  
    const id = document.getElementById('editStoreId').value;
    const city = document.getElementById('editStoreCity').value.trim();
    const location = document.getElementById('editStoreLocation').value.trim();
    const email = document.getElementById('editStoreEmail').value.trim();
    const hours = document.getElementById('editStoreHours').value.trim();
  
    fetch('./php/stores/update.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
      body: new URLSearchParams({
        id,
        city,
        location,
        email,
        hours
      })
    })
      .then(res => res.json())
      .then(data => {
        if (data.status === 'success') {
          Swal.fire("Updated!", data.message, "success");
          const modal = bootstrap.Modal.getInstance(document.getElementById('editStoreModal'));
          modal.hide();
          fetchStores();
        } else {
          Swal.fire("Error", data.message, "error");
        }
      })
      .catch(err => {
        console.error(err);
        Swal.fire("Error", "Something went wrong!", "error");
      });
  });
  