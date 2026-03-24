<?php

namespace App\Filament\Widgets;

use App\Models\Tracklink;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class RecentTracklinks extends BaseWidget
{
    protected static ?string $heading = 'Recent Tracklinks';

    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Tracklink::query()->latest()->limit(10)
            )
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('offer.title')->label('Offer'),
                Tables\Columns\TextColumn::make('sub1')->label('Pub ID'),
                Tables\Columns\TextColumn::make('sub2')->label('Click ID'),
                Tables\Columns\IconColumn::make('flead')->boolean(),
                Tables\Columns\TextColumn::make('amount')->money('USD'),
                Tables\Columns\TextColumn::make('created_at')->since(),
            ]);
    }
}