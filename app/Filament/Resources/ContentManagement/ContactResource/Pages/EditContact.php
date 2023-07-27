<?php

namespace App\Filament\Resources\ContentManagement\ContactResource\Pages;

use App\Filament\Resources\ContentManagement\ContactResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContact extends EditRecord
{
    protected static string $resource = ContactResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
