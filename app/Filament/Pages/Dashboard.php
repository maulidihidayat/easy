<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\BookingChartWidget;
use App\Filament\Widgets\FeedbackRatingWidget;
use App\Filament\Widgets\RecentBookingsWidget; // Diperbaiki dari 'RecentBookingsWidg'
use App\Filament\Widgets\StatsOverviewWidget;
use App\Filament\Widgets\ServiceTypeWidget;
use Filament\Pages\Dashboard as BaseDashboard; // Import class dasar Filament Dashboard

// Class yang benar, extend BaseDashboard
class Dashboard extends BaseDashboard
{
    // Secara opsional, ganti judul dashboard
    // protected static ?string $title = 'Dashboard Utama Fotografi';

    // Mendefinisikan urutan widget di dashboard
    public function getWidgets(): array
    {
        return [
            StatsOverviewWidget::class,
            BookingChartWidget::class,
            FeedbackRatingWidget::class,
            ServiceTypeWidget::class,
            RecentBookingsWidget::class,
        ];
    }

    // Jika Anda menggunakan Filament v3, Anda juga bisa menempatkan widget di sini 
    // atau biarkan Filament mengelola widget Anda melalui pengurutan (sort) yang sudah Anda definisikan di masing-masing widget.
    // Kami mempertahankan metode ini agar konsisten dengan niat kode yang Anda berikan.
}
