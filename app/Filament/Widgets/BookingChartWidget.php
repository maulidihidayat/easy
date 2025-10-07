<?php

namespace App\Filament\Widgets;

use App\Models\Booking;
use Filament\Widgets\LineChartWidget;
use Illuminate\Support\Carbon;

class BookingChartWidget extends LineChartWidget
{
    // Telah diperbaiki: properti $heading harus non-static
    protected ?string $heading = 'Bookings - Last 30 Days';

    protected function getData(): array
    {
        // Membuat label tanggal untuk 30 hari terakhir
        $labels = collect(range(29, 0))->map(function ($i) {
            return now()->subDays($i)->format('Y-m-d');
        })->values();

        // Menghitung total booking per hari
        $totals = $labels->map(function ($date) {
            return Booking::query()->whereDate('created_at', $date)->count();
        })->all();

        // Menghitung booking yang sudah 'approved' per hari
        $approved = $labels->map(function ($date) {
            return Booking::query()->where('status', 'approved')->whereDate('created_at', $date)->count();
        })->all();

        return [
            'datasets' => [
                [
                    'label' => 'Total',
                    'data' => $totals,
                    'borderColor' => '#6366f1', // Indigo
                    'backgroundColor' => 'rgba(99,102,241,0.2)',
                    'tension' => 0.3,
                    'fill' => true,
                ],
                [
                    'label' => 'Approved',
                    'data' => $approved,
                    'borderColor' => '#22c55e', // Green
                    'backgroundColor' => 'rgba(34,197,94,0.2)',
                    'tension' => 0.3,
                    'fill' => true,
                ],
            ],
            // Memformat label agar lebih mudah dibaca (e.g., 01 Jan)
            'labels' => $labels->map(fn($d) => Carbon::parse($d)->format('d M'))->all(),
        ];
    }
}
