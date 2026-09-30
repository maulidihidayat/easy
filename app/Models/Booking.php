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
        'payment_method',
        'payment_status',
        'payment_proof',
        'amount',
        'status',
        'approved_at',
        'admin_notes',
    ];

    protected $casts = [
        'event_date' => 'date',
        'approved_at' => 'datetime',
        'amount' => 'decimal:2',
    ];

    protected $appends = [
        'payment_proof_url',
    ];

    public function getPaymentProofUrlAttribute(): ?string
    {
        return $this->payment_proof ? asset('storage/' . $this->payment_proof) : null;
    }
}
