<?php

namespace App\Filament\Resources\Requests\HotelResource\Pages;

use App\Filament\Resources\Requests\HotelResource;
use Filament\Resources\Pages\CreateRecord;

class CreateHotel extends CreateRecord
{
    protected static string $resource = HotelResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
