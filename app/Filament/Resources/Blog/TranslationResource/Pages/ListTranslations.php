<?php

namespace App\Filament\Resources\Blog\TranslationResource\Pages;

use App\Filament\Resources\Blog\TranslationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Concerns\Translatable;

class ListTranslations extends ListRecords
{
    use Translatable;

    protected static string $resource = TranslationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make()
        ];
    }
}
