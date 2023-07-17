<?php

namespace App\Filament\Resources\Blog\PlaceResource\Pages;

use App\Filament\Resources\Blog\PlaceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlaces extends ListRecords
{
    protected static string $resource = PlaceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
