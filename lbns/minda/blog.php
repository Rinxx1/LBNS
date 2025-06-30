<?php require '../connection/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lola Abon's - Original Durian Candy from Davao, Philippines</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
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
    <main class="minda">
<div class="container">
  <!-- Page Title -->
  <div class="mb-5 text-center">
    <h2 class="fw-bold display-5 text-white">Manage Blogs</h2>
    <p class="text-white">Keep your followers updated with fresh durian stories and announcements</p>
  </div>

  <!-- Stores Table Section -->
  <div class="card bg-dark text-light shadow-lg rounded-4 p-4 mb-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h4 class="fw-semibold">Blogs Table</h4>  
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addBlogModal">
  <i class="bi bi-plus-lg me-1"></i> Add Blog
</button>

    </div>

    <div class="table-responsive">
      <table class="table table-dark table-striped table-hover align-middle rounded-3 overflow-hidden">
        <thead class="table-light">
          <tr>
            <th scope="col">Blog Title</th>
            <th scope="col">Blog Description</th>
            <th scope="col">Blog Link</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody id="blogTableBody"></tbody>
      </table>
    </div>
  </div>
</div>
</main>

<!-- Add Blog Modal -->
<div class="modal fade" id="addBlogModal" tabindex="-1" aria-labelledby="addBlogModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-light">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title fw-semibold" id="addBlogModalLabel">
          <i class="bi bi-plus-lg me-1"></i>Add New Blog
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form id="addBlogForm" enctype="multipart/form-data">
        <div class="modal-body">
          <!-- Blog Title -->
          <div class="mb-3">
            <label for="blogTitle" class="form-label">Blog Title</label>
            <input type="text" class="form-control" id="blogTitle" name="blogTitle" placeholder="Enter blog title" required>
          </div>

          <!-- Blog Description -->
          <div class="mb-3">
            <label for="blogDesc" class="form-label">Blog Description</label>
            <textarea class="form-control" id="blogDesc" name="blogDesc" rows="3" placeholder="Enter blog description" required></textarea>
          </div>

          <!-- Blog Link -->
          <div class="mb-3">
            <label for="blogLink" class="form-label">Blog Link</label>
            <input type="url" class="form-control" id="blogLink" name="blogLink" placeholder="https://example.com/blog-title" required>
          </div>

          <!-- Blog Image Upload -->
          <div class="mb-3">
            <label for="blogImage" class="form-label">Blog Image</label>
            <input type="file" class="form-control" id="blogImage" name="blogImage" accept="image/*" required>
            <div id="blogImagePreview" class="mt-3">
              <img id="blogPreviewImg" src="#" alt="Preview" class="img-thumbnail d-none" style="max-height: 150px;">
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-success">Add Blog</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Edit Blog Modal -->
<div class="modal fade" id="editBlogModal" tabindex="-1" aria-labelledby="editBlogModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-light">
      <div class="modal-header bg-warning text-white">
        <h5 class="modal-title fw-semibold" id="editBlogModalLabel">
          <i class="bi bi-pencil-fill me-2"></i>Edit Blog
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form id="editBlogForm" enctype="multipart/form-data">
        <div class="modal-body">
          <input type="hidden" id="editBlogId" name="blogId">

          <div class="mb-3">
            <label for="editBlogTitle" class="form-label">Blog Title</label>
            <input type="text" class="form-control" id="editBlogTitle" name="blogTitle" required>
          </div>

          <div class="mb-3">
            <label for="editBlogDesc" class="form-label">Blog Description</label>
            <textarea class="form-control" id="editBlogDesc" name="blogDesc" rows="3" required></textarea>
          </div>

          <div class="mb-3">
            <label for="editBlogLink" class="form-label">Blog Link</label>
            <input type="url" class="form-control" id="editBlogLink" name="blogLink" required>
          </div>

          <!-- Preview & Upload -->
          <div class="mb-3">
            <label class="form-label">Current Blog Image</label><br>
            <img id="currentBlogImage" src="#" alt="Blog Image" class="img-thumbnail mb-2" style="max-height: 150px; display: none;">
          </div>

          <div class="mb-3">
            <label for="editBlogImage" class="form-label">Upload New Image</label>
            <input type="file" class="form-control" id="editBlogImage" name="blogImage" accept="image/*">
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-warning">Update Blog</button>
        </div>
      </form>
    </div>
  </div>
</div>


  <!-- Footer Section --> 
  <footer class="footer">
    <div class="container">
      <div class="row">
        <!-- Left Side: Logo & Description -->
        <div class="col-lg-5 col-md-15 text-center">
          <img src="../../Images/logo.png" alt="Lola Abon's Logo" class="footer-logo">
          <p class="footer-tagline">Authentic durian treats crafted with love.</p>
          <p class="footer-copyright">© 2025. All rights reserved.</p>
        </div>

          <!-- Contact / Report a Bug -->
          <div class="col-lg-4 col-md-6 mb-4">
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
              <li>
                <i class="bi bi-chat-dots-fill me-2 text-info"></i>
                <a href="https://m.me/lolaabons" target="_blank" class="text-light text-decoration-none">Chat via Messenger</a>
              </li>
            </ul>
          </div>

            <!-- Stay Connected -->
            <div class="col-lg-2 col-md-12 text-center text-lg-start">
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
    

    <script src="scripts/blog/fetch.js"></script>
    <script src="scripts/blog/add.js"></script>
    <script src="scripts/blog/update.js"></script>
    <script src="scripts/blog/delete.js"></script>
    <script src="scripts/blog/image-preview.js"></script>

    <script src="scripts/common/logout.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
