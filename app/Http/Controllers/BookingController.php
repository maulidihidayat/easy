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
            'event_date' => ['required', 'date', 'after_or_equal:today'],
            'location' => ['nullable', 'string', 'max:255'],
            'details' => ['nullable', 'string'],
            'payment_method' => ['required', 'string', 'max:100'],
            'amount' => ['nullable', 'numeric', 'min:0'],
            'payment_proof' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp', 'max:5120'],
        ], [
            'full_name.required' => 'Nama lengkap wajib diisi.',
            'phone.required' => 'Nomor WhatsApp / telepon wajib diisi.',
            'email.required' => 'Alamat email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'service_type.required' => 'Silakan pilih jenis layanan.',
            'event_date.required' => 'Silakan pilih tanggal acara pada kalender.',
            'event_date.after_or_equal' => 'Tanggal acara tidak boleh di masa lalu.',
            'payment_method.required' => 'Silakan pilih metode pembayaran.',
            'payment_proof.image' => 'File bukti pembayaran harus berupa gambar.',
            'payment_proof.mimes' => 'Format bukti pembayaran harus JPG, JPEG, PNG, atau WEBP.',
            'payment_proof.max' => 'Ukuran file bukti pembayaran maksimal 5MB.',
        ]);

        // Cek apakah tanggal sudah dibooking oleh klien lain (Bentrok Jadwal)
        $existingBooking = Booking::query()
            ->whereDate('event_date', $validated['event_date'])
            ->whereIn('status', ['approved', 'pending'])
            ->first();

        if ($existingBooking) {
            $formattedDate = \Carbon\Carbon::parse($validated['event_date'])->translatedFormat('d F Y');
            return back()->withInput()->withErrors([
                'event_date' => "Mohon maaf, tanggal {$formattedDate} sudah dipesan oleh klien lain. Silakan pilih tanggal lain yang masih bertanda hijau pada kalender jadwal."
            ]);
        }

        // Upload bukti pembayaran jika dilampirkan
        if ($request->hasFile('payment_proof')) {
            $file = $request->file('payment_proof');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('payment_proofs', $fileName, 'public');
            $validated['payment_proof'] = $path;
            $validated['payment_status'] = 'pending';
        } else {
            $validated['payment_status'] = ($request->payment_method === 'Bayar di Lokasi / Cash') ? 'unpaid' : 'pending';
        }

        $validated['status'] = 'pending';

        // Set default package price if amount is empty
        if (empty($validated['amount'])) {
            $prices = [
                'Prewedding Photography' => 2500000,
                'Wedding Photography' => 5000000,
                'Portrait Photography' => 1500000,
                'Event Photography' => 2000000,
                'Family Photography' => 1800000,
            ];
            $validated['amount'] = $prices[$validated['service_type']] ?? null;
        }

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
