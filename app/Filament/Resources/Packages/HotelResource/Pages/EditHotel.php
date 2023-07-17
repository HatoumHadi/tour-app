<?php

namespace App\Filament\Resources\Packages\HotelResource\Pages;

use App\Filament\Resources\Packages\HotelResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHotel extends EditRecord
{
    protected static string $resource = HotelResource::class;

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
