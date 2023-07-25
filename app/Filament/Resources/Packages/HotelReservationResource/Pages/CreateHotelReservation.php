<?php

namespace App\Filament\Resources\Packages\HotelReservationResource\Pages;

use App\Filament\Resources\Packages\HotelReservationResource;
use Filament\Resources\Pages\CreateRecord;

class CreateHotelReservation extends CreateRecord
{
    protected static string $resource = HotelReservationResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
