<?php

namespace App\Filament\Resources\OfferResource\Pages;

use App\Filament\Resources\OfferResource;
use App\Models\Banner;
use Filament\Resources\Pages\CreateRecord;

class CreateOffer extends CreateRecord
{
    protected static string $resource = OfferResource::class;

    protected function afterCreate(): void
    {
        $bannerId = $this->record->banner_id;

        if ($bannerId) {
            Banner::where('id', $bannerId)->update([
                'tracking_url' => $this->record->tracking_url,
            ]);
        }
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}