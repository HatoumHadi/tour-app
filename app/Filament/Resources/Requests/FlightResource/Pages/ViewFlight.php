<?php

namespace App\Filament\Resources\Requests\FlightResource\Pages;

use App\Filament\Resources\Requests\FlightResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewFlight extends ViewRecord
{
    protected static string $resource = FlightResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
