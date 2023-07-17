<?php

namespace App\Filament\Resources\Packages\TravelInsuranceResource\Pages;

use App\Filament\Resources\Packages\TravelInsuranceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTravelInsurance extends EditRecord
{
    protected static string $resource = TravelInsuranceResource::class;

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
