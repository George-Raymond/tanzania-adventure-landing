<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\BookingController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tours', [TourController::class, 'index'])->name('tours');
Route::get('/tours/{tour}', [TourController::class, 'show'])->name('tours.show');
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
