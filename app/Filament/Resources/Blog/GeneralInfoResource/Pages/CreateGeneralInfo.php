<?php

namespace App\Filament\Resources\Blog\GeneralInfoResource\Pages;

use App\Filament\Resources\Blog\GeneralInfoResource;
use Filament\Resources\Pages\CreateRecord;

class CreateGeneralInfo extends CreateRecord
{
    protected static string $resource = GeneralInfoResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
