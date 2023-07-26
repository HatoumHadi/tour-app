<?php

namespace App\Filament\Resources\Requests;

use App\Filament\Resources\Requests\AdventureResource\Pages\ListAdventures;
use App\Filament\Resources\Requests\AdventureResource\Pages\ViewAdventure;
use App\Filament\Resources\Requests\CommonRelationManager\PhotoGalleryRelationManager;
use App\Models\Adventure;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class AdventureResource extends Resource
{
    protected static ?string $model = Adventure::class;

    protected static ?string $navigationIcon = 'heroicon-o-view-grid-add';

    protected static ?string $navigationGroup = 'Requests';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(6)
            ->schema([
                Forms\Components\Select::make('city_id')
                    ->columnSpan(3)
                    ->relationship('city', 'name'),
                Forms\Components\Select::make('user_id')
                    ->columnSpan(3)
                    ->label('Requested by')
                    ->relationship('user', 'name'),
                Forms\Components\TextInput::make('name')
                    ->columnSpan(6)
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->columnSpan(6),
                Forms\Components\TextInput::make('price')
                    ->columnSpan(2)
                    ->numeric()
                    ->prefix('$'),
                Forms\Components\TextInput::make('duration')
                    ->columnSpan(2)
                    ->numeric(),
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
                Tables\Columns\TextColumn::make('city.name')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('description')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('price')
                    ->searchable()
                    ->money()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('duration')
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
            'index' => ListAdventures::route('/'),
            'view' => ViewAdventure::route('/{record}'),
        ];
    }
}
