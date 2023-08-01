<?php

namespace App\Filament\Resources\ContentManagement;

use App\Filament\Resources\ContentManagement\TranslationResource\Pages\CreateTranslation;
use App\Filament\Resources\ContentManagement\TranslationResource\Pages\EditTranslation;
use App\Filament\Resources\ContentManagement\TranslationResource\Pages\ListTranslations;
use App\Models\Language;
use App\Models\LanguageLine;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class TranslationResource extends Resource
{
    use Translatable;

    protected static ?string $model = LanguageLine::class;
    protected static ?string $navigationGroup = 'Content Management';
    protected static ?string $label = 'Translation';
    protected static ?string $navigationLabel = 'Translations';
    protected static ?string $navigationIcon = 'heroicon-o-cube-transparent';

    public static function getTranslatableLocales(): array
    {
        return Language::pluck('code')->toArray();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('group'),
                TextInput::make('key'),
                TextInput::make('text')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('group'),
                Tables\Columns\TextColumn::make('key'),
                Tables\Columns\TextColumn::make('text')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
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
            'index' => ListTranslations::route('/'),
            'create' => CreateTranslation::route('/create'),
            'edit' => EditTranslation::route('/{record}/edit'),
        ];
    }
}
