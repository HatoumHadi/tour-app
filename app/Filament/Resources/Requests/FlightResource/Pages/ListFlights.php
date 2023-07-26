<?php

namespace App\Filament\Resources\Requests\FlightResource\Pages;

use App\Filament\Resources\Requests\FlightResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFlights extends ListRecords
{
    protected static string $resource = FlightResource::class;
}
