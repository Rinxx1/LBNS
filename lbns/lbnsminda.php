<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LBNS</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    
<div class="wrapper">
    <div class="container">
            <!-- ✅ Login Box -->
            <div class="login-box" id="login-box">

            <!-- Logo on top -->
            <div class="text-center mb-3">
            <a href="../index">

                <img src="../images/logo.png" alt="App Logo" style="width: 100px; height: auto;">
</a>
            <!--src="../index"-->
            </div>

                <h2>Login</h2>
                <form id="login-form">
                    <div class="input-box">
                        <input type="text" name="username" id="login-username" required>
                        <label>Username</label>
                    </div>

                    <div class="input-box">
                        <input type="password" name="password" id="login-password" required>
                        <label>Password</label>
                        <span class="toggle-password" onclick="togglePassword('login-password')">👁</span>
                    </div>
                    

                    <button type="submit" class="btn">Login</button>

                    <!-- <div class="login-options">
                        <a href="#" id="forgot-link">Forgot Password?</a>
                    </div> -->

                    <!-- <div class="register-link">
                        <p>Don't have an account? <a href="#" id="register-link">Register</a></p>
                    </div> -->
                </form>
            </div>

        <!-- ✅ Register Box -->
        <div class="register-box" id="register-box">
            <h2>Register</h2>
            <form id="registerForm">

                <div class="input-box">
                    <input type="text" name="username" id="username" required>
                    <label>Username</label>
                </div>
                
                <div class="input-box">
                    <input type="password" name="password" id="register-password" required>
                    <label>Password</label>
                    <span class="toggle-password" onclick="togglePassword('register-password')">👁</span>
                </div>

                <button type="submit" class="btn">Sign Up</button>
                <div class="register-link">
                    <p>Already have an account? <a href="#" id="login-link">Login</a></p>
                </div>
            </form>
</div>
        <!-- ✅ Forgot Password Box -->
        <div class="forgot-box" id="forgot-box">
            <h2>Reset Password</h2>
            <form>
                <div class="input-box">
                    <input type="email" required>
                    <label>Email Address</label>
                </div>

                <button type="submit" class="btn">Reset Password</button>
                <div class="register-link">
                    <p>Remembered your password? <a href="#" id="back-login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="scripts/register-alert.js"></script>
<script src="scripts/login-alert.js"></script>
<script src="scripts/login-script.js"></script>
</body>
</html>
