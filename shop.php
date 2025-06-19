<?php require 'common/fetch-category.php'; ?>
<?php require 'common/product-token.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lola Abon's - Original Durian Candy from Davao, Philippines</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@300;400;700&display=swap" rel="stylesheet">

    <!--Favicon -->
    <!-- Standard Favicon (Browsers) -->
    <link rel="icon" type="image/x-icon" href="Images/favicon/favicon.ico">
    
    <!-- PNG Favicons (for modern browsers) -->
    <link rel="icon" type="image/png" sizes="32x32" href="Images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Images/favicon/favicon-16x16.png">
    
    <!-- Apple Touch Icon (iOS, iPadOS) -->
    <link rel="apple-touch-icon" href="Images/favicon/apple-touch-icon.png">
    
    <!-- Android Chrome Favicons -->
    <link rel="icon" sizes="192x192" href="Images/favicon/android-chrome-192x192.png">
    <link rel="icon" sizes="512x512" href="Images/favicon/android-chrome-512x512.png">
    
    <!-- Manifest for Progressive Web Apps (Optional) -->
    <link rel="manifest" href="Images/favicon/site.webmanifest">

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
        <a class="navbar-brand" href="index">
                <img src="Images/logo.png" alt="Lola Abon's Logo"> 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">              
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="shop">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="about-us">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="blogs">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact-us">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

<!-- Shop Section -->
<main class="shop-section py-5 bg-light">
    <div class="container">
        <h2 class="display-5 fw-bold text-center" style="color: #111;">Shop All Durian Delights</h2>
        <!-- 🔍 Search Bar -->
        <div class="row justify-content-center mb-4">
            <div class="col-md-8">
                <div class="input-group shadow-sm rounded-pill overflow-hidden">
                    <input type="text" id="searchInput" class="form-control border-0 px-4 py-3"
                        placeholder="Search for a product..." value="<?= htmlspecialchars($_GET['search'] ?? '') ?>">
                    <button id="searchBtn" class="btn btn-success px-4">Search</button>
                </div>
            </div>
        </div>



        <!-- 🏷️ Category Filter -->
        <div class="d-flex flex-wrap justify-content-center gap-3 mb-5">
    <a href="shop" class="btn btn-outline-success rounded-pill px-4 <?= ($selectedCategorySlug == 'all') ? 'active' : '' ?>">All</a>
    <?php foreach ($categories as $cat): ?>
        <a href="shop?category=<?= $cat['slug'] ?>" 
        class="btn btn-outline-success rounded-pill px-4 <?= ($selectedCategorySlug == $cat['slug']) ? 'active' : '' ?>">
        <?= htmlspecialchars($cat['Product_Category_Name']) ?>
    </a>
    <?php endforeach; ?>
</div>



<!-- 🛒 Product Grid -->
<div class="row g-4">
    <?php if (!empty($products)): ?>
        <?php foreach ($products as $product): ?>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100 product-card">
                    <img src="Images/slideshow/<?= htmlspecialchars($product['Index_Image_Loc']) ?>" class="card-img-top" alt="<?= htmlspecialchars($product['Product_Name']) ?>" style="width: 100%; height: 280px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold mb-1"><?= htmlspecialchars($product['Product_Name']) ?></h5>
                        <p class="card-text text-muted mb-2"><?= htmlspecialchars($product['Index_Description']) ?></p>
                        <p class="text-success fw-bold fs-5 mb-3">₱<?= number_format($product['Product_Price'], 2) ?></p>
                        <a href="product-details?id=<?= encodeProductId($product['Product_ID']) ?>" class="btn btn-success rounded-pill px-4">Buy Now</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <?php else: ?>
            <div class="col-12 text-center">
                <p class="text-muted">No products found for this category.</p>
            </div>
        <?php endif; ?>
    </div>
    </div>
</main>
<script>        //navbar scroll effect
        let lastScrollTop = 0;
        const navbar = document.querySelector('.navbar');
        
        window.addEventListener('scroll', () => {
          const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
          if (scrollTop > lastScrollTop) {
            // Scrolling down - hide navbar
            navbar.classList.add('navbar-hidden');
          } else {
            // Scrolling up - show navbar
            navbar.classList.remove('navbar-hidden');
          }
        
          lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
        });
        </script>
<!-- Footer Section -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- Left Side: Logo & Description -->
            <div class="col-lg-4 col-md-15 text-center">
                <img src="Images/logo.png" alt="Lola Abon's Logo" class="footer-logo">
                <p class="footer-tagline">Authentic durian treats crafted with love.</p>
                <p class="footer-copyright">© 2025. All rights reserved.</p>
            </div>

            <!-- Sweets & Treats Column -->
            <div class="col-lg-2 col-md-4">
                <h4 class="footer-title">Sweets & Treats</h4>
                <ul class="footer-links">
                    <li><a href="shop?category=durian">Durian Yema</a></li>
                    <li><a href="shop?category=candies">Durian Macaroons</a></li>
                    <li><a href="shop?category=jam-honey-spreads">Durian Tarts</a></li>
                    <li><a href="shop?category=candies">Durian Candy</a></li>
                    <li><a href="shop?category=coffee">Gift Packs & Souvenirs</a></li>
                </ul>
            </div>

            <!-- Quick Links Column -->
            <div class="col-lg-2 col-md-4">
                <h4 class="footer-title">Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="shop">Shop</a></li>
                    <li><a href="about-us">Our Story</a></li>
                    <li><a href="store-locator">Store Locator</a></li>
                    <li><a href="contact-us">Contact Us</a></li>
                </ul>
            </div>

            <!-- Follow Us Column -->
            <div class="col-lg-2 col-md-4">
                <h4 class="footer-title">Follow Us</h4>
                <ul class="footer-links">
                    <li><a href="https://www.facebook.com/lolaabons1950">Facebook</a></li>
                    <li><a href="https://www.instagram.com/lolaabons/">Instagram</a></li>
                    <li><a href="404">TikTok</a></li>
                </ul>
            </div>

            <!-- Buy Online Column (Properly Aligned) -->
            <div class="col-lg-2 col-md-4">
                <h4 class="footer-title">Buy Online</h4>
                <ul class="footer-links">
                    <li><a href="https://www.lazada.com.ph/shop/lola-abon-s-durian-candies-inc" target="_blank">Shop on Lazada</a></li>
                    <li><a href="https://shopee.ph/lolaabons" target="_blank">Shop on Shopee</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script src="js/search.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
