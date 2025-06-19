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
<body
  style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('Images/st.png') center/cover no-repeat;">

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

<main class="store-locator-section">
<!-- Store Locator Section -->
    <div class="container">
      <h2 class="text-center mb-4 fw-bold">Find Our Branches</h2>

      <!-- Search Bar -->
      <div class="row justify-content-center mb-5">
        <div class="col-md-8">
          <form method="GET" class="input-group shadow-sm rounded-pill overflow-hidden">
            <input 
              type="text" 
              class="form-control border-0 px-4 py-3" 
              name="search" 
              value="<?= htmlspecialchars($_GET['search'] ?? '') ?>" 
              placeholder="Search location..."
            >
            <button class="btn btn-success px-4">Search</button>
          </form>
        </div>
      </div>

  

      <?php include 'common/fetch-stores.php'; ?>


    </div>

    </main>
  


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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
