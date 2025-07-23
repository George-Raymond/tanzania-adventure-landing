<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title',
        'description',
        'icon',
        'order',
        'active'
    ];

    protected $casts = [
        'active' => 'boolean'
    ];
}