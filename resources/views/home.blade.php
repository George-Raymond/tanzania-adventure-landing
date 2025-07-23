@extends('layouts.app')

@section('title', 'Serengeti Wonders Tours - Tanzania Safari Adventures')

@section('content')
<div class="min-h-screen font-inter">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50" style="background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(10px); border-bottom: 1px solid var(--border);">
        <div class="container py-4">
            <div class="flex items-center justify-between">
                <div class="text-2xl font-playfair font-bold text-primary animate-fade-in-up">
                    Serengeti Wonders Tours
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="#home" class="text-base font-medium hover:text-primary transition-colors duration-300">Home</a>
                    <a href="#destinations" class="text-base font-medium hover:text-primary transition-colors duration-300">Destinations</a>
                    <a href="#services" class="text-base font-medium hover:text-primary transition-colors duration-300">Services</a>
                    <a href="#about" class="text-base font-medium hover:text-primary transition-colors duration-300">About</a>
                    <a href="#contact" class="text-base font-medium hover:text-primary transition-colors duration-300">Contact</a>
                    <a href="#contact" class="btn btn-primary">
                        Book Now →
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button class="md:hidden" onclick="toggleMobileMenu()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4 space-y-4 border-t border-border pt-4">
                <a href="#home" class="block text-base font-medium hover:text-primary transition-colors duration-300">Home</a>
                <a href="#destinations" class="block text-base font-medium hover:text-primary transition-colors duration-300">Destinations</a>
                <a href="#services" class="block text-base font-medium hover:text-primary transition-colors duration-300">Services</a>
                <a href="#about" class="block text-base font-medium hover:text-primary transition-colors duration-300">About</a>
                <a href="#contact" class="block text-base font-medium hover:text-primary transition-colors duration-300">Contact</a>
                <a href="#contact" class="btn btn-primary w-full">Book Now →</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center overflow-hidden">
        <div class="parallax-bg absolute inset-0 bg-cover bg-center bg-no-repeat" 
             style="background-image: url('{{ asset('images/hero-safari.jpg') }}')"></div>
        <div class="absolute inset-0" style="background: linear-gradient(to right, rgba(0,0,0,0.7), rgba(0,0,0,0.5), transparent)"></div>
        
        <div class="relative z-10 container">
            <div class="max-w-3xl animate-fade-in-up">
                <h1 class="text-5xl md:text-7xl font-playfair font-bold text-white mb-6" 
                    style="text-shadow: 0 0 20px rgba(255, 140, 0, 0.5)">
                    Explore Tanzania with Us
                </h1>
                <p class="text-xl md:text-2xl text-white mb-8 leading-relaxed" style="color: rgba(255,255,255,0.9)">
                    Safaris, Mountains, Beaches & Culture - Experience the magic of Tanzania with authentic local expertise
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#contact" class="btn btn-primary text-lg px-8 py-6">
                        Book Your Safari →
                    </a>
                    <a href="#about" class="btn btn-outline text-white border-white hover:bg-white hover:text-primary text-lg px-8 py-6">
                        Watch Our Story
                    </a>
                </div>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 text-white">
            <div class="w-6 h-10 border-2 border-white rounded-full flex justify-center">
                <div class="w-1 h-3 bg-white rounded-full mt-2" style="animation: pulse 2s infinite"></div>
            </div>
        </div>
    </section>

    <!-- Success Message -->
    @if(session('success'))
        <div class="container mt-20 pt-4">
            <div class="alert-success">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <!-- About Section -->
    <section id="about" class="py-20" style="background: linear-gradient(to bottom, var(--background), var(--muted))">
        <div class="container">
            <div class="text-center mb-16 animate-fade-in-up">
                <h2 class="text-4xl md:text-5xl font-playfair font-bold mb-6">
                    About Serengeti Wonders Tours
                </h2>
                <p class="text-lg text-muted max-w-3xl mx-auto leading-relaxed">
                    Born from our deep love for Tanzania's incredible wildlife and rich culture, we are your local experts 
                    in creating unforgettable African adventures. With over 15 years of experience, we pride ourselves on 
                    sustainable tourism that benefits local communities while giving you the authentic Tanzania experience.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div class="animate-fade-in-up">
                    <div class="grid grid-cols-2 gap-4">
                        <img src="{{ asset('images/maasai-culture.jpg') }}" alt="Maasai Culture" 
                             class="rounded-xl shadow-lg w-full h-48 object-cover">
                        <img src="{{ asset('images/zanzibar-beach.jpg') }}" alt="Zanzibar Beach" 
                             class="rounded-xl shadow-lg w-full h-48 object-cover" style="margin-top: 2rem;">
                        <img src="{{ asset('images/serengeti-migration.jpg') }}" alt="Serengeti Wildlife" 
                             class="rounded-xl shadow-lg w-full h-48 object-cover" style="margin-top: -1rem;">
                        <img src="{{ asset('images/kilimanjaro-peak.jpg') }}" alt="Kilimanjaro" 
                             class="rounded-xl shadow-lg w-full h-48 object-cover" style="margin-top: 1rem;">
                    </div>
                </div>

                <div class="space-y-6 animate-fade-in-up">
                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 text-primary mt-1 flex-shrink-0">
                            <svg fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2">Award-Winning Service</h3>
                            <p class="text-muted">Recognized by TripAdvisor and Safari Awards for exceptional service and sustainable practices.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 text-primary mt-1 flex-shrink-0">
                            <svg fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2">Local Community Support</h3>
                            <p class="text-muted">Every tour contributes to local communities, schools, and conservation efforts across Tanzania.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 text-primary mt-1 flex-shrink-0">
                            <svg fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2">Safety First</h3>
                            <p class="text-muted">Fully licensed, insured, and committed to the highest safety standards for all our adventures.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Destinations Section -->
    <section id="destinations" class="py-20">
        <div class="container">
            <div class="text-center mb-16 animate-fade-in-up">
                <h2 class="text-4xl md:text-5xl font-playfair font-bold mb-6">
                    Top Destinations
                </h2>
                <p class="text-lg text-muted max-w-2xl mx-auto">
                    Discover Tanzania's most spectacular destinations, each offering unique experiences and unforgettable memories
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($destinations as $destination)
                <div class="card animate-fade-in-up">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/' . $destination['image']) }}" alt="{{ $destination['name'] }}"
                             class="w-full h-64 object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute inset-0" style="background: linear-gradient(to top, rgba(0,0,0,0.6), transparent)"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h3 class="text-xl font-bold">{{ $destination['name'] }}</h3>
                        </div>
                    </div>
                    <div class="card-content">
                        <p class="text-muted mb-4">{{ $destination['description'] }}</p>
                        <div class="space-y-2">
                            @foreach($destination['highlights'] as $highlight)
                            <div class="flex items-center space-x-2">
                                <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm">{{ $highlight }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20" style="background: linear-gradient(to bottom, var(--muted), var(--background))">
        <div class="container">
            <div class="text-center mb-16 animate-fade-in-up">
                <h2 class="text-4xl md:text-5xl font-playfair font-bold mb-6">
                    Our Services
                </h2>
                <p class="text-lg text-muted max-w-2xl mx-auto">
                    Comprehensive safari and travel services designed to make your Tanzanian adventure seamless and memorable
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($services as $service)
                <div class="card text-center animate-fade-in-up">
                    <div class="card-content">
                        <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 transition-transform duration-300 hover:scale-110"
                             style="background: linear-gradient(135deg, var(--primary), var(--primary-glow), var(--safari-gold))">
                            @if($service['icon'] == 'camera')
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            @elseif($service['icon'] == 'users')
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                                </svg>
                            @elseif($service['icon'] == 'map-pin')
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            @else
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3l14 9-14 9V3z"/>
                                </svg>
                            @endif
                        </div>
                        <h3 class="text-xl font-semibold mb-4">{{ $service['title'] }}</h3>
                        <p class="text-muted">{{ $service['description'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-20 text-white" style="background: linear-gradient(135deg, var(--primary), var(--primary-glow), var(--safari-gold))">
        <div class="container">
            <div class="text-center mb-16 animate-fade-in-up">
                <h2 class="text-4xl md:text-5xl font-playfair font-bold mb-6">
                    Why Choose Serengeti Wonders?
                </h2>
                <p class="text-lg max-w-2xl mx-auto" style="color: rgba(255,255,255,0.9)">
                    Experience the difference of traveling with Tanzania's most trusted safari experts
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($whyChooseUs as $item)
                <div class="text-center animate-fade-in-up">
                    <div class="w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 transition-colors duration-300 hover:bg-white hover:bg-opacity-30"
                         style="background: rgba(255,255,255,0.2)">
                        @if($item['icon'] == 'users')
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                            </svg>
                        @elseif($item['icon'] == 'star')
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        @elseif($item['icon'] == 'shield')
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                        @else
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        @endif
                    </div>
                    <h3 class="text-xl font-semibold mb-4">{{ $item['title'] }}</h3>
                    <p style="color: rgba(255,255,255,0.8)">{{ $item['description'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20">
        <div class="container">
            <div class="text-center mb-16 animate-fade-in-up">
                <h2 class="text-4xl md:text-5xl font-playfair font-bold mb-6">
                    What Our Guests Say
                </h2>
                <p class="text-lg text-muted max-w-2xl mx-auto">
                    Real stories from travelers who experienced the magic of Tanzania with us
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach($testimonials as $testimonial)
                <div class="card animate-fade-in-up">
                    <div class="card-content">
                        <div class="flex items-center mb-6">
                            <img src="{{ $testimonial['image'] }}" alt="{{ $testimonial['name'] }}"
                                 class="w-16 h-16 rounded-full object-cover mr-4">
                            <div>
                                <h4 class="font-semibold">{{ $testimonial['name'] }}</h4>
                                <p class="text-muted text-sm">{{ $testimonial['country'] }}</p>
                                <div class="flex mt-1">
                                    @for($i = 0; $i < $testimonial['rating']; $i++)
                                    <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    @endfor
                                </div>
                            </div>
                        </div>
                        <p class="text-muted italic">"{{ $testimonial['text'] }}"</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20" style="background: linear-gradient(to bottom, var(--muted), var(--background))">
        <div class="container">
            <div class="text-center mb-16 animate-fade-in-up">
                <h2 class="text-4xl md:text-5xl font-playfair font-bold mb-6">
                    Start Your Adventure
                </h2>
                <p class="text-lg text-muted max-w-2xl mx-auto">
                    Ready to explore Tanzania? Get in touch with us and let's plan your perfect safari adventure
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-8">
                <div class="card animate-fade-in-up">
                    <div class="card-content">
                        <h3 class="text-2xl font-playfair font-bold mb-2">Send us a message</h3>
                        <p class="text-muted mb-6">We'll get back to you within 24 hours</p>
                        
                        <form id="contact-form" method="POST" action="{{ route('contact.submit') }}" class="space-y-6">
                            @csrf
                            <div class="grid md:grid-cols-2 gap-4">
                                <div class="form-group">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" name="name" class="form-input" placeholder="Your full name" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-input" placeholder="your@email.com" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Phone</label>
                                <input type="tel" name="phone" class="form-input" placeholder="+1 (555) 123-4567">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Message</label>
                                <textarea name="message" class="form-input form-textarea" rows="6" 
                                         placeholder="Tell us about your dream safari..." required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-full">
                                Send Message →
                            </button>
                        </form>
                    </div>
                </div>

                <div class="space-y-8 animate-fade-in-up">
                    <div class="card">
                        <div class="card-content">
                            <h3 class="text-xl font-semibold mb-6">Contact Information</h3>
                            <div class="space-y-4">
                                <div class="flex items-center space-x-4">
                                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                    <div>
                                        <p class="font-medium">Phone</p>
                                        <p class="text-muted">+255 754 123 456</p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                    <div>
                                        <p class="font-medium">Email</p>
                                        <p class="text-muted">info@serengetiwonders.com</p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    <div>
                                        <p class="font-medium">Location</p>
                                        <p class="text-muted">Arusha, Tanzania</p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                    </svg>
                                    <div>
                                        <p class="font-medium">WhatsApp</p>
                                        <p class="text-muted">+255 754 123 456</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-content">
                            <h3 class="text-xl font-semibold mb-6">Office Hours</h3>
                            <div class="space-y-2">
                                <div class="flex justify-between">
                                    <span class="text-muted">Monday - Friday</span>
                                    <span class="font-medium">8:00 AM - 6:00 PM</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-muted">Saturday</span>
                                    <span class="font-medium">9:00 AM - 4:00 PM</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-muted">Sunday</span>
                                    <span class="font-medium">Emergency Only</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Action Buttons -->
                    <div class="grid grid-cols-2 gap-4">
                        <a href="https://wa.me/255754123456" class="btn btn-primary text-center">
                            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                            </svg>
                            WhatsApp
                        </a>
                        <a href="tel:+255754123456" class="btn btn-outline text-center">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            Call Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-white py-16" style="background: var(--safari-brown)">
        <div class="container">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-2xl font-playfair font-bold mb-4">Serengeti Wonders Tours</h3>
                    <p class="mb-4" style="color: rgba(255,255,255,0.8)">
                        Your trusted partner for authentic Tanzanian adventures since 2008.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-white bg-opacity-10 rounded-full flex items-center justify-center hover:bg-opacity-20 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white bg-opacity-10 rounded-full flex items-center justify-center hover:bg-opacity-20 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white bg-opacity-10 rounded-full flex items-center justify-center hover:bg-opacity-20 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </a>
                        <a href="https://wa.me/255754123456" class="w-10 h-10 bg-white bg-opacity-10 rounded-full flex items-center justify-center hover:bg-opacity-20 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#home" class="hover:text-primary transition-colors" style="color: rgba(255,255,255,0.8)">Home</a></li>
                        <li><a href="#about" class="hover:text-primary transition-colors" style="color: rgba(255,255,255,0.8)">About</a></li>
                        <li><a href="#destinations" class="hover:text-primary transition-colors" style="color: rgba(255,255,255,0.8)">Destinations</a></li>
                        <li><a href="#services" class="hover:text-primary transition-colors" style="color: rgba(255,255,255,0.8)">Services</a></li>
                        <li><a href="#contact" class="hover:text-primary transition-colors" style="color: rgba(255,255,255,0.8)">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Safari Packages</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-primary transition-colors" style="color: rgba(255,255,255,0.8)">Budget Safaris</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors" style="color: rgba(255,255,255,0.8)">Luxury Safaris</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors" style="color: rgba(255,255,255,0.8)">Family Safaris</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors" style="color: rgba(255,255,255,0.8)">Honeymoon Packages</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors" style="color: rgba(255,255,255,0.8)">Cultural Tours</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Newsletter</h4>
                    <p class="mb-4" style="color: rgba(255,255,255,0.8)">Subscribe for safari tips and exclusive offers</p>
                    <div class="flex">
                        <input type="email" placeholder="Your email" class="form-input flex-1 mr-2" 
                               style="background: rgba(255,255,255,0.1); border-color: rgba(255,255,255,0.2); color: white;">
                        <button class="btn btn-primary">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="border-t pt-8 text-center" style="border-color: rgba(255,255,255,0.2); color: rgba(255,255,255,0.8)">
                <p>© 2024 Serengeti Wonders Tours. All rights reserved. | Licensed Safari Tour Operator</p>
            </div>
        </div>
    </footer>
</div>
@endsection