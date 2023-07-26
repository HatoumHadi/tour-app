<?php

namespace App\Filament\Resources\Requests\PhotoGalleryResource\Pages;

use App\Filament\Resources\Requests\PhotoGalleryResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreatePhotoGallery extends CreateRecord
{
    protected static string $resource = PhotoGalleryResource::class;


    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function handleRecordCreation(array $data): Model
    {
        $val = null;

        foreach ($data['media'] as $key => $item) {

            $val = static::getModel()::create([
                'tag_type' => $data['tag_type'],
                'tag_id' => $data['tag_id'],
                'media' => $item,
            ]);

        }
        return $val;
    }

}
