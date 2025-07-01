<?php require 'common/fetch-productdetails.php'; ?>

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

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"> 

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
<style>

</style>

<!-- Product Details Section -->
<main class="pd-product-details py-1">
    <div class="container">
        <!-- Breadcrumb Navigation -->
        <nav class="pd-breadcrumb-nav">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index">Home</a></li>
                <li class="breadcrumb-item"><a href="shop">Shop</a></li>
                <li class="breadcrumb-item active"><?= htmlspecialchars($product['Product_Name']) ?></li>
            </ol>
        </nav>

        <div class="row g-5">
            <!-- Product Gallery -->
            <div class="col-lg-6">
                <div class="pd-product-gallery">
                    <div class="pd-main-image-container">
                        <div class="pd-zoom-badge">
                            <i class="fas fa-search-plus"></i> Click to zoom
                        </div>
                        <img id="pd-mainProductImage"
                             src="Images/thumbnail/<?= $thumbnails[0]['Product_Image_Loc'] ?? 'default.jpg' ?>"
                             alt="<?= htmlspecialchars($product['Product_Name']) ?>">
                    </div>
                    
                    <div class="pd-thumbnail-gallery">
                        <?php foreach ($thumbnails as $index => $thumb): ?>
                            <img src="Images/thumbnail/<?= $thumb['Product_Image_Loc'] ?>" 
                                 class="pd-thumbnail-img <?= $index === 0 ? 'active' : '' ?>" 
                                 data-image="Images/thumbnail/<?= $thumb['Product_Image_Loc'] ?>" 
                                 alt="Product view <?= $index + 1 ?>">
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Product Information -->
            <div class="col-lg-6">
                <div class="pd-product-info">
                    <h1 class="pd-product-title"><?= htmlspecialchars($product['Product_Name']) ?></h1>
                    
                    <!-- Rating Section -->
                    <div class="pd-product-rating">
                        <div class="pd-stars">
                            <span class="pd-star">★</span>
                            <span class="pd-star">★</span>
                            <span class="pd-star">★</span>
                            <span class="pd-star">★</span>
                            <span class="pd-star">★</span>
                        </div>
                        <span class="pd-rating-text">(5.0) • Premium Quality</span>
                    </div>

                    <!-- Price Section -->
                    <div class="pd-price-section">
                        <div class="pd-price-row">
                            <div class="pd-price-group">
                                <h2 class="pd-current-price">₱<?= number_format($product['Product_Price'], 2) ?></h2>
                                <?php if ($product['Product_Price_From'] > 1): ?>
                                    <span class="pd-original-price">₱<?= number_format($product['Product_Price_From'], 2) ?></span>
                                <?php endif; ?>
                            </div>
                            
                            <div class="pd-badge-group">
                                <!-- Always show Best Seller badge for testing -->
                                <span class="pd-badge-bestseller">★ Best Seller</span>
                            </div>
                        </div>
                    </div>

                    <!-- Product Description -->
                    <div class="pd-product-description">
                        <?= htmlspecialchars($product['Product_Desc']) ?>
                    </div>

                    <!-- Product Details Grid -->
                    <div class="pd-product-details-grid">
                        <div class="pd-detail-item">
                            <span class="pd-detail-label">Ingredients</span>
                            <span class="pd-detail-value"><?= htmlspecialchars($product['Product_Ingredients']) ?></span>
                        </div>
                        <div class="pd-detail-item">
                            <span class="pd-detail-label">Shelf Life</span>
                            <span class="pd-detail-value"><?= htmlspecialchars($product['Product_Shelflife']) ?></span>
                        </div>
                        <div class="pd-detail-item">
                            <span class="pd-detail-label">Weight</span>
                            <span class="pd-detail-value"><?= htmlspecialchars($product['Product_Weight']) ?>g</span>
                        </div>
                        <div class="pd-detail-item">
                            <span class="pd-detail-label">Origin</span>
                            <span class="pd-detail-value">Davao, Philippines</span>
                        </div>
                    </div>

  

                    <!-- Action Buttons -->
                    <div class="pd-action-buttons">
                        <div class="pd-marketplace-buttons">
                            <?php if (!empty($product['Product_ShopeeLink'])): ?>
                                <a href="<?= $product['Product_ShopeeLink'] ?>" target="_blank" class="pd-btn-shopee">
                                    <img src="Images/btnicons/shopee.png" width="24" alt="Shopee">
                                    Buy on Shopee
                                </a>
                            <?php endif; ?>
                            <?php if (!empty($product['Product_LazadaLink'])): ?>
                                <a href="<?= $product['Product_LazadaLink'] ?>" target="_blank" class="pd-btn-lazada">
                                    <img src="Images/btnicons/lazada.png" width="24" alt="Lazada">
                                    Buy on Lazada
                                </a>
                            <?php endif; ?>
                        </div>
                        
                        <a href="shop" class="pd-btn-back">
                            ← Back to Shop
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Suggested Products Section -->
<section class="suggested-products py-5 bg-light">
    <div class="container">
      <h2 class="text-center fw-bold mb-4">You Might Also Like</h2> 
      <div class="row justify-content-center g-4">
      <?php include 'common/fetch-productsuggested.php'; ?>  
      </div>
    </div>
  </section>
  
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
<script>
                            
        //navbar scroll effect
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
    <script src="js/thumbnail-img.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>