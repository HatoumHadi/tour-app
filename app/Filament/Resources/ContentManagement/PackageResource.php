<?php

namespace App\Filament\Resources\ContentManagement;

use App\Filament\Resources\ContentManagement\PackageResource\Pages\CreatePackage;
use App\Filament\Resources\ContentManagement\PackageResource\Pages\EditPackage;
use App\Filament\Resources\ContentManagement\PackageResource\Pages\ListPackages;
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

    protected static ?string $navigationGroup = 'Content Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
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
                    ->dateTime()
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPackages::route('/'),
            'edit' => EditPackage::route('/{record}/edit'),
            'create' => CreatePackage::route('/create'),
        ];
    }
}
