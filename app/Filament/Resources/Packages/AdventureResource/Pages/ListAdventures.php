<?php

namespace App\Filament\Resources\Packages\AdventureResource\Pages;

use App\Filament\Resources\Packages\AdventureResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAdventures extends ListRecords
{
    protected static string $resource = AdventureResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
