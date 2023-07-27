<?php

namespace App\Filament\Resources\ContentManagement\PlaceResource\Pages;

use App\Filament\Resources\ContentManagement\PlaceResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePlace extends CreateRecord
{
    protected static string $resource = PlaceResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
