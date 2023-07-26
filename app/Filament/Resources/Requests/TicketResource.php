<?php

namespace App\Filament\Resources\Requests;

use App\Filament\Resources\Requests;
use App\Filament\Resources\Requests\CommonRelationManager\PhotoGalleryRelationManager;
use App\Models\Ticket;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class TicketResource extends Resource
{
    protected static ?string $model = Ticket::class;

    protected static ?string $navigationIcon = 'heroicon-o-ticket';

    protected static ?string $navigationGroup = 'Requests';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name'),
                Forms\Components\TextInput::make('name'),
                Forms\Components\TextInput::make('phone')
                    ->tel(),
                Forms\Components\TextInput::make('email')
                    ->email(),
                Forms\Components\DatePicker::make('departure_date'),
                Forms\Components\DatePicker::make('arrival_date'),
                Forms\Components\TextInput::make('departure_from'),
                Forms\Components\TextInput::make('arrival_to'),
                Forms\Components\TextInput::make('airline'),
                Forms\Components\TextInput::make('flight_number'),
                Forms\Components\TextInput::make('seat_number'),
                Forms\Components\TextInput::make('price')
                    ->prefix('$')
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
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('departure_date')
                    ->date()
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('arrival_date')
                    ->date()
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('departure_from')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('arrival_to')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('airline')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('flight_number')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('seat_number')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('price')
                    ->searchable()
                    ->money()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Requested at')
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
            'index' => Requests\TicketResource\Pages\ListTickets::route('/'),
            'view' => Requests\TicketResource\Pages\ViewTicket::route('/{record}'),
        ];
    }
}
