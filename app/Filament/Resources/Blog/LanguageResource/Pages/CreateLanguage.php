<?php

namespace App\Filament\Resources\Blog\LanguageResource\Pages;

use App\Filament\Resources\Blog\LanguageResource;
use Filament\Resources\Pages\CreateRecord;

class CreateLanguage extends CreateRecord
{
    protected static string $resource = LanguageResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
