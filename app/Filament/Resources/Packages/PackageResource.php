<?php

namespace App\Filament\Resources\Packages;

use App\Filament\Resources\Packages\CommonRelationManager\PhotoGalleryRelationManager;
use App\Filament\Resources\Packages\PackageResource\Pages;
use App\Filament\Resources\Packages\PackageResource\RelationManagers;
use App\Models\Package;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class PackageResource extends Resource
{
    protected static ?string $model = Package::class;

    protected static ?string $navigationIcon = 'heroicon-o-inbox-in';

    protected static ?string $navigationGroup = 'Packages';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title.ar')
                    ->label('Arabic Title')
                    ->maxLength(255),
                Forms\Components\TextInput::make('title.en')
                    ->label('English Title')
                    ->maxLength(255)
                    ->required(),
                Forms\Components\TextInput::make('description.ar')
                    ->label('Arabic Description')
                    ->maxLength(255),
                Forms\Components\TextInput::make('description.en')
                    ->label('English Description')
                    ->maxLength(255)
                    ->required(),
                Forms\Components\DatePicker::make('date')
                    ->required(),
                Forms\Components\TextInput::make('duration')
                    ->required(),
                Forms\Components\TextInput::make('price')
                    ->required(),
                Forms\Components\Select::make('type')
                    ->options([
                        'basic' => 'Basic',
                        'standard' => 'Standard',
                        'premium' => 'Premium'
                    ])
                    ->required(),
                Forms\Components\Toggle::make('is_active')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('description')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('date')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('duration')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('price')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('type')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
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
            PhotoGalleryRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => PackageResource\Pages\ListPackages::route('/'),
            'create' => PackageResource\Pages\CreatePackage::route('/create'),
            'edit' => PackageResource\Pages\EditPackage::route('/{record}/edit'),
        ];
    }
}
