<?php

namespace App\Filament\Resources\ContentManagement\ContactResource\Pages;

use App\Filament\Resources\ContentManagement\ContactResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContacts extends ListRecords
{
    protected static string $resource = ContactResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
