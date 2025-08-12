<?php require '../connection/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lola Abon's - Original Durian Candy from Davao, Philippines</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/base-layout.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!--Favicon -->
    <!-- Standard Favicon (Browsers) -->
    <link rel="icon" type="image/x-icon" href="../../Images/favicon/favicon.ico">
    
    <!-- PNG Favicons (for modern browsers) -->
    <link rel="icon" type="image/png" sizes="32x32" href="../../Images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../Images/favicon/favicon-16x16.png">
    
    <!-- Apple Touch Icon (iOS, iPadOS) -->
    <link rel="apple-touch-icon" href="../../Images/favicon/apple-touch-icon.png">
    
    <!-- Android Chrome Favicons -->
    <link rel="icon" sizes="192x192" href="../../Images/favicon/android-chrome-192x192.png">
    <link rel="icon" sizes="512x512" href="../../Images/favicon/android-chrome-512x512.png">
    
    <!-- Manifest for Progressive Web Apps (Optional) -->
    <link rel="manifest" href="../../Images/favicon/site.webmanifest">

</head>
<body
  style="background: linear-gradient(135deg,rgb(44, 133, 65),rgb(53, 108, 92));, rgba(0, 0, 0, 0.5)), url('Images/st.png') center/cover no-repeat;">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="../../index">
                <img src="../../Images/logo.png" alt="Lola Abon's Logo"> 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="products">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="stores">Stores</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog">Blog </a></li>
                    <li class="nav-item"><a id="logoutBtn" class="nav-link btn btn-outline btn-sm" href="#">
                    <i class="bi bi-box-arrow-right me-1"></i> Logout
                  </a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <style>
      
      </style>
<main class="minda">
<div class="container">

  <!-- Page Title -->
  <div class="mb-2 text-center">
    <h2 class="fw-bold display-5 text-white">Dashboard</h2>
    <p class="text-white">Your Control Center for All Things Durian — Products, Stores & More.</p>
  </div>

<!-- Dashboard Overview Cards -->
<div class="row my-5 g-4">
  <div class="col-md-3">
    <div class="card text-white bg-danger shadow-sm">
      <div class="card-body d-flex justify-content-between align-items-center">
        <div>
          <h6 class="text-uppercase fw-bold">Products</h6>
          <h3 class="fw-bold" id="productCount">0</h3>
        </div>
        <i class="bi bi-list-task fs-1"></i>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card text-white bg-info shadow-sm">
      <div class="card-body d-flex justify-content-between align-items-center">
        <div>
          <h6 class="text-uppercase fw-bold">Categories</h6>
          <h3 class="fw-bold" id="categoryCount">0</h3>
        </div>
        <i class="bi bi-question-circle fs-1"></i>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card text-white bg-success shadow-sm">
      <div class="card-body d-flex justify-content-between align-items-center">
        <div>
          <h6 class="text-uppercase fw-bold">Stores</h6>
          <h3 class="fw-bold" id="storeCount">0</h3>
        </div>
        <i class="bi bi-chat-left-text fs-1"></i>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card text-white bg-warning shadow-sm">
      <div class="card-body d-flex justify-content-between align-items-center">
        <div>
          <h6 class="text-uppercase fw-bold">Blogs</h6>
          <h3 class="fw-bold" id="blogCount">0</h3>
        </div>
        <i class="bi bi-person-plus fs-1"></i>
      </div>
    </div>
  </div>
</div>

<!-- Recent Products Table -->
<div class="card bg-white shadow-sm rounded-4 mb-5">
  <div class="card-header bg-success text-white fw-bold fs-5">
    Recent Products
  </div>
  <div class="card-body p-0">
    <div class="table-responsive">
      <table class="table table-hover mb-0">
        <thead class="table-light">
          <tr>
            <th>Product Name</th>
            <th>Description</th>
            <th>Weight</th>
            <th>Price</th>
          </tr>
        </thead>
        <tbody id="recentProductsBody"></tbody>
      </table>
    </div>
  </div>
</div>

</div>
</main>
  <!-- Footer Section -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <!-- Left Side: Logo & Description -->
        <div class="col-lg-4 col-md-15 text-center">
          <img src="../../Images/logo.png" alt="Lola Abon's Logo" class="footer-logo">
          <p class="footer-tagline">Authentic durian treats crafted with love.</p>
          <p class="footer-copyright">© 2025. All rights reserved.</p>
        </div>         <!-- Tools -->
          <div class="col-lg-2 col-md-6 mb-4">
            <h5 class="fw-bold mb-3">Update Password?</h5>
            <ul class="list-unstyled">
             <li class="mb-2">
                <i class="bi bi-key-fill me-2 text-warning"></i>
                <a href="#" id="changePasswordBtn" class="text-light text-decoration-none">Change Password</a>
              </li>
          </div>

          <!-- Contact / Report a Bug -->
          <div class="col-lg-3 col-md-6 mb-4">
            <h5 class="fw-bold mb-3">Report a Problem</h5>
            <ul class="list-unstyled">
              <li class="mb-2">
                <i class="bi bi-envelope-fill me-2 text-warning"></i>
                <a href="mailto:support@lolaabons.com" class="text-light text-decoration-none">Email Support</a>
              </li>
              <li class="mb-2">
                <i class="bi bi-bug-fill me-2 text-danger"></i>
                <a href="https://forms.gle/your-google-form-link" target="_blank" class="text-light text-decoration-none">Bug Report Form</a>
              </li>
              <li class="mb-2">
                <i class="bi bi-chat-dots-fill me-2 text-info"></i>
                <a href="https://m.me/lolaabons" target="_blank" class="text-light text-decoration-none">Chat via Messenger</a>
              </li>
            </ul>
          </div>
     
            <!-- Stay Connected -->
            <div class="col-lg-3 col-md-12 text-center text-lg-start">
              <h5 class="fw-bold mb-3">Stay Connected</h5>
              <div class="d-flex justify-content-center justify-content-lg-start gap-4">
                <a href="https://facebook.com/lolaabons1950" target="_blank" class="text-light fs-4" aria-label="Facebook">
                  <i class="bi bi-facebook"></i>
                </a>
                <a href="https://instagram.com/lolaabons" target="_blank" class="text-light fs-4" aria-label="Instagram">
                  <i class="bi bi-instagram"></i>
                </a>
                <a href="mailto:support@lolaabons.com" class="text-light fs-4" aria-label="Email">
                  <i class="bi bi-envelope-fill"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </footer>    
    <script src="scripts/dashboard/fetch.js"></script>
    <script src="scripts/dashboard/fetchRecent.js"></script>
    <script src="scripts/common/logout.js"></script>
    <script src="../scripts/change-password.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="scripts/nav-hide.js"></script>
</body>
</html>
