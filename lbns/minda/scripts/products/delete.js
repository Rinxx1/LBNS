function deleteProduct(productId) {
    Swal.fire({
      title: "Are you sure?",
      text: "This will permanently delete the product and its images.",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#dc3545",
      cancelButtonColor: "#6c757d",
      confirmButtonText: "Yes, delete it!"
    }).then((result) => {
      if (result.isConfirmed) {
        fetch('./php/products/delete.php', {
          method: 'POST',
          body: new URLSearchParams({ productId })
        })
        .then(res => res.json())
        .then(data => {
          if (data.status === "success") {
            Swal.fire("Deleted!", data.message, "success").then(() => {
              fetchProducts(); // Reload product table
            });
          } else {
            Swal.fire("Error!", data.message, "error");
          }
        })
        .catch(() => {
          Swal.fire("Server Error", "Failed to delete product.", "error");
        });
      }
    });
  }
  