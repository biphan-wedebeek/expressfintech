<?php

namespace App\Filament\Resources\NetworkResource\Pages;

use App\Filament\Resources\NetworkResource;
use Filament\Resources\Pages\CreateRecord;

class CreateNetwork extends CreateRecord
{
    protected static string $resource = NetworkResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['fin_link'] = NetworkResource::buildFinLinkFromPairs($data);
        $data['fin_value'] = NetworkResource::buildFinValueFromPairs($data);

        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}