<?php
// app/Filament/Resources/ContactResource/Pages/ViewContact.php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Actions;

class ViewContact extends ViewRecord
{
    protected static string $resource = ContactResource::class;

    // Tự động đánh dấu "read" khi admin mở xem
    public function mount(int|string $record): void
    {
        parent::mount($record);

        if ($this->record->status === 'new') {
            $this->record->update(['status' => 'read']);
        }
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make()->label('Update Status'),
        ];
    }
}