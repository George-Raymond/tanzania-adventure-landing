<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\ContactSubmission;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $destinations = Destination::where('active', true)
            ->orderBy('order')
            ->get();
            
        $services = Service::where('active', true)
            ->orderBy('order')
            ->get();
            
        $testimonials = Testimonial::where('active', true)
            ->orderBy('order')
            ->get();

        return view('landing', compact('destinations', 'services', 'testimonials'));
    }

    public function submitContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        ContactSubmission::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Your message has been sent. We\'ll contact you within 24 hours!'
        ]);
    }
}