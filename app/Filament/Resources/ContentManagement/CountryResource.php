<?php

namespace App\Filament\Resources\ContentManagement;

use App\Filament\Resources\ContentManagement;
use App\Filament\Resources\ContentManagement\CountryResource\Pages;
use App\Filament\Resources\ContentManagement\CountryResource\RelationManagers;
use App\Filament\Resources\ContentManagement\CountryResource\RelationManagers\CitiesRelationManager;
use App\Models\Country;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class CountryResource extends Resource
{
    protected static ?string $model = Country::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';

    protected static ?string $navigationGroup = 'Content Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('code')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('has  _visa')
                    ->required(),
                Forms\Components\Toggle::make('has_ticket')
                    ->required(),
                Forms\Components\Toggle::make('has_adventure')
                    ->required(),
                Forms\Components\Toggle::make('has_hotel')
                    ->required(),
                Forms\Components\Toggle::make('has_packages')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('code'),
                Tables\Columns\IconColumn::make('has_visa')
                    ->boolean(),
                Tables\Columns\IconColumn::make('has_ticket')
                    ->boolean(),
                Tables\Columns\IconColumn::make('has_adventure')
                    ->boolean(),
                Tables\Columns\IconColumn::make('has_hotel')
                    ->boolean(),
                Tables\Columns\IconColumn::make('has_packages')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
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
            CitiesRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ContentManagement\CountryResource\Pages\ListCountries::route('/'),
            'create' => ContentManagement\CountryResource\Pages\CreateCountry::route('/create'),
            'edit' => ContentManagement\CountryResource\Pages\EditCountry::route('/{record}/edit'),
        ];
    }
}
