<?php

namespace App\Filament\Resources\ContentManagement\ContactResource\Pages;

use App\Filament\Resources\ContentManagement\ContactResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateContact extends CreateRecord
{
    protected static string $resource = ContactResource::class;
}
