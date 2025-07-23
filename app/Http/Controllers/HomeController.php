<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        $destinations = [
            [
                'name' => 'Serengeti National Park',
                'image' => 'serengeti-migration.jpg',
                'description' => 'Witness the Great Migration and endless plains filled with wildlife',
                'highlights' => ['Great Migration', 'Big Five', 'Hot Air Balloon Safaris']
            ],
            [
                'name' => 'Ngorongoro Crater',
                'image' => 'ngorongoro-crater.jpg',
                'description' => 'The world\'s largest inactive volcanic caldera, a natural wonder',
                'highlights' => ['UNESCO World Heritage', 'Dense Wildlife', 'Maasai Culture']
            ],
            [
                'name' => 'Mount Kilimanjaro',
                'image' => 'kilimanjaro-peak.jpg',
                'description' => 'Africa\'s highest peak and the world\'s tallest freestanding mountain',
                'highlights' => ['Uhuru Peak', '5 Climate Zones', 'Guided Treks']
            ],
            [
                'name' => 'Zanzibar Island',
                'image' => 'zanzibar-beach.jpg',
                'description' => 'Pristine beaches, spice tours, and rich Swahili culture',
                'highlights' => ['White Sand Beaches', 'Stone Town', 'Spice Tours']
            ]
        ];

        $services = [
            [
                'icon' => 'camera',
                'title' => 'Game Drives',
                'description' => 'Professional guided safaris with expert local guides and comfortable 4WD vehicles'
            ],
            [
                'icon' => 'users',
                'title' => 'Cultural Tours',
                'description' => 'Authentic experiences with local communities, traditional dances, and cultural immersion'
            ],
            [
                'icon' => 'map-pin',
                'title' => 'Airport Transfers',
                'description' => 'Reliable transportation from airports to your accommodation with meet & greet service'
            ],
            [
                'icon' => 'mountain',
                'title' => 'Mountain Climbing',
                'description' => 'Expert-guided treks to Kilimanjaro summit with safety equipment and experienced porters'
            ]
        ];

        $whyChooseUs = [
            [
                'icon' => 'users',
                'title' => 'Local Experts',
                'description' => 'Born and raised in Tanzania, our guides know every secret spot and wildlife behavior'
            ],
            [
                'icon' => 'star',
                'title' => 'Tailor-made Itineraries',
                'description' => 'Every safari is customized to your interests, budget, and travel preferences'
            ],
            [
                'icon' => 'shield',
                'title' => 'Affordable Packages',
                'description' => 'Best value for money with transparent pricing and no hidden costs'
            ],
            [
                'icon' => 'clock',
                'title' => '24/7 Customer Support',
                'description' => 'Round-the-clock assistance before, during, and after your Tanzanian adventure'
            ]
        ];

        $testimonials = [
            [
                'name' => 'Sarah Johnson',
                'country' => 'USA',
                'rating' => 5,
                'text' => 'Absolutely incredible experience! The guides were knowledgeable and we saw all the Big Five. Serengeti Wonders made our dream safari come true!',
                'image' => 'https://images.unsplash.com/photo-1494790108755-2616b612b550?w=150&h=150&fit=crop&crop=face'
            ],
            [
                'name' => 'Marcus Weber',
                'country' => 'Germany',
                'rating' => 5,
                'text' => 'From Kilimanjaro to Zanzibar, every moment was perfectly organized. The cultural tour with Maasai community was the highlight of our trip!',
                'image' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=150&h=150&fit=crop&crop=face'
            ],
            [
                'name' => 'Emma Thompson',
                'country' => 'UK',
                'rating' => 5,
                'text' => 'Best safari company in Tanzania! Professional, friendly, and they really care about conservation. We\'ll definitely be back with our family!',
                'image' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=150&h=150&fit=crop&crop=face'
            ]
        ];

        return view('home', compact('destinations', 'services', 'whyChooseUs', 'testimonials'));
    }

    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|max:1000'
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ]);

        return redirect()->route('home')->with('success', 'Asante Sana! 🦁 Your message has been sent. We\'ll contact you within 24 hours!');
    }
}