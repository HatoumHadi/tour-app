<?php

namespace App\Filament\Resources\ContentManagement;

use App\Definitions\AboutUsType;
use App\Filament\Resources\ContentManagement\AboutUsResource\Pages;
use App\Models\AboutUs;
use App\Models\Language;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Model;
use Livewire\TemporaryUploadedFile;

class AboutUsResource extends Resource
{
    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return Language::pluck('code')->toArray();
    }

    protected static ?string $model = AboutUs::class;

    protected static ?string $slug = 'about-us';

    protected static ?string $navigationGroup = 'Content Management';

    protected static ?string $navigationLabel = 'About Us';
    protected static ?string $pluralLabel = 'About Us';

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([

            ]);
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('key'),
                Tables\Columns\TextColumn::make('value')
                    ->wrap()
                    ->label('Value')
                    ->extraAttributes([
                        'class' => 'ml-4'
                    ])
                    ->view('filament.components.about-us-value'),

                Tables\Columns\ImageColumn::make('icon')
                    ->extraAttributes(function (AboutUs $record) {
                        return $record->icon_enabled ?
                            [
                                'class' => 'bg-white'
                            ] :
                            [];
                    })
                    ->getStateUsing(function (AboutUs $record) {
                        return $record->icon_enabled ?
                            $record->icon :
                            null;
                    })
                    ->width('100%')
                    ->height('100%')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAboutUs::route('/'),
            'edit' => Pages\EditAboutUs::route('/{record}/edit'),
        ];
    }
}
