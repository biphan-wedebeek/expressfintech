<?php

namespace App\Filament\Widgets;

use App\Models\Affiliate;
use App\Models\Offer;
use App\Models\Tracklink;
use App\Models\Network;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $totalClicks = Tracklink::count();
        $totalConversions = Tracklink::where('status', 2)->count();
        $totalAffiliates = Affiliate::count();
        $totalOffers = Offer::count();

        $conversionRate = $totalClicks > 0
            ? round(($totalConversions / $totalClicks) * 100, 2)
            : 0;

        return [
            Stat::make('Total Clicks', number_format($totalClicks))
                ->description('All recorded tracklinks')
                ->descriptionIcon('heroicon-m-cursor-arrow-rays')
                ->color('primary'),

            Stat::make('Conversions', number_format($totalConversions))
                ->description("CR: {$conversionRate}%")
                ->descriptionIcon('heroicon-m-check-badge')
                ->color('success'),

            Stat::make('Affiliates', number_format($totalAffiliates))
                ->description('Active publisher accounts')
                ->descriptionIcon('heroicon-m-users')
                ->color('info'),

            Stat::make('Offers', number_format($totalOffers))
                ->description('Available offers')
                ->descriptionIcon('heroicon-m-megaphone')
                ->color('warning'),
        ];
    }
}