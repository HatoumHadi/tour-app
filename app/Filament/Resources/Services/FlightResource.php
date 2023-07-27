<?php

namespace App\Filament\Resources\Services;

use App\Filament\Resources\Requests\FlightResource\Pages;
use App\Filament\Resources\Requests\FlightResource\RelationManagers;
use App\Models\Flight;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class FlightResource extends Resource
{
    protected static ?string $model = Flight::class;

    protected static ?string $navigationIcon = 'heroicon-o-paper-airplane';

    protected static ?string $navigationGroup = 'Services';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('airline'),
                Forms\Components\TextInput::make('flight_number'),
                Forms\Components\TextInput::make('departure_airport'),

                Forms\Components\Select::make('departure_city_id')
                    ->label('Departure City')
                    ->relationship('cityDeparture', 'name'),

                Forms\Components\DateTimePicker::make('departure_time'),
                Forms\Components\TextInput::make('arrival_airport'),

                Forms\Components\Select::make('arrival_city_id')
                    ->label('Arrival City')
                    ->relationship('cityArrival', 'name'),

                Forms\Components\DateTimePicker::make('arrival_time'),
                Forms\Components\TextInput::make('duration'),

                Forms\Components\Select::make('aircraft_type')
                    ->options([
                        'icao' => 'ICAO',
                        'easa' => 'EASA'
                    ]),
                Forms\Components\TextInput::make('price'),
                Forms\Components\Select::make('aircraft_type')
                    ->options([
                        'scheduled' => 'Scheduled',
                        'delayed' => 'Delayed',
                        'departed' => 'Departed',
                        'in air' => 'In Air',
                        'landed' => 'Landed',
                        'arrived' => 'Arrived',
                        'cancelled' => 'Cancelled',
                    ]),
                Forms\Components\DatePicker::make('date')
                    ->label('Requested at')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('airline')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('flight_number')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('departure_airport')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('cityDeparture.name')
                    ->label('Departure City')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('departure_time')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('arrival_airport')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('cityArrival.name')
                    ->label('Arrival City')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('arrival_time')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('duration')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('aircraft_type')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('price')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('aircraft_type')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('date')
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
//                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
//                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => \App\Filament\Resources\Services\FlightResource\Pages\ListFlights::route('/'),
            'view' => \App\Filament\Resources\Services\FlightResource\Pages\ViewFlight::route('/{record}'),
        ];
    }
}
