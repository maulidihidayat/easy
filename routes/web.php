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

    return view('home', compact('portfolios', 'feedbacks'));
});

Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');

Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');

// WhatsApp notification routes
// Route::get('/bookings/{booking}/whatsapp/admin', [BookingController::class, 'getAdminWhatsAppUrl'])->name('bookings.whatsapp.admin');
// Route::get('/bookings/{booking}/whatsapp/customer', [BookingController::class, 'getCustomerWhatsAppUrl'])->name('bookings.whatsapp.customer');

// Booking approval routes
// Route::post('/bookings/{booking}/approve', [App\Http\Controllers\BookingApprovalController::class, 'approve'])->name('bookings.approve');
// Route::post('/bookings/{booking}/reject', [App\Http\Controllers\BookingApprovalController::class, 'reject'])->name('bookings.reject');
// Route::get('/bookings/{booking}/whatsapp/approval', [App\Http\Controllers\BookingApprovalController::class, 'getApprovalWhatsAppUrl'])->name('bookings.whatsapp.approval');

// Admin pages
// Route::get('/admin/bookings', function () {
//     return view('admin.bookings');
// })->name('admin.bookings');

// API routes
// Route::get('/api/bookings', [App\Http\Controllers\BookingApiController::class, 'index'])->name('api.bookings');
// Route::get('/api/bookings/{booking}', [App\Http\Controllers\BookingApiController::class, 'show'])->name('api.bookings.show');
