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
            ->columns(6)
            ->schema([
                Forms\Components\Card::make()
                    ->relationship('user')
                    ->columnSpan(6)
                    ->columns(3)
                    ->schema([
                        Forms\Components\TextInput::make('name'),
                        Forms\Components\TextInput::make('email'),
                        Forms\Components\TextInput::make('phone_number'),
                    ]),
                Forms\Components\DatePicker::make('created_at')
                    ->columnSpan(2)
                    ->label('Requested at'),
                Forms\Components\TextInput::make('from')
                    ->columnSpan(2),
                Forms\Components\TextInput::make('to')
                    ->columnSpan(2),
                Forms\Components\DateTimePicker::make('departure_time')
                    ->columnSpan(2),
                Forms\Components\DateTimePicker::make('arrival_time')
                    ->columnSpan(2),
                Forms\Components\Select::make('status')
                    ->columnSpan(2)
                    ->options([
                        'scheduled' => 'Scheduled',
                        'delayed' => 'Delayed',
                        'departed' => 'Departed',
                        'in-air' => 'In air',
                        'landed' => 'Landed',
                        'arrived' => 'Arrived',
                        'cancelled' => 'Cancelled'
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Requested by'),
                Tables\Columns\TextColumn::make('from')
                    ->wrap(),
                Tables\Columns\TextColumn::make('to')
                    ->wrap(),
                Tables\Columns\TextColumn::make('departure_time')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('arrival_time')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('status')
                    ->enum([
                        'scheduled' => 'Scheduled',
                        'delayed' => 'Delayed',
                        'departed' => 'Departed',
                        'in-air' => 'In air',
                        'landed' => 'Landed',
                        'arrived' => 'Arrived',
                        'cancelled' => 'Cancelled'
                    ]),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Requested at')
                    ->dateTime(),
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
