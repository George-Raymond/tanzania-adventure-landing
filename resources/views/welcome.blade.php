<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serengeti Wonders Tours - Tanzania Safari Adventures</title>
    <meta name="description" content="Experience authentic Tanzania safari adventures with Serengeti Wonders Tours. Explore Serengeti, climb Kilimanjaro, and discover Zanzibar with local experts.">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!-- Lucide Icons CDN -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    
    <style>
        /* Safari Theme Variables */
        :root {
            --background: 35 15% 97%;
            --foreground: 25 25% 15%;
            --card: 35 20% 98%;
            --primary: 25 95% 53%;
            --primary-foreground: 35 15% 97%;
            --primary-glow: 30 100% 65%;
            --secondary: 30 25% 85%;
            --muted: 45 30% 92%;
            --muted-foreground: 35 15% 45%;
            --border: 35 25% 88%;
            --safari-gold: 45 95% 60%;
            --safari-brown: 25 35% 25%;
            --zanzibar-blue: 195 85% 45%;
        }
        
        /* Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: hsl(var(--background));
            color: hsl(var(--foreground));
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }
        
        /* Typography */
        .font-playfair {
            font-family: 'Playfair Display', serif;
        }
        
        /* Gradients */
        .bg-gradient-sunset {
            background: linear-gradient(135deg, hsl(var(--primary)), hsl(var(--primary-glow)), hsl(var(--safari-gold)));
        }
        
        .bg-gradient-safari {
            background: linear-gradient(180deg, hsl(var(--safari-brown)), hsl(var(--primary)));
        }
        
        /* Components */
        .safari-card {
            background: hsl(var(--card));
            border: 1px solid hsl(var(--border) / 0.5);
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        
        .safari-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 40px rgba(218, 130, 47, 0.3);
        }
        
        .safari-button {
            background: linear-gradient(135deg, hsl(var(--primary)), hsl(var(--primary-glow)));
            color: hsl(var(--primary-foreground));
            padding: 16px 32px;
            border-radius: 50px;
            border: none;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .safari-button:hover {
            transform: scale(1.05);
            box-shadow: 0 0 30px hsl(var(--primary-glow) / 0.6);
        }
        
        /* Navigation */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid hsl(var(--border) / 0.3);
        }
        
        .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 0;
        }
        
        .nav-logo {
            font-size: 24px;
            font-weight: 700;
            color: hsl(var(--primary));
        }
        
        .nav-links {
            display: flex;
            gap: 32px;
            list-style: none;
        }
        
        .nav-links a {
            color: hsl(var(--foreground));
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        .nav-links a:hover {
            color: hsl(var(--primary));
        }
        
        .mobile-menu {
            display: none;
        }
        
        /* Hero Section */
        .hero {
            height: 100vh;
            position: relative;
            background: url('/images/hero-safari.jpg') center/cover;
            display: flex;
            align-items: center;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to right, rgba(0,0,0,0.7), rgba(0,0,0,0.3));
        }
        
        .hero-content {
            position: relative;
            z-index: 10;
            max-width: 800px;
        }
        
        .hero h1 {
            font-size: clamp(3rem, 8vw, 7rem);
            font-weight: 700;
            color: white;
            margin-bottom: 24px;
            text-shadow: 0 0 20px rgba(255, 255, 255, 0.3);
        }
        
        .hero p {
            font-size: clamp(1.25rem, 3vw, 2rem);
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 32px;
        }
        
        /* Sections */
        .section {
            padding: 80px 0;
        }
        
        .section-title {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 700;
            text-align: center;
            margin-bottom: 24px;
        }
        
        .section-subtitle {
            font-size: 1.125rem;
            color: hsl(var(--muted-foreground));
            text-align: center;
            max-width: 600px;
            margin: 0 auto 64px auto;
        }
        
        /* Grid */
        .grid {
            display: grid;
            gap: 32px;
        }
        
        .grid-2 {
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        }
        
        .grid-3 {
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        }
        
        .grid-4 {
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        }
        
        /* Card */
        .card {
            padding: 32px;
            text-align: center;
        }
        
        .card h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 16px;
        }
        
        .card p {
            color: hsl(var(--muted-foreground));
        }
        
        /* Icon */
        .icon-wrapper {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px auto;
            transition: transform 0.3s ease;
        }
        
        .icon-wrapper:hover {
            transform: scale(1.1);
        }
        
        /* Destination Cards */
        .destination-card {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            height: 400px;
        }
        
        .destination-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .destination-card:hover img {
            transform: scale(1.1);
        }
        
        .destination-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 32px;
            color: white;
        }
        
        .destination-overlay h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 8px;
        }
        
        .destination-overlay p {
            margin-bottom: 16px;
        }
        
        .highlight {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 4px;
            font-size: 0.875rem;
        }
        
        /* Testimonials */
        .testimonial {
            background: white;
            padding: 32px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }
        
        .testimonial-header {
            display: flex;
            align-items: center;
            margin-bottom: 16px;
        }
        
        .testimonial-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 16px;
        }
        
        .stars {
            display: flex;
            color: hsl(var(--primary));
            margin-top: 4px;
        }
        
        /* Contact Form */
        .form-group {
            margin-bottom: 24px;
        }
        
        .form-label {
            display: block;
            font-weight: 500;
            margin-bottom: 8px;
        }
        
        .form-input,
        .form-textarea {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid hsl(var(--border));
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }
        
        .form-input:focus,
        .form-textarea:focus {
            outline: none;
            border-color: hsl(var(--primary));
        }
        
        /* Footer */
        .footer {
            background: hsl(var(--safari-brown));
            color: white;
            padding: 64px 0 32px 0;
        }
        
        .footer h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 16px;
        }
        
        .footer a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer a:hover {
            color: hsl(var(--primary));
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .mobile-menu {
                display: block;
            }
            
            .hero h1 {
                font-size: 3rem;
            }
            
            .grid-3,
            .grid-4 {
                grid-template-columns: 1fr;
            }
        }
        
        /* Utility Classes */
        .text-center { text-align: center; }
        .text-white { color: white; }
        .mb-4 { margin-bottom: 16px; }
        .mb-6 { margin-bottom: 24px; }
        .mb-8 { margin-bottom: 32px; }
        .mt-8 { margin-top: 32px; }
        .flex { display: flex; }
        .items-center { align-items: center; }
        .justify-between { justify-content: space-between; }
        .gap-4 { gap: 16px; }
        .hidden { display: none; }
        .block { display: block; }
        
        @media (min-width: 768px) {
            .md\\:flex { display: flex; }
            .md\\:hidden { display: none; }
            .md\\:grid-cols-2 { grid-template-columns: repeat(2, 1fr); }
        }
        
        @media (min-width: 1024px) {
            .lg\\:grid-cols-3 { grid-template-columns: repeat(3, 1fr); }
            .lg\\:grid-cols-4 { grid-template-columns: repeat(4, 1fr); }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-content">
                <div class="nav-logo font-playfair">
                    Serengeti Wonders Tours
                </div>
                
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#destinations">Destinations</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                
                <a href="#contact" class="safari-button hidden md:flex">
                    Book Now
                    <i data-lucide="arrow-right"></i>
                </a>
                
                <button class="mobile-menu" onclick="toggleMenu()">
                    <i data-lucide="menu"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="font-playfair">Explore Tanzania with Us</h1>
                <p>Safaris, Mountains, Beaches & Culture - Experience the magic of Tanzania with authentic local expertise</p>
                <div class="flex gap-4">
                    <a href="#contact" class="safari-button">
                        Book Your Safari
                        <i data-lucide="arrow-right"></i>
                    </a>
                    <a href="#about" class="safari-button" style="background: transparent; border: 2px solid white; color: white;">
                        Watch Our Story
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <div class="text-center mb-8">
                <h2 class="section-title font-playfair">About Serengeti Wonders Tours</h2>
                <p class="section-subtitle">
                    Born from our deep love for Tanzania's incredible wildlife and rich culture, we are your local experts 
                    in creating unforgettable African adventures. With over 15 years of experience, we pride ourselves on 
                    sustainable tourism that benefits local communities while giving you the authentic Tanzania experience.
                </p>
            </div>

            <div class="grid grid-2" style="align-items: center;">
                <div class="grid grid-2 gap-4">
                    <img src="/images/maasai-culture.jpg" alt="Maasai Culture" style="border-radius: 12px; width: 100%; height: 200px; object-fit: cover;">
                    <img src="/images/zanzibar-beach.jpg" alt="Zanzibar Beach" style="border-radius: 12px; width: 100%; height: 200px; object-fit: cover; margin-top: 32px;">
                    <img src="/images/serengeti-migration.jpg" alt="Serengeti Wildlife" style="border-radius: 12px; width: 100%; height: 200px; object-fit: cover; margin-top: -16px;">
                    <img src="/images/kilimanjaro-peak.jpg" alt="Kilimanjaro" style="border-radius: 12px; width: 100%; height: 200px; object-fit: cover; margin-top: 16px;">
                </div>

                <div style="padding-left: 32px;">
                    <div class="flex items-center mb-6">
                        <div class="icon-wrapper bg-gradient-sunset" style="width: 60px; height: 60px; margin-right: 16px; margin-bottom: 0;">
                            <i data-lucide="award" style="color: white; width: 24px; height: 24px;"></i>
                        </div>
                        <div>
                            <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 8px;">Award-Winning Service</h3>
                            <p style="color: hsl(var(--muted-foreground));">Recognized by TripAdvisor and Safari Awards for exceptional service and sustainable practices.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center mb-6">
                        <div class="icon-wrapper bg-gradient-sunset" style="width: 60px; height: 60px; margin-right: 16px; margin-bottom: 0;">
                            <i data-lucide="users" style="color: white; width: 24px; height: 24px;"></i>
                        </div>
                        <div>
                            <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 8px;">Local Community Support</h3>
                            <p style="color: hsl(var(--muted-foreground));">Every tour contributes to local communities, schools, and conservation efforts across Tanzania.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center">
                        <div class="icon-wrapper bg-gradient-sunset" style="width: 60px; height: 60px; margin-right: 16px; margin-bottom: 0;">
                            <i data-lucide="shield" style="color: white; width: 24px; height: 24px;"></i>
                        </div>
                        <div>
                            <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 8px;">Safety First</h3>
                            <p style="color: hsl(var(--muted-foreground));">Fully licensed, insured, and committed to the highest safety standards for all our adventures.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Destinations Section -->
    <section id="destinations" class="section" style="background: hsl(var(--muted));">
        <div class="container">
            <div class="text-center mb-8">
                <h2 class="section-title font-playfair">Top Destinations</h2>
                <p class="section-subtitle">
                    Discover Tanzania's most spectacular destinations, each offering unique experiences and unforgettable memories
                </p>
            </div>

            <div class="grid lg:grid-cols-4 md:grid-cols-2">
                <div class="safari-card destination-card">
                    <img src="/images/serengeti-migration.jpg" alt="Serengeti National Park">
                    <div class="destination-overlay">
                        <h3>Serengeti National Park</h3>
                        <p>Witness the Great Migration and endless plains filled with wildlife</p>
                        <div>
                            <div class="highlight">
                                <i data-lucide="check-circle" style="width: 16px; height: 16px; color: hsl(var(--primary));"></i>
                                <span>Great Migration</span>
                            </div>
                            <div class="highlight">
                                <i data-lucide="check-circle" style="width: 16px; height: 16px; color: hsl(var(--primary));"></i>
                                <span>Big Five</span>
                            </div>
                            <div class="highlight">
                                <i data-lucide="check-circle" style="width: 16px; height: 16px; color: hsl(var(--primary));"></i>
                                <span>Hot Air Balloon Safaris</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="safari-card destination-card">
                    <img src="/images/ngorongoro-crater.jpg" alt="Ngorongoro Crater">
                    <div class="destination-overlay">
                        <h3>Ngorongoro Crater</h3>
                        <p>The world's largest inactive volcanic caldera, a natural wonder</p>
                        <div>
                            <div class="highlight">
                                <i data-lucide="check-circle" style="width: 16px; height: 16px; color: hsl(var(--primary));"></i>
                                <span>UNESCO World Heritage</span>
                            </div>
                            <div class="highlight">
                                <i data-lucide="check-circle" style="width: 16px; height: 16px; color: hsl(var(--primary));"></i>
                                <span>Dense Wildlife</span>
                            </div>
                            <div class="highlight">
                                <i data-lucide="check-circle" style="width: 16px; height: 16px; color: hsl(var(--primary));"></i>
                                <span>Maasai Culture</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="safari-card destination-card">
                    <img src="/images/kilimanjaro-peak.jpg" alt="Mount Kilimanjaro">
                    <div class="destination-overlay">
                        <h3>Mount Kilimanjaro</h3>
                        <p>Africa's highest peak and the world's tallest freestanding mountain</p>
                        <div>
                            <div class="highlight">
                                <i data-lucide="check-circle" style="width: 16px; height: 16px; color: hsl(var(--primary));"></i>
                                <span>Uhuru Peak</span>
                            </div>
                            <div class="highlight">
                                <i data-lucide="check-circle" style="width: 16px; height: 16px; color: hsl(var(--primary));"></i>
                                <span>5 Climate Zones</span>
                            </div>
                            <div class="highlight">
                                <i data-lucide="check-circle" style="width: 16px; height: 16px; color: hsl(var(--primary));"></i>
                                <span>Guided Treks</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="safari-card destination-card">
                    <img src="/images/zanzibar-beach.jpg" alt="Zanzibar Island">
                    <div class="destination-overlay">
                        <h3>Zanzibar Island</h3>
                        <p>Pristine beaches, spice tours, and rich Swahili culture</p>
                        <div>
                            <div class="highlight">
                                <i data-lucide="check-circle" style="width: 16px; height: 16px; color: hsl(var(--primary));"></i>
                                <span>White Sand Beaches</span>
                            </div>
                            <div class="highlight">
                                <i data-lucide="check-circle" style="width: 16px; height: 16px; color: hsl(var(--primary));"></i>
                                <span>Stone Town</span>
                            </div>
                            <div class="highlight">
                                <i data-lucide="check-circle" style="width: 16px; height: 16px; color: hsl(var(--primary));"></i>
                                <span>Spice Tours</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="section">
        <div class="container">
            <div class="text-center mb-8">
                <h2 class="section-title font-playfair">Our Services</h2>
                <p class="section-subtitle">
                    Comprehensive safari and travel services designed to make your Tanzanian adventure seamless and memorable
                </p>
            </div>

            <div class="grid lg:grid-cols-4 md:grid-cols-2">
                <div class="safari-card card">
                    <div class="icon-wrapper bg-gradient-sunset">
                        <i data-lucide="camera" style="color: white; width: 32px; height: 32px;"></i>
                    </div>
                    <h3>Game Drives</h3>
                    <p>Professional guided safaris with expert local guides and comfortable 4WD vehicles</p>
                </div>

                <div class="safari-card card">
                    <div class="icon-wrapper bg-gradient-sunset">
                        <i data-lucide="users" style="color: white; width: 32px; height: 32px;"></i>
                    </div>
                    <h3>Cultural Tours</h3>
                    <p>Authentic experiences with local communities, traditional dances, and cultural immersion</p>
                </div>

                <div class="safari-card card">
                    <div class="icon-wrapper bg-gradient-sunset">
                        <i data-lucide="map-pin" style="color: white; width: 32px; height: 32px;"></i>
                    </div>
                    <h3>Airport Transfers</h3>
                    <p>Reliable transportation from airports to your accommodation with meet & greet service</p>
                </div>

                <div class="safari-card card">
                    <div class="icon-wrapper bg-gradient-sunset">
                        <i data-lucide="mountain" style="color: white; width: 32px; height: 32px;"></i>
                    </div>
                    <h3>Mountain Climbing</h3>
                    <p>Expert-guided treks to Kilimanjaro summit with safety equipment and experienced porters</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="section bg-gradient-sunset text-white">
        <div class="container">
            <div class="text-center mb-8">
                <h2 class="section-title font-playfair">Why Choose Serengeti Wonders?</h2>
                <p class="section-subtitle" style="color: rgba(255, 255, 255, 0.9);">
                    Experience the difference of traveling with Tanzania's most trusted safari experts
                </p>
            </div>

            <div class="grid lg:grid-cols-4 md:grid-cols-2">
                <div class="card">
                    <div class="icon-wrapper" style="background: rgba(255, 255, 255, 0.2);">
                        <i data-lucide="users" style="color: white; width: 32px; height: 32px;"></i>
                    </div>
                    <h3>Local Experts</h3>
                    <p style="color: rgba(255, 255, 255, 0.8);">Born and raised in Tanzania, our guides know every secret spot and wildlife behavior</p>
                </div>

                <div class="card">
                    <div class="icon-wrapper" style="background: rgba(255, 255, 255, 0.2);">
                        <i data-lucide="star" style="color: white; width: 32px; height: 32px;"></i>
                    </div>
                    <h3>Tailor-made Itineraries</h3>
                    <p style="color: rgba(255, 255, 255, 0.8);">Every safari is customized to your interests, budget, and travel preferences</p>
                </div>

                <div class="card">
                    <div class="icon-wrapper" style="background: rgba(255, 255, 255, 0.2);">
                        <i data-lucide="shield" style="color: white; width: 32px; height: 32px;"></i>
                    </div>
                    <h3>Affordable Packages</h3>
                    <p style="color: rgba(255, 255, 255, 0.8);">Best value for money with transparent pricing and no hidden costs</p>
                </div>

                <div class="card">
                    <div class="icon-wrapper" style="background: rgba(255, 255, 255, 0.2);">
                        <i data-lucide="clock" style="color: white; width: 32px; height: 32px;"></i>
                    </div>
                    <h3>24/7 Customer Support</h3>
                    <p style="color: rgba(255, 255, 255, 0.8);">Round-the-clock assistance before, during, and after your Tanzanian adventure</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section">
        <div class="container">
            <div class="text-center mb-8">
                <h2 class="section-title font-playfair">What Our Guests Say</h2>
                <p class="section-subtitle">
                    Real stories from travelers who experienced the magic of Tanzania with us
                </p>
            </div>

            <div class="grid lg:grid-cols-3">
                <div class="testimonial">
                    <div class="testimonial-header">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b550?w=150&h=150&fit=crop&crop=face" alt="Sarah Johnson" class="testimonial-avatar">
                        <div>
                            <h4 style="font-weight: 600;">Sarah Johnson</h4>
                            <p style="color: hsl(var(--muted-foreground)); font-size: 0.875rem;">USA</p>
                            <div class="stars">
                                <i data-lucide="star" style="width: 16px; height: 16px; fill: currentColor;"></i>
                                <i data-lucide="star" style="width: 16px; height: 16px; fill: currentColor;"></i>
                                <i data-lucide="star" style="width: 16px; height: 16px; fill: currentColor;"></i>
                                <i data-lucide="star" style="width: 16px; height: 16px; fill: currentColor;"></i>
                                <i data-lucide="star" style="width: 16px; height: 16px; fill: currentColor;"></i>
                            </div>
                        </div>
                    </div>
                    <p style="color: hsl(var(--muted-foreground)); font-style: italic;">"Absolutely incredible experience! The guides were knowledgeable and we saw all the Big Five. Serengeti Wonders made our dream safari come true!"</p>
                </div>

                <div class="testimonial">
                    <div class="testimonial-header">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=150&h=150&fit=crop&crop=face" alt="Marcus Weber" class="testimonial-avatar">
                        <div>
                            <h4 style="font-weight: 600;">Marcus Weber</h4>
                            <p style="color: hsl(var(--muted-foreground)); font-size: 0.875rem;">Germany</p>
                            <div class="stars">
                                <i data-lucide="star" style="width: 16px; height: 16px; fill: currentColor;"></i>
                                <i data-lucide="star" style="width: 16px; height: 16px; fill: currentColor;"></i>
                                <i data-lucide="star" style="width: 16px; height: 16px; fill: currentColor;"></i>
                                <i data-lucide="star" style="width: 16px; height: 16px; fill: currentColor;"></i>
                                <i data-lucide="star" style="width: 16px; height: 16px; fill: currentColor;"></i>
                            </div>
                        </div>
                    </div>
                    <p style="color: hsl(var(--muted-foreground)); font-style: italic;">"From Kilimanjaro to Zanzibar, every moment was perfectly organized. The cultural tour with Maasai community was the highlight of our trip!"</p>
                </div>

                <div class="testimonial">
                    <div class="testimonial-header">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=150&h=150&fit=crop&crop=face" alt="Emma Thompson" class="testimonial-avatar">
                        <div>
                            <h4 style="font-weight: 600;">Emma Thompson</h4>
                            <p style="color: hsl(var(--muted-foreground)); font-size: 0.875rem;">UK</p>
                            <div class="stars">
                                <i data-lucide="star" style="width: 16px; height: 16px; fill: currentColor;"></i>
                                <i data-lucide="star" style="width: 16px; height: 16px; fill: currentColor;"></i>
                                <i data-lucide="star" style="width: 16px; height: 16px; fill: currentColor;"></i>
                                <i data-lucide="star" style="width: 16px; height: 16px; fill: currentColor;"></i>
                                <i data-lucide="star" style="width: 16px; height: 16px; fill: currentColor;"></i>
                            </div>
                        </div>
                    </div>
                    <p style="color: hsl(var(--muted-foreground)); font-style: italic;">"Best safari company in Tanzania! Professional, friendly, and they really care about conservation. We'll definitely be back with our family!"</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section" style="background: hsl(var(--muted));">
        <div class="container">
            <div class="text-center mb-8">
                <h2 class="section-title font-playfair">Start Your Adventure</h2>
                <p class="section-subtitle">
                    Ready to explore Tanzania? Get in touch with us and let's plan your perfect safari adventure
                </p>
            </div>

            <div class="grid lg:grid-cols-2">
                <div class="safari-card" style="padding: 48px;">
                    <h3 class="font-playfair" style="font-size: 1.5rem; margin-bottom: 8px;">Send us a message</h3>
                    <p style="color: hsl(var(--muted-foreground)); margin-bottom: 32px;">We'll get back to you within 24 hours</p>
                    
                    @if(session('success'))
                        <div style="background: linear-gradient(135deg, #22c55e, #16a34a); color: white; padding: 16px; border-radius: 8px; margin-bottom: 24px; display: flex; align-items: center; gap: 12px;">
                            <i data-lucide="check-circle" style="width: 20px; height: 20px;"></i>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif

                    @if(session('error'))
                        <div style="background: linear-gradient(135deg, #ef4444, #dc2626); color: white; padding: 16px; border-radius: 8px; margin-bottom: 24px; display: flex; align-items: center; gap: 12px;">
                            <i data-lucide="alert-circle" style="width: 20px; height: 20px;"></i>
                            <span>{{ session('error') }}</span>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div style="background: linear-gradient(135deg, #ef4444, #dc2626); color: white; padding: 16px; border-radius: 8px; margin-bottom: 24px;">
                            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 8px;">
                                <i data-lucide="alert-triangle" style="width: 20px; height: 20px;"></i>
                                <span style="font-weight: 600;">Please fix the following errors:</span>
                            </div>
                            <ul style="margin-left: 32px;">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-4 mb-6">
                            <div class="form-group">
                                <label class="form-label">Full Name</label>
                                <input type="text" name="name" class="form-input" placeholder="Your full name" value="{{ old('name') }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-input" placeholder="your@email.com" value="{{ old('email') }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Phone</label>
                            <input type="tel" name="phone" class="form-input" placeholder="+1 (555) 123-4567" value="{{ old('phone') }}">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Message</label>
                            <textarea name="message" class="form-textarea" rows="6" placeholder="Tell us about your dream safari..." required>{{ old('message') }}</textarea>
                        </div>
                        <button type="submit" class="safari-button" style="width: 100%;">
                            Send Message
                            <i data-lucide="send"></i>
                        </button>
                    </form>
                </div>

                <div style="padding-left: 32px;">
                    <div class="safari-card mb-8" style="padding: 48px;">
                        <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 24px;">Contact Information</h3>
                        <div style="margin-bottom: 16px;" class="flex items-center">
                            <i data-lucide="phone" style="width: 24px; height: 24px; color: hsl(var(--primary)); margin-right: 16px;"></i>
                            <div>
                                <p style="font-weight: 500;">Phone</p>
                                <p style="color: hsl(var(--muted-foreground));">+255 754 123 456</p>
                            </div>
                        </div>
                        <div style="margin-bottom: 16px;" class="flex items-center">
                            <i data-lucide="mail" style="width: 24px; height: 24px; color: hsl(var(--primary)); margin-right: 16px;"></i>
                            <div>
                                <p style="font-weight: 500;">Email</p>
                                <p style="color: hsl(var(--muted-foreground));">info@serengetiwonders.com</p>
                            </div>
                        </div>
                        <div style="margin-bottom: 16px;" class="flex items-center">
                            <i data-lucide="map-pin" style="width: 24px; height: 24px; color: hsl(var(--primary)); margin-right: 16px;"></i>
                            <div>
                                <p style="font-weight: 500;">Location</p>
                                <p style="color: hsl(var(--muted-foreground));">Arusha, Tanzania</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <i data-lucide="message-circle" style="width: 24px; height: 24px; color: hsl(var(--primary)); margin-right: 16px;"></i>
                            <div>
                                <p style="font-weight: 500;">WhatsApp</p>
                                <p style="color: hsl(var(--muted-foreground));">+255 754 123 456</p>
                            </div>
                        </div>
                    </div>

                    <div class="safari-card mb-8" style="padding: 48px;">
                        <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 24px;">Office Hours</h3>
                        <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                            <span style="color: hsl(var(--muted-foreground));">Monday - Friday</span>
                            <span style="font-weight: 500;">8:00 AM - 6:00 PM</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                            <span style="color: hsl(var(--muted-foreground));">Saturday</span>
                            <span style="font-weight: 500;">9:00 AM - 4:00 PM</span>
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <span style="color: hsl(var(--muted-foreground));">Sunday</span>
                            <span style="font-weight: 500;">Emergency Only</span>
                        </div>
                    </div>

                    <div class="grid grid-2 gap-4">
                        <a href="https://wa.me/255754123456" class="safari-button" style="justify-content: center; height: 64px;">
                            <i data-lucide="message-circle"></i>
                            WhatsApp
                        </a>
                        <a href="tel:+255754123456" class="safari-button" style="background: transparent; border: 2px solid hsl(var(--primary)); color: hsl(var(--primary)); justify-content: center; height: 64px;">
                            <i data-lucide="phone"></i>
                            Call Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="grid lg:grid-cols-4 md:grid-cols-2 mb-8">
                <div>
                    <h3 class="font-playfair">Serengeti Wonders Tours</h3>
                    <p style="color: rgba(255, 255, 255, 0.8); margin-bottom: 16px;">
                        Your trusted partner for authentic Tanzanian adventures since 2008.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" style="padding: 8px; border-radius: 8px; background: rgba(255, 255, 255, 0.1);">
                            <i data-lucide="facebook" style="width: 20px; height: 20px;"></i>
                        </a>
                        <a href="#" style="padding: 8px; border-radius: 8px; background: rgba(255, 255, 255, 0.1);">
                            <i data-lucide="instagram" style="width: 20px; height: 20px;"></i>
                        </a>
                        <a href="#" style="padding: 8px; border-radius: 8px; background: rgba(255, 255, 255, 0.1);">
                            <i data-lucide="youtube" style="width: 20px; height: 20px;"></i>
                        </a>
                        <a href="#" style="padding: 8px; border-radius: 8px; background: rgba(255, 255, 255, 0.1);">
                            <i data-lucide="message-circle" style="width: 20px; height: 20px;"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 style="font-size: 1.125rem; font-weight: 600; margin-bottom: 16px;">Quick Links</h4>
                    <ul style="list-style: none; padding: 0;">
                        <li style="margin-bottom: 8px;"><a href="#home">Home</a></li>
                        <li style="margin-bottom: 8px;"><a href="#about">About</a></li>
                        <li style="margin-bottom: 8px;"><a href="#destinations">Destinations</a></li>
                        <li style="margin-bottom: 8px;"><a href="#services">Services</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 style="font-size: 1.125rem; font-weight: 600; margin-bottom: 16px;">Safari Packages</h4>
                    <ul style="list-style: none; padding: 0;">
                        <li style="margin-bottom: 8px;"><a href="#">Budget Safaris</a></li>
                        <li style="margin-bottom: 8px;"><a href="#">Luxury Safaris</a></li>
                        <li style="margin-bottom: 8px;"><a href="#">Family Safaris</a></li>
                        <li style="margin-bottom: 8px;"><a href="#">Honeymoon Packages</a></li>
                        <li><a href="#">Cultural Tours</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 style="font-size: 1.125rem; font-weight: 600; margin-bottom: 16px;">Newsletter</h4>
                    <p style="color: rgba(255, 255, 255, 0.8); margin-bottom: 16px;">Subscribe for safari tips and exclusive offers</p>
                    <div class="flex">
                        <input type="email" placeholder="Your email" style="flex: 1; padding: 12px 16px; border: 1px solid rgba(255, 255, 255, 0.2); border-radius: 8px; background: rgba(255, 255, 255, 0.1); color: white;">
                        <button class="safari-button" style="margin-left: 8px; padding: 12px 16px;">
                            <i data-lucide="send"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div style="border-top: 1px solid rgba(255, 255, 255, 0.2); padding-top: 32px; text-align: center;">
                <p style="color: rgba(255, 255, 255, 0.8);">
                    © 2024 Serengeti Wonders Tours. All rights reserved. | Licensed Safari Tour Operator
                </p>
            </div>
        </div>
    </footer>

    <script>
        // Initialize Lucide icons
        lucide.createIcons();
        
        // Mobile menu toggle
        function toggleMenu() {
            // You can implement mobile menu functionality here
            console.log('Mobile menu toggled');
        }
        
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
        
        // Form submission handling is done server-side via Laravel
        
        // Parallax effect for hero section
        window.addEventListener('scroll', function() {
            const scrollY = window.scrollY;
            const hero = document.querySelector('.hero');
            if (hero) {
                hero.style.transform = `translateY(${scrollY * 0.5}px)`;
            }
        });
        
        // Navbar background change on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 100) {
                navbar.style.background = 'rgba(255, 255, 255, 0.95)';
            } else {
                navbar.style.background = 'rgba(255, 255, 255, 0.9)';
            }
        });
    </script>
</body>
</html>