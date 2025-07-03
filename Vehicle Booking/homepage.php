<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VBook - Vehicle Booking System</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Segoe UI", sans-serif;
    }
    
    body {
      background-color: #f9f9f9;
      color: #333;
      line-height: 1.6;
    }
    
    /* Header Styles */
    header {
      background: linear-gradient(to right, #c100fb, #ffcc33);
      color: white;
      padding: 1rem 2rem;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      position: sticky;
      top: 0;
      z-index: 100;
    }
    
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      max-width: 1200px;
      margin: 0 auto;
    }
    
    .logo {
      font-size: 1.8rem;
      font-weight: bold;
      display: flex;
      align-items: center;
      gap: 10px;
    }
    
    .nav-links {
      display: flex;
      gap: 20px;
    }
    
    .nav-links a {
      color: white;
      text-decoration: none;
      font-weight: 500;
      transition: opacity 0.3s;
    }
    
    .nav-links a:hover {
      opacity: 0.8;
    }
    
    .auth-buttons .btn {
      padding: 8px 16px;
      border-radius: 20px;
      text-decoration: none;
      font-weight: 500;
      margin-left: 10px;
      transition: all 0.3s;
    }
    
    .btn-login {
      background: transparent;
      color: white;
      border: 1px solid white;
    }
    
    .btn-register {
      background: white;
      color: #c100fb;
    }
    
    .btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    
    /* Hero Section */
    .hero {
      background: linear-gradient(rgba(193, 0, 251, 0.8), rgba(255, 204, 51, 0.8)), 
                  url('https://images.unsplash.com/photo-1489824904134-891ab64532f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
      background-size: cover;
      background-position: center;
      color: white;
      text-align: center;
      padding: 5rem 1rem;
    }
    
    .hero-content {
      max-width: 800px;
      margin: 0 auto;
    }
    
    .hero h1 {
      font-size: 2.5rem;
      margin-bottom: 1rem;
    }
    
    .hero p {
      font-size: 1.1rem;
      margin-bottom: 2rem;
    }
    
    .btn-primary {
      background: white;
      color: #c100fb;
      padding: 12px 24px;
      border-radius: 25px;
      text-decoration: none;
      font-weight: bold;
      display: inline-block;
      transition: all 0.3s;
    }
    
    .btn-primary:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    }
    
    /* Features Section */
    .features {
      padding: 4rem 1rem;
      max-width: 1200px;
      margin: 0 auto;
    }
    
    .section-title {
      text-align: center;
      margin-bottom: 3rem;
      color: #c100fb;
      font-size: 2rem;
    }
    
    .features-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
    }
    
    .feature-card {
      background: white;
      border-radius: 10px;
      padding: 2rem;
      text-align: center;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      transition: transform 0.3s;
    }
    
    .feature-card:hover {
      transform: translateY(-10px);
    }
    
    .feature-icon {
      font-size: 2.5rem;
      color: #ffcc33;
      margin-bottom: 1rem;
    }
    
    .feature-card h3 {
      margin-bottom: 1rem;
      color: #333;
    }
    
    /* Testimonials */
    .testimonials {
      background: linear-gradient(to right, #c100fb, #ffcc33);
      color: white;
      padding: 4rem 1rem;
      text-align: center;
    }
    
    .testimonial-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
      max-width: 1200px;
      margin: 0 auto;
    }
    
    .testimonial-card {
      background: rgba(255,255,255,0.1);
      backdrop-filter: blur(10px);
      border-radius: 10px;
      padding: 2rem;
      text-align: left;
    }
    
    .testimonial-text {
      font-style: italic;
      margin-bottom: 1rem;
    }
    
    .testimonial-author {
      font-weight: bold;
    }
    
    /* Call to Action */
    .cta {
      padding: 4rem 1rem;
      text-align: center;
      background: white;
    }
    
    .cta-content {
      max-width: 600px;
      margin: 0 auto;
    }
    
    .cta h2 {
      margin-bottom: 1rem;
      color: #c100fb;
    }
    
    /* Footer */
    footer {
      background: #333;
      color: white;
      padding: 3rem 1rem;
      text-align: center;
    }
    
    .footer-content {
      max-width: 1200px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 2rem;
      text-align: left;
    }
    
    .footer-column h3 {
      margin-bottom: 1rem;
      color: #ffcc33;
    }
    
    .footer-links {
      list-style: none;
    }
    
    .footer-links li {
      margin-bottom: 0.5rem;
    }
    
    .footer-links a {
      color: #ddd;
      text-decoration: none;
      transition: color 0.3s;
    }
    
    .footer-links a:hover {
      color: #ffcc33;
    }
    
    .social-links {
      display: flex;
      gap: 1rem;
      justify-content: center;
      margin-top: 2rem;
    }
    
    .social-links a {
      color: white;
      font-size: 1.5rem;
      transition: color 0.3s;
    }
    
    .social-links a:hover {
      color: #ffcc33;
    }
    
    .copyright {
      margin-top: 2rem;
      padding-top: 1rem;
      border-top: 1px solid #555;
    }
    
    /* Responsive Adjustments */
    @media (max-width: 768px) {
      .navbar {
        flex-direction: column;
        gap: 1rem;
      }
      
      .nav-links {
        flex-direction: column;
        align-items: center;
        gap: 10px;
      }
      
      .hero h1 {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>
  <!-- Header/Navigation -->
  <header>
    <div class="navbar">
      <div class="logo">
        <span>🚗</span>
        <span>VBook</span>
      </div>
      <div class="nav-links">
        <a href="#features">Features</a>
        <a href="#testimonials">Testimonials</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
      </div>
      <div class="auth-buttons">
        <a href="login.php" class="btn btn-login">Login</a>
        <a href="register.php" class="btn btn-register">Register</a>
      </div>
    </div>
  </header>
  
  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-content">
      <h1>Book Your Vehicle Service With Ease</h1>
      <p>VBook makes vehicle maintenance simple, fast, and reliable. Schedule your next service in just a few clicks.</p>
      <a href="register.php" class="btn-primary">Get Started</a>
    </div>
  </section>
  
  <!-- Features Section -->
  <section class="features" id="features">
    <h2 class="section-title">Why Choose VBook</h2>
    <div class="features-grid">
      <div class="feature-card">
        <div class="feature-icon">
          <i class="fas fa-calendar-check"></i>
        </div>
        <h3>Easy Scheduling</h3>
        <p>Book your vehicle service at your convenience with our simple online scheduling system.</p>
      </div>
      
      <div class="feature-card">
        <div class="feature-icon">
          <i class="fas fa-car-side"></i>
        </div>
        <h3>Wide Vehicle Support</h3>
        <p>We service all makes and models, from compact cars to SUVs and trucks.</p>
      </div>
      
      <div class="feature-card">
        <div class="feature-icon">
          <i class="fas fa-clock"></i>
        </div>
        <h3>Real-Time Updates</h3>
        <p>Get notifications about your service status and estimated completion time.</p>
      </div>
      
      <div class="feature-card">
        <div class="feature-icon">
          <i class="fas fa-history"></i>
        </div>
        <h3>Service History</h3>
        <p>Keep track of all your vehicle maintenance in one convenient place.</p>
      </div>
      
      <div class="feature-card">
        <div class="feature-icon">
          <i class="fas fa-star"></i>
        </div>
        <h3>Expert Technicians</h3>
        <p>Our certified professionals provide top-quality service you can trust.</p>
      </div>
      
      <div class="feature-card">
        <div class="feature-icon">
          <i class="fas fa-wallet"></i>
        </div>
        <h3>Transparent Pricing</h3>
        <p>No hidden fees - know exactly what you're paying for upfront.</p>
      </div>
    </div>
  </section>
  
  <!-- Testimonials Section -->
  <section class="testimonials" id="testimonials">
    <h2 class="section-title">What Our Customers Say</h2>
    <div class="testimonial-grid">
      <div class="testimonial-card">
        <p class="testimonial-text">"VBook has completely simplified my vehicle maintenance. I can schedule service around my busy schedule and get real-time updates."</p>
        <p class="testimonial-author">- Sarah Johnson</p>
      </div>
      
      <div class="testimonial-card">
        <p class="testimonial-text">"The technicians are professional and the service is always top-notch. I wouldn't take my car anywhere else now."</p>
        <p class="testimonial-author">- Michael Chen</p>
      </div>
      
      <div class="testimonial-card">
        <p class="testimonial-text">"As a small business owner with a fleet of vehicles, VBook has saved me countless hours in scheduling and tracking maintenance."</p>
        <p class="testimonial-author">- David Rodriguez</p>
      </div>
    </div>
  </section>
  
  <!-- Call to Action -->
  <section class="cta" id="about">
    <div class="cta-content">
      <h2>Ready to Experience Better Vehicle Service?</h2>
      <p>Join thousands of satisfied customers who have made VBook their go-to for all vehicle maintenance needs.</p>
      <a href="register.php" class="btn-primary">Create Your Account Now</a>
    </div>
  </section>
  
  <!-- Footer -->
  <footer id="contact">
    <div class="footer-content">
      <div class="footer-column">
        <h3>VBook</h3>
        <p>Making vehicle maintenance simple, fast, and reliable since 2023.</p>
      </div>
      
      <div class="footer-column">
        <h3>Quick Links</h3>
        <ul class="footer-links">
          <li><a href="#features">Features</a></li>
          <li><a href="#testimonials">Testimonials</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
      
      <div class="footer-column">
        <h3>Services</h3>
        <ul class="footer-links">
          <li><a href="#">Oil Changes</a></li>
          <li><a href="#">Brake Service</a></li>
          <li><a href="#">Tire Rotation</a></li>
          <li><a href="#">Full Inspections</a></li>
        </ul>
      </div>
      
      <div class="footer-column">
        <h3>Contact Us</h3>
        <ul class="footer-links">
          <li><i class="fas fa-map-marker-alt"></i> 123 Auto St, Service City</li>
          <li><i class="fas fa-phone"></i> (555) 123-4567</li>
          <li><i class="fas fa-envelope"></i> support@vbook.com</li>
        </ul>
      </div>
    </div>
    
    <div class="social-links">
      <a href="#"><i class="fab fa-facebook"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-linkedin"></i></a>
    </div>
    
    <div class="copyright">
      <p>&copy; 2025 VBook. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>