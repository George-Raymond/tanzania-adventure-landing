<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = [
        'name',
        'image',
        'description',
        'highlights',
        'order',
        'active'
    ];

    protected $casts = [
        'highlights' => 'array',
        'active' => 'boolean'
    ];
}