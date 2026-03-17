<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdvertiserResource\Pages;
use App\Models\Advertiser;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AdvertiserResource extends Resource
{
    protected static ?string $model = Advertiser::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';
    protected static ?string $navigationLabel = 'Advertisers';
    protected static ?string $navigationGroup = 'Marketing';
    protected static ?string $modelLabel = 'Advertiser';
    protected static ?string $pluralModelLabel = 'Advertisers';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Advertiser Information')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Advertiser Name')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('e.g. Neptune Loan'),

                        Forms\Components\TextInput::make('code')
                            ->label('Code')
                            ->required()
                            ->maxLength(100)
                            ->unique(ignoreRecord: true)
                            ->placeholder('e.g. neptune')
                            ->helperText('Unique advertiser code used for identification.'),

                        Forms\Components\TextInput::make('postback_secret')
                            ->label('Postback Secret')
                            ->maxLength(255)
                            ->nullable()
                            ->placeholder('Optional secret for advertiser postback verification'),

                        Forms\Components\Toggle::make('status')
                            ->label('Active')
                            ->default(true)
                            ->inline(false),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Incoming Postback Params')
                    ->description('Configure the parameter names sent by advertiser postback.')
                    ->schema([
                        Forms\Components\TextInput::make('incoming_postback_click_param_name')
                            ->label('Click Param Name')
                            ->required()
                            ->maxLength(100)
                            ->placeholder('e.g. clickid, subid'),

                        Forms\Components\TextInput::make('incoming_postback_status_param_name')
                            ->label('Status Param Name')
                            ->required()
                            ->maxLength(100)
                            ->placeholder('e.g. status'),

                        Forms\Components\TextInput::make('incoming_postback_payout_param_name')
                            ->label('Payout Param Name')
                            ->required()
                            ->maxLength(100)
                            ->placeholder('e.g. payout'),
                    ])
                    ->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->sortable(),

                Tables\Columns\TextColumn::make('name')
                    ->label('Advertiser')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('code')
                    ->searchable()
                    ->sortable()
                    ->copyable(),

                Tables\Columns\TextColumn::make('incoming_postback_click_param_name')
                    ->label('Click Param')
                    ->badge()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('incoming_postback_status_param_name')
                    ->label('Status Param')
                    ->badge()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('incoming_postback_payout_param_name')
                    ->label('Payout Param')
                    ->badge()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\IconColumn::make('status')
                    ->label('Status')
                    ->boolean(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('Y-m-d H:i')
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime('Y-m-d H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
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
            'index' => Pages\ListAdvertisers::route('/'),
            'create' => Pages\CreateAdvertiser::route('/create'),
            'edit' => Pages\EditAdvertiser::route('/{record}/edit'),
        ];
    }
}