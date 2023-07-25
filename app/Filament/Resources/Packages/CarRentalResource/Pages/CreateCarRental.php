<?php

namespace App\Filament\Resources\Packages\CarRentalResource\Pages;

use App\Filament\Resources\Packages\CarRentalResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCarRental extends CreateRecord
{
    protected static string $resource = CarRentalResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
