<?php

namespace App\Filament\Resources\Packages\CarRentalResource\Pages;

use App\Filament\Resources\Packages\CarRentalResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCarRental extends EditRecord
{
    protected static string $resource = CarRentalResource::class;

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
