<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blink - Contact Us</title>
  @vite(['resources/css/app.css', 'resources/css/contact-page.css'])
</head>

<body>

  <nav class="navbar">
    <div class="logo"><img src="{{ asset('images/logo.png') }}" alt="Logo"></div>
    <ul class="nav-menu">
      <li><a href="{{ route('home') }}">HOME</a></li>
      <li><a href="{{ route('about') }}">ABOUT</a></li>
      <li><a href="{{ route('products') }}">PRODUCTS</a></li>
      <li><a href="{{ route('testimonials') }}">TESTIMONIALS</a></li>
      <li><a href="{{ route('contact') }}" class="active">CONTACT</a></li>
    </ul>
    <div class="nav-actions"><a href="#" class="btn-black">GET QUOTE</a></div>
  </nav>

  <main>
    <section class="contact-hero"
      style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('{{ asset('images/hero-pineapple.png') }}');">
      <h1>Get in Touch</h1>
      <p>Let's discuss how we can serve your pineapple export needs</p>
    </section>

    <div class="contact-main-grid">

      <div class="info-section">
        <h2>Contact Information</h2>
        <div class="info-card">
          <div class="icon-box">✉</div>
          <div><strong>Email</strong><br>blinkphil@gmail.com</div>
        </div>
        <div class="info-card">
          <div class="icon-box">📞</div>
          <div><strong>Phone</strong><br>(082) 228 - 6428</div>
        </div>
        <div class="info-card">
          <div class="icon-box">📍</div>
          <div><strong>Address</strong><br>Unit 205 Oroderm City, Davao City</div>
        </div>
        <div class="map-placeholder">Map Placeholder</div>
      </div>

      <div class="form-card">
        <h2>Send us a Message</h2>
        <form action="#" class="contact-grid-form">
          <div class="form-group full-width">
            <label>Name:</label>
            <input type="text" name="name">
          </div>
          <div class="form-group full-width">
            <label>Email:</label>
            <input type="email" name="email">
          </div>
          <div class="form-group">
            <label>Company:</label>
            <input type="text" name="company">
          </div>
          <div class="form-group">
            <label>Phone:</label>
            <input type="tel" name="phone">
          </div>
          <div class="form-group full-width">
            <label>Message:</label>
            <textarea name="message"></textarea>
          </div>
          <div class="full-width" style="text-align: center;">
            <button type="submit" class="btn-send">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <line x1="22" y1="2" x2="11" y2="13"></line>
                <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
              </svg>
              Send Message
            </button>
          </div>
        </form>
      </div>
    </div>

    <footer class="site-footer">
      <div class="footer-container">
        <div class="footer-cta">
          <h2 class="footer-heading">Let's Talk</h2>
          <p class="footer-description">Ready to export the finest pineapples? Get in touch with us today.</p>
          <a href="#" class="btn-footer-contact">CONTACT US</a>
        </div>

        <div class="footer-links">
          <h3 class="footer-subheading">Quick Links</h3>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Testimonials</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>

        <div class="footer-contact">
          <h3 class="footer-subheading">Contact Info</h3>
          <div class="contact-item">
            <span class="icon">✉</span>
            <p>blinkphil@gmail.com</p>
          </div>
          <div class="contact-item">
            <span class="icon">📞</span>
            <p>(082) 228 - 6428</p>
          </div>
          <div class="contact-item">
            <span class="icon">📍</span>
            <p>Unit 205 Oroderm City Strip Mall C.M<br>
              Recto St. Davao City, Davao del Sur 8000</p>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <hr class="footer-divider">
        <p>&copy; 2026 Blink Philippines International OPC. All rights reserved.</p>
      </div>
    </footer>

  </main>

</body>

</html>