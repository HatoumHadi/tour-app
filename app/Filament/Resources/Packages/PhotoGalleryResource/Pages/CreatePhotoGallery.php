<?php

namespace App\Filament\Resources\Packages\PhotoGalleryResource\Pages;

use App\Filament\Resources\Packages\PhotoGalleryResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePhotoGallery extends CreateRecord
{
    protected static string $resource = PhotoGalleryResource::class;


    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
