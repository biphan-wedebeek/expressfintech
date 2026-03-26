<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OfferResource\Pages;
use App\Models\Banner;
use App\Models\Offer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class OfferResource extends Resource
{
    protected static ?string $model = Offer::class;

    protected static ?string $navigationIcon = 'heroicon-o-megaphone';
    protected static ?string $navigationLabel = 'Offers';
    protected static ?string $modelLabel = 'Offer';
    protected static ?string $pluralModelLabel = 'Offers';
    protected static ?string $navigationGroup = 'Marketing';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Offer information')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->label('Title')
                                    ->maxLength(255)
                                    ->required(),

                                Forms\Components\Select::make('network_id')
                                    ->label('Network')
                                    ->relationship('network', 'name', fn($query) => $query->where('status', 1))
                                    ->searchable()
                                    ->preload()
                                    ->required(),

                                Forms\Components\TextInput::make('tracking_url')
                                    ->label('Tracking URL')
                                    ->required()
                                    ->maxLength(2048),

                                Forms\Components\Select::make('banner_id')
                                    ->label('Banner')
                                    ->options(function (?Offer $record) {
                                        $usedBannerIds = Offer::query()
                                            ->whereNotNull('banner_id')
                                            ->when($record?->id, fn($q) => $q->where('id', '!=', $record->id))
                                            ->pluck('banner_id')
                                            ->toArray();

                                        return Banner::query()
                                            ->where('status', 1)
                                            ->whereNotIn('id', $usedBannerIds)
                                            ->get()
                                            ->mapWithKeys(fn($banner) => [
                                                $banner->id => $banner->title ?? 'Banner #' . $banner->id
                                            ])
                                            ->toArray();
                                    })
                                    ->searchable()
                                    ->preload()
                                    ->nullable(),

                                Forms\Components\Textarea::make('description')
                                    ->label('Description')
                                    ->rows(3),

                                FileUpload::make('image_url')
                                    ->label('Image')
                                    ->image()
                                    ->directory('offers')
                                    ->required()
                                    ->maxSize(3072)
                                    ->helperText('Max size: 3MB.'),

                                Forms\Components\Toggle::make('api_on')
                                    ->label('API On')
                                    ->default(true)
                                    ->required(),

                                Forms\Components\Toggle::make('status')
                                    ->label('Status')
                                    ->default(true)
                                    ->required(),
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->sortable(),

                Tables\Columns\ImageColumn::make('image_url')
                    ->label('Image')
                    ->square(),

                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->limit(30),

                Tables\Columns\TextColumn::make('network.name')
                    ->label('Network')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('tracking_url')
                    ->label('Tracking URL')
                    ->limit(40)
                    ->copyable()
                    ->copyMessage('Copied')
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\ToggleColumn::make('api_on')
                    ->label('API On'),

                Tables\Columns\ToggleColumn::make('status')
                    ->label('Status')
                    ->onColor('success')
                    ->offColor('danger'),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('Y-m-d')
                    ->sortable()
                    ->toggleable(),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('status')
                    ->label('Status'),

                Tables\Filters\SelectFilter::make('network_id')
                    ->label('Network')
                    ->relationship('network', 'name'),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->label('')
                    ->tooltip('Edit')
                    ->icon('heroicon-o-pencil-square'),

                Tables\Actions\DeleteAction::make()
                    ->label('')
                    ->tooltip('Delete')
                    ->icon('heroicon-o-trash'),
            ])
            ->actionsColumnLabel('Actions')
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('id', 'desc');
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOffers::route('/'),
            'create' => Pages\CreateOffer::route('/create'),
            'edit' => Pages\EditOffer::route('/{record}/edit'),
        ];
    }
}
