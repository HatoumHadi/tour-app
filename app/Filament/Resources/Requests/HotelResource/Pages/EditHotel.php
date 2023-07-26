<?php

namespace App\Filament\Resources\Requests\HotelResource\Pages;

use App\Filament\Resources\Requests\HotelResource;
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
