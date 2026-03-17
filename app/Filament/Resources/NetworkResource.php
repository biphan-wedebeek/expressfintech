<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NetworkResource\Pages;
use App\Models\Network;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class NetworkResource extends Resource
{
    protected static ?string $model = Network::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';
    protected static ?string $navigationLabel = 'Networks';
    protected static ?string $navigationGroup = 'Marketing';
    protected static ?string $modelLabel = 'Network';
    protected static ?string $pluralModelLabel = 'Networks';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Network')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->label('Name')
                                    ->required()
                                    ->maxLength(255)
                                    ->placeholder('e.g. Excity Media'),

                                Forms\Components\TextInput::make('fin_subid')
                                    ->label('Tracking Follow')
                                    ->nullable()
                                    ->maxLength(255)
                                    ->placeholder('&sub_aff_id=#pubid#&aff_click_id='),

                                Forms\Components\TextInput::make('id_postback')
                                    ->label('Order')
                                    ->numeric()
                                    ->default(0)
                                    ->minValue(0)
                                    ->live(),

                                Forms\Components\Toggle::make('status')
                                    ->label('Status')
                                    ->default(true)
                                    ->inline(false),
                            ]),
                    ]),

                    Forms\Components\Section::make('Postback Config')
                        ->schema([
                            Forms\Components\Grid::make(2)
                                ->schema([
                                    Forms\Components\Fieldset::make('Click ID')
                                        ->schema([
                                            Forms\Components\Grid::make(2)
                                                ->schema([
                                                    Forms\Components\TextInput::make('click_id_param')
                                                        ->label('Param Name')
                                                        ->placeholder('clickid')
                                                        ->live(),

                                                    Forms\Components\TextInput::make('click_id_value')
                                                        ->label('Value')
                                                        ->placeholder('{aff_click_id}')
                                                        ->live(),
                                                ]),
                                        ])
                                        ->columnSpan(1),

                                    Forms\Components\Fieldset::make('Credit')
                                        ->schema([
                                            Forms\Components\Grid::make(2)
                                                ->schema([
                                                    Forms\Components\TextInput::make('credit_param')
                                                        ->label('Param Name')
                                                        ->placeholder('payout')
                                                        ->live(),

                                                    Forms\Components\TextInput::make('credit_value')
                                                        ->label('Value')
                                                        ->placeholder('{payout}')
                                                        ->live(),
                                                ]),
                                        ])
                                        ->columnSpan(1),
                                ]),

                            Forms\Components\Grid::make(2)
                                ->schema([
                                    Forms\Components\Fieldset::make('Other')
                                        ->schema([
                                            Forms\Components\Grid::make(2)
                                                ->schema([
                                                    Forms\Components\TextInput::make('other_param')
                                                        ->label('Param Name')
                                                        ->placeholder('sub1')
                                                        ->live(),

                                                    Forms\Components\TextInput::make('other_value')
                                                        ->label('Value')
                                                        ->placeholder('{sub1}')
                                                        ->live(),
                                                ]),
                                        ])
                                        ->columnSpan(1),

                                    Forms\Components\Fieldset::make('Sale Amount')
                                        ->schema([
                                            Forms\Components\Grid::make(2)
                                                ->schema([
                                                    Forms\Components\TextInput::make('sale_amount_param')
                                                        ->label('Param Name')
                                                        ->placeholder('payout_amount')
                                                        ->live(),

                                                    Forms\Components\TextInput::make('sale_amount_value')
                                                        ->label('Value')
                                                        ->placeholder('{payout_amount}')
                                                        ->live(),
                                                ]),
                                        ])
                                        ->columnSpan(1),
                                ]),
                                

                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('fin_pass')
                                    ->label('Pass')
                                    ->required()
                                    ->default('xx')
                                    ->live(),

                                Forms\Components\TextInput::make('preview_link')
                                    ->label('URL')
                                    ->disabled()
                                    ->dehydrated(false)
                                    ->formatStateUsing(fn ($state, $get) => 
                                        static::generateLinkPreviewFromFixedFields($get)
                                    ),
                            ]),
                    ]),

                    
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Network')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('fin_link')
                    ->label('Postback URL')
                    ->limit(60)
                    ->wrap(),

                Tables\Columns\TextColumn::make('fin_subid')
                    ->label('Affsub')
                    ->limit(40),

                Tables\Columns\IconColumn::make('status')
                    ->boolean(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('Y-m-d H:i')
                    ->sortable()
                    ->toggleable(),
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
            'index' => Pages\ListNetworks::route('/'),
            'create' => Pages\CreateNetwork::route('/create'),
            'edit' => Pages\EditNetwork::route('/{record}/edit'),
        ];
    }


        public static function generateLinkPreviewFromFixedFields(callable $get): string
    {
        $base = rtrim(config('app.url'), '/') . '/postback/banner/';
        $id = $get('id_postback') ?: 0;
        $pass = $get('fin_pass') ?: 'xx';

        $pairs = static::collectFixedPostbackPairsFromGetter($get);

        $query = collect($pairs)
            ->filter(fn ($pair) => filled($pair['key']))
            ->map(fn ($pair) => trim($pair['key']) . '=' . ($pair['value'] ?? ''))
            ->implode('&');

        if ($query === '') {
            return "{$base}{$id}/{$pass}/";
        }

        return "{$base}{$id}/{$pass}/?{$query}";
    }

    public static function collectFixedPostbackPairsFromGetter(callable $get): array
    {
        return [
            [
                'key' => $get('click_id_param'),
                'value' => $get('click_id_value'),
            ],
            [
                'key' => $get('credit_param'),
                'value' => $get('credit_value'),
            ],
            [
                'key' => $get('other_param'),
                'value' => $get('other_value'),
            ],
            [
                'key' => $get('sale_amount_param'),
                'value' => $get('sale_amount_value'),
            ],
        ];
    }

    public static function collectFixedPostbackPairsFromData(array $data): array
    {
        return [
            [
                'key' => $data['click_id_param'] ?? '',
                'value' => $data['click_id_value'] ?? '',
            ],
            [
                'key' => $data['credit_param'] ?? '',
                'value' => $data['credit_value'] ?? '',
            ],
            [
                'key' => $data['other_param'] ?? '',
                'value' => $data['other_value'] ?? '',
            ],
            [
                'key' => $data['sale_amount_param'] ?? '',
                'value' => $data['sale_amount_value'] ?? '',
            ],
        ];
    }

    public static function buildFinLinkFromPairs(array $data): string
    {
        $base = rtrim(config('app.url'), '/') . '/postback/banner/';
        $id = $data['id_postback'] ?? 0;
        $pass = $data['fin_pass'] ?? 'xx';
        $pairs = static::collectFixedPostbackPairsFromData($data);

        $query = collect($pairs)
            ->filter(fn ($pair) => filled($pair['key']))
            ->map(fn ($pair) => trim($pair['key']) . '=' . ($pair['value'] ?? ''))
            ->implode('&');

        if ($query === '') {
            return "{$base}{$id}/{$pass}/";
        }

        return "{$base}{$id}/{$pass}/?{$query}";
    }

    public static function buildFinValueFromPairs(array $data): string
    {
        $pairs = static::collectFixedPostbackPairsFromData($data);

        $flat = [];

        foreach ($pairs as $pair) {
            $key = trim($pair['key'] ?? '');
            $value = $pair['value'] ?? '';

            $flat[] = $key;
            $flat[] = $value;
        }

        return serialize($flat);
    }

    public static function parseFinValueToFixedFields(?string $serialized): array
    {
        $defaults = [
            'click_id_param' => 'clickid',
            'click_id_value' => '{aff_click_id}',
            'credit_param' => 'payout',
            'credit_value' => '{payout}',
            'other_param' => '',
            'other_value' => '',
            'sale_amount_param' => '',
            'sale_amount_value' => '',
        ];

        if (! $serialized) {
            return $defaults;
        }

        $data = @unserialize($serialized);

        if (! is_array($data)) {
            return $defaults;
        }

        return [
            'click_id_param' => $data[0] ?? 'clickid',
            'click_id_value' => $data[1] ?? '{aff_click_id}',
            'credit_param' => $data[2] ?? 'payout',
            'credit_value' => $data[3] ?? '{payout}',
            'other_param' => $data[4] ?? '',
            'other_value' => $data[5] ?? '',
            'sale_amount_param' => $data[6] ?? '',
            'sale_amount_value' => $data[7] ?? '',
        ];
    }
}