<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BannerResource\Pages;
use App\Models\Banner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class BannerResource extends Resource
{
    protected static ?string $model = Banner::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationLabel = 'Banners';
    protected static ?string $navigationGroup = 'Marketing';
    protected static ?string $modelLabel = 'Banner';
    protected static ?string $pluralModelLabel = 'Banners';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Banner Information')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->label('Title')
                                    ->maxLength(255)
                                    ->placeholder('Banner title')
                                    ->columnSpanFull(),

                                Forms\Components\Select::make('category_id')
                                    ->label('Category')
                                    ->relationship('category', 'name', fn($query) => $query->where('status', 1))
                                    ->searchable()
                                    ->preload()
                                    ->required()
                                    ->live(),

                                Forms\Components\Select::make('sub_category_id')
                                    ->label('Sub Category')
                                    ->options(function (callable $get) {
                                        $categoryId = $get('category_id');
                                        if (! $categoryId) {
                                            return [];
                                        }
                                        return \App\Models\SubCategory::query()
                                            ->where('category_id', $categoryId)
                                            ->where('status', 1)
                                            ->pluck('name', 'id')
                                            ->toArray();
                                    })
                                    ->searchable()
                                    ->preload()
                                    ->required(),

                                Forms\Components\Select::make('placement')
                                    ->label('Placement')
                                    ->options([
                                        1 => 'TOP',
                                        2 => 'RIGHT',
                                        3 => 'BOTTOM',
                                        4 => 'LEFT',
                                    ]),

                                Forms\Components\TextInput::make('tracking_url')
                                    ->label('Tracking URL')
                                    ->required()
                                    ->maxLength(2048),

                                Forms\Components\Textarea::make('description')
                                    ->label('Description')
                                    ->rows(3),

                                Forms\Components\FileUpload::make('image_url')
                                    ->label('Image')
                                    ->image()
                                    ->directory('banners')
                                    ->required()
                                    ->maxSize(9216)
                                    ->helperText('Max size: 9MB.'),

                                Forms\Components\Toggle::make('status')
                                    ->label('Active')
                                    ->default(true)
                                    ->columnSpanFull(),
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->sortable()
                    ->width('60px'),

                Tables\Columns\ImageColumn::make('image_url')
                    ->label('Image')
                    ->square()
                    ->url(fn($record) => asset('storage/' . $record->image_url)),

                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->sortable()
                    ->limit(30),

                Tables\Columns\TextColumn::make('category.name')
                    ->label('Category')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('placement')
                    ->label('Placement')
                    ->formatStateUsing(fn($state) => match ((int) $state) {
                        1 => 'TOP',
                        2 => 'RIGHT',
                        3 => 'BOTTOM',
                        4 => 'LEFT',
                        default => '-',
                    }),

                Tables\Columns\TextColumn::make('tracking_url')
                    ->label('Tracking URL')
                    ->limit(40)
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\ToggleColumn::make('status')
                    ->label('Status')
                    ->onColor('success')
                    ->offColor('danger'),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('Y-m-d')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'name'),

                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        1 => 'Active',
                        0 => 'Inactive',
                    ]),
            ])
            ->actions([
                Tables\Actions\ViewAction::make()
                    ->label('')
                    ->tooltip('View')
                    ->icon('heroicon-o-eye'),

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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBanners::route('/'),
            'create' => Pages\CreateBanner::route('/create'),
            'edit' => Pages\EditBanner::route('/{record}/edit'),
        ];
    }
}
