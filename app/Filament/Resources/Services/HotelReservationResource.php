<?php

namespace App\Filament\Resources\Services;

use App\Filament\Resources\Requests\HotelReservationResource\RelationManagers;
use App\Filament\Resources\Services\HotelReservationResource\Pages\ListHotelReservations;
use App\Filament\Resources\Services\HotelReservationResource\Pages\ViewHotelReservation;
use App\Models\HotelReservation;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class HotelReservationResource extends Resource
{
    protected static ?string $model = HotelReservation::class;

    protected static ?string $navigationIcon = 'heroicon-o-fire';

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
                Forms\Components\TextInput::make('hotel_name')
                    ->columnSpan(2),
                Forms\Components\DatePicker::make('check_in')
                    ->columnSpan(2),
                Forms\Components\DatePicker::make('check_out')
                    ->columnSpan(2),
                Forms\Components\TextInput::make('number_of_guests')
                    ->columnSpan(2),
                Forms\Components\Select::make('status')
                    ->columnSpan(2)
                    ->options([
                        'wait_list' => 'Wait list',
                        'cancelled' => 'Cancelled',
                        'confirmed' => 'Confirmed'
                    ]),
                Forms\Components\DatePicker::make('created_at')
                    ->columnSpan(2)
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
                Tables\Columns\TextColumn::make('hotel_name'),
                Tables\Columns\TextColumn::make('check_in')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('check_out')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Requested by')
                    ->dateTime()
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make()
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
            'index' => ListHotelReservations::route('/'),
            'view' => ViewHotelReservation::route('/{record}'),
        ];
    }
}
