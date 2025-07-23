<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Models\Contact;

class HomeController extends Controller
{
    /**
     * Display the homepage
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Handle contact form submission
     */
    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|max:5000',
        ]);

        try {
            // Save contact to database
            Contact::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'] ?? null,
                'message' => $validated['message'],
                'submitted_at' => now(),
            ]);

            // Log the contact submission
            Log::info('Contact form submitted and saved', $validated);
            
            // Here you could also send an email notification
            // Mail::to('info@serengetiwonders.com')->send(new ContactFormSubmitted($validated));
            
            return redirect()->back()->with('success', 'Asante Sana! 🦁 Your message has been sent. We\'ll contact you within 24 hours!');
            
        } catch (\Exception $e) {
            Log::error('Contact form submission failed', ['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Sorry, there was an error sending your message. Please try again.');
        }
    }
}