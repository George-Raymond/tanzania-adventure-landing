<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
        'submitted_at'
    ];

    protected $casts = [
        'submitted_at' => 'datetime',
    ];

    /**
     * Get the formatted submission date
     */
    public function getFormattedSubmittedAtAttribute()
    {
        return $this->submitted_at->format('M d, Y \a\t g:i A');
    }

    /**
     * Scope for recent contacts
     */
    public function scopeRecent($query)
    {
        return $query->orderBy('submitted_at', 'desc');
    }
}