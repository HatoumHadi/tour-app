<?php

namespace App\Filament\Resources\Requests\PhotoGalleryResource\Pages;

use App\Filament\Resources\Requests\PhotoGalleryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPhotoGalleries extends ListRecords
{
    protected static string $resource = PhotoGalleryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
