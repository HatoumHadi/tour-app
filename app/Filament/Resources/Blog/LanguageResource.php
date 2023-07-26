<?php

namespace App\Filament\Resources\Blog;

use App\Models\Language;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class LanguageResource extends Resource
{
    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return Language::pluck('code')->toArray();
    }

    protected static ?string $model = Language::class;

    protected static ?string $navigationIcon = 'heroicon-o-translate';

    protected static ?string $navigationGroup = 'Blog';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required(),
                TextInput::make('code')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('code'),
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
            'index' => LanguageResource\Pages\ListLanguages::route('/'),
            'create' => LanguageResource\Pages\CreateLanguage::route('/create'),
            'edit' => LanguageResource\Pages\EditLanguage::route('/{record}/edit'),
        ];
    }
}
