<?php

namespace App\Filament\Resources\Packages;

use App\Filament\Resources\Packages;
use App\Filament\Resources\Packages\TransportationResource\Pages;
use App\Filament\Resources\Packages\TransportationResource\RelationManagers;
use App\Models\Adventure;
use App\Models\PhotoGallery;
use App\Models\Transportation;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class TransportationResource extends Resource
{
    protected static ?string $model = Transportation::class;

    protected static ?string $navigationIcon = 'heroicon-o-cash';

    protected static ?string $navigationGroup = 'Packages';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Forms\Components\Select::make('photo_gallery_id')
                    ->options(PhotoGallery::where('tag',Transportation::class)->pluck('media','id'))
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('type')
                    ->maxLength(255),
                Forms\Components\TextInput::make('company')
                    ->maxLength(255),
                Forms\Components\DateTimePicker::make('departure_date'),
                Forms\Components\DateTimePicker::make('return_date'),
                Forms\Components\TextInput::make('from')
                    ->maxLength(255),
                Forms\Components\TextInput::make('to')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name'),
                Tables\Columns\ImageColumn::make('photoGallery.media'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\TextColumn::make('company'),
                Tables\Columns\TextColumn::make('departure_date')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('return_date')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('from'),
                Tables\Columns\TextColumn::make('to'),
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
            'index' => Packages\TransportationResource\Pages\ListTransportations::route('/'),
            'create' => Packages\TransportationResource\Pages\CreateTransportation::route('/create'),
            'edit' => Packages\TransportationResource\Pages\EditTransportation::route('/{record}/edit'),
        ];
    }
}
