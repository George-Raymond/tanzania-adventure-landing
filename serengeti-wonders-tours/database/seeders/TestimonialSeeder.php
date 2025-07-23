<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Sarah Johnson',
                'location' => 'New York, USA',
                'content' => 'The Serengeti migration safari was absolutely breathtaking! Our guide was incredibly knowledgeable and we saw the Big Five in just three days. The accommodations were luxurious and the whole experience exceeded our expectations.',
                'rating' => 5,
                'avatar_url' => 'https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80',
                'is_featured' => true
            ],
            [
                'name' => 'Michael Chen',
                'location' => 'Sydney, Australia',
                'content' => 'Climbing Kilimanjaro base camp was challenging but so rewarding. The views were spectacular and our guide made sure we were safe throughout the journey. Highly recommend this adventure to anyone seeking a unique experience.',
                'rating' => 5,
                'avatar_url' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80',
                'is_featured' => true
            ],
            [
                'name' => 'Emma Thompson',
                'location' => 'London, UK',
                'content' => 'The Ngorongoro Crater tour was magical! We saw so many animals in their natural habitat. The crater is like a natural zoo but even better. Our photographer guide helped us capture amazing memories.',
                'rating' => 5,
                'avatar_url' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80',
                'is_featured' => true
            ],
            [
                'name' => 'David Rodriguez',
                'location' => 'Madrid, Spain',
                'content' => 'Fantastic organization and attention to detail. The ultimate Tanzania safari covered everything we wanted to see and more. The hot air balloon ride over the Serengeti was the highlight of our trip.',
                'rating' => 5,
                'avatar_url' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80',
                'is_featured' => true
            ],
            [
                'name' => 'Lisa Anderson',
                'location' => 'Toronto, Canada',
                'content' => 'The tree-climbing lions in Lake Manyara were incredible to witness. Such a unique behavior that you can only see in Tanzania. The whole safari was well-organized and our guide was passionate about wildlife conservation.',
                'rating' => 5,
                'avatar_url' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80',
                'is_featured' => true
            ],
            [
                'name' => 'James Wilson',
                'location' => 'Cape Town, South Africa',
                'content' => 'As someone who has been on many safaris across Africa, I can say this was exceptional. The Tarangire elephant herds were massive and the baobab trees created such a dramatic landscape. Professional service throughout.',
                'rating' => 5,
                'avatar_url' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80',
                'is_featured' => true
            ]
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
