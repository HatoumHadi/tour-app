<?php

namespace App\Filament\Resources\Blog\PlaceResource\Pages;

use App\Filament\Resources\Blog\PlaceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPlace extends EditRecord
{
    protected static string $resource = PlaceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }


    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
