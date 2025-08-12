<?php
$pageName = 'blogs';
include 'includes/header.php'; ?>

<!-- Enhanced Blog Section -->
<main class="blog-section py-0" id="blog">
    <div class="container">
        <!-- Enhanced Section Title -->
        <div class="text-center mb-5">
            <span class="section-badge">Our Stories</span>
            <h2 class="fw-bold">Lola Abon's Blog</h2>
            <p class="lead">
                Discover stories behind our sweets, legacy, and the love for durian — from Davao to the world.
            </p>
        </div>

        <!-- Blog Posts Grid -->
        <div class="row g-4">
            <?php include 'common/fetch-blogs.php'; ?>
        </div> 

        <!-- Newsletter Subscription CTA -->
        <div class="newsletter-cta">
            <div class="cta-icon">
                <i class="bi bi-envelope-heart"></i>
            </div>
            <h4>Stay Updated with Our Stories</h4>
            <p>Subscribe to our newsletter and be the first to read about our latest adventures, recipes, and behind-the-scenes stories.</p>
            <div class="newsletter-form">
                <div class="input-group">
                    <input type="email" class="form-control" placeholder="Enter your email address" aria-label="Email">
                    <button class="btn btn-primary" type="button">
                        <i class="bi bi-send me-2"></i>
                        Subscribe
                    </button>
                </div>
            </div>
            <small class="text-muted mt-3 d-block">Join over 1,000 durian lovers who get our monthly stories!</small>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>