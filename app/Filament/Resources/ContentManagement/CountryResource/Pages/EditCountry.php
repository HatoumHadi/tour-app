<?php

namespace App\Filament\Resources\ContentManagement\CountryResource\Pages;

use App\Filament\Resources\ContentManagement\CountryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCountry extends EditRecord
{
    protected static string $resource = CountryResource::class;

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
