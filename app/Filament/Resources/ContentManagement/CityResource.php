<?php

namespace App\Filament\Resources\ContentManagement;

use App\Filament\Resources\ContentManagement;
use App\Filament\Resources\ContentManagement\CityResource\Pages;
use App\Filament\Resources\ContentManagement\CityResource\RelationManagers;
use App\Filament\Resources\ContentManagement\CountryResource\RelationManagers\CitiesRelationManager;
use App\Models\City;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class CityResource extends Resource
{
    protected static ?string $model = City::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe';

    protected static ?string $navigationGroup = 'Content Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('country_id')
                    ->relationship('country', 'name')
                    ->hidden(function ($livewire) {
                        return $livewire instanceof CitiesRelationManager;
                    })
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->columnSpan(function ($livewire) {
                        if ($livewire instanceof CitiesRelationManager) {
                            return 2;
                        }
                        return 1;
                    })
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('country.name')
                ->hidden(function ($livewire) {
                    return $livewire instanceof CitiesRelationManager;
                }),
                Tables\Columns\TextColumn::make('name'),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ContentManagement\CityResource\Pages\ListCities::route('/'),
            'create' => ContentManagement\CityResource\Pages\CreateCity::route('/create'),
            'edit' => ContentManagement\CityResource\Pages\EditCity::route('/{record}/edit'),
        ];
    }
}
