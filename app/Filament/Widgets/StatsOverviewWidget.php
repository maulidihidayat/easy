<?php

namespace App\Filament\Widgets;

use App\Models\Booking;
use App\Models\Feedback;
use App\Models\Portfolio;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverviewWidget extends BaseWidget
{
    // ✅ Non-static dan string interval (contoh: '30s', '1m', dll)
    protected ?string $pollingInterval = '30s';

    protected function getStats(): array
    {
        $totalBookings = Booking::count();
        $approvedBookings = Booking::where('status', 'approved')->count();
        $pendingBookings = Booking::where('status', 'pending')->count();
        $todayBookings = Booking::whereDate('created_at', now()->toDateString())->count();

        $totalPortfolio = Portfolio::count();

        $avgRating = (float) (Feedback::where('status', 'approved')->avg('rating') ?? 0);

        return [
            Stat::make('Total Bookings', (string) $totalBookings)
                ->icon('heroicon-o-calendar-days')
                ->description("Today: {$todayBookings}")
                ->color('primary'),

            Stat::make('Approved', (string) $approvedBookings)
                ->icon('heroicon-o-check-circle')
                ->description("Pending: {$pendingBookings}")
                ->color('success'),

            Stat::make('Portfolio Items', (string) $totalPortfolio)
                ->icon('heroicon-o-photo')
                ->color('info'),

            Stat::make('Avg Rating', number_format($avgRating, 1))
                ->icon('heroicon-o-star')
                ->description('Approved feedback')
                ->color('warning'),
        ];
    }
}
