<?php

namespace App\Filament\Resources\Blog\GeneralInfoResource\Pages;

use App\Filament\Resources\Blog\GeneralInfoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGeneralInfos extends ListRecords
{
    protected static string $resource = GeneralInfoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
