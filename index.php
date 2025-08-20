<?php
$pageName = 'index';
include 'includes/header.php';
?>

        <div class="loading-wrapper">
        <!-- Expanding Lines -->
        <div class="line left-line"></div>
        <div class="line right-line"></div>
    
        <!-- Centered Logo -->
        <img src="Images/logo.png" alt="Lola Abon's Logo" class="loading-logo" loading="lazy">
    </div>


<!--Hero Section -->
<section class="hero-section">
    <div class="container">
      <br>
        <div class="row align-items-center">            <!-- Left Side Content -->
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="hero-content">
                    <!-- Hero Badge -->
                    <div class="hero-badge">
                        <i class="bi bi-star-fill"></i>
                        <span>Davao's #1 Durian Confectionery Since 1950</span>
                    </div>
                    
                    <!-- Mobile Logo -->
                    <img src="Images/logo.png" alt="Lola Abon's Logo" class="mobile-hero-logo mb-4 d-lg-none" loading="lazy">
                    
                    <!-- Main Heading -->
                    <h1 class="hero-title">
                        <span class="title-highlight">Taste the Legacy</span>
                        of Davao's Finest 
                        <span class="title-accent">Durian Delicacies</span>
                    </h1>
                      <!-- Hero Features -->
                    <div class="hero-features">
                        <div class="feature-item">
                            <i class="bi bi-award-fill"></i>
                            <span>Award-Winning Quality</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-heart-fill"></i>
                            <span>Family Heritage Since 1950</span>
                        </div>
                    </div>
                    
                    <!-- Business Hours -->
                    <div class="business-hours-info">
                        <div class="feature-item">
                            <i class="bi bi-clock-fill"></i>
                            <span>Open Daily: Monday - Sunday, 8:00 AM - 8:00 PM</span>
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

            <!-- Right Side Enhanced Slider -->
            <div class="col-lg-6">
                <div class="hero-slider-container mobile-hide">
                    <div class="swiper heroSwiper">
                        <div class="swiper-wrapper">
  <!--                          <div class="swiper-slide">
                              <img src="Images/hero-section/hero-slider/Unli Durian.jpg" alt="Unli Durian" class="hero-slide-img" loading="lazy"/>
                              <div class="slide-content">
                                <h3 class="slide-title">Unli Durian</h3>
                                <p class="slide-description">Enjoy unlimited durian treats, a true celebration of Davao’s iconic fruit.</p>
                              </div>
                            </div>-->
                            <div class="swiper-slide">
                              <img src="Images/hero-section/hero-slider/Parade.jpg" alt="Parade" class="hero-slide-img" loading="lazy"/>
                              <div class="slide-content">
                                <h3 class="slide-title">Parade</h3>
                                <p class="slide-description">Experience the festive spirit with our parade-inspired durian delicacies.</p>
                              </div>
                            </div>
                            <div class="swiper-slide">
                              <img src="Images/hero-section/hero-slider/Kadayawan.jpg" alt="Kadayawan" class="hero-slide-img" loading="lazy"/>
                              <div class="slide-content">
                                <h3 class="slide-title">Kadayawan</h3>
                                <p class="slide-description">Celebrate Kadayawan with special durian creations made for the festival season.</p>
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
                        <img src="Images/about-us.jpg" alt="Lola Abon's Store" class="about-image-mobile" loading="lazy">
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
                        <img src="Images/about-us.jpg" alt="Lola Abon's Store" class="about-image" loading="lazy">
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
                            <img src="Images/index/Store-section.jpg" alt="Customers at Lola Abon's" class="stores-image-mobile" loading="lazy">
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
                        <img src="Images/index/Store-section.jpg" alt="Customers buying durian treats at Lola Abon's" class="stores-image" loading="lazy">
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
                                      <img src="Images/btnicons/shopee.png" alt="Shopee" style="height: 32px;" loading="lazy">
                                  </a>
                                  <a href="https://www.lazada.com.ph/shop/lola-abon-s-durian-candies-inc" target="_blank">
                                      <img src="Images/btnicons/lazada.png" alt="Lazada" style="height: 32px;" loading="lazy">
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
            <img src="Images/Delicacies/Chewy.jpg" alt="Chewy Candy & Laces" class="delicacy-showcase-img" loading="lazy">
            <div class="delicacy-overlay">
              <div class="delicacy-category-badge">
                <i class="bi bi-heart-fill"></i>
                <span>Sweet Treats</span>
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
            <img src="Images/Delicacies/Jam.jpg" alt="Jam Marmalade" class="delicacy-showcase-img" loading="lazy">
            <div class="delicacy-overlay">
              <div class="delicacy-category-badge">
                <i class="bi bi-droplet-fill"></i>
                <span>Spreads</span>
              </div>
            </div>
          </div>
          <div class="delicacy-showcase-content">
            <h3>Jam & Marmalade</h3>
            <p>Rich, spreadable durian jams made from real fruit, ideal for pairing with bread, pastries, or your favorite desserts.</p>
            <div class="delicacy-highlights">
              <span>• Real Fruit Base</span>
              <span>• Perfect for Pairing</span>
              <span>• Premium Quality</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Delicacy 3 -->
      <div class="col-lg-4 col-md-6">
        <div class="delicacy-showcase-card">
          <div class="delicacy-image-wrapper">
            <img src="Images/Delicacies/Tart.jpg" alt="Chocolate Biscuits" class="delicacy-showcase-img" loading="lazy">
            <div class="delicacy-overlay">
              <div class="delicacy-category-badge">
                <i class="bi bi-cookie"></i>
                <span>Biscuits</span>
              </div>
            </div>
          </div>
          <div class="delicacy-showcase-content">
            <h3>Chocolate Biscuits</h3>
            <p>Crisp, chocolate-coated biscuits that complement the bold flavors of durian snacks with perfect crunch and sweetness.</p>
            <div class="delicacy-highlights">
              <span>• Crispy Texture</span>
              <span>• Chocolate Coating</span>
              <span>• Perfect Companion</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Delicacy 4 -->
      <div class="col-lg-4 col-md-6">
        <div class="delicacy-showcase-card">
          <div class="delicacy-image-wrapper">
            <img src="Images/Delicacies/Sticks.jpg" alt="Sticks & Shapes Biscuits" class="delicacy-showcase-img" loading="lazy">
            <div class="delicacy-overlay">
              <div class="delicacy-category-badge">
                <i class="bi bi-star-fill"></i>
                <span>Fun Shapes</span>
              </div>
            </div>
          </div>
          <div class="delicacy-showcase-content">
            <h3>Sticks & Shapes Biscuits</h3>
            <p>Fun and delicious biscuit snacks in various shapes, great for dipping or enjoying on their own as perfect finger foods.</p>
            <div class="delicacy-highlights">
              <span>• Playful Shapes</span>
              <span>• Great for Dipping</span>
              <span>• Family Favorite</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Delicacy 5 -->
      <div class="col-lg-4 col-md-6">
        <div class="delicacy-showcase-card">
          <div class="delicacy-image-wrapper">
            <img src="Images/Delicacies/Coffee.jpg" alt="Ready-To-Drink Coffee" class="delicacy-showcase-img" loading="lazy">
            <div class="delicacy-overlay">
              <div class="delicacy-category-badge">
                <i class="bi bi-cup-hot-fill"></i>
                <span>Beverages</span>
              </div>
            </div>
          </div>
          <div class="delicacy-showcase-content">
            <h3>Ready-To-Drink Coffee</h3>
            <p>Smooth and aromatic coffee blends that pair perfectly with Lola Abon's durian treats for the ultimate experience.</p>
            <div class="delicacy-highlights">
              <span>• Aromatic Blend</span>
              <span>• Perfect Pairing</span>
              <span>• Ready to Enjoy</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Delicacy 6 -->
      <div class="col-lg-4 col-md-6">
        <div class="delicacy-showcase-card">
          <div class="delicacy-image-wrapper">
            <img src="Images/Delicacies/Assorted.jpg" alt="Gifting & Festive Sweets" class="delicacy-showcase-img" loading="lazy">
            <div class="delicacy-overlay">
              <div class="delicacy-category-badge">
                <i class="bi bi-gift-fill"></i>
                <span>Gift Sets</span>
              </div>
            </div>
          </div>
          <div class="delicacy-showcase-content">
            <h3>Gifting & Festive Sweets</h3>
            <p>Specially curated durian delicacy gift sets, perfect for sharing the taste of tradition on any special occasion.</p>
            <div class="delicacy-highlights">
              <span>• Curated Selection</span>
              <span>• Beautiful Packaging</span>
              <span>• Perfect for Gifting</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Simple CTA -->
    <div class="text-center mt-5">
        <p class="lead mb-4">Discover the full range of our authentic durian delicacies</p>
        <a href="shop" class="btn btn-outline-success btn-lg px-5">Explore All Products</a>
    </div>
  </div>
</section>

<!-- Our Services Section -->
<section class="services-section">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-badge">What We Offer</span>
            <h2 class="display-4 fw-bold mb-3" style="color: #111;">Our Premium Services</h2>
            <p class="section-subtitle lead mx-auto" style="max-width: 600px;">
                From handcrafted treats to custom packaging, we deliver excellence in every aspect of our durian confectionery business.
            </p>
        </div>

        <div class="row g-4">
            <!-- Service 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card-modern">
                    <div class="service-icon-wrapper">
                        <i class="bi bi-heart-fill service-icon"></i>
                    </div>
                    <div class="service-image-container">
                        <img src="Images/services/prodservice1.jpg" alt="Handcrafted Durian Sweets" class="service-image-modern" loading="lazy">
                    </div>
                    <div class="service-content-modern">
                        <h3>Handcrafted Durian Sweets</h3>
                        <p>Premium durian-based delicacies like yema, candy, macaroons, and tarts using traditional family recipes passed down since the 1950s.</p>
                        <div class="service-features">
                            <span class="feature-tag">Traditional Recipes</span>
                            <span class="feature-tag">Premium Quality</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card-modern">
                    <div class="service-icon-wrapper">
                        <i class="bi bi-boxes service-icon"></i>
                    </div>
                    <div class="service-image-container">
                        <img src="Images/services/prodservice2.jpg" alt="Wholesale & Bulk Orders" class="service-image-modern" loading="lazy">
                    </div>
                    <div class="service-content-modern">
                        <h3>Wholesale & Bulk Orders</h3>
                        <p>Large-scale production and packaging for resellers, souvenir shops, pasalubong centers, and events across the Philippines.</p>
                        <div class="service-features">
                            <span class="feature-tag">Bulk Orders</span>
                            <span class="feature-tag">Nationwide</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card-modern">
                    <div class="service-icon-wrapper">
                        <i class="bi bi-gift-fill service-icon"></i>
                    </div>
                    <div class="service-image-container">
                        <img src="Images/services/prodservice3.jpg" alt="Custom Packaging & Gift Packs" class="service-image-modern" loading="lazy">
                    </div>
                    <div class="service-content-modern">
                        <h3>Custom Packaging & Gift Packs</h3>
                        <p>Elegant packaging solutions perfect for corporate giveaways, weddings, or holiday gifting. Custom branding available.</p>
                        <div class="service-features">
                            <span class="feature-tag">Custom Design</span>
                            <span class="feature-tag">Corporate Ready</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card-modern">
                    <div class="service-icon-wrapper">
                        <i class="bi bi-airplane-fill service-icon"></i>
                    </div>
                    <div class="service-image-container">
                        <img src="Images/services/prodservice4.jpg" alt="Pasalubong & Souvenir Support" class="service-image-modern" loading="lazy">
                    </div>
                    <div class="service-content-modern">
                        <h3>Pasalubong & Souvenir Support</h3>
                        <p>Specially packed items for travelers and export-quality goods for overseas Filipinos seeking authentic taste of home.</p>
                        <div class="service-features">
                            <span class="feature-tag">Travel Ready</span>
                            <span class="feature-tag">Export Quality</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card-modern">
                    <div class="service-icon-wrapper">
                        <i class="bi bi-shop service-icon"></i>
                    </div>
                    <div class="service-image-container">
                        <img src="Images/services/prodservice5.jpg" alt="Retail Storefronts" class="service-image-modern" loading="lazy">
                    </div>
                    <div class="service-content-modern">
                        <h3>Retail Storefronts</h3>
                        <p>Visit our flagship stores in Davao, Butuan, and CDO for freshly packed goodies and personalized service from Mindanao.</p>
                        <div class="service-features">
                            <span class="feature-tag">3 Locations</span>
                            <span class="feature-tag">Fresh Daily</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card-modern">
                    <div class="service-icon-wrapper">
                        <i class="bi bi-cart-fill service-icon"></i>
                    </div>
                    <div class="service-image-container">
                        <img src="Images/services/prodservice6.jpg" alt="Local & Online Selling" class="service-image-modern" loading="lazy">
                    </div>
                    <div class="service-content-modern">
                        <h3>Online & Digital Commerce</h3>
                        <p>Shop conveniently through Shopee, Lazada, or find us at local distributors and festival booths throughout the year.</p>
                        <div class="service-features">
                            <span class="feature-tag">E-Commerce</span>
                            <span class="feature-tag">Festival Booths</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center mt-5">
            <div class="services-cta">
                <h4 class="mb-3">Need Custom Solutions?</h4>
                <p class="mb-4">Let's discuss how we can create the perfect durian experience for your needs.</p>
                <a href="contact-us" class="btn btn-primary btn-lg">Get in Touch</a>
            </div>
        </div>
    </div>
</section>


<section class="customer-reviews">
  <div class="container">
    <div class="text-center mb-5">
        <span class="section-badge">What Our Customers Say</span>
        <h2 class="display-4 fw-bold mb-3" style="color: #111;">Customer Reviews</h2>
        <p class="section-subtitle lead mx-auto" style="max-width: 600px;">
            Hear from our satisfied customers around the world who have experienced the authentic taste of our durian delicacies.
        </p>
    </div>

    <div class="row g-4">
      <!-- Review 1 -->
      <div class="col-lg-4 col-md-6">
        <div class="review-card-modern">
          <div class="review-quote-icon">
            <i class="bi bi-quote"></i>
          </div>
          <div class="review-stars-modern">
            <span class="star-filled">★</span>
            <span class="star-filled">★</span>
            <span class="star-filled">★</span>
            <span class="star-filled">★</span>
            <span class="star-filled">★</span>
          </div>
          <p class="review-text-modern">
            "The durian yema is absolutely heavenly! Packaging was elegant and kept everything fresh. The authentic taste reminds me of home. Will definitely order again!"
          </p>
          <div class="review-author-modern">
            <div class="author-avatar">
              <img src="Images/avatar.png" alt="Clarice Turner" loading="lazy">
            </div>
            <div class="author-details">
              <h5 class="author-name-modern">Clarice Turner</h5>
              <p class="author-location-modern">
                <i class="bi bi-geo-alt-fill"></i>
                California, USA
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Review 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="review-card-modern">
          <div class="review-quote-icon">
            <i class="bi bi-quote"></i>
          </div>
          <div class="review-stars-modern">
            <span class="star-filled">★</span>
            <span class="star-filled">★</span>
            <span class="star-filled">★</span>
            <span class="star-filled">★</span>
            <span class="star-filled">★</span>
          </div>
          <p class="review-text-modern">
            "Truly authentic taste that reminds me of home! The flavors are rich and the sweetness is just perfect. Quality ingredients really show through."
          </p>
          <div class="review-author-modern">
            <div class="author-avatar">
              <img src="Images/avatar.png" alt="Brian Moten" loading="lazy">
            </div>
            <div class="author-details">
              <h5 class="author-name-modern">Brian Moten</h5>
              <p class="author-location-modern">
                <i class="bi bi-geo-alt-fill"></i>
                Melbourne, Australia
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Review 3 -->
      <div class="col-lg-4 col-md-6">
        <div class="review-card-modern">
          <div class="review-quote-icon">
            <i class="bi bi-quote"></i>
          </div>
          <div class="review-stars-modern">
            <span class="star-filled">★</span>
            <span class="star-filled">★</span>
            <span class="star-filled">★</span>
            <span class="star-filled">★</span>
            <span class="star-filled">★</span>
          </div>
          <p class="review-text-modern">
            "Fast delivery and excellent customer service! The durian cubes were creamy and fresh. Amazing traditional recipes that you can't find anywhere else."
          </p>
          <div class="review-author-modern">
            <div class="author-avatar">
              <img src="Images/avatar.png" alt="Jessica Ramirez" loading="lazy">
            </div>
            <div class="author-details">
              <h5 class="author-name-modern">Jessica Ramirez</h5>
              <p class="author-location-modern">
                <i class="bi bi-geo-alt-fill"></i>
                Davao City, Philippines
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Review 4 -->
      <div class="col-lg-4 col-md-6">
        <div class="review-card-modern">
          <div class="review-quote-icon">
            <i class="bi bi-quote"></i>
          </div>
          <div class="review-stars-modern">
            <span class="star-filled">★</span>
            <span class="star-filled">★</span>
            <span class="star-filled">★</span>
            <span class="star-filled">★</span>
            <span class="star-filled">★</span>
          </div>
          <p class="review-text-modern">
            "Perfect gift for family overseas! The packaging is beautiful and the taste is exactly what I remembered from childhood. Highly recommended!"
          </p>
          <div class="review-author-modern">
            <div class="author-avatar">
              <img src="Images/avatar.png" alt="Maria Santos" loading="lazy">
            </div>
            <div class="author-details">
              <h5 class="author-name-modern">Maria Santos</h5>
              <p class="author-location-modern">
                <i class="bi bi-geo-alt-fill"></i>
                Toronto, Canada
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Review 5 -->
      <div class="col-lg-4 col-md-6">
        <div class="review-card-modern">
          <div class="review-quote-icon">
            <i class="bi bi-quote"></i>
          </div>
          <div class="review-stars-modern">
            <span class="star-filled">★</span>
            <span class="star-filled">★</span>
            <span class="star-filled">★</span>
            <span class="star-filled">★</span>
            <span class="star-filled">★</span>
          </div>
          <p class="review-text-modern">
            "Been ordering for years and the quality never disappoints. The durian macaroons are my absolute favorite - perfectly balanced sweetness!"
          </p>
          <div class="review-author-modern">
            <div class="author-avatar">
              <img src="Images/avatar.png" alt="Robert Chen" loading="lazy">
            </div>
            <div class="author-details">
              <h5 class="author-name-modern">Robert Chen</h5>
              <p class="author-location-modern">
                <i class="bi bi-geo-alt-fill"></i>
                Singapore
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Review 6 -->
      <div class="col-lg-4 col-md-6">
        <div class="review-card-modern">
          <div class="review-quote-icon">
            <i class="bi bi-quote"></i>
          </div>
          <div class="review-stars-modern">
            <span class="star-filled">★</span>
            <span class="star-filled">★</span>
            <span class="star-filled">★</span>
            <span class="star-filled">★</span>
            <span class="star-filled">★</span>
          </div>
          <p class="review-text-modern">
            "Outstanding service and products! The gift sets are beautifully presented and taste incredible. Perfect for special occasions."
          </p>
          <div class="review-author-modern">
            <div class="author-avatar">
              <img src="Images/avatar.png" alt="Sarah Johnson" loading="lazy">
            </div>
            <div class="author-details">
              <h5 class="author-name-modern">Sarah Johnson</h5>
              <p class="author-location-modern">
                <i class="bi bi-geo-alt-fill"></i>
                London, UK
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Reviews CTA -->
    <div class="text-center mt-5">
        <div class="reviews-cta">
            <h4 class="mb-3">Love Our Products?</h4>
            <p class="mb-4">Share your experience and join thousands of satisfied customers worldwide.</p>
            <a href="contact-us" class="btn btn-outline-warning btn-lg px-4">Leave a Review</a>
        </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>