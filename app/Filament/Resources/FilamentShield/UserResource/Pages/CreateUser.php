<?php

namespace App\Filament\Resources\FilamentShield\UserResource\Pages;

use App\Filament\Resources\FilamentShield\UserResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
}
