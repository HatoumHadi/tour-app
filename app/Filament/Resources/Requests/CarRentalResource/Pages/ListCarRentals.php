<?php

namespace App\Filament\Resources\Requests\CarRentalResource\Pages;

use App\Filament\Resources\Requests\CarRentalResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCarRentals extends ListRecords
{
    protected static string $resource = CarRentalResource::class;
}
