@extends('layouts.app')

@section('content')
<div class="min-h-screen">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50" style="background: rgba(var(--background), 0.8); backdrop-filter: blur(12px); border-bottom: 1px solid rgba(var(--border), 0.5);">
        <div class="container">
            <div class="flex items-center justify-between" style="padding: 16px 0;">
                <div class="text-2xl font-playfair font-bold text-primary animate-fade-in">
                    Serengeti Wonders Tours
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-4">
                    @foreach(['Home', 'Destinations', 'Services', 'About', 'Contact'] as $item)
                        <a href="#{{ strtolower($item) }}" class="transition-all" style="color: var(--foreground); font-weight: 500;" onmouseover="this.style.color='var(--primary)'" onmouseout="this.style.color='var(--foreground)'">
                            {{ $item }}
                        </a>
                    @endforeach
                    <a href="#contact" class="safari-button">
                        Book Now <i data-lucide="arrow-right" style="width: 16px; height: 16px;"></i>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button class="md:hidden" data-mobile-menu-button onclick="toggleMobileMenu()">
                    <i data-lucide="menu" style="width: 24px; height: 24px;"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden space-y-4" style="padding-bottom: 16px;">
                @foreach(['Home', 'Destinations', 'Services', 'About', 'Contact'] as $item)
                    <a href="#{{ strtolower($item) }}" class="block transition-all" style="color: var(--foreground); font-weight: 500;" onclick="toggleMobileMenu()">
                        {{ $item }}
                    </a>
                @endforeach
                <a href="#contact" class="safari-button w-full justify-center">
                    Book Now <i data-lucide="arrow-right" style="width: 16px; height: 16px;"></i>
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative h-screen overflow-hidden">
        <div class="hero-bg absolute top-0 left-0 w-full h-full bg-cover bg-center bg-no-repeat" style="background-image: url('/assets/hero-safari.jpg');"></div>
        <div class="absolute top-0 left-0 w-full h-full" style="background: linear-gradient(to right, rgba(0,0,0,0.7), rgba(0,0,0,0.5), transparent);"></div>
        
        <div class="relative z-10 h-full flex items-center">
            <div class="container">
                <div style="max-width: 768px;" class="animate-on-scroll">
                    <h1 class="font-playfair font-bold text-white mb-6 safari-text-glow" style="font-size: clamp(3rem, 8vw, 5rem); line-height: 1.1;">
                        Explore Tanzania with Us
                    </h1>
                    <p class="text-white mb-8" style="font-size: clamp(1.25rem, 3vw, 1.5rem); opacity: 0.9; line-height: 1.5;">
                        Safaris, Mountains, Beaches & Culture - Experience the magic of Tanzania with authentic local expertise
                    </p>
                    <div class="flex flex-col space-y-4" style="gap: 16px;">
                        <a href="#contact" class="safari-button" style="font-size: 18px; padding: 16px 32px;">
                            Book Your Safari <i data-lucide="arrow-right" style="width: 20px; height: 20px;"></i>
                        </a>
                        <button class="btn btn-outline" style="font-size: 18px; padding: 16px 32px;">
                            Watch Our Story
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2">
            <div class="scroll-indicator"></div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section animate-on-scroll" style="background: linear-gradient(to bottom, var(--background), var(--muted));">
        <div class="container text-center">
            <h2 class="text-4xl font-playfair font-bold mb-6" style="color: var(--foreground);">
                About Serengeti Wonders Tours
            </h2>
            <p class="mb-8" style="color: var(--muted-foreground); max-width: 800px; margin: 0 auto 32px; font-size: 18px; line-height: 1.7;">
                Born from a passion for Tanzania's incredible wildlife and landscapes, we are your local experts in creating unforgettable safari experiences. With over 15 years of experience, our team of certified guides will show you the real Tanzania - from the Great Migration in Serengeti to the pristine beaches of Zanzibar.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mt-16">
                @php
                    $stats = [
                        ['icon' => 'users', 'number' => '2,500+', 'label' => 'Happy Travelers'],
                        ['icon' => 'star', 'number' => '15+', 'label' => 'Years Experience'],
                        ['icon' => 'shield', 'number' => '100%', 'label' => 'Safety Record'],
                        ['icon' => 'award', 'number' => '50+', 'label' => 'Awards Won']
                    ];
                @endphp
                
                @foreach($stats as $stat)
                    <div class="text-center">
                        <div class="inline-flex items-center justify-center w-16 h-16 rounded-full mb-4" style="background: var(--primary); color: var(--primary-foreground);">
                            <i data-lucide="{{ $stat['icon'] }}" style="width: 24px; height: 24px;"></i>
                        </div>
                        <div class="text-3xl font-bold mb-2" style="color: var(--primary);">{{ $stat['number'] }}</div>
                        <div style="color: var(--muted-foreground);">{{ $stat['label'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Destinations Section -->
    <section id="destinations" class="section animate-on-scroll">
        <div class="container">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-playfair font-bold mb-6" style="color: var(--foreground);">
                    Discover Amazing Destinations
                </h2>
                <p style="color: var(--muted-foreground); max-width: 600px; margin: 0 auto; font-size: 18px;">
                    From the endless plains of Serengeti to the summit of Kilimanjaro, explore Tanzania's most iconic destinations
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach($destinations as $destination)
                    <div class="card overflow-hidden">
                        <div class="relative h-64 mb-6">
                            <img src="{{ $destination->image }}" alt="{{ $destination->name }}" class="w-full h-full object-cover rounded">
                            <div class="absolute top-4 left-4 px-3 py-1 rounded-full text-sm font-semibold" style="background: var(--primary); color: var(--primary-foreground);">
                                Featured
                            </div>
                        </div>
                        <h3 class="text-xl font-semibold mb-3" style="color: var(--foreground);">{{ $destination->name }}</h3>
                        <p class="mb-4" style="color: var(--muted-foreground);">{{ $destination->description }}</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            @foreach($destination->highlights as $highlight)
                                <span class="px-3 py-1 rounded-full text-sm" style="background: var(--muted); color: var(--muted-foreground);">
                                    {{ $highlight }}
                                </span>
                            @endforeach
                        </div>
                        <a href="#contact" class="safari-button">
                            Explore Now <i data-lucide="arrow-right" style="width: 16px; height: 16px;"></i>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="section animate-on-scroll" style="background: var(--muted);">
        <div class="container">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-playfair font-bold mb-6" style="color: var(--foreground);">
                    Our Safari Services
                </h2>
                <p style="color: var(--muted-foreground); max-width: 600px; margin: 0 auto; font-size: 18px;">
                    Comprehensive safari services designed to make your Tanzanian adventure seamless and unforgettable
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach($services as $service)
                    <div class="card">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: var(--primary); color: var(--primary-foreground);">
                                    <i data-lucide="{{ $service->icon }}" style="width: 20px; height: 20px;"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-3" style="color: var(--foreground);">{{ $service->title }}</h3>
                                <p style="color: var(--muted-foreground);">{{ $service->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="section animate-on-scroll">
        <div class="container">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-playfair font-bold mb-6" style="color: var(--foreground);">
                    Why Choose Serengeti Wonders?
                </h2>
                <p style="color: var(--muted-foreground); max-width: 600px; margin: 0 auto; font-size: 18px;">
                    We're not just another tour company - we're your local partners in discovering the real Tanzania
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @php
                    $whyChooseUs = [
                        ['icon' => 'users', 'title' => 'Local Experts', 'description' => 'Born and raised in Tanzania, our guides know every secret spot and wildlife behavior'],
                        ['icon' => 'star', 'title' => 'Tailor-made Itineraries', 'description' => 'Every safari is customized to your interests, budget, and travel preferences'],
                        ['icon' => 'shield', 'title' => 'Affordable Packages', 'description' => 'Best value for money with transparent pricing and no hidden costs'],
                        ['icon' => 'clock', 'title' => '24/7 Customer Support', 'description' => 'Round-the-clock assistance before, during, and after your Tanzanian adventure']
                    ];
                @endphp

                @foreach($whyChooseUs as $item)
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: var(--primary); color: var(--primary-foreground);">
                                <i data-lucide="{{ $item['icon'] }}" style="width: 20px; height: 20px;"></i>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-3" style="color: var(--foreground);">{{ $item['title'] }}</h3>
                            <p style="color: var(--muted-foreground);">{{ $item['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section animate-on-scroll" style="background: var(--muted);">
        <div class="container">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-playfair font-bold mb-6" style="color: var(--foreground);">
                    What Our Travelers Say
                </h2>
                <p style="color: var(--muted-foreground); max-width: 600px; margin: 0 auto; font-size: 18px;">
                    Don't just take our word for it - hear from adventurers who've experienced the magic of Tanzania with us
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($testimonials as $testimonial)
                    <div class="card">
                        <div class="flex items-center mb-4">
                            @for($i = 1; $i <= 5; $i++)
                                <i data-lucide="star" style="width: 16px; height: 16px; color: {{ $i <= $testimonial->rating ? 'var(--safari-gold)' : 'var(--border)' }}; fill: {{ $i <= $testimonial->rating ? 'var(--safari-gold)' : 'none' }};"></i>
                            @endfor
                        </div>
                        <p class="mb-6" style="color: var(--muted-foreground); font-style: italic; line-height: 1.6;">
                            "{{ $testimonial->text }}"
                        </p>
                        <div class="flex items-center space-x-3">
                            <img src="{{ $testimonial->image }}" alt="{{ $testimonial->name }}" class="w-12 h-12 rounded-full object-cover">
                            <div>
                                <div class="font-semibold" style="color: var(--foreground);">{{ $testimonial->name }}</div>
                                <div class="text-sm" style="color: var(--muted-foreground);">{{ $testimonial->country }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section animate-on-scroll">
        <div class="container">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-playfair font-bold mb-6" style="color: var(--foreground);">
                    Start Your Adventure Today
                </h2>
                <p style="color: var(--muted-foreground); max-width: 600px; margin: 0 auto; font-size: 18px;">
                    Ready to explore Tanzania? Get in touch and let's plan your perfect safari adventure together
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Contact Info -->
                <div>
                    <h3 class="text-2xl font-semibold mb-6" style="color: var(--foreground);">Get In Touch</h3>
                    
                    <div class="space-y-4">
                        @php
                            $contactInfo = [
                                ['icon' => 'phone', 'label' => 'Phone', 'value' => '+255 123 456 789'],
                                ['icon' => 'mail', 'label' => 'Email', 'value' => 'info@serengetiwonders.com'],
                                ['icon' => 'map-pin', 'label' => 'Location', 'value' => 'Arusha, Tanzania'],
                                ['icon' => 'message-circle', 'label' => 'WhatsApp', 'value' => '+255 123 456 789']
                            ];
                        @endphp

                        @foreach($contactInfo as $info)
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 rounded-full flex items-center justify-center" style="background: var(--primary); color: var(--primary-foreground);">
                                    <i data-lucide="{{ $info['icon'] }}" style="width: 16px; height: 16px;"></i>
                                </div>
                                <div>
                                    <div class="font-semibold" style="color: var(--foreground);">{{ $info['label'] }}</div>
                                    <div style="color: var(--muted-foreground);">{{ $info['value'] }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="card">
                    <form onsubmit="submitContactForm(event)">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block mb-2 font-semibold" style="color: var(--foreground);">Name *</label>
                                <input type="text" name="name" required class="input" placeholder="Your full name">
                            </div>
                            <div>
                                <label class="block mb-2 font-semibold" style="color: var(--foreground);">Email *</label>
                                <input type="email" name="email" required class="input" placeholder="your@email.com">
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block mb-2 font-semibold" style="color: var(--foreground);">Phone</label>
                                <input type="tel" name="phone" class="input" placeholder="+255 123 456 789">
                            </div>
                            <div>
                                <label class="block mb-2 font-semibold" style="color: var(--foreground);">Subject</label>
                                <input type="text" name="subject" class="input" placeholder="Safari inquiry">
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <label class="block mb-2 font-semibold" style="color: var(--foreground);">Message *</label>
                            <textarea name="message" required class="textarea" rows="5" placeholder="Tell us about your dream safari..."></textarea>
                        </div>
                        
                        <button type="submit" class="safari-button w-full justify-center">
                            <i data-lucide="send" style="width: 16px; height: 16px;"></i>
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="section text-white" style="background: linear-gradient(135deg, var(--earth-brown) 0%, var(--primary) 100%);">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-2xl font-playfair font-bold mb-4">Serengeti Wonders Tours</h3>
                    <p class="mb-4" style="opacity: 0.8;">
                        Your trusted partner for authentic Tanzanian adventures since 2008.
                    </p>
                    <div class="flex space-x-4">
                        @foreach(['facebook', 'instagram', 'youtube', 'message-circle'] as $social)
                            <button class="w-10 h-10 rounded-full flex items-center justify-center transition-all" style="background: rgba(255,255,255,0.1);" onmouseover="this.style.background='rgba(255,255,255,0.2)'" onmouseout="this.style.background='rgba(255,255,255,0.1)'">
                                <i data-lucide="{{ $social }}" style="width: 20px; height: 20px;"></i>
                            </button>
                        @endforeach
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        @foreach(['Home', 'About', 'Safaris', 'Destinations', 'Contact'] as $link)
                            <li>
                                <a href="#{{ strtolower($link) }}" class="transition-all" style="opacity: 0.8;" onmouseover="this.style.color='var(--primary-glow)'" onmouseout="this.style.color='white'">
                                    {{ $link }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Safari Packages</h4>
                    <ul class="space-y-2">
                        @foreach(['Budget Safaris', 'Luxury Safaris', 'Family Safaris', 'Honeymoon Packages', 'Cultural Tours'] as $package)
                            <li>
                                <a href="#" class="transition-all" style="opacity: 0.8;" onmouseover="this.style.color='var(--primary-glow)'" onmouseout="this.style.color='white'">
                                    {{ $package }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Newsletter</h4>
                    <p class="mb-4" style="opacity: 0.8;">Subscribe for safari tips and exclusive offers</p>
                    <div class="flex">
                        <input type="email" placeholder="Your email" class="input flex-1" style="background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2); color: white;">
                        <button class="safari-button ml-2">
                            <i data-lucide="send" style="width: 16px; height: 16px;"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="border-t pt-8 text-center mt-8" style="border-color: rgba(255,255,255,0.2);">
                <p style="opacity: 0.8;">
                    © 2024 Serengeti Wonders Tours. All rights reserved. | Licensed Safari Tour Operator
                </p>
            </div>
        </div>
    </footer>
</div>
@endsection