<?php

namespace App\Filament\Widgets;

use App\Models\Tracklink;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;

class ConversionsChart extends ChartWidget
{
    protected static ?string $heading = 'Conversions - Last 7 Days';

    protected function getData(): array
    {
        $labels = [];
        $data = [];

        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i);
            $labels[] = $date->format('M d');
            $data[] = Tracklink::where('flead', 1)
                ->whereDate('created_at', $date->toDateString())
                ->count();
        }

        return [
            'datasets' => [
                [
                    'label' => 'Conversions',
                    'data' => $data,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}