document.getElementById("logoutBtn").addEventListener("click", function (e) {
    e.preventDefault();
  
    Swal.fire({
      title: "Are you sure?",
      text: "You will be logged out of your session.",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#dc3545", // red
      cancelButtonColor: "#6c757d", // gray
      confirmButtonText: "Yes, log me out"
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = "../connection/logout.php";
      }
    });
  });
  