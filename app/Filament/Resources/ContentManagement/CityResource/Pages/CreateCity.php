<?php

namespace App\Filament\Resources\ContentManagement\CityResource\Pages;

use App\Filament\Resources\ContentManagement\CityResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCity extends CreateRecord
{
    protected static string $resource = CityResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

}
