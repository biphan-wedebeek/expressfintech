<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Models\Category;
use App\Models\SubCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;
    protected static ?string $navigationIcon = 'heroicon-o-gift';
    protected static ?string $navigationLabel = 'Categories';
    protected static ?string $navigationGroup = 'Marketing';
    protected static ?string $modelLabel = 'Category';
    protected static ?string $pluralModelLabel = 'Categories';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Category Information')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Category Name')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Category Name')
                            ->dehydrateStateUsing(fn($state) => trim($state)),

                        Forms\Components\Toggle::make('status')
                            ->label('Active')
                            ->default(true)
                            ->inline(false),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Sub Categories')
                    ->schema([
                        Forms\Components\Repeater::make('subCategories')
                            ->relationship('subCategories')
                            ->addActionLabel('Add more')
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->label('Subcategory Name')
                                    ->required()
                                    ->maxLength(255)
                                    ->placeholder('Subcategory Name')
                                    ->dehydrateStateUsing(fn($state) => trim($state)) // ✅ trim
                                    ->columnSpan(1),
                                Forms\Components\Hidden::make('status')
                                    ->default(true),
                            ])
                            ->columns(1)
                            ->defaultItems(0)
                            ->collapsible()
                            ->collapsed()
                            ->itemLabel(fn(array $state): ?string => $state['name'] ?? 'Subcategory')
                            ->extraItemActions([
                                Forms\Components\Actions\Action::make('toggleStatus')
                                    ->label(
                                        fn(array $arguments, Forms\Components\Repeater $component): string =>
                                        self::getSubStatus($arguments, $component) ? '🟢 Active' : '🔴 Inactive'
                                    )
                                    ->color(
                                        fn(array $arguments, Forms\Components\Repeater $component): string =>
                                        self::getSubStatus($arguments, $component) ? 'success' : 'danger'
                                    )
                                    ->link()
                                    ->size('sm')
                                    ->tooltip(
                                        fn(array $arguments, Forms\Components\Repeater $component): string =>
                                        self::getSubStatus($arguments, $component)
                                            ? 'Click to deactivate'
                                            : 'Click to activate'
                                    )
                                    ->action(function (array $arguments, Forms\Components\Repeater $component): void {
                                        $items   = $component->getState();
                                        $itemKey = $arguments['item'];
                                        if (!isset($items[$itemKey])) return;
                                        $newStatus = !(bool)($items[$itemKey]['status'] ?? true);
                                        $subId = $items[$itemKey]['id'] ?? null;
                                        if ($subId) {
                                            SubCategory::where('id', $subId)
                                            ->update(['status' => $newStatus]);
                                        }
                                        $items[$itemKey]['status'] = $newStatus;
                                        $component->state($items);
                                    }),
                            ]),
                    ]),
            ]);
    }

    protected static function getSubStatus(
        array $arguments,
        Forms\Components\Repeater $component
    ): bool {
        $items   = $component->getState();
        $itemKey = $arguments['item'] ?? null;

        return (bool)($items[$itemKey]['status'] ?? true);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->sortable()
                    ->width('60px'),

                Tables\Columns\TextColumn::make('name')
                    ->label('Category')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('sub_categories_count')
                    ->label('Subcategories')
                    ->counts('subCategories'),

                Tables\Columns\ToggleColumn::make('status')
                    ->label('Status')
                    ->onColor('success')
                    ->offColor('danger'),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('Y-m-d')
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\Action::make('addSubcategory')
                    ->label('Add Sub')
                    ->icon('heroicon-o-plus')
                    ->url( fn(Category $record): string =>
                        route('filament.admin.resources.categories.edit', $record) . '#subCategories'
                    )
                    ->color('success'),

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
            'index'  => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit'   => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
