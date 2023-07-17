<?php

namespace App\Filament\Resources\Blog;

use App\Filament\Resources\Blog;
use App\Filament\Resources\Blog\CountryResource\Pages;
use App\Filament\Resources\Blog\CountryResource\RelationManagers;
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

    protected static ?string $navigationGroup = 'Blog';

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
                Forms\Components\Toggle::make('is_visa')
                    ->required(),
                Forms\Components\Toggle::make('is_ticket')
                    ->required(),
                Forms\Components\Toggle::make('is_adventure')
                    ->required(),
                Forms\Components\Toggle::make('is_hotel')
                    ->required(),
                Forms\Components\Toggle::make('is_packages')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('code'),
                Tables\Columns\IconColumn::make('is_visa')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_ticket')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_adventure')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_hotel')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_packages')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('deleted_at')
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Blog\CountryResource\Pages\ListCountries::route('/'),
            'create' => Blog\CountryResource\Pages\CreateCountry::route('/create'),
            'edit' => Blog\CountryResource\Pages\EditCountry::route('/{record}/edit'),
        ];
    }
}
