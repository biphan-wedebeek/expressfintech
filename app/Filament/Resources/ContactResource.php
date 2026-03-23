<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Models\FintechContact;
use App\Models\Category;
use App\Models\SubCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;

class ContactResource extends Resource
{
    protected static ?string $model = FintechContact::class;

    protected static ?string $navigationIcon   = 'heroicon-o-envelope';
    protected static ?string $navigationLabel  = 'Contacts';
    protected static ?string $navigationGroup  = 'Support';
    protected static ?string $modelLabel       = 'Contact';
    protected static ?string $pluralModelLabel = 'Contacts';

    public static function getNavigationBadge(): ?string
    {
        return cache()->remember('contacts_new_count', now()->addSeconds(60), function () {
            return (string) FintechContact::where('status', 'new')->count() ?: null;
        });
    }

    public static function getNavigationBadgeColor(): string
    {
        return 'warning';
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->with(['category', 'subCategory']);
    }

    // ── FORM ──────────────────────────────────────────────────
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Contact Information')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('full_name')
                                    ->label('Full Name')
                                    ->disabled(),

                                Forms\Components\TextInput::make('email')
                                    ->label('Email')
                                    ->disabled(),

                                Forms\Components\TextInput::make('phone_number')
                                    ->label('Phone')
                                    ->disabled(),

                                Forms\Components\Select::make('status')
                                    ->label('Status')
                                    ->options([
                                        'new'     => 'New',
                                        'read'    => 'Read',
                                        'replied' => 'Replied',
                                        'spam'    => 'Spam',
                                    ])
                                    ->required(),
                            ]),
                    ]),

                Forms\Components\Section::make('Category')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\Select::make('category_id')
                                    ->label('Category')
                                    ->relationship('category', 'name')
                                    ->disabled(),

                                Forms\Components\Select::make('sub_category_id')
                                    ->label('Sub Category')
                                    ->relationship('subCategory', 'name')
                                    ->disabled(),
                            ]),
                    ]),

                Forms\Components\Section::make('Message')
                    ->schema([
                        Forms\Components\Textarea::make('message')
                            ->label('Message')
                            ->disabled()
                            ->rows(6)
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('Security Info')
                    ->collapsed()
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('ip_address')
                                    ->label('IP Address')
                                    ->disabled(),

                                Forms\Components\TextInput::make('submitted_at_js')
                                    ->label('JS Timestamp')
                                    ->disabled(),

                                Forms\Components\Textarea::make('user_agent')
                                    ->label('User Agent')
                                    ->disabled()
                                    ->rows(2)
                                    ->columnSpanFull(),
                            ]),
                    ]),
            ]);
    }

    // ── TABLE ─────────────────────────────────────────────────
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('#')
                    ->sortable()
                    ->formatStateUsing(fn($state) => 'EF-' . str_pad($state, 6, '0', STR_PAD_LEFT)),

                Tables\Columns\TextColumn::make('full_name')
                    ->label('Name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->copyable()
                    ->copyMessage('Email copied'),

                Tables\Columns\TextColumn::make('phone_number')
                    ->label('Phone')
                    ->searchable(),

                Tables\Columns\TextColumn::make('category.name')
                    ->label('Category')
                    ->badge()
                    ->color('info')
                    ->sortable(),

                Tables\Columns\TextColumn::make('subCategory.name')
                    ->label('Sub Category')
                    ->badge()
                    ->color('gray')
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('message')
                    ->label('Message')
                    ->limit(60)
                    ->tooltip(fn($record) => $record->message)
                    ->wrap(),

                Tables\Columns\BadgeColumn::make('status')
                    ->label('Status')
                    ->colors([
                        'warning' => 'new',
                        'info'    => 'read',
                        'success' => 'replied',
                        'danger'  => 'spam',
                    ])
                    ->sortable(),

                Tables\Columns\TextColumn::make('ip_address')
                    ->label('IP')
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Received')
                    ->dateTime('Y-m-d H:i')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->label('Status')
                    ->options([
                        'new'     => 'New',
                        'read'    => 'Read',
                        'replied' => 'Replied',
                        'spam'    => 'Spam',
                    ]),

                SelectFilter::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'name'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make()
                    ->label('Edit'),

                Tables\Actions\DeleteAction::make()
                    ->requiresConfirmation(false),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\BulkAction::make('mark_spam')
                        ->label('Mark as Spam')
                        ->icon('heroicon-o-no-symbol')
                        ->color('danger')
                        ->action(fn($records) => $records->each->update(['status' => 'spam']))
                        ->requiresConfirmation(),

                    Tables\Actions\BulkAction::make('mark_read')
                        ->label('Mark as Read')
                        ->icon('heroicon-o-check')
                        ->color('info')
                        ->action(fn($records) => $records->each->update(['status' => 'read'])),

                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListContacts::route('/'),
            'view'   => Pages\ViewContact::route('/{record}'),
            'edit'   => Pages\EditContact::route('/{record}/edit'),
        ];
    }
}
