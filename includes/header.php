<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lola Abon's - Original Durian Candy from Davao, Philippines</title>
    
    <link href="css/others/bootstrap.min.css" rel="stylesheet">
      <!-- Home Page Specific CSS -->
    <link href="css/base-layout.css" rel="stylesheet">
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

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">



    <?php if ($pageName === 'index'): ?>
    <!-- Home Page Specific CSS -->
    <link href="css/pages/home.css" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/others/swiper-bundle.min.css">
    <!-- Hero-Style CSS -->
    <link href="css/hero-style.css" rel="stylesheet">


    <?php elseif ($pageName === 'about-us'): ?>
    <!-- About Us Page Specific CSS -->
    <link href="css/pages/about-us.css" rel="stylesheet">

    <?php elseif ($pageName === 'shop'): ?>

    <?php elseif ($pageName === 'contact-us'): ?>
    <!-- Contact Us Page Specific CSS -->
    <link href="css/pages/contact-us.css" rel="stylesheet">

    <?php elseif ($pageName === 'blogs'): ?>
    <!-- Blogs Page Specific CSS -->
    <link href="css/pages/blogs.css" rel="stylesheet">

    <?php elseif ($pageName === 'product-details'): ?>
    <!-- Product Details Page Specific CSS -->
    <link href="css/pages/product-details.css" rel="stylesheet">

    <?php endif; ?>
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