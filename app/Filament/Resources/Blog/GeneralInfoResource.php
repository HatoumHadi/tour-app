<?php

namespace App\Filament\Resources\Blog;

use App\Filament\Resources\Blog\GeneralInfoResource\Pages;
use App\Filament\Resources\Blog\GeneralInfoResource\RelationManagers;
use App\Models\GeneralInfo;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class GeneralInfoResource extends Resource
{
    protected static ?string $model = GeneralInfo::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';

    protected static ?string $navigationGroup = 'Blog';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('logo')
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(255),
                Forms\Components\TextInput::make('copy_right')
                    ->maxLength(255),
                Forms\Components\TextInput::make('main_color')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('logo'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('copy_right'),
                Tables\Columns\ColorColumn::make('main_color'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
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
            'index' => GeneralInfoResource\Pages\ListGeneralInfos::route('/'),
            'create' => GeneralInfoResource\Pages\CreateGeneralInfo::route('/create'),
            'edit' => GeneralInfoResource\Pages\EditGeneralInfo::route('/{record}/edit'),
        ];
    }
}
