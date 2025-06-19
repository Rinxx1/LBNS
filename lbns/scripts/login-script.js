    // Get elements
    const loginBox = document.getElementById("login-box");
    const registerBox = document.getElementById("register-box");
    const forgotBox = document.getElementById("forgot-box");
    
    const registerLink = document.getElementById("register-link");
    const loginLink = document.getElementById("login-link");
    const forgotLink = document.getElementById("forgot-link");
    const backLoginLink = document.getElementById("back-login-link");
    
    // Show Register & Hide Login
    registerLink.addEventListener("click", (e) => {
        e.preventDefault();
        loginBox.style.display = "none";
        registerBox.style.display = "block";
    });
    
    // Show Login & Hide Register
    loginLink.addEventListener("click", (e) => {
        e.preventDefault();
        registerBox.style.display = "none";
        loginBox.style.display = "block";
    });
    
    // Show Forgot Password & Hide Login
    forgotLink.addEventListener("click", (e) => {
        e.preventDefault();
        loginBox.style.display = "none";
        forgotBox.style.display = "block";
    });
    
    // Show Login & Hide Forgot Password
    backLoginLink.addEventListener("click", (e) => {
        e.preventDefault();
        forgotBox.style.display = "none";
        loginBox.style.display = "block";
    });
    
    // ✅ Function to Toggle Password Visibility
    function togglePassword(inputId) {
        let passwordField = document.getElementById(inputId);
        passwordField.type = passwordField.type === "password" ? "text" : "password";
    }
    
    
    