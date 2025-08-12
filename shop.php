<?php require 'common/fetch-category.php'; ?>
<?php require 'common/product-token.php'; ?>

<?php $pageName = 'shop'; 
include 'includes/header.php'; ?>

<!-- Shop Section -->
<main class="shop-section py-0 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 fw-bold mb-3" style="color: #111;">Shop All Durian Delights</h2>
            <p class="section-subtitle lead mx-auto" style="max-width: 650px;">
                Discover our complete range of authentic durian delicacies, from traditional favorites to modern innovations, all crafted with love since 1950.
            </p>
        </div>

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
                    <div class="col-6 col-md-6 col-lg-4">
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
                    <div class="empty-state-container">
                        <i class="bi bi-search" style="font-size: 4rem; color: #ccc;"></i>
                        <h4 class="mt-3 text-muted">No products found</h4>
                        <p class="text-muted">Try adjusting your search or browse all categories.</p>
                        <a href="shop" class="btn btn-outline-success rounded-pill px-4 mt-2">Browse All Products</a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>