<?php

use Illuminate\Support\Facades\Route;
use App\Models\Portfolio;
use App\Models\Feedback;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\BookingController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    $portfolios = Portfolio::query()
        ->where('is_published', true)
        ->latest()
        ->take(9)
        ->get();

    $feedbacks = Feedback::query()
        ->where('status', 'approved')
        ->latest()
        ->take(6)
        ->get();

    // Ambil tanggal-tanggal yang sudah dibooking (status approved & pending)
    $bookedDates = \App\Models\Booking::query()
        ->whereIn('status', ['approved', 'pending'])
        ->whereNotNull('event_date')
        ->where('event_date', '>=', now()->toDateString())
        ->pluck('event_date')
        ->map(fn($d) => \Carbon\Carbon::parse($d)->format('Y-m-d'))
        ->unique()
        ->values()
        ->all();

    return view('home', compact('portfolios', 'feedbacks', 'bookedDates'));
});

Route::get('/api/booked-dates', function () {
    $bookedDates = \App\Models\Booking::query()
        ->whereIn('status', ['approved', 'pending'])
        ->whereNotNull('event_date')
        ->where('event_date', '>=', now()->toDateString())
        ->pluck('event_date')
        ->map(fn($d) => \Carbon\Carbon::parse($d)->format('Y-m-d'))
        ->unique()
        ->values()
        ->all();

    return response()->json($bookedDates);
})->name('api.booked-dates');

Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');

Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');

// WhatsApp notification routes
Route::get('/bookings/{booking}/whatsapp/admin', [BookingController::class, 'getAdminWhatsAppUrl'])->name('bookings.whatsapp.admin');
Route::get('/bookings/{booking}/whatsapp/customer', [BookingController::class, 'getCustomerWhatsAppUrl'])->name('bookings.whatsapp.customer');

// Booking approval & cancellation routes
Route::post('/bookings/{booking}/approve', [\App\Http\Controllers\BookingApprovalController::class, 'approve'])->name('bookings.approve');
Route::post('/bookings/{booking}/reject', [\App\Http\Controllers\BookingApprovalController::class, 'reject'])->name('bookings.reject');
Route::post('/bookings/{booking}/cancel', [\App\Http\Controllers\BookingApprovalController::class, 'cancel'])->name('bookings.cancel');
Route::get('/bookings/{booking}/whatsapp/approval', [\App\Http\Controllers\BookingApprovalController::class, 'getApprovalWhatsAppUrl'])->name('bookings.whatsapp.approval');
Route::get('/bookings/{booking}/whatsapp/cancel', [\App\Http\Controllers\BookingApprovalController::class, 'getCancelWhatsAppUrl'])->name('bookings.whatsapp.cancel');

// Admin custom approval page
Route::get('/admin/booking-approvals', function () {
    return view('admin.bookings');
})->name('admin.booking-approvals');

// API routes
Route::get('/api/bookings', [\App\Http\Controllers\BookingApiController::class, 'index'])->name('api.bookings');
Route::get('/api/bookings/{booking}', [\App\Http\Controllers\BookingApiController::class, 'show'])->name('api.bookings.show');
