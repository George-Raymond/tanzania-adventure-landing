<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Display the home page
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Handle contact form submission
     */
    public function contact(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|max:1000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Here you would typically send an email
            // For now, we'll just log the contact attempt
            \Log::info('Contact form submission', [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message,
                'timestamp' => now()
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Thank you for your message! We will get back to you soon.'
            ]);

        } catch (\Exception $e) {
            \Log::error('Contact form error: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Sorry, there was an error sending your message. Please try again.'
            ], 500);
        }
    }

    /**
     * Handle newsletter subscription
     */
    public function newsletter(Request $request)
    {
        // Validate the email
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Here you would typically save to database or send to mailing service
            \Log::info('Newsletter subscription', [
                'email' => $request->email,
                'timestamp' => now()
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Thank you for subscribing to our newsletter!'
            ]);

        } catch (\Exception $e) {
            \Log::error('Newsletter subscription error: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Sorry, there was an error with your subscription. Please try again.'
            ], 500);
        }
    }
}