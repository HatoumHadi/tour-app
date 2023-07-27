<?php

namespace App\Filament\Resources\ContentManagement\GeneralInfoResource\Pages;

use App\Filament\Resources\ContentManagement\GeneralInfoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGeneralInfo extends EditRecord
{
    protected static string $resource = GeneralInfoResource::class;

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
