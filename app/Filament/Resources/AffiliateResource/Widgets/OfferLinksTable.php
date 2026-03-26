<?php

namespace App\Filament\Resources\AffiliateResource\Widgets;

use App\Models\Offer;
use App\Models\Affiliate;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class OfferLinksTable extends BaseWidget
{
    protected static ?string $heading = 'Offer Links';

    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query($this->getTableQuery())
            ->defaultPaginationPageOption(10)
            ->paginated([10, 25, 50])
            ->searchPlaceholder('Search offer ID...')
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('Offer ID')
                    ->searchable(),

                Tables\Columns\TextColumn::make('title')
                    ->label('Name')
                    ->wrap(),

                Tables\Columns\TextColumn::make('offer_link')
                    ->label('Link')
                    ->state(fn (Offer $record): string => $this->generateOfferLink($record))
                    ->wrap()
                    ->limit(90)
                    ->tooltip(fn (Offer $record): string => $this->generateOfferLink($record))
                    ->copyable()
                    ->copyMessage('Copied!')
                    ->copyMessageDuration(1500),

                Tables\Columns\ViewColumn::make('copy_icon')
                    ->label('')
                    ->view('filament.tables.columns.offer-link-copy-icon'),
            ])
            ->actions([])
            ->recordAction(null)
            ->striped();
    }

    protected function getTableQuery(): Builder
    {
        return Offer::query()
            ->where('status', true)
            ->select(['id', 'title', 'created_at']) 
            ->latest(); 
    }

    protected function getWedebeekAffiliateId(): ?int
    {
        return Affiliate::where('firstname', 'like', '%Wedebeek%')->value('id');
    }

    protected function generateOfferLink(Offer $offer): string
    {
        return url('/click?offer_id=' . $offer->id . '&affiliate_id=' . ($this->getWedebeekAffiliateId() ?? ''));
    }
}