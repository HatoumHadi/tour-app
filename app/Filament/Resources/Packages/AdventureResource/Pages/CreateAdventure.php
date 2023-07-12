<?php

namespace App\Filament\Resources\Packages\AdventureResource\Pages;

use App\Filament\Resources\Packages\AdventureResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAdventure extends CreateRecord
{
    protected static string $resource = AdventureResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
