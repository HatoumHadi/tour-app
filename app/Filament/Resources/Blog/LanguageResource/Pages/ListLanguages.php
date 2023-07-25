<?php

namespace App\Filament\Resources\Blog\LanguageResource\Pages;

use App\Filament\Resources\Blog\LanguageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLanguages extends ListRecords
{
    protected static string $resource = LanguageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
