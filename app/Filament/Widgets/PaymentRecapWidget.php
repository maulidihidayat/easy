<?php

namespace App\Filament\Widgets;

use App\Models\Booking;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Carbon;

class PaymentRecapWidget extends BaseWidget
{
    protected static ?int $sort = 1;
    protected ?string $pollingInterval = '30s';

    protected function getStats(): array
    {
        $now = Carbon::now();
        $startThisMonth = $now->copy()->startOfMonth();
        $endThisMonth = $now->copy()->endOfMonth();

        $startLastMonth = $now->copy()->subMonth()->startOfMonth();
        $endLastMonth = $now->copy()->subMonth()->endOfMonth();

        $startTwoMonthsAgo = $now->copy()->subMonths(2)->startOfMonth();

        // 1. Bulan Ini
        $thisMonthPaidQuery = Booking::where('payment_status', 'paid')
            ->whereBetween('created_at', [$startThisMonth, $endThisMonth]);
        $thisMonthRevenue = $thisMonthPaidQuery->sum('amount');
        $thisMonthPaidCount = $thisMonthPaidQuery->count();
        $thisMonthTotalBookings = Booking::whereBetween('created_at', [$startThisMonth, $endThisMonth])->count();

        // 2. Bulan Lalu (1 Bulan yang Lalu)
        $lastMonthPaidQuery = Booking::where('payment_status', 'paid')
            ->whereBetween('created_at', [$startLastMonth, $endLastMonth]);
        $lastMonthRevenue = $lastMonthPaidQuery->sum('amount');
        $lastMonthPaidCount = $lastMonthPaidQuery->count();

        // 3. Rekap 2 Bulan Terakhir (Bulan Ini + Bulan Lalu)
        $twoMonthsRevenue = Booking::where('payment_status', 'paid')
            ->whereBetween('created_at', [$startLastMonth, $endThisMonth])
            ->sum('amount');
        $twoMonthsPaidCount = Booking::where('payment_status', 'paid')
            ->whereBetween('created_at', [$startLastMonth, $endThisMonth])
            ->count();

        // 4. Pending & Dibatalkan
        $pendingQuery = Booking::where('payment_status', 'pending');
        $pendingAmount = $pendingQuery->sum('amount');
        $pendingCount = $pendingQuery->count();

        $cancelledCount = Booking::where('status', 'cancelled')->count();
        $refundedCount = Booking::where('payment_status', 'refunded')->count();

        return [
            Stat::make('Pendapatan Bulan Ini (' . $now->translatedFormat('F Y') . ')', 'Rp ' . number_format($thisMonthRevenue, 0, ',', '.'))
                ->description("{$thisMonthPaidCount} transaksi lunas dari {$thisMonthTotalBookings} booking")
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),

            Stat::make('Pendapatan Bulan Lalu (' . $now->copy()->subMonth()->translatedFormat('F Y') . ')', 'Rp ' . number_format($lastMonthRevenue, 0, ',', '.'))
                ->description("{$lastMonthPaidCount} transaksi berhasil lunas")
                ->descriptionIcon('heroicon-m-calendar-days')
                ->color('info'),

            Stat::make('Rekap 2 Bulan Terakhir', 'Rp ' . number_format($twoMonthsRevenue, 0, ',', '.'))
                ->description("Total {$twoMonthsPaidCount} sesi terbayar (60 hari)")
                ->descriptionIcon('heroicon-m-banknotes')
                ->color('primary'),

            Stat::make('Pending & Dibatalkan', "{$pendingCount} Pending | {$cancelledCount} Batal")
                ->description('Pending: Rp ' . number_format($pendingAmount, 0, ',', '.') . ($refundedCount > 0 ? " ({$refundedCount} refund)" : ''))
                ->descriptionIcon('heroicon-m-exclamation-triangle')
                ->color($pendingCount > 0 ? 'warning' : 'gray'),
        ];
    }
}
