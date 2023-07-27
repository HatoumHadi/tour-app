<?php

namespace App\Filament\Resources\ContentManagement\CityResource\Pages;

use App\Filament\Resources\ContentManagement\CityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCities extends ListRecords
{
    protected static string $resource = CityResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
