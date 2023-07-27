<?php

namespace App\Filament\Resources\UsersAndPermissions\UserResource\Pages;

use App\Filament\Resources\UsersAndPermissions\UserResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
}
