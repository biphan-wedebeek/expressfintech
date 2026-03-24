<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NetworkResource\Pages;
use App\Models\Network;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\HtmlString;

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
                                    ->maxLength(255)
                                    ->placeholder('e.g. &aff_sub={subid}'),

                                // Forms\Components\TextInput::make('id_postback')
                                //     ->label('Order')
                                //     ->numeric()
                                //     ->default(0)
                                //     ->minValue(0)
                                //     ->live(debounce: 300),

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
                                                    ->required()
                                                    ->live(debounce: 300),

                                                Forms\Components\TextInput::make('click_id_value')
                                                    ->label('Value')
                                                    ->placeholder('{aff_click_id}')
                                                    ->required()
                                                    ->rule('regex:' . static::macroPattern())
                                                    ->validationMessages([
                                                        'required' => 'Clickid value is required.',
                                                        'regex' => 'Clickid must be a valid macro (e.g. {clickid} or {{clickid}}).',
                                                    ])
                                                    ->live(debounce: 300),
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
                                                    ->required()
                                                    ->live(debounce: 300),

                                                Forms\Components\TextInput::make('credit_value')
                                                    ->label('Value')
                                                    ->placeholder('{payout}')
                                                    ->required()
                                                    ->rule('regex:' . static::macroPattern())
                                                    ->validationMessages([
                                                        'required' => 'Credit value is required.',
                                                        'regex' => 'Credit must be a valid macro (e.g. {payout} or {{payout}}).',
                                                    ])
                                                    ->live(debounce: 300),
                                            ]),
                                    ])
                                    ->columnSpan(1),
                            ]),

                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\Fieldset::make('Pub ID')
                                    ->schema([
                                        Forms\Components\Grid::make(2)
                                            ->schema([
                                                Forms\Components\TextInput::make('pub_id_param')
                                                    ->label('Param Name')
                                                    ->placeholder('pubid')
                                                    ->live(debounce: 300),

                                                Forms\Components\TextInput::make('pub_id_value')
                                                    ->label('Value')
                                                    ->placeholder('{pubid}')
                                                    ->rule('regex:' . static::macroPatternAllowEmpty())
                                                    ->validationMessages([
                                                        'regex' => 'Pub ID must be a valid macro (e.g. {pubid} or {{pubid}}).',
                                                    ])
                                                    ->live(debounce: 300),
                                            ]),
                                    ])
                                    ->columnSpan(1),

                                Forms\Components\Fieldset::make('Sale Amount')
                                    ->schema([
                                        Forms\Components\Grid::make(2)
                                            ->schema([
                                                Forms\Components\TextInput::make('sale_amount_param')
                                                    ->label('Param Name')
                                                    ->placeholder('sale_amount')
                                                    ->live(debounce: 300),

                                                Forms\Components\TextInput::make('sale_amount_value')
                                                    ->label('Value')
                                                    ->placeholder('{sale_amount}')
                                                    ->rule('regex:' . static::macroPatternAllowEmpty())
                                                    ->validationMessages([
                                                        'regex' => 'Sale amount must be a valid macro (e.g. {sale_amount} or {{sale_amount}}).',
                                                    ])
                                                    ->live(debounce: 300),
                                            ]),
                                    ])
                                    ->columnSpan(1),
                            ]),

                        Forms\Components\Grid::make(2)
                            ->schema([
                                // Forms\Components\TextInput::make('fin_pass')
                                //     ->label('Pass')
                                //     ->required()
                                //     ->default('xx')
                                //     ->live(debounce: 300),

                                Forms\Components\Placeholder::make('preview_link')
                                    ->label('URL')
                                    ->content(fn ($get) => new HtmlString(
                                        '<a href="' . e($url = static::generateLinkPreviewFromFixedFields($get)) . '" 
                                            target="_blank" 
                                            style="color: #2563eb; text-decoration: underline;"
                                            class="break-all">
                                            ' . e($url) . '
                                        </a>'
                                    )),
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
                    ->wrap()
                    ->copyable()
                    ->copyMessage('Copied'),

                Tables\Columns\TextColumn::make('fin_subid')
                    ->label('Affsub')
                    ->limit(40)
                    ->copyable()
                    ->copyMessage('Copied'),

                Tables\Columns\IconColumn::make('status')
                    ->boolean(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('Y-m-d')
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

    public static function macroPattern(): string
    {
        return '/^(?:\{\w+\}|\{\{\w+\}\}|#\w+#|#@\w+#@|}\w+}|}}\w+}}|\]\w+\]|\]\]\w+\]\]|"\w+"|\'\w+\')$/';
    }

    public static function macroPatternAllowEmpty(): string
    {
        return '/^(?:$|\{\w+\}|\{\{\w+\}\}|#\w+#|#@\w+#@|}\w+}|}}\w+}}|\]\w+\]|\]\]\w+\]\]|"\w+"|\'\w+\')$/';
    }

    public static function generateLinkPreviewFromFixedFields(callable $get): string
    {
        $networkId = $get('id') ?: $get('record.id');

        $base = rtrim(config('app.url'), '/') . '/postback/banner';
        $base .= $networkId ? '/' . $networkId : '';

        $pairs = static::collectFixedPostbackPairsFromGetter($get);

        $query = collect($pairs)
            ->filter(fn ($pair) => filled($pair['key']))
            ->map(fn ($pair) => trim($pair['key']) . '=' . ($pair['value'] ?? ''))
            ->implode('&');

        return $query === ''
            ? $base
            : "{$base}?{$query}";
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
                'key' => $get('pub_id_param'),
                'value' => $get('pub_id_value'),
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
                'key' => $data['pub_id_param'] ?? '',
                'value' => $data['pub_id_value'] ?? '',
            ],
            [
                'key' => $data['sale_amount_param'] ?? '',
                'value' => $data['sale_amount_value'] ?? '',
            ],
        ];
    }

    public static function buildFinLinkFromPairs(array $data): string
    {
        $networkId = $data['id'] ?? null;

        $base = rtrim(config('app.url'), '/') . '/postback/banner';
        $base .= $networkId ? '/' . $networkId : '';

        $pairs = static::collectFixedPostbackPairsFromData($data);

        $query = collect($pairs)
            ->filter(fn ($pair) => filled($pair['key']))
            ->map(fn ($pair) => trim($pair['key']) . '=' . ($pair['value'] ?? ''))
            ->implode('&');

        return $query === ''
            ? $base
            : "{$base}?{$query}";
    }

    public static function buildFinValueFromPairs(array $data): string
    {
        $payload = [
            'click_id_param' => $data['click_id_param'] ?? '',
            'click_id_value' => $data['click_id_value'] ?? '',
            'credit_param' => $data['credit_param'] ?? '',
            'credit_value' => $data['credit_value'] ?? '',
            'pub_id_param' => $data['pub_id_param'] ?? '',
            'pub_id_value' => $data['pub_id_value'] ?? '',
            'sale_amount_param' => $data['sale_amount_param'] ?? '',
            'sale_amount_value' => $data['sale_amount_value'] ?? '',
        ];

        return json_encode($payload, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }

    public static function parseFinValueToFixedFields(null|string|array $value): array
    {
        $defaults = [
            'click_id_param' => 'clickid',
            'click_id_value' => '{click_id}',
            'credit_param' => 'payout',
            'credit_value' => '{payout}',
            'pub_id_param' => '',
            'pub_id_value' => '',
            'sale_amount_param' => '',
            'sale_amount_value' => '',
        ];

        if (blank($value)) {
            return $defaults;
        }

        if (is_array($value)) {
            return array_merge($defaults, $value);
        }

        $decoded = json_decode($value, true);

        if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
            return array_merge($defaults, $decoded);
        }
        $legacy = @unserialize($value);

        if (is_array($legacy)) {
            return [
                'click_id_param' => $legacy[0] ?? 'clickid',
                'click_id_value' => $legacy[1] ?? '{click_id}',
                'credit_param' => $legacy[2] ?? 'payout',
                'credit_value' => $legacy[3] ?? '{payout}',
                'pub_id_param' => $legacy[4] ?? '',
                'pub_id_value' => $legacy[5] ?? '',
                'sale_amount_param' => $legacy[6] ?? '',
                'sale_amount_value' => $legacy[7] ?? '',
            ];
        }

        return $defaults;
    }

    
}