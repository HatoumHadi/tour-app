<?php

namespace App\Filament\Resources\Packages\HotelReservationResource\Pages;

use App\Filament\Resources\Packages\HotelReservationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHotelReservations extends ListRecords
{
    protected static string $resource = HotelReservationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
