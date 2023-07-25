<?php

namespace App\Filament\Resources\Packages;

use App\Filament\Resources\Packages;
use App\Filament\Resources\Packages\AdventureResource\RelationManagers;
use App\Filament\Resources\Packages\CommonRelationManager\PhotoGalleryRelationManager;
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

    protected static ?string $navigationGroup = 'Packages';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('city_id')
                    ->relationship('city', 'name')
                    ->required(),
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Forms\Components\TextInput::make('name.ar')
                    ->label('Arabic Name')
                    ->maxLength(255),
                Forms\Components\TextInput::make('name.en')
                    ->label('English Name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description.ar')
                    ->label('Arabic Description')
                    ->maxLength(255),
                Forms\Components\Textarea::make('description.en')
                    ->label('English Description')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('price')
                    ->required(),
                Forms\Components\TextInput::make('duration')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('city.name')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('user.name')
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
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('duration')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
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
            'index' => Packages\AdventureResource\Pages\ListAdventures::route('/'),
            'create' => Packages\AdventureResource\Pages\CreateAdventure::route('/create'),
            'edit' => Packages\AdventureResource\Pages\EditAdventure::route('/{record}/edit'),
        ];
    }
}
