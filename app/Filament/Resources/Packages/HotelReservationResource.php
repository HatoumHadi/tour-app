<?php

namespace App\Filament\Resources\Packages;

use App\Filament\Resources\Packages\HotelReservationResource\Pages;
use App\Filament\Resources\Packages\HotelReservationResource\RelationManagers;
use App\Filament\Resources\Packages;
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

    protected static ?string $navigationGroup = 'Packages';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('check_in')
                    ->required(),
                Forms\Components\DatePicker::make('check_out')
                    ->required(),
                Forms\Components\TextInput::make('number_of_guests')
                    ->required(),
                Forms\Components\Select::make('status')
                    ->options([
                        'waitlist' => 'Waitlist',
                        'cancelled' => 'Cancelled',
                        'confirmed' => 'Confirmed'
                    ])
                    ->required(),
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Forms\Components\Select::make('hotel_id')
                    ->relationship('hotel', 'name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
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

                Tables\Columns\TextColumn::make('user.name')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('hotel.name')
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Packages\HotelReservationResource\Pages\ListHotelReservations::route('/'),
            'create' => Packages\HotelReservationResource\Pages\CreateHotelReservation::route('/create'),
            'edit' => Packages\HotelReservationResource\Pages\EditHotelReservation::route('/{record}/edit'),
        ];
    }
}
