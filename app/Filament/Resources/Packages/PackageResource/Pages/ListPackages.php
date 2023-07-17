<?php

namespace App\Filament\Resources\Packages\PackageResource\Pages;

use App\Filament\Resources\Packages\PackageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPackages extends ListRecords
{
    protected static string $resource = PackageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
