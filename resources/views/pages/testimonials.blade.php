<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blink - Testimonials</title>

  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Playfair+Display:ital,wght@0,700;1,400&display=swap"
    rel="stylesheet">

  @vite(['resources/css/app.css', 'resources/css/testimonial-page.css'])
</head>

<body>

  <nav class="navbar">
    <div class="logo"><img src="{{ asset('images/logo.png') }}" alt="Logo"></div>
    <ul class="nav-menu">
      <li><a href="{{ route('home') }}">HOME</a></li>
      <li><a href="{{ route('about') }}">ABOUT</a></li>
      <li><a href="{{ route('products') }}">PRODUCTS</a></li>
      <li><a href="{{ route('testimonials') }}" class="active">TESTIMONIALS</a></li>
      <li><a href="{{ route('contact') }}">CONTACT</a></li>
    </ul>
    <div class="nav-actions"><a href="#" class="btn-black">GET QUOTE</a></div>
  </nav>

  <main>
    <section class="hero"
      style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset('images/hero-pineapple.png') }}');">

      <h1>Client Testimonials</h1>
      <p>Hear from our satisfied partners from Dubai Al Aweer Market.</p>

      </div>
    </section>

    <div class="testimonial-overlap-container">
      <div class="testimonial-grid">
        @php
          $reviews = [
            ['name' => 'Importer, Al Aweer Market, Dubai', 'text' => 'Blink Philippines understands the Dubai market perfectly. Their "zero color" specification is always on point, and the quality of their MD2s is consistently excellent.'],
            ['name' => 'Procurement Manager, Dubai Fresh Produce Co.', 'text' => 'We\'ve worked with several suppliers, but the attention to detail from Blink Philippines regarding grading is unmatched.'],
            ['name' => 'Importer, Alweer Market, Dubai', 'text' => 'Blink Philippines understands the Dubai market perfectly. Their "zero color" specification is always on point, and the quality of their MD2s is consistently excellent.'],
            ['name' => 'Importer, Alweer Market, Dubai', 'text' => 'Blink Philippines understands the Dubai market perfectly. Their "zero color" specification is always on point, and the quality of their MD2s is consistently excellent.']
          ];
        @endphp

        @foreach($reviews as $review)
          <div class="testimonial-card">
            <p class="quote">“{{ $review['text'] }}”</p>
            <p class="author">— {{ $review['name'] }}</p>
            <div class="stars">★★★★★</div>
          </div>
        @endforeach
      </div>
    </div>

    <section class="join-cta">
      <h2>Join Our Happy Clients</h2>
      <p>Experience the Blink difference. Quality, reliability, and excellence in every shipment.</p>
      <a href="{{ route('contact') }}" class="btn-yellow">Start your Order</a>
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