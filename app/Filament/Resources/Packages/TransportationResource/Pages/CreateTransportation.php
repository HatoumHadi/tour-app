<?php

namespace App\Filament\Resources\Packages\TransportationResource\Pages;

use App\Filament\Resources\Packages\TransportationResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTransportation extends CreateRecord
{
    protected static string $resource = TransportationResource::class;


    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
