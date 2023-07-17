<?php

namespace App\Filament\Resources\Packages\HotelResource\Pages;

use App\Filament\Resources\Packages\HotelResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHotels extends ListRecords
{
    protected static string $resource = HotelResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
