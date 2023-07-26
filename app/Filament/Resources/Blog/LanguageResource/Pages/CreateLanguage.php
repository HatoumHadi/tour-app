<?php

namespace App\Filament\Resources\Blog\LanguageResource\Pages;

use App\Filament\Resources\Blog\LanguageResource;
use Filament\Pages\Actions\LocaleSwitcher;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\Translatable;

class CreateLanguage extends CreateRecord
{
    use Translatable;

    protected static string $resource = LanguageResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    /**
     * @throws \Exception
     */
    protected function getActions(): array
    {
        return [
            LocaleSwitcher::make()
        ];
    }
}
