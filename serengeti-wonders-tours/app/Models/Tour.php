<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'duration',
        'location',
        'image_url',
        'highlights',
        'included',
        'max_people',
        'difficulty_level',
        'is_featured',
        'is_active',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'highlights' => 'array',
        'included' => 'array',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
