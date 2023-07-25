<?php

namespace App\Filament\Resources\Blog\CountryResource\Pages;

use App\Filament\Resources\Blog\CountryResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCountry extends CreateRecord
{
    protected static string $resource = CountryResource::class;


    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

}
