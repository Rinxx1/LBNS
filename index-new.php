<?php
$pageName = 'index';
include 'includes/header.php';
?>

        <div class="loading-wrapper">
        <!-- Expanding Lines -->
        <div class="line left-line"></div>
        <div class="line right-line"></div>
    
        <!-- Centered Logo -->
        <img src="Images/logo.png" alt="Lola Abon's Logo" class="loading-logo">
    </div>

<!--Hero Section -->
<section class="hero-section">
    <!-- Animated Background Elements -->
    <div class="hero-bg-elements">
        <div class="floating-element element-1"></div>
        <div class="floating-element element-2"></div>
        <div class="floating-element element-3"></div>
    </div>
    
    <div class="container">
        <div class="row align-items-center min-vh-100">
            <!-- Left Side Content -->
            <div class="col-lg-7 mb-5 mb-lg-0">
                <div class="hero-content">
                    <!-- Hero Badge -->
                    <div class="hero-badge">
                        <i class="bi bi-star-fill"></i>
                        <span>Davao's #1 Durian Confectionery Since 1950</span>
                    </div>
                    
                    <!-- Mobile Logo -->
                    <img src="Images/logo.png" alt="Lola Abon's Logo" class="mobile-hero-logo mb-4 d-lg-none">
                    
                    <!-- Main Heading -->
                    <h1 class="hero-title">
                        <span class="title-highlight">Taste the Legacy</span>
                        of Davao's Finest 
                        <span class="title-accent">Durian Delicacies</span>
                    </h1>
                    
                    <!-- Description -->
                    <p class="hero-description">
                        From Lola Abon's humble kitchen to becoming the Philippines' premier durian confectionery. 
                        Experience authentic flavors crafted with 70+ years of tradition and passion.
                    </p>
                    
                    <!-- Hero Features -->
                    <div class="hero-features">
                        <div class="feature-item">
                            <i class="bi bi-award-fill"></i>
                            <span>Award-Winning Quality</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-heart-fill"></i>
                            <span>Family Heritage</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-geo-alt-fill"></i>
                            <span>Authentic Davao Durian</span>
                        </div>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="hero-actions">
                        <a href="shop" class="hero-btn-primary">
                            <i class="bi bi-bag-heart"></i>
                            <span>Shop Our Delicacies</span>
                        </a>
                        <a href="about-us" class="hero-btn-secondary">
                            <i class="bi bi-play-circle"></i>
                            <span>Our Story</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Side Enhanced Content -->
            <div class="col-lg-5">
                <div class="hero-right-content">
                    <!-- Business Hours Card -->
                    <div class="business-hours-card">
                        <div class="card-header">
                            <h3><i class="bi bi-clock"></i> Business Hours</h3>
                            <div class="status-badge open">
                                <span class="status-dot"></span>
                                Open Now
                            </div>
                        </div>
                        <div class="hours-info">
                            <div class="hours-item">
                                <span class="day">Monday - Sunday</span>
                                <span class="time">8:00 AM - 8:00 PM</span>
                            </div>
                            <div class="store-contact">
                                <i class="bi bi-telephone"></i>
                                <span>(082) 123-4567</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product Showcase Slider -->
                    <div class="hero-product-showcase">
                        <div class="showcase-header">
                            <h4>Featured Products</h4>
                            <div class="showcase-nav">
                                <button class="nav-btn prev-btn">
                                    <i class="bi bi-chevron-left"></i>
                                </button>
                                <button class="nav-btn next-btn">
                                    <i class="bi bi-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                        <div class="swiper heroProductSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product-card">
                                        <img src="Images/hero-section/hero-slider/Unli Durian.jpg" alt="Unli Durian" class="product-img">
                                        <div class="product-info">
                                            <h5>Unli Durian</h5>
                                            <p>Premium durian treats</p>
                                            <div class="product-badge">Best Seller</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-card">
                                        <img src="Images/hero-section/hero-slider/Parade.jpg" alt="Parade Collection" class="product-img">
                                        <div class="product-info">
                                            <h5>Parade Collection</h5>
                                            <p>Festive durian delicacies</p>
                                            <div class="product-badge">Limited</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-card">
                                        <img src="Images/hero-section/hero-slider/Kadayawan.jpg" alt="Kadayawan Special" class="product-img">
                                        <div class="product-info">
                                            <h5>Kadayawan Special</h5>
                                            <p>Festival season treats</p>
                                            <div class="product-badge">Seasonal</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Online Store Links -->
                    <div class="online-stores">
                        <h5>Shop Online</h5>
                        <div class="store-links">
                            <a href="https://shopee.ph/lolaabons" target="_blank" class="store-link shopee">
                                <img src="Images/btnicons/shopee.png" alt="Shopee">
                                <span>Shopee</span>
                            </a>
                            <a href="https://www.lazada.com.ph/shop/lola-abon-s-durian-candies-inc" target="_blank" class="store-link lazada">
                                <img src="Images/btnicons/lazada.png" alt="Lazada">
                                <span>Lazada</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="scroll-indicator">
        <span>Scroll to explore more</span>
        <div class="scroll-icon">
            <i class="bi bi-chevron-down"></i>
        </div>
    </div>
</section>

<!-- Enhanced About Us Section -->
<section class="about-section section-connector">
    <div class="connector-circle connector-circle-1"></div>
    <div class="connector-circle connector-circle-2"></div>
    <div class="container">
        <div class="row align-items-center">
            <!-- Mobile: Content First, Image Second -->
            <div class="col-lg-6 order-2 order-lg-1">
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

            <!-- Enhanced Image & Statistics -->
            <div class="col-lg-6 position-relative order-1 order-lg-2">
                <div class="about-image-container mobile-optimized">
                    <!-- Mobile Hero Image Overlay -->
                    <div class="mobile-image-hero d-lg-none">
                        <img src="Images/about-us.png" alt="Lola Abon's Store" class="about-image-mobile">
                        <div class="mobile-overlay">
                            <div class="mobile-stats-container">
                                <div class="mobile-stat-item">
                                    <h3>70+</h3>
                                    <p>Years of Heritage</p>
                                </div>
                                <div class="mobile-stat-item">
                                    <h3>20+</h3>
                                    <p>Signature Delicacies</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Desktop Image (Hidden on Mobile) -->
                    <div class="d-none d-lg-block">
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
    </div>
</section>

<!-- Enhanced Visit Our Stores Section -->
<section class="stores-section section-connector">
    <div class="connector-circle connector-circle-1"></div>
    <div class="connector-circle connector-circle-2"></div>
    <div class="container">
        <div class="row align-items-center">
            <!-- Enhanced Mobile Store Image -->
            <div class="col-lg-6 position-relative order-1">
                <div class="stores-image-container mobile-optimized">
                    <!-- Mobile Carousel/Image -->
                    <div class="mobile-store-showcase d-lg-none">
                        <div class="mobile-store-card">
                            <img src="Images/index/Store-section.jpg" alt="Customers at Lola Abon's" class="stores-image-mobile">
                            <div class="mobile-store-overlay">
                                <div class="store-badge">
                                    <i class="bi bi-geo-alt-fill"></i>
                                    <span>Find Our Stores</span>
                                </div>
                                <div class="mobile-store-stats">
                                    <div class="mobile-store-stat">
                                        <h4>3</h4>
                                        <span>Locations</span>
                                    </div>
                                    <div class="mobile-store-stat">
                                        <h4>70+</h4>
                                        <span>Years</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Desktop Image (Hidden on Mobile) -->
                    <div class="d-none d-lg-block">
                        <img src="Images/index/Store-section.jpg" alt="Customers buying durian treats at Lola Abon's" class="stores-image">
                        <div class="stores-stats">
                            <div class="stat-item">
                                <h3>3</h3>
                                <p>Store Locations</p>
                            </div>
                            <div class="stat-item">
                                <h3>70+</h3>
                                <p>Years Serving</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Store Information -->
            <div class="col-lg-6 order-2">
                <div class="stores-content">
                    <h2 class="stores-title">Where to Find Us</h2>
                    <p class="stores-text">
                        Visit our <strong>flagship store</strong> in Davao City where it all began, or discover our authentic durian treats at our branch locations across Mindanao. Experience the tradition firsthand.
                    </p>
                    
                    <div class="store-highlights">
                        <div class="highlight-item">
                            <div class="highlight-icon">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div class="highlight-text">
                                <h4>Davao City - Main Store</h4>
                                <p>Roxas Avenue, Davao City | (082) 123-4567</p>
                            </div>
                        </div>
                        
                        <div class="highlight-item">
                            <div class="highlight-icon">
                                <i class="bi bi-shop"></i>
                            </div>
                            <div class="highlight-text">
                                <h4>Branch Locations</h4>
                                <p>Butuan City: J.C. Aquino Avenue<br>
                                   Cagayan de Oro: Corrales Avenue</p>
                            </div>
                        </div>
                        
                      <div class="highlight-item">
                          <div class="highlight-icon">
                              <i class="bi bi-cart"></i>
                          </div>
                          <div class="highlight-text">
                              <h4>Shop Online</h4>
                              <div class="online-store-logos d-flex justify-content-center align-items-center">
                                  <a href="https://shopee.ph/lolaabons" target="_blank" class="me-2">
                                      <img src="Images/btnicons/shopee.png" alt="Shopee" style="height: 32px;">
                                  </a>
                                  <a href="https://www.lazada.com.ph/shop/lola-abon-s-durian-candies-inc" target="_blank">
                                      <img src="Images/btnicons/lazada.png" alt="Lazada" style="height: 32px;">
                                  </a>
                              </div>
                          </div>
                      </div>
                    </div>
                    
                    <a href="store-locator" class="stores-btn">Find Store Locations</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Durian Products Slider Section -->
<section class="durian-slider-section">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-badge">Featured Collection</span>
            <h2 class="display-4 fw-bold mb-3" style="color: #111;">Our Signature Durian Creations</h2>
            <p class="section-subtitle lead mx-auto" style="max-width: 650px;">
                Explore the perfect blend of tradition and innovation in every Lola Abon's specialty product, handcrafted with passion since 1950.
            </p>
        </div>

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

        <!-- Enhanced CTA Section -->
        <div class="text-center mt-5">
            <div class="products-cta">
                <h4 class="mb-3">Discover Our Complete Collection</h4>
                <p class="mb-4">Browse through our entire range of authentic durian delicacies and find your perfect treat.</p>
                <a href="shop" class="btn btn-primary btn-lg">
                    <i class="bi bi-shop me-2"></i>
                    View All Products
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Discover Our Durian Delicacies Section -->
<section class="durian-delicacies">
  <div class="container">
    <div class="text-center mb-5">
        <span class="section-badge">Our Specialties</span>
        <h2 class="display-4 fw-bold mb-3" style="color: #111;">Taste the Sweetness of Tradition</h2>
        <p class="section-subtitle lead mx-auto" style="max-width: 650px;">
            Indulge in our beloved durian treats crafted from timeless recipes and heartfelt passion, each bite telling the story of our heritage.
        </p>
    </div>

    <div class="row g-4">
      <!-- Delicacy 1 -->
      <div class="col-lg-4 col-md-6">
        <div class="delicacy-showcase-card">
          <div class="delicacy-image-wrapper">
            <img src="Images/Delicacies/Chewy.jpg" alt="Chewy Candy & Laces" class="delicacy-showcase-img">
            <div class="delicacy-overlay">
              <div class="delicacy-category-badge">
              </div>
            </div>
          </div>
          <div class="delicacy-showcase-content">
            <h3>Chewy Candy & Laces</h3>
            <p>Soft and flavorful durian-infused chewy candies, perfect for a sweet and satisfying treat that melts in your mouth.</p>
            <div class="delicacy-highlights">
              <span>• Soft Texture</span>
              <span>• Rich Durian Flavor</span>
              <span>• Traditional Recipe</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Delicacy 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="delicacy-showcase-card">
          <div class="delicacy-image-wrapper">
            <img src="Images/Delicacies/Jam.jpg" alt="Jam Marmalade" class="delicacy-showcase-img">
            <div class="delicacy-overlay">
            </div>
          </div>
          <div class="delicacy-showcase-content">
            <h3>Jam & Marmalade</h3>
            <p>Rich, spreadable durian jams made from real fruit, ideal for pairing with bread, pastries, or your favorite desserts.</p>
            <div class="delicacy-highlights">
            </div>
          </div>
        </div>
      </div>

      <!-- Delicacy 3 -->
      <div class="col-lg-4 col-md-6">
        <div class="delicacy-showcase-card">
          <div class="delicacy-image-wrapper">
            <img src="Images/Delicacies/Tart.jpg" alt="Chocolate Biscuits" class="delicacy-showcase-img">
            <div class="delicacy-overlay">
            </div>
          </div>
          <div class="delicacy-showcase-content">
          </div>
        </div>
      </div>

      <!-- Delicacy 4 -->
      <div class="col-lg-4 col-md-6">
        <div class="delicacy-showcase-card">
          <div class="delicacy-image-wrapper">
          </div>
          <div class="delicacy-showcase-content">
          </div>
        </div>
      </div>

      <!-- Delicacy 5 -->
      <div class="col-lg-4 col-md-6">
        <div class="delicacy-showcase-card">
        </div>
      </div>

      <!-- Delicacy 6 -->
      <div class="col-lg-4 col-md-6">
      </div>
    </div>

    <!-- Simple CTA -->
    <div class="text-center mt-5">
        <p class="lead mb-4">Discover the full range of our authentic durian delicacies</p>
    </div>
  </div>
</section>

<!-- Our Services Section -->
<section class="services-section">
    <div class="container">
        <div class="text-center mb-5">
        </div>

        <div class="row g-4">
        </div>
    </div>
</section>
<?php include 'includes/footer.php'; ?>
