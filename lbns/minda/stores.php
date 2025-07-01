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
    <h2 class="fw-bold display-5 text-white">Manage Stores</h2>
    <p class="text-white">Easily manage your physical store locations and contact info here</p>
  </div>

  <!-- Stores Table Section -->
  <div class="card bg-dark text-light shadow-lg rounded-4 p-4 mb-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h4 class="fw-semibold">Store List</h4>
      <div class="d-flex gap-2 align-items-center">
        <!-- Items per page selector for stores -->
        <select id="storesPerPage" class="form-select form-select-sm text-light bg-dark border-secondary" style="width: auto;">
          <option value="5" selected>5 per page</option>
          <option value="10">10 per page</option>
          <option value="25">25 per page</option>
          <option value="50">50 per page</option>
        </select>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addStoreModal">
          <i class="bi bi-plus-lg me-1"></i> Add Store
        </button>
      </div>
    </div>
    
    <!-- Search and Info Bar for Stores -->
    <div class="d-flex justify-content-between align-items-center mb-3">
      <div class="d-flex align-items-center gap-3">
        <input type="text" id="searchStores" class="form-control form-control-sm bg-dark text-light border-secondary" placeholder="Search stores..." style="width: 250px;">
        <span id="storeTableInfo" class="text-muted small"></span>
      </div>
    </div>

    <div class="table-responsive">
      <table class="table table-dark table-striped table-hover align-middle rounded-3 overflow-hidden">
        <thead class="table-light">
          <tr>
            <th scope="col">City</th>
            <!-- <th scope="col">Location</th> -->
            <th scope="col">Email</th>
            <th scope="col">Opening Hours</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody id="storeTableBody">
        </tbody>
      </table>
    </div>
    
    <!-- Pagination Controls for Stores -->
    <div class="d-flex justify-content-between align-items-center mt-3">
      <div class="text-muted small">
        Showing <span id="storeShowingStart">0</span> to <span id="storeShowingEnd">0</span> of <span id="totalStores">0</span> stores
      </div>
      <nav aria-label="Stores pagination">
        <ul class="pagination pagination-sm mb-0" id="storePaginationContainer">
          <!-- Pagination buttons will be generated here -->
        </ul>
      </nav>
    </div>
  </div>
</div>

</main>
<!-- Add Store Modal -->
<div class="modal fade" id="addStoreModal" tabindex="-1" aria-labelledby="addStoreModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content border-0 rounded-4 shadow">
      <div class="modal-header bg-dark text-white">
        <h5 class="modal-title" id="addStoreModalLabel"><i class="bi bi-shop-window me-2"></i> Add New Store</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form id="storeForm">
        <div class="modal-body bg-light">

          <div class="mb-3">
            <label for="storeCity" class="form-label fw-semibold">City</label>
            <input type="text" class="form-control" id="storeCity" placeholder="e.g., Davao City" required>
          </div>

          <div class="mb-3">
          <label for="storeLocation" class="form-label fw-semibold">Google Maps Embed URL</label>
          <input type="text" class="form-control" id="storeLocation" placeholder="e.g., https://www.google.com/maps/embed?pb=..." required>
          <small class="form-text text-muted">Paste the full embed link from Google Maps (iframe <code>src</code>).</small>
        </div>


          <div class="mb-3">
            <label for="storeEmail" class="form-label fw-semibold">Store Email</label>
            <input type="email" class="form-control" id="storeEmail" placeholder="e.g., matina@lolaabons.com" required>
          </div>

          <div class="mb-3">
            <label for="storeHours" class="form-label fw-semibold">Opening Hours</label>
            <input type="text" class="form-control" id="storeHours" placeholder="e.g., Monday - Saturday: 9:00am - 6:00pm" required>
          </div>

        </div>

        <div class="modal-footer bg-light">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-success">Add Store</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Edit Store Modal -->
<div class="modal fade" id="editStoreModal" tabindex="-1" aria-labelledby="editStoreModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content border-0 rounded-4 shadow">
      <div class="modal-header bg-warning text-dark">
        <h5 class="modal-title fw-semibold" id="editStoreModalLabel"><i class="bi bi-pencil-fill me-2"></i> Edit Store</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form id="editStoreForm">
        <div class="modal-body bg-light">
          <input type="hidden" id="editStoreId">

          <div class="mb-3">
            <label for="editStoreCity" class="form-label fw-semibold">City</label>
            <input type="text" class="form-control" id="editStoreCity" required>
          </div>

          <div class="mb-3">
          <label for="editStoreLocation" class="form-label">Google Maps Embed (iframe)</label>
            <textarea class="form-control" id="editStoreLocation" rows="3" placeholder="Paste iframe code here..."></textarea>
            </div>

          <div class="mb-3">
            <label for="editStoreEmail" class="form-label fw-semibold">Store Email</label>
            <input type="email" class="form-control" id="editStoreEmail" required>
          </div>

          <div class="mb-3">
            <label for="editStoreHours" class="form-label fw-semibold">Opening Hours</label>
            <input type="text" class="form-control" id="editStoreHours" required>
          </div>
        </div>

        <div class="modal-footer bg-light">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-warning">Save Changes</button>
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


    <script src="scripts/stores/fetch.js"></script>
    <script src="scripts/stores/add.js"></script>
    <script src="scripts/stores/update.js"></script>
    <script src="scripts/stores/delete.js"></script>

    <script src="scripts/common/logout.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
