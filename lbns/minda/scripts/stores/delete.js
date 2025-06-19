function deleteStore(id) {
    Swal.fire({
      title: "Are you sure?",
      text: "This will permanently delete the store.",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#d33",
      cancelButtonColor: "#6c757d",
      confirmButtonText: "Yes, delete it!"
    }).then((result) => {
      if (result.isConfirmed) {
        fetch('./php/stores/delete.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
          body: new URLSearchParams({ id })
        })
        .then(res => res.json())
        .then(data => {
          if (data.status === "success") {
            Swal.fire("Deleted!", data.message, "success");
            fetchStores(); // Refresh table
          } else {
            Swal.fire("Error", data.message, "error");
          }
        })
        .catch(err => {
          console.error(err);
          Swal.fire("Error", "Something went wrong.", "error");
        });
      }
    });
  }
  