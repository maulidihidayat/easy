<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\BookingChartWidget;
use App\Filament\Widgets\FeedbackRatingWidget;
use App\Filament\Widgets\RecentBookingsWidget;
use App\Filament\Widgets\PaymentRecapWidget;
use App\Filament\Widgets\StatsOverviewWidget;
use App\Filament\Widgets\ServiceTypeWidget;
use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    public function getWidgets(): array
    {
        return [
            PaymentRecapWidget::class,
            StatsOverviewWidget::class,
            BookingChartWidget::class,
            ServiceTypeWidget::class,
            FeedbackRatingWidget::class,
            RecentBookingsWidget::class,
        ];
    }

    // Jika Anda menggunakan Filament v3, Anda juga bisa menempatkan widget di sini 
    // atau biarkan Filament mengelola widget Anda melalui pengurutan (sort) yang sudah Anda definisikan di masing-masing widget.
    // Kami mempertahankan metode ini agar konsisten dengan niat kode yang Anda berikan.
}
