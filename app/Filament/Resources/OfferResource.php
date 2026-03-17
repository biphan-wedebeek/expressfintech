<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OfferResource\Pages;
use App\Models\Offer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class OfferResource extends Resource
{
    protected static ?string $model = Offer::class;
    protected static ?string $navigationIcon = 'heroicon-o-gift';
    protected static ?string $navigationLabel = 'Offers';
    protected static ?string $navigationGroup = 'Marketing';
    protected static ?string $modelLabel = 'Offer';
    protected static ?string $pluralModelLabel = 'Offers';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Offer Information')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Offer Name')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Offer Name'),

                        Forms\Components\Select::make('advertiser_id')
                            ->label('Advertiser')
                            ->relationship('advertiser', 'name')
                            ->searchable()
                            ->preload()
                            ->required()
                            ->placeholder('Select advertiser'),

                        Forms\Components\Select::make('category_id')
                            ->label('Category')
                            ->relationship('category', 'name')
                            ->searchable()
                            ->preload()
                            ->required()
                            ->placeholder('Select category'),

                        Forms\Components\Textarea::make('description')
                            ->rows(3)
                            ->placeholder('Description...'),

                        Forms\Components\FileUpload::make('logo_url')
                            ->label('Logo')
                            ->image()
                            ->directory('offers/logos'),

                        Forms\Components\TextInput::make('payout_default')
                            ->label('Default Payout')
                            ->numeric()
                            ->prefix('$')
                            ->required()
                            ->default(0)
                            ->minValue(0),

                        Forms\Components\TextInput::make('currency')
                            ->label('Currency')
                            ->required()
                            ->default('USD')
                            ->maxLength(10)
                            ->placeholder('USD'),

                        Forms\Components\Toggle::make('status')
                            ->label('Active')
                            ->default(true),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Offer Banners')
                    ->description('Add one or more banners for this offer.')
                    ->schema([
                        Forms\Components\Repeater::make('banners')
                            ->relationship('banners')
                            ->addActionLabel('Add more')
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->label('Banner Title')
                                    ->maxLength(255)
                                    ->placeholder('Homepage Banner'),

                                Forms\Components\FileUpload::make('image_url')
                                    ->label('Banner Image')
                                    ->image()
                                    ->directory('offers/banners')
                                    ->required(),

                                Forms\Components\Textarea::make('alt_text')
                                    ->label('Alt Text')
                                    ->rows(2)
                                    ->placeholder('Banner alt text...'),

                                Forms\Components\Textarea::make('tracking_url')
                                    ->label('Tracking URL')
                                    ->required()
                                    ->rows(3)
                                    ->placeholder('https://advertiser.com/track?...'),

                                Forms\Components\TextInput::make('click_param_name')
                                    ->label('Click Param Name')
                                    ->required()
                                    ->maxLength(100)
                                    ->default('clickid')
                                    ->placeholder('clickid'),

                                Forms\Components\TextInput::make('placement')
                                    ->label('Placement')
                                    ->maxLength(100)
                                    ->placeholder('homepage, sidebar'),

                                Forms\Components\Toggle::make('is_default')
                                    ->label('Default Banner')
                                    ->default(false),

                                Forms\Components\Toggle::make('status')
                                    ->label('Active')
                                    ->default(true),
                            ])
                            ->columns(2)
                            ->defaultItems(1)
                            ->collapsible()
                            ->cloneable()
                            ->itemLabel(fn (array $state): ?string => $state['title'] ?? 'Banner'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->sortable(),

                Tables\Columns\ImageColumn::make('logo_url')
                    ->label('Logo')
                    ->circular(),

                Tables\Columns\TextColumn::make('name')
                    ->label('Offer')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('advertiser.name')
                    ->label('Advertiser')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('category.name')
                    ->label('Category')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('payout_default')
                    ->label('Payout')
                    ->money(fn (Offer $record) => $record->currency ?: 'USD')
                    ->sortable(),

                Tables\Columns\TextColumn::make('currency')
                    ->badge()
                    ->sortable(),

                Tables\Columns\TextColumn::make('banners_count')
                    ->label('Banners')
                    ->counts('banners'),

                Tables\Columns\IconColumn::make('status')
                    ->label('Status')
                    ->boolean(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('Y-m-d H:i')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\Filter::make('id')
                    ->form([
                        Forms\Components\TextInput::make('id')
                            ->label('Offer ID')
                            ->numeric()
                            ->placeholder('Search by ID...'),
                    ])
                    ->query(function ($query, array $data) {
                        return $query->when(
                            $data['id'] ?? null,
                            fn ($query, $id) => $query->where('id', $id)
                        );
                    }),

                Tables\Filters\Filter::make('name')
                    ->form([
                        Forms\Components\TextInput::make('name')
                            ->label('Offer Name')
                            ->placeholder('Search by name...'),
                    ])
                    ->query(function ($query, array $data) {
                        return $query->when(
                            $data['name'] ?? null,
                            fn ($query, $name) => $query->where('name', 'like', '%' . $name . '%')
                        );
                    }),

                Tables\Filters\SelectFilter::make('advertiser_id')
                    ->label('Advertiser')
                    ->relationship('advertiser', 'name'),

                Tables\Filters\SelectFilter::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'name'),

                Tables\Filters\SelectFilter::make('status')
                    ->label('Status')
                    ->options([
                        1 => 'Active',
                        0 => 'Inactive',
                    ]),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->defaultSort('id', 'desc');
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