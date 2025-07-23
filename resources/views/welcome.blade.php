<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Serengeti Wonders Tours - Discover Tanzania's Magic</title>
    <meta name="description" content="Experience the wonder of Tanzania with Serengeti Wonders Tours. Safari adventures, cultural tours, and unforgettable memories await.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
        }

        /* Header */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.9);
            backdrop-filter: blur(10px);
            z-index: 1000;
            padding: 1rem 2rem;
            transition: all 0.3s ease;
        }

        .header.scrolled {
            background: rgba(0, 0, 0, 0.95);
            padding: 0.5rem 2rem;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: #f59e0b;
            text-decoration: none;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-menu a:hover {
            color: #f59e0b;
        }

        .mobile-menu-btn {
            display: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('/images/hero-safari.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero-content {
            max-width: 800px;
            padding: 0 2rem;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .hero p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        .cta-button {
            display: inline-block;
            background: #f59e0b;
            color: white;
            padding: 1rem 2rem;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(245, 158, 11, 0.3);
        }

        .cta-button:hover {
            background: #d97706;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(245, 158, 11, 0.4);
        }

        /* Section Styles */
        .section {
            padding: 5rem 2rem;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #1f2937;
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.1rem;
            color: #6b7280;
            margin-bottom: 3rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        /* About Section */
        .about {
            background: #f9fafb;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #1f2937;
        }

        .about-text p {
            color: #6b7280;
            margin-bottom: 1rem;
        }

        .about-image {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .about-image img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        /* Destinations Section */
        .destinations-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .destination-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .destination-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .destination-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .destination-content {
            padding: 1.5rem;
        }

        .destination-content h3 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #1f2937;
        }

        .destination-content p {
            color: #6b7280;
            font-size: 0.9rem;
        }

        /* Services Section */
        .services {
            background: #f9fafb;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .service-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
        }

        .service-icon {
            font-size: 3rem;
            color: #f59e0b;
            margin-bottom: 1rem;
        }

        .service-card h3 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #1f2937;
        }

        .service-card p {
            color: #6b7280;
            font-size: 0.9rem;
        }

        /* Why Choose Us Section */
        .why-choose-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            text-align: center;
            padding: 1.5rem;
        }

        .feature-icon {
            font-size: 2.5rem;
            color: #f59e0b;
            margin-bottom: 1rem;
        }

        .feature-card h3 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #1f2937;
        }

        .feature-card p {
            color: #6b7280;
            font-size: 0.9rem;
        }

        /* Testimonials Section */
        .testimonials {
            background: #f9fafb;
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .testimonial-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .testimonial-content {
            font-style: italic;
            color: #6b7280;
            margin-bottom: 1.5rem;
            font-size: 0.95rem;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #f59e0b;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
        }

        .author-info h4 {
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 0.25rem;
        }

        .author-info p {
            color: #6b7280;
            font-size: 0.85rem;
        }

        /* Contact Section */
        .contact-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
        }

        .contact-info h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: #1f2937;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .contact-icon {
            font-size: 1.25rem;
            color: #f59e0b;
            width: 20px;
        }

        .contact-form {
            background: #f9fafb;
            padding: 2rem;
            border-radius: 15px;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #1f2937;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #f59e0b;
        }

        .form-group textarea {
            height: 120px;
            resize: vertical;
        }

        .submit-btn {
            background: #f59e0b;
            color: white;
            padding: 0.75rem 2rem;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .submit-btn:hover {
            background: #d97706;
        }

        /* Footer */
        .footer {
            background: #1f2937;
            color: white;
            padding: 3rem 2rem 1rem;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #f59e0b;
        }

        .footer-section p,
        .footer-section a {
            color: #d1d5db;
            text-decoration: none;
            margin-bottom: 0.5rem;
            display: block;
        }

        .footer-section a:hover {
            color: #f59e0b;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-links a {
            color: #d1d5db;
            font-size: 1.5rem;
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: #f59e0b;
        }

        .newsletter-form {
            display: flex;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .newsletter-form input {
            flex: 1;
            padding: 0.5rem;
            border: 1px solid #374151;
            border-radius: 5px;
            background: #374151;
            color: white;
        }

        .newsletter-form button {
            background: #f59e0b;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            cursor: pointer;
        }

        .footer-bottom {
            border-top: 1px solid #374151;
            padding-top: 1rem;
            text-align: center;
            color: #9ca3af;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .mobile-menu-btn {
                display: block;
            }

            .nav-menu {
                display: none;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.1rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .about-content,
            .contact-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .destinations-grid,
            .services-grid,
            .why-choose-grid,
            .testimonials-grid {
                grid-template-columns: 1fr;
            }

            .header {
                padding: 1rem;
            }

            .section {
                padding: 3rem 1rem;
            }
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Loading animation */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header" id="header">
        <nav class="nav-container">
            <a href="#home" class="logo">Serengeti Wonders</a>
            <ul class="nav-menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#destinations">Destinations</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="mobile-menu-btn" id="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content fade-in">
            <h1>Discover Tanzania's Magic</h1>
            <p>Experience the wonder of the Serengeti, climb Kilimanjaro, and immerse yourself in rich Maasai culture with our expertly guided tours.</p>
            <a href="#contact" class="cta-button">Start Your Adventure</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section about">
        <div class="container">
            <h2 class="section-title fade-in">About Serengeti Wonders Tours</h2>
            <p class="section-subtitle fade-in">Your gateway to authentic Tanzanian adventures</p>
            <div class="about-content">
                <div class="about-text fade-in">
                    <h3>Experience Tanzania Like Never Before</h3>
                    <p>For over a decade, Serengeti Wonders Tours has been crafting unforgettable adventures across Tanzania's most spectacular landscapes. From the endless plains of the Serengeti to the towering peak of Mount Kilimanjaro, we bring you closer to nature's most incredible spectacles.</p>
                    <p>Our expert local guides share their deep knowledge of wildlife, culture, and conservation, ensuring every moment of your journey is both meaningful and memorable. We're committed to sustainable tourism that benefits local communities while preserving Tanzania's natural heritage for future generations.</p>
                    <p>Whether you're seeking the thrill of a safari, the challenge of a mountain climb, or the serenity of pristine beaches, we tailor each experience to create your perfect Tanzanian adventure.</p>
                </div>
                <div class="about-image fade-in">
                    <img src="/images/maasai-culture.jpg" alt="Maasai Culture Experience">
                </div>
            </div>
        </div>
    </section>

    <!-- Destinations Section -->
    <section id="destinations" class="section">
        <div class="container">
            <h2 class="section-title fade-in">Our Destinations</h2>
            <p class="section-subtitle fade-in">Explore Tanzania's most iconic locations</p>
            <div class="destinations-grid">
                <div class="destination-card fade-in">
                    <img src="/images/hero-safari.jpg" alt="Serengeti National Park">
                    <div class="destination-content">
                        <h3>Serengeti National Park</h3>
                        <p>Witness the Great Migration and encounter the Big Five in one of Africa's most famous wildlife reserves. Experience endless savannas teeming with life.</p>
                    </div>
                </div>
                <div class="destination-card fade-in">
                    <img src="/images/hero-safari.jpg" alt="Ngorongoro Crater">
                    <div class="destination-content">
                        <h3>Ngorongoro Crater</h3>
                        <p>Descend into the world's largest intact volcanic caldera, home to an incredible concentration of wildlife in a breathtaking natural amphitheater.</p>
                    </div>
                </div>
                <div class="destination-card fade-in">
                    <img src="/images/hero-safari.jpg" alt="Mount Kilimanjaro">
                    <div class="destination-content">
                        <h3>Mount Kilimanjaro</h3>
                        <p>Conquer Africa's highest peak and stand on the "Roof of Africa." Our expert guides ensure a safe and successful summit experience.</p>
                    </div>
                </div>
                <div class="destination-card fade-in">
                    <img src="/images/zanzibar-beach.jpg" alt="Zanzibar Island">
                    <div class="destination-content">
                        <h3>Zanzibar Island</h3>
                        <p>Relax on pristine white sand beaches, explore historic Stone Town, and discover the rich spice heritage of this tropical paradise.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="section services">
        <div class="container">
            <h2 class="section-title fade-in">Our Services</h2>
            <p class="section-subtitle fade-in">Comprehensive tour packages tailored to your needs</p>
            <div class="services-grid">
                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-binoculars"></i>
                    </div>
                    <h3>Safari Game Drives</h3>
                    <p>Professional guided game drives in custom 4x4 vehicles with pop-up roofs for optimal wildlife viewing and photography opportunities.</p>
                </div>
                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Cultural Tours</h3>
                    <p>Authentic cultural experiences with local Maasai communities, traditional village visits, and hands-on cultural activities.</p>
                </div>
                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-plane"></i>
                    </div>
                    <h3>Airport Transfers</h3>
                    <p>Comfortable and reliable transportation from Kilimanjaro International Airport to your accommodation and tour starting points.</p>
                </div>
                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-mountain"></i>
                    </div>
                    <h3>Mountain Climbing</h3>
                    <p>Expert-guided climbs up Mount Kilimanjaro with experienced porters, quality equipment, and comprehensive safety protocols.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title fade-in">Why Choose Serengeti Wonders Tours</h2>
            <p class="section-subtitle fade-in">What sets us apart from other tour operators</p>
            <div class="why-choose-grid">
                <div class="feature-card fade-in">
                    <div class="feature-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Expert Local Guides</h3>
                    <p>Our certified guides have decades of experience and intimate knowledge of Tanzania's wildlife, culture, and landscapes.</p>
                </div>
                <div class="feature-card fade-in">
                    <div class="feature-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Sustainable Tourism</h3>
                    <p>We're committed to responsible tourism practices that support local communities and conservation efforts.</p>
                </div>
                <div class="feature-card fade-in">
                    <div class="feature-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Personalized Experience</h3>
                    <p>Every tour is customized to your interests, fitness level, and preferences for a truly unique adventure.</p>
                </div>
                <div class="feature-card fade-in">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Safety First</h3>
                    <p>Your safety is our priority with comprehensive insurance, quality equipment, and rigorous safety protocols.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="section testimonials">
        <div class="container">
            <h2 class="section-title fade-in">What Our Guests Say</h2>
            <p class="section-subtitle fade-in">Real experiences from our satisfied travelers</p>
            <div class="testimonials-grid">
                <div class="testimonial-card fade-in">
                    <div class="testimonial-content">
                        "Our safari with Serengeti Wonders Tours was absolutely incredible! Our guide was knowledgeable and passionate, and we saw all the Big Five. The attention to detail and personalized service made this trip unforgettable."
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">SM</div>
                        <div class="author-info">
                            <h4>Sarah Mitchell</h4>
                            <p>Wildlife Photographer, UK</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card fade-in">
                    <div class="testimonial-content">
                        "Climbing Kilimanjaro with this team was a dream come true. The guides were supportive every step of the way, and reaching the summit was the achievement of a lifetime. Highly recommended!"
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">MJ</div>
                        <div class="author-info">
                            <h4>Michael Johnson</h4>
                            <p>Adventure Enthusiast, USA</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card fade-in">
                    <div class="testimonial-content">
                        "The cultural tour was eye-opening and respectful. We learned so much about Maasai traditions and felt welcomed into the community. A truly authentic experience that we'll treasure forever."
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">EL</div>
                        <div class="author-info">
                            <h4>Emma Laurent</h4>
                            <p>Cultural Anthropologist, France</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section">
        <div class="container">
            <h2 class="section-title fade-in">Contact Us</h2>
            <p class="section-subtitle fade-in">Ready to start your Tanzanian adventure?</p>
            <div class="contact-content">
                <div class="contact-info fade-in">
                    <h3>Get In Touch</h3>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt contact-icon"></i>
                        <div>
                            <strong>Address</strong><br>
                            Arusha, Tanzania<br>
                            East Africa
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone contact-icon"></i>
                        <div>
                            <strong>Phone</strong><br>
                            +255 123 456 789
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope contact-icon"></i>
                        <div>
                            <strong>Email</strong><br>
                            info@serengetiwonders.com
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-clock contact-icon"></i>
                        <div>
                            <strong>Operating Hours</strong><br>
                            Mon - Fri: 8:00 AM - 6:00 PM<br>
                            Sat - Sun: 9:00 AM - 4:00 PM
                        </div>
                    </div>
                </div>
                <div class="contact-form fade-in">
                    <form id="contact-form">
                        @csrf
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" placeholder="Tell us about your dream Tanzanian adventure..." required></textarea>
                        </div>
                        <button type="submit" class="submit-btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Serengeti Wonders Tours</h3>
                <p>Your trusted partner for authentic Tanzanian adventures. We create memories that last a lifetime while supporting local communities and conservation efforts.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <a href="#home">Home</a>
                <a href="#about">About Us</a>
                <a href="#destinations">Destinations</a>
                <a href="#services">Services</a>
                <a href="#testimonials">Testimonials</a>
                <a href="#contact">Contact</a>
            </div>
            <div class="footer-section">
                <h3>Our Services</h3>
                <a href="#">Safari Tours</a>
                <a href="#">Mountain Climbing</a>
                <a href="#">Cultural Experiences</a>
                <a href="#">Beach Holidays</a>
                <a href="#">Photography Tours</a>
                <a href="#">Custom Packages</a>
            </div>
            <div class="footer-section">
                <h3>Newsletter</h3>
                <p>Subscribe to receive updates about our latest tours and special offers.</p>
                <form class="newsletter-form" id="newsletter-form">
                    @csrf
                    <input type="email" name="email" placeholder="Your email address" required>
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Serengeti Wonders Tours. All rights reserved. | Designed with ❤️ for Tanzania</p>
        </div>
    </footer>

    <script>
        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Fade in animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });

        // Set up CSRF token for AJAX requests
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        // Contact form handling
        document.getElementById('contact-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = this.querySelector('.submit-btn');
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'Sending...';
            submitBtn.disabled = true;
            
            // Get form data
            const formData = new FormData(this);
            
            fetch('/contact', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.message);
                    this.reset();
                } else {
                    alert(data.message || 'There was an error sending your message. Please try again.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('There was an error sending your message. Please try again.');
            })
            .finally(() => {
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
            });
        });

        // Mobile menu toggle (basic implementation)
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            const navMenu = document.querySelector('.nav-menu');
            navMenu.style.display = navMenu.style.display === 'flex' ? 'none' : 'flex';
        });

        // Newsletter form handling
        document.getElementById('newsletter-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'Subscribing...';
            submitBtn.disabled = true;
            
            const formData = new FormData(this);
            
            fetch('/newsletter', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.message);
                    this.reset();
                } else {
                    alert(data.message || 'There was an error with your subscription. Please try again.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('There was an error with your subscription. Please try again.');
            })
            .finally(() => {
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
            });
        });

        // Initialize fade-in animations for elements already in view
        document.addEventListener('DOMContentLoaded', function() {
            const heroContent = document.querySelector('.hero-content');
            if (heroContent) {
                heroContent.classList.add('visible');
            }
        });
    </script>
</body>
</html>