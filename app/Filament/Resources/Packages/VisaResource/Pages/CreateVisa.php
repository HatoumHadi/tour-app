<?php

namespace App\Filament\Resources\Packages\VisaResource\Pages;

use App\Filament\Resources\Packages\VisaResource;
use Filament\Resources\Pages\CreateRecord;

class CreateVisa extends CreateRecord
{
    protected static string $resource = VisaResource::class;


    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
