<?php

namespace App\Filament\Resources\Packages;

use App\Filament\Resources\Packages\CarRentalResource\Pages;
use App\Filament\Resources\Packages\CarRentalResource\RelationManagers;
use App\Filament\Resources\Packages;
use App\Filament\Resources\Packages\CommonRelationManager\PhotoGalleryRelationManager;
use App\Models\Adventure;
use App\Models\CarRental;
use App\Models\PhotoGallery;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class CarRentalResource extends Resource
{
    protected static ?string $model = CarRental::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-list';

    protected static ?string $navigationGroup = 'Packages';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Forms\Components\Select::make('type')
                    ->options([
                        'sedan',
                        'suv',
                        'coupe',
                        'minivan',
                        'luxury car',
                        'off-road vehicle'
                    ])
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('start_date')
                    ->required(),
                Forms\Components\DatePicker::make('end_date')
                    ->required(),
                Forms\Components\TextInput::make('num_of_days')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('type')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('start_date')
                    ->date()
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('end_date')
                    ->date()
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('num_of_days')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('price')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
//
//                Tables\Columns\TextColumn::make('updated_at')
//                    ->dateTime(),
//                Tables\Columns\TextColumn::make('deleted_at')
//                    ->dateTime(),
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
            PhotoGalleryRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Packages\CarRentalResource\Pages\ListCarRentals::route('/'),
            'create' => Packages\CarRentalResource\Pages\CreateCarRental::route('/create'),
            'edit' => Packages\CarRentalResource\Pages\EditCarRental::route('/{record}/edit'),
        ];
    }
}
