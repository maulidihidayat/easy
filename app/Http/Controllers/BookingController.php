<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Services\WhatsAppService;
use Illuminate\Support\Facades\Log;

class BookingController extends Controller
{
    protected WhatsAppService $whatsAppService;
    
    public function __construct(WhatsAppService $whatsAppService)
    {
        $this->whatsAppService = $whatsAppService;
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:255'],
            'service_type' => ['required', 'string', 'max:255'],
            'event_date' => ['nullable', 'date'],
            'location' => ['nullable', 'string', 'max:255'],
            'details' => ['nullable', 'string'],
        ]);

        // Create booking
        $booking = Booking::create($validated);
        
        try {
            // Generate WhatsApp URLs
            $adminWhatsAppUrl = $this->whatsAppService->sendBookingNotification($booking);
            $customerWhatsAppUrl = $this->whatsAppService->generateWhatsAppUrl(
                $this->whatsAppService->generateCustomerMessage($booking)
            );
            
            // Log the booking for admin notification
            Log::info('New booking created', [
                'booking_id' => $booking->id,
                'customer_name' => $booking->full_name,
                'service_type' => $booking->service_type,
                'admin_whatsapp_url' => $adminWhatsAppUrl
            ]);
            
            // Return success with WhatsApp URLs
            return back()->with([
                'success' => 'Terima kasih! Permintaan Anda telah dikirim. Tim kami akan menghubungi Anda dalam 24 jam.',
                'booking_id' => $booking->id,
                'admin_whatsapp_url' => $adminWhatsAppUrl,
                'customer_whatsapp_url' => $customerWhatsAppUrl,
                'show_whatsapp_buttons' => true
            ]);
            
        } catch (\Exception $e) {
            // Log error but don't fail the booking
            Log::error('WhatsApp notification failed', [
                'booking_id' => $booking->id,
                'error' => $e->getMessage()
            ]);
            
            return back()->with('success', 'Terima kasih! Permintaan Anda telah dikirim. Tim kami akan menghubungi Anda dalam 24 jam.');
        }
    }
    
    /**
     * Get WhatsApp notification URL for admin
     */
    public function getAdminWhatsAppUrl(Booking $booking)
    {
        return $this->whatsAppService->sendBookingNotification($booking);
    }
    
    /**
     * Get customer confirmation message URL
     */
    public function getCustomerWhatsAppUrl(Booking $booking)
    {
        $message = $this->whatsAppService->generateCustomerMessage($booking);
        return $this->whatsAppService->generateWhatsAppUrl($message);
    }
}
