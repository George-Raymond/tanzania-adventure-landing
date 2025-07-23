<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Destination;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create destinations
        $destinations = [
            [
                'name' => 'Serengeti National Park',
                'image' => '/assets/serengeti-migration.jpg',
                'description' => 'Witness the Great Migration and endless plains filled with wildlife',
                'highlights' => json_encode(['Great Migration', 'Big Five', 'Hot Air Balloon Safaris']),
                'order' => 1
            ],
            [
                'name' => 'Ngorongoro Crater',
                'image' => '/assets/ngorongoro-crater.jpg',
                'description' => 'The world\'s largest inactive volcanic caldera, a natural wonder',
                'highlights' => json_encode(['UNESCO World Heritage', 'Dense Wildlife', 'Maasai Culture']),
                'order' => 2
            ],
            [
                'name' => 'Mount Kilimanjaro',
                'image' => '/assets/kilimanjaro-peak.jpg',
                'description' => 'Africa\'s highest peak and the world\'s tallest freestanding mountain',
                'highlights' => json_encode(['Uhuru Peak', '5 Climate Zones', 'Guided Treks']),
                'order' => 3
            ],
            [
                'name' => 'Zanzibar Island',
                'image' => '/assets/zanzibar-beach.jpg',
                'description' => 'Pristine beaches, spice tours, and rich Swahili culture',
                'highlights' => json_encode(['White Sand Beaches', 'Stone Town', 'Spice Tours']),
                'order' => 4
            ]
        ];

        foreach ($destinations as $destination) {
            Destination::create($destination);
        }

        // Create services
        $services = [
            [
                'title' => 'Game Drives',
                'description' => 'Professional guided safaris with expert local guides and comfortable 4WD vehicles',
                'icon' => 'camera',
                'order' => 1
            ],
            [
                'title' => 'Cultural Tours',
                'description' => 'Authentic experiences with local communities, traditional dances, and cultural immersion',
                'icon' => 'users',
                'order' => 2
            ],
            [
                'title' => 'Airport Transfers',
                'description' => 'Reliable transportation from airports to your accommodation with meet & greet service',
                'icon' => 'map-pin',
                'order' => 3
            ],
            [
                'title' => 'Mountain Climbing',
                'description' => 'Expert-guided treks to Kilimanjaro summit with safety equipment and experienced porters',
                'icon' => 'mountain',
                'order' => 4
            ]
        ];

        foreach ($services as $service) {
            Service::create($service);
        }

        // Create testimonials
        $testimonials = [
            [
                'name' => 'Sarah Johnson',
                'country' => 'USA',
                'rating' => 5,
                'text' => 'Absolutely incredible experience! The guides were knowledgeable and we saw all the Big Five. Serengeti Wonders made our dream safari come true!',
                'image' => 'https://images.unsplash.com/photo-1494790108755-2616b612b550?w=150&h=150&fit=crop&crop=face',
                'order' => 1
            ],
            [
                'name' => 'Marcus Weber',
                'country' => 'Germany',
                'rating' => 5,
                'text' => 'From Kilimanjaro to Zanzibar, every moment was perfectly organized. The cultural tour with Maasai community was the highlight of our trip!',
                'image' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=150&h=150&fit=crop&crop=face',
                'order' => 2
            ],
            [
                'name' => 'Emma Thompson',
                'country' => 'UK',
                'rating' => 5,
                'text' => 'Best safari company in Tanzania! Professional, friendly, and they really care about conservation. We\'ll definitely be back with our family!',
                'image' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=150&h=150&fit=crop&crop=face',
                'order' => 3
            ]
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}