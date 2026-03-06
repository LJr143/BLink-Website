<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blink - About Us</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Rozha+One&display=swap"
    rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/css/about-page.css'])
</head>

<body class="about-page-body">
  <nav class="navbar">
    <div class="logo"><img src="{{ asset('images/logo.png') }}" alt="Logo"></div>
    <ul class="nav-menu">
      <li><a href="{{ route('home') }}">HOME</a></li>
      <li><a href="{{ route('about') }}" class="active">ABOUT</a></li>
      <li><a href="{{ route('products') }}">PRODUCTS</a></li>
      <li><a href="{{ route('testimonials') }}">TESTIMONIALS</a></li>
      <li><a href="{{ route('contact') }}">CONTACT</a></li>
    </ul>
    <div class="nav-actions"><a href="#" class="btn-black">GET QUOTE</a></div>
  </nav>

  <main>
    {{-- 1. Hero Section: Left-aligned content --}}
    <section class="about-hero" style="background-image: url('{{ asset('images/about/aboutpagehero.png') }}');">
      <div class="hero-blur-overlay">
        <div class="hero-left-content">
          <h1>Our Story</h1>
          <p>Premium pineapples grown for international export.</p>
        </div>
      </div>
    </section>

    <div class="fixed-alignment-wrapper">

      {{-- 2. About Blink Intro --}}
      <section class="about-intro-section">
        <h2 class="section-heading">About Blink</h2>
        <div class="intro-box">
          <h3>Blink Philippines International OPC</h3>
          <p>Export high-grade Pineapples from the heart of the Philippines to the Middle East and beyond.</p>
        </div>
      </section>

      {{-- 3. Mission & Vision Cards --}}
      <section class="mission-vision-grid">
        <div class="info-card">
          <div class="card-icon">
            <img src="{{ asset('images/about/target-icon.png') }}" alt="Mission">
          </div>
          <div class="card-text">
            <h3>Our Mission</h3>
            <p>To deliver the finest Philippine pineapples to the world with uncompromising quality and reliability.</p>
          </div>
        </div>

        <div class="info-card">
          <div class="card-icon">
            <img src="{{ asset('images/about/diamond-icon.png') }}" alt="Vision">
          </div>
          <div class="card-text">
            <h3>Our Vision</h3>
            <p>Quality, Trust, Freshness, and Sustainability.</p>
          </div>
        </div>
      </section>

      {{-- 4. Team Members --}}
      <section class="grid-display-section">
        <h2 class="section-heading">Our Team Members</h2>
        <p class="section-subheading">The Faces Behind Your Fresh Supply</p>
        <div class="member-grid">
          <div class="placeholder-box"></div>
          <div class="placeholder-box"></div>
          <div class="placeholder-box"></div>
          <div class="placeholder-box"></div>
        </div>
      </section>

      {{-- 5. Farm Locations --}}
      <section class="grid-display-section">
        <h2 class="section-heading">Farm Locations/Photos</h2>
        <p class="section-subheading">The soil in our pineapples respect everywhere it flourishes</p>
        <div class="farm-grid">
          <div class="placeholder-box large"></div>
          <div class="placeholder-box large"></div>
        </div>
      </section>

      {{-- 6. Certifications --}}
      <section class="grid-display-section">
        <h2 class="section-heading">Certifications and Awards</h2>
        <p class="section-subheading">Product Quality, Officially Certified.</p>
        <div class="cert-grid">
          <div class="placeholder-box"></div>
          <div class="placeholder-box"></div>
          <div class="placeholder-box"></div>
        </div>
      </section>
    </div>

    {{-- 7. Interested CTA --}}
    <section class="interest-cta">
      <h2>Interested in Our Products?</h2>
      <p>Deliver excellence to the global trade with premium pineapples.</p>
      <a href="{{ route('contact') }}" class="btn-black-caps">Request a Quote</a>
    </section>
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
          <p>Unit 205 Oroderm City Strip Mall C.M<br>Recto St. Davao City, Davao del Sur 8000</p>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <hr class="footer-divider">
      <p>&copy; 2026 Blink Philippines International OPC. All rights reserved.</p>
    </div>
  </footer>
</body>

</html>