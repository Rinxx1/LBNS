<?php require 'common/fetch-productdetails.php'; ?>
<?php $pageName = 'product-details';
include 'includes/header.php'; ?>

<!-- Product Details Section -->
<main class="pd-product-details py-0">
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
  
<?php include 'includes/footer.php'; ?>