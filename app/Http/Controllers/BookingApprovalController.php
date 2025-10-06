<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Services\WhatsAppService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BookingApprovalController extends Controller
{
    protected WhatsAppService $whatsAppService;
    
    public function __construct(WhatsAppService $whatsAppService)
    {
        $this->whatsAppService = $whatsAppService;
    }
    
    /**
     * Approve booking and generate WhatsApp message
     */
    public function approve(Request $request, Booking $booking)
    {
        $request->validate([
            'admin_notes' => 'nullable|string|max:1000',
        ]);
        
        try {
            // Update booking status
            $booking->update([
                'status' => 'approved',
                'approved_at' => now(),
                'admin_notes' => $request->admin_notes,
            ]);
            
            // Generate WhatsApp approval message
            $approvalMessage = $this->whatsAppService->generateApprovalMessage($booking);
            $whatsAppUrl = $this->whatsAppService->generateWhatsAppUrl($approvalMessage);
            
            // Log the approval
            Log::info('Booking approved', [
                'booking_id' => $booking->id,
                'customer_name' => $booking->full_name,
                'service_type' => $booking->service_type,
                'whatsapp_url' => $whatsAppUrl
            ]);
            
            return response()->json([
                'success' => true,
                'message' => 'Booking berhasil disetujui!',
                'whatsapp_url' => $whatsAppUrl,
                'booking' => $booking->fresh()
            ]);
            
        } catch (\Exception $e) {
            Log::error('Booking approval failed', [
                'booking_id' => $booking->id,
                'error' => $e->getMessage()
            ]);
            
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyetujui booking: ' . $e->getMessage()
            ], 500);
        }
    }
    
    /**
     * Reject booking
     */
    public function reject(Request $request, Booking $booking)
    {
        $request->validate([
            'admin_notes' => 'required|string|max:1000',
        ]);
        
        try {
            // Update booking status
            $booking->update([
                'status' => 'rejected',
                'admin_notes' => $request->admin_notes,
            ]);
            
            // Log the rejection
            Log::info('Booking rejected', [
                'booking_id' => $booking->id,
                'customer_name' => $booking->full_name,
                'reason' => $request->admin_notes
            ]);
            
            return response()->json([
                'success' => true,
                'message' => 'Booking berhasil ditolak!',
                'booking' => $booking->fresh()
            ]);
            
        } catch (\Exception $e) {
            Log::error('Booking rejection failed', [
                'booking_id' => $booking->id,
                'error' => $e->getMessage()
            ]);
            
            return response()->json([
                'success' => false,
                'message' => 'Gagal menolak booking: ' . $e->getMessage()
            ], 500);
        }
    }
    
    /**
     * Get WhatsApp approval URL for a booking
     */
    public function getApprovalWhatsAppUrl(Booking $booking)
    {
        try {
            $approvalMessage = $this->whatsAppService->generateApprovalMessage($booking);
            return $this->whatsAppService->generateWhatsAppUrl($approvalMessage);
        } catch (\Exception $e) {
            Log::error('Failed to generate approval WhatsApp URL', [
                'booking_id' => $booking->id,
                'error' => $e->getMessage()
            ]);
            
            return response()->json([
                'success' => false,
                'message' => 'Gagal generate URL WhatsApp: ' . $e->getMessage()
            ], 500);
        }
    }
}
