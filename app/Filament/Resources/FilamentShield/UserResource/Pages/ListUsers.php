<?php

namespace App\Filament\Resources\FilamentShield\UserResource\Pages;

use App\Filament\Resources\FilamentShield\UserResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
