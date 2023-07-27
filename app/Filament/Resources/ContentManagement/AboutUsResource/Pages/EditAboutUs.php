<?php

namespace App\Filament\Resources\ContentManagement\AboutUsResource\Pages;

use App\Definitions\AboutUsType;
use App\Filament\Resources\ContentManagement\AboutUsResource;
use App\Models\AboutUs;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\Translatable;
use Livewire\TemporaryUploadedFile;

class EditAboutUs extends EditRecord
{
    use Translatable;

    protected static string $resource = AboutUsResource::class;

    protected function getActions(): array
    {
        return $this->record->type === AboutUsType::TEXT ? [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make()
        ] : [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getFormSchema(): array
    {
        return $this->record->type === AboutUsType::TEXT ?
            $this->textForm() :
            ($this->record->type === AboutUsType::BANNER ?
                $this->bannerForm() :
                $this->imageForm()
            );
    }

    private function textForm(): array
    {
        return [
            Textarea::make('value')
                ->visible(fn(AboutUs $record) => $record->type === AboutUsType::TEXT),
            FileUpload::make('icon')
                ->directory('about_us/icons')
                ->visible(fn(AboutUs $record) => $record->icon_enabled)
        ];
    }

    private function bannerForm(): array
    {
        return [
            FileUpload::make('value')
                ->directory('about_us/banners')
                ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file, AboutUs $record): string {
                    return $record->key;
                })
                ->visible(fn(AboutUs $record) => $record->type === AboutUsType::BANNER),
            FileUpload::make('icon')
                ->directory('about_us/icons')
                ->visible(fn(AboutUs $record) => $record->icon_enabled)
        ];
    }

    private function imageForm(): array
    {
        return [
            FileUpload::make('value')
                ->directory('about_us/images')
                ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file, AboutUs $record): string {
                    return $record->key;
                })
                ->visible(fn(AboutUs $record) => $record->type === AboutUsType::IMAGE),
            FileUpload::make('icon')
                ->directory('about_us/icons')
                ->visible(fn(AboutUs $record) => $record->icon_enabled)
        ];
    }
}
