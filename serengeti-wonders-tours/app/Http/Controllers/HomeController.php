<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $featuredTours = Tour::where('is_featured', true)
            ->where('is_active', true)
            ->take(6)
            ->get();
            
        $testimonials = Testimonial::where('is_featured', true)
            ->take(6)
            ->get();
            
        return view('home', compact('featuredTours', 'testimonials'));
    }
}
