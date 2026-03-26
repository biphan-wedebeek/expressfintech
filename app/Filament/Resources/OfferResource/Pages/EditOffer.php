<?php

namespace App\Filament\Resources\OfferResource\Pages;

use App\Filament\Resources\OfferResource;
use App\Models\Banner;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOffer extends EditRecord
{
    protected static string $resource = OfferResource::class;

    protected function afterSave(): void
    {
        $bannerId = $this->record->banner_id;

        if ($bannerId) {
            Banner::where('id', $bannerId)->update([
                'tracking_url' => $this->record->tracking_url,
            ]);
        }
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}