document.getElementById("login-form").addEventListener("submit", function (e) {
    e.preventDefault();

    const username = document.getElementById("login-username").value.trim();
    const password = document.getElementById("login-password").value.trim();

    if (username === "" || password === "") {
        return Swal.fire({
            title: "Missing Fields!",
            text: "Both username and password are required.",
            icon: "warning",
            confirmButtonText: "OK"
        });
    }

    fetch("./connection/login.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: new URLSearchParams({ username, password })
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === "success") {
            Swal.fire({
                title: "Login Successful!",
                text: "Redirecting to your dashboard...",
                icon: "success",
                confirmButtonText: "OK"
            }).then(() => {
                // ✅ Redirect after success
                window.location.href = "../lbns/minda/index.php";
            });
        } else {
            Swal.fire({
                title: "Login Failed!",
                text: data.message || "Invalid username or password.",
                icon: "error",
                confirmButtonText: "Try Again"
            });
        }
    })
    .catch(error => {
        console.error("Login Error:", error);
        Swal.fire({
            title: "Server Error!",
            text: "Something went wrong. Please try again later.",
            icon: "error",
            confirmButtonText: "OK"
        });
    });
});
