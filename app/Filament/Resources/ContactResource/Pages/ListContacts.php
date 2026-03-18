<?php
// app/Filament/Resources/ContactResource/Pages/ListContacts.php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use Filament\Resources\Pages\ListRecords;

class ListContacts extends ListRecords
{
    protected static string $resource = ContactResource::class;

    protected function getHeaderActions(): array
    {
        return []; // Không có nút Create vì contact chỉ đến từ frontend
    }
}