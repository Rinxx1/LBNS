document.getElementById("registerForm").addEventListener("submit", function (e) {
    e.preventDefault(); // Prevent default form submission

    let formData = new FormData(this);

    fetch("./connection/register.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        if (data.trim() === "success") {
            Swal.fire({
                title: "Registration Successful!",
                text: "Your account has been created. Redirecting to login...",
                icon: "success",
                confirmButtonText: "OK"
            }).then(() => {
                document.getElementById("register-box").style.display = "none";
                document.getElementById("login-box").style.display = "block"; // Switch to login form
            });
        } else if (data.trim() === "exists") {
            Swal.fire({
                title: "Account Exists!",
                text: "Username or Email is already registered. Try a different one.",
                icon: "warning",
                confirmButtonText: "OK"
            });
        } else {
            Swal.fire({
                title: "Error!",
                text: "There was an issue creating your account. Please try again.",
                icon: "error",
                confirmButtonText: "Try Again"
            });
        }
    })
    .catch(error => {
        console.error("Error:", error);
        Swal.fire({
            title: "Error!",
            text: "Something went wrong. Please check your internet connection.",
            icon: "error",
            confirmButtonText: "OK"
        });
    });
});
