<?php

namespace App\Filament\Resources\Blog\LanguageResource\Pages;

use App\Filament\Resources\Blog\LanguageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\Translatable;

class EditLanguage extends EditRecord
{
    use Translatable;

    protected static string $resource = LanguageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make()
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
