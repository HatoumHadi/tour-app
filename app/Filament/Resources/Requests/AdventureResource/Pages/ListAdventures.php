<?php

namespace App\Filament\Resources\Requests\AdventureResource\Pages;

use App\Filament\Resources\Requests\AdventureResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAdventures extends ListRecords
{
    protected static string $resource = AdventureResource::class;
}
