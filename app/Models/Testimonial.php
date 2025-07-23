<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'name',
        'country',
        'rating',
        'text',
        'image',
        'order',
        'active'
    ];

    protected $casts = [
        'active' => 'boolean'
    ];
}