<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\ClicksChart;
use App\Filament\Widgets\ConversionsChart;
use App\Filament\Widgets\RecentTracklinks;
use App\Filament\Widgets\StatsOverview;
use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    public function getWidgets(): array
    {
        return [
            StatsOverview::class,
            ClicksChart::class,
            ConversionsChart::class,
            RecentTracklinks::class,
        ];
    }

    public function getColumns(): int | array
    {
        return [
            'md' => 2,
            'xl' => 2,
        ];
    }
}