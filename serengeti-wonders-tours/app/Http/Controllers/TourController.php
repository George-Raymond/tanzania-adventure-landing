<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;

class TourController extends Controller
{
    public function index(Request $request)
    {
        $query = Tour::where('is_active', true);
        
        // Filter by duration
        if ($request->filled('duration')) {
            switch ($request->duration) {
                case '1-3':
                    $query->whereBetween('duration', [1, 3]);
                    break;
                case '4-7':
                    $query->whereBetween('duration', [4, 7]);
                    break;
                case '8+':
                    $query->where('duration', '>=', 8);
                    break;
            }
        }
        
        // Filter by price range
        if ($request->filled('price_range')) {
            switch ($request->price_range) {
                case '0-1000':
                    $query->whereBetween('price', [0, 1000]);
                    break;
                case '1000-3000':
                    $query->whereBetween('price', [1000, 3000]);
                    break;
                case '3000+':
                    $query->where('price', '>=', 3000);
                    break;
            }
        }
        
        // Filter by difficulty
        if ($request->filled('difficulty')) {
            $query->where('difficulty_level', $request->difficulty);
        }
        
        $tours = $query->orderBy('is_featured', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(12);
            
        return view('tours.index', compact('tours'));
    }
    
    public function show(Tour $tour)
    {
        if (!$tour->is_active) {
            abort(404);
        }
        
        $relatedTours = Tour::where('is_active', true)
            ->where('id', '!=', $tour->id)
            ->where('location', $tour->location)
            ->take(3)
            ->get();
            
        return view('tours.show', compact('tour', 'relatedTours'));
    }
}
