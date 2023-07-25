<?php

namespace App\Filament\Resources\Packages\AdventureResource\Pages;

use App\Filament\Resources\Packages\AdventureResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAdventure extends EditRecord
{
    protected static string $resource = AdventureResource::class;

    protected function getActions(): array
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
