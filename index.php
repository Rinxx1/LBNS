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

    <!-- Hero-Style CSS -->
    <link href="css/hero-style.css" rel="stylesheet">
 

</head>

<body>
    <div class="loading-wrapper">
        <!-- Expanding Lines -->
        <div class="line left-line"></div>
        <div class="line right-line"></div>
    
        <!-- Centered Logo -->
        <img src="Images/logo.png" alt="Lola Abon's Logo" class="loading-logo">
    </div>

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

<!-- Enhanced Hero Section -->
<section class="hero-section">
    <div class="container">
    <br><br>
        <div class="row align-items-center">

            <!-- Left Side Content -->
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="hero-content text-white">
                    <img src="Images/logo.png" alt="Lola Abon's Logo" class="mobile-hero-logo mb-4">
                    <h1 class="hero-title">Taste the Legacy of Davao's Finest Durian Delicacies</h1>
                    <p class="hero-subtitle">Since 1950</p>
                    <a href="shop" class="hero-btn">Explore Our Sweets</a>
                </div>
            </div>

            <!-- Right Side Enhanced Slider -->
            <div class="col-lg-6">
                <div class="hero-slider-container mobile-hide">
                    <div class="swiper heroSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="Images/hero.jpg" alt="Durian Product" class="hero-slide-img" />
                                <div class="slide-content">
                                    <h3 class="slide-title">Signature Durian Candy</h3>
                                    <p class="slide-description">Our most beloved treat, handcrafted using traditional
                                        recipes since 1950.</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="Images/hero1.jpg" alt="Durian Product 1" class="hero-slide-img" />
                                <div class="slide-content">
                                    <h3 class="slide-title">Premium Durian Yema</h3>
                                    <p class="slide-description">Rich, creamy delights made from Davao's finest durian
                                        fruit.</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="Images/hero2.jpg" alt="Durian Product 2" class="hero-slide-img" />
                                <div class="slide-content">
                                    <h3 class="slide-title">Artisanal Gift Packs</h3>
                                    <p class="slide-description">Perfect for sharing a taste of Mindanao with your loved
                                        ones.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Navigation Controls -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>

                        <!-- Custom Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- Scroll Indicator -->
    <div class="scroll-indicator">
        <span>Scroll down to explore</span>
        <div class="icon"></div>
    </div>
</section>

<!-- About Us Section -->
<section class="about-section section-connector">
    <div class="connector-circle connector-circle-1"></div>
    <div class="connector-circle connector-circle-2"></div>
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Side: Text Content -->
            <div class="col-lg-6">
                <div class="about-content">
                    <span class="section-badge">Since 1950</span>
                    <h2 class="about-title">Our Heritage</h2>
                    <p class="about-text">
                        From <strong>Lola Abon's</strong> humble kitchen in Davao to becoming the Philippines' 
                        premier durian confectionery, our story is one of passion and tradition that spans three generations.
                    </p>
                    <div class="heritage-highlights">
                        <div class="highlight-item">
                            <div class="highlight-icon">
                                <i class="bi bi-trophy"></i>
                            </div>
                            <div class="highlight-text">
                                <h4>Award-Winning</h4>
                                <p>Recognized for excellence in Philippine confectionery</p>
                            </div>
                        </div>
                        <div class="highlight-item">
                            <div class="highlight-icon">
                                <i class="bi bi-star"></i>
                            </div>
                            <div class="highlight-text">
                                <h4>Authentic Flavor</h4>
                                <p>Using only genuine Davao durian in our recipes</p>
                            </div>
                        </div>
                    </div>
                    <a href="about-us" class="about-btn">Discover our story</a>
                </div>
            </div>

            <!-- Right Side: Image & Statistics -->
            <div class="col-lg-6 position-relative">
                <div class="about-image-container">
                    <img src="Images/about-us.png" alt="Lola Abon's Store" class="about-image">
                    <div class="about-stats">
                        <div class="stat-item">
                            <h3>70+</h3>
                            <p>Years of Heritage</p>
                        </div>
                 
                        <div class="stat-item">
                            <h3>20+</h3>
                            <p>Signature Durian Delicacies</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Featured Products Section -->
<section class="featured-products py-5">
  <div class="container">
    <h2 class="display-5 fw-bold" style="color: #111;">Featured Products</h2>
    <p class="section-subtitle">
      Celebrate every moment with our bestselling durian favorites, crafted to delight every taste.
    </p>
    <div class="row g-4 justify-content-center">

      <!-- Product Card 1 -->
      <div class="col-md-4">
        <div class="product-card">
          <div class="product-image-wrapper">
            <img src="Images/hero1.jpg" alt="Durian Yema" class="product-image">
            <span class="product-badge">Durian Yema</span>
          </div>
          <div class="product-info">
            <p>Soft, chewy durian candy with a rich tropical flavor everyone loves.</p>
          </div>
        </div>
      </div>

      <!-- Product Card 2 -->
      <div class="col-md-4">
        <div class="product-card">
          <div class="product-image-wrapper">
            <img src="Images/hero3.jpg" alt="Durian Cubes" class="product-image">
            <span class="product-badge">Durian Cubes</span>
          </div>
          <div class="product-info">
            <p>Bite-sized creamy durian cubes perfect for everyday snacking.</p>
          </div>
        </div>
      </div>

      <!-- Product Card 3 -->
      <div class="col-md-4">
        <div class="product-card">
          <div class="product-image-wrapper">
            <img src="Images/hero4.jpg" alt="Durian Candy" class="product-image">
            <span class="product-badge">Durian Candy</span>
          </div>
          <div class="product-info">
            <p>Experience the classic durian sweetness in every bite-sized piece.</p>
          </div>
        </div>
      </div>

      <!-- Product Card 4 -->
      <div class="col-md-4">
        <div class="product-card">
          <div class="product-image-wrapper">
            <img src="Images/hero2.jpg" alt="Durian Delights" class="product-image">
            <span class="product-badge">Durian Delights</span>
          </div>
          <div class="product-info">
            <p>Handcrafted durian specialties, a true taste of heritage and joy.</p>
          </div>
        </div>
      </div>

      <!-- Product Card 5 -->
      <div class="col-md-4">
        <div class="product-card">
          <div class="product-image-wrapper">
            <img src="Images/hero.jpg" alt="Premium Durian Treats" class="product-image">
            <span class="product-badge">Premium Durian Treats</span>
          </div>
          <div class="product-info">
            <p>Premium-grade durian candies made fresh for your sweetest moments.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Durian Products Slider Section -->
<section class="durian-slider-section">
    <h2 class="display-5 fw-bold" style="color: #111;">Our Signature Durian Creations</h2>
    <p class="section-subtitle">
Explore the perfect blend of tradition and innovation in every Lola Abon's specialty product.
</p>
    <!-- Swiper Container -->
    <div class="swiper mySwiper">
    <div class="swiper-wrapper">
            <?php include 'common/fetch-slider.php'; ?>
        </div>

        <!-- Navigation Arrows -->
        <div class="swiper-button-next-products"></div>
        <div class="swiper-button-prev-products"></div>

        <!-- Pagination Dots -->
        <div class="swiper-pagination-products"></div>
    </div>

    <!-- View All Button -->
    <div class="view-all-container">
        <a href="shop.php" class="view-all-btn">View All</a>
    </div>
</section>
<!-- Discover Our Durian Delicacies Section -->
<section class="durian-delicacies">
  <div class="container">
    <h2 class="display-5 fw-bold" style="color: #111;">Taste the Sweetness of Tradition</h2>
    <p class="section-subtitle">
Indulge in our beloved durian treats crafted from timeless recipes and heartfelt passion.
</p>
    <div class="row">
      <!-- Repeatable Product Card -->
      <div class="col-md-4 mb-4">
        <div class="delicacy-card">
          <img src="Images/hero2.jpg" alt="Chewy Candy & Laces">
          <div class="card-overlay">
            <h3>Chewy Candy & Laces</h3>
            <p>Soft and flavorful durian-infused chewy candies, perfect for a sweet and satisfying treat.</p>
            <a href="#" class="delicacy-btn">See more</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="delicacy-card">
          <img src="Images/hero4.jpg" alt="Jam Marmalade">
          <div class="card-overlay">
            <h3>Jam Marmalade</h3>
            <p>Rich, spreadable durian jams made from real fruit, ideal for pairing with bread, pastries, or desserts.</p>
            <a href="#" class="delicacy-btn">See more</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="delicacy-card">
          <img src="Images/hero1.jpg" alt="Chocolate Biscuits">
          <div class="card-overlay">
            <h3>Chocolate Biscuits</h3>
            <p>Crisp, chocolate-coated biscuits that complement the bold flavors of durian snacks.</p>
            <a href="#" class="delicacy-btn">See more</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="delicacy-card">
          <img src="Images/hero1.jpg" alt="Sticks & Shapes Biscuits">
          <div class="card-overlay">
            <h3>Sticks & Shapes Biscuits</h3>
            <p>Fun and delicious biscuit snacks in various shapes, great for dipping or enjoying on their own.</p>
            <a href="#" class="delicacy-btn">See more</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="delicacy-card">
          <img src="Images/hero3.jpg" alt="Ready-To-Drink Coffee">
          <div class="card-overlay">
            <h3>Ready-To-Drink Coffee</h3>
            <p>Smooth and aromatic coffee blends that pair perfectly with Lola Abon’s durian treats.</p>
            <a href="#" class="delicacy-btn">See more</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="delicacy-card">
          <img src="Images/hero2.jpg" alt="Gifting & Festive Sweets">
          <div class="card-overlay">
            <h3>Gifting & Festive Sweets</h3>
            <p>Specially curated durian delicacy gift sets, perfect for sharing the taste of tradition on any occasion.</p>
            <a href="#" class="delicacy-btn">See more</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Our Services Section -->
<section class="services-section">
    <div class="container">
        <h2 class="display-5 fw-bold" style="color: #111;">Our Services</h2>
        <p class="section-subtitle">
            Bringing tradition, sweetness, and convenience through our signature products and personalized service.
        </p>

        <div class="row">
            <!-- Service 1 -->
            <div class="col-md-6">
                <div class="service-card">
                    <img src="Images/prodservice1.png" alt="Handcrafted Durian Sweets" class="service-image">
                    <div class="service-info">
                        <h3>Handcrafted Durian Sweets</h3>
                        <p>We specialize in making high-quality durian-based delicacies like yema, candy, macaroons, and
                            tarts using traditional family recipes passed down since the 1950s.</p>
                    </div>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-md-6">
                <div class="service-card">
                    <img src="Images/prodservice2.png" alt="Wholesale & Bulk Orders" class="service-image">
                    <div class="service-info">
                        <h3>Wholesale & Bulk Orders</h3>
                        <p>We offer large-scale production and packaging for resellers, souvenir shops, pasalubong
                            centers, and events across the country.</p>
                    </div>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-md-6">
                <div class="service-card">
                    <img src="Images/prodservice3.png" alt="Custom Packaging & Gift Packs" class="service-image">
                    <div class="service-info">
                        <h3>Custom Packaging & Gift Packs</h3>
                        <p>Perfect for corporate giveaways, weddings, or holiday gifting, our curated durian sets come
                            in elegant packaging ready to impress.</p>
                    </div>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="col-md-6">
                <div class="service-card">
                    <img src="Images/prodservice4.png" alt="Pasalubong & Souvenir Support" class="service-image">
                    <div class="service-info">
                        <h3>Pasalubong & Souvenir Support</h3>
                        <p>Lola Abon's offers specially packed items for travelers, local tourists, and export-quality
                            goods for overseas Filipinos looking for a taste of home.</p>
                    </div>
                </div>
            </div>

            <!-- Service 5 -->
            <div class="col-md-6">
                <div class="service-card">
                    <img src="Images/prodservice5.png" alt="Retail Storefronts" class="service-image">
                    <div class="service-info">
                        <h3>Retail Storefronts</h3>
                        <p>Visit our stores in Davao, Butuan, and CDO to enjoy freshly packed goodies and friendly
                            service from the heart of Mindanao.</p>
                    </div>
                </div>
            </div>

            <!-- Service 6 -->
            <div class="col-md-6">
                <div class="service-card">
                    <img src="Images/prodservice6.png" alt="Local & Online Selling" class="service-image">
                    <div class="service-info">
                        <h3>Local & Online Selling</h3>
                        <p>Shop Lola Abon's treats through Shopee, Lazada, or directly from our local distributors and
                            pop-up booths during festivals and events.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="customer-reviews">
  <div class="container">
  <h2 class="display-5 fw-bold" style="color: #111;">Customer Reviews</h2>
    <p class="section-subtitle">Hear from our satisfied customers around the world.</p>

    <div class="row g-4">
      <!-- Review 1 -->
      <div class="col-md-4">
        <div class="review-card">
          <div>
            <div class="review-stars">★★★★★</div>
            <p class="review-text">
              The durian yema is absolutely heavenly! Packaging was elegant and kept everything fresh. Will order again!
            </p>
          </div>
          <div class="review-author">
            <img src="Images/avatar.png" alt="Clarice Turner">
            <div>
              <div>Clarice Turner</div>
              <div style="font-weight: normal; font-size: 0.9rem; color: #777;">California, USA</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Review 2 -->
      <div class="col-md-4">
        <div class="review-card">
          <div>
            <div class="review-stars">★★★★★</div>
            <p class="review-text">
              Truly authentic taste. Reminds me of home! The flavors are rich and the sweetness is just perfect.
            </p>
          </div>
          <div class="review-author">
            <img src="Images/avatar.png" alt="Brian Moten">
            <div>
              <div>Brian Moten</div>
              <div style="font-weight: normal; font-size: 0.9rem; color: #777;">Melbourne, Australia</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Review 3 -->
      <div class="col-md-4">
        <div class="review-card">
          <div>
            <div class="review-stars">★★★★★</div>
            <p class="review-text">
              Fast delivery and excellent customer service! The durian cubes were creamy and fresh. Highly recommend.
            </p>
          </div>
          <div class="review-author">
            <img src="Images/avatar.png" alt="Jessica Ramirez">
            <div>
              <div>Jessica Ramirez</div>
              <div style="font-weight: normal; font-size: 0.9rem; color: #777;">Davao City, PH</div>
            </div>
          </div>
        </div>
      </div>

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

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!--idea:https://www.elegantthemes.com/layouts/food-drink/candy-shop-about-page-->
    <!--Contact us-->
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/products-slider.js"></script>
    <script src="js/loading-wrapper.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
