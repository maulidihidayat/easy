<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingApiController extends Controller
{
    /**
     * Get all bookings for admin panel
     */
    public function index()
    {
        $bookings = Booking::orderBy('created_at', 'desc')->get();
        
        return response()->json($bookings);
    }
    
    /**
     * Get booking by ID
     */
    public function show(Booking $booking)
    {
        return response()->json($booking);
    }
}
