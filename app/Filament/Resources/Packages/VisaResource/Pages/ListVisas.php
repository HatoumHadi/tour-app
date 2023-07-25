<?php

namespace App\Filament\Resources\Packages\VisaResource\Pages;

use App\Filament\Resources\Packages\VisaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVisas extends ListRecords
{
    protected static string $resource = VisaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
