<?php

namespace App\Filament\Resources\Packages\PhotoGalleryResource\Pages;

use App\Filament\Resources\Packages\PhotoGalleryResource;
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
