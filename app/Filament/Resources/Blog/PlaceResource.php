<?php

namespace App\Filament\Resources\Blog;

use App\Filament\Resources\Blog\PlaceResource\Pages;
use App\Filament\Resources\Blog\PlaceResource\RelationManagers;
use App\Models\Place;
use Closure;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class PlaceResource extends Resource
{
    protected static ?string $model = Place::class;

    protected static ?string $navigationIcon = 'heroicon-o-location-marker';

    protected static ?string $navigationGroup = 'Blog';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('country_id')
                    ->relationship('country', 'name')
                    ->reactive()
                    ->required(),
                Forms\Components\Select::make('city_id')
                    ->reactive()
                    ->relationship('city', 'name', function (Builder $query, Closure $get, ?Model $record) {
                        if ($get('country_id')) {
                            return $query->where('country_id', $get('country_id'));
                        }
                        if ($record?->country_id) {
                            return $query->where('country_id', $record->country_id);
                        }
                        return $query;
                    })
                    ->disabled(function (Closure $get, ?Model $record) {
                        return !($get('country_id') || $record?->country_id);
                    })
                    ->required(),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('description')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('city.name'),
                Tables\Columns\TextColumn::make('country.name'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('description'),
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
            'index' => PlaceResource\Pages\ListPlaces::route('/'),
            'create' => PlaceResource\Pages\CreatePlace::route('/create'),
            'edit' => PlaceResource\Pages\EditPlace::route('/{record}/edit'),
        ];
    }
}
