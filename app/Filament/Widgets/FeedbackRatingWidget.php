<?php

namespace App\Filament\Widgets;

use App\Models\Feedback;
use Filament\Widgets\PieChartWidget;

class FeedbackRatingWidget extends PieChartWidget
{
    // Properti $heading harus non-static agar sesuai dengan parent class (PieChartWidget/ChartWidget)
    protected ?string $heading = 'Feedback Ratings (Approved)';

    protected function getData(): array
    {
        $labels = ['5', '4', '3', '2', '1'];
        $data = collect($labels)->map(function ($rating) {
            return Feedback::query()
                ->where('status', 'approved')
                ->where('rating', (int) $rating)
                ->count();
        })->all();

        return [
            'datasets' => [
                [
                    'label' => 'Ratings',
                    'data' => $data,
                    'backgroundColor' => [
                        '#16a34a',
                        '#22c55e',
                        '#65a30d',
                        '#eab308',
                        '#ef4444',
                    ],
                ],
            ],
            'labels' => $labels,
        ];
    }
}
