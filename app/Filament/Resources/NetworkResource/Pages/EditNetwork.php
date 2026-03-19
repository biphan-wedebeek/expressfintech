<?php

namespace App\Filament\Resources\NetworkResource\Pages;

use App\Filament\Resources\NetworkResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNetwork extends EditRecord
{
    protected static string $resource = NetworkResource::class;

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

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $mapped = NetworkResource::parseFinValueToFixedFields($data['fin_value'] ?? null);

        return array_merge($data, $mapped);
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['fin_link'] = NetworkResource::buildFinLinkFromPairs($data);
        $data['fin_value'] = NetworkResource::buildFinValueFromPairs($data);
        $data['fin_subid'] = NetworkResource::buildTrackingFollowFromData($data);

        unset(
            $data['click_id_param'],
            $data['click_id_value'],
            $data['credit_param'],
            $data['credit_value'],
            $data['other_param'],
            $data['other_value'],
            $data['sale_amount_param'],
            $data['sale_amount_value'],
        );

        return $data;
    }
}