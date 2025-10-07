<?php

namespace App\Filament\Widgets;

use App\Models\Booking;
use Filament\Widgets\BarChartWidget;

class ServiceTypeWidget extends BarChartWidget
{
    protected static ?string $heading = 'Bookings by Service Type';

    protected function getData(): array
    {
        $types = [
            'Prewedding Photography',
            'Wedding Photography',
            'Portrait Photography',
            'Event Photography',
            'Family Photography',
            'Custom Package',
        ];

        $counts = collect($types)->map(function ($type) {
            return Booking::query()->where('service_type', $type)->count();
        })->all();

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
