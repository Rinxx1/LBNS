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

    <!--Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

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
/* Enhanced Contact Section */
.contact-section {
    padding: 100px 0;
    background-color: #fff;
    overflow: hidden;
    position: relative;
}

.contact-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 35%;
    height: 100%;
    background-color: #f8f4e9;
    z-index: 0;
    border-top-right-radius: 200px;
    border-bottom-right-radius: 200px;
    filter: blur(2px);
    opacity: 0.8;
}

.contact-section .container {
    position: relative;
    z-index: 1;
}

/* Section Badge */
.section-badge {
    display: inline-block;
    background: linear-gradient(135deg, #c1121f, #8b0e1f);
    color: white;
    padding: 8px 20px;
    border-radius: 50px;
    font-size: 0.9rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 20px;
}

/* Section Header */
.contact-header {
    text-align: center;
    margin-bottom: 60px;
}

.contact-header h1 {
    font-size: 3rem;
    font-weight: 700;
    color: #333;
    margin-bottom: 20px;
}

.contact-header .lead {
    font-size: 1.2rem;
    color: #666;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}

.contact-card {
    background: #fff;
    border-radius: 20px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.08);
    height: 100%;
    border: 1px solid rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
}

.contact-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
}

.contact-section h2 {
    font-size: 2rem;
    border-left: 5px solid #c1121f;
    padding-left: 12px;
}

.section-subtitle {
    color: #555;
    font-size: 1.1rem;
}

.contact-section .form-label {
    font-weight: 600;
    color: #333;
}

.contact-section input.form-control,
.contact-section textarea.form-control {
    border-radius: 12px;
    padding: 14px 16px;
    font-size: 1rem;
    background-color: #fdfdfd;
    border: 1px solid #ccc;
    transition: all 0.3s ease;
}

.contact-section input.form-control:focus,
.contact-section textarea.form-control:focus {
    border-color: #c1121f;
    box-shadow: 0 0 0 0.2rem rgba(193, 18, 31, 0.1);
}

.contact-section textarea {
    resize: none;
}

.contact-section .btn {
    padding: 14px;
    font-size: 1rem;
    font-weight: 600;
    border-radius: 12px;
    transition: all 0.3s ease;
}

.contact-section .btn:hover {
    transform: translateY(-2px);
}

/* Map */
.map-wrapper iframe {
    border: 0;
    border-radius: 12px;
}

/* Responsive */
@media (max-width: 768px) {
    .contact-section {
        padding: 80px 0;
    }

    .contact-section::before {
        width: 100%;
        height: 30%;
        top: 0;
        border-radius: 0;
        border-bottom-left-radius: 100px;
        border-bottom-right-radius: 100px;
        filter: blur(2px);
        opacity: 0.4;
    }

    .contact-header h1 {
        font-size: 2.2rem;
    }

    .contact-header .lead {
        font-size: 1rem;
        padding: 0 15px;
    }

    .contact-section h2 {
        font-size: 1.8rem;
    }

    .section-subtitle {
        font-size: 1rem;
    }
}
</style>

<!-- Enhanced Contact Us Section -->
<main class="contact-section py-5" id="contact">
    <div class="container">
        <!-- Section Header -->
        <div class="contact-header">
            <span class="section-badge">Get In Touch</span>
            <h1 class="fw-bold">Contact Lola Abon's</h1>
            <p class="lead">
                We'd love to hear from you! Reach out for questions, bulk orders, or just to share your durian stories.
            </p>
        </div>

        <div class="row g-5 align-items-start">
            
            <!-- Contact Form -->
            <div class="col-lg-6">
                <div class="contact-card p-4">
                    <h2 class="fw-bold mb-3">Send Us a Message</h2>
                    <p class="section-subtitle mb-4">Fill out the form below and we'll get back to you within 24 hours!</p>

                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="Juan">
                            </div>
                            <div class="col-md-6">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Dela Cruz">
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" placeholder="you@email.com">
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">Your Message</label>
                                <textarea class="form-control" id="message" rows="5" placeholder="Type your message here..."></textarea>
                            </div>
                            <div class="col-12 d-flex flex-column flex-md-row gap-3 mt-3">
                                <a href="https://m.me/lolaabons" target="_blank" class="btn btn-primary w-100">
                                    <i class="bi bi-messenger me-2"></i> Messenger
                                </a>
                                <a href="mailto:hello@lolaabons.com" class="btn btn-danger w-100">
                                    <i class="bi bi-envelope-fill me-2"></i> Email Us
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Map and Info -->
            <div class="col-lg-6">
                <div class="contact-card p-4 h-100 d-flex flex-column justify-content-between">
                    <div class="mb-4">
                        <h5 class="fw-bold mb-3">Visit Us</h5>
                        <p><i class="bi bi-geo-alt-fill me-2 text-danger"></i>23 San Miguel Village, Talomo, Davao City</p>
                        <p><i class="bi bi-telephone-fill me-2 text-danger"></i>+63 912 345 6789</p>
                        <p><i class="bi bi-envelope-fill me-2 text-danger"></i>hello@lolaabons.com</p>
                    </div>
                    <div class="map-wrapper ratio ratio-4x3 rounded-4 overflow-hidden shadow">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.605493950419!2d125.56913447737624!3d7.055555074760617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f972af1d82409b%3A0x8194f361980fa3f2!2sLola%20Abon&#39;s%20Durian%20Candies!5e0!3m2!1sen!2sph!4v1745852839869!5m2!1sen!2sph"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

        </div>
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
    <script src="js/loading-wrapper.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>