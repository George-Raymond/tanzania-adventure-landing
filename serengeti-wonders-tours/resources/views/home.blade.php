@extends('layouts.app')

@section('title', 'Serengeti Wonders Tours - Unforgettable Safari Adventures')

@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1>Discover the Magic of Tanzania</h1>
        <p>Embark on unforgettable safari adventures in the heart of Africa</p>
        <a href="{{ route('tours') }}" class="cta-button">Explore Tours</a>
    </div>
</section>

<!-- Featured Tours Section -->
<section class="section" style="background: #f9fafb;">
    <div class="container">
        <h2 class="section-title">Featured Tours</h2>
        <div class="tours-grid">
            @forelse($featuredTours as $tour)
            <div class="tour-card">
                <img src="{{ $tour->image_url }}" alt="{{ $tour->title }}" class="tour-image">
                <div class="tour-content">
                    <h3 class="tour-title">{{ $tour->title }}</h3>
                    <p class="tour-description">{{ Str::limit($tour->description, 120) }}</p>
                    <div class="tour-details">
                        <span class="tour-price">${{ number_format($tour->price, 0) }}</span>
                        <span class="tour-duration">{{ $tour->duration }} days</span>
                    </div>
                    <a href="{{ route('tours.show', $tour->id) }}" class="cta-button" style="width: 100%; text-align: center; display: block; margin-top: 1rem;">
                        Learn More
                    </a>
                </div>
            </div>
            @empty
            <div style="grid-column: 1 / -1; text-align: center; color: #6b7280;">
                <p>No featured tours available at the moment.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- About Section -->
<section class="section" id="about">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
            <div>
                <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1.5rem; color: #1f2937;">
                    Why Choose Serengeti Wonders?
                </h2>
                <p style="color: #4b5563; margin-bottom: 2rem; font-size: 1.1rem; line-height: 1.8;">
                    With over 15 years of experience in organizing safari adventures, we provide unmatched expertise 
                    and personalized service. Our local guides know every corner of Tanzania's magnificent landscapes.
                </p>
                <div style="display: grid; gap: 1rem;">
                    <div style="display: flex; align-items: center; gap: 1rem;">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #2563eb, #3b82f6); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-award" style="color: white; font-size: 1.2rem;"></i>
                        </div>
                        <div>
                            <h4 style="font-weight: 600; color: #1f2937;">Expert Guides</h4>
                            <p style="color: #6b7280; margin: 0;">Local expertise with deep knowledge</p>
                        </div>
                    </div>
                    <div style="display: flex; align-items: center; gap: 1rem;">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #2563eb, #3b82f6); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-shield-alt" style="color: white; font-size: 1.2rem;"></i>
                        </div>
                        <div>
                            <h4 style="font-weight: 600; color: #1f2937;">Safety First</h4>
                            <p style="color: #6b7280; margin: 0;">Comprehensive safety measures</p>
                        </div>
                    </div>
                    <div style="display: flex; align-items: center; gap: 1rem;">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #2563eb, #3b82f6); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-heart" style="color: white; font-size: 1.2rem;"></i>
                        </div>
                        <div>
                            <h4 style="font-weight: 600; color: #1f2937;">Personalized Experience</h4>
                            <p style="color: #6b7280; margin: 0;">Tailored to your preferences</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <img src="https://images.unsplash.com/photo-1549366021-9f761d040a94?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                     alt="Safari Guide" 
                     style="width: 100%; border-radius: 20px; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);">
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="section" id="testimonials" style="background: #f9fafb;">
    <div class="container">
        <h2 class="section-title">What Our Guests Say</h2>
        <div class="testimonials-grid">
            @forelse($testimonials as $testimonial)
            <div class="testimonial-card">
                <img src="{{ $testimonial->avatar_url ?: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80' }}" 
                     alt="{{ $testimonial->name }}" 
                     class="testimonial-avatar">
                <div class="testimonial-content">
                    "{{ $testimonial->content }}"
                </div>
                <div class="testimonial-author">{{ $testimonial->name }}</div>
                <div class="testimonial-location">{{ $testimonial->location }}</div>
                <div style="margin-top: 0.5rem;">
                    @for($i = 1; $i <= 5; $i++)
                        <i class="fas fa-star" style="color: {{ $i <= $testimonial->rating ? '#fbbf24' : '#d1d5db' }};"></i>
                    @endfor
                </div>
            </div>
            @empty
            <div style="grid-column: 1 / -1; text-align: center; color: #6b7280;">
                <p>No testimonials available at the moment.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="section">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; text-align: center;">
            <div>
                <div style="font-size: 3rem; font-weight: 900; color: #2563eb; margin-bottom: 0.5rem;">15+</div>
                <div style="color: #6b7280; font-weight: 500;">Years Experience</div>
            </div>
            <div>
                <div style="font-size: 3rem; font-weight: 900; color: #2563eb; margin-bottom: 0.5rem;">500+</div>
                <div style="color: #6b7280; font-weight: 500;">Happy Travelers</div>
            </div>
            <div>
                <div style="font-size: 3rem; font-weight: 900; color: #2563eb; margin-bottom: 0.5rem;">20+</div>
                <div style="color: #6b7280; font-weight: 500;">Tour Destinations</div>
            </div>
            <div>
                <div style="font-size: 3rem; font-weight: 900; color: #2563eb; margin-bottom: 0.5rem;">98%</div>
                <div style="color: #6b7280; font-weight: 500;">Satisfaction Rate</div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="section" id="contact" style="background: linear-gradient(135deg, #2563eb, #3b82f6); color: white;">
    <div class="container">
        <div style="text-align: center; max-width: 600px; margin: 0 auto;">
            <h2 style="font-size: 3rem; font-weight: 800; margin-bottom: 1rem;">Ready for Your Adventure?</h2>
            <p style="font-size: 1.2rem; margin-bottom: 2rem; opacity: 0.9;">
                Contact us today to start planning your dream safari experience in Tanzania.
            </p>
            <div style="display: flex; justify-content: center; gap: 1rem; margin-bottom: 2rem;">
                <a href="mailto:info@serengetiwonders.com" class="cta-button" style="background: white; color: #2563eb;">
                    <i class="fas fa-envelope" style="margin-right: 0.5rem;"></i>
                    Email Us
                </a>
                <a href="tel:+255123456789" class="cta-button" style="background: rgba(255, 255, 255, 0.2); border: 2px solid white;">
                    <i class="fas fa-phone" style="margin-right: 0.5rem;"></i>
                    Call Us
                </a>
            </div>
            <div style="display: flex; justify-content: center; gap: 2rem; font-size: 1.5rem;">
                <a href="#" style="color: white; opacity: 0.8; transition: opacity 0.3s ease;">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" style="color: white; opacity: 0.8; transition: opacity 0.3s ease;">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" style="color: white; opacity: 0.8; transition: opacity 0.3s ease;">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" style="color: white; opacity: 0.8; transition: opacity 0.3s ease;">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    // Counter animation
    function animateCounters() {
        const counters = document.querySelectorAll('[data-counter]');
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-counter'));
            const increment = target / 200;
            let current = 0;
            
            const updateCounter = () => {
                if (current < target) {
                    current += increment;
                    counter.textContent = Math.ceil(current);
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target;
                }
            };
            
            updateCounter();
        });
    }

    // Trigger counter animation when stats section is visible
    const statsSection = document.querySelector('.section:nth-child(5)');
    if (statsSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.unobserve(entry.target);
                }
            });
        });
        observer.observe(statsSection);
    }
</script>
@endsection