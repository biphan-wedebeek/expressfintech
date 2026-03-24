<?php

namespace App\Filament\Resources\NetworkResource\Pages;

use App\Filament\Resources\NetworkResource;
use Filament\Resources\Pages\CreateRecord;

class CreateNetwork extends CreateRecord
{
    protected static string $resource = NetworkResource::class;

    protected array $submittedData = [];

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $this->submittedData = $data;

        $data['fin_value'] = NetworkResource::buildFinValueFromPairs($data);

        return $data;
    }

    protected function afterCreate(): void
    {
        $data = array_merge($this->submittedData, [
            'id' => $this->record->id,
        ]);

        $this->record->update([
            'fin_link' => NetworkResource::buildFinLinkFromPairs($data),
        ]);
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}