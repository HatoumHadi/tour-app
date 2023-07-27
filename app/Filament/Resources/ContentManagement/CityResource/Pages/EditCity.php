<?php

namespace App\Filament\Resources\ContentManagement\CityResource\Pages;

use App\Filament\Resources\ContentManagement\CityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCity extends EditRecord
{
    protected static string $resource = CityResource::class;

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
