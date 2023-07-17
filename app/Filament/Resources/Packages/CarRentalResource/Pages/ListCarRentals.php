<?php

namespace App\Filament\Resources\Packages\CarRentalResource\Pages;

use App\Filament\Resources\Packages\CarRentalResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCarRentals extends ListRecords
{
    protected static string $resource = CarRentalResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
