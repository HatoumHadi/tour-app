<?php

namespace App\Filament\Resources\Packages\TransportationResource\Pages;

use App\Filament\Resources\Packages\TransportationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTransportation extends EditRecord
{
    protected static string $resource = TransportationResource::class;

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
