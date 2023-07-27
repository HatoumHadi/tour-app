<?php

namespace App\Filament\Resources\Requests;

use App\Filament\Resources\Requests;
use App\Filament\Resources\Requests\CarRentalResource\RelationManagers;
use App\Filament\Resources\Requests\CommonRelationManager\PhotoGalleryRelationManager;
use App\Models\CarRental;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class CarRentalResource extends Resource
{
    protected static ?string $model = CarRental::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-list';

    protected static ?string $navigationGroup = 'Requests';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->label('Requested by')
                    ->relationship('user', 'name'),
                Forms\Components\Select::make('type')
                    ->options([
                        'sedan',
                        'suv',
                        'coupe',
                        'minivan',
                        'luxury car',
                        'off-road vehicle'
                    ]),
                Forms\Components\TextInput::make('name'),
                Forms\Components\DatePicker::make('start_date'),
                Forms\Components\DatePicker::make('end_date'),
                Forms\Components\TextInput::make('price')
                    ->prefix('$'),
                Forms\Components\DatePicker::make('created_at')
                ->label('Requested at')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Requested by')
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
                Tables\Columns\TextColumn::make('price')
                    ->searchable()
                    ->sortable()
                    ->money()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Requested at')
                    ->dateTime()
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
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
            'index' => Requests\CarRentalResource\Pages\ListCarRentals::route('/'),
            'view' => Requests\CarRentalResource\Pages\ViewCarRental::route('/{record}'),
        ];
    }
}
