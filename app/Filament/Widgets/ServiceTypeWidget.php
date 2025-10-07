<?php

namespace App\Filament\Widgets;

use App\Models\Booking;
use Filament\Widgets\BarChartWidget;

class ServiceTypeWidget extends BarChartWidget
{
    protected ?string $heading = 'Bookings by Service Type';

    // ✅ Filament v4 expects a string like '10s', '1m', '5m', etc.
    protected ?string $pollingInterval = '10s';

    protected function getData(): array
    {
        // Ambil semua jenis layanan unik dari tabel booking
        $types = Booking::query()
            ->select('service_type')
            ->distinct()
            ->pluck('service_type')
            ->filter()
            ->values()
            ->toArray();

        // Hitung jumlah booking untuk setiap service type
        $counts = collect($types)->map(fn($type) =>
            Booking::where('service_type', $type)->count()
        )->all();

        return [
            'datasets' => [
                [
                    'label' => 'Bookings',
                    'data' => $counts,
                    'backgroundColor' => '#65bcb5',
                ],
            ],
            'labels' => $types,
        ];
    }
}
