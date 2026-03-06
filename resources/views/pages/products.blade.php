<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blink - Our Products</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Rozha+One&display=swap"
    rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/css/products-page.css'])
</head>

<body class="products-page-body">
  <nav class="navbar">
    <div class="logo"><img src="{{ asset('images/logo.png') }}" alt="Logo"></div>
    <ul class="nav-menu">
      <li><a href="{{ route('home') }}">HOME</a></li>
      <li><a href="{{ route('about') }}">ABOUT</a></li>
      <li><a href="{{ route('products') }}" class="active">PRODUCTS</a></li>
      <li><a href="{{ route('testimonials') }}">TESTIMONIALS</a></li>
      <li><a href="{{ route('contact') }}">CONTACT</a></li>
    </ul>
    <div class="nav-actions"><a href="#" class="btn-black">GET QUOTE</a></div>
  </nav>

  <main>
    {{-- 1. Hero Section --}}
    <section class="products-hero"
      style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset('images/hero-pineapple.png') }}');">
      <div class="hero-overlay">
        <div class="hero-content">
          <h1>Our Products</h1>
          <p>Premium pineapple varieties for international export</p>
        </div>
      </div>
    </section>

    {{-- 2. Section Heading --}}
    <section class="variety-intro">
      <h2 class="section-heading">Explore our Pineapple Varieties</h2>
      <p class="section-subheading">Explore the Spectrum of Pineapple Perfection.</p>
    </section>

    {{-- 3. Product Display Grid --}}
    <section class="products-display-grid">

      <div class="product-item">
        <div class="product-card">
          <div class="card-inner">
            <span class="corner-icon">📐</span>
            <img src="{{ asset('images/products/product1.png') }}" alt="MD2 Pineapple" class="prod-img">

            <div class="prod-caption">MD2 Pineapple (The "Gold Standard")</div>
          </div>
        </div>
        <div class="prod-description">
          Export High grade Pineapples from the heart of the philippines to the middle east countries etc
        </div>
      </div>
      <img src="{{ asset('images/products/decor1.png') }}" alt="decor" class="sticker-decor decor2">

      <div class="product-item">
        <div class="product-card">
          <div class="card-inner">
            <span class="corner-icon">📐</span>
            <img src="{{ asset('images/products/product4.png') }}" alt="MD3 Pineapple" class="prod-img">
            <div class="prod-caption">MD3 Pineapple (The "Smooth Cayenne")</div>
          </div>

        </div>
        <div class="prod-description">
          Export High grade Pineapples from the heart of the philippines to the middle east countries etc
        </div>
      </div>
      <img src="{{ asset('images/products/decor2.png') }}" alt="decor" class="sticker-decor decor1">

    </section>

    {{-- 4. CTA Section --}}
    <section class="quote-cta-section">
      <h2>Interested in Our Products?</h2>
      <p>Contact us today to discuss bulk orders and export requirements.</p>
      <a href="{{ route('contact') }}" class="btn-black-quote">Request a Quote</a>
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