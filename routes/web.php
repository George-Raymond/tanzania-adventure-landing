<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Home page route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Contact form submission
Route::post('/contact', [HomeController::class, 'contact'])->name('contact.submit');

// Newsletter subscription
Route::post('/newsletter', [HomeController::class, 'newsletter'])->name('newsletter.subscribe');