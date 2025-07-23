<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tour;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tours = [
            [
                'title' => 'Serengeti Great Migration Safari',
                'description' => 'Witness the spectacular Great Migration as millions of wildebeest, zebras, and gazelles traverse the Serengeti plains. This unforgettable journey offers front-row seats to one of nature\'s most incredible phenomena.',
                'price' => 2850,
                'duration' => 7,
                'location' => 'Serengeti National Park',
                'image_url' => 'https://images.unsplash.com/photo-1516426122078-c23e76319801?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'highlights' => json_encode([
                    'Witness the Great Migration',
                    'Big Five game viewing',
                    'Hot air balloon safari',
                    'Cultural Maasai village visit',
                    'Professional safari guide'
                ]),
                'included' => json_encode([
                    'Accommodation in luxury tented camps',
                    'All meals and beverages',
                    'Game drives in 4x4 vehicles',
                    'Park fees and permits',
                    'Airport transfers'
                ]),
                'max_people' => 8,
                'difficulty_level' => 'moderate',
                'is_featured' => true,
                'is_active' => true
            ],
            [
                'title' => 'Ngorongoro Crater Adventure',
                'description' => 'Explore the world\'s largest inactive volcanic caldera, home to an incredible concentration of wildlife. Experience the unique ecosystem of the Ngorongoro Crater with its diverse landscapes and abundant game.',
                'price' => 1950,
                'duration' => 4,
                'location' => 'Ngorongoro Conservation Area',
                'image_url' => 'https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'highlights' => json_encode([
                    'Ngorongoro Crater floor game drive',
                    'Black rhino sightings',
                    'Flamingo viewing at Lake Magadi',
                    'Olduvai Gorge visit',
                    'Maasai cultural experience'
                ]),
                'included' => json_encode([
                    'Crater rim lodge accommodation',
                    'All meals',
                    '4x4 crater tour vehicle',
                    'Crater service fees',
                    'Professional guide'
                ]),
                'max_people' => 6,
                'difficulty_level' => 'easy',
                'is_featured' => true,
                'is_active' => true
            ],
            [
                'title' => 'Kilimanjaro Base Camp Trek',
                'description' => 'Challenge yourself with a trek to the base of Africa\'s highest peak. This adventure combines stunning mountain scenery with wildlife viewing in the foothills of Mount Kilimanjaro.',
                'price' => 1650,
                'duration' => 5,
                'location' => 'Mount Kilimanjaro',
                'image_url' => 'https://images.unsplash.com/photo-1609198092458-38a293c7ac4b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'highlights' => json_encode([
                    'Kilimanjaro base camp trek',
                    'Mountain wildlife viewing',
                    'Local Chagga tribe interaction',
                    'Coffee plantation tour',
                    'Waterfall hiking'
                ]),
                'included' => json_encode([
                    'Mountain lodge accommodation',
                    'All meals and snacks',
                    'Trekking equipment',
                    'Professional mountain guide',
                    'Transportation'
                ]),
                'max_people' => 10,
                'difficulty_level' => 'challenging',
                'is_featured' => true,
                'is_active' => true
            ],
            [
                'title' => 'Tarangire Elephant Safari',
                'description' => 'Discover Tarangire National Park, famous for its large herds of elephants and iconic baobab trees. This safari offers excellent wildlife viewing and stunning landscapes.',
                'price' => 1350,
                'duration' => 3,
                'location' => 'Tarangire National Park',
                'image_url' => 'https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'highlights' => json_encode([
                    'Large elephant herds',
                    'Ancient baobab trees',
                    'Over 550 bird species',
                    'Tree-climbing pythons',
                    'Tarangire River wildlife'
                ]),
                'included' => json_encode([
                    'Safari camp accommodation',
                    'All meals',
                    'Game drives',
                    'Park fees',
                    'Expert guide'
                ]),
                'max_people' => 12,
                'difficulty_level' => 'easy',
                'is_featured' => false,
                'is_active' => true
            ],
            [
                'title' => 'Lake Manyara Tree-Climbing Lions',
                'description' => 'Experience the unique phenomenon of tree-climbing lions in Lake Manyara National Park. This compact park offers diverse ecosystems and incredible wildlife density.',
                'price' => 950,
                'duration' => 2,
                'location' => 'Lake Manyara National Park',
                'image_url' => 'https://images.unsplash.com/photo-1564760055775-d63b17a55c44?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'highlights' => json_encode([
                    'Tree-climbing lions',
                    'Flamingo flocks',
                    'Hot springs',
                    'Diverse bird life',
                    'Ground water forest'
                ]),
                'included' => json_encode([
                    'Lodge accommodation',
                    'All meals',
                    'Game drives',
                    'Park entrance fees',
                    'Professional guide'
                ]),
                'max_people' => 8,
                'difficulty_level' => 'easy',
                'is_featured' => false,
                'is_active' => true
            ],
            [
                'title' => 'Ultimate Tanzania Safari',
                'description' => 'The complete Tanzania experience combining all major parks and attractions. This comprehensive safari covers Serengeti, Ngorongoro, Tarangire, and Lake Manyara for the ultimate wildlife adventure.',
                'price' => 4500,
                'duration' => 12,
                'location' => 'Multiple Parks',
                'image_url' => 'https://images.unsplash.com/photo-1549366021-9f761d040a94?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'highlights' => json_encode([
                    'All major Tanzania parks',
                    'Great Migration (seasonal)',
                    'Big Five encounters',
                    'Cultural experiences',
                    'Hot air balloon safari',
                    'Walking safaris'
                ]),
                'included' => json_encode([
                    'Luxury accommodation throughout',
                    'All meals and beverages',
                    'Private 4x4 vehicle',
                    'All park fees',
                    'Professional guide',
                    'Airport transfers',
                    'Cultural visits'
                ]),
                'max_people' => 6,
                'difficulty_level' => 'moderate',
                'is_featured' => true,
                'is_active' => true
            ]
        ];

        foreach ($tours as $tour) {
            Tour::create($tour);
        }
    }
}
