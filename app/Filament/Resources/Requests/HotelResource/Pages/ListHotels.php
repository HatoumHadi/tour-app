<?php

namespace App\Filament\Resources\Requests\HotelResource\Pages;

use App\Filament\Resources\Requests\HotelResource;
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
