<?php

namespace App\Filament\Resources\Packages;

use App\Filament\Resources\Packages\VisaResource\Pages;
use App\Filament\Resources\Packages\VisaResource\RelationManagers;
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

    protected static ?string $navigationGroup = 'Packages';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('application_date')
                    ->required(),
                Forms\Components\Select::make('status')
                    ->options([
                        'valid' => 'Valid',
                        'expired' => 'Expired',
                        'approved' => 'Approved',
                        'denied' => 'Denied',
                        'pending' => 'Pending',
                        'revoked' => 'Revoked',
                        'overstay' => 'Overstay'
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => VisaResource\Pages\ListVisas::route('/'),
            'create' => VisaResource\Pages\CreateVisa::route('/create'),
            'edit' => VisaResource\Pages\EditVisa::route('/{record}/edit'),
        ];
    }
}
