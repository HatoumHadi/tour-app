<?php

namespace App\Filament\Resources\ContentManagement\TranslationResource\Pages;

use App\Filament\Resources\ContentManagement\TranslationResource;
use Filament\Pages\Actions\LocaleSwitcher;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\Translatable;

class CreateTranslation extends CreateRecord
{
    use Translatable;

    protected static string $resource = TranslationResource::class;

    protected function getActions(): array
    {
        return [
            LocaleSwitcher::make()
        ];
    }
}
