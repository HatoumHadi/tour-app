<?php

namespace App\Filament\Resources\Requests\HotelReservationResource\Pages;

use App\Filament\Resources\Requests\HotelReservationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHotelReservations extends ListRecords
{
    protected static string $resource = HotelReservationResource::class;

}
