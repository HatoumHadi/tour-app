<?php

namespace App\Filament\Resources\UsersAndPermissions\UserResource\Pages;

use App\Filament\Resources\UsersAndPermissions\UserResource;
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
