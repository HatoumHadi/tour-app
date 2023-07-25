<?php

namespace App\Filament\Resources\Packages\HotelReservationResource\Pages;

use App\Filament\Resources\Packages\HotelReservationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHotelReservation extends EditRecord
{
    protected static string $resource = HotelReservationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }


    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
