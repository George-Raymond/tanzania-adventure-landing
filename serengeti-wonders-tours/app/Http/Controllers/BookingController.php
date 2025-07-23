<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Tour;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'tour_id' => 'required|exists:tours,id',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'travel_date' => 'required|date|after:today',
            'number_of_people' => 'required|integer|min:1',
            'special_requirements' => 'nullable|string|max:1000',
        ]);

        $tour = Tour::findOrFail($request->tour_id);
        
        // Validate that the number of people doesn't exceed tour capacity
        if ($request->number_of_people > $tour->max_people) {
            return back()->withErrors(['number_of_people' => 'The number of people exceeds the maximum capacity for this tour.']);
        }

        // Calculate total amount
        $totalAmount = $tour->price * $request->number_of_people;

        $booking = Booking::create([
            'tour_id' => $request->tour_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'travel_date' => $request->travel_date,
            'number_of_people' => $request->number_of_people,
            'special_requirements' => $request->special_requirements,
            'total_amount' => $totalAmount,
            'status' => 'pending',
        ]);

        return redirect()->back()->with('success', 'Your booking request has been submitted successfully! We will contact you shortly to confirm your reservation.');
    }
}
