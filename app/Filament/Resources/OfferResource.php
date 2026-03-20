<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OfferResource\Pages;
use App\Models\Offer;
use App\Models\SubCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
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
                        Forms\Components\TextInput::make('title')
                            ->label('Title')
                            ->maxLength(255)
                            ->required(),

                        Forms\Components\Select::make('network_id')
                            ->label('Network')
                            ->relationship('network', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                        Forms\Components\Select::make('category_id')
                            ->label('Category')
                            ->relationship('category', 'name')
                            ->searchable()
                            ->preload()
                            ->live()
                            ->afterStateUpdated(fn (Set $set) => $set('sub_category_id', null))
                            ->required(),

                        Forms\Components\Select::make('sub_category_id')
                            ->label('Sub Category')
                            ->options(fn (Get $get): array => SubCategory::query()
                                ->where('category_id', $get('category_id'))
                                ->pluck('name', 'id')
                                ->toArray())
                            ->searchable()
                            ->preload()
                            ->disabled(fn (Get $get): bool => blank($get('category_id')))
                            ->required()
                            ->placeholder(fn (Get $get): string => blank($get('category_id'))
                                ? 'Please select category first'
                                : 'Select sub category'),

                        Forms\Components\Textarea::make('description')
                            ->label('Description')
                            ->rows(2),

                        Forms\Components\Textarea::make('tracking_url')
                            ->label('Tracking URL')
                            ->required()
                            ->rows(2),

                        FileUpload::make('image_url')
                            ->label('Image')
                            ->image()
                            ->directory('offers')
                            ->required()
                            ->columnSpan(2)
                            // ->minSize(300)
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
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),

                Tables\Columns\ImageColumn::make('image_url')
                    ->label('Image')
                    ->square(),

                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->limit(30),

                Tables\Columns\TextColumn::make('network.name')
                    ->label('Network')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('tracking_url')
                    ->label('Tracking URL')
                    ->limit(40)
                    ->toggleable(),

                Tables\Columns\TextColumn::make('category.name')
                    ->label('Category')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\IconColumn::make('api_on')
                    ->boolean()
                    ->label('API On'),

                Tables\Columns\IconColumn::make('status')
                    ->boolean()
                    ->label('Status'),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('Y-m-d')
                    ->sortable()
                    ->toggleable(),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('status')
                    ->label('Status'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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