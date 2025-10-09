<?php

namespace App\Services;

use App\Models\Booking;

class WhatsAppService
{
    private string $phoneNumber;
    
    public function __construct()
    {
        $this->phoneNumber = '6281703376283'; // Nomor WhatsApp Studio Foto Cihuy
    }
    
    /**
     * Generate WhatsApp message for booking
     */
    public function generateBookingMessage(Booking $booking): string
    {
        $message = "🎉 *BOOKING BARU - STUDIO FOTO CIHUY* 🎉\n\n";
        $message .= "📋 *DETAIL BOOKING:*\n";
        $message .= "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n\n";
        
        $message .= "👤 *Nama Lengkap:* " . $booking->full_name . "\n";
        $message .= "📞 *Nomor Telepon:* " . $booking->phone . "\n";
        $message .= "📧 *Email:* " . $booking->email . "\n\n";
        
        $message .= "🎯 *Jenis Layanan:* " . $booking->service_type . "\n";
        
        if ($booking->event_date) {
            $message .= "📅 *Tanggal Acara:* " . \Carbon\Carbon::parse($booking->event_date)->format('d M Y') . "\n";
        }
        
        if ($booking->location) {
            $message .= "📍 *Lokasi Acara:* " . $booking->location . "\n";
        }
        
        if ($booking->details) {
            $message .= "📝 *Detail Kebutuhan:*\n" . $booking->details . "\n";
        }
        
        $message .= "\n━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
        $message .= "⏰ *Waktu Booking:* " . $booking->created_at->format('d M Y, H:i') . "\n";
        // $message .= "🆔 *ID Booking:* #" . $booking->id . "\n\n";
        
        $message .= "💡 *Langkah Selanjutnya:*\n";
        $message .= "1. Konfirmasi ketersediaan tanggal\n";
        $message .= "2. Kirim detail paket dan harga\n";
        $message .= "3. Atur jadwal konsultasi\n";
        $message .= "4. Konfirmasi booking\n\n";
        
        $message .= "📱 *Balas pesan ini untuk konfirmasi*";
        
        return $message;
    }
    
    /**
     * Generate WhatsApp URL with message
     */
    public function generateWhatsAppUrl(string $message): string
    {
        $encodedMessage = urlencode($message);
        return "https://wa.me/{$this->phoneNumber}?text={$encodedMessage}";
    }
    
    /**
     * Send booking notification to WhatsApp
     */
    public function sendBookingNotification(Booking $booking): string
    {
        $message = $this->generateBookingMessage($booking);
        return $this->generateWhatsAppUrl($message);
    }
    
    /**
     * Generate customer confirmation message
     */
    public function generateCustomerMessage(Booking $booking): string
    {
        $message = "🎉 *TERIMA KASIH ATAS BOOKING ANDA!* 🎉\n\n";
        $message .= "Halo " . $booking->full_name . ",\n\n";
        $message .= "Kami telah menerima booking Anda untuk layanan *" . $booking->service_type . "*.\n\n";
        
        $message .= "📋 *Detail Booking Anda:*\n";
        $message .= "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
        $message .= "🆔 ID Booking: #" . $booking->id . "\n";
        $message .= "📅 Tanggal Booking: " . $booking->created_at->format('d M Y, H:i') . "\n";
        
        if ($booking->event_date) {
            $message .= "📅 Tanggal Acara: " . \Carbon\Carbon::parse($booking->event_date)->format('d M Y') . "\n";
        }
        
        $message .= "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n\n";
        
        $message .= "⏳ *Tim kami akan segera menghubungi Anda dalam 24 jam untuk:*\n";
        $message .= "• Konfirmasi ketersediaan\n";
        $message .= "• Detail paket dan harga\n";
        $message .= "• Jadwal konsultasi\n";
        $message .= "• Persiapan sesi foto\n\n";
        
        $message .= "📞 *Kontak Darurat:*\n";
        $message .= "WhatsApp: +62 817-0337-6283\n";
        $message .= "Email: info@studiofotocihuy.com\n\n";
        
        $message .= "Terima kasih telah mempercayai Studio Foto Cihuy! 🙏\n";
        $message .= "Kami siap mengabadikan momen berharga Anda! 📸✨";
        
        return $message;
    }
    
    /**
     * Generate approval message for customer
     */
    public function generateApprovalMessage(Booking $booking): string
    {
        $message = "🎉 *SELAMAT! BOOKING ANDA DISETUJUI* 🎉\n\n";
        $message .= "Halo " . $booking->full_name . ",\n\n";
        $message .= "Kami dengan senang hati menginformasikan bahwa booking Anda untuk layanan *" . $booking->service_type . "* telah *DISETUJUI*! 🎊\n\n";
        
        $message .= "📋 *Detail Booking Anda:*\n";
        $message .= "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
        $message .= "🆔 ID Booking: #" . $booking->id . "\n";
        $message .= "📅 Tanggal Booking: " . $booking->created_at->format('d M Y, H:i') . "\n";
        $message .= "✅ Status: DISETUJUI\n";
        $message .= "📅 Tanggal Approval: " . $booking->approved_at->format('d M Y, H:i') . "\n";
        
        if ($booking->event_date) {
            $message .= "📅 Tanggal Acara: " . \Carbon\Carbon::parse($booking->event_date)->format('d M Y') . "\n";
        }
        
        if ($booking->location) {
            $message .= "📍 Lokasi: " . $booking->location . "\n";
        }
        
        $message .= "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n\n";
        
        $message .= "🎯 *Langkah Selanjutnya:*\n";
        $message .= "1. 📞 Tim kami akan menghubungi Anda dalam 24 jam\n";
        $message .= "2. 💰 Diskusi detail paket dan harga\n";
        $message .= "3. 📅 Konfirmasi jadwal dan lokasi\n";
        $message .= "4. 📝 Persiapan kontrak dan pembayaran\n";
        $message .= "5. 📸 Persiapan sesi foto\n\n";
        
        if ($booking->admin_notes) {
            $message .= "📝 *Catatan dari Tim:*\n";
            $message .= $booking->admin_notes . "\n\n";
        }
        
        $message .= "📞 *Kontak Tim:*\n";
        $message .= "WhatsApp: +62 817-0337-6283\n";
        $message .= "Email: info@studiofotocihuy.com\n\n";
        
        $message .= "Terima kasih telah mempercayai Studio Foto Cihuy! 🙏\n";
        $message .= "Kami siap mengabadikan momen berharga Anda! 📸✨\n\n";
        $message .= "---\n";
        $message .= "Studio Foto Cihuy\n";
        $message .= "Mengabadikan momen berharga dengan teknologi terdepan";
        
        return $message;
    }

    /**
     * Get WhatsApp contact URL
     */
    public function getContactUrl(): string
    {
        return "https://wa.me/{$this->phoneNumber}";
    }
}
