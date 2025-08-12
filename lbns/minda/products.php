<?php require '../connection/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lola Abon's - Original Durian Candy from Davao, Philippines</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/base-layout.css" rel="stylesheet">
    <link href="../../css/pages/da.css" rel="stylesheet">
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
<style>
  /* ===== DIRECT MODAL SCROLLING FIX ===== */
/* Force scrolling with !important declarations */

.modal-dialog-scrollable {
    height: 85vh !important;
    max-height: 85vh !important;
}

.modal-dialog-scrollable .modal-content {
    height: 100% !important;
    max-height: 100% !important;
    display: flex !important;
    flex-direction: column !important;
    overflow: hidden !important;
}

.modal-dialog-scrollable .modal-body {
    overflow-y: auto !important;
    overflow-x: hidden !important;
    flex: 1 !important;
    min-height: 0 !important;
    max-height: calc(85vh - 160px) !important;
}

.modal-dialog-scrollable .modal-header,
.modal-dialog-scrollable .modal-footer {
    flex-shrink: 0 !important;
}

/* Force visible scrollbar */
.modal-body::-webkit-scrollbar {
    width: 12px !important;
}

.modal-body::-webkit-scrollbar-track {
    background: #f1f1f1 !important;
    border-radius: 6px !important;
}

.modal-body::-webkit-scrollbar-thumb {
    background: #888 !important;
    border-radius: 6px !important;
}

.modal-body::-webkit-scrollbar-thumb:hover {
    background: #555 !important;
}

/* Additional mobile fix */
@media (max-width: 768px) {
    .modal-dialog-scrollable {
        height: 90vh !important;
        max-height: 90vh !important;
    }

    .modal-dialog-scrollable .modal-body {
        max-height: calc(90vh - 140px) !important;
    }
}

</style>
    <script>
// Aggressive scrolling fix with multiple approaches
document.addEventListener('DOMContentLoaded', function() {
    // Method 1: Force on modal show
    $('.modal').on('shown.bs.modal', function() {
        const modal = $(this);
        const modalBody = modal.find('.modal-body');
        
        // Force scrollable styles
        modalBody.css({
            'overflow-y': 'auto',
            'overflow-x': 'hidden',
            'max-height': 'calc(85vh - 160px)',
            'flex': '1',
            'min-height': '0'
        });
        
        // Force modal content structure
        modal.find('.modal-content').css({
            'height': '100%',
            'max-height': '100%',
            'display': 'flex',
            'flex-direction': 'column',
            'overflow': 'hidden'
        });
        
        modal.find('.modal-header, .modal-footer').css({
            'flex-shrink': '0'
        });
    });
    
    // Method 2: Force after DOM ready
    setTimeout(function() {
        $('.modal-dialog-scrollable .modal-body').each(function() {
            $(this).css({
                'overflow-y': 'auto',
                'max-height': 'calc(85vh - 160px)'
            });
        });
    }, 100);
});
    </script> 
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
    <h2 class="fw-bold display-5 text-white">Manage Products</h2>
    <p class="text-white">Oversee your product inventory and categories in one place</p>
  </div>

  <!-- Categories Section -->
  <div class="card bg-dark text-light shadow-lg rounded-4 p-4 mb-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h4 class="fw-semibold">Product Categories</h4>
      <div class="d-flex gap-2 align-items-center">
        <!-- Items per page selector for categories -->
        <select id="categoriesPerPage" class="form-select form-select-sm text-light bg-dark border-secondary" style="width: auto;">
          <option value="5" selected>5 per page</option>
          <option value="10">10 per page</option>
          <option value="25">25 per page</option>
          <option value="50">50 per page</option>
        </select>
        <button class="btn btn-success btn-sm fw-semibold" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
          <i class="bi bi-plus-lg me-1"></i> Add Category
        </button>
      </div>
    </div>
    
    <!-- Search and Info Bar for Categories -->
    <div class="d-flex justify-content-between align-items-center mb-3">
      <div class="d-flex align-items-center gap-3">
        <input type="text" id="searchCategories" class="form-control form-control-sm bg-dark text-light border-secondary" placeholder="Search categories..." style="width: 250px;">
        <span id="categoryTableInfo" class="text-muted small"></span>
      </div>
    </div>
    
    <div class="table-responsive">
      <table class="table table-dark table-striped table-hover align-middle rounded-3 overflow-hidden">
        <thead class="table-light">
          <tr>
            <th>Category ID</th>
            <th>Category Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="categoryTableBody">
        </tbody>
      </table>
    </div>
    
    <!-- Pagination Controls for Categories -->
    <div class="d-flex justify-content-between align-items-center mt-3">
      <div class="text-muted small">
        Showing <span id="categoryShowingStart">0</span> to <span id="categoryShowingEnd">0</span> of <span id="totalCategories">0</span> categories
      </div>
      <nav aria-label="Categories pagination">
        <ul class="pagination pagination-sm mb-0" id="categoryPaginationContainer">
          <!-- Pagination buttons will be generated here -->
        </ul>
      </nav>
    </div>
  </div>

  <!-- Products Section -->
  <div class="card bg-dark text-light shadow-lg rounded-4 p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h4 class="fw-semibold">Product List</h4>
      <div class="d-flex gap-2 align-items-center">
        <!-- Items per page selector -->
        <select id="itemsPerPage" class="form-select form-select-sm text-light bg-dark border-secondary" style="width: auto;">
          <option value="5">5 per page</option>
          <option value="10" selected>10 per page</option>
          <option value="25">25 per page</option>
          <option value="50">50 per page</option>
        </select>
        <button class="btn btn-success btn-sm fw-semibold" data-bs-toggle="modal" data-bs-target="#addProductModal">
          <i class="bi bi-plus-lg me-1"></i> Add Product
        </button>
      </div>
    </div>
    
    <!-- Search and Info Bar -->
    <div class="d-flex justify-content-between align-items-center mb-3">
      <div class="d-flex align-items-center gap-3">
        <input type="text" id="searchProducts" class="form-control form-control-sm bg-dark text-light border-secondary" placeholder="Search products..." style="width: 250px;">
        <span id="tableInfo" class="text-muted small"></span>
      </div>
    </div>
    
    <div class="table-responsive">
      <table class="table table-dark table-striped table-hover align-middle rounded-3 overflow-hidden">
        <thead class="table-light">
          <tr>
            <th>Product Name</th>
            <th>Description</th>
            <th>Weight</th>
            <th>Price</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="productTableBody">
        </tbody>
      </table>
    </div>
    
    <!-- Pagination Controls -->
    <div class="d-flex justify-content-between align-items-center mt-3">
      <div class="text-muted small">
        Showing <span id="showingStart">0</span> to <span id="showingEnd">0</span> of <span id="totalProducts">0</span> products
      </div>
      <nav aria-label="Products pagination">
        <ul class="pagination pagination-sm mb-0" id="paginationContainer">
          <!-- Pagination buttons will be generated here -->
        </ul>
      </nav>
    </div>
  </div>

</div>


</main>

<!-- Add Category Modal -->
<div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="addCategoryModalLabel">Add New Category</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="addCategoryForm">
        <div class="modal-body">
          <div class="mb-3">
            <label for="categoryName" class="form-label fw-semibold">Category Name</label>
            <input type="text" class="form-control" id="categoryName" placeholder="e.g. Durian Delights" required>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-success">Add Category</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Edit Category Modal -->
<div class="modal fade" id="editCategoryModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content bg-light">
      <div class="modal-header bg-warning text-white">
        <h5 class="modal-title">Edit Product Category</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <form id="editCategoryForm">
        <div class="modal-body">
          <input type="hidden" id="editCategoryID">
          <div class="mb-3">
            <label for="editCategoryName" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="editCategoryName" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-warning">Update Category</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Add Product Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content border-0 shadow">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="addProductModalLabel">Add New Product</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form id="addProductForm" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="row g-3">

            <!-- Category -->
            <div class="col-md-6">
              <label for="productCategory" class="form-label fw-semibold">Category</label>
              <select class="form-select" name="productCategory" id="productCategory" required>
                <option disabled selected>Select Category</option>
                <?php
                require '../connection/db.php';
                $query = $conn->query("SELECT Product_Category_ID, Product_Category_Name FROM product_category_tbl");
                while ($row = $query->fetch_assoc()) {
                    echo '<option value="'.$row['Product_Category_ID'].'">'.$row['Product_Category_Name'].'</option>';
                }
                ?>
              </select>
            </div>

            <!-- Product Name -->
            <div class="col-md-6">
              <label for="productName" class="form-label fw-semibold">Product Name</label>
              <input type="text" class="form-control" id="productName" name="productName" placeholder="Enter product name" required>
            </div>

            <!-- Description -->
            <div class="col-12">
              <label for="productDesc" class="form-label fw-semibold">Description</label>
              <textarea class="form-control" id="productDesc" name="productDesc" rows="2" placeholder="Write a short description" required></textarea>
            </div>

            <!-- Weight & Price & Price From -->
            <div class="col-md-6">
              <label for="productWeight" class="form-label fw-semibold">Weight (g)</label>
              <input type="number" class="form-control" id="productWeight" name="productWeight" placeholder="e.g. 150" required>
            </div>
            <div class="col-md-6">
              <label for="productPrice" class="form-label fw-semibold">Price (₱)</label>
              <input type="number" class="form-control" id="productPrice" name="productPrice" placeholder="e.g. 50.00" step="0.01" required>
            </div>
            
            <div class="col-md-6">
              <label for="productPriceFrom" class="form-label fw-semibold">Price From (₱)</label>
              <input type="number" class="form-control" id="productPriceFrom" name="productPriceFrom" placeholder="e.g. 60.00" step="0.01">
            </div>

            <!-- Ingredients -->
            <div class="col-md-6">
              <label for="productIngredients" class="form-label fw-semibold">Ingredients</label>
              <input type="text" class="form-control" id="productIngredients" name="productIngredients" placeholder="e.g. Durian, milk, sugar" required>
            </div>

            <!-- Shelf Life -->
            <div class="col-md-6">
              <label for="productShelflife" class="form-label fw-semibold">Shelf Life</label>
              <input type="text" class="form-control" id="productShelflife" name="productShelflife" placeholder="e.g. 30 days" required>
            </div>

            <!-- Shopee & Lazada -->
            <div class="col-md-6">
              <label for="productShopee" class="form-label fw-semibold">Shopee Link</label>
              <input type="url" class="form-control" id="productShopee" name="productShopee" placeholder="https://shopee.ph/product-link">
            </div>
            <div class="col-md-6">
              <label for="productLazada" class="form-label fw-semibold">Lazada Link</label>
              <input type="url" class="form-control" id="productLazada" name="productLazada" placeholder="https://lazada.com.ph/product-link">
            </div>

            <!-- Bestseller Checkbox -->
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="productBestseller" name="productBestseller">
                <label class="form-check-label fw-semibold" for="productBestseller">
                  Mark as Bestseller
                </label>
              </div>
            </div>

            <!-- Image Upload -->
            <div class="col-12">
              <label for="productImages" class="form-label fw-semibold">Upload Images (Max: 5)</label>
              <input type="file" class="form-control" id="productImages" name="productImages[]" accept="image/*" multiple>
              <div id="imagePreview" class="d-flex gap-3 flex-wrap mt-3"></div>
            </div>

            <hr class="my-4">

            <h5 class="mb-3">Slideshow</h5>

            <div class="mb-3">
              <label for="slideshowDescription" class="form-label">Slideshow Description</label>
              <textarea class="form-control" id="slideshowDescription" name="slideshowDescription" rows="3" placeholder="Enter description for the slideshow"></textarea>
            </div>

            <div class="mb-3">
              <label for="slideshowImage" class="form-label">Slideshow Image</label>
              <input type="file" class="form-control" id="slideshowImage" name="slideshowImage" accept="image/*">
            </div>

          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Add Product</button>
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Edit Product Modal -->
<div class="modal fade" id="editProductModal" tabindex="-1" aria-labelledby="editProductModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content border-0 shadow">
      <div class="modal-header bg-warning text-dark">
        <h5 class="modal-title fw-bold" id="editProductModalLabel">
          <i class="bi bi-pencil-fill me-2"></i>Edit Product
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form id="editProductForm" enctype="multipart/form-data">
        <input type="hidden" id="editProductID" name="productID">
        <div class="modal-body">
          <div class="row g-3">

            <!-- Category -->
            <div class="col-md-6">
              <label for="editProductCategory" class="form-label fw-semibold">Category</label>
              <select class="form-select" id="editProductCategory" name="productCategory" required>
                <option disabled>Select Category</option>
                <?php
                require '../connection/db.php';
                $query = $conn->query("SELECT Product_Category_ID, Product_Category_Name FROM product_category_tbl");
                while ($row = $query->fetch_assoc()) {
                    echo '<option value="'.$row['Product_Category_ID'].'">'.$row['Product_Category_Name'].'</option>';
                }
                ?>
              </select>
            </div>

            <!-- Product Name -->
            <div class="col-md-6">
              <label for="editProductName" class="form-label fw-semibold">Product Name</label>
              <input type="text" class="form-control" id="editProductName" name="productName" required>
            </div>

            <!-- Description -->
            <div class="col-12">
              <label for="editProductDesc" class="form-label fw-semibold">Description</label>
              <textarea class="form-control" id="editProductDesc" name="productDesc" rows="2" required></textarea>
            </div>

            <!-- Weight & Price -->
            <div class="col-md-6">
              <label for="editProductWeight" class="form-label fw-semibold">Weight (g)</label>
              <input type="number" class="form-control" id="editProductWeight" name="productWeight" required>
            </div>
            <div class="col-md-6">
              <label for="editProductPrice" class="form-label fw-semibold">Price (₱)</label>
              <input type="number" class="form-control" id="editProductPrice" name="productPrice" step="0.01" required>
            </div>
            <div class="col-md-6">
              <label for="editProductPriceFrom" class="form-label fw-semibold">Price From (₱)</label>
              <input type="number" class="form-control" id="editProductPriceFrom" name="productPriceFrom" step="0.01">
            </div>
            

            <!-- Ingredients -->
            <div class="col-md-6">
              <label for="editProductIngredients" class="form-label fw-semibold">Ingredients</label>
              <input type="text" class="form-control" id="editProductIngredients" name="productIngredients" required>
            </div>

            <!-- Shelf Life -->
            <div class="col-md-6">
              <label for="editProductShelflife" class="form-label fw-semibold">Shelf Life</label>
              <input type="text" class="form-control" id="editProductShelflife" name="productShelflife" required>
            </div>

            <!-- Shopee & Lazada -->
            <div class="col-md-6">
              <label for="editProductShopee" class="form-label fw-semibold">Shopee Link</label>
              <input type="text" class="form-control" id="editProductShopee" name="productShopee">
            </div>
            <div class="col-md-6">
              <label for="editProductLazada" class="form-label fw-semibold">Lazada Link</label>
              <input type="text" class="form-control" id="editProductLazada" name="productLazada">
            </div>

            <!-- Bestseller Checkbox -->
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="editProductBestseller" name="productBestseller">
                <label class="form-check-label fw-semibold" for="editProductBestseller">
                  Mark as Bestseller
                </label>
              </div>
            </div>

            <!-- Current Thumbnails Preview -->
            <div class="col-12">
              <label class="form-label fw-semibold">Current Thumbnails</label>
              <div id="currentThumbnails" class="d-flex gap-3 flex-wrap"></div>
            </div>

            <!-- Upload New Thumbnails -->
            <div class="col-12">
              <label for="editProductImages" class="form-label fw-semibold">Upload New Thumbnails (Max: 5)</label>
              <input type="file" class="form-control" id="editProductImages" name="images[]" accept="image/*" multiple>
              <div id="editImagePreview" class="d-flex gap-3 flex-wrap mt-3"></div>
            </div>
            <input type="hidden" id="removedThumbnails" name="removedThumbnails">
            <hr class="my-4">
            <h5 class="mb-3">Slideshow</h5>

            <div class="mb-3">
              <label for="editSlideshowDescription" class="form-label">Slideshow Description</label>
              <textarea class="form-control" id="editSlideshowDescription" name="slideshowDescription" rows="3"></textarea>
            </div>

            <!-- Current Slideshow Preview -->
            <div class="mb-3">
              <label class="form-label fw-semibold">Current Slideshow Image</label><br>
              <img id="currentSlideshowImg" src="" alt="Slideshow Preview" class="img-thumbnail" style="max-height: 120px;">
            </div>

            <!-- Upload New Slideshow -->
            <div class="mb-3">
              <label for="editSlideshowImage" class="form-label">Upload New Slideshow Image</label>
              <input type="file" class="form-control" id="editSlideshowImage" name="slideshowImage" accept="image/*">
            </div>

          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-warning">Update Product</button>
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
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
 
    <script src="scripts/categories/fetch.js"></script>
    <script src="scripts/categories/add.js"></script>
    <script src="scripts/categories/update.js"></script>
    <script src="scripts/categories/delete.js"></script>

    <script src="scripts/products/add.js"></script>
    <script src="scripts/products/fetch.js"></script>
    <script src="scripts/products/edit.js"></script>         
    <script src="scripts/products/update.js"></script>  
    <script src="scripts/products/delete.js"></script>  

    <script src="scripts/products/image-preview.js"></script>

    <script src="scripts/common/logout.js"></script>
    <script src="../scripts/change-password.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="scripts/nav-hide.js"></script>
</body>
</html>
