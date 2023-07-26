<?php

namespace App\Filament\Resources\Requests;

use App\Filament\Resources\Requests;
use App\Filament\Resources\Requests\CommonRelationManager\PhotoGalleryRelationManager;
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

    protected static ?string $navigationGroup = 'Requests';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->label('Requested by')
                    ->relationship('user', 'name'),
                Forms\Components\TextInput::make('name'),
                Forms\Components\TextInput::make('type'),
                Forms\Components\TextInput::make('company'),
                Forms\Components\DateTimePicker::make('departure_date'),
                Forms\Components\DateTimePicker::make('return_date'),
                Forms\Components\TextInput::make('from'),
                Forms\Components\TextInput::make('to'),
                Forms\Components\DatePicker::make('created_at')
                ->label('Requested at')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->searchable()
                    ->label('Requested by')
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('type')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('company')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('departure_date')
                    ->dateTime()
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('return_date')
                    ->dateTime()
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('from')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('to')
                    ->searchable()
                    ->sortable()
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
            'index' => Requests\TransportationResource\Pages\ListTransportations::route('/'),
            'view' => Requests\TransportationResource\Pages\ViewTransportation::route('/{record}'),
        ];
    }
}
