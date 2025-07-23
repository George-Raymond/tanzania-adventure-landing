@extends('layouts.app')

@section('title', $tour->title . ' - Serengeti Wonders Tours')

@section('content')
<!-- Hero Section -->
<section style="height: 70vh; background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ $tour->image_url }}'); background-size: cover; background-position: center; display: flex; align-items: center; justify-content: center; text-align: center; color: white; margin-top: 80px;">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;">
            <h1 style="font-size: 4rem; font-weight: 900; margin-bottom: 1rem;">{{ $tour->title }}</h1>
            <p style="font-size: 1.3rem; opacity: 0.9; margin-bottom: 2rem;">{{ $tour->location }}</p>
            <div style="display: flex; justify-content: center; gap: 2rem; font-size: 1.1rem;">
                <div style="display: flex; align-items: center; gap: 0.5rem;">
                    <i class="fas fa-calendar-alt"></i>
                    <span>{{ $tour->duration }} days</span>
                </div>
                <div style="display: flex; align-items: center; gap: 0.5rem;">
                    <i class="fas fa-users"></i>
                    <span>Max {{ $tour->max_people }} people</span>
                </div>
                <div style="display: flex; align-items: center; gap: 0.5rem;">
                    <i class="fas fa-mountain"></i>
                    <span style="text-transform: capitalize;">{{ $tour->difficulty_level }}</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tour Details Section -->
<section class="section">
    <div class="container">
        <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 4rem;">
            <!-- Main Content -->
            <div>
                <!-- Description -->
                <div style="margin-bottom: 3rem;">
                    <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1.5rem; color: #1f2937;">Tour Overview</h2>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: #4b5563;">{{ $tour->description }}</p>
                </div>

                <!-- Highlights -->
                @if($tour->highlights)
                <div style="margin-bottom: 3rem;">
                    <h3 style="font-size: 2rem; font-weight: 700; margin-bottom: 1.5rem; color: #1f2937;">Tour Highlights</h3>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1rem;">
                        @foreach(json_decode($tour->highlights, true) as $highlight)
                        <div style="display: flex; align-items: center; gap: 1rem; padding: 1rem; background: #f9fafb; border-radius: 10px;">
                            <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #2563eb, #3b82f6); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fas fa-check" style="color: white; font-size: 1rem;"></i>
                            </div>
                            <span style="color: #374151; font-weight: 500;">{{ $highlight }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- What's Included -->
                @if($tour->included)
                <div style="margin-bottom: 3rem;">
                    <h3 style="font-size: 2rem; font-weight: 700; margin-bottom: 1.5rem; color: #1f2937;">What's Included</h3>
                    <div style="background: white; padding: 2rem; border-radius: 20px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);">
                        <ul style="list-style: none; padding: 0; margin: 0;">
                            @foreach(json_decode($tour->included, true) as $item)
                            <li style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem; padding-bottom: 1rem; border-bottom: 1px solid #e5e7eb;">
                                <i class="fas fa-check-circle" style="color: #10b981; font-size: 1.2rem;"></i>
                                <span style="color: #374151; font-size: 1.1rem;">{{ $item }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif

                <!-- Gallery -->
                <div style="margin-bottom: 3rem;">
                    <h3 style="font-size: 2rem; font-weight: 700; margin-bottom: 1.5rem; color: #1f2937;">Gallery</h3>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1rem;">
                        <img src="{{ $tour->image_url }}" alt="{{ $tour->title }}" style="width: 100%; height: 200px; object-fit: cover; border-radius: 15px;">
                        <img src="https://images.unsplash.com/photo-1516426122078-c23e76319801?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Safari" style="width: 100%; height: 200px; object-fit: cover; border-radius: 15px;">
                        <img src="https://images.unsplash.com/photo-1549366021-9f761d040a94?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Wildlife" style="width: 100%; height: 200px; object-fit: cover; border-radius: 15px;">
                        <img src="https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Landscape" style="width: 100%; height: 200px; object-fit: cover; border-radius: 15px;">
                    </div>
                </div>
            </div>

            <!-- Booking Sidebar -->
            <div>
                <div style="background: white; padding: 2rem; border-radius: 20px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); position: sticky; top: 100px;">
                    <div style="text-align: center; margin-bottom: 2rem;">
                        <div style="font-size: 3rem; font-weight: 900; color: #2563eb; margin-bottom: 0.5rem;">${{ number_format($tour->price, 0) }}</div>
                        <div style="color: #6b7280; font-size: 1.1rem;">per person</div>
                    </div>

                    <form action="{{ route('bookings.store') }}" method="POST" style="display: grid; gap: 1rem;">
                        @csrf
                        <input type="hidden" name="tour_id" value="{{ $tour->id }}">
                        
                        <div>
                            <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #374151;">First Name</label>
                            <input type="text" name="first_name" required style="width: 100%; padding: 0.75rem; border: 2px solid #e5e7eb; border-radius: 10px; font-size: 1rem;">
                        </div>
                        
                        <div>
                            <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #374151;">Last Name</label>
                            <input type="text" name="last_name" required style="width: 100%; padding: 0.75rem; border: 2px solid #e5e7eb; border-radius: 10px; font-size: 1rem;">
                        </div>
                        
                        <div>
                            <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #374151;">Email</label>
                            <input type="email" name="email" required style="width: 100%; padding: 0.75rem; border: 2px solid #e5e7eb; border-radius: 10px; font-size: 1rem;">
                        </div>
                        
                        <div>
                            <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #374151;">Phone</label>
                            <input type="tel" name="phone" required style="width: 100%; padding: 0.75rem; border: 2px solid #e5e7eb; border-radius: 10px; font-size: 1rem;">
                        </div>
                        
                        <div>
                            <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #374151;">Travel Date</label>
                            <input type="date" name="travel_date" required style="width: 100%; padding: 0.75rem; border: 2px solid #e5e7eb; border-radius: 10px; font-size: 1rem;">
                        </div>
                        
                        <div>
                            <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #374151;">Number of People</label>
                            <select name="number_of_people" required style="width: 100%; padding: 0.75rem; border: 2px solid #e5e7eb; border-radius: 10px; font-size: 1rem;">
                                @for($i = 1; $i <= $tour->max_people; $i++)
                                <option value="{{ $i }}">{{ $i }} {{ $i == 1 ? 'person' : 'people' }}</option>
                                @endfor
                            </select>
                        </div>
                        
                        <div>
                            <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #374151;">Special Requirements (Optional)</label>
                            <textarea name="special_requirements" rows="3" style="width: 100%; padding: 0.75rem; border: 2px solid #e5e7eb; border-radius: 10px; font-size: 1rem; resize: vertical;" placeholder="Any dietary restrictions, accessibility needs, etc."></textarea>
                        </div>
                        
                        <button type="submit" class="cta-button" style="width: 100%; margin-top: 1rem;">
                            <i class="fas fa-calendar-check" style="margin-right: 0.5rem;"></i>
                            Book This Tour
                        </button>
                    </form>

                    <div style="margin-top: 2rem; padding-top: 2rem; border-top: 1px solid #e5e7eb; text-align: center;">
                        <p style="color: #6b7280; font-size: 0.9rem; margin-bottom: 1rem;">Need help or have questions?</p>
                        <a href="tel:+255123456789" style="color: #2563eb; text-decoration: none; font-weight: 600;">
                            <i class="fas fa-phone" style="margin-right: 0.5rem;"></i>
                            +255 123 456 789
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Tours -->
@if($relatedTours->count() > 0)
<section class="section" style="background: #f9fafb;">
    <div class="container">
        <h2 class="section-title">Similar Tours</h2>
        <div class="tours-grid">
            @foreach($relatedTours as $relatedTour)
            <div class="tour-card">
                <img src="{{ $relatedTour->image_url }}" alt="{{ $relatedTour->title }}" class="tour-image">
                <div class="tour-content">
                    <h3 class="tour-title">{{ $relatedTour->title }}</h3>
                    <p class="tour-description">{{ Str::limit($relatedTour->description, 120) }}</p>
                    <div class="tour-details">
                        <span class="tour-price">${{ number_format($relatedTour->price, 0) }}</span>
                        <span class="tour-duration">{{ $relatedTour->duration }} days</span>
                    </div>
                    <a href="{{ route('tours.show', $relatedTour->id) }}" class="cta-button" style="width: 100%; text-align: center; display: block; margin-top: 1rem;">
                        View Details
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection

@section('scripts')
<script>
    // Calculate total price based on number of people
    const pricePerPerson = {{ $tour->price }};
    const peopleSelect = document.querySelector('select[name="number_of_people"]');
    
    if (peopleSelect) {
        peopleSelect.addEventListener('change', function() {
            const numberOfPeople = parseInt(this.value);
            const totalPrice = pricePerPerson * numberOfPeople;
            
            // Update price display (you could add this functionality)
            console.log('Total price:', totalPrice);
        });
    }

    // Form validation
    const bookingForm = document.querySelector('form');
    if (bookingForm) {
        bookingForm.addEventListener('submit', function(e) {
            const travelDate = new Date(document.querySelector('input[name="travel_date"]').value);
            const today = new Date();
            
            if (travelDate <= today) {
                e.preventDefault();
                alert('Please select a future date for your travel.');
                return false;
            }
        });
    }
</script>
@endsection