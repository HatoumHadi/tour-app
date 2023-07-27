<?php

namespace App\Filament\Resources\ContentManagement\LanguageResource\Pages;

use App\Filament\Resources\ContentManagement\LanguageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Concerns\Translatable;

class ListLanguages extends ListRecords
{
    use Translatable;

    protected static string $resource = LanguageResource::class;

    /**
     * @throws \Exception
     */
    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make()
        ];
    }
}
