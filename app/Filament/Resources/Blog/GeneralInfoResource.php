<?php

namespace App\Filament\Resources\Blog;

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
            ->columns(2)
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->columnSpan(2)
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('logo')
                    ->columnSpan(2)
                    ->directory('general_infos')
                    ->image(),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(255),
                Forms\Components\TextInput::make('copy_right')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\ImageColumn::make('logo'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('copy_right'),
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
