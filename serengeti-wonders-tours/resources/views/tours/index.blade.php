@extends('layouts.app')

@section('title', 'Safari Tours - Serengeti Wonders Tours')

@section('content')
<!-- Hero Section -->
<section style="height: 60vh; background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1516426122078-c23e76319801?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80'); background-size: cover; background-position: center; display: flex; align-items: center; justify-content: center; text-align: center; color: white; margin-top: 80px;">
    <div>
        <h1 style="font-size: 3.5rem; font-weight: 900; margin-bottom: 1rem;">Safari Tours</h1>
        <p style="font-size: 1.3rem; opacity: 0.9;">Discover our collection of unforgettable safari adventures</p>
    </div>
</section>

<!-- Tours Section -->
<section class="section">
    <div class="container">
        <!-- Filter Section -->
        <div style="background: white; padding: 2rem; border-radius: 20px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); margin-bottom: 3rem;">
            <form method="GET" action="{{ route('tours') }}" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; align-items: end;">
                <div>
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #374151;">Duration</label>
                    <select name="duration" style="width: 100%; padding: 0.75rem; border: 2px solid #e5e7eb; border-radius: 10px; font-size: 1rem;">
                        <option value="">Any Duration</option>
                        <option value="1-3" {{ request('duration') == '1-3' ? 'selected' : '' }}>1-3 days</option>
                        <option value="4-7" {{ request('duration') == '4-7' ? 'selected' : '' }}>4-7 days</option>
                        <option value="8+" {{ request('duration') == '8+' ? 'selected' : '' }}>8+ days</option>
                    </select>
                </div>
                <div>
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #374151;">Price Range</label>
                    <select name="price_range" style="width: 100%; padding: 0.75rem; border: 2px solid #e5e7eb; border-radius: 10px; font-size: 1rem;">
                        <option value="">Any Price</option>
                        <option value="0-1000" {{ request('price_range') == '0-1000' ? 'selected' : '' }}>$0 - $1,000</option>
                        <option value="1000-3000" {{ request('price_range') == '1000-3000' ? 'selected' : '' }}>$1,000 - $3,000</option>
                        <option value="3000+" {{ request('price_range') == '3000+' ? 'selected' : '' }}>$3,000+</option>
                    </select>
                </div>
                <div>
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #374151;">Difficulty</label>
                    <select name="difficulty" style="width: 100%; padding: 0.75rem; border: 2px solid #e5e7eb; border-radius: 10px; font-size: 1rem;">
                        <option value="">Any Level</option>
                        <option value="easy" {{ request('difficulty') == 'easy' ? 'selected' : '' }}>Easy</option>
                        <option value="moderate" {{ request('difficulty') == 'moderate' ? 'selected' : '' }}>Moderate</option>
                        <option value="challenging" {{ request('difficulty') == 'challenging' ? 'selected' : '' }}>Challenging</option>
                    </select>
                </div>
                <div>
                    <button type="submit" class="cta-button" style="width: 100%; margin: 0;">
                        <i class="fas fa-search" style="margin-right: 0.5rem;"></i>
                        Filter Tours
                    </button>
                </div>
            </form>
        </div>

        <!-- Tours Grid -->
        <div class="tours-grid">
            @forelse($tours as $tour)
            <div class="tour-card">
                <div style="position: relative;">
                    <img src="{{ $tour->image_url }}" alt="{{ $tour->title }}" class="tour-image">
                    @if($tour->is_featured)
                    <div style="position: absolute; top: 1rem; left: 1rem; background: linear-gradient(135deg, #f59e0b, #f97316); color: white; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.8rem; font-weight: 600;">
                        Featured
                    </div>
                    @endif
                    <div style="position: absolute; top: 1rem; right: 1rem; background: rgba(0, 0, 0, 0.7); color: white; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.9rem; font-weight: 600;">
                        {{ $tour->duration }} days
                    </div>
                </div>
                <div class="tour-content">
                    <h3 class="tour-title">{{ $tour->title }}</h3>
                    <p style="color: #6b7280; margin-bottom: 1rem; display: flex; align-items: center;">
                        <i class="fas fa-map-marker-alt" style="margin-right: 0.5rem; color: #2563eb;"></i>
                        {{ $tour->location }}
                    </p>
                    <p class="tour-description">{{ Str::limit($tour->description, 120) }}</p>
                    
                    @if($tour->highlights)
                    <div style="margin: 1rem 0;">
                        <h4 style="font-size: 0.9rem; font-weight: 600; color: #374151; margin-bottom: 0.5rem;">Highlights:</h4>
                        <ul style="list-style: none; padding: 0; margin: 0;">
                            @foreach(array_slice(json_decode($tour->highlights, true) ?? [], 0, 3) as $highlight)
                            <li style="color: #6b7280; font-size: 0.9rem; margin-bottom: 0.25rem; display: flex; align-items: center;">
                                <i class="fas fa-check" style="color: #10b981; margin-right: 0.5rem; font-size: 0.8rem;"></i>
                                {{ $highlight }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    
                    <div style="display: flex; justify-content: space-between; align-items: center; margin: 1rem 0; padding-top: 1rem; border-top: 1px solid #e5e7eb;">
                        <div>
                            <div class="tour-price">${{ number_format($tour->price, 0) }}</div>
                            <div style="color: #6b7280; font-size: 0.9rem;">per person</div>
                        </div>
                        <div style="text-align: right;">
                            <div style="color: #6b7280; font-size: 0.9rem;">Max {{ $tour->max_people }} people</div>
                            <div style="color: #6b7280; font-size: 0.9rem; text-transform: capitalize;">{{ $tour->difficulty_level }}</div>
                        </div>
                    </div>
                    
                    <a href="{{ route('tours.show', $tour->id) }}" class="cta-button" style="width: 100%; text-align: center; display: block; margin-top: 1rem;">
                        View Details
                    </a>
                </div>
            </div>
            @empty
            <div style="grid-column: 1 / -1; text-align: center; padding: 3rem;">
                <i class="fas fa-binoculars" style="font-size: 4rem; color: #d1d5db; margin-bottom: 1rem;"></i>
                <h3 style="color: #6b7280; margin-bottom: 0.5rem;">No tours found</h3>
                <p style="color: #9ca3af;">Try adjusting your filters to see more results.</p>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($tours->hasPages())
        <div style="margin-top: 3rem; display: flex; justify-content: center;">
            {{ $tours->links() }}
        </div>
        @endif
    </div>
</section>

<!-- Call to Action -->
<section class="section" style="background: linear-gradient(135deg, #2563eb, #3b82f6); color: white;">
    <div class="container" style="text-align: center; max-width: 600px; margin: 0 auto;">
        <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem;">Can't Find What You're Looking For?</h2>
        <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.9;">
            We specialize in creating custom safari experiences tailored to your preferences and budget.
        </p>
        <a href="#contact" class="cta-button" style="background: white; color: #2563eb;">
            <i class="fas fa-comments" style="margin-right: 0.5rem;"></i>
            Contact Us for Custom Tours
        </a>
    </div>
</section>
@endsection