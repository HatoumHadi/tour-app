<?php

namespace App\Filament\Resources\Services;

use App\Filament\Resources\Requests\CommonRelationManager\PhotoGalleryRelationManager;
use App\Filament\Resources\Requests\VisaResource\RelationManagers;
use App\Models\Visa;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class VisaResource extends Resource
{
    protected static ?string $model = Visa::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Services';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->label('Requested by')
                    ->relationship('user', 'name'),
                Forms\Components\TextInput::make('name'),
                Forms\Components\TextInput::make('phone'),
                Forms\Components\DatePicker::make('application_date'),
                Forms\Components\Select::make('status')
                    ->options([
                        'valid' => 'Valid',
                        'expired' => 'Expired',
                        'approved' => 'Approved',
                        'denied' => 'Denied',
                        'pending' => 'Pending',
                        'revoked' => 'Revoked',
                        'overstay' => 'Overstay'
                    ]),
                Forms\Components\DatePicker::make('created_at')
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

                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('phone')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('description')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('application_date')
                    ->date()
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
            PhotoGalleryRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => \App\Filament\Resources\Services\VisaResource\Pages\ListVisas::route('/'),
            'view' => \App\Filament\Resources\Services\VisaResource\Pages\ViewVisa::route('/{record}'),
        ];
    }
}
