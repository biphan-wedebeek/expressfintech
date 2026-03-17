<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OfferCategoryResource\Pages;
use App\Models\OfferCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class OfferCategoryResource extends Resource
{
    protected static ?string $model = OfferCategory::class;
    protected static ?string $navigationIcon = 'heroicon-o-gift';
    protected static ?string $navigationLabel = 'Offer Categories';
    protected static ?string $navigationGroup = 'Marketing';

public static function form(Form $form): Form
{
    return $form
        ->schema([
            Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255)
                ->placeholder('Category Name'),

            Forms\Components\Select::make('status')
                ->options([
                    1 => 'Active',
                    0 => 'Inactive',
                ])
                ->default(1)
                ->required(),
        ]);
}

public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\TextColumn::make('id')->sortable(),

            Tables\Columns\TextColumn::make('name')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('status')
                ->badge()
                ->formatStateUsing(fn ($state) => $state ? 'Active' : 'Inactive')
                ->color(fn ($state) => $state ? 'success' : 'danger'),

            Tables\Columns\TextColumn::make('created_at')
                ->dateTime('Y-m-d')
                ->sortable(),
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
}

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOfferCategories::route('/'),
            'create' => Pages\CreateOfferCategory::route('/create'),
            'edit' => Pages\EditOfferCategory::route('/{record}/edit'),
        ];
    }
}
