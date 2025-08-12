<?php
$pageName = 'contact-us';
include 'includes/header.php'; ?>

<!-- Enhanced Contact Us Section -->
<main class="contact-section py-0" id="contact">
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

<?php include 'includes/footer.php'; ?>