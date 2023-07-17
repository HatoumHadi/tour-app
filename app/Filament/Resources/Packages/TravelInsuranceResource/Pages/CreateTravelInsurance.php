<?php

namespace App\Filament\Resources\Packages\TravelInsuranceResource\Pages;

use App\Filament\Resources\Packages\TravelInsuranceResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTravelInsurance extends CreateRecord
{
    protected static string $resource = TravelInsuranceResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
