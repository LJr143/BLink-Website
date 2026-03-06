<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blink - Admin Login</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Playfair+Display:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/css/admin-page.css'])
</head>
<body>

    <nav class="admin-nav">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Blink Logo">
        </div>
        <a href="{{ route('home') }}" class="btn-view-site">View Site</a>
    </nav>

    <main class="login-hero" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('{{ asset('images/hero-pineapple.png') }}');">
        <div class="login-container">
            
            <div class="login-welcome">
                <h3>Hello, Admin! Ready to Grow?</h3>
                <p class="subtitle">Let's Keep Things Fresh.</p>
                <h1>Premium Philippine <span>Pineapples</span></h1>
                <p class="description">Export high-grade pineapples from the heart of the Philippines to the Middle East and beyond!</p>
            </div>

            <div class="login-card">
                <div class="card-header">
                    <h2>Admin Login</h2>
                    <p>Sign in to manage your content</p>
                </div>

                <form action="#" class="login-form">
                    <div class="form-group">
                        <label>Username:</label>
                        <input type="text" placeholder="Enter your username">
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" placeholder="••••••••">
                    </div>
                    <button type="submit" class="btn-signin">SIGN IN</button>
                </form>
            </div>

        </div>
    </main>

    <footer class="site-footer">
        <div class="footer-container">
            <div class="footer-cta">
                <h2 class="footer-heading">Let's Talk</h2>
                <p class="footer-description">Ready to export the finest pineapples? Get in touch with us today.</p>
                <a href="{{ route('contact') }}" class="btn-footer-contact">CONTACT US</a>
            </div>

            <div class="footer-links">
                <h3 class="footer-subheading">Quick Links</h3>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('products') }}">Products</a></li>
                    <li><a href="{{ route('testimonials') }}">Testimonials</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>

            <div class="footer-contact">
                <h3 class="footer-subheading">Contact Info</h3>
                <div class="contact-item"><span>✉</span><p>blinkphil@gmail.com</p></div>
                <div class="contact-item"><span>📞</span><p>(082) 228 - 6428</p></div>
                <div class="contact-item"><span>📍</span><p>Unit 205 Oroderm City Strip Mall C.M Recto St. Davao City</p></div>
            </div>
        </div>
        <div class="footer-bottom">
            <hr class="footer-divider">
            <p>&copy; 2026 Blink Philippines International OPC. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>