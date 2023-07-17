<?php

namespace App\Filament\Resources\Blog\CityResource\Pages;

use App\Filament\Resources\Blog\CityResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCity extends CreateRecord
{
    protected static string $resource = CityResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

}
