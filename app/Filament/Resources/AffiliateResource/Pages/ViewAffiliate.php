<?php

namespace App\Filament\Resources\AffiliateResource\Pages;

use App\Filament\Resources\AffiliateResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists;
use Filament\Infolists\Infolist;

class ViewAffiliate extends ViewRecord
{
    protected static string $resource = AffiliateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
            Actions\DeleteAction::make(),
        ];
    }

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                // Avatar ở trên cùng, center
                Infolists\Components\Section::make()
                    ->schema([
                        Infolists\Components\ImageEntry::make('avatar_url')
                            ->label('')
                            ->circular()
                            ->size(120)
                            ->defaultImageUrl(url('/images/default-avatar.png'))
                            ->alignCenter(),
                        
                        Infolists\Components\TextEntry::make('full_name')
                            ->label('')
                            ->size(Infolists\Components\TextEntry\TextEntrySize::Large)
                            ->weight('bold')
                            ->alignCenter(),
                        
                        Infolists\Components\TextEntry::make('status')
                            ->badge()
                            ->size(Infolists\Components\TextEntry\TextEntrySize::Large)
                            ->alignCenter()
                            ->color(fn (string $state): string => match ($state) {
                                'active' => 'success',
                                'inactive' => 'danger',
                                'pending' => 'warning',
                            }),
                    ])
                    ->columnSpanFull(),

                // Personal Information - Grid 2 cột
                Infolists\Components\Section::make('Personal Information')
                    ->icon('heroicon-o-user')
                    ->schema([
                        Infolists\Components\TextEntry::make('id')
                            ->label('Affiliate ID')
                            ->badge()
                            ->color('gray')
                            ->copyable()
                            ->copyMessage('ID copied!')
                            ->copyMessageDuration(1500),
                        
                        Infolists\Components\TextEntry::make('firstname')
                            ->label('First Name')
                            ->icon('heroicon-m-user'),
                        
                        Infolists\Components\TextEntry::make('lastname')
                            ->label('Last Name')
                            ->icon('heroicon-m-user'),
                        
                        Infolists\Components\TextEntry::make('email')
                            ->label('Email Address')
                            ->icon('heroicon-m-envelope')
                            ->copyable()
                            ->copyMessage('Email copied!')
                            ->placeholder('No email provided'),
                        
                        Infolists\Components\TextEntry::make('phone')
                            ->label('Phone Number')
                            ->icon('heroicon-m-phone')
                            ->copyable()
                            ->copyMessage('Phone copied!')
                            ->placeholder('No phone provided'),
                        
                        Infolists\Components\TextEntry::make('website')
                            ->label('Website')
                            ->icon('heroicon-m-globe-alt')
                            ->url(fn ($record): ?string => $record->website ? 'https://' . $record->website : null)
                            ->openUrlInNewTab()
                            ->copyable()
                            ->placeholder('No website provided'),
                    ])
                    ->columns(2)
                    ->collapsible(),

                // Tracking Configuration
                Infolists\Components\Section::make('Tracking Configuration')
                    ->icon('heroicon-o-link')
                    ->schema([
                        Infolists\Components\TextEntry::make('postback_url')
                            ->label('Postback URL')
                            ->icon('heroicon-m-arrow-top-right-on-square')
                            ->copyable()
                            ->copyMessage('Postback URL copied!')
                            ->placeholder('No postback URL configured')
                            ->columnSpanFull(),
                        
                        Infolists\Components\TextEntry::make('click_param_name')
                            ->label('Click ID Parameter')
                            ->badge()
                            ->color('info')
                            ->icon('heroicon-m-cursor-arrow-rays'),
                    ])
                    ->columns(2)
                    ->collapsible(),

                // Notes
                Infolists\Components\Section::make('Notes')
                    ->icon('heroicon-o-document-text')
                    ->schema([
                        Infolists\Components\TextEntry::make('notes')
                            ->label('')
                            ->prose()
                            ->placeholder('No notes available')
                            ->columnSpanFull(),
                    ])
                    ->collapsible()
                    ->collapsed(),

                // System Information
                Infolists\Components\Section::make('System Information')
                    ->icon('heroicon-o-information-circle')
                    ->schema([
                        Infolists\Components\TextEntry::make('created_at')
                            ->label('Created At')
                            ->dateTime('d M Y, H:i')
                            ->icon('heroicon-m-calendar')
                            ->color('success'),
                        
                        Infolists\Components\TextEntry::make('updated_at')
                            ->label('Last Updated')
                            ->dateTime('d M Y, H:i')
                            ->icon('heroicon-m-clock')
                            ->color('warning'),
                    ])
                    ->columns(2)
                    ->collapsible()
                    ->collapsed(),
            ]);
    }
}