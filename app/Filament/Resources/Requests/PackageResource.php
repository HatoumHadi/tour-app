<?php

namespace App\Filament\Resources\Requests;

use App\Filament\Resources\Requests\CommonRelationManager\PhotoGalleryRelationManager;
use App\Models\Package;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Actions\ViewAction;

class PackageResource extends Resource
{
    protected static ?string $model = Package::class;

    protected static ?string $navigationIcon = 'heroicon-o-inbox-in';

    protected static ?string $navigationGroup = 'Requests';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name'),
                Forms\Components\TextInput::make('title'),
                Forms\Components\TextInput::make('description'),
                Forms\Components\DatePicker::make('date'),
                Forms\Components\TextInput::make('duration'),
                Forms\Components\TextInput::make('price')
                    ->prefix('$'),
                Forms\Components\Select::make('type')
                    ->options([
                        'basic' => 'Basic',
                        'standard' => 'Standard',
                        'premium' => 'Premium'
                    ]),
                Forms\Components\DatePicker::make('created_at')
                    ->label('Requested at')
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
                    ->date()
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('duration')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('type')
                    ->enum([
                        'basic' => 'Basic',
                        'standard' => 'Standard',
                        'premium' => 'Premium'
                    ])
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
                ViewAction::make()
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
            'index' => PackageResource\Pages\ListPackages::route('/'),
            'view' => PackageResource\Pages\ViewPackage::route('/{record}'),
        ];
    }
}
