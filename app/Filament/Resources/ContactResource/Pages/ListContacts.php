<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use Filament\Resources\Pages\ListRecords;

class ListContacts extends ListRecords
{
    protected static string $resource = ContactResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }

    public function getFooter(): ?\Illuminate\Contracts\View\View
    {
        return view('filament.contacts.mark-read-script');
    }
}