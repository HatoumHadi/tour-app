<?php

namespace App\Filament\Resources\Packages\VisaResource\Pages;

use App\Filament\Resources\Packages\VisaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVisa extends EditRecord
{
    protected static string $resource = VisaResource::class;

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
