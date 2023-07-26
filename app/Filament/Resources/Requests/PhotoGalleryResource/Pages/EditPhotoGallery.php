<?php

namespace App\Filament\Resources\Requests\PhotoGalleryResource\Pages;

use App\Filament\Resources\Requests\PhotoGalleryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPhotoGallery extends EditRecord
{
    protected static string $resource = PhotoGalleryResource::class;

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
