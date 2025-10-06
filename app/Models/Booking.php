<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'full_name',
        'phone',
        'email',
        'service_type',
        'event_date',
        'location',
        'details',
        'status',
        'approved_at',
        'admin_notes',
    ];

    protected $casts = [
        'event_date' => 'date',
        'approved_at' => 'datetime',
    ];
}
