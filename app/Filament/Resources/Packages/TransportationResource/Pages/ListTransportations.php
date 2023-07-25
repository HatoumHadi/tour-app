<?php

namespace App\Filament\Resources\Packages\TransportationResource\Pages;

use App\Filament\Resources\Packages\TransportationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTransportations extends ListRecords
{
    protected static string $resource = TransportationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
