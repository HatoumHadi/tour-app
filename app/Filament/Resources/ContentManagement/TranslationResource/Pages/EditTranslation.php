<?php

namespace App\Filament\Resources\ContentManagement\TranslationResource\Pages;

use App\Filament\Resources\ContentManagement\TranslationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\Translatable;

class EditTranslation extends EditRecord
{
    use Translatable;

    protected static string $resource = TranslationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
