<?php

namespace App\Filament\Resources\Requests;

use App\Filament\Resources\Requests;
use App\Filament\Resources\Requests\HotelReservationResource\RelationManagers;
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

    protected static ?string $navigationGroup = 'Requests';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('check_in'),
                Forms\Components\DatePicker::make('check_out'),
                Forms\Components\TextInput::make('number_of_guests'),
                Forms\Components\Select::make('status')
                    ->options([
                        'waitlist' => 'Wait list',
                        'cancelled' => 'Cancelled',
                        'confirmed' => 'Confirmed'
                    ]),
                Forms\Components\Select::make('user_id')
                    ->label('Requested by')
                    ->relationship('user', 'name'),
                Forms\Components\Select::make('hotel_id')
                    ->relationship('hotel', 'name'),
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
                Tables\Columns\TextColumn::make('check_in')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('check_out')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('number_of_guests')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('status')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('hotel.name')
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
            'index' => Requests\HotelReservationResource\Pages\ListHotelReservations::route('/'),
            'view' => Requests\HotelReservationResource\Pages\ViewHotelReservation::route('/{record}'),
        ];
    }
}
