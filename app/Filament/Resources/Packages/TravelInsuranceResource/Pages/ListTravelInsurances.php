<?php

namespace App\Filament\Resources\Packages\TravelInsuranceResource\Pages;

use App\Filament\Resources\Packages\TravelInsuranceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTravelInsurances extends ListRecords
{
    protected static string $resource = TravelInsuranceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
