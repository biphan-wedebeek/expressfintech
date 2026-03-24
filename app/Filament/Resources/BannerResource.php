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
                                // ===== Row: Title | Tracking URL =====
                                Forms\Components\TextInput::make('title')
                                    ->label('Title')
                                    ->maxLength(255)
                                    ->placeholder('Banner title'),

                                // Network
                                Forms\Components\Select::make('network_id')
                                    ->label('Network')
                                    ->relationship('network', 'name')
                                    ->searchable()
                                    ->preload()
                                    ->required(),

                                // Category
                                Forms\Components\Select::make('category_id')
                                    ->label('Category')
                                    ->relationship('category', 'name')
                                    ->searchable()
                                    ->preload()
                                    ->required()
                                    ->live(),

                                // Sub Category
                                Forms\Components\Select::make('sub_category_id')
                                    ->label('Sub Category')
                                    ->options(function (callable $get) {
                                        $categoryId = $get('category_id');

                                        if (! $categoryId) {
                                            return [];
                                        }

                                        return \App\Models\SubCategory::query()
                                            ->where('category_id', $categoryId)
                                            ->pluck('name', 'id')
                                            ->toArray();
                                    })
                                    ->searchable()
                                    ->preload()
                                    ->required(),

                                // Placement (INT)
                                Forms\Components\Select::make('placement')
                                    ->label('Placement')
                                    ->options([
                                        1 => 'TOP',
                                        2 => 'RIGHT',
                                        3 => 'BOTTOM',
                                        4 => 'LEFT',
                                    ])
                                    ->required(),

                                Forms\Components\Textarea::make('tracking_url')
                                    ->label('Tracking URL')
                                    ->rows(2)
                                    ->required(),

                                // ===== Row: Description | Image =====
                                Forms\Components\Textarea::make('description')
                                    ->label('Description')
                                    ->rows(2),

                                Forms\Components\FileUpload::make('image_url')
                                    ->label('Image')
                                    ->image()
                                    ->directory('banners')
                                    ->required()
                                    ->maxSize(9216)
                                    ->helperText('Max size: 9MB.'),

                                // Status
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
                    ->sortable(),

                Tables\Columns\ImageColumn::make('image_url')
                    ->label('Image')
                    ->square()
                    ->url(fn ($record) => asset('storage/' . $record->image_url)),

                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->sortable()
                    ->limit(30),

                Tables\Columns\TextColumn::make('network.name')
                    ->label('Network')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('category.name')
                    ->label('Category')
                    ->searchable()
                    ->sortable(),

                // Tables\Columns\TextColumn::make('subCategory.name')
                //     ->label('Sub Category')
                //     ->searchable()
                //     ->sortable(),

                // Tables\Columns\TextColumn::make('placement')
                //     ->badge()
                //     ->formatStateUsing(fn ($state) => match ($state) {
                //         1 => 'TOP',
                //         2 => 'RIGHT',
                //         3 => 'BOTTOM',
                //         4 => 'LEFT',
                //         default => '-',
                //     }),

                Tables\Columns\TextColumn::make('tracking_url')
                    ->label('Tracking URL')
                    ->limit(40)
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\IconColumn::make('status')
                    ->label('Status')
                    ->boolean(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('Y-m-d')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('network_id')
                    ->label('Network')
                    ->relationship('network', 'name'),

                Tables\Filters\SelectFilter::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'name'),

                // Tables\Filters\SelectFilter::make('placement')
                //     ->options([
                //         1 => 'TOP',
                //         2 => 'RIGHT',
                //         3 => 'BOTTOM',
                //         4 => 'LEFT',
                //     ]),

                Tables\Filters\SelectFilter::make('status')
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