<?php

namespace App\Filament\Widgets;

use App\Models\Booking;
use App\Models\Feedback;
use App\Models\Portfolio;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverviewWidget extends BaseWidget
{
    protected static ?string $pollingInterval = '30s';

    protected function getCards(): array
    {
        $totalBookings = Booking::query()->count();
        $approvedBookings = Booking::query()->where('status', 'approved')->count();
        $pendingBookings = Booking::query()->where('status', 'pending')->count();
        $todayBookings = Booking::query()->whereDate('created_at', now()->toDateString())->count();

        $totalPortfolio = Portfolio::query()->count();

        $avgRating = (float) (Feedback::query()
            ->where('status', 'approved')
            ->avg('rating') ?? 0);

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
